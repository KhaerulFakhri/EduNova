<?php $v = "2.1"; $year = date('Y'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
<title>EduNova — Belajar dari Nol sampai Ahli</title>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet"/>
<style>
:root{
  --ink:#03060F;--ink2:#080E1C;--ink3:#0E1628;
  --card:#111828;--card2:#161F32;
  --border:rgba(255,255,255,.06);--border2:rgba(255,255,255,.1);
  --cyan:#00FFDB;--cd:rgba(0,255,219,.1);--cg:rgba(0,255,219,.25);
  --violet:#8B5CF6;--vd:rgba(139,92,246,.12);
  --amber:#F59E0B;--ad:rgba(245,158,11,.12);
  --green:#10B981;--gd:rgba(16,185,129,.12);
  --rose:#F43F5E;
  --text:#E2E8F4;--text2:#94A3B8;--text3:#475569;
  --ff:'Bricolage Grotesque',sans-serif;
  --mono:'JetBrains Mono',monospace;
  --rsm:10px;--rmd:16px;--rlg:24px;--rxl:32px;
}
.light-mode {
  --ink:#f8fafc;--ink2:#ffffff;--ink3:#e2e8f0;
  --card:#ffffff;--card2:#f1f5f9;
  --border:rgba(0,0,0,.08);--border2:rgba(0,0,0,.12);
  --cyan:#0891b2;--cd:rgba(8,145,178,.1);--cg:rgba(8,145,178,.25);
  --violet:#7c3aed;--vd:rgba(124,58,237,.12);
  --amber:#b45309;--ad:rgba(180,83,9,.12);
  --green:#047857;--gd:rgba(4,120,87,.12);
  --rose:#b91c1c;
  --text:#0f172a;--text2:#334155;--text3:#64748b;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:var(--ff);background:var(--ink);color:var(--text);overflow-x:hidden;min-height:100vh}
a{text-decoration:none;color:inherit}
button,input,select,textarea{font-family:var(--ff)}
img{max-width:100%;display:block}
::-webkit-scrollbar{width:5px}
::-webkit-scrollbar-track{background:var(--ink)}
::-webkit-scrollbar-thumb{background:var(--ink3);border-radius:3px}
.cdot{width:8px;height:8px;background:var(--cyan);border-radius:50%;position:fixed;pointer-events:none;z-index:9999;transform:translate(-50%,-50%);transition:width .15s,height .15s}
.cring{width:30px;height:30px;border:1px solid rgba(0,255,219,.4);border-radius:50%;position:fixed;pointer-events:none;z-index:9998;transform:translate(-50%,-50%)}
#bgc{position:fixed;inset:0;z-index:0;pointer-events:none;opacity:.4}
.page{display:none;position:relative;z-index:1;min-height:100vh}
.page.active{display:block}
.nav{position:fixed;top:0;left:0;right:0;z-index:500;height:68px;display:flex;align-items:center;justify-content:space-between;padding:0 5vw;background:rgba(3,6,15,.8);backdrop-filter:blur(24px);border-bottom:1px solid var(--border);transition:border-color .3s}
.light-mode .nav{background:rgba(255,255,255,.8)}
.nlogo{font-size:1.4rem;font-weight:800;letter-spacing:-.5px;display:flex;align-items:center;gap:8px;cursor:pointer}
.nlogo-ic{width:34px;height:34px;border-radius:10px;background:linear-gradient(135deg,var(--cyan),var(--violet));display:flex;align-items:center;justify-content:center;font-size:.9rem;color:var(--ink);font-weight:900}
.nlogo .a{color:var(--cyan)}
.nlinks{display:flex;align-items:center;gap:.25rem;list-style:none}
.nlinks a{padding:8px 16px;border-radius:8px;font-size:.875rem;font-weight:500;color:var(--text2);transition:all .2s;cursor:pointer}
.nlinks a:hover{color:var(--text);background:var(--border)}
.nlinks a.act{color:var(--cyan)}
.nright{display:flex;align-items:center;gap:.75rem}
.nnotif{width:38px;height:38px;border-radius:10px;background:var(--card);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:1rem;position:relative;transition:all .2s}
.nnotif:hover{border-color:var(--cg)}
.nbadge{position:absolute;top:-3px;right:-3px;width:16px;height:16px;border-radius:50%;background:var(--rose);font-size:.6rem;font-weight:700;display:flex;align-items:center;justify-content:center;color:#fff;border:2px solid var(--ink)}
.theme-toggle{width:38px;height:38px;border-radius:10px;background:var(--card);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:1.2rem;transition:all .2s}
.theme-toggle:hover{border-color:var(--cyan);color:var(--cyan)}
.btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:10px 22px;border-radius:var(--rsm);font-weight:600;font-size:.875rem;border:none;transition:all .2s;cursor:pointer;white-space:nowrap}
.bcyan{background:var(--cyan);color:var(--ink);box-shadow:0 0 24px rgba(0,255,219,.2)}
.bcyan:hover{box-shadow:0 0 40px rgba(0,255,219,.4);transform:translateY(-2px)}
.bviolet{background:var(--violet);color:#fff}
.bviolet:hover{background:#7c3aed;transform:translateY(-2px)}
.bghost{background:transparent;color:var(--text);border:1px solid var(--border2)}
.bghost:hover{border-color:var(--cyan);color:var(--cyan)}
.bdanger{background:var(--rose);color:#fff}
.bsuccess{background:var(--green);color:#fff}
.bsm{padding:7px 16px;font-size:.8rem}
.blg{padding:14px 32px;font-size:1rem;border-radius:var(--rmd)}
.bxl{padding:16px 40px;font-size:1.05rem;border-radius:var(--rmd)}
.bfull{width:100%}
.bdg{display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:100px;font-size:.72rem;font-weight:600;letter-spacing:.5px;font-family:var(--mono)}
.bcn{background:var(--cd);color:var(--cyan);border:1px solid rgba(0,255,219,.2)}
.bvl{background:var(--vd);color:var(--violet);border:1px solid rgba(139,92,246,.2)}
.bamb{background:var(--ad);color:var(--amber);border:1px solid rgba(245,158,11,.2)}
.bgrn{background:var(--gd);color:var(--green);border:1px solid rgba(16,185,129,.2)}
.brs{background:rgba(244,63,94,.12);color:var(--rose);border:1px solid rgba(244,63,94,.2)}
.bdot{width:6px;height:6px;border-radius:50%;background:currentColor;animation:pdot 2s ease infinite}
@keyframes pdot{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.5;transform:scale(.7)}}
.fg{margin-bottom:1.25rem}
.fl{display:block;font-size:.8rem;font-weight:600;color:var(--text2);margin-bottom:8px;letter-spacing:.3px}
.fi{width:100%;padding:12px 16px;background:rgba(255,255,255,.03);border:1px solid var(--border);border-radius:var(--rsm);color:var(--text);font-size:.9rem;outline:none;transition:all .2s;appearance:none}
.light-mode .fi{background:rgba(0,0,0,.02)}
.fi::placeholder{color:var(--text3)}
.fi:focus{border-color:var(--cyan);background:rgba(0,255,219,.03);box-shadow:0 0 0 3px rgba(0,255,219,.07)}
textarea.fi{resize:vertical;min-height:120px}
.fr{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
.iw{position:relative}
.ii{position:absolute;left:14px;top:50%;transform:translateY(-50%);font-size:1rem;pointer-events:none}
.ii+.fi{padding-left:42px}
.fck{display:flex;align-items:flex-start;gap:10px;margin-bottom:1.25rem}
.fck input[type="checkbox"]{width:18px;height:18px;margin-top:1px;accent-color:var(--cyan);cursor:pointer;flex-shrink:0}
.fck label{font-size:.82rem;color:var(--text2);line-height:1.5;cursor:pointer}
.fck label a{color:var(--cyan)}
.pws{height:3px;border-radius:2px;background:var(--border);margin-top:6px;overflow:hidden}
.pwsf{height:100%;border-radius:2px;transition:all .4s;width:0}
.pwh{font-size:.72rem;color:var(--text3);margin-top:4px;font-family:var(--mono)}
.alt{padding:12px 16px;border-radius:var(--rsm);font-size:.85rem;margin-bottom:1.25rem;display:flex;align-items:center;gap:8px}
.aok{background:rgba(16,185,129,.1);border:1px solid rgba(16,185,129,.25);color:var(--green)}
.aerr{background:rgba(244,63,94,.1);border:1px solid rgba(244,63,94,.25);color:var(--rose)}
.ainf{background:var(--cd);border:1px solid rgba(0,255,219,.2);color:var(--cyan)}
#toast{position:fixed;bottom:2rem;right:2rem;background:var(--card2);border:1px solid var(--border2);border-radius:var(--rmd);padding:14px 20px;font-size:.88rem;z-index:9000;transform:translateY(80px);opacity:0;transition:all .35s cubic-bezier(.34,1.56,.64,1);max-width:340px;display:flex;align-items:center;gap:10px;box-shadow:0 20px 60px rgba(0,0,0,.5)}
#toast.show{transform:translateY(0);opacity:1}
@keyframes fadeUp{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:translateY(0)}}
@keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
@keyframes barG{from{width:0}to{width:var(--w,0%)}}
.fu{animation:fadeUp .5s ease both}
.fu1{animation:fadeUp .5s .1s ease both}
.fu2{animation:fadeUp .5s .2s ease both}
.fu3{animation:fadeUp .5s .3s ease both}
.fu4{animation:fadeUp .5s .4s ease both}
.tc{color:var(--cyan)}.tv{color:var(--violet)}.ta{color:var(--amber)}.tg{color:var(--green)}.tm{color:var(--text2)}
.hgrad{background:linear-gradient(135deg,var(--cyan) 0%,var(--violet) 60%,var(--amber) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.hero{min-height:100vh;display:flex;align-items:center;padding:100px 5vw 80px;position:relative;overflow:hidden}
.mb{position:absolute;border-radius:50%;filter:blur(100px);pointer-events:none}
.mb1{width:600px;height:600px;background:rgba(0,255,219,.05);top:-200px;left:-100px;animation:float 10s ease-in-out infinite}
.mb2{width:500px;height:500px;background:rgba(139,92,246,.07);bottom:-150px;right:-50px;animation:float 12s ease-in-out 2s infinite reverse}
.mb3{width:300px;height:300px;background:rgba(245,158,11,.04);top:40%;left:40%;animation:float 8s ease-in-out 1s infinite}
.hcont{position:relative;z-index:1;flex:1;max-width:660px}
.hbadge{display:inline-flex;align-items:center;gap:8px;background:var(--cd);border:1px solid rgba(0,255,219,.2);border-radius:100px;padding:7px 16px;font-family:var(--mono);font-size:.7rem;color:var(--cyan);letter-spacing:1px;margin-bottom:2rem}
.hero h1{font-size:clamp(3.2rem,7vw,6rem);font-weight:800;line-height:.95;letter-spacing:-3px;margin-bottom:1.75rem}
.hsub{font-size:1.05rem;line-height:1.75;color:var(--text2);max-width:500px;margin-bottom:2.5rem;font-weight:300}
.hact{display:flex;gap:1rem;flex-wrap:wrap;margin-bottom:3.5rem}
.hproof{display:flex;align-items:center;gap:1.5rem;padding:16px 20px;background:var(--card);border:1px solid var(--border);border-radius:var(--rmd);max-width:440px}
.pavis{display:flex}
.pavi{width:32px;height:32px;border-radius:50%;border:2px solid var(--card);display:flex;align-items:center;justify-content:center;font-size:.7rem;font-weight:700;margin-left:-8px}
.pavi:first-child{margin-left:0}
.hvis{flex:1;max-width:500px;position:relative;display:flex;align-items:center;justify-content:center}
.hcm{width:320px;background:var(--card2);border:1px solid var(--border2);border-radius:20px;padding:24px;box-shadow:0 40px 80px rgba(0,0,0,.6);animation:float 7s ease-in-out infinite}
.hch{display:flex;align-items:center;gap:10px;margin-bottom:16px}
.hcic{width:40px;height:40px;border-radius:12px;background:linear-gradient(135deg,var(--cyan),var(--violet));display:flex;align-items:center;justify-content:center;font-size:1.1rem}
.pt{background:var(--ink3);border-radius:100px;height:6px;margin:6px 0;overflow:hidden}
.pf{height:100%;border-radius:100px;background:linear-gradient(90deg,var(--cyan),var(--violet))}
.hcmods{display:flex;flex-direction:column;gap:10px;margin-top:16px}
.hcmod{display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:10px;background:var(--ink3);font-size:.8rem}
.mch{width:22px;height:22px;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:.7rem;flex-shrink:0}
.mcd{background:var(--gd);color:var(--green)}
.mca{background:var(--cd);color:var(--cyan)}
.mcl{background:var(--border);color:var(--text3)}
.hcf{position:absolute;background:var(--card2);border:1px solid var(--border);border-radius:16px;padding:14px 18px;box-shadow:0 20px 60px rgba(0,0,0,.5)}
.hcf1{top:-30px;right:-40px;animation:float 9s ease-in-out 1s infinite reverse}
.hcf2{bottom:-20px;left:-50px;animation:float 6s ease-in-out .5s infinite}
.sec{padding:80px 5vw;position:relative}
.sey{font-family:var(--mono);font-size:.68rem;letter-spacing:3px;color:var(--cyan);text-transform:uppercase;margin-bottom:1rem}
.sh{font-size:clamp(2rem,4vw,3.2rem);font-weight:800;letter-spacing:-1.5px;line-height:1.08;margin-bottom:1rem}
.ss{color:var(--text2);font-size:1rem;line-height:1.75;max-width:540px;font-weight:300}
.sstrip{display:grid;grid-template-columns:repeat(4,1fr);border:1px solid var(--border);border-radius:var(--rlg);overflow:hidden}
.ssi{padding:32px 28px;border-right:1px solid var(--border)}
.ssi:last-child{border-right:none}
.ssv{font-size:2.8rem;font-weight:800;letter-spacing:-2px;background:linear-gradient(135deg,var(--cyan),var(--violet));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;line-height:1;margin-bottom:6px}
.ssl{font-size:.82rem;color:var(--text2)}
.fgrid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.fcard{padding:32px;border-radius:var(--rlg);background:var(--card);border:1px solid var(--border);transition:all .3s;position:relative;overflow:hidden}
.fcard::after{content:'';position:absolute;inset:0;background:linear-gradient(135deg,var(--cd),transparent);opacity:0;transition:.3s}
.fcard:hover{border-color:rgba(0,255,219,.18);transform:translateY(-5px)}
.fcard:hover::after{opacity:1}
.fic{width:54px;height:54px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;margin-bottom:1.5rem;position:relative;z-index:1}
.fcard h3{font-weight:700;font-size:1.05rem;margin-bottom:.75rem;position:relative;z-index:1}
.fcard p{color:var(--text2);font-size:.875rem;line-height:1.7;position:relative;z-index:1}
.cgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(290px,1fr));gap:1.5rem}
.cc{background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);overflow:hidden;transition:all .3s;cursor:pointer}
.cc:hover{border-color:rgba(0,255,219,.2);transform:translateY(-5px);box-shadow:0 24px 48px rgba(0,0,0,.4)}
.ccth{height:165px;display:flex;align-items:center;justify-content:center;font-size:3.5rem;position:relative;overflow:hidden}
.ccth::before{content:'';position:absolute;inset:0;background:linear-gradient(to bottom,transparent 40%,var(--card))}
.ccb{padding:20px 22px 24px}
.cctr{display:flex;align-items:center;gap:8px;margin-bottom:10px}
.cct{font-weight:700;font-size:.97rem;line-height:1.4;margin-bottom:8px}
.ccd{color:var(--text2);font-size:.82rem;line-height:1.6;margin-bottom:14px}
.ccm{display:flex;align-items:center;justify-content:space-between;border-top:1px solid var(--border);padding-top:14px}
.ccl{font-family:var(--mono);font-size:.65rem;padding:3px 8px;border-radius:5px;background:var(--ink3);color:var(--text2)}
.tgrid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.tc2{background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);padding:28px}
footer{padding:60px 5vw 36px;border-top:1px solid var(--border)}
.fgr{display:grid;grid-template-columns:2.2fr 1fr 1fr 1fr;gap:3rem;margin-bottom:3rem}
.fbr{color:var(--text2);font-size:.855rem;line-height:1.7;margin-top:1rem;max-width:280px;font-weight:300}
.fsoc{display:flex;gap:.75rem;margin-top:1.5rem}
.sbtn{width:36px;height:36px;border-radius:9px;background:var(--card);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:.9rem;transition:all .2s;cursor:pointer}
.sbtn:hover{border-color:var(--cyan);color:var(--cyan)}
.fcol h4{font-weight:700;font-size:.82rem;letter-spacing:.5px;margin-bottom:1.25rem}
.fcol ul{list-style:none;display:flex;flex-direction:column;gap:.6rem}
.fcol ul li a{font-size:.82rem;color:var(--text2);transition:color .2s;cursor:pointer}
.fcol ul li a:hover{color:var(--cyan)}
.fbot{display:flex;align-items:center;justify-content:space-between;padding-top:2rem;border-top:1px solid var(--border);font-size:.78rem;color:var(--text3)}
.ctab{background:linear-gradient(135deg,rgba(0,255,219,.06),rgba(139,92,246,.08),rgba(245,158,11,.05));border:1px solid rgba(0,255,219,.12);border-radius:var(--rxl);padding:80px 5vw;text-align:center}
.alayout{min-height:100vh;display:flex}
.apanel{flex:1;display:flex;flex-direction:column;justify-content:center;padding:80px 8%;position:relative;overflow:hidden;background:linear-gradient(160deg,var(--ink2),var(--ink3))}
.apanel::before{content:'';position:absolute;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(0,255,219,.05),transparent 70%);top:-200px;left:-150px}
.api{position:relative;z-index:1;max-width:440px}
.api h2{font-size:2.6rem;font-weight:800;letter-spacing:-1.5px;line-height:1.1;margin-bottom:1.25rem}
.api p{color:var(--text2);font-size:.95rem;line-height:1.75;margin-bottom:2.5rem;font-weight:300}
.afl{display:flex;flex-direction:column;gap:1rem}
.af{display:flex;align-items:center;gap:14px}
.afic{width:38px;height:38px;border-radius:11px;background:var(--cd);border:1px solid rgba(0,255,219,.15);display:flex;align-items:center;justify-content:center;font-size:.95rem;flex-shrink:0}
.afp{flex:1;display:flex;align-items:center;justify-content:center;padding:60px 52px;border-left:1px solid var(--border);overflow-y:auto;background:var(--ink)}
.afb{width:100%;max-width:380px}
.afb h1{font-size:2rem;font-weight:800;letter-spacing:-.5px;margin-bottom:.5rem}
.afb>p{color:var(--text2);font-size:.875rem;margin-bottom:2.5rem;font-weight:300}
.adiv{display:flex;align-items:center;gap:12px;margin:1.5rem 0;color:var(--text3);font-size:.75rem}
.adiv::before,.adiv::after{content:'';flex:1;height:1px;background:var(--border)}
.socrow{display:grid;grid-template-columns:1fr 1fr;gap:.75rem}
.sbso{display:flex;align-items:center;justify-content:center;gap:8px;padding:10px;background:var(--card);border:1px solid var(--border);border-radius:var(--rsm);color:var(--text);font-size:.82rem;cursor:pointer;transition:all .2s}
.sbso:hover{border-color:var(--cyan);background:var(--cd)}
.aswitch{text-align:center;margin-top:1.75rem;font-size:.83rem;color:var(--text2)}
.aswitch a{color:var(--cyan);font-weight:600;cursor:pointer}
.flnk{display:block;text-align:right;font-size:.78rem;color:var(--cyan);margin-top:-6px;margin-bottom:1.25rem;cursor:pointer}
.flnk:hover{text-decoration:underline}
.rsteps{display:flex;align-items:center;gap:.5rem;margin-bottom:2.5rem}
.rstep{display:flex;align-items:center;gap:8px;flex:1;font-size:.72rem;color:var(--text3);font-weight:500}
.rstep.act{color:var(--cyan)}.rstep.dn{color:var(--green)}
.snum{width:24px;height:24px;border-radius:50%;border:1.5px solid currentColor;display:flex;align-items:center;justify-content:center;font-size:.65rem;font-weight:700;flex-shrink:0;font-family:var(--mono)}
.sline{flex:1;height:1px;background:var(--border);margin:0 4px}
.sline.dn{background:var(--green)}
.iopt{padding:10px 14px;border-radius:var(--rsm);background:var(--card);border:1.5px solid var(--border);font-size:.82rem;cursor:pointer;transition:.2s;text-align:center}
.iopt:hover{border-color:var(--cyan);background:var(--cd)}
.iopt.sel{border-color:var(--cyan);background:var(--cd);color:var(--cyan);font-weight:600}
.dlayout{display:flex;min-height:100vh;padding-top:68px}
.sidebar{width:256px;flex-shrink:0;background:var(--ink2);border-right:1px solid var(--border);padding:1.75rem 1.25rem;position:sticky;top:68px;height:calc(100vh - 68px);overflow-y:auto;display:flex;flex-direction:column}
.sidebar::-webkit-scrollbar{width:3px}
.sbu{display:flex;align-items:center;gap:10px;padding:14px;border-radius:var(--rmd);background:var(--card);border:1px solid var(--border);margin-bottom:1.5rem}
.davi{width:38px;height:38px;border-radius:11px;background:linear-gradient(135deg,var(--cyan),var(--violet));display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.85rem;color:var(--ink);flex-shrink:0}
.sbui h4{font-size:.85rem;font-weight:700}
.sbui span{font-size:.7rem;color:var(--cyan);font-family:var(--mono)}
.sbsl{font-family:var(--mono);font-size:.6rem;letter-spacing:2.5px;color:var(--text3);text-transform:uppercase;padding:0 10px;margin-top:1.5rem;margin-bottom:.5rem}
.sbnav{list-style:none;display:flex;flex-direction:column;gap:2px}
.sbnav li a{display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:var(--rsm);font-size:.855rem;font-weight:500;color:var(--text2);transition:all .2s;cursor:pointer}
.sbnav li a:hover{color:var(--text);background:var(--card)}
.sbnav li a.act{color:var(--cyan);background:var(--cd);border:1px solid rgba(0,255,219,.12)}
.sbic{width:20px;text-align:center;font-size:1rem}
.sbbdg{margin-left:auto;background:var(--rose);color:#fff;font-size:.6rem;font-weight:700;width:18px;height:18px;border-radius:50%;display:flex;align-items:center;justify-content:center}
.dmain{flex:1;padding:2.5rem 3rem;min-width:0}
.dp{display:none}
.dp.act{display:block}
.dtb{display:flex;align-items:center;justify-content:space-between;margin-bottom:2.5rem;flex-wrap:wrap;gap:1rem}
.dtb h1{font-size:1.6rem;font-weight:800;letter-spacing:-.5px}
.dtb p{font-size:.875rem;color:var(--text2);margin-top:2px;font-weight:300}
.dsc{display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-bottom:2rem}
.dcard{background:var(--card);border:1px solid var(--border);border-radius:var(--rmd);padding:22px;position:relative;overflow:hidden}
.dcard::before{content:'';position:absolute;top:-20px;right:-20px;width:80px;height:80px;border-radius:50%;filter:blur(30px);opacity:.3}
.dcard:nth-child(1)::before{background:var(--cyan)}.dcard:nth-child(2)::before{background:var(--violet)}
.dcard:nth-child(3)::before{background:var(--amber)}.dcard:nth-child(4)::before{background:var(--green)}
.dsic{font-size:1.3rem;margin-bottom:.75rem}
.dsv{font-size:1.9rem;font-weight:800;letter-spacing:-1px;line-height:1}
.dsl{font-size:.75rem;color:var(--text2);margin-top:5px}
.dsch{font-size:.7rem;font-weight:600;margin-top:8px;font-family:var(--mono)}
.dup{color:var(--green)}.ddn{color:var(--rose)}
.dg2{display:grid;grid-template-columns:1.6fr 1fr;gap:1.5rem}
.dg3{display:grid;grid-template-columns:1fr 1fr 1fr;gap:1.5rem}
.dc{background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);padding:24px}
.dch{display:flex;align-items:center;justify-content:space-between;margin-bottom:1.5rem}
.dch h3{font-weight:700;font-size:.95rem}
.cpi{margin-bottom:1.25rem}
.cph{display:flex;justify-content:space-between;align-items:center;margin-bottom:6px}
.cpn{font-size:.855rem;font-weight:600}
.cpp{font-family:var(--mono);font-size:.72rem;color:var(--cyan)}
.cpb{height:5px;background:var(--ink3);border-radius:3px;overflow:hidden}
.cpbf{height:100%;border-radius:3px;animation:barG .9s ease both}
.cpm{display:flex;justify-content:space-between;margin-top:4px}
.cpm span{font-size:.72rem;color:var(--text3);font-family:var(--mono)}
.alist{display:flex;flex-direction:column}
.ai{display:flex;align-items:flex-start;gap:12px;padding:12px 0;border-bottom:1px solid var(--border)}
.ai:last-child{border-bottom:none}
.adot{width:8px;height:8px;border-radius:50%;margin-top:5px;flex-shrink:0}
.atext{font-size:.84rem;font-weight:500;margin-bottom:3px}
.atime{font-size:.72rem;color:var(--text3);font-family:var(--mono)}
.mcal{font-size:.78rem}
.calh{display:flex;justify-content:space-between;align-items:center;margin-bottom:12px}
.calt{font-weight:700;font-size:.875rem}
.caln{background:var(--ink3);border:none;color:var(--text2);width:26px;height:26px;border-radius:7px;cursor:pointer;transition:.2s}
.caln:hover{color:var(--cyan)}
.cald{display:grid;grid-template-columns:repeat(7,1fr);gap:2px;text-align:center;margin-bottom:4px}
.caldl{color:var(--text3);font-family:var(--mono);font-size:.63rem;padding:4px 0}
.calday{width:28px;height:28px;border-radius:7px;display:flex;align-items:center;justify-content:center;cursor:pointer;margin:auto;transition:.2s;font-size:.72rem}
.calday:hover{background:var(--card2)}
.calday.today{background:var(--cyan);color:var(--ink);font-weight:700}
.calday.hev::after{content:'';position:absolute;bottom:3px;left:50%;transform:translateX(-50%);width:4px;height:4px;border-radius:50%;background:var(--violet)}
.calday.hev{position:relative}
.calday.om{color:var(--text3)}
.lbi{display:flex;align-items:center;gap:12px;padding:12px 0;border-bottom:1px solid var(--border)}
.lbi:last-child{border-bottom:none}
.lbr{font-family:var(--mono);font-size:.72rem;font-weight:700;width:24px;text-align:center;color:var(--text3)}
.lbr.gd{color:var(--amber)}.lbr.sv{color:#94A3B8}.lbr.br{color:#CD7F32}
.lbav{width:34px;height:34px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.78rem;flex-shrink:0}
.lbnm{font-size:.855rem;font-weight:600;flex:1}
.lbpt{font-family:var(--mono);font-size:.78rem;color:var(--cyan);font-weight:700}
.mlayout{display:grid;grid-template-columns:300px 1fr;gap:1.5rem;align-items:start}
.msb{background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);overflow:hidden;position:sticky;top:90px;max-height:calc(100vh - 120px);overflow-y:auto}
.msbh{padding:20px;border-bottom:1px solid var(--border)}
.msbt{font-weight:700;font-size:.95rem;margin-bottom:4px}
.msbm{font-size:.75rem;color:var(--text2)}
.mlist{padding:12px}
.mchap{margin-bottom:.5rem}
.chtog{display:flex;align-items:center;justify-content:space-between;padding:10px 12px;border-radius:var(--rsm);cursor:pointer;font-weight:600;font-size:.855rem;background:var(--ink3);user-select:none;transition:.2s}
.chtog:hover{background:var(--ink)}
.chcon{padding:4px 0}
.li{display:flex;align-items:center;gap:10px;padding:9px 12px;border-radius:var(--rsm);cursor:pointer;transition:.2s;font-size:.82rem}
.li:hover{background:var(--cd)}
.li.act{background:var(--cd);color:var(--cyan);font-weight:600}
.li.comp{color:var(--green)}
.lic{width:22px;text-align:center;font-size:.85rem;flex-shrink:0}
.ldur{margin-left:auto;font-family:var(--mono);font-size:.65rem;color:var(--text3)}
.lcont{background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);padding:32px}
.lbc{display:flex;align-items:center;gap:8px;font-size:.78rem;color:var(--text2);margin-bottom:20px;font-family:var(--mono)}
.lbc span{color:var(--cyan)}
.ltit{font-size:1.4rem;font-weight:800;letter-spacing:-.5px;margin-bottom:1rem}
/* VIDEO DIGANTI DENGAN SCRIPT AREA */
.lvid{
  aspect-ratio:16/9;
  border-radius:var(--rmd);
  background:var(--ink3);
  border:1px solid var(--border);
  display:flex;
  align-items:center;
  justify-content:center;
  margin-bottom:1.75rem;
  position:relative;
  overflow:hidden;
  background:rgba(0,0,0,.3);
  backdrop-filter:blur(4px);
}
.script-panel{
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  background:rgba(3,6,15,.95);
  backdrop-filter:blur(12px);
  padding:1.5rem;
  overflow-y:auto;
  z-index:2;
}
.script-panel code{
  background:var(--ink3);
  padding:2px 6px;
  border-radius:4px;
  font-family:var(--mono);
  font-size:.8rem;
}
.pbtn{position:absolute;width:64px;height:64px;border-radius:50%;background:rgba(0,255,219,.9);color:var(--ink);display:flex;align-items:center;justify-content:center;font-size:1.5rem;transition:transform .2s;box-shadow:0 0 40px rgba(0,255,219,.4);cursor:pointer;z-index:1}
.lbody{font-size:.9rem;line-height:1.85;color:var(--text2);font-weight:300}
.lbody h3{color:var(--text);font-weight:700;font-size:1.05rem;margin:1.5rem 0 .75rem}
.lbody code{background:var(--ink3);border:1px solid var(--border2);border-radius:6px;padding:2px 8px;font-family:var(--mono);font-size:.83rem;color:var(--cyan)}
.codeblock{background:var(--ink);border:1px solid var(--border2);border-radius:var(--rmd);padding:20px;margin:1.25rem 0;font-family:var(--mono);font-size:.82rem;line-height:1.8;color:#a5b4fc;overflow-x:auto}
.codeblock .kw{color:var(--cyan)}.codeblock .str{color:var(--amber)}.codeblock .cm{color:var(--text3);font-style:italic}
.lnav{display:flex;align-items:center;justify-content:space-between;margin-top:2rem;padding-top:1.5rem;border-top:1px solid var(--border)}
.qq{background:var(--ink3);border:1px solid var(--border);border-radius:var(--rmd);padding:22px;margin-bottom:1.25rem}
.qqt{font-weight:600;font-size:.95rem;margin-bottom:14px}
.qopts{display:flex;flex-direction:column;gap:.6rem}
.qopt{display:flex;align-items:center;gap:12px;padding:12px 16px;border-radius:var(--rsm);border:1px solid var(--border);cursor:pointer;transition:.2s;font-size:.875rem}
.qopt:hover{border-color:var(--cyan);background:var(--cd)}
.qopt.sel{border-color:var(--cyan);background:var(--cd);color:var(--cyan)}
.qopt.cor{border-color:var(--green);background:var(--gd);color:var(--green)}
.qopt.wrg{border-color:var(--rose);background:rgba(244,63,94,.1);color:var(--rose)}
.qic{width:24px;height:24px;border-radius:50%;border:1.5px solid currentColor;display:flex;align-items:center;justify-content:center;font-size:.65rem;font-weight:700;flex-shrink:0;font-family:var(--mono)}
.prfh{display:flex;align-items:flex-end;gap:2rem;padding:2rem;background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);margin-bottom:1.5rem;position:relative;overflow:hidden}
.prfbn{position:absolute;inset:0;bottom:auto;height:80px;background:linear-gradient(135deg,rgba(0,255,219,.1),rgba(139,92,246,.15))}
.prfav{width:80px;height:80px;border-radius:20px;background:linear-gradient(135deg,var(--cyan),var(--violet));display:flex;align-items:center;justify-content:center;font-weight:800;font-size:1.7rem;color:var(--ink);border:3px solid var(--ink2);position:relative;z-index:1}
.prfi{flex:1;position:relative;z-index:1}
.prfnm{font-size:1.4rem;font-weight:800;letter-spacing:-.5px}
.prfrl{font-size:.82rem;color:var(--cyan);font-family:var(--mono);margin-top:3px}
.prfst{display:flex;gap:2rem;margin-top:1rem}
.ps{text-align:center}.psv{font-weight:800;font-size:1.2rem}.psl{font-size:.7rem;color:var(--text2)}
.agrid{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem}
.abadge{background:var(--card);border:1px solid var(--border);border-radius:var(--rmd);padding:20px;text-align:center;transition:.3s}
.abadge:hover{border-color:rgba(0,255,219,.2);transform:translateY(-3px)}
.abadge.lck{opacity:.4;filter:grayscale(1)}
.abic{font-size:2.2rem;margin-bottom:.75rem}.abnm{font-weight:700;font-size:.82rem;margin-bottom:4px}.abds{font-size:.72rem;color:var(--text2)}
.sgrid{display:grid;grid-template-columns:220px 1fr;gap:1.5rem;align-items:start}
.snav{background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);overflow:hidden}
.snavi{display:flex;align-items:center;gap:10px;padding:13px 16px;font-size:.87rem;cursor:pointer;border-bottom:1px solid var(--border);transition:.2s}
.snavi:last-child{border-bottom:none}
.snavi:hover{background:var(--card2)}
.snavi.act{color:var(--cyan);background:var(--cd)}
.spanel{background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);padding:28px}
.spanel h3{font-weight:700;font-size:1rem;margin-bottom:1.5rem;padding-bottom:.75rem;border-bottom:1px solid var(--border)}
.togrow{display:flex;align-items:center;justify-content:space-between;padding:14px 0;border-bottom:1px solid var(--border)}
.togrow:last-of-type{border-bottom:none}
.togl h4{font-size:.875rem;font-weight:600}.togl p{font-size:.78rem;color:var(--text2);margin-top:2px}
.togbtn{width:44px;height:24px;border-radius:100px;background:var(--ink3);border:none;cursor:pointer;position:relative;transition:.3s;flex-shrink:0}
.togbtn.on{background:var(--cyan)}
.togbtn::after{content:'';position:absolute;top:3px;left:3px;width:18px;height:18px;border-radius:50%;background:#fff;transition:.3s}
.togbtn.on::after{left:23px}
.ahero{min-height:70vh;display:flex;align-items:center;padding:120px 5vw 80px;position:relative;overflow:hidden;text-align:center;flex-direction:column;justify-content:center}
.amis{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;padding:80px 5vw}
.invc{background:linear-gradient(135deg,rgba(0,255,219,.05),rgba(139,92,246,.08));border:1px solid rgba(0,255,219,.1);border-radius:var(--rxl);padding:48px;text-align:center}
.invl{display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center;margin-top:1.5rem}
.invli{background:var(--ink3);border:1px solid var(--border);border-radius:10px;padding:8px 14px;font-family:var(--mono);font-size:.78rem;display:flex;align-items:center;gap:6px}
.invlt{color:var(--cyan);font-weight:700;font-size:.95rem}
.clayout{display:grid;grid-template-columns:1fr 1.4fr;gap:4rem;padding:120px 5vw 80px;align-items:start}
.cit{display:flex;align-items:center;gap:14px;padding:14px 0;border-top:1px solid var(--border)}
.ciic{width:44px;height:44px;border-radius:12px;background:var(--cd);border:1px solid rgba(0,255,219,.15);display:flex;align-items:center;justify-content:center;font-size:1.1rem;flex-shrink:0}
.cil{font-size:.75rem;color:var(--text2);font-family:var(--mono)}.civ{font-size:.88rem;font-weight:600}
.cfc{background:var(--card);border:1px solid var(--border);border-radius:var(--rxl);padding:40px}
.cfc h3{font-weight:700;font-size:1.1rem;margin-bottom:.5rem}
.fbtn{padding:8px 18px;border-radius:100px;font-size:.8rem;font-weight:500;border:1px solid var(--border);background:transparent;color:var(--text2);cursor:pointer;transition:.2s}
.fbtn:hover,.fbtn.act{background:var(--cyan);color:var(--ink);border-color:var(--cyan);font-weight:700}
.es{text-align:center;padding:4rem 2rem;color:var(--text2)}
.es .ei{font-size:3.5rem;margin-bottom:1rem;opacity:.5}
.es h3{font-weight:700;font-size:1.1rem;margin-bottom:.5rem;color:var(--text)}
.es p{font-size:.875rem;line-height:1.65;max-width:340px;margin:0 auto 1.5rem}
.movl{position:fixed;inset:0;background:rgba(0,0,0,.75);z-index:800;display:flex;align-items:center;justify-content:center;backdrop-filter:blur(4px)}
.modal{background:var(--card);border:1px solid var(--border2);border-radius:var(--rxl);padding:36px;max-width:520px;width:90%;max-height:90vh;overflow-y:auto;position:relative}
.mclose{position:absolute;top:16px;right:16px;background:var(--ink3);border:none;color:var(--text2);width:32px;height:32px;border-radius:8px;cursor:pointer;font-size:1rem;transition:.2s}
.mclose:hover{color:var(--rose)}
/* Forum diskusi per kursus */
.forum-panel{
  margin-top:2rem;
  border-top:2px solid var(--border);
  padding-top:1.5rem;
}
.forum-header{
  display:flex;
  align-items:center;
  justify-content:space-between;
  margin-bottom:1.5rem;
  flex-wrap:wrap;
  gap:1rem;
}
.forum-post{
  background:var(--card);
  border:1px solid var(--border);
  border-radius:var(--rmd);
  padding:1.25rem;
  margin-bottom:1rem;
}
.forum-post .user{
  display:flex;
  align-items:center;
  gap:10px;
  margin-bottom:10px;
}
.forum-post .user-avatar{
  width:36px;
  height:36px;
  border-radius:12px;
  background:linear-gradient(135deg,var(--cyan),var(--violet));
  display:flex;
  align-items:center;
  justify-content:center;
  font-weight:700;
  font-size:.8rem;
  color:var(--ink);
}
.forum-post .user-name{
  font-weight:600;
  font-size:.85rem;
}
.forum-post .time{
  font-size:.7rem;
  color:var(--text3);
  font-family:var(--mono);
}
.forum-post .title{
  font-weight:700;
  font-size:1rem;
  margin:8px 0 4px;
}
.forum-post .body{
  font-size:.85rem;
  color:var(--text2);
  line-height:1.6;
  margin:6px 0;
}
.forum-actions{
  display:flex;
  gap:1rem;
  margin-top:8px;
  font-size:.75rem;
  color:var(--text2);
  cursor:pointer;
}
.forum-actions span:hover{
  color:var(--cyan);
}
@media(max-width:1200px){
  .sstrip{grid-template-columns:repeat(2,1fr)}
  .ssi:nth-child(2){border-right:none}
  .ssi{border-bottom:1px solid var(--border)}
  .ssi:last-child{border-bottom:none}
  .fgrid{grid-template-columns:repeat(2,1fr)}
  .tgrid{grid-template-columns:repeat(2,1fr)}
  .fgr{grid-template-columns:1fr 1fr}
  .dsc{grid-template-columns:repeat(2,1fr)}
  .dg2{grid-template-columns:1fr}
  .dg3{grid-template-columns:1fr 1fr}
}
@media(max-width:900px){
  .hero{flex-direction:column;gap:3rem;padding:120px 5vw 80px}
  .hvis{display:none}
  .apanel{display:none}
  .afp{border-left:none;width:100%}
  .clayout{grid-template-columns:1fr;padding:100px 5vw 60px}
  .mlayout{grid-template-columns:1fr}
  .sgrid{grid-template-columns:1fr}
  .agrid{grid-template-columns:repeat(2,1fr)}
  .amis{grid-template-columns:1fr}
}
@media(max-width:768px){
  .nlinks{display:none}
  .fgrid{grid-template-columns:1fr}
  .tgrid{grid-template-columns:1fr}
  .cgrid{grid-template-columns:1fr}
  .sidebar{display:none}
  .dmain{padding:1.5rem}
  .dsc{grid-template-columns:1fr 1fr}
  .dg3{grid-template-columns:1fr}
  .fr{grid-template-columns:1fr}
  .prfh{flex-direction:column}
  .agrid{grid-template-columns:1fr 1fr}
}
</style>
</head>
<body>

<div class="cdot" id="cdot"></div>
<div class="cring" id="cring"></div>
<canvas id="bgc"></canvas>
<div id="toast"></div>

<!-- ======= NAVBAR ======= -->
<nav class="nav" id="navbar">
  <div class="nlogo" onclick="goPage('home')">
    <div class="nlogo-ic">E</div>Edu<span class="a">Nova</span>
  </div>
  <ul class="nlinks" id="navLinks">
    <li><a onclick="goPage('home')" data-page="home" class="act">Beranda</a></li>
    <li><a onclick="goPage('about')" data-page="about">Tentang</a></li>
    <li><a onclick="goPage('content')" data-page="content">Kursus</a></li>
    <li><a onclick="goPage('contact')" data-page="contact">Kontak</a></li>
  </ul>
  <div class="nright">
    <div class="theme-toggle" id="themeToggle" onclick="toggleTheme()">🌙</div>
    <div class="nnotif" id="navNotif" onclick="goDash('notif')">🔔<div class="nbadge" id="notifBadge">0</div></div>
    <div id="navCta"></div>
  </div>
</nav>

<!-- ======================================================
     HOME
====================================================== -->
<div class="page active" id="page-home">
  <section class="hero">
    <div class="mb mb1"></div><div class="mb mb2"></div><div class="mb mb3"></div>
    <div class="hcont">
      <div class="hbadge fu"><span class="bdot"></span>INNOVATE — PLATFORM PENDIDIKAN #1</div>
      <h1 class="fu1">Belajar dari<br/><span class="hgrad">Nol, Sampai</span><br/>Ahli Sejati</h1>
      <p class="hsub fu2">Platform pembelajaran komprehensif yang membimbingmu dari dasar hingga mahir. Mulai hari ini — dari nol total, tanpa syarat!</p>
      <div class="hact fu3">
        <button class="btn bxl bcyan" onclick="goPage('register')">🚀 Mulai Gratis Sekarang</button>
        <button class="btn bxl bghost" onclick="goPage('content')">📚 Jelajahi Kursus</button>
      </div>
      <div class="hproof fu4">
        <div class="pavis">
          <div class="pavi" style="background:linear-gradient(135deg,#00FFDB,#8B5CF6);color:var(--ink)">A</div>
          <div class="pavi" style="background:linear-gradient(135deg,#F59E0B,#EF4444);color:#fff">B</div>
          <div class="pavi" style="background:linear-gradient(135deg,#10B981,#3B82F6);color:#fff">C</div>
          <div class="pavi" style="background:linear-gradient(135deg,#EC4899,#8B5CF6);color:#fff">D</div>
          <div class="pavi" style="background:var(--card);color:var(--text2);font-size:.65rem">+12k</div>
        </div>
        <div><strong style="font-size:.9rem">12,000+ pelajar</strong><br/><span style="font-size:.78rem;color:var(--text2)">Bergabung & mulai transformasi karier</span></div>
        <div style="margin-left:auto;text-align:right"><div style="color:var(--amber);letter-spacing:2px;font-size:.85rem">★★★★★</div><div style="font-size:.72rem;color:var(--text2)">4.9/5 rating</div></div>
      </div>
    </div>
    <div class="hvis">
      <div class="hcm">
        <div class="hch"><div class="hcic">📘</div><div><div style="font-weight:700;font-size:.95rem">Pemrograman Web</div><div style="font-size:.75rem;color:var(--text2)">Chapter 3: CSS Modern</div></div></div>
        <div style="display:flex;justify-content:space-between;font-size:.75rem;color:var(--text2);margin-bottom:6px"><span>Progress</span><span style="color:var(--cyan);font-family:var(--mono)">78%</span></div>
        <div class="pt"><div class="pf" style="width:78%"></div></div>
        <div class="hcmods">
          <div class="hcmod"><div class="mch mcd">✓</div><span>HTML Dasar</span><span style="margin-left:auto;font-size:.65rem;color:var(--green)">Selesai</span></div>
          <div class="hcmod"><div class="mch mcd">✓</div><span>CSS Dasar</span><span style="margin-left:auto;font-size:.65rem;color:var(--green)">Selesai</span></div>
          <div class="hcmod" style="border:1px solid rgba(0,255,219,.2)"><div class="mch mca">▶</div><span style="color:var(--cyan)">Flexbox & Grid</span><span style="margin-left:auto;font-size:.65rem;color:var(--cyan)">Aktif</span></div>
          <div class="hcmod" style="opacity:.5"><div class="mch mcl">🔒</div><span>JavaScript</span></div>
        </div>
      </div>
      <div class="hcf hcf1"><div style="font-size:.65rem;color:var(--text2);font-family:var(--mono);margin-bottom:6px">🏅 PENCAPAIAN</div><div style="font-weight:700;font-size:.88rem">First Module Done!</div><div style="font-size:.72rem;color:var(--amber)">+50 XP</div></div>
      <div class="hcf hcf2"><div style="font-size:.65rem;color:var(--text2);font-family:var(--mono);margin-bottom:8px">🔥 STREAK</div><div style="display:flex;gap:4px;align-items:flex-end"><div style="width:12px;height:24px;border-radius:3px;background:var(--cyan);opacity:.3"></div><div style="width:12px;height:32px;border-radius:3px;background:var(--cyan);opacity:.5"></div><div style="width:12px;height:40px;border-radius:3px;background:var(--cyan);opacity:.7"></div><div style="width:12px;height:48px;border-radius:3px;background:var(--cyan)"></div></div><div style="font-size:.65rem;color:var(--text2);margin-top:4px;font-family:var(--mono)">4 hari berturut</div></div>
    </div>
  </section>

  <section style="padding:0 5vw 80px">
    <div class="sstrip">
      <div class="ssi"><div class="ssv">12K+</div><div class="ssl">Pelajar Aktif</div></div>
      <div class="ssi"><div class="ssv">200+</div><div class="ssl">Modul Kursus</div></div>
      <div class="ssi"><div class="ssv">50+</div><div class="ssl">Instruktur Ahli</div></div>
      <div class="ssi"><div class="ssv">95%</div><div class="ssl">Tingkat Kelulusan</div></div>
    </div>
  </section>

  <section class="sec" style="padding-top:20px">
    <div style="text-align:center;margin-bottom:3.5rem">
      <p class="sey">✦ Keunggulan Platform</p>
      <h2 class="sh">Dirancang untuk <span class="tc">Hasil Terbaik</span></h2>
      <p class="ss" style="margin:0 auto">Setiap fitur dibangun untuk memastikan pengalaman belajar yang efektif dari nol.</p>
    </div>
    <div class="fgrid">
      <div class="fcard"><div class="fic" style="background:var(--cd);border:1px solid rgba(0,255,219,.15)">🛤️</div><h3>Dari Nol ke Ahli</h3><p>Jalur belajar terstruktur dari konsep paling dasar, dipandu langkah demi langkah tanpa asumsi pengetahuan awal.</p></div>
      <div class="fcard"><div class="fic" style="background:var(--vd);border:1px solid rgba(139,92,246,.15)">🤖</div><h3>AI Tutor Personal</h3><p>Asisten AI yang selalu siap menjawab pertanyaan dan menyesuaikan materi dengan gaya belajarmu.</p></div>
      <div class="fcard"><div class="fic" style="background:var(--ad);border:1px solid rgba(245,158,11,.15)">💻</div><h3>Coding Playground</h3><p>Editor kode langsung di browser — tulis, jalankan, dan lihat hasilnya secara instan tanpa instalasi.</p></div>
      <div class="fcard"><div class="fic" style="background:var(--gd);border:1px solid rgba(16,185,129,.15)">🏅</div><h3>Gamifikasi & XP</h3><p>Sistem XP, streak harian, badge pencapaian, dan leaderboard yang membuat belajar terasa seru.</p></div>
      <div class="fcard"><div class="fic" style="background:rgba(244,63,94,.1);border:1px solid rgba(244,63,94,.15)">👥</div><h3>Mentoring Live</h3><p>Sesi tanya jawab langsung dengan instruktur berpengalaman setiap minggu untuk memastikan tidak ada yang tertinggal.</p></div>
      <div class="fcard"><div class="fic" style="background:var(--cd);border:1px solid rgba(0,255,219,.15)">📱</div><h3>Belajar di Mana Saja</h3><p>Responsif sempurna di semua perangkat. Progress belajarmu tersimpan otomatis dan aman.</p></div>
    </div>
  </section>

  <section class="sec" style="background:var(--ink2);padding-top:60px;padding-bottom:60px">
    <p class="sey">✦ Jalur Belajar</p>
    <h2 class="sh">Dari <span class="tc">Nol</span> Hingga <span class="tv">Siap Kerja</span></h2>
    <p class="ss">Tidak perlu pengalaman. Kurikulum terstruktur memastikan kamu tahu langkah selanjutnya.</p>
    <div style="display:flex;flex-direction:column;gap:.75rem;margin-top:2.5rem">
      <div style="display:flex;gap:1.25rem;align-items:stretch"><div style="display:flex;flex-direction:column;align-items:center;width:40px;flex-shrink:0"><div style="width:36px;height:36px;border-radius:50%;background:var(--cyan);color:var(--ink);display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.85rem">1</div><div style="flex:1;width:2px;background:linear-gradient(var(--cyan),var(--violet));margin:4px 0"></div></div><div style="flex:1;background:var(--card);border:1px solid rgba(0,255,219,.15);border-radius:var(--rmd);padding:20px 24px;margin-bottom:.75rem"><div style="display:flex;align-items:center;gap:10px;margin-bottom:8px"><span style="font-size:1.3rem">🌱</span><h3 style="font-weight:700;font-size:.97rem">Fondasi — Pemula Total</h3><span class="bdg bcn" style="margin-left:auto">0-3 Bulan</span></div><p style="font-size:.855rem;color:var(--text2);line-height:1.7">HTML, CSS dasar, logika pemrograman. Tidak perlu pengalaman apapun sebelumnya.</p><div style="display:flex;gap:.5rem;flex-wrap:wrap;margin-top:10px"><span class="bdg bcn" style="font-size:.65rem">HTML</span><span class="bdg bcn" style="font-size:.65rem">CSS</span><span class="bdg bcn" style="font-size:.65rem">Algoritma</span><span class="bdg bcn" style="font-size:.65rem">Git</span></div></div></div>
      <div style="display:flex;gap:1.25rem;align-items:stretch"><div style="display:flex;flex-direction:column;align-items:center;width:40px;flex-shrink:0"><div style="width:36px;height:36px;border-radius:50%;background:var(--violet);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.85rem">2</div><div style="flex:1;width:2px;background:linear-gradient(var(--violet),var(--amber));margin:4px 0"></div></div><div style="flex:1;background:var(--card);border:1px solid rgba(139,92,246,.15);border-radius:var(--rmd);padding:20px 24px;margin-bottom:.75rem"><div style="display:flex;align-items:center;gap:10px;margin-bottom:8px"><span style="font-size:1.3rem">🌿</span><h3 style="font-weight:700;font-size:.97rem">Pengembangan — Menengah</h3><span class="bdg bvl" style="margin-left:auto">3-6 Bulan</span></div><p style="font-size:.855rem;color:var(--text2);line-height:1.7">JavaScript, React/Vue, Node.js, database, dan API modern.</p><div style="display:flex;gap:.5rem;flex-wrap:wrap;margin-top:10px"><span class="bdg bvl" style="font-size:.65rem">JavaScript</span><span class="bdg bvl" style="font-size:.65rem">React</span><span class="bdg bvl" style="font-size:.65rem">Node.js</span><span class="bdg bvl" style="font-size:.65rem">SQL</span></div></div></div>
      <div style="display:flex;gap:1.25rem;align-items:stretch"><div style="display:flex;flex-direction:column;align-items:center;width:40px;flex-shrink:0"><div style="width:36px;height:36px;border-radius:50%;background:var(--amber);color:var(--ink);display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.85rem">3</div><div style="flex:1;width:2px;background:linear-gradient(var(--amber),var(--green));margin:4px 0"></div></div><div style="flex:1;background:var(--card);border:1px solid rgba(245,158,11,.15);border-radius:var(--rmd);padding:20px 24px;margin-bottom:.75rem"><div style="display:flex;align-items:center;gap:10px;margin-bottom:8px"><span style="font-size:1.3rem">🌳</span><h3 style="font-weight:700;font-size:.97rem">Spesialisasi — Lanjutan</h3><span class="bdg bamb" style="margin-left:auto">6-9 Bulan</span></div><p style="font-size:.855rem;color:var(--text2);line-height:1.7">DevOps, Cloud, AI/ML sesuai jalur karier pilihanmu.</p><div style="display:flex;gap:.5rem;flex-wrap:wrap;margin-top:10px"><span class="bdg bamb" style="font-size:.65rem">Docker</span><span class="bdg bamb" style="font-size:.65rem">AWS/GCP</span><span class="bdg bamb" style="font-size:.65rem">Python ML</span></div></div></div>
      <div style="display:flex;gap:1.25rem"><div style="display:flex;flex-direction:column;align-items:center;width:40px;flex-shrink:0"><div style="width:36px;height:36px;border-radius:50%;background:var(--green);color:var(--ink);display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.85rem">4</div></div><div style="flex:1;background:var(--card);border:1px solid rgba(16,185,129,.15);border-radius:var(--rmd);padding:20px 24px"><div style="display:flex;align-items:center;gap:10px;margin-bottom:8px"><span style="font-size:1.3rem">🏆</span><h3 style="font-weight:700;font-size:.97rem">Karier Siap — Profesional</h3><span class="bdg bgrn" style="margin-left:auto">9-12 Bulan</span></div><p style="font-size:.855rem;color:var(--text2);line-height:1.7">Portfolio nyata, persiapan interview, dan bantuan penempatan kerja.</p><div style="display:flex;gap:.5rem;flex-wrap:wrap;margin-top:10px"><span class="bdg bgrn" style="font-size:.65rem">Portfolio</span><span class="bdg bgrn" style="font-size:.65rem">Interview Prep</span><span class="bdg bgrn" style="font-size:.65rem">Sertifikasi</span></div></div></div>
    </div>
  </section>

  <section class="sec">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:3rem">
      <div><p class="sey">✦ Kursus Populer</p><h2 class="sh">Pilih Jalur <span class="tc">Belajarmu</span></h2></div>
      <button class="btn bghost" onclick="goPage('content')">Lihat Semua →</button>
    </div>
    <div class="cgrid" id="homeCourses"></div>
  </section>

  <section class="sec" style="padding-top:20px">
    <div style="text-align:center;margin-bottom:3rem"><p class="sey">✦ Cerita Sukses</p><h2 class="sh">Mereka Sudah <span class="tc">Berhasil</span></h2></div>
    <div class="tgrid">
      <div class="tc2"><div style="color:var(--amber);font-size:.9rem;margin-bottom:14px;letter-spacing:2px">★★★★★</div><p style="font-size:.9rem;color:var(--text2);line-height:1.75;margin-bottom:20px;font-style:italic">"Saya mulai dari nol, tidak tahu HTML itu apa. 8 bulan di EduNova, sekarang bekerja sebagai frontend dev di startup tech."</p><div style="display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,var(--cyan),var(--violet));color:var(--ink);display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.85rem;flex-shrink:0">AS</div><div><div style="font-weight:700;font-size:.88rem">Andi Susanto</div><div style="font-size:.75rem;color:var(--text2)">Frontend Dev @ Tokopedia</div></div></div></div>
      <div class="tc2"><div style="color:var(--amber);font-size:.9rem;margin-bottom:14px;letter-spacing:2px">★★★★★</div><p style="font-size:.9rem;color:var(--text2);line-height:1.75;margin-bottom:20px;font-style:italic">"Coding playground-nya luar biasa. Langsung praktik tanpa install apapun. Penjelasan dari dasar ke lanjutan sangat runtut."</p><div style="display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,var(--violet),#ec4899);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.85rem;flex-shrink:0">RP</div><div><div style="font-weight:700;font-size:.88rem">Rania Pratiwi</div><div style="font-size:.75rem;color:var(--text2)">Full Stack Dev @ Gojek</div></div></div></div>
      <div class="tc2"><div style="color:var(--amber);font-size:.9rem;margin-bottom:14px;letter-spacing:2px">★★★★★</div><p style="font-size:.9rem;color:var(--text2);line-height:1.75;margin-bottom:20px;font-style:italic">"AI tutor-nya benar-benar membantu saat stuck. Streak belajar harian juga memotivasi saya untuk konsisten setiap hari."</p><div style="display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,var(--amber),#f97316);color:var(--ink);display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.85rem;flex-shrink:0">BM</div><div><div style="font-weight:700;font-size:.88rem">Budi Maulana</div><div style="font-size:.75rem;color:var(--text2)">Data Engineer @ Traveloka</div></div></div></div>
    </div>
  </section>

  <section class="sec">
    <div class="ctab">
      <p class="sey" style="text-align:center">✦ Mulai Sekarang</p>
      <h2 class="sh" style="text-align:center;margin:0 auto 1rem">Investasi Terbaik<br/><span class="tc">Adalah Dirimu Sendiri</span></h2>
      <p class="ss" style="text-align:center;margin:0 auto 2.5rem">Daftar gratis, mulai dari nol. Tidak perlu pengalaman, tidak perlu kartu kredit.</p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
        <button class="btn bxl bcyan" onclick="goPage('register')">🚀 Mulai Belajar Gratis</button>
        <button class="btn bxl bghost" onclick="goPage('about')">Pelajari Lebih Lanjut</button>
      </div>
      <div style="display:flex;gap:2rem;justify-content:center;margin-top:2.5rem;flex-wrap:wrap">
        <div style="display:flex;align-items:center;gap:6px;font-size:.82rem;color:var(--text2)"><span style="color:var(--green)">✓</span> Gratis selamanya</div>
        <div style="display:flex;align-items:center;gap:6px;font-size:.82rem;color:var(--text2)"><span style="color:var(--green)">✓</span> Tanpa kartu kredit</div>
        <div style="display:flex;align-items:center;gap:6px;font-size:.82rem;color:var(--text2)"><span style="color:var(--green)">✓</span> Mulai dari nol</div>
      </div>
    </div>
  </section>

  <footer>
    <div class="fgr">
      <div>
        <div class="nlogo" style="cursor:default"><div class="nlogo-ic">E</div>Edu<span class="a">Nova</span></div>
        <p class="fbr">Platform pembelajaran inovatif yang membimbingmu dari nol hingga karier impian di dunia digital.</p>
        <div class="fsoc"><div class="sbtn">📘</div><div class="sbtn">🐦</div><div class="sbtn">📸</div><div class="sbtn">💼</div></div>
      </div>
      <div class="fcol"><h4>PLATFORM</h4><ul><li><a onclick="goPage('content')">Semua Kursus</a></li><li><a onclick="goPage('register')">Daftar Gratis</a></li><li><a onclick="requireLogin()">Dashboard</a></li><li><a>Sertifikasi</a></li></ul></div>
      <div class="fcol"><h4>PERUSAHAAN</h4><ul><li><a onclick="goPage('about')">Tentang Kami</a></li><li><a>Blog</a></li><li><a onclick="goPage('contact')">Kontak</a></li></ul></div>
      <div class="fcol"><h4>LEGAL</h4><ul><li><a>Kebijakan Privasi</a></li><li><a>Syarat Penggunaan</a></li><li><a>Cookie Policy</a></li></ul></div>
    </div>
    <div class="fbot"><span>© <?= $year ?> EduNova. Dibuat Oleh Tim Aetura Untuk Memajukan Pendidikan Indonesia.</span><span style="font-family:var(--mono);font-size:.7rem">v<?= $v ?></span></div>
  </footer>
</div>

<!-- ======================================================
     LOGIN (Google/GitHub removed)
====================================================== -->
<div class="page" id="page-login">
  <div class="alayout">
    <div class="apanel">
      <div class="api">
        <div class="bdg bcn" style="margin-bottom:1.5rem"><span class="bdot"></span>MASUK KE AKUN</div>
        <h2>Lanjutkan<br/>Perjalanan<br/><span class="tc">Belajarmu</span></h2>
        <p>Progress belajarmu tersimpan aman dan siap dilanjutkan kapanpun kamu mau.</p>
        <div class="afl">
          <div class="af"><div class="afic">📊</div><span style="font-size:.88rem;color:var(--text2);font-weight:300">Pantau progress dan analitik belajarmu</span></div>
          <div class="af"><div class="afic">🏅</div><span style="font-size:.88rem;color:var(--text2);font-weight:300">Kumpulkan XP, badge, dan sertifikat</span></div>
          <div class="af"><div class="afic">🔥</div><span style="font-size:.88rem;color:var(--text2);font-weight:300">Jaga streak belajar harian</span></div>
          <div class="af"><div class="afic">💬</div><span style="font-size:.88rem;color:var(--text2);font-weight:300">Forum diskusi aktif bersama komunitas</span></div>
        </div>
      </div>
    </div>
    <div class="afp">
      <div class="afb">
        <h1>Selamat Kembali 👋</h1>
        <p>Masuk untuk melanjutkan belajar dari nol.</p>
        <div id="loginAlert"></div>
        <div class="fg"><label class="fl">Alamat Email</label><div class="iw"><span class="ii">📧</span><input class="fi" type="email" id="loginEmail" placeholder="nama@email.com"/></div></div>
        <div class="fg"><label class="fl">Kata Sandi</label><div class="iw"><span class="ii">🔒</span><input class="fi" type="password" id="loginPass" placeholder="Kata sandi kamu" onkeydown="if(event.key==='Enter')doLogin()"/></div></div>
        <a class="flnk" onclick="forgotPassword()">Lupa kata sandi?</a>
        <div class="fck"><input type="checkbox" id="remMe"/><label for="remMe">Ingat saya di perangkat ini</label></div>
        <button class="btn bcyan bfull" onclick="doLogin()" style="padding:13px">Masuk ke Akun →</button>
        <!-- Google/GitHub section removed -->
        <div class="aswitch">Belum punya akun? <a onclick="goPage('register')">Daftar gratis</a></div>
      </div>
    </div>
  </div>
</div>

<!-- ======================================================
     REGISTER (Google/GitHub removed)
====================================================== -->
<div class="page" id="page-register">
  <div class="alayout">
    <div class="apanel">
      <div class="api">
        <div class="bdg bcn" style="margin-bottom:1.5rem"><span class="bdot"></span>DAFTAR GRATIS</div>
        <h2>Mulai dari<br/><span class="tc">Nol!</span><br/>Tanpa Syarat</h2>
        <p>Tidak perlu pengalaman. Tidak perlu background IT. Hanya butuh semangat belajar.</p>
        <div class="afl">
          <div class="af"><div class="afic">🎓</div><span style="font-size:.88rem;color:var(--text2);font-weight:300">Akses 50+ kursus dasar gratis</span></div>
          <div class="af"><div class="afic">🏆</div><span style="font-size:.88rem;color:var(--text2);font-weight:300">Raih sertifikat yang diakui industri</span></div>
          <div class="af"><div class="afic">🤝</div><span style="font-size:.88rem;color:var(--text2);font-weight:300">Komunitas pelajar yang saling support</span></div>
          <div class="af"><div class="afic">🚀</div><span style="font-size:.88rem;color:var(--text2);font-weight:300">Bantuan penempatan kerja untuk lulusan</span></div>
        </div>
      </div>
    </div>
    <div class="afp" style="overflow-y:auto">
      <div class="afb">
        <h1>Buat Akun Baru 🎯</h1>
        <p>Mulai belajar gratis — tanpa kartu kredit.</p>
        <div class="rsteps" id="regSteps">
          <div class="rstep act" id="rs1"><div class="snum">1</div><span>Data Diri</span></div>
          <div class="sline"></div>
          <div class="rstep" id="rs2"><div class="snum">2</div><span>Akun</span></div>
          <div class="sline" id="sl2"></div>
          <div class="rstep" id="rs3"><div class="snum">3</div><span>Minat</span></div>
        </div>
        <div id="regAlert"></div>
        <!-- Step 1 -->
        <div id="rStep1">
          <div class="fr">
            <div class="fg"><label class="fl">Nama Depan *</label><input class="fi" type="text" id="rFname" placeholder="Budi"/></div>
            <div class="fg"><label class="fl">Nama Belakang</label><input class="fi" type="text" id="rLname" placeholder="Santoso"/></div>
          </div>
          <div class="fg"><label class="fl">Tanggal Lahir</label><input class="fi" type="date" id="rDob"/></div>
          <div class="fg"><label class="fl">Institusi / Sekolah</label><input class="fi" type="text" id="rInst" placeholder="Universitas Indonesia"/></div>
          <div class="fg"><label class="fl">Status</label>
            <select class="fi" id="rStatus"><option value="">Pilih status...</option><option>Pelajar SMA/SMK</option><option>Mahasiswa</option><option>Profesional/Karyawan</option><option>Freelancer</option><option>Lainnya</option></select>
          </div>
          <button class="btn bcyan bfull" onclick="regNext(2)" style="padding:13px">Lanjut →</button>
        </div>
        <!-- Step 2 -->
        <div id="rStep2" style="display:none">
          <div class="fg"><label class="fl">Alamat Email *</label><div class="iw"><span class="ii">📧</span><input class="fi" type="email" id="rEmail" placeholder="nama@email.com"/></div></div>
          <div class="fg"><label class="fl">Username *</label><div class="iw"><span class="ii">@</span><input class="fi" type="text" id="rUname" placeholder="budisantoso" oninput="chkUname()"/></div><div id="unameHint" class="pwh"></div></div>
          <div class="fg"><label class="fl">Kata Sandi *</label><div class="iw"><span class="ii">🔒</span><input class="fi" type="password" id="rPass" placeholder="Min 8 karakter, huruf besar & angka" oninput="chkPwd()"/></div><div class="pws"><div class="pwsf" id="pwFill"></div></div><div class="pwh" id="pwHint">Masukkan kata sandi</div></div>
          <div class="fg"><label class="fl">Konfirmasi Kata Sandi *</label><div class="iw"><span class="ii">🔒</span><input class="fi" type="password" id="rPassC" placeholder="Ulangi kata sandi"/></div></div>
          <div style="display:flex;gap:.75rem;margin-top:.5rem">
            <button class="btn bghost" onclick="regNext(1)" style="flex:1;padding:13px">← Kembali</button>
            <button class="btn bcyan" onclick="regNext(3)" style="flex:2;padding:13px">Lanjut →</button>
          </div>
        </div>
        <!-- Step 3 -->
        <div id="rStep3" style="display:none">
          <p style="font-size:.85rem;color:var(--text2);margin-bottom:1.25rem;font-weight:300">Pilih topik yang kamu minati (minimal 1):</p>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:.6rem;margin-bottom:1.5rem" id="intGrid">
            <div class="iopt" onclick="togInt(this)" data-v="web">💻 Web Dev</div>
            <div class="iopt" onclick="togInt(this)" data-v="mobile">📱 Mobile Dev</div>
            <div class="iopt" onclick="togInt(this)" data-v="data">📊 Data Science</div>
            <div class="iopt" onclick="togInt(this)" data-v="ai">🤖 AI & ML</div>
            <div class="iopt" onclick="togInt(this)" data-v="uiux">🎨 UI/UX Design</div>
            <div class="iopt" onclick="togInt(this)" data-v="cloud">☁️ Cloud/DevOps</div>
            <div class="iopt" onclick="togInt(this)" data-v="security">🔐 Cybersecurity</div>
            <div class="iopt" onclick="togInt(this)" data-v="game">🎮 Game Dev</div>
          </div>
          <div class="fck"><input type="checkbox" id="agreeT"/><label for="agreeT">Saya menyetujui <a href="#">Syarat & Ketentuan</a> serta <a href="#">Kebijakan Privasi</a> EduNova.</label></div>
          <div class="fck"><input type="checkbox" id="agreeN" checked/><label for="agreeN">Kirimkan saya tips belajar dan info kursus via email.</label></div>
          <div style="display:flex;gap:.75rem">
            <button class="btn bghost" onclick="regNext(2)" style="flex:1;padding:13px">← Kembali</button>
            <button class="btn bcyan" onclick="doRegister()" style="flex:2;padding:13px">🚀 Buat Akun</button>
          </div>
        </div>
        <!-- Google/GitHub removed -->
        <div class="aswitch">Sudah punya akun? <a onclick="goPage('login')">Masuk di sini</a></div>
      </div>
    </div>
  </div>
</div>

<!-- ======================================================
     KURSUS / CONTENT
====================================================== -->
<div class="page" id="page-content">
  <div style="padding:120px 5vw 0">
    <p class="sey">✦ KATALOG KURSUS</p>
    <h1 class="sh">Semua Kursus <span class="tc">Pendidikan</span></h1>
    <p class="ss">200+ kursus dari dasar hingga lanjutan. Cocok untuk pemula total sekalipun.</p>
    <div style="display:flex;gap:1rem;margin-top:2rem;flex-wrap:wrap;align-items:center">
      <div class="iw" style="flex:1;min-width:240px"><span class="ii">🔍</span><input class="fi" type="text" id="cSearch" placeholder="Cari kursus..." oninput="filterCourses()"/></div>
      <div style="display:flex;gap:.5rem;flex-wrap:wrap" id="catF">
        <button class="fbtn act" onclick="setCat('all',this)">Semua</button>
        <button class="fbtn" onclick="setCat('web',this)">💻 Web</button>
        <button class="fbtn" onclick="setCat('ai',this)">🤖 AI</button>
        <button class="fbtn" onclick="setCat('data',this)">📊 Data</button>
        <button class="fbtn" onclick="setCat('mobile',this)">📱 Mobile</button>
        <button class="fbtn" onclick="setCat('uiux',this)">🎨 UI/UX</button>
        <button class="fbtn" onclick="setCat('cloud',this)">☁️ Cloud</button>
      </div>
    </div>
  </div>
  <section class="sec" style="padding-top:2rem">
    <div style="display:flex;align-items:center;gap:1rem;margin-bottom:2rem;flex-wrap:wrap">
      <span style="font-size:.82rem;color:var(--text2)">Level:</span>
      <div style="display:flex;gap:.5rem" id="lvlF">
        <button class="fbtn act" onclick="setLvl('all',this)">Semua</button>
        <button class="fbtn" onclick="setLvl('beginner',this)">🌱 Pemula</button>
        <button class="fbtn" onclick="setLvl('intermediate',this)">🌿 Menengah</button>
        <button class="fbtn" onclick="setLvl('advanced',this)">🌳 Lanjutan</button>
      </div>
      <div style="margin-left:auto;font-size:.82rem;color:var(--text2)" id="cCount"></div>
    </div>
    <div class="cgrid" id="contentCourses"></div>
  </section>
</div>

<!-- ======================================================
     ABOUT
====================================================== -->
<div class="page" id="page-about">
  <div class="ahero">
    <div class="mb mb1"></div><div class="mb mb2"></div>
    <div style="position:relative;z-index:1;text-align:center">
      <div class="bdg bcn" style="margin-bottom:1.5rem"><span class="bdot"></span>TENTANG EDUNOVA</div>
      <h1 class="sh" style="font-size:clamp(2.5rem,5vw,4.5rem);margin-bottom:1.5rem">Kami Percaya <span class="tc">Pendidikan</span><br/>Adalah Hak Semua Orang</h1>
      <p class="ss" style="margin:0 auto 3rem;max-width:600px;font-size:1.05rem">EduNova lahir dari keyakinan bahwa talenta tidak mengenal batas. Teknologi harus menjadi jembatan, bukan dinding.</p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
        <button class="btn blg bcyan" onclick="goPage('register')">Bergabung Gratis</button>
        <button class="btn blg bghost" onclick="goPage('contact')">Hubungi Kami</button>
      </div>
    </div>
  </div>
  <div class="amis">
    <div>
      <p class="sey">✦ Misi Kami</p>
      <h2 class="sh" style="font-size:2.2rem">Mendorong <span class="tc">Inovasi</span><br/>dalam Pendidikan</h2>
      <p style="color:var(--text2);line-height:1.85;margin-top:1.25rem;margin-bottom:2rem;font-weight:300">Kami membangun ekosistem pembelajaran inklusif dan adaptif. Setiap fitur dikembangkan berbasis riset tentang cara manusia belajar optimal di era digital.</p>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
        <div style="background:var(--card);border:1px solid var(--border);border-radius:var(--rmd);padding:20px"><div style="font-size:1.8rem;font-weight:800;color:var(--cyan)">2026</div><div style="font-size:.8rem;color:var(--text2)">Tahun Berdiri</div></div>
        <div style="background:var(--card);border:1px solid var(--border);border-radius:var(--rmd);padding:20px"><div style="font-size:1.8rem;font-weight:800;color:var(--violet)">34</div><div style="font-size:.8rem;color:var(--text2)">Provinsi Dijangkau</div></div>
        <div style="background:var(--card);border:1px solid var(--border);border-radius:var(--rmd);padding:20px"><div style="font-size:1.8rem;font-weight:800;color:var(--amber)">25+</div><div style="font-size:.8rem;color:var(--text2)">Instruktur Ahli</div></div>
        <div style="background:var(--card);border:1px solid var(--border);border-radius:var(--rmd);padding:20px"><div style="font-size:1.8rem;font-weight:800;color:var(--green)">4.9★</div><div style="font-size:.8rem;color:var(--text2)">Rating Platform</div></div>
      </div>
    </div>
    <div class="invc">
      <div style="font-size:4rem;margin-bottom:1rem">🎓</div>
      <h3 style="font-size:1.5rem;font-weight:800;letter-spacing:-1px;margin-bottom:.75rem">INNOVATE</h3>
      <p style="font-size:.82rem;color:var(--text2);font-style:italic;margin-bottom:1.5rem">Impel Novelty, Navigate, Optimize, Validate, Advance Technological Endeavors</p>
      <div class="invl">
        <div class="invli"><span class="invlt">I</span>Impel</div><div class="invli"><span class="invlt">N</span>Novelty</div>
        <div class="invli"><span class="invlt">N</span>Navigate</div><div class="invli"><span class="invlt">O</span>Optimize</div>
        <div class="invli"><span class="invlt">V</span>Validate</div><div class="invli"><span class="invlt">A</span>Advance</div>
        <div class="invli"><span class="invlt">T</span>Technological</div><div class="invli"><span class="invlt">E</span>Endeavors</div>
      </div>
      <div style="margin-top:1.5rem;display:flex;gap:.5rem;justify-content:center;flex-wrap:wrap">
        <span class="bdg bcn">Pendidikan</span><span class="bdg bvl">Inovatif</span><span class="bdg bamb">Fungsional</span><span class="bdg bgrn">Inklusif</span>
      </div>
    </div>
  </div>
  <section class="sec" style="padding-top:0">
    <p class="sey">✦ TIM KAMI</p>
    <h2 class="sh">Orang-orang di Balik <span class="tc">EduNova</span></h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:1.5rem;margin-top:3rem">
      <div style="background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);padding:28px;text-align:center;transition:all .3s"><div style="width:72px;height:72px;border-radius:20px;background:linear-gradient(135deg,var(--cyan),var(--violet));color:var(--ink);display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:800;margin:0 auto 1rem">KF</div><h3 style="font-weight:700;font-size:.97rem;margin-bottom:4px">Khaerul Fakhri</h3><span style="font-size:.78rem;color:var(--cyan);font-family:var(--mono)">Developer</span></div>
      <div style="background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);padding:28px;text-align:center;transition:all .3s"><div style="width:72px;height:72px;border-radius:20px;background:linear-gradient(135deg,var(--violet),#ec4899);color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:800;margin:0 auto 1rem">MB</div><h3 style="font-weight:700;font-size:.97rem;margin-bottom:4px">Morren Bangkit Al-Fatih</h3><span style="font-size:.78rem;color:var(--violet);font-family:var(--mono)">Developer</span></div>
      <div style="background:var(--card);border:1px solid var(--border);border-radius:var(--rlg);padding:28px;text-align:center;transition:all .3s"><div style="width:72px;height:72px;border-radius:20px;background:linear-gradient(135deg,var(--amber),#f97316);color:var(--ink);display:flex;align-items:center;justify-content:center;font-size:1.5rem;font-weight:800;margin:0 auto 1rem">RP</div><h3 style="font-weight:700;font-size:.97rem;margin-bottom:4px">Raditya Pratama</h3><span style="font-size:.78rem;color:var(--amber);font-family:var(--mono)">Developer</span></div>
    </div>
  </section>
</div>

<!-- ======================================================
     CONTACT — hanya tim dan nomor telepon
====================================================== -->
<div class="page" id="page-contact">
  <div class="clayout">
    <div>
      <div class="bdg bcn" style="margin-bottom:1.5rem"><span class="bdot"></span>HUBUNGI KAMI</div>
      <h1 style="font-size:2.5rem;font-weight:800;letter-spacing:-1.5px;margin-bottom:1rem">Ada Pertanyaan?<br/><span class="tc">Kami Siap</span><br/>Membantu 24/7</h1>
      <p style="color:var(--text2);line-height:1.75;margin-bottom:2rem;font-weight:300">Tim EduNova siap menjawab pertanyaanmu seputar kursus, teknis, atau kemitraan.</p>
      <div class="cit"><div class="ciic">👥</div><div><div class="cil">TIM PENGEMBANG</div><div class="civ">Khaerul Fakhri, Morren Bangkit Al-Fatih, Raditya Pratama</div></div></div>
      <div class="cit"><div class="ciic">📞</div><div><div class="cil">TELEPON</div><div class="civ">081212709785</div></div></div>
      <div class="cit"><div class="ciic">📧</div><div><div class="cil">EMAIL</div><div class="civ">aetura.id@gmail.com</div></div></div>
      <div class="cit"><div class="ciic">📍</div><div><div class="cil">TIM AETURA</div><div class="civ">Indonesia</div></div></div>
      <div class="cit"><div class="ciic">⏰</div><div><div class="cil">JAM KERJA</div><div class="civ">Senin–Jumat, 09.00–18.00 WIB</div></div></div>
    </div>
    <div class="cfc">
      <h3>📞 Hubungi Langsung</h3>
      <p style="font-size:.85rem;color:var(--text2);margin-bottom:2rem;font-weight:300">Anda dapat menghubungi kami melalui nomor telepon di atas untuk pertanyaan mendesak.</p>
      <div style="background:var(--cd);border-radius:var(--rmd);padding:24px;text-align:center;border:1px solid rgba(0,255,219,.2)">
        <div style="font-size:2rem;margin-bottom:12px">📱</div>
        <div style="font-weight:800;font-size:1.2rem;color:var(--cyan)">081212709785</div>
        <div style="font-size:.78rem;color:var(--text2);margin-top:6px">Tim EduNova siap membantu 24/7</div>
      </div>
    </div>
  </div>
</div>

<!-- ======================================================
     DASHBOARD (forum global dihapus, forum per kursus ada di dalam lesson)
====================================================== -->
<div class="page" id="page-dashboard">
  <div class="dlayout">
    <!-- SIDEBAR (forum link dihapus) -->
    <aside class="sidebar">
      <div class="sbu">
        <div class="davi" id="sbAvi">?</div>
        <div class="sbui"><h4 id="sbName">Pengguna</h4><span id="sbLevel">Level 1 · Pemula</span></div>
      </div>
      <p class="sbsl">UTAMA</p>
      <ul class="sbnav">
        <li><a class="act" onclick="goDash('overview')"><span class="sbic">🏠</span>Dashboard</a></li>
        <li><a onclick="goDash('myCourses')"><span class="sbic">📚</span>Kursus Saya</a></li>
        <li><a onclick="goDash('explore')"><span class="sbic">🔭</span>Jelajahi Kursus</a></li>
        <li><a onclick="goDash('lesson')"><span class="sbic">▶️</span>Lanjut Belajar</a></li>
        <li><a onclick="goDash('progress')"><span class="sbic">📊</span>Progress</a></li>
        <li><a onclick="goDash('quiz')"><span class="sbic">❓</span>Quiz & Latihan</a></li>
        <li><a onclick="goDash('cert')"><span class="sbic">🏅</span>Sertifikat</a></li>
      </ul>
      <p class="sbsl">KOMUNITAS</p>
      <ul class="sbnav">
        <li><a onclick="goDash('leaderboard')"><span class="sbic">🏆</span>Papan Peringkat</a></li>
        <li><a onclick="goDash('notif')"><span class="sbic">🔔</span>Notifikasi<div class="sbbdg" id="sbNotifBadge" style="display:none">0</div></a></li>
      </ul>
      <p class="sbsl">AKUN</p>
      <ul class="sbnav">
        <li><a onclick="goDash('profile')"><span class="sbic">👤</span>Profil Saya</a></li>
        <li><a onclick="goDash('settings')"><span class="sbic">⚙️</span>Pengaturan</a></li>
        <li><a onclick="doLogout()" style="color:var(--rose)"><span class="sbic">🚪</span>Keluar</a></li>
      </ul>
    </aside>

    <!-- MAIN -->
    <main class="dmain">

      <!-- OVERVIEW -->
      <div class="dp act" id="dp-overview">
        <div class="dtb">
          <div>
            <h1>Selamat datang, <span class="tc" id="dashName">Pengguna</span> 👋</h1>
            <p id="dashSub">Mulai perjalanan belajarmu hari ini — dari nol, satu langkah sekarang!</p>
          </div>
          <button class="btn bcyan bsm" onclick="goDash('explore')">+ Mulai Kursus</button>
        </div>
        <div class="dsc" id="dashStats"></div>
        <div class="dg2">
          <div class="dc">
            <div class="dch"><h3>📖 Progres Kursus</h3><button class="btn bghost bsm" onclick="goDash('myCourses')">Detail →</button></div>
            <div id="overviewCourses"></div>
          </div>
          <div class="dc">
            <div class="dch"><h3>⚡ Aktivitas Terbaru</h3></div>
            <div class="alist" id="overviewActivity"></div>
          </div>
        </div>
        <div class="dg3" style="margin-top:1.5rem">
          <div class="dc">
            <div class="dch"><h3>⚡ XP & Level</h3></div>
            <div id="xpCard" style="text-align:center;padding:10px 0"></div>
          </div>
          <div class="dc" id="calendarCard"></div>
          <div class="dc">
            <div class="dch"><h3>🏆 Top Pelajar</h3><button class="btn bghost bsm" onclick="goDash('leaderboard')">Lihat →</button></div>
            <div id="lbMini"></div>
          </div>
        </div>
      </div>

      <!-- MY COURSES -->
      <div class="dp" id="dp-myCourses">
        <div class="dtb">
          <div><h1>Kursus Saya 📚</h1><p>Kelola dan lanjutkan perjalanan belajarmu.</p></div>
          <button class="btn bcyan bsm" onclick="goDash('explore')">+ Tambah Kursus</button>
        </div>
        <div id="myCoursesGrid"></div>
      </div>

      <!-- EXPLORE COURSES (in dashboard) -->
      <div class="dp" id="dp-explore">
        <div class="dtb">
          <div><h1>Jelajahi Kursus 🔭</h1><p>Temukan kursus yang tepat untuk memulai perjalananmu dari nol.</p></div>
        </div>
        <div class="cgrid" id="exploreCourses"></div>
      </div>

      <!-- LESSON VIEW (dengan forum per kursus) -->
      <div class="dp" id="dp-lesson">
        <div id="lessonContainer"></div>
      </div>

      <!-- QUIZ -->
      <div class="dp" id="dp-quiz">
        <div class="dtb"><div><h1>Quiz & Latihan ❓</h1><p>Uji pemahamanmu dengan soal interaktif.</p></div></div>
        <div id="quizArea" style="max-width:720px"></div>
      </div>

      <!-- PROGRESS -->
      <div class="dp" id="dp-progress">
        <div class="dtb"><div><h1>Progress Belajar 📊</h1><p>Pantau perkembangan belajarmu secara detail.</p></div></div>
        <div class="dg2">
          <div class="dc">
            <div class="dch"><h3>📈 Aktivitas Mingguan</h3></div>
            <div id="weekChart"></div>
          </div>
          <div class="dc">
            <div class="dch"><h3>🎯 Skill Progress</h3></div>
            <div id="skillBars"></div>
          </div>
        </div>
        <div class="dc" style="margin-top:1.5rem">
          <div class="dch"><h3>📚 Detail Per Kursus</h3></div>
          <div id="progressDetail"></div>
        </div>
      </div>

      <!-- CERTIFICATE -->
      <div class="dp" id="dp-cert">
        <div class="dtb"><div><h1>Sertifikat 🏅</h1><p>Sertifikat yang sudah kamu raih.</p></div></div>
        <div id="certGrid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(320px,1fr));gap:1.5rem"></div>
      </div>

      <!-- LEADERBOARD -->
      <div class="dp" id="dp-leaderboard">
        <div class="dtb"><div><h1>Papan Peringkat 🏆</h1><p>Kompetisi sehat mendorong semangat belajar.</p></div></div>
        <div style="max-width:600px">
          <div style="display:flex;gap:.5rem;margin-bottom:1.5rem">
            <button class="fbtn act" id="lbTab1" onclick="setLbTab('monthly',this)">Bulanan</button>
            <button class="fbtn" id="lbTab2" onclick="setLbTab('weekly',this)">Mingguan</button>
            <button class="fbtn" id="lbTab3" onclick="setLbTab('alltime',this)">Sepanjang Waktu</button>
          </div>
          <div class="dc" id="lbFull"></div>
        </div>
      </div>

      <!-- NOTIF -->
      <div class="dp" id="dp-notif">
        <div class="dtb">
          <div><h1>Notifikasi 🔔</h1><p>Update terbaru untuk aktivitasmu.</p></div>
          <button class="btn bghost bsm" onclick="markAllRead()">Tandai Semua Dibaca</button>
        </div>
        <div class="dc" style="max-width:680px" id="notifList"></div>
      </div>

      <!-- PROFILE -->
      <div class="dp" id="dp-profile">
        <div class="prfh">
          <div class="prfbn"></div>
          <div class="prfav" id="profileAvi">?</div>
          <div class="prfi">
            <div class="prfnm" id="profileName">Pengguna</div>
            <div class="prfrl" id="profileRole">@username · Pelajar Aktif</div>
            <div class="prfst" id="profileStats"></div>
          </div>
          <button class="btn bghost bsm" onclick="goDash('settings')" style="margin-left:auto;position:relative;z-index:1">✏️ Edit Profil</button>
        </div>
        <div class="dc" style="margin-bottom:1.5rem">
          <div class="dch"><h3>🏅 Pencapaian</h3></div>
          <div class="agrid" id="achieveGrid"></div>
        </div>
      </div>

      <!-- SETTINGS -->
      <div class="dp" id="dp-settings">
        <div class="dtb"><div><h1>Pengaturan ⚙️</h1><p>Kelola preferensi dan keamanan akunmu.</p></div></div>
        <div class="sgrid">
          <div class="snav">
            <div class="snavi act" onclick="setTab('sprofile',this)">👤 Profil</div>
            <div class="snavi" onclick="setTab('snotif',this)">🔔 Notifikasi</div>
            <div class="snavi" onclick="setTab('sprivacy',this)">🔐 Privasi</div>
            <div class="snavi" onclick="setTab('sappear',this)">🎨 Tampilan</div>
            <div class="snavi" onclick="setTab('ssec',this)">🛡️ Keamanan</div>
          </div>
          <div class="spanel" id="settingsPanel"></div>
        </div>
      </div>

    </main>
  </div>
</div>

<!-- ======================================================
     JAVASCRIPT — Full Logic with Enhancements
====================================================== -->
<script>
/* ========================================
   STORAGE HELPERS
   Key: "en_user" = current user object
        "en_users" = array of registered users
        "en_{userId}_data" = user progress data
======================================== */
const LS = {
  get: k => { try { return JSON.parse(localStorage.getItem(k)) } catch(e) { return null } },
  set: (k, v) => localStorage.setItem(k, JSON.stringify(v)),
  del: k => localStorage.removeItem(k)
};

/* ========================================
   COURSES DATA (expanded)
======================================== */
const COURSES = [
  {id:1,cat:'web',emoji:'💻',title:'Pemrograman Web dari Nol',desc:'Mulai dari HTML dasar hingga website responsif modern. Cocok untuk pemula total.',level:'beginner',stars:4.9,students:8432,modules:28,color:'#0d1f3c',lessons:[
    {ch:'Chapter 1: HTML Dasar',items:[{t:'Pengenalan HTML',dur:'12min'},{t:'Struktur Dasar',dur:'18min'},{t:'Tags & Elemen',dur:'22min'},{t:'Form & Input',dur:'20min'}]},
    {ch:'Chapter 2: CSS Dasar',items:[{t:'Selector CSS',dur:'15min'},{t:'Box Model',dur:'20min'},{t:'Warna & Tipografi',dur:'18min'}]},
    {ch:'Chapter 3: CSS Modern',items:[{t:'Flexbox Dasar',dur:'25min'},{t:'CSS Grid Layout',dur:'30min'},{t:'Responsive Design',dur:'28min'},{t:'Animasi CSS',dur:'22min'}]},
    {ch:'Chapter 4: JavaScript',items:[{t:'JS Fundamentals',dur:'35min'},{t:'DOM Manipulation',dur:'30min'},{t:'Events & Functions',dur:'28min'},{t:'Async & Fetch',dur:'32min'}]}
  ]},
  {id:2,cat:'ai',emoji:'🧠',title:'AI & Machine Learning Dasar',desc:'Pengenalan kecerdasan buatan dan ML tanpa background matematika berat.',level:'beginner',stars:4.8,students:5891,modules:20,color:'#1a0d2e',lessons:[
    {ch:'Chapter 1: Konsep AI',items:[{t:'Apa itu AI?',dur:'15min'},{t:'Sejarah AI',dur:'12min'},{t:'AI vs ML vs DL',dur:'20min'}]},
    {ch:'Chapter 2: Python untuk AI',items:[{t:'Pengenalan Python',dur:'25min'},{t:'NumPy & Pandas',dur:'30min'},{t:'Matplotlib',dur:'20min'}]}
  ]},
  {id:3,cat:'data',emoji:'📊',title:'Data Science untuk Pemula',desc:'Analisis data dengan Python dan visualisasi yang mudah dipahami.',level:'beginner',stars:4.7,students:3247,modules:25,color:'#1a1200',lessons:[
    {ch:'Chapter 1: Pengenalan Data',items:[{t:'Apa itu Data Science?',dur:'15min'},{t:'Tipe Data',dur:'18min'},{t:'Tools yang Digunakan',dur:'12min'}]},
    {ch:'Chapter 2: Python Dasar',items:[{t:'Setup Environment',dur:'20min'},{t:'Variabel & Tipe Data',dur:'22min'},{t:'Fungsi Dasar',dur:'18min'}]}
  ]},
  {id:4,cat:'mobile',emoji:'📱',title:'Android Development Dasar',desc:'Bangun aplikasi Android pertamamu dengan Kotlin dari nol.',level:'beginner',stars:4.8,students:2100,modules:22,color:'#001a0d',lessons:[
    {ch:'Chapter 1: Setup',items:[{t:'Install Android Studio',dur:'20min'},{t:'Mengenal Interface',dur:'15min'}]},
    {ch:'Chapter 2: Kotlin Dasar',items:[{t:'Sintaks Kotlin',dur:'25min'},{t:'Variabel & Fungsi',dur:'22min'}]}
  ]},
  {id:5,cat:'uiux',emoji:'🎨',title:'UI/UX Design Fundamentals',desc:'Prinsip desain, Figma, dan cara membuat pengalaman pengguna yang luar biasa.',level:'beginner',stars:4.9,students:4567,modules:20,color:'#1a0510',lessons:[
    {ch:'Chapter 1: Dasar Desain',items:[{t:'Prinsip Visual Design',dur:'20min'},{t:'Warna & Tipografi',dur:'25min'},{t:'Layout & Grid',dur:'22min'}]},
    {ch:'Chapter 2: Figma',items:[{t:'Mengenal Figma',dur:'18min'},{t:'Frame & Component',dur:'25min'}]}
  ]},
  {id:6,cat:'cloud',emoji:'☁️',title:'Cloud Computing Essentials',desc:'AWS, GCP, dan Azure — fondasi infrastruktur cloud modern.',level:'intermediate',stars:4.6,students:1890,modules:18,color:'#100520',lessons:[
    {ch:'Chapter 1: Konsep Cloud',items:[{t:'Apa itu Cloud?',dur:'15min'},{t:'IaaS vs PaaS vs SaaS',dur:'20min'}]}
  ]},
  {id:7,cat:'web',emoji:'⚡',title:'JavaScript Lanjutan & ES2024',desc:'Async/await, closure, prototype chain, dan fitur JavaScript modern.',level:'intermediate',stars:4.8,students:6230,modules:30,color:'#0d1f3c',lessons:[
    {ch:'Chapter 1: Advanced Functions',items:[{t:'Closure',dur:'25min'},{t:'Higher-Order Functions',dur:'30min'},{t:'Currying',dur:'22min'}]}
  ]},
  {id:8,cat:'web',emoji:'⚛️',title:'React.js — Dari Dasar ke Expert',desc:'Hooks, Context API, Redux, dan membangun aplikasi React skala besar.',level:'intermediate',stars:4.9,students:7812,modules:35,color:'#001520',lessons:[
    {ch:'Chapter 1: Dasar React',items:[{t:'Apa itu React?',dur:'20min'},{t:'JSX Syntax',dur:'18min'},{t:'Components',dur:'25min'}]}
  ]},
  {id:9,cat:'ai',emoji:'🤖',title:'Deep Learning & Neural Networks',desc:'Implementasi neural network dengan TensorFlow dan PyTorch.',level:'advanced',stars:4.7,students:2341,modules:28,color:'#150520',lessons:[
    {ch:'Chapter 1: Neural Network',items:[{t:'Arsitektur ANN',dur:'30min'},{t:'Backpropagation',dur:'35min'}]}
  ]},
  {id:10,cat:'data',emoji:'🔬',title:'Advanced Data Analytics',desc:'Statistical modeling, predictive analytics, dan machine learning terapan.',level:'advanced',stars:4.8,students:1654,modules:22,color:'#1a1200',lessons:[
    {ch:'Chapter 1: Statistik Lanjutan',items:[{t:'Regresi Lanjutan',dur:'30min'},{t:'Time Series',dur:'28min'}]}
  ]},
  {id:11,cat:'mobile',emoji:'🍎',title:'iOS Development dengan Swift',desc:'Build aplikasi iOS dari scratch menggunakan Swift dan SwiftUI.',level:'intermediate',stars:4.7,students:1890,modules:24,color:'#001a0d',lessons:[
    {ch:'Chapter 1: Swift Dasar',items:[{t:'Sintaks Swift',dur:'25min'},{t:'Optionals',dur:'20min'}]}
  ]},
  {id:12,cat:'cloud',emoji:'🐳',title:'Docker & Kubernetes Mastery',desc:'Containerization dan orchestration untuk aplikasi production.',level:'advanced',stars:4.9,students:3240,modules:20,color:'#100520',lessons:[
    {ch:'Chapter 1: Docker',items:[{t:'Konsep Container',dur:'20min'},{t:'Dockerfile',dur:'25min'},{t:'Docker Compose',dur:'30min'}]}
  ]},
];

const QUIZ_DATA = {
  default: [
    {q:'Properti CSS apa yang digunakan untuk membuat container Grid?',opts:['display: flex','display: grid','display: block','position: grid'],ans:1},
    {q:'Bagaimana cara membuat 3 kolom sama lebar dengan CSS Grid?',opts:['grid-template-columns: 33% 33% 33%','grid-template-columns: repeat(3, 1fr)','columns: 3','grid-columns: 3'],ans:1},
    {q:'Property apa yang digunakan untuk memberi jarak antar grid item?',opts:['margin','padding','gap','space'],ans:2},
    {q:'Apa fungsi `grid-column: 1 / -1`?',opts:['Menempatkan item di kolom pertama','Membuat item memenuhi semua kolom','Menghapus item dari grid','Mengunci posisi item'],ans:1},
    {q:'CSS Grid berbeda dari Flexbox karena...',opts:['Grid lebih cepat','Grid adalah dua dimensi, Flexbox satu dimensi','Grid hanya untuk mobile','Flexbox lebih baru'],ans:1},
  ]
};

const LB_GLOBAL = [
  {nm:'Khaerul Fakhri',init:'KF',xp:5230,grad:'var(--amber),#f97316'},
  {nm:'Morren Bangkit Al-Fatih',init:'MB',xp:4870,grad:'var(--cyan),var(--violet)'},
  {nm:'Raditya Pratama',init:'RP',xp:4340,grad:'var(--violet),#ec4899'},
];

/* ========================================
   STATE
======================================== */
let CU = null; // current user object
let UD = null; // current user data
let catFilter = 'all', lvlFilter = 'all';
let quizAnswers = {}, quizTimer = null;
let activeCourseId = null, activeLessonIdx = 0;
let calYear, calMonth;

/* ========================================
   USER DATA STRUCTURE (starts from ZERO)
======================================== */
function newUserData(userId) {
  return {
    userId,
    xp: 0,
    level: 1,
    streak: 0,
    lastLogin: null,
    totalHours: 0,
    enrolledCourses: [], // [{id, progress:0, completedLessons:[], enrolledAt}]
    completedCourses: [],
    certificates: [],
    achievements: [],
    activity: [],
    notifications: [
      {icon:'🎉',title:'Selamat bergabung!',msg:'Selamat datang di EduNova! Mulai perjalanan belajarmu dari nol hari ini.',time:'Baru saja',read:false}
    ],
    courseForums: {}, // {courseId: [{user,init,title,body,time,replies,likes}]}
    settings: {emailNotif:true,courseNotif:true,reminderNotif:true,publicProfile:true,leaderboard:true,theme:'cyan'},
    weekActivity: [0,0,0,0,0,0,0], // Mon-Sun hours this week
  };
}

function loadUser() {
  CU = LS.get('en_user');
  if (!CU) return;
  UD = LS.get('en_ud_' + CU.id);
  if (!UD) { UD = newUserData(CU.id); saveUD(); }
  // Check streak and update week activity (increment by 0 for now, just check login)
  const today = new Date().toDateString();
  if (UD.lastLogin && UD.lastLogin !== today) {
    const yesterday = new Date(Date.now() - 86400000).toDateString();
    if (UD.lastLogin === yesterday) { UD.streak++; } else { UD.streak = 1; }
  } else if (!UD.lastLogin) { UD.streak = 1; }
  UD.lastLogin = today;
  // Add a small XP for daily login if not already today (streak maintenance)
  const loginToday = UD.activity.some(a => a.text.includes('login harian') && a.time.includes(new Date().toLocaleDateString()));
  if (!loginToday) {
    addXP(10, 'Login harian (+10 XP streak)');
    addActivity(`Login harian — streak ${UD.streak} hari`, '🔥');
  }
  saveUD();
}

function saveUD() { if (UD) LS.set('en_ud_' + CU.id, UD); }

/* ========================================
   THEME TOGGLE
======================================== */
function toggleTheme() {
  const body = document.body;
  body.classList.toggle('light-mode');
  const toggleBtn = document.getElementById('themeToggle');
  if (body.classList.contains('light-mode')) {
    toggleBtn.textContent = '☀️';
    LS.set('theme', 'light');
  } else {
    toggleBtn.textContent = '🌙';
    LS.set('theme', 'dark');
  }
}
function loadTheme() {
  const saved = LS.get('theme');
  if (saved === 'light') {
    document.body.classList.add('light-mode');
    document.getElementById('themeToggle').textContent = '☀️';
  } else {
    document.body.classList.remove('light-mode');
    document.getElementById('themeToggle').textContent = '🌙';
  }
}

/* ========================================
   ROUTING
======================================== */
function goPage(name) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  const pg = document.getElementById('page-'+name);
  if (pg) pg.classList.add('active');
  window.scrollTo({top:0,behavior:'smooth'});
  document.querySelectorAll('.nlinks a').forEach(a => a.classList.toggle('act', a.dataset.page === name));
  updateNav();
  if (name === 'home') renderHomeCourses();
  if (name === 'content') renderCourses();
  if (name === 'dashboard') { if (!CU) { goPage('login'); return; } initDash(); }
}

