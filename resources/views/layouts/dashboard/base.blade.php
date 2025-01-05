<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="wth=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE 4 | Widgets - Small Box" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />

    <link rel="icon" href="{{ asset('assets/rpl.img/5.png') }}" type="image/icon type">
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte') }}/main.min.css" />

    @stack('script-header')
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    @csrf
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <x-alert-message />
        <x-logout-confirmation />
        @include('layouts.dashboard.navbar')
        @php
            $isDosen = 0;
            if (str_contains(request()->getRequestUri(), 'dosen')) {
                $isDosen = 1;
            }
        @endphp
        @include('layouts.dashboard.sidebar', ['isDosen' => $isDosen])
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            @yield('content')
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        @include('layouts.dashboard.footer')
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/adminlte') }}/main.min.js"></script>
    <script>
        const logButton = document.getElementById('log-button')
        const closeButton = document.getElementById('close-button')

        logButton.addEventListener('click', logout)
        closeButton.addEventListener('click', close)

        let bukaChat = 0

        const chatWrapper = document.getElementById('chat-wrapper')
        const parentChat = document.getElementById('parent-chat')
        const childChat = document.getElementById('child-chat')

        const notifCount = document.getElementById('notif-count')
        const notifAll = document.getElementById('notif')
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });

        function notifLogout(route) {
            const notifLogout = document.getElementById('notif-logout')
            const notifLogoutMessage = document.getElementById('notif-logout-message')

            notifLogout.classList.toggle('hide')
            document.body.style.overflow = 'hidden'
        }

        function logout() {
            fetch('{!! route('logout') !!}', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": document.querySelector('input[name=_token]').value
                    }
                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw err
                        });
                    }

                    return response.json();
                })
                .then(data => {
                    console.log('Response Logout:', data);
                    window.location.href = '/'
                })
                .catch(error => {
                    console.log(error);

                    console.error('Error:', error);
                });
        }

        function close() {
            const notifLogout = document.getElementById('notif-logout')
            notifLogout.classList.toggle('hide')

            document.body.style.overflow = 'visible'
        }

        function notif(route, message) {
            const notifSuccess = document.getElementById('notif-success')
            const notifMessage = document.getElementById('notif-message')
            const textMessage = document.getElementById('message')

            textMessage.textContent = message

            notifSuccess.classList.remove('hide')
            document.body.style.overflow = 'hidden'

            setTimeout(() => {
                notifMessage.classList.remove('scale-down')
            }, 100);

            setTimeout(() => {
                window.location.href = route
            }, 500);
        }

        function postFetch(link, directLink, data, pesan) {
            fetch(link, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": document.querySelector('input[name=_token]').value
                    },
                    body: data
                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw err
                        });
                    }

                    return response.json();
                })
                .then(data => {
                    console.log('Response:', data);
                    notif(directLink, pesan)
                })
                .catch(error => {
                    console.log(error);

                    console.error('Error:', error);
                });
        }

        function getNotif() {
            fetch('{!! route('notifikasi', ['id' => auth()->user()->id]) !!}', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": document.querySelector('input[name=_token]').value
                    }
                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw err
                        });
                    }

                    return response.json();
                })
                .then(data => {
                    console.log('Response:', data.data);
                    notifCount.textContent = data.count;
                    makeDropDownNotification(data.data);
                })
                .catch(error => {
                    console.log(error);

                    console.error('Error:', error);
                });
        }

        function makeDropDownNotification(res) {
            console.log(res);

            res.forEach(e => {
                let divItem = document.createElement('div')
                divItem.classList.add('dropdown-item')

                let judul = document.createElement('h4')
                judul.style.fontWeight = 'bold'
                judul.textContent = e.judul

                let pesan = document.createElement('p')
                pesan.textContent = e.pesan

                let divDivider = document.createElement('div')
                divDivider.classList.add('dropdown-divider')

                divItem.append(judul, pesan)

                notifAll.append(divItem, divDivider)
            });
        }

        getNotif()

        function getChat(to) {
            childChat.innerHTML = ''
            fetch('{!! route('pesan', ['from' => auth()->user()->id]) !!}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": document.querySelector('input[name=_token]').value
                    },
                    body: JSON.stringify({
                        to: to
                    })
                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw err
                        });
                    }

                    return response.json();
                })
                .then(data => {
                    console.log('Response Header:', data);
                    makeHeader(data.photo_profile[1], data.tujuan[0], 0, childChat, '{!! auth()->user()->role !!}')
                    makeDropDownChat(data.data, data.photo_profile)
                    makeFooter(data.tujuan[1])
                })
                .catch(error => {
                    console.log(error);

                    console.error('Error:', error);
                });
        }

        // getChat()

        function makeDropDownChat(res, photo_profile) {
            let cardBody = document.createElement('div')
            cardBody.classList.add('card-body')
            cardBody.id = 'card-body'
            cardBody.style.overflowY = 'auto'

            if (cardBody != null) {
                cardBody.innerHTML = ''
            }

            if (res.length != 0) {
                res.forEach(e => {
                    console.log({
                        makeDropDownChat: e
                    });
                    childChat.append(makeBody(photo_profile, e.pesan, e.dari, cardBody))
                })
            } else {
                childChat.append(cardBody)
            }
        }

        function kirimPesan(to, inputForm) {
            fetch('{!! route('kirim-pesan', ['from' => auth()->user()->id]) !!}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": document.querySelector('input[name=_token]').value
                    },
                    body: JSON.stringify({
                        pesan: inputForm.value,
                        to: to
                    })
                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw err
                        });
                    }

                    return response.json();
                })
                .then(data => {
                    console.log('Response:', data.data);
                    inputForm.value = ''
                    getChat(to)
                })
                .catch(error => {
                    console.log(error);

                    console.error('Error:', error);
                });
        }

        function getAllUserKirim() {
            fetch('{!! route('dosen.pengirim-pesan', ['id' => auth()->user()->id]) !!}', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": document.querySelector('input[name=_token]').value
                    }
                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw err
                        });
                    }

                    return response.json();
                })
                .then(data => {
                    console.log('Response getAllUserKirim():', data.data);
                    makeCardHeaderChat(data.data, parentChat)
                })
                .catch(error => {
                    console.log(error);

                    console.error('Error:', error);
                });
        }


        function makeCardHeaderChat(res, cardUse) {
            res.forEach(e => {
                console.log(e);

                makeHeader(e[1], e[0], e[2], cardUse, '{!! auth()->user()->role !!}', 1)
            })

        }

        function makeHeader(image, nameUser, to, cardUse, role, isAll = 0) {
            console.log({
                bukaChat: bukaChat
            });

            if (bukaChat && cardUse == parentChat) {
                return;
            }

            parentChat.innerHTML = ''
            console.log({
                to: to
            });

            let buttonChat = document.createElement('button')
            if (to != 0) {
                buttonChat.id = to
                buttonChat.onclick = function() {
                    parentChat.classList.toggle('hide')
                    childChat.classList.toggle('hide')

                    chatWrapper.classList.remove('show')
                    chatWrapper.classList.add('show')
                    chatWrapper.dataset.dataBsPopper = 'static'
                    console.log(chatWrapper);

                    bukaChat = 1

                    getChat(to)
                }
            }

            let cardParentWrapper = document.createElement('div')
            cardParentWrapper.classList.add('card-header')

            let chatWrapper = document.createElement('div')
            chatWrapper.classList.add('row', 'align-items-center')

            let imageWrapper = document.createElement('div')
            imageWrapper.classList.add('col-2')

            let chatImage = document.createElement('img')
            chatImage.src = image
            chatImage.style.width = '35px'
            chatImage.style.height = '35px'
            chatImage.alt = 'Photo Profile'

            imageWrapper.append(chatImage)
            chatWrapper.append(imageWrapper)

            let nameWrapper = document.createElement('div')
            nameWrapper.classList.add('col')

            let name = document.createElement('h3')
            name.style.fontWeight = 'bold'
            name.textContent = nameUser

            nameWrapper.append(name)

            chatWrapper.append(nameWrapper)

            cardParentWrapper.append(chatWrapper)

            if (isAll) {
                buttonChat.append(cardParentWrapper)

                cardUse.append(buttonChat)
            } else {
                if (role == 'dosen') {
                    let buttonX = document.createElement('button')
                    buttonX.classList.add('btn', 'btn-danger', 'd-block', 'ms-auto')
                    buttonX.style.width = '40px'
                    buttonX.textContent = 'X'
                    buttonX.onclick = function() {
                        parentChat.classList.toggle('hide')
                        childChat.classList.toggle('hide')

                        chatWrapper.classList.remove('show')
                        chatWrapper.classList.add('show')
                        chatWrapper.dataset.dataBsPopper = 'static'
                        console.log(chatWrapper);

                        childChat.innerHTML = ''

                        bukaChat = 0
                    }

                    chatWrapper.append(buttonX)
                }


                cardUse.append(cardParentWrapper)
            }
        }

        function makeBody(image, pesan, dari, parent) {
            let chatWrapper = document.createElement('div')
            chatWrapper.classList.add('row', 'mb-3')

            let chatMessageWrapper = document.createElement('div')
            chatMessageWrapper.classList.add('col-9', 'd-flex', 'align-items-center')
            chatMessageWrapper.style.background = '#eee'

            let chatMessage = document.createElement('p')
            chatMessage.textContent = pesan

            chatMessageWrapper.append(chatMessage)

            let chatImageWrapper = document.createElement('div')
            chatImageWrapper.classList.add('col-3')

            let chatImage = document.createElement('img')
            chatImage.style.width = '35px'
            chatImage.style.height = '35px'
            chatImage.alt = 'Photo Profile'



            if ({!! auth()->user()->id !!} == dari) {
                chatImage.src = image[0]
                chatImageWrapper.append(chatImage)

                chatWrapper.append(chatMessageWrapper, chatImageWrapper)
            } else {
                chatImage.src = image[1]
                chatImageWrapper.append(chatImage)

                chatWrapper.append(chatImageWrapper, chatMessageWrapper)
            }

            parent.append(chatWrapper)
            return parent;
        }

        function makeFooter(to) {
            let cardFooter = document.createElement('div')
            cardFooter.classList.add('card-footer')

            let cardWrapper = document.createElement('div')
            cardWrapper.classList.add('row', 'align-items-center')

            let inputWrapper = document.createElement('div')
            inputWrapper.classList.add('col')

            let inputForm = document.createElement('input')
            inputForm.type = 'text'
            inputForm.id = 'input-pesan'
            inputForm.classList.add('form-control')

            inputWrapper.append(inputForm)

            let buttonWrapper = document.createElement('div')
            buttonWrapper.style.width = '60px'

            let button = document.createElement('a')
            button.classList.add('btn', 'd-flex', 'align-items-center', 'justify-content-center')

            let imgSent = document.createElement('img')
            imgSent.src = '{!! asset('assets/rpl.img/icon/sent.png') !!}'
            imgSent.style.width = '30px'
            imgSent.style.height = '30px'
            imgSent.alt = 'Sent Picture'

            button.onclick = function() {
                console.log({
                    to: to
                });

                kirimPesan(to, inputForm)
            }

            button.append(imgSent)
            buttonWrapper.append(button)

            cardWrapper.append(inputWrapper, buttonWrapper)
            cardFooter.append(cardWrapper)

            childChat.append(cardFooter)
        }
    </script>
    {{-- <script type="text/javascript">
        const CLIENT_ID = '472230328717-9pu5h3dgvr2g4fgsu1ihf8v4e3arrasm.apps.googleusercontent.com';
        const API_KEY = 'AIzaSyAwoMqUZEmSo77mFRKxo2rONVn9WadAz34';

        const DISCOVERY_DOC = 'https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest';

        const SCOPES = 'https://www.googleapis.com/auth/calendar';

        let tokenClient;
        let gapiInited = false;
        let gisInited = false;

        function gapiLoaded() {
            gapi.load('client', initializeGapiClient);
        }

        async function initializeGapiClient() {
            await gapi.client.init({
                apiKey: API_KEY,
                discoveryDocs: [DISCOVERY_DOC],
            });
            gapiInited = true;
        }

        function gisLoaded() {
            tokenClient = google.accounts.oauth2.initTokenClient({
                client_id: CLIENT_ID,
                scope: SCOPES,
                callback: '', // defined later
            });
            gisInited = true;
        }

        function handleAuthClick() {
            tokenClient.callback = async (resp) => {
                if (resp.error !== undefined) {
                    throw (resp);
                }  
            };


            if (gapi.client.getToken() === null) {
                tokenClient.requestAccessToken({
                    prompt: 'consent'
                });
            } else {
                tokenClient.requestAccessToken({
                    prompt: ''
                });
            }

        }

        async function makeEvent(email, waktu, tempat) {
            var event = {
                'summary': 'Jadwal Bimbingan',
                'location': tempat,
                'description': 'Insya Allah kita akan bertemu.',
                'start': {
                    'dateTime': waktu,
                    'timeZone': 'Asia/Jakarta'
                },
                'end': {
                    'dateTime': waktu,
                    'timeZone': 'Asia/Jakarta'
                },
                'attendees': [{
                    'email': 'shafhan.fa@gmail.com'
                }],
                'reminders': {
                    'useDefault': false,
                    'overrides': [{
                        'method': 'email',
                        'minutes': 60
                    }]
                }
            };

            var request = await gapi.client.calendar.events.insert({
                'calendarId': 'primary',
                'resource': event
            }).then(function(response) {
                console.log('Event created:', response.result.htmlLink);
            }).catch(function(error) {
                console.error('Error creating event:', error);
            });
        }
    </script> --}}
    <script type="text/javascript">
        const CLIENT_ID = '472230328717-9pu5h3dgvr2g4fgsu1ihf8v4e3arrasm.apps.googleusercontent.com';
        const API_KEY = 'AIzaSyAwoMqUZEmSo77mFRKxo2rONVn9WadAz34';

        const DISCOVERY_DOC = 'https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest';

        const SCOPES = 'https://www.googleapis.com/auth/calendar';

        let tokenClient;
        let gapiInited = false;
        let gisInited = false;

        function gapiLoaded() {
            gapi.load('client', initializeGapiClient);
        }

        async function initializeGapiClient() {
            await gapi.client.init({
                apiKey: API_KEY,
                discoveryDocs: [DISCOVERY_DOC],
            });
            gapiInited = true;
        }

        function gisLoaded() {
            tokenClient = google.accounts.oauth2.initTokenClient({
                client_id: CLIENT_ID,
                scope: SCOPES,
                callback: '', // defined later
            });
            gisInited = true;
        }

        function handleAuthClick() {
            tokenClient.callback = async (resp) => {
                if (resp.error !== undefined) {
                    throw (resp);
                }
                // document.getElementById('signout_button').style.visibility = 'visible';
                // document.getElementById('authorize_button').innerText = 'Refresh';
                // await listUpcomingEvents();
            };

            if (gapi.client.getToken() === null) {
                // Prompt the user to select a Google Account and ask for consent to share their data
                // when establishing a new session.
                tokenClient.requestAccessToken({
                    prompt: 'consent'
                });
            } else {
                // Skip display of account chooser and consent dialog for an existing session.
                tokenClient.requestAccessToken({
                    prompt: ''
                });
            }

        }

        async function makeEvent(email, waktu, tempat) {
            var event = {
                'summary': 'Jadwal Bimbingan',
                'location': tempat,
                'description': 'Insya allah kita akan bertemu.',
                'start': {
                    'dateTime': waktu,
                    'timeZone': 'Asia/Jakarta'
                },
                'end': {
                    'dateTime': waktu,
                    'timeZone': 'Asia/Jakarta'
                },
                'attendees': [{
                        'email': email
                    }
                ],
                'reminders': {
                    'useDefault': false,
                    'overrides': [{
                        'method': 'email',
                        'minutes': 60
                    }]
                }
            };

            var request = await gapi.client.calendar.events.insert({
                'calendarId': 'primary',
                'resource': event
            }).then(function(response) {
                console.log('Event created:', response.result.htmlLink);
            }).catch(function(error) {
                console.error('Error creating event:', error);
            });
        }
    </script>
    <script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
    <script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>
    @stack('script-footer')
</body>

</html>
