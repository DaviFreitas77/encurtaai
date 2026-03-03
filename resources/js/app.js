export const copyText = async (text) => {
    try {
        await navigator.clipboard.writeText(text)
        alert("texto copiado")
    } catch (error) {
        console.log("error ao copiar texto")
    }

}