<{* 聯絡我們 *}>
<{if $op == "contact_form"}>
    <{include file="tpl/contact_form.tpl"}>
<{elseif  $op == "okcontact"}>
    <{include file="tpl/okcontact.tpl"}>

<{* 登入 *}>
<{elseif  $op == "login_form"}>
    <{include file="tpl/login_form.tpl"}>

<{* 註冊 *}>
<{elseif  $op == "reg_form"}>
    <{include file="tpl/reg_form.tpl"}>

<{* 預約 *}>
<{elseif  $op == "reservation_form"}>
    <{include file="tpl/reservation_form.tpl"}>
<{elseif  $op == "okreservation"}>
    <{include file="tpl/okreservation.tpl"}>

    <{else}>
    <{* 把body.tpl引進來 *}>
    <{include file="tpl/body.tpl"}>

<{/if}>
