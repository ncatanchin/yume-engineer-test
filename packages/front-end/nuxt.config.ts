const urls = {
  public: "http://localhost:8080",
  private: "http://api:8080",
};
const auth = {
  clientId: process.env.CLIENT_ID,
  clientSecret: process.env.CLIENT_SECRET,
  callbackUrl: "http://localhost:3000/api/auth/callback"
}
export default defineNuxtConfig({
  devtools: {
    enabled: false,

    timeline: {
      enabled: true,
    },
  },
  css: ['~/assets/css/main.css'],
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
  modules: [
    '@pinia/nuxt',
  ],  
  imports: {
    dirs: ["./stores"],
  },
  pinia: {
    autoImports: ["defineStore"],
  },
  runtimeConfig: {
    api: "http://api:8080/api",
    public: {
      auth: {
        tokenUrl: `${urls.private}/oauth/token`,
        redirectUrl: `${urls.public}/oauth/authorize?client_id=${auth.clientId}&redirect_uri=${auth.callbackUrl}&response_type=code`,
        ...auth
      }
    },
  },
})