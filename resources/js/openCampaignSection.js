const btnOpenCampaign = document.querySelector(".openCampaignSection");
const sectionCreateCampaign = document.querySelector(".sectionCreateCampaign");
const iconBottom = document.querySelector(".svg-accordion-bottom");
const iconTop = document.querySelector(".svg-accordion-top");


btnOpenCampaign.addEventListener("click", () => {
  sectionCreateCampaign.classList.toggle("opacity-0");

  if(sectionCreateCampaign.classList.contains("opacity-0")){
    iconBottom.classList.remove("hidden");
    iconTop.classList.add("hidden");
  }else{
    iconBottom.classList.add("hidden");
    iconTop.classList.remove("hidden");
  
  }
  
});