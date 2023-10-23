import type { UseFetchOptions } from "nuxt/app";
import { defu } from "defu";

export function useApi<T>(url: string, options: UseFetchOptions<T> = {}) {
  const config = useRuntimeConfig();

  const defaults: UseFetchOptions<T> = {
    onResponseError(_ctx) {
      window.location.href = config.public.auth.redirectUrl;
    },
  };

  const params = defu(options, defaults);

  return useFetch(url, params);
}
