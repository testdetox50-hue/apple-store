import pytest
from fastapi.testclient import TestClient

import main

client = TestClient(main.app)


@pytest.fixture(autouse=True)
def clear_todos():
    main.todos.clear()


def test_create_and_list():
    res = client.post("/api/todos", json={"title": "Buy milk"})
    assert res.status_code == 201
    assert res.json()["title"] == "Buy milk"
    assert len(client.get("/api/todos").json()) == 1


def test_empty_title_rejected():
    res = client.post("/api/todos", json={"title": "   "})
    assert res.status_code == 400


def test_long_title_rejected():
    res = client.post("/api/todos", json={"title": "x" * 201})
    assert res.status_code == 400


def test_toggle_and_delete():
    todo = client.post("/api/todos", json={"title": "Walk dog"}).json()
    res = client.patch(f"/api/todos/{todo['id']}", json={"done": True})
    assert res.json()["done"] is True
    assert client.delete(f"/api/todos/{todo['id']}").status_code == 204
    assert client.delete(f"/api/todos/{todo['id']}").status_code == 404


def test_stats():
    client.post("/api/todos", json={"title": "a"})
    todo = client.post("/api/todos", json={"title": "b"}).json()
    client.patch(f"/api/todos/{todo['id']}", json={"done": True})
    assert client.get("/api/stats").json() == {"total": 2, "done": 1, "remaining": 1}
