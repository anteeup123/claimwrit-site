document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-include]').forEach(async el => {
    const url = el.getAttribute('data-include');
    try {
      const res  = await fetch(url);
      const html = await res.text();
      el.outerHTML = html;
    } catch (err) {
      console.error('Include failed:', url, err);
    }
  });
});