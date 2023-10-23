import { AuthToken } from "~/models";

export default defineEventHandler((event) => {
  const { oAuthToken } = parseCookies(event);
  if (oAuthToken) {
    const token: AuthToken = JSON.parse(oAuthToken);
    event.context.auth = `${token.token_type} ${token.access_token}`;
  }
});