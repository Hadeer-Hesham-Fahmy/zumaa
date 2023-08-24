{{-- Packages stop --}}
<tr>
    <td align="left" style="padding:0;Margin:0">
        <table width="100%" cellspacing="0" cellpadding="0"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
            <tr>
                <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="left"
                                style="padding:0;Margin:0;padding-bottom:10px;padding-left:20px;padding-right:20px">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:20px;color:#000000;font-size:13px">
                                    {{ __('From') }}</p>
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">
                                    <strong></strong><strong>{{ $order->stops->first()->name }}
                                        -
                                        ({{ $order->stops->first()->phone }})</strong><strong></strong><br
                                        type="_moz">
                                </p>
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                    {{ $order->stops->first()->delivery_address->address }}<br type="_moz"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            {{-- remaining stops --}}
            @foreach ($order->stops as $orderStop)
                {{-- skip the first one --}}
                @if ($loop->first)
                    @continue
                @endif
                <tr>
                    <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tr>
                                <td align="left"
                                    style="padding:0;Margin:0;padding-bottom:10px;padding-left:20px;padding-right:20px">
                                    <p
                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:20px;color:#000000;font-size:13px">
                                        {{ __('Stop') }}</p>
                                    <p
                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">
                                        <strong>{{ $orderStop->name }} - ({{ $orderStop->phone }})</strong>
                                        <br type="_moz">
                                    </p>
                                    <p
                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                        {{ $orderStop->delivery_address->address }}
                                        <br type="_moz">
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            @endforeach


        </table>
    </td>
</tr>
{{-- package details --}}
<tr>
    <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
        <table width="100%" cellspacing="0" cellpadding="0"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
            <tr>
                <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="left" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:20px;color:#333333;font-size:13px">
                                    {{ __('Package details') }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">
                                    <strong>{{ $order->package_type->name }}</strong><strong></strong><br
                                        type="_moz">
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
{{-- package weight --}}
<tr>
    <td align="left" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px">
        <!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:270px" valign="top"><![endif]-->
        <table class="es-left" cellspacing="0" cellpadding="0" align="left"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
            <tr>
                <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:270px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="left" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    {{ __('Weight') }}<br type="_moz"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--[if mso]></td><td style="width:20px"></td><td style="width:270px" valign="top"><![endif]-->
        <table class="es-right" cellspacing="0" cellpadding="0" align="right"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
            <tr>
                <td align="left" style="padding:0;Margin:0;width:270px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="right" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    {{ $order->weight }}kg<br type="_moz"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--[if mso]></td></tr></table><![endif]-->
    </td>
</tr>
{{-- package widht --}}
<tr>
    <td align="left" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px">
        <!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:270px" valign="top"><![endif]-->
        <table class="es-left" cellspacing="0" cellpadding="0" align="left"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
            <tr>
                <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:270px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="left" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    {{ __('Width') }}<br type="_moz"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--[if mso]></td><td style="width:20px"></td><td style="width:270px" valign="top"><![endif]-->
        <table class="es-right" cellspacing="0" cellpadding="0" align="right"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
            <tr>
                <td align="left" style="padding:0;Margin:0;width:270px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="right" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    {{ $order->width }}cm<br type="_moz"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--[if mso]></td></tr></table><![endif]-->
    </td>
</tr>
{{-- package Length --}}
<tr>
    <td align="left" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px">
        <!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:270px" valign="top"><![endif]-->
        <table class="es-left" cellspacing="0" cellpadding="0" align="left"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
            <tr>
                <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:270px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="left" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    {{ __('Length') }}<br type="_moz"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--[if mso]></td><td style="width:20px"></td><td style="width:270px" valign="top"><![endif]-->
        <table class="es-right" cellspacing="0" cellpadding="0" align="right"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
            <tr>
                <td align="left" style="padding:0;Margin:0;width:270px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="right" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    {{ $order->length }}cm<br type="_moz"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--[if mso]></td></tr></table><![endif]-->
    </td>
</tr>
{{-- package Height --}}
<tr>
    <td align="left" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px">
        <!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:270px" valign="top"><![endif]-->
        <table class="es-left" cellspacing="0" cellpadding="0" align="left"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
            <tr>
                <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:270px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="left" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    {{ __('Height') }}<br type="_moz"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--[if mso]></td><td style="width:20px"></td><td style="width:270px" valign="top"><![endif]-->
        <table class="es-right" cellspacing="0" cellpadding="0" align="right"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
            <tr>
                <td align="left" style="padding:0;Margin:0;width:270px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="right" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    {{ $order->height }}cm<br type="_moz"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--[if mso]></td></tr></table><![endif]-->
    </td>
</tr>