function goDash(name) {
  if (!CU) { goPage('login'); return; }
  goPage('dashboard');
  document.querySelectorAll('.dp').forEach(p => p.classList.remove('act'));
  const dp = document.getElementById('dp-'+name);
  if (dp) dp.classList.add('act');
  document.querySelectorAll('.sbnav li a').forEach(a => {
    a.classList.toggle('act', (a.getAttribute('onclick')||'').includes(`'${name}'`));
  });
  const renders = {
    overview: renderOverview,
    myCourses: renderMyCourses,
    explore: renderExploreDash,
    lesson: renderLesson,
    quiz: initQuiz,
    progress: renderProgress,
    cert: renderCerts,
    leaderboard: renderLB,
    notif: renderNotifs,
    profile: renderProfile,
    settings: () => renderSettingsTab('sprofile', document.querySelector('.snavi'))
  };
  if (renders[name]) renders[name]();
}

function requireLogin() { if (!CU) { goPage('login'); } else { goDash('overview'); } }

/* ========================================
   NAV
======================================== */
function updateNav() {
  const cta = document.getElementById('navCta');
  const notifBtn = document.getElementById('navNotif');
  if (CU) {
    const unread = UD ? UD.notifications.filter(n=>!n.read).length : 0;
    if (unread > 0) { notifBtn.style.display='flex'; document.getElementById('notifBadge').textContent=unread; }
    else { notifBtn.style.display='none'; }
    cta.innerHTML = `<div style="display:flex;align-items:center;gap:.75rem">
      <span style="font-size:.85rem;color:var(--text2)">👋 ${CU.fname}</span>
      <button class="btn bghost bsm" onclick="goDash('overview')">Dashboard</button>
      <button class="btn bdanger bsm" onclick="doLogout()">Keluar</button>
    </div>`;
  } else {
    notifBtn.style.display='none';
    cta.innerHTML = `<div style="display:flex;gap:.75rem">
      <button class="btn bghost" onclick="goPage('login')">Masuk</button>
      <button class="btn bcyan" onclick="goPage('register')">Daftar Gratis →</button>
    </div>`;
  }
}

