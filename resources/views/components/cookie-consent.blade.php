<style>
    .cookie-contain {
        display: block;
    }

    .cookie-consent {
        position: fixed;
        bottom: 8px;
        left: 20px;
        width: 350px;
        padding-top: 20px;
        height: 180px;
        color: #000;
        line-height: 20px;
        padding-left: 15px;
        padding-right: 15px;
        font-size: 14px;
        background: #fff;
        z-index: 120;
        border-radius: 3px;
    }

    .allow-button {
        height: 30px;
        width: 150px;
        color: #fff;
        font-size: 12px;
        line-height: 10px;
        border-radius: 50px;
        border: 1px solid black;
        background-color: black;
    }

    @media screen and (max-width: 576px) {
        .cookie-consent {
            left: unset;
            width: 100%;
        }
    }
</style>
<div id="cookie-contain">
    <div class="cookie-consent wow fadeInLeft" data-wow-delay="0.2s">
        <span>Scandodi websites stores data such as cookies to enable essential site functionality, as
            well as marketing, personalization, and analytics. You may change your settings at any time
            or accept the default settings. </span>
        <div class="mt-2 d-flex align-items-center justify-content-evenly g-2">
            <a href="" style="color: black;">Customize</a>
            <button class="allow-button mr-1" onclick="myFunction()">Accept all cookies</button>
        </div>
    </div>
</div>


<script>
    function myFunction() {
        document.getElementById("cookie-contain").style.display = "none";
    }
</script>
