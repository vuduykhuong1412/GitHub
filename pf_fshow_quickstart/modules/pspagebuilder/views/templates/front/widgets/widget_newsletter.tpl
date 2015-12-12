{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   pspagebuilder
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}

<!-- Block Newsletter module-->
<div id="newsletter_block_footer" class="block pts-newsletter {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">

    <div class="newsletter-v3 bg-primary space-padding-tb-80">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <h4 class="newsletter-label">{l s='Newsletter' mod='pspagebuilder'}</h4>
                    {if $information}
                        <p class="text-muted">{$information}{* HTML, can not escape *}</p>
                    {/if}
                </div>
                <div class="col-md-6 col-lg-6">
                    <form action="{$link->getPageLink('index')|escape:'html':'UTF-8'}" method="post">
                        <div class="input-group">
                            <input   class="form-control radius-6x" id="newsletter-input-footer" type="text" name="email"  placeholder="{if isset($value) && $value}{$value|escape:'html':'UTF-8'}{else}{l s='your e-mail' mod='pspagebuilder'}{/if}" />
                            <input type="hidden" name="action" value="0" />
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-success btn-lg radius-6x space-left-10" name="submitNewsletter" >{l s='Subscribe' mod='pspagebuilder'}</button>       
                            </div>
                        </div>
                    </form>

                </div>
            </div><!--/end row-->
    </div>
</div>
 


<script type="text/javascript">
    var placeholder = "{l s='your e-mail' mod='pspagebuilder' js=1}";
    {literal}
        $(document).ready(function() {
            $('#newsletter-input-footer').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });

            $("#newsletter_block_footer form").submit(function() {  
                if ($('#newsletter-input-footer').val() == placeholder) {
                    $("#newsletter_block_footer .alert").removeClass("hide");
                    return false;
                }else {
                     $("#newsletter_block_footer .alert").addClass("hide");
                     return true;
                }
            });
        });

    {/literal}
</script>