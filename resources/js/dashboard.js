import { fetchUrls } from "./fetch-urls";
import { fetchQrCode } from './fetch-qr-code'
window.addEventListener('DOMContentLoaded', () => {

    fetchUrls();
    fetchQrCode()

})