/* ========================================
   AUTH
======================================== */
function doLogin() {
  const email = document.getElementById('loginEmail').value.trim();
  const pass  = document.getElementById('loginPass').value;
  clrAlert('loginAlert');
  if (!email||!pass) { showAlt('loginAlert','Mohon isi email dan kata sandi.','err'); return; }
  const users = LS.get('en_users') || [];
  const u = users.find(u => u.email===email && u.pass===pass);
  if (!u) { showAlt('loginAlert','Email atau kata sandi salah.','err'); return; }
  LS.set('en_user', u);
  loadUser();
  showToast(`Selamat datang kembali, ${u.fname}! 🎉`,'ok');
  goPage('dashboard'); goDash('overview');
}

function forgotPassword() {
  const email = prompt('Masukkan email yang terdaftar:');
  if (!email) return;
  const users = LS.get('en_users') || [];
  const user = users.find(u => u.email === email);
  if (!user) { showToast('Email tidak ditemukan!','err'); return; }
  const newPass = Math.random().toString(36).slice(-8);
  user.pass = newPass;
  LS.set('en_users', users);
  showToast(`Kata sandi baru: ${newPass} (catat dan segera ganti!)`, 'info');
}

let regStep = 1;
function regNext(to) {
  clrAlert('regAlert');
  if (to === 2) {
    if (!document.getElementById('rFname').value.trim()) { showAlt('regAlert','Nama depan harus diisi.','err'); return; }
  }
  if (to === 3) {
    const em = document.getElementById('rEmail').value.trim();
    const un = document.getElementById('rUname').value.trim();
    const pw = document.getElementById('rPass').value;
    const pc = document.getElementById('rPassC').value;
    if (!em||!un||!pw) { showAlt('regAlert','Mohon lengkapi semua kolom.','err'); return; }
    if (!/\S+@\S+\.\S+/.test(em)) { showAlt('regAlert','Format email tidak valid.','err'); return; }
    if (pw.length < 8) { showAlt('regAlert','Kata sandi minimal 8 karakter.','err'); return; }
    if (pw !== pc) { showAlt('regAlert','Konfirmasi kata sandi tidak cocok.','err'); return; }
    const users = LS.get('en_users') || [];
    if (users.find(u => u.email === em)) { showAlt('regAlert','Email sudah terdaftar. Silakan masuk.','err'); return; }
  }
  document.getElementById('rStep'+regStep).style.display='none';
  document.getElementById('rStep'+to).style.display='block';
  for (let i=1;i<=3;i++) {
    document.getElementById('rs'+i).className = 'rstep' + (i<to?' dn':i===to?' act':'');
  }
  if (to >= 2) document.getElementById('sl2').className = 'sline' + (to>=3?' dn':'');
  regStep = to;
}

