(()=>{"use strict";var e,t={677:(e,t,o)=>{const r=window.wp.blocks,n=window.wp.element;window.React;let a=function(e){return e.PREVIEW="preview",e.EDIT="edit",e}({});const c=window.wp.components,l=window.wp.blockEditor,i=window.wp.serverSideRender;var s=o.n(i);const u=JSON.parse('{"u2":"njw/product-cat-cover-image"}');(0,r.registerBlockType)(u.u2,{edit:({name:e,attributes:t,setAttributes:o})=>{const i=(0,l.useBlockProps)(),{mode:s}=t,{title:u}=(0,r.getBlockType)(e),p=s===a.PREVIEW?"Switch to Edit":"Switch to Preview",d=s===a.PREVIEW?"edit":"welcome-view-site";return(0,n.createElement)("div",{...i},(0,n.createElement)(l.BlockControls,null,(0,n.createElement)(c.IconButton,{className:"components-icon-button components-toolbar__control",label:p,icon:d,onClick:()=>{o({mode:s===a.PREVIEW?a.EDIT:a.PREVIEW})}})),(0,n.createElement)("div",null,(0,n.createElement)("div",{className:"wp-block-cover is-light",style:{minHeight:"450px",aspectRatio:"unset"}},(0,n.createElement)("span",{"aria-hidden":"true",className:"wp-block-cover__background has-lite-background-color has-background-dim"}),(0,n.createElement)("img",{src:"https://dummyimage.com/16:9x1080/",className:"wp-block-cover__image-background wp-post-image",alt:"",style:{objectFit:"cover"},loading:"lazy"}),(0,n.createElement)("div",{className:"wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow"},(0,n.createElement)("div",{className:"wp-block-group is-layout-constrained wp-container-core-group-is-layout-8 wp-block-group-is-layout-constrained"},(0,n.createElement)("h1",{className:"wp-block-query-title has-x-large-font-size"},"Category: ",(0,n.createElement)("span",null," Title")))))))},save:function({attributes:e}){const t=l.useBlockProps.save(),{title:o,productId:r,itemPerPage:a}=e;return(0,n.createElement)("div",{...t},(0,n.createElement)(s(),null))}})}},o={};function r(e){var n=o[e];if(void 0!==n)return n.exports;var a=o[e]={exports:{}};return t[e](a,a.exports,r),a.exports}r.m=t,e=[],r.O=(t,o,n,a)=>{if(!o){var c=1/0;for(u=0;u<e.length;u++){o=e[u][0],n=e[u][1],a=e[u][2];for(var l=!0,i=0;i<o.length;i++)(!1&a||c>=a)&&Object.keys(r.O).every((e=>r.O[e](o[i])))?o.splice(i--,1):(l=!1,a<c&&(c=a));if(l){e.splice(u--,1);var s=n();void 0!==s&&(t=s)}}return t}a=a||0;for(var u=e.length;u>0&&e[u-1][2]>a;u--)e[u]=e[u-1];e[u]=[o,n,a]},r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={292:0,444:0};r.O.j=t=>0===e[t];var t=(t,o)=>{var n,a,c=o[0],l=o[1],i=o[2],s=0;if(c.some((t=>0!==e[t]))){for(n in l)r.o(l,n)&&(r.m[n]=l[n]);if(i)var u=i(r)}for(t&&t(o);s<c.length;s++)a=c[s],r.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return r.O(u)},o=self.webpackChunknjw_blocks=self.webpackChunknjw_blocks||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})();var n=r.O(void 0,[444],(()=>r(677)));n=r.O(n)})();