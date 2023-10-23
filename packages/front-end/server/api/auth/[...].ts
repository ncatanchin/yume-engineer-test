import { AuthToken } from "models";

export default defineEventHandler(async (event) => {
  const { auth } = useRuntimeConfig().public;
  const { code } = getQuery(event);

  if (!code) {
    throw createError({
      statusCode: 500,
      statusMessage: "No code proved by laravel",
    });
  }

  const formData = new FormData();

  formData.append("grant_type", "authorization_code");
  formData.append("client_id", auth.clientId);
  formData.append("client_secret", auth.clientSecret);
  formData.append("redirect_uri", auth.callbackUrl);
  formData.append("code", code.toString());

  const res = await $fetch<AuthToken>(auth.tokenUrl, {
    method: "POST",
    body: formData,
  });

  setCookie(event, "oAuthToken", JSON.stringify(res));

  return await sendRedirect(event, "/", 302);
});