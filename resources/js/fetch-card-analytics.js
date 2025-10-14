export default async function fetchCardAnalytics() {
  document.querySelectorAll(".totalLinks, .campaign, .totalClick, .expiredUrl").forEach((el) => {
  el.innerHTML = `
    <div class="w-full">
      <div class="w-8 h-8 border-4 border-dashed rounded-full animate-spin border-[var(--color-primary)] mx-auto"></div>
    </div>
  `;
});

  try {
    const response = await fetch("/metrics/analytics", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });

    const data = await response.json();

    document.querySelectorAll(".totalLinks").forEach((el) => (el.textContent = data.totalurls));
    document.querySelectorAll(".totalClick").forEach((el) => (el.textContent = data.totalClick));
   

  
  } catch (e) {
    console.error("Erro ao carregar URLs:", e);
  }
}

fetchCardAnalytics();
