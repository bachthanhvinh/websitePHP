document.querySelector(".form-login").addEventListener("submit", (event) => {
  event.preventDefault();
  const name = document.querySelector("#Username").value;
  const password = document.querySelector("#password").value;
  const message = document.querySelector("#message");
  const user = document.querySelector("#user");

  message.textContent = "";
  user.textContent = "";

  if (name === "vinh" && password === "123") {
    user.textContent = `Hello ${name}`;
  } else {
    message.textContent = "Incorrect information or password";
  }
});
