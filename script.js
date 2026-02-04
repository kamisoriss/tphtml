function darkFunction() {
  const html = document.documentElement; // toggle on <html>
  html.classList.toggle('dark_mode');
  try {
    localStorage.setItem('dark_mode_enabled', html.classList.contains('dark_mode') ? '1' : '0');
  } catch (e) {}
}

// Restore preference on load across pages
(function restorePreference(){
  try {
    const saved = localStorage.getItem('dark_mode_enabled');
    if (saved === '1') {
      document.addEventListener('DOMContentLoaded', () => {
        document.documentElement.classList.add('dark_mode');
      });
    }
  } catch (e) {}
})();