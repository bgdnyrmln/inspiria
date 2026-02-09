import{i as f}from"./index-D04I7s-p.js";import{b as u}from"./helpers-CJiaW3rk.js";function w(c){const s=u(c);s.pagination&&d(s.pagination);function d(n){({el:n,current:parseInt(n.dataset.current,10),total:parseInt(n.dataset.total,10),render(){let t="";const e=this.current,a=this.total;t+=e>1?this.arrow(e-1,"prev"):this.arrowDisabled("prev"),t+=this.pageLink(1);const l=Math.max(2,e-3);l>2&&(t+='<span class="ellipsis">…</span>');const i=Math.min(a-1,e+3);for(let o=l;o<=i;o++)t+=this.pageLink(o);i<a-1&&(t+='<span class="ellipsis">…</span>'),a>1&&(t+=this.pageLink(a)),t+=e<a?this.arrow(e+1,"next"):this.arrowDisabled("next"),this.el.innerHTML=t},pageLink(t){return t===this.current?`<span class="active">${t}</span>`:`<a href="${this.pageUrl(t)}" data-page="${t}">${t}</a>`},arrow(t,e){return`
          <a href="${this.pageUrl(t)}" data-page="${t}" class="${e}">
            ${this.icon(e)}
          </a>
        `},arrowDisabled(t){return`
          <a class="disabled ${t}">
            ${this.icon(t)}
          </a>
        `},icon(t){return t==="prev"?`<svg width="6" height="10" viewBox="0 0 6 10">
               <path d="M4.46 0.92L0.46 4.92L4.46 8.92"/>
             </svg>`:`<svg width="6" height="10" viewBox="0 0 6 10">
               <path d="M0.92 8.92L4.92 4.92L0.92 0.92"/>
             </svg>`},pageUrl(t){const e=new URL(window.location.href);return t===1?e.searchParams.delete("paged"):e.searchParams.set("paged",t),e.toString()}}).render()}const p=f('[data-ref="loadMore"]',g);c.addEventListener("click",p);async function g(n){n.preventDefault();const r=n.delegateTarget;r.classList.add("button--disabled");const t=new URL(r.href);try{const a=await(await fetch(t)).text(),i=new DOMParser().parseFromString(a,"text/html"),o=i.querySelector('flynt-component[name="GridPostsArchive"] [data-ref="posts"]'),h=i.querySelector('flynt-component[name="GridPostsArchive"] [data-ref="pagination"]');s.posts.append(...o.children),s.pagination.textContent="",h&&(s.pagination.append(...h.children),d(s.pagination)),r.classList.remove("button--disabled")}catch(e){console.error(e),r.classList.remove("button--disabled")}}return()=>{c.removeEventListener("click",p)}}export{w as default};
