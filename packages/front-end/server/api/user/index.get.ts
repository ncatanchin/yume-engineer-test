import { defineBackendRequestHandler } from "~/server/util/backendRequestHandler";

export default defineBackendRequestHandler({
    route: "/user",
    method: "GET",
})