function doRegister() {
  clrAlert('regAlert');
  if (!document.getElementById('agreeT').checked) { showAlt('regAlert','Kamu harus menyetujui Syarat & Ketentuan.','err'); return; }
  const ints = [...document.querySelectorAll('.iopt.sel')].map(e=>e.dataset.v);
  if (!ints.length) { showAlt('regAlert','Pilih minimal 1 topik minat.','err'); return; }
  const users = LS.get('en_users') || [];
  const newU = {
    id: 'u_' + Date.now(),
    email: document.getElementById('rEmail').value.trim(),
    pass:  document.getElementById('rPass').value,
    fname: document.getElementById('rFname').value.trim(),
    lname: document.getElementById('rLname').value.trim(),
    uname: document.getElementById('rUname').value.trim(),
    inst:  document.getElementById('rInst').value.trim(),
    status:document.getElementById('rStatus').value,
    dob:   document.getElementById('rDob').value,
    interests: ints,
    createdAt: new Date().toISOString()
  };
  users.push(newU);
  LS.set('en_users', users);
  LS.set('en_user', newU);
  loadUser();
  UD.notifications.unshift({icon:'🎉',title:'Selamat bergabung!',msg:`Hei ${newU.fname}! Selamat datang di EduNova. Mulai belajar dari nol sekarang!`,time:'Baru saja',read:false});
  saveUD();
  showToast(`Akun berhasil dibuat! Selamat datang, ${newU.fname}! 🎉`,'ok');
  regStep = 1;
  ['rStep1','rStep2','rStep3'].forEach((id,i) => document.getElementById(id).style.display = i===0?'block':'none');
  for (let i=1;i<=3;i++) document.getElementById('rs'+i).className = 'rstep'+(i===1?' act':'');
  goPage('dashboard'); goDash('overview');
}

