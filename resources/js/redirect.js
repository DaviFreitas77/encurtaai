    const link_shortened = document.getElementById("link_shortened");

    link_shortened.addEventListener("click", async (event) => {
        event.preventDefault();
        const fullUrl = link_shortened.textContent;
        const slug = fullUrl.split("/").pop();

        try {
            const response = await fetch(`/r/${slug}`, {
                method: "GET",
                headers: {
                    Accept: "application/json",
             
                },
            });

            const data = await response.json();
            if (!response.ok) {
            }
            window.open(data.url_original, "_blank");

            console.log(data);
        } catch (error) {
            console.log(error);
        }
    });
