import type { AuthToken } from "@/models";

export default defineNuxtRouteMiddleware(() => {
  const oAuthToken = useCookie<AuthToken>("oAuthToken");

  if (!oAuthToken.value) {
    const { redirectUrl } = useRuntimeConfig().public.auth;
    return navigateTo(redirectUrl, { external: true });
  }
});