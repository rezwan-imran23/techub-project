(self.webpackChunkwebpackWcBlocksCartCheckoutFrontendJsonp=self.webpackChunkwebpackWcBlocksCartCheckoutFrontendJsonp||[]).push([[636],{3127:(e,t,s)=>{"use strict";s.d(t,{A:()=>o});var r=s(1609),n=s(7723),d=s(3993),a=s(5703),i=s(6398);s(1094);const o=({address:e,onEdit:t,target:s,fieldConfig:o,isExpanded:l})=>{const c=(0,a.getSetting)("countryData",{});let p=(0,a.getSetting)("defaultAddressFormat","{name}\n{company}\n{address_1}\n{address_2}\n{city}\n{state}\n{postcode}\n{country}");(0,d.objectHasProp)(c,null==e?void 0:e.country)&&(0,d.objectHasProp)(c[e.country],"format")&&(0,d.isString)(c[e.country].format)&&(p=c[e.country].format);const{name:m,address:u}=(0,i.M0)(e,p),h="shipping"===s?(0,n.__)("Edit shipping address","woocommerce"):(0,n.__)("Edit billing address","woocommerce");return(0,r.createElement)("div",{className:"wc-block-components-address-card"},(0,r.createElement)("address",null,(0,r.createElement)("span",{className:"wc-block-components-address-card__address-section"},m),(0,r.createElement)("div",{className:"wc-block-components-address-card__address-section"},u.filter((e=>!!e)).map(((e,t)=>(0,r.createElement)("span",{key:"address-"+t},e)))),e.phone&&!o.phone.hidden?(0,r.createElement)("div",{key:"address-phone",className:"wc-block-components-address-card__address-section"},e.phone):""),t&&(0,r.createElement)("button",{className:"wc-block-components-address-card__edit","aria-controls":s,"aria-expanded":l,"aria-label":h,onClick:e=>{e.preventDefault(),t()},type:"button"},(0,n.__)("Edit","woocommerce")))}},8202:(e,t,s)=>{"use strict";s.d(t,{A:()=>d});var r=s(1609),n=s(851);s(7259);const d=({isEditing:e=!1,addressCard:t,addressForm:s})=>{const d=(0,n.A)("wc-block-components-address-address-wrapper",{"is-editing":e});return(0,r.createElement)("div",{className:d},(0,r.createElement)("div",{className:"wc-block-components-address-card-wrapper"},t()),(0,r.createElement)("div",{className:"wc-block-components-address-form-wrapper"},s()))}},9017:(e,t,s)=>{"use strict";s.d(t,{A:()=>n});var r=s(7723);const n=({defaultTitle:e=(0,r.__)("Step","woocommerce"),defaultDescription:t=(0,r.__)("Step description text.","woocommerce"),defaultShowStepNumber:s=!0})=>({title:{type:"string",default:e},description:{type:"string",default:t},showStepNumber:{type:"boolean",default:s}})},7275:(e,t,s)=>{"use strict";s.r(t),s.d(t,{default:()=>v});var r=s(1609),n=s(851),d=s(1616),a=s(4656),i=s(5251),o=s(7143),l=s(7594),c=s(7723),p=s(6087),m=s(4375),u=s(2663),h=s(2379),g=s(3494),E=s(5703),_=s(5683),w=s(3505),f=s(3603),b=s(812),C=s(8202),S=s(3127);const k=({addressFieldsConfig:e,defaultEditing:t=!1})=>{const{shippingAddress:s,setShippingAddress:n,setBillingAddress:d,useShippingAsBilling:a}=(0,i.C)(),{dispatchCheckoutEvent:c}=(0,f.y)(),[m,u]=(0,p.useState)(t),{hasValidationErrors:h,invalidProps:g}=(0,o.useSelect)((e=>{const t=e(l.VALIDATION_STORE_KEY);return{hasValidationErrors:t.hasValidationErrors(),invalidProps:Object.keys(s).filter((e=>void 0!==t.getValidationError("shipping_"+e))).filter(Boolean)}}));(0,p.useEffect)((()=>{g.length>0&&!1===m&&u(!0)}),[m,h,g.length]);const E=(0,p.useCallback)((e=>{n(e),a&&(d(e),c("set-billing-address")),c("set-shipping-address")}),[c,d,n,a]),_=(0,p.useCallback)((()=>(0,r.createElement)(S.A,{address:s,target:"shipping",onEdit:()=>{u(!0)},fieldConfig:e,isExpanded:m})),[s,e,m]),k=(0,p.useCallback)((()=>(0,r.createElement)(w.l,{id:"shipping",addressType:"shipping",onChange:E,values:s,fields:b.Hw,fieldConfig:e,isEditing:m})),[e,E,s,m]);return(0,r.createElement)(C.A,{isEditing:m,addressCard:_,addressForm:k})},A=({showCompanyField:e=!1,requireCompanyField:t=!1,showApartmentField:s=!1,requireApartmentField:n=!1,showPhoneField:d=!1,requirePhoneField:w=!1})=>{const{setBillingAddress:f,shippingAddress:b,billingAddress:C,useShippingAsBilling:S,setUseShippingAsBilling:A}=(0,i.C)(),{isEditor:F}=(0,u.m)(),y=0===(0,E.getSetting)("currentUserId"),v=()=>{const t={...b};d||delete t.phone,e&&delete t.company,f(t)};(0,m.Su)((()=>{S&&v()}));const N=(0,p.useMemo)((()=>({company:{hidden:!e,required:t},address_2:{hidden:!s,required:n},phone:{hidden:!d,required:w}})),[e,t,s,n,d,w]),P=F?g.A:p.Fragment,D=S?[h.tG.SHIPPING_ADDRESS,h.tG.BILLING_ADDRESS]:[h.tG.SHIPPING_ADDRESS],q=!(!b.address_1||!b.first_name&&!b.last_name),{cartDataLoaded:B}=(0,o.useSelect)((e=>({cartDataLoaded:e(l.CART_STORE_KEY).hasFinishedResolution("getCartData")}))),I=F||!q;return(0,r.createElement)(p.Fragment,null,(0,r.createElement)(a.StoreNoticesContainer,{context:D}),(0,r.createElement)(P,null,B?(0,r.createElement)(k,{addressFieldsConfig:N,defaultEditing:I}):null),(0,r.createElement)(a.CheckboxControl,{className:"wc-block-checkout__use-address-for-billing",label:(0,c.__)("Use same address for billing","woocommerce"),checked:S,onChange:e=>{A(e),e?v():(e=>{if(!e||!y)return;const t=(0,_.ln)(e);f(t)})(C)}}))},F={...(0,s(9017).A)({defaultTitle:(0,c.__)("Shipping address","woocommerce"),defaultDescription:(0,c.__)("Enter the address where you want your order delivered.","woocommerce")}),className:{type:"string",default:""},lock:{type:"object",default:{move:!0,remove:!0}}};var y=s(9292);const v=(0,d.withFilteredAttributes)(F)((({title:e,description:t,children:s,className:d})=>{const c=(0,o.useSelect)((e=>e(l.CHECKOUT_STORE_KEY).isProcessing())),{showShippingFields:p}=(0,i.C)(),{showCompanyField:m,requireCompanyField:u,showApartmentField:h,requireApartmentField:g,showPhoneField:E,requirePhoneField:_,showFormStepNumbers:w}=(0,y.Oy)();return p?(0,r.createElement)(a.FormStep,{id:"shipping-fields",disabled:c,className:(0,n.A)("wc-block-checkout__shipping-fields",d),title:e,description:t,showStepNumber:w},(0,r.createElement)(A,{showCompanyField:m,requireCompanyField:u,showApartmentField:h,requireApartmentField:g,showPhoneField:E,requirePhoneField:_}),s):null}))},1094:()=>{},7259:()=>{}}]);