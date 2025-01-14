document.getElementById('language-selector').addEventListener('change', function () {
  const selectedLanguage = this.value; 
  document.querySelectorAll('[data-text-en]').forEach((element) => {
    const text = element.getAttribute(`data-text-${selectedLanguage}`);
    if (text) {
      element.textContent = text;
    }
  });

  document.querySelectorAll('[data-placeholder-en]').forEach((input) => {
    const placeholder = input.getAttribute(`data-placeholder-${selectedLanguage}`);
    if (placeholder) {
      input.setAttribute('placeholder', placeholder);
    }
  });
});
