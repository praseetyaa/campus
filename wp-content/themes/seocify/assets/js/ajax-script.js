!function(a){"use strict";a("body").on("submit","form.cart",function(t){t.preventDefault();var d=a(this),o=d.find(".button"),r=d.serialize();r+="&action=seocify_ajax_add_to_cart",o.val()&&(r+="&add-to-cart="+o.val()),o.removeClass("added not-added"),o.addClass("loading"),a(document.body).trigger("adding_to_cart",[o,r]),a.post(xs_ajax_obj.ajaxurl,r,function(t){t&&(t.error&&t.product_url?window.location=t.product_url:"yes"!==wc_add_to_cart_params.cart_redirect_after_add?(o.removeClass("lading"),o.addClass("not-added"),a(".xs-sidebar-group").addClass("isActive"),a(".modal").modal("hide"),a(document.body).trigger("added_to_cart",[t.fragments,t.cart_hash,o])):window.location=wc_add_to_cart_params.cart_url)})}),a(document).on("added_to_wishlist removed_from_wishlist",function(){a.ajax({url:xs_ajax_obj.ajaxurl,data:{action:"seocify_wishlist_count"},method:"POST",success:function(t){a(".xswhishlist").html(t)}})}),a("body").on("added_to_cart",function(){a(".xs_added_to_cart").addClass("active"),setTimeout(function(){a(".xs_added_to_cart").removeClass("active")},3e3)})}(jQuery);