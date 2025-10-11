
export async function fetchUrls() {
  const urlContainer = document.getElementById("urlContainer");
  const template = document.getElementById("urlCardTemplate");

  urlContainer.innerHTML = "";

  try {
    const response = await fetch("/getUrlUser", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });

    const data = await response.json();
 
    data.urls.forEach((url) => {
      const clone = template.content.cloneNode(true);

      clone.querySelector(".slug").href = `${appBaseUrl}/r/${url.slug}`;
      clone.querySelector(".slug").textContent = `${appBaseUrl}/r/${url.slug}`;

      clone.querySelector(".urlOriginal").textContent = url.url_original;
      clone.querySelector(".status").textContent = url.status;
      clone.querySelector(".qrCode").innerHTML = url.qr_code_url;

      const dateFormatted = new Date(
        url.created_at.replace(" ", "T")
      ).toLocaleDateString("pt-BR");
      clone.querySelector(".date").textContent = dateFormatted;

      clone.querySelector(".clicks").textContent = url.click_count;

      urlContainer.appendChild(clone);
    });
  } catch (e) {
    console.error("Erro ao carregar URLs:", e);
  }
}

