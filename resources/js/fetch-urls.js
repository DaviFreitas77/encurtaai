import { arrayMonth } from "./arrayMonth.js";
export async function fetchUrls() {
  const urlContainer = document.getElementById("urlContainer");
  const template = document.getElementById("urlCardTemplate");

  urlContainer.innerHTML = `
  <div class="col-span-full h-96 flex items-center justify-center">
    <div class="w-8 h-8 border-4 border-dashed rounded-full animate-spin border-[var(--color-primary)]"></div>
  </div>
`;
  try {
    const response = await fetch("/getUrlUser", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });

    const data = await response.json();
    urlContainer.innerHTML = "";

    data.urls.forEach((url) => {
      const clone = template.content.cloneNode(true);

      clone.querySelector(".slug").href = `${appBaseUrl}/r/${url.slug}`;
      clone.querySelector(".slug").textContent = `${appBaseUrl}/r/${url.slug}`;

      clone.querySelector(".urlOriginal").textContent = url.url_original;
      clone.querySelector('.id').textContent = url.id
      // clone.querySelector(".qrCode").innerHTML = url.qr_code_url;

      const day = new Date(url.created_at).getDate();
      const month = arrayMonth[new Date(url.created_at).getMonth()];
      const year = new Date(url.created_at).getFullYear();
      const fullDate = `${day} de ${month} de ${year}`;
    
      
      clone.querySelector(".date").textContent = fullDate;

      clone.querySelector(".clicks").textContent = url.click_count;

      urlContainer.appendChild(clone);
    });
  } catch (e) {
    console.error("Erro ao carregar URLs:", e);
  }
}
