export const copyText = async (text) => {

    try {
        await navigator.clipboard.writeText(text)
        toast({
            title: "Sucesso",
            description: "Texto copiado",
            type: "success"
        });
    } catch (error) {
        console.log(error)
    }

}

