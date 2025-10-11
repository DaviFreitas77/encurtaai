export default async function fetchCardAnalytics() {
  try {
    const response = await fetch("/getAnalyticsUrl", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });

    const data = await response.json();

    document.querySelectorAll(".totalLinks").forEach((el) => (el.textContent = data.totalurls));
    document.querySelectorAll(".inactiveUrl").forEach((el) => (el.textContent = data.inactiveurls));
    document.querySelectorAll(".activeUrl").forEach((el) => (el.textContent = data.activeurls));
    document.querySelectorAll(".expiredUrl").forEach((el) => (el.textContent = data.expiredurls));
  } catch (e) {
    console.error("Erro ao carregar URLs:", e);
  }
}


fetchCardAnalytics();