function doLogout() {
  LS.del('en_user');
  CU = null; UD = null;
  showToast('Kamu telah keluar. Sampai jumpa! 👋','ok');
  goPage('home');
}

/* ========================================
   FORM HELPERS
======================================== */
function chkPwd() {
  const v = document.getElementById('rPass').value;
  const fill = document.getElementById('pwFill');
  const hint = document.getElementById('pwHint');
  let s = 0;
  if (v.length>=8) s++;
  if (/[A-Z]/.test(v)) s++;
  if (/[0-9]/.test(v)) s++;
  if (/[^A-Za-z0-9]/.test(v)) s++;
  const m=[{w:'0%',l:'Terlalu pendek',c:'var(--rose)'},{w:'25%',l:'Lemah',c:'var(--rose)'},{w:'50%',l:'Sedang',c:'var(--amber)'},{w:'75%',l:'Kuat',c:'var(--green)'},{w:'100%',l:'Sangat Kuat ✓',c:'var(--cyan)'}];
  fill.style.width=m[s].w; fill.style.background=m[s].c;
  hint.textContent=m[s].l; hint.style.color=m[s].c;
}

function chkUname() {
  const v = document.getElementById('rUname').value.trim();
  const hint = document.getElementById('unameHint');
  if (!v) { hint.textContent=''; return; }
  const users = LS.get('en_users') || [];
  const taken = users.find(u => u.uname === v);
  hint.textContent = taken ? '✗ Username sudah digunakan' : '✓ Username tersedia';
  hint.style.color = taken ? 'var(--rose)' : 'var(--green)';
}

