document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("form");
  const submitBtn = form.getElementsByClassName("submitButton");
  const radios = form.querySelectorAll("input[type='radio']");

  const questionNames = [...new Set([...radios].map(r => r.name))];

  submitBtn.disabled = true;

  const checkAllAnswered = () => {
    const allAnswered = questionNames.every(name => {
      const group = form.querySelectorAll(`input[name='${name}']`);
      return [...group].some(radio => radio.checked);
    });

    submitBtn.disabled = !allAnswered;
  };

  radios.forEach(radio => {
    radio.addEventListener("change", checkAllAnswered);
  });

  checkAllAnswered();

  form.addEventListener("submit", (event) => {
    if (submitBtn.disabled) {
      event.preventDefault();
      alert("Zaznacz odpowiedź w każdym pytaniu!");
    }
  });
});