import { defineBackendRequestHandler } from "~/server/util/backendRequestHandler";

export default defineBackendRequestHandler({
    route: "/products",
    method: "GET",
})