function togInt(el) { el.classList.toggle('sel'); }

/* ========================================
   COURSES RENDER
======================================== */
function lvlMeta(level) {
  return {
    beginner: {lbl:'🌱 Pemula', cls:'bgrn'},
    intermediate: {lbl:'🌿 Menengah', cls:'bamb'},
    advanced: {lbl:'🌳 Lanjutan', cls:'brs'}
  }[level] || {lbl:'🌱 Pemula', cls:'bgrn'};
}

function courseCardHTML(c, enrolled=false, progress=0) {
  const lm = lvlMeta(c.level);
  const enBadge = enrolled ? `<span class="bdg bgrn" style="font-size:.6rem">✓ Enrolled</span>` : '';
  return `<div class="cc" onclick="enrollOrOpen(${c.id})">
    <div class="ccth" style="background:linear-gradient(135deg,${c.color},#08101a)">${c.emoji}</div>
    <div class="ccb">
      <div class="cctr"><span class="bdg ${lm.cls}" style="font-size:.6rem">${lm.lbl}</span><span class="ccl">${c.modules} Modul</span>${enBadge}</div>
      <div class="cct">${c.title}</div>
      <div class="ccd">${c.desc}</div>
      ${enrolled ? `<div class="pt" style="margin-bottom:8px"><div class="cpbf" style="width:${progress}%;background:linear-gradient(90deg,var(--cyan),var(--violet))"></div></div><div style="font-size:.72rem;color:var(--text2);font-family:var(--mono)">${progress}% selesai</div>` : ''}
      <div class="ccm" style="margin-top:${enrolled?'10px':'0'}">
        <div style="color:var(--amber);font-size:.82rem;font-weight:600">★ ${c.stars} <span style="color:var(--text2);font-weight:400">(${(c.students/1000).toFixed(1)}k)</span></div>
        <div style="font-size:.78rem;color:var(--text2)">👥 ${c.students.toLocaleString()}</div>
      </div>
    </div>
  </div>`;
}

function renderHomeCourses() {
  const el = document.getElementById('homeCourses');
  if (!el) return;
  el.innerHTML = COURSES.filter(c=>c.level==='beginner').slice(0,3).map(c=>courseCardHTML(c)).join('');
}

function renderCourses() {
  const q = (document.getElementById('cSearch')||{value:''}).value.toLowerCase();
  let fc = COURSES.filter(c => {
    const mc = catFilter==='all'||c.cat===catFilter;
    const ml = lvlFilter==='all'||c.level===lvlFilter;
    const ms = !q||c.title.toLowerCase().includes(q)||c.desc.toLowerCase().includes(q);
    return mc&&ml&&ms;
  });
  const enrolled = UD ? UD.enrolledCourses : [];
  const el = document.getElementById('contentCourses');
  if (el) el.innerHTML = fc.map(c => {
    const ec = enrolled.find(e=>e.id===c.id);
    return courseCardHTML(c, !!ec, ec?ec.progress:0);
  }).join('') || '<div style="grid-column:1/-1;text-align:center;padding:3rem;color:var(--text2)">Tidak ada kursus yang sesuai filter.</div>';
  const cnt = document.getElementById('cCount');
  if (cnt) cnt.textContent = `Menampilkan ${fc.length} kursus`;
}

function setCat(v, btn) {
  catFilter = v;
  document.querySelectorAll('#catF .fbtn').forEach(b=>b.classList.remove('act'));
  btn.classList.add('act'); renderCourses();
}
function setLvl(v, btn) {
  lvlFilter = v;
  document.querySelectorAll('#lvlF .fbtn').forEach(b=>b.classList.remove('act'));
  btn.classList.add('act'); renderCourses();
}
function filterCourses() { renderCourses(); }

/* ========================================
   ENROLL / OPEN COURSE
======================================== */
function enrollOrOpen(courseId) {
  if (!CU) { goPage('login'); return; }
  const c = COURSES.find(c=>c.id===courseId);
  if (!c) return;
  const ec = UD.enrolledCourses.find(e=>e.id===courseId);
  if (!ec) {
    // Enroll new
    UD.enrolledCourses.push({id:courseId, progress:0, completedLessons:[], enrolledAt:new Date().toISOString()});
    addXP(50, `Mendaftar kursus "${c.title}"`);
    addActivity(`Mendaftar ke kursus "${c.title}"`, '📚');
    addNotif('📚', 'Kursus Baru!', `Kamu berhasil mendaftar ke "${c.title}". Selamat belajar!`);
    saveUD();
    showToast(`Berhasil mendaftar! ${c.emoji} ${c.title}`, 'ok');
  }
  activeCourseId = courseId;
  activeLessonIdx = 0;
  goDash('lesson');
}

/* ========================================
   DASHBOARD INIT
======================================== */
function initDash() {
  if (!CU || !UD) return;
  const init = CU.fname[0].toUpperCase();
  const disp = CU.fname + (CU.lname ? ' '+CU.lname : '');
  document.getElementById('sbAvi').textContent = init;
  document.getElementById('sbName').textContent = disp;
  document.getElementById('sbLevel').textContent = `Level ${UD.level} · ${levelName(UD.level)}`;
  const nm = document.getElementById('dashName'); if(nm) nm.textContent = CU.fname;
  updateNav();
}

function levelName(l) {
  const names = ['','Pemula','Explorer','Pelajar','Intermediate','Advanced','Pro','Expert','Master','Elite','Legend'];
  return names[l] || 'Elite';
}

function xpForNextLevel(l) { return l * 500; }

/* ========================================
   OVERVIEW
======================================== */
function renderOverview() {
  initDash();
  // Stats
  const ec = UD.enrolledCourses;
  const hrs = UD.totalHours.toFixed(1);
  const certs = UD.certificates.length;
  document.getElementById('dashStats').innerHTML = `
    <div class="dcard"><div class="dsic">📚</div><div class="dsv">${ec.length}</div><div class="dsl">Kursus Aktif</div><div class="dsch ${ec.length>0?'dup':'tm'}">${ec.length>0?'↑ Aktif belajar':'Belum ada kursus'}</div></div>
    <div class="dcard"><div class="dsic">⏱️</div><div class="dsv">${hrs}h</div><div class="dsl">Total Belajar</div><div class="dsch ${hrs>0?'dup':'tm'}">${hrs>0?'Terus semangat!':'Mulai belajar sekarang'}</div></div>
    <div class="dcard"><div class="dsic">🏅</div><div class="dsv">${certs}</div><div class="dsl">Sertifikat</div><div class="dsch ${certs>0?'dup':'tm'}">${certs>0?'↑ Keren!':'Selesaikan kursus'}</div></div>
    <div class="dcard"><div class="dsic">🔥</div><div class="dsv">${UD.streak}</div><div class="dsl">Streak Hari</div><div class="dsch ${UD.streak>0?'dup':'tm'}">${UD.streak>0?'🔥 Pertahankan!':'Mulai streak hari ini'}</div></div>`;

  // Courses progress
  const oc = document.getElementById('overviewCourses');
  if (ec.length === 0) {
    oc.innerHTML = `<div class="es"><div class="ei">📚</div><h3>Belum ada kursus</h3><p>Mulai perjalananmu! Daftar kursus pertamamu dan mulai belajar dari nol.</p><button class="btn bcyan bsm" onclick="goDash('explore')">🔭 Jelajahi Kursus</button></div>`;
  } else {
    oc.innerHTML = ec.slice(0,4).map(e => {
      const c = COURSES.find(c=>c.id===e.id);
      if (!c) return '';
      return `<div class="cpi">
        <div class="cph"><span class="cpn">${c.emoji} ${c.title}</span><span class="cpp">${e.progress}%</span></div>
        <div class="cpb"><div class="cpbf" style="width:${e.progress}%;background:linear-gradient(90deg,var(--cyan),var(--violet))"></div></div>
        <div class="cpm"><span>${e.completedLessons.length} modul</span><span onclick="enrollOrOpen(${c.id})" style="color:var(--cyan);cursor:pointer">Lanjut →</span></div>
      </div>`;
    }).join('');
  }

  // Activity
  const oa = document.getElementById('overviewActivity');
  if (!UD.activity.length) {
    oa.innerHTML = `<div class="es" style="padding:2rem"><div class="ei">⚡</div><p>Belum ada aktivitas. Mulai belajar untuk melihat aktivitasmu di sini!</p></div>`;
  } else {
    oa.innerHTML = UD.activity.slice(0,5).map(a =>
      `<div class="ai"><div class="adot" style="background:var(--cyan)"></div><div><div class="atext">${a.text}</div><div class="atime">${a.time}</div></div></div>`
    ).join('');
  }

  // XP Card
  const xpNeeded = xpForNextLevel(UD.level);
  const xpPct = Math.min(100, Math.round((UD.xp % xpNeeded) / xpNeeded * 100));
  document.getElementById('xpCard').innerHTML = `
    <div style="font-size:2.5rem;font-weight:800;background:linear-gradient(135deg,var(--cyan),var(--violet));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">${UD.xp}</div>
    <div style="font-size:.78rem;color:var(--text2);font-family:var(--mono)">TOTAL XP</div>
    <div style="margin:1rem 0;padding:10px;background:var(--ad);border:1px solid rgba(245,158,11,.2);border-radius:var(--rsm)">
      <div style="font-size:1rem">⚡ Level ${UD.level} — ${levelName(UD.level)}</div>
      <div style="font-size:.75rem;color:var(--text2)">${xpForNextLevel(UD.level) - (UD.xp % xpForNextLevel(UD.level))} XP lagi menuju Level ${UD.level+1}</div>
    </div>
    <div class="cpb" style="height:8px"><div class="cpbf" style="width:${xpPct}%;background:linear-gradient(90deg,var(--amber),#f97316)"></div></div>
    <div style="font-size:.72rem;color:var(--text2);margin-top:4px;font-family:var(--mono)">${UD.xp % xpNeeded} / ${xpNeeded} XP</div>`;

  // Calendar
  const now = new Date();
  calYear = now.getFullYear(); calMonth = now.getMonth();
  renderCal(document.getElementById('calendarCard'), calYear, calMonth, now);

  // Leaderboard mini
  renderLBMini();
}

/* ========================================
   CALENDAR
======================================== */
function renderCal(el, yr, mo, now) {
  const months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
  const days = ['S','S','R','K','J','S','M'];
  const dim = new Date(yr, mo+1, 0).getDate();
  const fd = (new Date(yr, mo, 1).getDay()+6)%7;
  const prev = new Date(yr, mo, 0).getDate();
  let html = `<div class="dch"><h3>📅 Kalender</h3></div>
    <div class="mcal">
    <div class="calh"><button class="caln" onclick="navCal(${yr},${mo-1})">‹</button>
    <div class="calt">${months[mo]} ${yr}</div>
    <button class="caln" onclick="navCal(${yr},${mo+1})">›</button></div>
    <div class="cald">${days.map(d=>`<div class="caldl">${d}</div>`).join('')}`;
  for (let i=fd-1;i>=0;i--) html += `<div class="calday om">${prev-i}</div>`;
  for (let d=1;d<=dim;d++) {
    const isT = d===now.getDate()&&mo===now.getMonth()&&yr===now.getFullYear();
    html += `<div class="calday ${isT?'today':''}">${d}</div>`;
  }
  html += `</div></div>`;
  el.innerHTML = html;
}

function navCal(yr, mo) {
  if (mo<0){yr--;mo=11;} if(mo>11){yr++;mo=0;}
  calYear=yr; calMonth=mo;
  renderCal(document.getElementById('calendarCard'), yr, mo, new Date());
}

/* ========================================
   LEADERBOARD MINI
======================================== */
function renderLBMini() {
  const el = document.getElementById('lbMini');
  if (!el) return;
  let all = [...LB_GLOBAL];
  if (CU && UD) {
    all.push({nm:CU.fname,init:CU.fname[0],xp:UD.xp,grad:'var(--cyan),var(--violet)',isMe:true});
    all.sort((a,b)=>b.xp-a.xp);
  }
  el.innerHTML = all.slice(0,4).map((u,i) => {
    const rk = ['gd','sv','br',''][i]||'';
    return `<div class="lbi" style="${u.isMe?'background:var(--cd);border-radius:8px;padding:10px 4px':''}">
      <div class="lbr ${rk}">${i+1}</div>
      <div class="lbav" style="background:linear-gradient(135deg,${u.grad});color:${i<3?'var(--ink)':'#fff'}">${u.init}</div>
      <div class="lbnm">${u.nm}${u.isMe?' <span style="font-size:.65rem;color:var(--cyan)">(Kamu)</span>':''}</div>
      <div class="lbpt">${u.xp.toLocaleString()} XP</div>
    </div>`;
  }).join('');
}

/* ========================================
   MY COURSES
======================================== */
function renderMyCourses() {
  const el = document.getElementById('myCoursesGrid');
  if (!el) return;
  if (!UD.enrolledCourses.length) {
    el.innerHTML = `<div class="es"><div class="ei">📚</div><h3>Kamu belum mendaftar kursus apapun</h3><p>Mulai dari nol! Jelajahi kursus dan pilih yang sesuai minatmu. Tidak perlu pengalaman sebelumnya.</p><button class="btn bcyan" onclick="goDash('explore')">🔭 Jelajahi Kursus</button></div>`;
    return;
  }
  el.innerHTML = `<div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:1.25rem">` +
    UD.enrolledCourses.map(e => {
      const c = COURSES.find(c=>c.id===e.id);
      if (!c) return '';
      const pct = e.progress;
      return `<div class="dc" style="cursor:pointer" onclick="enrollOrOpen(${c.id})">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px">
          <div style="width:46px;height:46px;border-radius:14px;background:linear-gradient(135deg,${c.color},#08101a);display:flex;align-items:center;justify-content:center;font-size:1.3rem;flex-shrink:0">${c.emoji}</div>
          <div><div style="font-weight:700;font-size:.92rem">${c.title}</div><div style="font-size:.72rem;color:var(--text2);font-family:var(--mono)">${lvlMeta(c.level).lbl}</div></div>
          <span class="bdg bcn" style="margin-left:auto;font-size:.6rem">${pct}%</span>
        </div>
        <div class="cpb"><div class="cpbf" style="width:${pct}%;background:linear-gradient(90deg,var(--cyan),var(--violet))"></div></div>
        <div style="display:flex;justify-content:space-between;font-size:.72rem;color:var(--text2);margin-top:5px;font-family:var(--mono)"><span>${pct}% selesai</span><span>${e.completedLessons.length} pelajaran</span></div>
        <button class="btn ${pct>0?'bcyan':'bghost'} bsm bfull" style="margin-top:12px" onclick="event.stopPropagation();enrollOrOpen(${c.id})">${pct>0?'▶ Lanjutkan':'▶ Mulai'}</button>
      </div>`;
    }).join('') + '</div>';
}

/* ========================================
   EXPLORE COURSES (in dash)
======================================== */
function renderExploreDash() {
  const el = document.getElementById('exploreCourses');
  if (!el) return;
  const enrolled = UD.enrolledCourses.map(e=>e.id);
  el.innerHTML = COURSES.map(c => {
    const ec = UD.enrolledCourses.find(e=>e.id===c.id);
    return courseCardHTML(c, enrolled.includes(c.id), ec?ec.progress:0);
  }).join('');
}

