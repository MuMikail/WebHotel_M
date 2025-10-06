import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react' // kalau kamu pakai React

export default defineConfig({
  plugins: [react()],
  build: {
    outDir: 'dist', // hasil build ke folder dist
    emptyOutDir: true // bersihin folder dist sebelum build
  }
})
