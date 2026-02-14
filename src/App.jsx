import { useState } from "react";
import { ThemeProvider } from "./context/ThemeContext";
import AppRouter from "./router/AppRouter.jsx";

export default function App() {
  return (
    <ThemeProvider>
      <AppRouter />
    </ThemeProvider>
  );
}