/* ========================================
   LESSON VIEW with Coding Playground & Per-Course Forum
======================================== */
function renderLesson() {
  const el = document.getElementById('lessonContainer');
  if (!el) return;
  if (!activeCourseId) {
    const ec = UD.enrolledCourses;
    if (ec.length > 0) { activeCourseId = ec[0].id; }
    else {
      el.innerHTML = `<div class="es"><div class="ei">▶️</div><h3>Belum ada kursus aktif</h3><p>Daftar kursus dulu untuk mulai belajar!</p><button class="btn bcyan" onclick="goDash('explore')">Jelajahi Kursus</button></div>`;
      return;
    }
  }
  const c = COURSES.find(c=>c.id===activeCourseId);
  if (!c) return;
  const ec = UD.enrolledCourses.find(e=>e.id===c.id);
  if (!ec) { enrollOrOpen(activeCourseId); return; }

  // Gather all lessons flat
  const allLessons = [];
  c.lessons.forEach((ch, ci) => ch.items.forEach((l, li) => allLessons.push({...l, chIdx:ci, liIdx:li, key:`${ci}_${li}`})));
  const total = allLessons.length;
  const current = allLessons[activeLessonIdx] || allLessons[0];
  const completedKeys = ec.completedLessons || [];

  // Sidebar
  let sbHtml = `<div class="msbh">
    <div class="msbt">${c.emoji} ${c.title}</div>
    <div class="msbm">${ec.progress}% selesai · ${completedKeys.length}/${total} pelajaran</div>
    <div class="cpb" style="margin-top:10px"><div class="cpbf" style="width:${ec.progress}%;background:linear-gradient(90deg,var(--cyan),var(--violet))"></div></div>
  </div><div class="mlist">`;
  let globalIdx = 0;
  c.lessons.forEach((ch, ci) => {
    const chDone = ch.items.every((_,li) => completedKeys.includes(`${ci}_${li}`));
    sbHtml += `<div class="mchap">
      <div class="chtog" onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'">
        <span>${ch.ch}</span><span style="font-size:.72rem;color:${chDone?'var(--green)':'var(--cyan)'}">${chDone?'✓ Selesai':'Aktif'}</span>
      </div>
      <div class="chcon">`;
    ch.items.forEach((l, li) => {
      const gIdx = globalIdx;
      const key = `${ci}_${li}`;
      const done = completedKeys.includes(key);
      const isAct = gIdx === activeLessonIdx;
      sbHtml += `<div class="li ${isAct?'act':''} ${done&&!isAct?'comp':''}" onclick="activeLessonIdx=${gIdx};renderLesson()">
        <span class="lic">${done?'✓':isAct?'▶':'○'}</span>${l.t}<span class="ldur">${l.dur}</span>
      </div>`;
      globalIdx++;
    });
    sbHtml += `</div></div>`;
  });
  sbHtml += `</div>`;

  // Lesson content with video replaced by script panel
  const scriptHtml = `
    <div class="lvid">
      <div style="position:absolute;top:12px;left:12px;background:rgba(0,0,0,.6);padding:4px 10px;border-radius:6px;font-size:.7rem;font-family:var(--mono)">LESSON ${activeLessonIdx+1}/${total}</div>
      <div class="pbtn" onclick="toggleScriptPanel(this)">📜</div>
      <div style="font-size:3rem;opacity:.2;margin-top:1rem;">📄 Script Langkah</div>
      <div id="scriptPanel" class="script-panel" style="display: none;">
        <div style="display:flex;justify-content:flex-end"><button class="btn bghost bsm" onclick="toggleScriptPanel(document.querySelector('.pbtn'))">Tutup ✕</button></div>
        <h3 style="color:var(--cyan);margin-bottom:1rem;">📖 Script Praktik: ${current.t}</h3>
        <div style="font-size:.9rem;line-height:1.7;">
          <p>Berikut adalah langkah-langkah praktik untuk memahami materi ini:</p>
          <ol style="margin:1rem 0 1rem 1.5rem;">
            <li>Buka <strong>Coding Playground</strong> (tombol di bawah).</li>
            <li>Salin kode contoh dan modifikasi sesuai petunjuk.</li>
            <li>Jalankan kode dan amati hasilnya.</li>
            <li>Coba variasikan nilai atau struktur kode.</li>
          </ol>
          <div class="codeblock"><span class="kw">// Contoh kode untuk ${current.t}</span>
<span class="kw">const</span> contoh = {
  pesan: <span style="color:var(--amber)">"Selamat belajar!"</span>,
  langkah: <span style="color:var(--amber)">"Ikuti script ini langkah demi langkah."</span>
};
console.log(contoh.pesan);</div>
          <p><strong>Tips:</strong> Gunakan <code>console.log()</code> untuk debug. Jangan ragu mencoba sendiri!</p>
        </div>
      </div>
    </div>
  `;

  const lsnHtml = `<div class="lcont">
    <div class="lbc">${c.title} <span>/</span> ${c.lessons[current.chIdx]?.ch} <span>/</span> <span>${current.t}</span></div>
    <h2 class="ltit">${current.t}</h2>
    ${scriptHtml}
    <div style="display:flex;gap:.75rem;margin-bottom:1.5rem;flex-wrap:wrap">
      <span style="font-size:.78rem;color:var(--text2)">⏱️ ${current.dur}</span>
      <span style="font-size:.78rem;color:var(--text2)">📘 ${c.title}</span>
      <button class="btn bghost bsm" style="margin-left:auto" onclick="openPlayground()">💻 Coding Playground</button>
      <button class="btn bghost bsm" onclick="askAI()">🤖 Tanya AI Tutor</button>
      <button class="btn bghost bsm" onclick="showToast('Catatan disimpan! 📝','ok')">🔖 Simpan Catatan</button>
    </div>
    <div class="lbody">
      <p>Selamat datang di pelajaran <strong>${current.t}</strong>! Dalam materi ini, kamu akan belajar konsep-konsep penting yang menjadi fondasi untuk topik selanjutnya.</p>
      <h3>Apa yang Akan Dipelajari?</h3>
      <p>Materi ini dirancang untuk pemula total — tidak ada asumsi pengetahuan sebelumnya. Setiap konsep dijelaskan secara bertahap dan disertai contoh praktis yang mudah dipahami.</p>
      <h3>Penjelasan Detail</h3>
      <p>${current.t} merupakan bagian inti dari kurikulum. Pahami setiap baris kode dan jangan lewatkan latihan di coding playground.</p>
    </div>
    <div class="lnav">
      <button class="btn bghost bsm" onclick="prevLesson()" ${activeLessonIdx===0?'disabled style="opacity:.4"':''}>← Sebelumnya</button>
      <div style="display:flex;gap:.75rem">
        <button class="btn bghost bsm" onclick="goDash('quiz')">❓ Kerjakan Quiz</button>
        <button class="btn bcyan bsm" onclick="completeLesson()">✓ Selesai & Lanjut →</button>
      </div>
    </div>
  </div>`;

  // Forum per kursus
  const forumPosts = (UD.courseForums[activeCourseId] || []).slice().reverse();
  let forumHtml = `<div class="forum-panel">
    <div class="forum-header">
      <h3 style="font-weight:700;font-size:1rem">💬 Forum Diskusi — ${c.title}</h3>
      <button class="btn bghost bsm" onclick="showNewPostForCourse(${activeCourseId})">+ Buat Topik Baru</button>
    </div>
    <div id="courseForumList">`;
  if (forumPosts.length === 0) {
    forumHtml += `<div class="es" style="padding:2rem"><div class="ei">💬</div><p>Belum ada diskusi. Jadilah yang pertama bertanya atau berbagi!</p></div>`;
  } else {
    forumHtml += forumPosts.map((p, idx) => `
      <div class="forum-post">
        <div class="user">
          <div class="user-avatar">${p.init}</div>
          <div><div class="user-name">${p.user}</div><div class="time">${p.time}</div></div>
        </div>
        <div class="title">${p.title}</div>
        <div class="body">${p.body}</div>
        <div class="forum-actions">
          <span onclick="likeForumPost(${activeCourseId}, ${idx})">👍 ${p.likes||0} Suka</span>
          <span onclick="replyForumPost(${activeCourseId}, ${idx})">💬 Balas</span>
        </div>
        ${p.replies ? `<div style="margin-top:12px;padding-left:24px;border-left:2px solid var(--border);">${p.replies.map(r => `
          <div class="forum-post" style="margin-top:8px;padding:8px 0;">
            <div class="user"><div class="user-avatar">${r.init}</div><div><div class="user-name">${r.user}</div><div class="time">${r.time}</div></div></div>
            <div class="body">${r.body}</div>
          </div>
        `).join('')}</div>` : ''}
      </div>
    `).join('');
  }
  forumHtml += `</div></div>`;

  el.innerHTML = `<div class="mlayout"><div class="msb">${sbHtml}</div><div>${lsnHtml}${forumHtml}</div></div>`;
}

function toggleScriptPanel(btn) {
  const panel = document.getElementById('scriptPanel');
  if (panel.style.display === 'none') {
    panel.style.display = 'block';
    btn.textContent = '✕';
  } else {
    panel.style.display = 'none';
    btn.textContent = '📜';
  }
}

function prevLesson() {
  if (activeLessonIdx > 0) { activeLessonIdx--; renderLesson(); }
}

function completeLesson() {
  if (!activeCourseId) return;
  const c = COURSES.find(c=>c.id===activeCourseId);
  const ec = UD.enrolledCourses.find(e=>e.id===c.id);
  const allLessons = [];
  c.lessons.forEach((ch,ci)=>ch.items.forEach((_,li)=>allLessons.push(`${ci}_${li}`)));
  const key = allLessons[activeLessonIdx];
  if (!ec.completedLessons.includes(key)) {
    ec.completedLessons.push(key);
    ec.progress = Math.round(ec.completedLessons.length / allLessons.length * 100);
    UD.totalHours += 0.5;
    addXP(30, `Menyelesaikan pelajaran di "${c.title}"`);
    addActivity(`Menyelesaikan pelajaran "${c.lessons[parseInt(key)].ch || c.title}"`, '✅');
    // Check chapter completion bonus
    if (ec.completedLessons.length % 4 === 0) {
      addXP(50, 'Bonus chapter selesai!');
      addNotif('🎯','Chapter Selesai!',`Kamu telah menyelesaikan chapter di "${c.title}". Lanjut terus!`);
    }
    // Check course completion
    if (ec.progress === 100) {
      UD.completedCourses.push(activeCourseId);
      UD.certificates.push({courseId:activeCourseId, title:c.title, date:new Date().toLocaleDateString('id-ID'), emoji:c.emoji});
      addXP(500, `Menyelesaikan kursus "${c.title}"`);
      addNotif('🏅','Kursus Selesai!',`Selamat! Kamu telah menyelesaikan "${c.title}". Sertifikatmu sudah tersedia!`);
      showToast(`🎉 Selamat! Kursus selesai! +500 XP & Sertifikat diraih!`, 'ok');
    }
    saveUD(); updateNav();
    showToast(`✅ Pelajaran selesai! +30 XP`, 'ok');
  }
  // Move to next
  if (activeLessonIdx < allLessons.length - 1) {
    activeLessonIdx++;
    renderLesson();
  } else {
    showToast('🎉 Kamu sudah menyelesaikan semua pelajaran!', 'ok');
  }
}

/* ========================================
   CODING PLAYGROUND MODAL
======================================== */
function openPlayground() {
  const modal = document.createElement('div');
  modal.className = 'movl';
  modal.innerHTML = `<div class="modal" style="max-width:800px;width:90%">
    <button class="mclose" onclick="this.closest('.movl').remove()">✕</button>
    <h3 style="margin-bottom:1rem;font-weight:800">💻 Coding Playground</h3>
    <p style="font-size:.85rem;color:var(--text2);margin-bottom:1rem">Tulis kode JavaScript/HTML/CSS dan jalankan langsung di sini.</p>
    <textarea id="playgroundCode" class="fi" style="font-family:monospace;height:300px;margin-bottom:1rem">// Contoh kode:
console.log("Halo, dunia!");
alert("Belajar coding dari nol itu menyenangkan!");</textarea>
    <div style="display:flex;gap:1rem">
      <button class="btn bcyan" onclick="runPlayground()">🚀 Jalankan Kode</button>
      <button class="btn bghost" onclick="this.closest('.movl').remove()">Tutup</button>
    </div>
    <div id="playgroundOutput" style="background:var(--ink3);border:1px solid var(--border);border-radius:var(--rsm);padding:16px;margin-top:1rem;font-family:monospace;min-height:120px;white-space:pre-wrap"></div>
  </div>`;
  document.body.appendChild(modal);
}

function runPlayground() {
  const code = document.getElementById('playgroundCode').value;
  const outputDiv = document.getElementById('playgroundOutput');
  try {
    const oldLog = console.log;
    let output = '';
    console.log = (...args) => { output += args.join(' ') + '\n'; oldLog(...args); };
    const fn = new Function(code);
    fn();
    console.log = oldLog;
    outputDiv.innerHTML = `<span style="color:var(--green)">▶ Output:</span><br/>${output.replace(/\n/g,'<br/>') || '(tidak ada output)'}`;
  } catch(e) {
    outputDiv.innerHTML = `<span style="color:var(--rose)">⚠️ Error:</span> ${e.message}`;
  }
}

/* ========================================
   AI TUTOR
======================================== */
function askAI() {
  const q = prompt('Tanyakan sesuatu tentang materi ini (AI Tutor):');
  if (!q) return;
  showToast('AI Tutor sedang memproses...', 'info');
  setTimeout(() => {
    const ans = `🤖 AI: Terima kasih atas pertanyaanmu! "${q}". Dalam materi ini, pastikan untuk mempraktikkan kode setiap selesai membaca. Jangan ragu mencoba berbagai variasi!`;
    showToast(ans, 'info');
  }, 500);
}

/* ========================================
   FORUM PER KURSUS
======================================== */
function showNewPostForCourse(courseId) {
  const title = prompt('Judul topik diskusi:');
  if (!title) return;
  const body = prompt('Isi diskusi:');
  if (!body) return;
  const init = CU.fname[0];
  const user = CU.fname;
  if (!UD.courseForums[courseId]) UD.courseForums[courseId] = [];
  UD.courseForums[courseId].push({
    user, init, title, body, time: 'Baru saja', likes: 0, replies: []
  });
  addXP(10, 'Posting di forum');
  addActivity(`Membuat topik forum di kursus: ${title}`, '💬');
  saveUD();
  renderLesson();
  showToast('Topik berhasil dibuat! +10 XP','ok');
}

function likeForumPost(courseId, postIdx) {
  if (!UD.courseForums[courseId]) return;
  const post = UD.courseForums[courseId][postIdx];
  if (post) {
    post.likes = (post.likes || 0) + 1;
    saveUD();
    renderLesson();
    showToast('👍 Disukai!','ok');
  }
}

function replyForumPost(courseId, postIdx) {
  const replyBody = prompt('Tulis balasanmu:');
  if (!replyBody) return;
  const init = CU.fname[0];
  const user = CU.fname;
  if (!UD.courseForums[courseId]) UD.courseForums[courseId] = [];
  const post = UD.courseForums[courseId][postIdx];
  if (post) {
    if (!post.replies) post.replies = [];
    post.replies.push({ user, init, body: replyBody, time: 'Baru saja' });
    saveUD();
    renderLesson();
    showToast('Balasan ditambahkan!','ok');
  }
}

/* ========================================
   QUIZ
======================================== */
function initQuiz() {
  const el = document.getElementById('quizArea');
  if (!el) return;
  quizAnswers = {};
  if (quizTimer) clearInterval(quizTimer);
  let secs = 600;
  const q = QUIZ_DATA.default;
  el.innerHTML = `
    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1.5rem">
      <div><h3 style="font-weight:700;font-size:1rem">CSS Grid — Quiz</h3><div style="font-size:.78rem;color:var(--text2);font-family:var(--mono)">${q.length} soal · estimasi 10 menit</div></div>
      <div style="text-align:right"><div style="font-size:1.5rem;font-weight:800;color:var(--cyan)" id="qtimer">10:00</div><div style="font-size:.68rem;color:var(--text2);font-family:var(--mono)">WAKTU</div></div>
    </div>
    <div id="qqWrap">${q.map((qn,qi)=>`
      <div class="qq">
        <div class="qqt">${qi+1}. ${qn.q}</div>
        <div class="qopts">${qn.opts.map((o,oi)=>`
          <div class="qopt" onclick="selQ(${qi},${oi},this)">
            <div class="qic">${String.fromCharCode(65+oi)}</div>${o}
          </div>`).join('')}
        </div>
      </div>`).join('')}
    </div>
    <div style="margin-top:1.5rem;display:flex;gap:1rem">
      <button class="btn bghost" onclick="initQuiz()">🔄 Reset</button>
      <button class="btn bcyan" onclick="submitQuiz()" style="flex:1">Periksa Jawaban →</button>
    </div>
    <div id="quizRes" style="margin-top:1.5rem"></div>`;

  const timer = document.getElementById('qtimer');
  quizTimer = setInterval(() => {
    secs--;
    if (secs <= 0) { clearInterval(quizTimer); submitQuiz(); return; }
    const m = Math.floor(secs/60).toString().padStart(2,'0');
    const s = (secs%60).toString().padStart(2,'0');
    if (timer) { timer.textContent=`${m}:${s}`; if(secs<=60) timer.style.color='var(--rose)'; }
  }, 1000);
}

function selQ(qi, oi, el) {
  quizAnswers[qi] = oi;
  el.closest('.qopts').querySelectorAll('.qopt').forEach(o=>o.classList.remove('sel'));
  el.classList.add('sel');
}

function submitQuiz() {
  if (quizTimer) clearInterval(quizTimer);
  const q = QUIZ_DATA.default;
  let score = 0;
  q.forEach((qn,qi) => {
    const opts = document.querySelectorAll('.qq')[qi]?.querySelectorAll('.qopt');
    if (!opts) return;
    opts.forEach((opt,oi) => {
      if (oi === qn.ans) opt.classList.add('cor');
      else if (oi === quizAnswers[qi]) opt.classList.add('wrg');
    });
    if (quizAnswers[qi] === qn.ans) score++;
  });
  const pct = Math.round(score/q.length*100);
  const xpG = score * 10;
  const el = document.getElementById('quizRes');
  if (el) {
    el.innerHTML = `<div class="alt ${pct>=80?'aok':'aerr'}">
      ${pct>=80?'🎉':'😅'} Skor: ${score}/${q.length} (${pct}%) — ${pct>=80?'Luar biasa!':'Coba lagi untuk meningkatkan pemahamanmu.'}
    </div>`;
  }
  if (pct >= 80) { addXP(xpG, 'Lulus Quiz'); saveUD(); showToast(`Quiz selesai! Skor ${pct}% +${xpG} XP 🏅`, 'ok'); }
  addActivity(`Mengerjakan quiz: skor ${pct}%`, '❓');
  saveUD();
}

/* ========================================
   PROGRESS
======================================== */
function renderProgress() {
  // Week chart
  const wd = document.getElementById('weekChart');
  const days = ['Sen','Sel','Rab','Kam','Jum','Sab','Min'];
  const wa = UD.weekActivity.map((v,i) => `
    <div style="flex:1;display:flex;flex-direction:column;align-items:center;gap:4px">
      <div style="flex:1;width:100%;border-radius:4px;background:var(--cd);display:flex;align-items:flex-end">
        <div style="width:100%;height:${v?Math.max(10,v/5*100)+'%':'5%'};border-radius:4px;background:var(--cyan)"></div>
      </div>
      <span style="font-size:.62rem;color:var(--text2);font-family:var(--mono)">${days[i]}</span>
    </div>`).join('');
  const tot = UD.totalHours;
  wd.innerHTML = `<div style="display:flex;align-items:flex-end;gap:8px;height:120px;padding-bottom:8px">${wa}</div>
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:1rem;margin-top:1.25rem;text-align:center">
      <div><div style="font-weight:800;color:var(--cyan);font-size:1.2rem">${UD.weekActivity.reduce((a,b)=>a+b,0).toFixed(1)}h</div><div style="font-size:.72rem;color:var(--text2)">Minggu ini</div></div>
      <div><div style="font-weight:800;color:var(--violet);font-size:1.2rem">${tot.toFixed(1)}h</div><div style="font-size:.72rem;color:var(--text2)">Total</div></div>
      <div><div style="font-weight:800;color:var(--amber);font-size:1.2rem">${UD.enrolledCourses.length}</div><div style="font-size:.72rem;color:var(--text2)">Kursus</div></div>
    </div>`;

  // Skill bars
  const sb = document.getElementById('skillBars');
  const ec = UD.enrolledCourses;
  if (!ec.length) {
    sb.innerHTML = `<div class="es"><p>Belum ada skill yang dipelajari. Mulai kursus dulu!</p></div>`;
  } else {
    const skills = ec.map(e => {
      const c = COURSES.find(c=>c.id===e.id);
      return c ? {nm:c.title, pct:e.progress, emoji:c.emoji} : null;
    }).filter(Boolean);
    sb.innerHTML = skills.map(s => `<div style="margin-bottom:14px">
      <div style="display:flex;justify-content:space-between;font-size:.82rem;margin-bottom:5px"><span>${s.emoji} ${s.nm}</span><span style="font-family:var(--mono);color:var(--cyan)">${s.pct}%</span></div>
      <div class="cpb"><div class="cpbf" style="width:${s.pct}%;background:linear-gradient(90deg,var(--cyan),var(--violet))"></div></div>
    </div>`).join('');
  }

  // Detail
  const pd = document.getElementById('progressDetail');
  if (!ec.length) { pd.innerHTML = `<div class="es"><p>Daftar kursus untuk melihat detail progress.</p></div>`; return; }
  pd.innerHTML = ec.map(e => {
    const c = COURSES.find(c=>c.id===e.id);
    if (!c) return '';
    return `<div class="cpi" style="border-bottom:1px solid var(--border);padding-bottom:1rem;margin-bottom:1rem">
      <div class="cph"><span class="cpn">${c.emoji} ${c.title}</span><span class="cpp">${e.progress}%</span></div>
      <div class="cpb"><div class="cpbf" style="width:${e.progress}%;background:linear-gradient(90deg,var(--cyan),var(--violet))"></div></div>
      <div class="cpm"><span>Didaftar: ${new Date(e.enrolledAt).toLocaleDateString('id-ID')}</span><span>${e.completedLessons.length} pelajaran selesai</span></div>
    </div>`;
  }).join('');
}

/* ========================================
   CERTIFICATES
======================================== */
function renderCerts() {
  const el = document.getElementById('certGrid');
  if (!el) return;
  if (!UD.certificates.length) {
    el.innerHTML = `<div class="es" style="grid-column:1/-1"><div class="ei">🏅</div><h3>Belum ada sertifikat</h3><p>Selesaikan kursus untuk mendapatkan sertifikat resmi EduNova yang diakui industri.</p><button class="btn bcyan" onclick="goDash('myCourses')">📚 Lihat Kursus Saya</button></div>`;
    if (UD.enrolledCourses.length) {
      el.innerHTML += UD.enrolledCourses.map(e => {
        const c = COURSES.find(c=>c.id===e.id);
        if (!c) return '';
        return `<div class="dc" style="border-style:dashed;opacity:.6">
          <div style="padding:40px;text-align:center">
            <div style="font-size:2.5rem;margin-bottom:12px;filter:grayscale(1)">🔒</div>
            <div style="font-weight:700;font-size:.92rem;margin-bottom:6px">${c.title}</div>
            <div style="font-size:.78rem;color:var(--text2)">Selesaikan ${100-e.progress}% lagi untuk sertifikat ini</div>
            <div class="cpb" style="margin-top:12px"><div class="cpbf" style="width:${e.progress}%;background:linear-gradient(90deg,var(--cyan),var(--violet))"></div></div>
          </div>
        </div>`;
      }).join('');
    }
    return;
  }
  const disp = CU.fname + (CU.lname?' '+CU.lname:'');
  el.innerHTML = UD.certificates.map(cert => `
    <div class="dc" style="border-color:rgba(0,255,219,.2)">
      <div style="background:linear-gradient(135deg,rgba(0,255,219,.08),rgba(139,92,246,.08));border:1px solid rgba(0,255,219,.15);border-radius:var(--rmd);padding:24px;text-align:center;margin-bottom:16px">
        <div style="font-size:2.5rem;margin-bottom:8px">${cert.emoji}</div>
        <div style="font-family:var(--mono);font-size:.62rem;color:var(--cyan);letter-spacing:2px;margin-bottom:8px">SERTIFIKAT RESMI</div>
        <h3 style="font-size:1.1rem;font-weight:800">${cert.title}</h3>
        <div style="font-size:.78rem;color:var(--text2);margin-top:4px">Diraih oleh <strong>${disp}</strong></div>
        <div style="font-size:.72rem;color:var(--text3);margin-top:4px;font-family:var(--mono)">${cert.date}</div>
      </div>
      <div style="display:flex;gap:.75rem">
        <button class="btn bghost bsm" style="flex:1" onclick="showToast('Membuka sertifikat...','info')">👁 Lihat</button>
        <button class="btn bcyan bsm" style="flex:1" onclick="showToast('Mengunduh PDF...','ok')">⬇ Unduh PDF</button>
      </div>
    </div>`).join('') +
    UD.enrolledCourses.filter(e=>!UD.completedCourses.includes(e.id)).map(e => {
      const c = COURSES.find(c=>c.id===e.id);
      if (!c) return '';
      return `<div class="dc" style="border-style:dashed;opacity:.6">
        <div style="padding:40px;text-align:center">
          <div style="font-size:2.5rem;margin-bottom:12px;filter:grayscale(1)">🔒</div>
          <div style="font-weight:700;font-size:.92rem;margin-bottom:6px">${c.title}</div>
          <div style="font-size:.78rem;color:var(--text2)">Selesaikan ${100-e.progress}% lagi</div>
          <div class="cpb" style="margin-top:12px"><div class="cpbf" style="width:${e.progress}%;background:linear-gradient(90deg,var(--cyan),var(--violet))"></div></div>
        </div>
      </div>`;
    }).join('');
}

