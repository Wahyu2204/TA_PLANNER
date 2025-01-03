<div id="notif-logout" class="notif hide d-flex justify-content-center align-items-center"
    style="position: fixed;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.5);backdrop-filter: blur(24px);width: 100%;height: 100%;z-index: 999999">
    <div id="notif-logout-message"
        class="notif-message d-flex flex-column justify-content-center align-items-center shadow-lg bg-white"
        style="transition: all .2s;">
        <img src="{{ asset('assets/rpl.img') }}/8.png" alt="Success Alert" width="120">
        <h3 class="mb-2">Apa anda yakin ingin <span style="font-weight: bold">Log Out</span></h3>
        <div class="row justify-content-center align-items-center mb-2" style="width: 100%;">
            <div class="col d-flex justify-content-end">
                <button id="log-button" class="btn btn-danger" style="padding: 8px 30px">Log Out</button>
            </div>
            <div class="col d-flex justify-content-start">
                <button id="close-button" class="btn" style="padding: 8px 30px">Batal</button>
            </div>
        </div>
        <h4 id="message"></h4>
    </div>
</div>
