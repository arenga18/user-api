const request = require("supertest");
const baseUrl = "http://127.0.0.1:8000/api";

describe("User API", () => {
    let userId = null;

    it("should create a user", async () => {
        const res = await request(baseUrl).post("/users").send({
            name: "John Doe",
            email: "johndoe@example.com",
            age: 25,
        });
        expect(res.statusCode).toBe(201);
        userId = res.body.id;
    });

    it("should get all users", async () => {
        const res = await request(baseUrl).get("/users");
        expect(res.statusCode).toBe(200);
    });

    it("should get user by id", async () => {
        const res = await request(baseUrl).get(`/users/${userId}`);
        expect(res.statusCode).toBe(200);
    });

    it("should update user", async () => {
        const res = await request(baseUrl)
            .put(`/users/${userId}`)
            .send({ age: 30 });
        expect(res.statusCode).toBe(200);
    });

    it("should delete user", async () => {
        const res = await request(baseUrl).delete(`/users/${userId}`);
        expect(res.statusCode).toBe(200);
    });
});
