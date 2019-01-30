<template>
<cookie-law  theme="dark-lime" buttonText="بله : من  میدانم که این سایت از کوکی ها استفاده می کند" style="border-radius: 5px">
        <div slot="message">
            <p>این وبسایت از کوکی ها برای بهترین تجربه در وب سایت ما داشته باشید استفاده می کند .
                <span>اطلاعات کوکی ما و استفاده از آن را برای اطلاعات بیشتر بخوانید:</span> <router-link to="/cookie-law-agreement">کلیک نمایید</router-link>
            </p>
        </div>
</cookie-law>
</template>

<script>
import CookieLaw from 'vue-cookie-law'
export default {
    components: { CookieLaw }
}
</script>
