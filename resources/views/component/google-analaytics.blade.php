<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl+ '&gtm_auth=TSweApn8BVI88MreiBOn_A&gtm_preview=env-57&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5XBVXHW');</script>
<!-- End Google Tag Manager -->



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XBVXHW&gtm_auth=TSweApn8BVI88MreiBOn_A&gtm_preview=env-57&gtm_cookies_win=x"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@if(session()->has('action'))
    <?php $action = session()->get('action'); ?>
    @if( $action == 'language')
        @if(session()->has('language_code'))
            <script>
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'language_switch',
                    'chosen_language': "{{session()->get('language_code')}}",              // Dynamically populate with new chosen language (e.g. 'en' or 'bm')
                    'eventCallback': function () {
                        console.log('Language Switch Event Tags Triggered and Fired');
                    }
                });

            </script>
        @endif
    @endif
    @if($action == 'submission')
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'competition_submission',
                'eventCallback': function () {
                    console.log('Competition Submission Event Tags Triggered and Fired');
                }
            });

        </script>
    @endif
    @if($action == 'logout')
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'logout',
                'eventCallback': function () {
                    console.log('Logout Event Tags Triggered and Fired');
                }
            });

        </script>
    @endif
    @if($action == 'login')
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'login',
                'eventCallback': function () {
                    console.log('Login Event Tags Triggered and Fired');
                }
            });

        </script>
    @endif
    @if($action == 'regitser')
        @if(session()->has('user'))
            <?php $user = session()->get('user'); ?>
            <script>
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'registration',
                    'user_name': "{{$user->name ?? ''}}",
                    'user_email': "{{$user->email ?? ''}}",
                    'user_phone': "{{$user->phone ?? ''}}",
                    'eventCallback': function () {
                        console.log('Registration Event Tags Triggered and Fired');
                    }
                });

            </script>
        @endif
    @endif
@endif
