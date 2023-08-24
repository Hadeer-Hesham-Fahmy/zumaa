{{-- vendor section --}}
<tr>
    <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px">
        <table width="100%" cellspacing="0" cellpadding="0"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
            <tr>
                <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="left" style="padding:0;Margin:0;padding-bottom:10px">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:20px;color:#000000;font-size:13px">
                                    {{ __('From') }}</p>
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">
                                    <strong>{{ $order->vendor->name }}</strong>
                                </p>
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                    {{ $order->vendor->address }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding:0;Margin:0;padding-bottom:10px">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:20px;color:#000000;font-size:13px">
                                    {{ __('To') }}</p>
                                @empty($orderStop->delivery_addres)
                                    <p
                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">
                                        <strong>{{ __('Customer Pickup') }}</strong>
                                    </p>
                                @else
                                    <p
                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">
                                        <strong>{{ $order->delivery_address->name ?? '' }}</strong>
                                    </p>
                                    <p
                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                                        {{ $order->delivery_address->address ?? '' }}
                                    </p>
                                @endempty
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>


{{-- products section --}}
{{-- product list title --}}
<tr>
    <td align="left" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px">
        <table width="100%" cellspacing="0" cellpadding="0"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
            <tr>
                <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                        <tr>
                            <td align="left" style="padding:0;Margin:0">
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    <strong>{{ __('Products') }}</strong>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
{{-- product list item --}}

@foreach ($order->products as $orderProduct)
    <tr>
        <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px">
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
                                        {{ $orderProduct->quantity }} x {{ $orderProduct->product->name }}
                                        <br type="_moz">
                                    </p>
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
                                <td align="left" style="padding:0;Margin:0">
                                    <p
                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px;text-align:right">
                                        {{ currencyFormat($orderProduct->price) }}
                                        <br type="_moz">
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if mso]></td></tr></table><![endif]-->
        </td>
    </tr>
@endforeach