/* ========================================
   LEADERBOARD FULL
======================================== */
function renderLB() {
  const el = document.getElementById('lbFull');
  if (!el) return;
  let all = [...LB_GLOBAL];
  if (CU && UD) {
    all.push({nm:CU.fname+(CU.lname?' '+CU.lname:''),init:CU.fname[0],xp:UD.xp,grad:'var(--cyan),var(--violet)',isMe:true});
    all.sort((a,b)=>b.xp-a.xp);
  }
  el.innerHTML = all.map((u,i) => {
    const rk = i===0?'gd':i===1?'sv':i===2?'br':'';
    const rv = i===0?'🥇':i===1?'🥈':i===2?'🥉':i+1;
    return `<div class="lbi" style="${u.isMe?'background:var(--cd);border-radius:8px;padding:10px 4px':''}">
      <div class="lbr ${rk}">${rv}</div>
      <div class="lbav" style="background:linear-gradient(135deg,${u.grad});color:${i<3?'var(--ink)':'#fff'}">${u.init}</div>
      <div class="lbnm">${u.nm}${u.isMe?` <span style="font-size:.65rem;color:var(--cyan)">(Kamu)</span>`:''}</div>
      <div class="lbpt">${u.xp.toLocaleString()} XP</div>
    </div>`;
  }).join('');
}

function setLbTab(type, btn) {
  document.querySelectorAll('[id^="lbTab"]').forEach(b=>b.classList.remove('act'));
  btn.classList.add('act');
  renderLB(); // All tabs show same data in this demo
}

/* ========================================
   NOTIFICATIONS
======================================== */
function renderNotifs() {
  const el = document.getElementById('notifList');
  if (!el) return;
  if (!UD.notifications.length) {
    el.innerHTML = `<div class="es"><div class="ei">🔔</div><h3>Tidak ada notifikasi</h3><p>Mulai belajar untuk mendapatkan notifikasi progress!</p></div>`;
    return;
  }
  el.innerHTML = UD.notifications.map(n => `
    <div class="ai" style="${n.read?'opacity:.6':''}">
      <div style="font-size:1.3rem;flex-shrink:0">${n.icon}</div>
      <div style="flex:1">
        <div style="font-weight:700;font-size:.875rem;margin-bottom:3px">${n.title}</div>
        <div style="font-size:.82rem;color:var(--text2);line-height:1.5">${n.msg}</div>
        <div class="atime">${n.time}</div>
      </div>
      ${!n.read?'<div style="width:8px;height:8px;border-radius:50%;background:var(--cyan);flex-shrink:0;margin-top:4px"></div>':''}
    </div>`).join('');
}

function markAllRead() {
  UD.notifications.forEach(n => n.read = true);
  saveUD(); renderNotifs(); updateNav();
  showToast('Semua notifikasi ditandai dibaca.','ok');
}

function addNotif(icon, title, msg) {
  UD.notifications.unshift({icon, title, msg, time:'Baru saja', read:false});
  updateNav();
}

/* ========================================
   PROFILE
======================================== */
function renderProfile() {
  initDash();
  const disp = CU.fname + (CU.lname?' '+CU.lname:'');
  document.getElementById('profileAvi').textContent = CU.fname[0];
  document.getElementById('profileName').textContent = disp;
  document.getElementById('profileRole').textContent = `@${CU.uname||'user'} · ${CU.status||'Pelajar Aktif'}`;
  document.getElementById('profileStats').innerHTML = `
    <div class="ps"><div class="psv">${UD.totalHours.toFixed(1)}h</div><div class="psl">Jam Belajar</div></div>
    <div class="ps"><div class="psv">${UD.enrolledCourses.length}</div><div class="psl">Kursus</div></div>
    <div class="ps"><div class="psv">${UD.xp}</div><div class="psl">XP</div></div>
    <div class="ps"><div class="psv">${UD.streak}🔥</div><div class="psl">Streak</div></div>`;

  // Achievements
  const allA = [
    {icon:'🌟',nm:'First Blood',desc:'Selesaikan pelajaran pertama',key:'first_lesson'},
    {icon:'🔥',nm:'Streak 3 Hari',desc:'Belajar 3 hari berturut',key:'streak_3'},
    {icon:'🏅',nm:'Certified',desc:'Raih sertifikat pertama',key:'first_cert'},
    {icon:'💬',nm:'Komunitas',desc:'Post pertama di forum',key:'first_forum'},
    {icon:'⚡',nm:'100 XP',desc:'Kumpulkan 100 XP',key:'xp_100'},
    {icon:'📚',nm:'Enrolled',desc:'Daftar kursus pertama',key:'first_enroll'},
    {icon:'🚀',nm:'Speed Learner',desc:'Selesaikan kursus <30 hari',key:'speed_learner'},
    {icon:'🏆',nm:'Top Scorer',desc:'Skor quiz 100%',key:'perfect_quiz'},
  ];
  const earned = new Set(UD.achievements);
  // Auto-check achievements
  if (UD.enrolledCourses.length > 0) earned.add('first_enroll');
  const totLessons = UD.enrolledCourses.reduce((s,e)=>s+e.completedLessons.length,0);
  if (totLessons > 0) earned.add('first_lesson');
  if (UD.streak >= 3) earned.add('streak_3');
  if (UD.certificates.length > 0) earned.add('first_cert');
  const forumPosts = Object.values(UD.courseForums||{}).reduce((a,b)=>a+b.length,0);
  if (forumPosts > 0) earned.add('first_forum');
  if (UD.xp >= 100) earned.add('xp_100');

  document.getElementById('achieveGrid').innerHTML = allA.map(a => `
    <div class="abadge ${earned.has(a.key)?'':'lck'}">
      <div class="abic">${a.icon}</div>
      <div class="abnm">${a.nm}</div>
      <div class="abds">${a.desc}</div>
      ${earned.has(a.key)?`<div style="font-size:.65rem;color:var(--green);font-family:var(--mono);margin-top:4px">✓ DIRAIH</div>`:''}
    </div>`).join('');
}

/* ========================================
   SETTINGS
======================================== */
const SETTING_PANELS = {
  sprofile: () => {
    const u = CU;
    return `<h3>Informasi Profil</h3>
      <div class="fr">
        <div class="fg"><label class="fl">Nama Depan</label><input class="fi" type="text" id="sF" value="${u.fname||''}"/></div>
        <div class="fg"><label class="fl">Nama Belakang</label><input class="fi" type="text" id="sL" value="${u.lname||''}"/></div>
      </div>
      <div class="fg"><label class="fl">Email</label><input class="fi" type="email" id="sE" value="${u.email||''}"/></div>
      <div class="fg"><label class="fl">Username</label><input class="fi" type="text" id="sU" value="${u.uname||''}"/></div>
      <div class="fg"><label class="fl">Institusi</label><input class="fi" type="text" id="sI" value="${u.inst||''}"/></div>
      <div class="fg"><label class="fl">Bio Singkat</label><textarea class="fi" id="sB" style="min-height:80px" placeholder="Ceritakan tentang dirimu...">${u.bio||''}</textarea></div>
      <button class="btn bcyan" onclick="saveProfile()">💾 Simpan Perubahan</button>`;
  },
  snotif: () => `<h3>Pengaturan Notifikasi</h3>
    <div class="togrow"><div class="togl"><h4>Notifikasi Email</h4><p>Terima update via email</p></div><button class="togbtn ${UD.settings.emailNotif?'on':''}" onclick="togSetting('emailNotif',this)"></button></div>
    <div class="togrow"><div class="togl"><h4>Pemberitahuan Kursus</h4><p>Info kursus sesuai minatmu</p></div><button class="togbtn ${UD.settings.courseNotif?'on':''}" onclick="togSetting('courseNotif',this)"></button></div>
    <div class="togrow"><div class="togl"><h4>Pengingat Belajar Harian</h4><p>Pengingat untuk menjaga streak</p></div><button class="togbtn ${UD.settings.reminderNotif?'on':''}" onclick="togSetting('reminderNotif',this)"></button></div>`,
  sprivacy: () => `<h3>Pengaturan Privasi</h3>
    <div class="togrow"><div class="togl"><h4>Profil Publik</h4><p>Orang lain dapat melihat profilmu</p></div><button class="togbtn ${UD.settings.publicProfile?'on':''}" onclick="togSetting('publicProfile',this)"></button></div>
    <div class="togrow"><div class="togl"><h4>Tampilkan di Leaderboard</h4><p>Masuk dalam papan peringkat</p></div><button class="togbtn ${UD.settings.leaderboard?'on':''}" onclick="togSetting('leaderboard',this)"></button></div>`,
  sappear: () => `<h3>Tampilan & Tema</h3>
    <div style="margin-bottom:1.5rem"><label class="fl">Tema Warna Utama</label>
    <div style="display:flex;gap:.75rem;margin-top:.5rem">
      <div onclick="applyTheme('#00FFDB')" style="width:32px;height:32px;border-radius:8px;background:#00FFDB;cursor:pointer;border:2px solid white" title="Cyan"></div>
      <div onclick="applyTheme('#8B5CF6')" style="width:32px;height:32px;border-radius:8px;background:#8B5CF6;cursor:pointer" title="Violet"></div>
      <div onclick="applyTheme('#F59E0B')" style="width:32px;height:32px;border-radius:8px;background:#F59E0B;cursor:pointer" title="Amber"></div>
      <div onclick="applyTheme('#10B981')" style="width:32px;height:32px;border-radius:8px;background:#10B981;cursor:pointer" title="Green"></div>
      <div onclick="applyTheme('#F43F5E')" style="width:32px;height:32px;border-radius:8px;background:#F43F5E;cursor:pointer" title="Rose"></div>
    </div></div>`,
  ssec: () => `<h3>Keamanan Akun</h3>
    <div class="fg"><label class="fl">Kata Sandi Saat Ini</label><input class="fi" type="password" id="sOldP" placeholder="••••••••"/></div>
    <div class="fg"><label class="fl">Kata Sandi Baru</label><input class="fi" type="password" id="sNewP" placeholder="Minimal 8 karakter"/></div>
    <div class="fg"><label class="fl">Konfirmasi Kata Sandi Baru</label><input class="fi" type="password" id="sConP" placeholder="Ulangi kata sandi baru"/></div>
    <button class="btn bcyan" onclick="changePass()">🔐 Ubah Kata Sandi</button>
    <div style="margin-top:2rem;padding:1rem;background:rgba(244,63,94,.06);border:1px solid rgba(244,63,94,.2);border-radius:var(--rmd)">
      <h4 style="color:var(--rose);font-size:.9rem;margin-bottom:.5rem">Zona Berbahaya</h4>
      <p style="font-size:.8rem;color:var(--text2);margin-bottom:.75rem">Tindakan ini tidak dapat dibatalkan.</p>
      <button class="btn bdanger bsm" onclick="if(confirm('Yakin hapus akun? Semua data akan hilang!'))deleteAccount()">🗑 Hapus Akun</button>
    </div>`
};

function renderSettingsTab(tab, navEl) {
  document.querySelectorAll('.snavi').forEach(i=>i.classList.remove('act'));
  if (navEl) navEl.classList.add('act');
  const panel = document.getElementById('settingsPanel');
  if (panel && SETTING_PANELS[tab]) panel.innerHTML = SETTING_PANELS[tab]();
}

function setTab(tab, el) {
  document.querySelectorAll('.snavi').forEach(i=>i.classList.remove('act'));
  el.classList.add('act');
  const panel = document.getElementById('settingsPanel');
  if (panel && SETTING_PANELS[tab]) panel.innerHTML = SETTING_PANELS[tab]();
}

function saveProfile() {
  const f = document.getElementById('sF')?.value.trim();
  const l = document.getElementById('sL')?.value.trim();
  const u = document.getElementById('sU')?.value.trim();
  const ins = document.getElementById('sI')?.value.trim();
  const b = document.getElementById('sB')?.value.trim();
  if (f) CU.fname = f;
  if (l !== undefined) CU.lname = l;
  if (u) CU.uname = u;
  if (ins !== undefined) CU.inst = ins;
  if (b !== undefined) CU.bio = b;
  const users = LS.get('en_users') || [];
  const idx = users.findIndex(usr => usr.id === CU.id);
  if (idx >= 0) users[idx] = CU;
  LS.set('en_users', users);
  LS.set('en_user', CU);
  initDash();
  showToast('Profil berhasil diperbarui! ✅','ok');
}

function togSetting(key, btn) {
  btn.classList.toggle('on');
  UD.settings[key] = btn.classList.contains('on');
  saveUD();
}

function applyTheme(color) {
  document.documentElement.style.setProperty('--cyan', color);
  UD.settings.theme = color;
  saveUD();
  showToast('Tema diubah!','ok');
}

function changePass() {
  const oldP = document.getElementById('sOldP')?.value;
  const newP = document.getElementById('sNewP')?.value;
  const conP = document.getElementById('sConP')?.value;
  if (!oldP || oldP !== CU.pass) { showToast('Kata sandi saat ini salah!','err'); return; }
  if (!newP || newP.length < 8) { showToast('Kata sandi baru minimal 8 karakter!','err'); return; }
  if (newP !== conP) { showToast('Konfirmasi kata sandi tidak cocok!','err'); return; }
  CU.pass = newP;
  const users = LS.get('en_users') || [];
  const idx = users.findIndex(u => u.id === CU.id);
  if (idx >= 0) users[idx] = CU;
  LS.set('en_users', users); LS.set('en_user', CU);
  showToast('Kata sandi berhasil diubah! 🔐','ok');
}

function deleteAccount() {
  const users = (LS.get('en_users') || []).filter(u => u.id !== CU.id);
  LS.set('en_users', users);
  LS.del('en_user');
  LS.del('en_ud_' + CU.id);
  CU = null; UD = null;
  showToast('Akun berhasil dihapus.','info');
  goPage('home');
}

/* ========================================
   HELPER FUNCTIONS
======================================== */
function addXP(amount, reason) {
  const old = UD.level;
  UD.xp += amount;
  let xpNeeded;
  while (UD.xp >= (UD.level * 500)) {
    if (UD.xp < UD.level * 500) break;
    const thresh = UD.level * 500;
    if (UD.xp >= thresh) {
      UD.level++;
      addNotif('⬆️','Level Up!',`Selamat! Kamu naik ke Level ${UD.level} — ${levelName(UD.level)}! XP: ${UD.xp}`);
    } else break;
    if (UD.level > 10) break;
  }
  saveUD();
}

function addActivity(text, icon='⚡') {
  const now = new Date();
  const time = now.toLocaleTimeString('id-ID', {hour:'2-digit',minute:'2-digit'}) + ', ' + now.toLocaleDateString('id-ID');
  UD.activity.unshift({text, icon, time});
  if (UD.activity.length > 20) UD.activity.pop();
  saveUD();
}

/* ========================================
   CONTACT
======================================== */
function doContact() {
  clrAlert('contactAlert');
  const em = document.getElementById('cEm')?.value.trim();
  const msg = document.getElementById('cMsg')?.value.trim();
  const agr = document.getElementById('cAgr')?.checked;
  if (!em || !msg) { showAlt('contactAlert','Mohon isi email dan pesan.','err'); return; }
  if (!agr) { showAlt('contactAlert','Kamu perlu menyetujui penggunaan data.','err'); return; }
  showAlt('contactAlert','✅ Pesan terkirim! Kami akan menghubungimu dalam 1×24 jam kerja.','ok');
  ['cFn','cLn','cEm','cMsg'].forEach(id => { const el=document.getElementById(id); if(el) el.value=''; });
  document.getElementById('cTopic').value='';
  document.getElementById('cAgr').checked=false;
}

/* ========================================
   UI UTILITIES
======================================== */
function showAlt(id, msg, type) {
  const el = document.getElementById(id);
  if (!el) return;
  const cls = type==='ok'?'aok':type==='err'?'aerr':'ainf';
  const ico = type==='ok'?'✅':type==='err'?'❌':'ℹ️';
  el.innerHTML = `<div class="alt ${cls}">${ico} ${msg}</div>`;
}
function clrAlert(id) { const el=document.getElementById(id); if(el) el.innerHTML=''; }

let toastT;
function showToast(msg, type='ok') {
  const el = document.getElementById('toast');
  const ico = type==='ok'?'✅':type==='err'?'❌':'ℹ️';
  el.innerHTML = ico + ' ' + msg;
  el.className = 'show';
  clearTimeout(toastT);
  toastT = setTimeout(()=>el.className='', 3500);
}
window.toast = showToast;

/* ========================================
   CANVAS BACKGROUND
======================================== */
(function() {
  const c = document.getElementById('bgc');
  const ctx = c.getContext('2d');
  let pts = [];
  function resize() { c.width=window.innerWidth; c.height=window.innerHeight; }
  resize(); window.addEventListener('resize', resize);
  for (let i=0;i<60;i++) pts.push({
    x:Math.random()*window.innerWidth, y:Math.random()*window.innerHeight,
    vx:(Math.random()-.5)*.3, vy:(Math.random()-.5)*.3,
    r:Math.random()*1.5+.5,
    col:Math.random()>.5?'rgba(0,255,219,':'rgba(139,92,246,',
    a:Math.random()*.4+.1
  });
  function draw() {
    ctx.clearRect(0,0,c.width,c.height);
    pts.forEach(p => {
      p.x+=p.vx; p.y+=p.vy;
      if(p.x<0||p.x>c.width) p.vx*=-1;
      if(p.y<0||p.y>c.height) p.vy*=-1;
      ctx.beginPath(); ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
      ctx.fillStyle=p.col+p.a+')'; ctx.fill();
    });
    for(let i=0;i<pts.length;i++) for(let j=i+1;j<pts.length;j++) {
      const dx=pts[i].x-pts[j].x, dy=pts[i].y-pts[j].y;
      const d=Math.sqrt(dx*dx+dy*dy);
      if(d<120) {
        ctx.beginPath(); ctx.moveTo(pts[i].x,pts[i].y); ctx.lineTo(pts[j].x,pts[j].y);
        ctx.strokeStyle=`rgba(0,255,219,${.06*(1-d/120)})`; ctx.lineWidth=.5; ctx.stroke();
      }
    }
    requestAnimationFrame(draw);
  }
  draw();
})();

/* ========================================
   CUSTOM CURSOR
======================================== */
(function() {
  const dot = document.getElementById('cdot');
  const ring = document.getElementById('cring');
  let mx=0,my=0,rx=0,ry=0;
  document.addEventListener('mousemove', e => {
    mx=e.clientX; my=e.clientY;
    dot.style.left=mx+'px'; dot.style.top=my+'px';
  });
  function anim() {
    rx+=(mx-rx)*.12; ry+=(my-ry)*.12;
    ring.style.left=rx+'px'; ring.style.top=ry+'px';
    requestAnimationFrame(anim);
  }
  anim();
  document.querySelectorAll('button,a,.cc,.dc').forEach(el => {
    el.addEventListener('mouseenter', () => { dot.style.transform='translate(-50%,-50%) scale(1.5)'; ring.style.width='40px'; ring.style.height='40px'; ring.style.borderColor='rgba(0,255,219,.7)'; });
    el.addEventListener('mouseleave', () => { dot.style.transform='translate(-50%,-50%) scale(1)'; ring.style.width='30px'; ring.style.height='30px'; ring.style.borderColor='rgba(0,255,219,.4)'; });
  });
})();

/* ========================================
   INIT
======================================== */
loadUser();
loadTheme();
updateNav();
renderHomeCourses();
renderCourses();
window.addEventListener('scroll', () => {
  const nav = document.getElementById('navbar');
  nav.style.borderBottomColor = window.scrollY>50?'rgba(0,255,219,.12)':'var(--border)';
});
</script>
</body>
</html>