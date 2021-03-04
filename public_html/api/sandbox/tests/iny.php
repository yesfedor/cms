<!--
@license
Copyright 2018 Google Inc. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS-IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEhklEQVR4AWJxL/BhIAesev1U5tcflpncgNrKIsqNIwzC9feMpDUzs70kOczMzMzJJcxwCTMzncPMnOwtzBwzMzPb0vRfeZPp0VhPS5I39V5fdiXV1/VD+9QC7OVn9BsyH1XIoEI1PfmJvLFowVV564+34DFUHudbmfDh4kVXh//7XwE+WjS/YfXZe3yr4j2rqj1AIhSB7hZ8ZtPZu/zw8cK523U4wE1/rvPfWrz4zs0m9ZdC9yUJAlASdBAgocRegfF/f3/h/PuaFsxMdwjAR0vm1+06eMMfIrhLqTWqdH4EumU2SPfMhigJAlRQbZrgrRsl9U+Y2DYDFCz3ILC9kiAiqSrMwbWT0nceEnR+9Kggc2zjOJCASDENkg0a5HfZZgDP81CM3CrQs2Z1+o7DJ6ePr8sK0AOCHv5Jjdt3evyYSaZ351VIStIxPRAUtrBYbxC6w+BZ0ivVSBKkIhJhemSyZpfB00EiPO2VjzYkxhcqXQqCWCShGplvi3y0QxqbuBurMjyJeWnkHZuAEgIQGsUBqwrfjZ+IlBgKyRJzVVYF8O6qFWdh86YzQzMrZigYmxAyfvHgLZQ/LC1CbeniW2Hkqr/PH16SgvGuf2/uzNMBwJA/njxizGPtSyAf7EziJCMGRDRdhoAC4PL1A/SrKQMAAQkEfpJAcRQdrBJ7gNwjSpJsdwK+CANBkqa1LgQB4IicV9nYUct7gaxuDJUErQIiEAiMxLVOFlKzIktPpT0ggpdpC/8YAHnxbgkUY4tAAFSR7AAXNyAAWHJrA/kHGjzg5nleuwFO7Nd/IoDw4Pm58+4jNLmYG0wRA5bErc2Mr3Y+dXTDW1VvwqbJkzMCHQ4S1GTCBOIgUHJrGdEwqzR+jAp/o2qAZelUDoQnruEEdDclJI6576AlNVfc+22XN/+Y1vnJD0Yind6UpEEvn/Hqq15EYjCW7jZCJEpnNvDgkyelDjs106kuux2AAXCSobULOWP8mLhYlpoDMK4qAFXJGk+grtH8YXVz5KJblqaG1+VUdTc0I290bmUQAriGITRbdQnom0aoFj8kx1+wMD2ifncAXUQE4SkDqN1hE0jEophs1SUwZAOhUAiMCLwRtamtTZtbbmZErSAUHbSysaoEmnrsakiMiUAURi283gN6wans9oX8rOCrj7/JP35DFD+iQ7Au/K2KE1jzx6ujjUnXFH9KjEq6ZlhsTBICrNLJf47Pv/pkHzvup1w4dmUbEei0+bcXRqJuh5kVARQ8byyYxOwNGr7A87xh1tp8sGT+uMInrwi++Xj7TQz2d27NvwEkrOflAFQGIDA5khASBCGdO2/Z/MnLPwYfv5TFhjW7QhVKAB6afwe2LpFlFsCnlQEosgQgDsdOG1/LKeNqJS4JCSPJ/i+TakwEARor7gER1Iva5JmPOJK0RUqmoPnnlzFCtmIAhAAQEIQRgDaiYPIauNXcnDlRIrWNFY3hm7PG9YRqr7IV7HrCgAC17befjEvRq2nGhAHtBqDpOuI/I1diUUAMYIxEdyejBJqLnNoszGZtfiX/CztGv2mq+sdaAAAAAElFTkSuQmCC">
  <title>Lighthouse Report</title>
  <style>/**
 * @license
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
  Naming convention:

  If a variable is used for a specific component: --{component}-{property name}-{modifier}

  Both {component} and {property name} should be kebab-case. If the target is the entire page,
  use 'report' for the component. The property name should not be abbreviated. Use the
  property name the variable is intended for - if it's used for multiple, a common descriptor
  is fine (ex: 'size' for a variable applied to 'width' and 'height'). If a variable is shared
  across multiple components, either create more variables or just drop the "{component}-"
  part of the name. Append any modifiers at the end (ex: 'big', 'dark').

  For colors: --color-{hue}-{intensity}

  {intensity} is the Material Design tag - 700, A700, etc.
*/
.lh-vars {
  /* Palette using Material Design Colors
   * https://www.materialui.co/colors */
  --color-amber-50: #FFF8E1;
  --color-blue-200: #90CAF9;
  --color-blue-900: #0D47A1;
  --color-blue-A700: #2962FF;
  --color-cyan-500: #00BCD4;
  --color-gray-100: #F5F5F5;
  --color-gray-200: #E0E0E0;
  --color-gray-400: #BDBDBD;
  --color-gray-50: #FAFAFA;
  --color-gray-500: #9E9E9E;
  --color-gray-600: #757575;
  --color-gray-700: #616161;
  --color-gray-800: #424242;
  --color-gray-900: #212121;
  --color-gray: #000000;
  --color-green-700: #018642;
  --color-green: #0CCE6B;
  --color-orange-700: #D04900;
  --color-orange: #FFA400;
  --color-red-700: #EB0F00;
  --color-red: #FF4E42;
  --color-teal-600: #00897B;
  --color-white: #FFFFFF;

  /* Context-specific colors */
  --color-average-secondary: var(--color-orange-700);
  --color-average: var(--color-orange);
  --color-fail-secondary: var(--color-red-700);
  --color-fail: var(--color-red);
  --color-informative: var(--color-blue-900);
  --color-pass-secondary: var(--color-green-700);
  --color-pass: var(--color-green);
  --color-hover: var(--color-gray-50);

  /* Component variables */
  --audit-description-padding-left: calc(var(--score-icon-size) + var(--score-icon-margin-left) + var(--score-icon-margin-right));
  --audit-explanation-line-height: 16px;
  --audit-group-margin-bottom: 40px;
  --audit-group-padding-vertical: 8px;
  --audit-margin-horizontal: 5px;
  --audit-padding-vertical: 8px;
  --category-header-font-size: 20px;
  --category-padding: 40px;
  --chevron-line-stroke: var(--color-gray-600);
  --chevron-size: 12px;
  --default-padding: 12px;
  --env-item-background-color: var(--color-gray-100);
  --env-item-font-size: 28px;
  --env-item-line-height: 36px;
  --env-item-padding: 10px 0px;
  --env-name-min-width: 220px;
  --footer-padding-vertical: 16px;
  --gauge-circle-size-big: 112px;
  --gauge-circle-size: 80px;
  --gauge-label-font-size-big: 28px;
  --gauge-label-font-size: 20px;
  --gauge-label-line-height-big: 36px;
  --gauge-label-line-height: 26px;
  --gauge-percentage-font-size-big: 38px;
  --gauge-percentage-font-size: 28px;
  --gauge-wrapper-width: 148px;
  --header-line-height: 24px;
  --highlighter-background-color: var(--report-text-color);
  --icon-square-size: calc(var(--score-icon-size) * 0.88);
  --image-preview-size: 48px;
  --metric-toggle-lines-fill: #7F7F7F;
  --metrics-toggle-background-color: var(--color-gray-200);
  --plugin-badge-background-color: var(--color-white);
  --plugin-badge-size-big: calc(var(--gauge-circle-size-big) / 2.7);
  --plugin-badge-size: calc(var(--gauge-circle-size) / 2.7);
  --plugin-icon-size: 65%;
  --pwa-icon-margin: 0 6px 0 -2px;
  --pwa-icon-size: var(--topbar-logo-size);
  --report-background-color: #fff;
  --report-border-color-secondary: #ebebeb;
  --report-font-family-monospace: 'Roboto Mono', 'Menlo', 'dejavu sans mono', 'Consolas', 'Lucida Console', monospace;
  --report-font-family: Roboto, Helvetica, Arial, sans-serif;
  --report-font-size: 16px;
  --report-line-height: 24px;
  --report-min-width: 400px;
  --report-text-color-secondary: var(--color-gray-800);
  --report-text-color: var(--color-gray-900);
  --report-width: calc(60 * var(--report-font-size));
  --score-container-padding: 8px;
  --score-icon-background-size: 24px;
  --score-icon-margin-left: 4px;
  --score-icon-margin-right: 12px;
  --score-icon-margin: 0 var(--score-icon-margin-right) 0 var(--score-icon-margin-left);
  --score-icon-size: 12px;
  --scores-container-padding: 20px 0 20px 0;
  --scorescale-height: 6px;
  --scorescale-width: 18px;
  --section-padding-vertical: 12px;
  --snippet-background-color: var(--color-gray-50);
  --snippet-color: var(--color-gray-800);
  --sparkline-height: 5px;
  --stackpack-padding-horizontal: 10px;
  --sticky-header-background-color: var(--report-background-color);
  --table-higlight-background-color: hsla(0, 0%, 75%, 0.1);
  --tools-icon-color: var(--color-gray-600);
  --tools-icon-size: var(--score-icon-background-size);
  --topbar-background-color: var(--color-gray-100);
  --topbar-height: 32px;
  --topbar-logo-size: 24px;
  --topbar-padding: 0 8px;
  --toplevel-warning-padding: 22px;

  /* SVGs */
  --plugin-icon-url-dark: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="%23FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M20.5 11H19V7c0-1.1-.9-2-2-2h-4V3.5C13 2.12 11.88 1 10.5 1S8 2.12 8 3.5V5H4c-1.1 0-1.99.9-1.99 2v3.8H3.5c1.49 0 2.7 1.21 2.7 2.7s-1.21 2.7-2.7 2.7H2V20c0 1.1.9 2 2 2h3.8v-1.5c0-1.49 1.21-2.7 2.7-2.7 1.49 0 2.7 1.21 2.7 2.7V22H17c1.1 0 2-.9 2-2v-4h1.5c1.38 0 2.5-1.12 2.5-2.5S21.88 11 20.5 11z"/></svg>');
  --plugin-icon-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="%23757575"><path d="M0 0h24v24H0z" fill="none"/><path d="M20.5 11H19V7c0-1.1-.9-2-2-2h-4V3.5C13 2.12 11.88 1 10.5 1S8 2.12 8 3.5V5H4c-1.1 0-1.99.9-1.99 2v3.8H3.5c1.49 0 2.7 1.21 2.7 2.7s-1.21 2.7-2.7 2.7H2V20c0 1.1.9 2 2 2h3.8v-1.5c0-1.49 1.21-2.7 2.7-2.7 1.49 0 2.7 1.21 2.7 2.7V22H17c1.1 0 2-.9 2-2v-4h1.5c1.38 0 2.5-1.12 2.5-2.5S21.88 11 20.5 11z"/></svg>');

  --pass-icon-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><title>check</title><path fill="%23178239" d="M24 4C12.95 4 4 12.95 4 24c0 11.04 8.95 20 20 20 11.04 0 20-8.96 20-20 0-11.05-8.96-20-20-20zm-4 30L10 24l2.83-2.83L20 28.34l15.17-15.17L38 16 20 34z"/></svg>');
  --average-icon-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><title>info</title><path fill="%23E67700" d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm2 30h-4V22h4v12zm0-16h-4v-4h4v4z"/></svg>');
  --fail-icon-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><title>warn</title><path fill="%23C7221F" d="M2 42h44L24 4 2 42zm24-6h-4v-4h4v4zm0-8h-4v-8h4v8z"/></svg>');

  --pwa-fast-reliable-gray-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="nonzero"><circle fill="%23DAE0E3" cx="12" cy="12" r="12"/><path d="M12.3 4l6.3 2.8V11c0 3.88-2.69 7.52-6.3 8.4C8.69 18.52 6 14.89 6 11V6.8L12.3 4zm-.56 12.88l3.3-5.79.04-.08c.05-.1.01-.29-.26-.29h-1.96l.56-3.92h-.56L9.6 12.52c0 .03.07-.12-.03.07-.11.2-.12.37.2.37h1.97l-.56 3.92h.56z" fill="%23FFF"/></g></svg>');
  --pwa-installable-gray-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="nonzero"><circle fill="%23DAE0E3" cx="12" cy="12" r="12"/><path d="M12 5a7 7 0 1 0 0 14 7 7 0 0 0 0-14zm3.5 7.7h-2.8v2.8h-1.4v-2.8H8.5v-1.4h2.8V8.5h1.4v2.8h2.8v1.4z" fill="%23FFF"/></g></svg>');
  --pwa-optimized-gray-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="%23DAE0E3" width="24" height="24" rx="12"/><path fill="%23FFF" d="M12 15.07l3.6 2.18-.95-4.1 3.18-2.76-4.2-.36L12 6.17l-1.64 3.86-4.2.36 3.2 2.76-.96 4.1z"/><path d="M5 5h14v14H5z"/></g></svg>');

  --pwa-fast-reliable-gray-url-dark: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="nonzero"><circle fill="%23424242" cx="12" cy="12" r="12"/><path d="M12.3 4l6.3 2.8V11c0 3.88-2.69 7.52-6.3 8.4C8.69 18.52 6 14.89 6 11V6.8L12.3 4zm-.56 12.88l3.3-5.79.04-.08c.05-.1.01-.29-.26-.29h-1.96l.56-3.92h-.56L9.6 12.52c0 .03.07-.12-.03.07-.11.2-.12.37.2.37h1.97l-.56 3.92h.56z" fill="%23FFF"/></g></svg>');
  --pwa-installable-gray-url-dark: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="nonzero"><circle fill="%23424242" cx="12" cy="12" r="12"/><path d="M12 5a7 7 0 1 0 0 14 7 7 0 0 0 0-14zm3.5 7.7h-2.8v2.8h-1.4v-2.8H8.5v-1.4h2.8V8.5h1.4v2.8h2.8v1.4z" fill="%23FFF"/></g></svg>');
  --pwa-optimized-gray-url-dark: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="%23424242" width="24" height="24" rx="12"/><path fill="%23FFF" d="M12 15.07l3.6 2.18-.95-4.1 3.18-2.76-4.2-.36L12 6.17l-1.64 3.86-4.2.36 3.2 2.76-.96 4.1z"/><path d="M5 5h14v14H5z"/></g></svg>');

  --pwa-fast-reliable-color-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><circle fill="%230CCE6B" cx="12" cy="12" r="12"/><path d="M12 4.3l6.3 2.8v4.2c0 3.88-2.69 7.52-6.3 8.4-3.61-.88-6.3-4.51-6.3-8.4V7.1L12 4.3zm-.56 12.88l3.3-5.79.04-.08c.05-.1.01-.29-.26-.29h-1.96l.56-3.92h-.56L9.3 12.82c0 .03.07-.12-.03.07-.11.2-.12.37.2.37h1.97l-.56 3.92h.56z" fill="%23FFF"/></g></svg>');
  --pwa-installable-color-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><circle fill="%230CCE6B" cx="12" cy="12" r="12"/><path d="M12 5a7 7 0 1 0 0 14 7 7 0 0 0 0-14zm3.5 7.7h-2.8v2.8h-1.4v-2.8H8.5v-1.4h2.8V8.5h1.4v2.8h2.8v1.4z" fill="%23FFF"/></g></svg>');
  --pwa-optimized-color-url: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><rect fill="%230CCE6B" width="24" height="24" rx="12"/><path d="M5 5h14v14H5z"/><path fill="%23FFF" d="M12 15.07l3.6 2.18-.95-4.1 3.18-2.76-4.2-.36L12 6.17l-1.64 3.86-4.2.36 3.2 2.76-.96 4.1z"/></g></svg>');
}

@media not print {
  .lh-vars.dark {
    /* Pallete */
    --color-gray-200: var(--color-gray-800);
    --color-gray-400: var(--color-gray-600);
    --color-gray-50: #757575;
    --color-gray-600: var(--color-gray-500);
    --color-green-700: var(--color-green);
    --color-orange-700: var(--color-orange);
    --color-red-700: var(--color-red);
    --color-teal-600: var(--color-cyan-500);

    /* Context-specific colors */
    --color-hover: rgba(0, 0, 0, 0.2);
    --color-informative: var(--color-blue-200);

    /* Component variables */
    --env-item-background-color: var(--color-gray);
    --plugin-badge-background-color: var(--color-gray-800);
    --report-background-color: var(--color-gray-900);
    --report-border-color-secondary: var(--color-gray-200);
    --report-text-color-secondary: var(--color-gray-400);
    --report-text-color: var(--color-gray-100);
    --topbar-background-color: var(--color-gray);

    /* SVGs */
    --plugin-icon-url: var(--plugin-icon-url-dark);
    --pwa-fast-reliable-gray-url: var(--pwa-fast-reliable-gray-url-dark);
    --pwa-installable-gray-url: var(--pwa-installable-gray-url-dark);
    --pwa-optimized-gray-url: var(--pwa-optimized-gray-url-dark);
  }
}

@media only screen and (max-width: 480px) {
  .lh-vars {
    --audit-group-margin-bottom: 20px;
    --category-padding: 24px;
    --env-name-min-width: 120px;
    --gauge-circle-size-big: 96px;
    --gauge-circle-size: 72px;
    --gauge-label-font-size-big: 22px;
    --gauge-label-font-size: 14px;
    --gauge-label-line-height-big: 26px;
    --gauge-label-line-height: 20px;
    --gauge-percentage-font-size-big: 34px;
    --gauge-percentage-font-size: 26px;
    --gauge-wrapper-width: 112px;
    --header-padding: 16px 0 16px 0;
    --image-preview-size: 24px;
    --plugin-icon-size: 75%;
    --pwa-icon-margin: 0 7px 0 -3px;
    --report-font-size: 14px;
    --report-line-height: 20px;
    --score-icon-margin-left: 2px;
    --score-icon-size: 10px;
    --topbar-height: 28px;
    --topbar-logo-size: 20px;
  }

  /* Not enough space to adequately show the relative savings bars. */
  .lh-sparkline {
    display: none;
  }
}

.lh-vars.lh-devtools {
  --audit-explanation-line-height: 14px;
  --audit-group-margin-bottom: 20px;
  --audit-group-padding-vertical: 12px;
  --audit-padding-vertical: 4px;
  --category-header-font-size: 16px;
  --category-padding: 12px;
  --default-padding: 12px;
  --env-name-min-width: 120px;
  --footer-padding-vertical: 8px;
  --gauge-circle-size-big: 72px;
  --gauge-circle-size: 64px;
  --gauge-label-font-size-big: 22px;
  --gauge-label-font-size: 14px;
  --gauge-label-line-height-big: 26px;
  --gauge-label-line-height: 20px;
  --gauge-percentage-font-size-big: 34px;
  --gauge-percentage-font-size: 26px;
  --gauge-wrapper-width: 97px;
  --header-line-height: 20px;
  --header-padding: 16px 0 16px 0;
  --plugin-icon-size: 75%;
  --pwa-icon-margin: 0 7px 0 -3px;
  --report-font-family-monospace: 'Menlo', 'dejavu sans mono', 'Consolas', 'Lucida Console', monospace;
  --report-font-family: '.SFNSDisplay-Regular', 'Helvetica Neue', 'Lucida Grande', sans-serif;
  --report-font-size: 12px;
  --report-line-height: 20px;
  --score-icon-margin-left: 2px;
  --score-icon-size: 10px;
  --section-padding-vertical: 8px;
}

.lh-devtools.lh-root {
  height: 100%;
}
.lh-devtools.lh-root img {
  /* Override devtools default 'min-width: 0' so svg without size in a flexbox isn't collapsed. */
  min-width: auto;
}
.lh-devtools .lh-container {
  overflow-y: scroll;
  height: calc(100% - var(--topbar-height));
}
@media print {
  .lh-devtools .lh-container {
    overflow: unset;
  }
}
.lh-devtools .lh-sticky-header {
  /* This is normally the height of the topbar, but we want it to stick to the top of our scroll container .lh-container` */
  top: 0;
}

@keyframes fadeIn {
  0% { opacity: 0;}
  100% { opacity: 0.6;}
}

.lh-root *, .lh-root *::before, .lh-root *::after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

.lh-root {
  font-family: var(--report-font-family);
  font-size: var(--report-font-size);
  margin: 0;
  line-height: var(--report-line-height);
  background: var(--report-background-color);
  scroll-behavior: smooth;
  color: var(--report-text-color);
}

.lh-root :focus {
    outline: -webkit-focus-ring-color auto 3px;
}
.lh-root summary:focus {
    outline: none;
    box-shadow: 0 0 0 1px hsl(217, 89%, 61%);
}

.lh-root [hidden] {
  display: none !important;
}

.lh-root details > summary {
  cursor: pointer;
}

.lh-container {
  /*
  Text wrapping in the report is so much FUN!
  We have a `word-break: break-word;` globally here to prevent a few common scenarios, namely
  long non-breakable text (usually URLs) found in:
    1. The footer
    2. .lh-node (outerHTML)
    3. .lh-code

  With that sorted, the next challenge is appropriate column sizing and text wrapping inside our
  .lh-details tables. Even more fun.
    * We don't want table headers ("Potential Savings (ms)") to wrap or their column values, but
    we'd be happy for the URL column to wrap if the URLs are particularly long.
    * We want the narrow columns to remain narrow, providing the most column width for URL
    * We don't want the table to extend past 100% width.
    * Long URLs in the URL column can wrap. Util.getURLDisplayName maxes them out at 64 characters,
      but they do not get any overflow:ellipsis treatment.
  */
  word-break: break-word;
}

.lh-audit-group a,
.lh-category-header__description a,
.lh-audit__description a,
.lh-footer a {
  color: var(--color-informative);
}

.lh-audit__description, .lh-audit__stackpack {
  --inner-audit-padding-right: var(--stackpack-padding-horizontal);
  padding-left: var(--audit-description-padding-left);
  padding-right: var(--inner-audit-padding-right);
  padding-top: 8px;
  padding-bottom: 8px;
}

.lh-details {
  font-size: var(--report-font-size);
  margin-top: var(--default-padding);
  margin-bottom: var(--default-padding);
  margin-left: var(--audit-description-padding-left);
  /* whatever the .lh-details side margins are */
  width: 100%;
}

.lh-details.flex .lh-code {
  max-width: 70%;
}

.lh-audit__stackpack {
  display: flex;
  align-items: center;
}

.lh-audit__stackpack__img {
  max-width: 50px;
  margin-right: var(--default-padding)
}

/* Report header */

.report-icon {
  opacity: 0.7;
}
.report-icon:hover {
  opacity: 1;
}
.report-icon[disabled] {
  opacity: 0.3;
  pointer-events: none;
}

.report-icon--print {
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/><path fill="none" d="M0 0h24v24H0z"/></svg>');
}
.report-icon--copy {
  background-image: url('data:image/svg+xml;utf8,<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>');
}
.report-icon--open {
  background-image: url('data:image/svg+xml;utf8,<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 4H5c-1.11 0-2 .9-2 2v12c0 1.1.89 2 2 2h4v-2H5V8h14v10h-4v2h4c1.1 0 2-.9 2-2V6c0-1.1-.89-2-2-2zm-7 6l-4 4h3v6h2v-6h3l-4-4z"/></svg>');
}
.report-icon--download {
  background-image: url('data:image/svg+xml;utf8,<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
}
.report-icon--dark {
  background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 100 125"><path d="M50 23.587c-16.27 0-22.799 12.574-22.799 21.417 0 12.917 10.117 22.451 12.436 32.471h20.726c2.32-10.02 12.436-19.554 12.436-32.471 0-8.843-6.528-21.417-22.799-21.417zM39.637 87.161c0 3.001 1.18 4.181 4.181 4.181h.426l.41 1.231C45.278 94.449 46.042 95 48.019 95h3.963c1.978 0 2.74-.551 3.365-2.427l.409-1.231h.427c3.002 0 4.18-1.18 4.18-4.181V80.91H39.637v6.251zM50 18.265c1.26 0 2.072-.814 2.072-2.073v-9.12C52.072 5.813 51.26 5 50 5c-1.259 0-2.072.813-2.072 2.073v9.12c0 1.259.813 2.072 2.072 2.072zM68.313 23.727c.994.774 2.135.634 2.91-.357l5.614-7.187c.776-.992.636-2.135-.356-2.909-.992-.776-2.135-.636-2.91.357l-5.613 7.186c-.778.993-.636 2.135.355 2.91zM91.157 36.373c-.306-1.222-1.291-1.815-2.513-1.51l-8.85 2.207c-1.222.305-1.814 1.29-1.51 2.512.305 1.223 1.291 1.814 2.513 1.51l8.849-2.206c1.223-.305 1.816-1.291 1.511-2.513zM86.757 60.48l-8.331-3.709c-1.15-.512-2.225-.099-2.736 1.052-.512 1.151-.1 2.224 1.051 2.737l8.33 3.707c1.15.514 2.225.101 2.736-1.05.513-1.149.1-2.223-1.05-2.737zM28.779 23.37c.775.992 1.917 1.131 2.909.357.992-.776 1.132-1.917.357-2.91l-5.615-7.186c-.775-.992-1.917-1.132-2.909-.357s-1.131 1.917-.356 2.909l5.614 7.187zM21.715 39.583c.305-1.223-.288-2.208-1.51-2.513l-8.849-2.207c-1.222-.303-2.208.289-2.513 1.511-.303 1.222.288 2.207 1.511 2.512l8.848 2.206c1.222.304 2.208-.287 2.513-1.509zM21.575 56.771l-8.331 3.711c-1.151.511-1.563 1.586-1.05 2.735.511 1.151 1.586 1.563 2.736 1.052l8.331-3.711c1.151-.511 1.563-1.586 1.05-2.735-.512-1.15-1.585-1.562-2.736-1.052z"/></svg>');
}

/* Node */
.lh-node__snippet {
  font-family: var(--report-font-family-monospace);
  color: var(--color-teal-600);
  font-size: 12px;
  line-height: 1.5em;
}

/* Score */

.lh-audit__score-icon {
  width: var(--score-icon-size);
  height: var(--score-icon-size);
  margin: var(--score-icon-margin);
}

.lh-audit--pass .lh-audit__display-text {
  color: var(--color-pass-secondary);
}
.lh-audit--pass .lh-audit__score-icon {
  border-radius: 100%;
  background: var(--color-pass);
}

.lh-audit--average .lh-audit__display-text {
  color: var(--color-average-secondary);
}
.lh-audit--average .lh-audit__score-icon {
  background: var(--color-average);
  width: var(--icon-square-size);
  height: var(--icon-square-size);
}

.lh-audit--fail .lh-audit__display-text {
  color: var(--color-fail-secondary);
}
.lh-audit--fail .lh-audit__score-icon,
.lh-audit--error .lh-audit__score-icon {
  border-left: calc(var(--score-icon-size) / 2) solid transparent;
  border-right: calc(var(--score-icon-size) / 2) solid transparent;
  border-bottom: var(--score-icon-size) solid var(--color-fail);
}

.lh-audit--manual .lh-audit__display-text,
.lh-audit--notapplicable .lh-audit__display-text {
  color: var(--color-gray-600);
}
.lh-audit--manual .lh-audit__score-icon,
.lh-audit--notapplicable .lh-audit__score-icon {
  border-radius: 100%;
  background: var(--color-gray-400);
}

.lh-audit--informative .lh-audit__display-text {
  color: var(--color-gray-600);
}

.lh-audit--informative .lh-audit__score-icon {
  border: none;
  border-radius: 100%;
  background: var(--color-gray-400);
}

.lh-audit__description,
.lh-audit__stackpack {
  color: var(--report-text-color-secondary);
}
.lh-category-header__description  {
  font-size: var(--report-font-size);
  text-align: center;
  margin: 0px auto;
  max-width: 400px;
}


.lh-audit__display-text,
.lh-load-opportunity__sparkline,
.lh-chevron-container {
  margin: 0 var(--audit-margin-horizontal);
}
.lh-chevron-container {
  margin-right: 0;
}

.lh-audit__title-and-text {
  flex: 1;
}

/* Prepend display text with em dash separator. But not in Opportunities. */
.lh-audit__display-text:not(:empty):before {
  content: '—';
  margin-right: var(--audit-margin-horizontal);
}
.lh-audit-group.lh-audit-group--load-opportunities .lh-audit__display-text:not(:empty):before {
  display: none;
}

/* Expandable Details (Audit Groups, Audits) */
.lh-audit__header {
  display: flex;
  align-items: center;
  font-weight: 500;
  padding: var(--audit-padding-vertical) 0;
}

.lh-audit--load-opportunity .lh-audit__header {
  display: block;
}

.lh-audit__header:hover {
  background-color: var(--color-hover);
}

/* Hide the expandable arrow icon, three ways: via the CSS Counter Styles spec, for webkit/blink browsers, hiding the polyfilled icon */
/* https://github.com/javan/details-element-polyfill/blob/master/src/details-element-polyfill/polyfill.sass */
.lh-audit-group > summary,
.lh-expandable-details > summary {
  list-style-type: none;
}
.lh-audit-group > summary::-webkit-details-marker,
.lh-expandable-details > summary::-webkit-details-marker {
  display: none;
}
.lh-audit-group > summary:before,
.lh-expandable-details > summary:before {
  display: none;
}


/* Perf Metric */

.lh-columns {
  display: flex;
  width: 100%;
}
@media screen and (max-width: 640px) {
  .lh-columns {
    flex-wrap: wrap;

  }
}

.lh-column {
  flex: 1;
}
.lh-column:first-of-type {
  margin-right: 24px;
}

@media screen and (max-width: 800px) {
  .lh-column:first-of-type {
    margin-right: 8px;
  }
}
@media screen and (max-width: 640px) {
  .lh-column {
    flex-basis: 100%;
  }
  .lh-column:first-of-type {
    margin-right: 0px;
  }
  .lh-column:first-of-type .lh-metric:last-of-type {
    border-bottom: 0;
  }
}


.lh-metric {
  border-bottom: 1px solid var(--report-border-color-secondary);
}
.lh-metric:first-of-type {
  border-top: 1px solid var(--report-border-color-secondary);
}

.lh-metric__innerwrap {
  display: grid;
  grid-template-columns: var(--audit-description-padding-left) 10fr 3fr;
  align-items: center;
  padding: 10px 0;
}

.lh-metric__details {
  order: -1;
}

.lh-metric__title {
  flex: 1;
  font-weight: 500;
}

.lh-metrics__disclaimer {
  color: var(--color-gray-600);
  margin: var(--section-padding-vertical) 0;
}
.lh-metrics__disclaimer a {
  color: var(--color-gray-700);
}

.lh-metric__description {
  display: none;
  grid-column-start: 2;
  grid-column-end: 3;
  color: var(--report-text-color-secondary);
}

.lh-metric__value {
  white-space: nowrap; /* No wrapping between metric value and the icon */
  font-weight: 500;
  justify-self: end;
}

/* No-JS toggle switch */
/* Keep this selector sync'd w/ `magicSelector` in report-ui-features-test.js */
 .lh-metrics-toggle__input:checked ~ .lh-columns .lh-metric__description {
  display: block;
}

.lh-metrics-toggle__input {
  cursor: pointer;
  opacity: 0;
  position: absolute;
  right: 0;
  width: 74px;
  height: 28px;
  top: -3px;
}
.lh-metrics-toggle__label {
  display: flex;
  background-color: #eee;
  border-radius: 20px;
  overflow: hidden;
  position: absolute;
  right: 0;
  top: -3px;
  pointer-events: none;
}
.lh-metrics-toggle__input:focus + label {
  outline: -webkit-focus-ring-color auto 3px;
}
.lh-metrics-toggle__icon {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2px 5px;
  width: 50%;
  height: 28px;
}
.lh-metrics-toggle__input:not(:checked) + label .lh-metrics-toggle__icon--less,
.lh-metrics-toggle__input:checked + label .lh-metrics-toggle__icon--more {
  background-color: var(--color-blue-A700);
  --metric-toggle-lines-fill: var(--color-white);
}
.lh-metrics-toggle__lines {
  fill: var(--metric-toggle-lines-fill);
}

.lh-metrics-toggle__label  {
  background-color: var(--metrics-toggle-background-color);
}

.lh-metrics-toggle__label .lh-metrics-toggle__icon--less {
  padding-left: 8px;
}
.lh-metrics-toggle__label .lh-metrics-toggle__icon--more {
  padding-right: 8px;
}

/* Pushes the metric description toggle button to the right. */
.lh-audit-group--metrics .lh-audit-group__header {
  display: flex;
}
.lh-audit-group--metrics .lh-audit-group__header span.lh-audit-group__title {
  flex: 1;
}

.lh-metric .lh-metric__innerwrap::before {
  content: '';
  width: var(--score-icon-size);
  height: var(--score-icon-size);
  display: inline-block;
  margin: var(--score-icon-margin);
}

.lh-metric--pass .lh-metric__value {
  color: var(--color-pass-secondary);
}
.lh-metric--pass .lh-metric__innerwrap::before {
  border-radius: 100%;
  background: var(--color-pass);
}

.lh-metric--average .lh-metric__value {
  color: var(--color-average-secondary);
}
.lh-metric--average .lh-metric__innerwrap::before {
  background: var(--color-average);
  width: var(--icon-square-size);
  height: var(--icon-square-size);
}

.lh-metric--fail .lh-metric__value {
  color: var(--color-fail-secondary);
}
.lh-metric--fail .lh-metric__innerwrap::before,
.lh-metric--error .lh-metric__innerwrap::before {
  border-left: calc(var(--score-icon-size) / 2) solid transparent;
  border-right: calc(var(--score-icon-size) / 2) solid transparent;
  border-bottom: var(--score-icon-size) solid var(--color-fail);
}

.lh-metric--error .lh-metric__value,
.lh-metric--error .lh-metric__description {
  color: var(--color-fail-secondary);
}

/* Perf load opportunity */

.lh-load-opportunity__cols {
  display: flex;
  align-items: flex-start;
}

.lh-load-opportunity__header .lh-load-opportunity__col {
  color: var(--color-gray-600);
  display: unset;
  line-height: calc(2.3 * var(--report-font-size));
}

.lh-load-opportunity__col {
  display: flex;
}

.lh-load-opportunity__col--one {
  flex: 5;
  align-items: center;
  margin-right: 2px;
}
.lh-load-opportunity__col--two {
  flex: 4;
  text-align: right;
}

.lh-audit--load-opportunity .lh-audit__display-text {
  text-align: right;
  flex: 0 0 calc(3 * var(--report-font-size));
}


/* Sparkline */

.lh-load-opportunity__sparkline {
  flex: 1;
  margin-top: calc((var(--report-line-height) - var(--sparkline-height)) / 2);
}

.lh-sparkline {
  height: var(--sparkline-height);
  width: 100%;
}

.lh-sparkline__bar {
  height: 100%;
  float: right;
}

.lh-audit--pass .lh-sparkline__bar {
  background: var(--color-pass);
}

.lh-audit--average .lh-sparkline__bar {
  background: var(--color-average);
}

.lh-audit--fail .lh-sparkline__bar {
  background: var(--color-fail);
}



/* Filmstrip */

.lh-filmstrip-container {
  /* smaller gap between metrics and filmstrip */
  margin: -8px auto 0 auto;
}

.lh-filmstrip {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding-bottom: var(--default-padding);
}

.lh-filmstrip__frame {
  text-align: right;
  position: relative;
}

.lh-filmstrip__thumbnail {
  border: 1px solid var(--report-border-color-secondary);
  max-height: 100px;
  max-width: 60px;
}

@media screen and (max-width: 750px) {
  .lh-filmstrip {
    flex-wrap: wrap;
  }
  .lh-filmstrip__frame {
    width: 20%;
    margin-bottom: 5px;
  }
  .lh-filmstrip__thumbnail {
    display: block;
    margin: auto;
  }
}

/* Audit */

.lh-audit {
  border-bottom: 1px solid var(--report-border-color-secondary);
}

/* Apply border-top to just the first audit. */
.lh-audit {
  border-top: 1px solid var(--report-border-color-secondary);
}
.lh-audit ~ .lh-audit {
  border-top: none;
}


.lh-audit--error .lh-audit__display-text {
  color: var(--color-fail);
}

/* Audit Group */

.lh-audit-group {
  margin-bottom: var(--audit-group-margin-bottom);
  position: relative;
}

.lh-audit-group__header::before {
  /* By default, groups don't get an icon */
  content: none;
  width: var(--pwa-icon-size);
  height: var(--pwa-icon-size);
  margin: var(--pwa-icon-margin);
  display: inline-block;
  vertical-align: middle;
}

/* Style the "over budget" columns red. */
.lh-audit-group--budgets .lh-table tbody tr td:nth-child(4),
.lh-audit-group--budgets .lh-table tbody tr td:nth-child(5){
  color: var(--color-red-700);
}

/* Align the "over budget request count" text to be close to the "over budget bytes" column. */
.lh-audit-group--budgets .lh-table tbody tr td:nth-child(4){
  text-align: right;
}

.lh-audit-group--budgets .lh-table {
  width: 100%;
}

.lh-audit-group--pwa-fast-reliable .lh-audit-group__header::before {
  content: '';
  background-image: var(--pwa-fast-reliable-gray-url);
}
.lh-audit-group--pwa-installable .lh-audit-group__header::before {
  content: '';
  background-image: var(--pwa-installable-gray-url);
}
.lh-audit-group--pwa-optimized .lh-audit-group__header::before {
  content: '';
  background-image: var(--pwa-optimized-gray-url);
}
.lh-audit-group--pwa-fast-reliable.lh-badged .lh-audit-group__header::before {
  background-image: var(--pwa-fast-reliable-color-url);
}
.lh-audit-group--pwa-installable.lh-badged .lh-audit-group__header::before {
  background-image: var(--pwa-installable-color-url);
}
.lh-audit-group--pwa-optimized.lh-badged .lh-audit-group__header::before {
  background-image: var(--pwa-optimized-color-url);
}

.lh-audit-group--metrics .lh-audit-group__summary {
  margin-top: 0;
  margin-bottom: 0;
}

.lh-audit-group__summary {
  display: flex;
  justify-content: space-between;
  margin-top: calc(var(--category-padding) * 1.5);
  margin-bottom: var(--category-padding);
}

.lh-audit-group__itemcount {
  color: var(--color-gray-600);
  font-weight: bold;
}
.lh-audit-group__header .lh-chevron {
  margin-top: calc((var(--report-line-height) - 5px) / 2);
}

.lh-audit-group__header {
  font-size: var(--report-font-size);
  margin: 0 0 var(--audit-group-padding-vertical);
  /* When the header takes 100% width, the chevron becomes small. */
  max-width: calc(100% - var(--chevron-size));
}
/* max-width makes the metric toggle not flush. metrics doesn't have a chevron so unset. */
.lh-audit-group--metrics .lh-audit-group__header {
  max-width: unset;
}

.lh-audit-group__header span.lh-audit-group__title {
  font-weight: bold;
}

.lh-audit-group__header span.lh-audit-group__itemcount {
  font-weight: bold;
  color: var(--color-gray-600);
}

.lh-audit-group__header span.lh-audit-group__description {
  font-weight: 500;
  color: var(--color-gray-600);
}
.lh-audit-group__header span.lh-audit-group__description::before {
  content: '—';
  margin: 0px var(--audit-margin-horizontal);
}

.lh-clump > .lh-audit-group__header,
.lh-audit-group--diagnostics .lh-audit-group__header,
.lh-audit-group--load-opportunities .lh-audit-group__header,
.lh-audit-group--metrics .lh-audit-group__header,
.lh-audit-group--pwa-fast-reliable .lh-audit-group__header,
.lh-audit-group--pwa-installable .lh-audit-group__header,
.lh-audit-group--pwa-optimized .lh-audit-group__header {
  margin-top: var(--audit-group-padding-vertical);
}

.lh-audit-explanation {
  margin: var(--audit-padding-vertical) 0 calc(var(--audit-padding-vertical) / 2) var(--audit-margin-horizontal);
  line-height: var(--audit-explanation-line-height);
  display: inline-block;
}

.lh-audit--fail .lh-audit-explanation {
  color: var(--color-fail);
}

/* Report */
.lh-list > div:not(:last-child) {
  padding-bottom: 20px;
}

.lh-header-container {
  display: block;
  margin: 0 auto;
  position: relative;
  word-wrap: break-word;
}

.lh-report {
  min-width: var(--report-min-width);
}

.lh-exception {
  font-size: large;
}

.lh-code {
  white-space: normal;
  margin-top: 0;
  font-size: 85%;
}

.lh-warnings {
  --item-margin: calc(var(--report-line-height) / 6);
  color: var(--color-average);
  margin: var(--audit-padding-vertical) 0;
  padding: calc(var(--audit-padding-vertical) / 2) var(--audit-padding-vertical);
}
.lh-warnings span {
  font-weight: bold;
}

.lh-warnings--toplevel {
  --item-margin: calc(var(--header-line-height) / 4);
  color: var(--report-text-color-secondary);
  margin-left: auto;
  margin-right: auto;
  max-width: calc(var(--report-width) - var(--category-padding) * 2);
  background-color: var(--color-amber-50);
  padding: var(--toplevel-warning-padding);
}

.lh-warnings ul {
  padding-left: calc(var(--category-padding) * 2);
  margin: 0;
}
.lh-warnings li {
  margin: var(--item-margin) 0;
}
.lh-warnings li:last-of-type {
  margin-bottom: 0;
}

.lh-scores-header {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.lh-scores-header__solo {
  padding: 0;
  border: 0;
}

/* Gauge */

.lh-gauge__wrapper--pass {
  color: var(--color-pass);
  fill: var(--color-pass);
  stroke: var(--color-pass);
}

.lh-gauge__wrapper--average {
  color: var(--color-average);
  fill: var(--color-average);
  stroke: var(--color-average);
}

.lh-gauge__wrapper--fail {
  color: var(--color-fail);
  fill: var(--color-fail);
  stroke: var(--color-fail);
}

.lh-gauge {
  stroke-linecap: round;
  width: var(--gauge-circle-size);
  height: var(--gauge-circle-size);
}

.lh-category .lh-gauge {
  --gauge-circle-size: var(--gauge-circle-size-big);
}

.lh-gauge-base {
    opacity: 0.1;
    stroke: var(--circle-background);
    stroke-width: var(--circle-border-width);
}

.lh-gauge-arc {
    fill: none;
    stroke: var(--circle-color);
    stroke-width: var(--circle-border-width);
    animation: load-gauge var(--transition-length) ease forwards;
    animation-delay: 250ms;
}

.lh-gauge__svg-wrapper {
  position: relative;
  height: var(--gauge-circle-size);
}
.lh-category .lh-gauge__svg-wrapper {
  --gauge-circle-size: var(--gauge-circle-size-big);
}

/* The plugin badge overlay */
.lh-gauge__wrapper--plugin .lh-gauge__svg-wrapper::before {
  width: var(--plugin-badge-size);
  height: var(--plugin-badge-size);
  background-color: var(--plugin-badge-background-color);
  background-image: var(--plugin-icon-url);
  background-repeat: no-repeat;
  background-size: var(--plugin-icon-size);
  background-position: 58% 50%;
  content: "";
  position: absolute;
  right: -6px;
  bottom: 0px;
  display: block;
  z-index: 100;
  box-shadow: 0 0 4px rgba(0,0,0,.2);
  border-radius: 25%;
}
.lh-category .lh-gauge__wrapper--plugin .lh-gauge__svg-wrapper::before {
  width: var(--plugin-badge-size-big);
  height: var(--plugin-badge-size-big);
}

@keyframes load-gauge {
  from { stroke-dasharray: 0 352; }
}

.lh-gauge__percentage {
  width: 100%;
  height: var(--gauge-circle-size);
  position: absolute;
  font-family: var(--report-font-family-monospace);
  font-size: calc(var(--gauge-circle-size) * 0.34 + 1.3px);
  line-height: 0;
  text-align: center;
  top: calc(var(--score-container-padding) + var(--gauge-circle-size) / 2);
}

.lh-category .lh-gauge__percentage {
  --gauge-circle-size: var(--gauge-circle-size-big);
  --gauge-percentage-font-size: var(--gauge-percentage-font-size-big);
}

.lh-gauge__wrapper {
  position: relative;
  display: flex;
  align-items: center;
  flex-direction: column;
  text-decoration: none;
  padding: var(--score-container-padding);

  --circle-border-width: 8;
  --transition-length: 1s;

  /* Contain the layout style paint & layers during animation*/
  contain: content;
  will-change: opacity; /* Only using for layer promotion */
}

.lh-gauge__label {
  font-size: var(--gauge-label-font-size);
  line-height: var(--gauge-label-line-height);
  margin-top: 10px;
  text-align: center;
  color: var(--report-text-color);
}

/* TODO(#8185) use more BEM (.lh-gauge__label--big) instead of relying on descendant selector */
.lh-category .lh-gauge__label {
  --gauge-label-font-size: var(--gauge-label-font-size-big);
  --gauge-label-line-height: var(--gauge-label-line-height-big);
  margin-top: 14px;
}


.lh-scores-header .lh-gauge__wrapper,
.lh-scores-header .lh-gauge--pwa__wrapper,
.lh-sticky-header .lh-gauge__wrapper,
.lh-sticky-header .lh-gauge--pwa__wrapper {
  width: var(--gauge-wrapper-width);
}

.lh-scorescale {
  display: inline-flex;
  margin: 12px auto 0 auto;
  border: 1px solid var(--color-gray-200);
  border-radius: 20px;
  padding: 8px 8px;
}

.lh-scorescale-range {
  display: flex;
  align-items: center;
  margin: 0 12px;
  font-family: var(--report-font-family-monospace);
  white-space: nowrap;
}

.lh-scorescale-range::before {
  content: '';
  width: var(--scorescale-width);
  height: var(--scorescale-height);
  border-radius: 10px;
  display: block;
  margin-right: 10px;
}

.lh-scorescale-range--pass::before {
  background-color: var(--color-pass);
}

.lh-scorescale-range--average::before {
  background-color: var(--color-average);
}

.lh-scorescale-range--fail::before {
  background-color: var(--color-fail);
}

/* Hide category score gauages if it's a single category report */
.lh-header--solo-category .lh-scores-wrapper {
  display: none;
}


.lh-categories {
  width: 100%;
  overflow: hidden;
}

.lh-category {
  padding: var(--category-padding);
  max-width: var(--report-width);
  margin: 0 auto;
}

.lh-category-wrapper {
  border-bottom: 1px solid var(--color-gray-200);
}

.lh-category-wrapper:first-of-type {
  border-top: 1px solid var(--color-gray-200);
}

/* section hash link jump should preserve fixed header
   https://css-tricks.com/hash-tag-links-padding/
*/
.lh-category > .lh-permalink {
  --sticky-header-height: calc(var(--gauge-circle-size) + var(--score-container-padding) * 2);
  --topbar-plus-header: calc(var(--topbar-height) + var(--sticky-header-height));
  margin-top: calc(var(--topbar-plus-header) * -1);
  padding-bottom: var(--topbar-plus-header);
  display: block;
  visibility: hidden;
}

.lh-category-header {
  font-size: var(--category-header-font-size);
  min-height: var(--gauge-circle-size);
  margin-bottom: var(--section-padding-vertical);
}

.lh-category-header .lh-score__gauge {
  max-width: 400px;
  width: auto;
  margin: 0px auto;
}

.lh-category-header .lh-audit__title {
  font-size: var(--category-header-font-size);
  line-height: var(--header-line-height);
}

#lh-log {
  position: fixed;
  background-color: #323232;
  color: #fff;
  min-height: 48px;
  min-width: 288px;
  padding: 16px 24px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  border-radius: 2px;
  margin: 12px;
  font-size: 14px;
  cursor: default;
  transition: transform 0.3s, opacity 0.3s;
  transform: translateY(100px);
  opacity: 0;
  bottom: 0;
  left: 0;
  z-index: 3;
}

#lh-log.show {
  opacity: 1;
  transform: translateY(0);
}

/* 964 fits the min-width of the filmstrip */
@media screen and (max-width: 964px) {
  .lh-report {
    margin-left: 0;
    width: 100%;
  }
}

@media print {
  body {
    -webkit-print-color-adjust: exact; /* print background colors */
  }
  .lh-container {
    display: block;
  }
  .lh-report {
    margin-left: 0;
    padding-top: 0;
  }
  .lh-categories {
    margin-top: 0;
  }
}

.lh-table {
  border-collapse: collapse;
  /* Can't assign padding to table, so shorten the width instead. */
  width: calc(100% - var(--audit-description-padding-left));
}

.lh-table thead th {
  font-weight: normal;
  color: var(--color-gray-600);
  /* See text-wrapping comment on .lh-container. */
  word-break: normal;
}

.lh-table tbody tr:nth-child(odd) {
  background-color: var(--table-higlight-background-color);
}

.lh-table th,
.lh-table td {
  padding: 8px 6px;
}
.lh-table th:first-child {
  padding-left: 0;
}
.lh-table th:last-child {
  padding-right: 0;
}

/* Looks unnecessary, but mostly for keeping the <th>s left-aligned */
.lh-table-column--text,
.lh-table-column--url,
/* .lh-table-column--thumbnail, */
/* .lh-table-column--empty,*/
.lh-table-column--code,
.lh-table-column--node {
  text-align: left;
}

.lh-table-column--bytes,
.lh-table-column--timespanMs,
.lh-table-column--ms,
.lh-table-column--numeric {
  text-align: right;
  word-break: normal;
}



.lh-table .lh-table-column--thumbnail {
  width: var(--image-preview-size);
  padding: 0;
}

.lh-table-column--url {
  min-width: 250px;
}

/* Keep columns narrow if they follow the URL column */
/* 12% was determined to be a decent narrow width, but wide enough for column headings */
.lh-table-column--url + th.lh-table-column--bytes,
.lh-table-column--url + .lh-table-column--bytes + th.lh-table-column--bytes,
.lh-table-column--url + .lh-table-column--ms,
.lh-table-column--url + .lh-table-column--ms + th.lh-table-column--bytes,
.lh-table-column--url + .lh-table-column--bytes + th.lh-table-column--timespanMs {
  width: 12%;
}


.lh-text__url-host {
  display: inline;
}

.lh-text__url-host {
  margin-left: calc(var(--report-font-size) / 2);
  opacity: 0.6;
  font-size: 90%
}

.lh-thumbnail {
  object-fit: cover;
  width: var(--image-preview-size);
  height: var(--image-preview-size);
  display: block;
}

.lh-unknown pre {
  overflow: scroll;
  border: solid 1px var(--color-gray-200);
}

.lh-text__url > a {
  color: inherit;
  text-decoration: none;
}

.lh-text__url > a:hover {
  text-decoration: underline dotted #999;
}

/* Chevron
   https://codepen.io/paulirish/pen/LmzEmK
 */
.lh-chevron {
  --chevron-angle: 42deg;
  /* Edge doesn't support transform: rotate(calc(...)), so we define it here */
  --chevron-angle-right: -42deg;
  width: var(--chevron-size);
  height: var(--chevron-size);
  margin-top: calc((var(--report-line-height) - 12px) / 2);
}

.lh-chevron__lines {
  transition: transform 0.4s;
  transform: translateY(var(--report-line-height));
}
.lh-chevron__line {
 stroke: var(--chevron-line-stroke);
 stroke-width: var(--chevron-size);
 stroke-linecap: square;
 transform-origin: 50%;
 transform: rotate(var(--chevron-angle));
 transition: transform 300ms, stroke 300ms;
}

.lh-audit-group > summary > .lh-audit-group__summary > .lh-chevron .lh-chevron__line-right,
.lh-audit-group[open] > summary > .lh-audit-group__summary > .lh-chevron .lh-chevron__line-left,
.lh-audit > .lh-expandable-details .lh-chevron__line-right,
.lh-audit > .lh-expandable-details[open] .lh-chevron__line-left {
 transform: rotate(var(--chevron-angle-right));
}

.lh-audit-group[open] > summary > .lh-audit-group__summary > .lh-chevron .lh-chevron__line-right,
.lh-audit > .lh-expandable-details[open] .lh-chevron__line-right {
  transform: rotate(var(--chevron-angle));
}

.lh-audit-group[open] > summary > .lh-audit-group__summary > .lh-chevron .lh-chevron__lines,
.lh-audit > .lh-expandable-details[open] .lh-chevron__lines {
 transform: translateY(calc(var(--chevron-size) * -1));
}



/* Tooltip */
.tooltip-boundary {
  position: relative;
}

.tooltip {
  position: absolute;
  display: none; /* Don't retain these layers when not needed */
  opacity: 0;
  background: #ffffff;
  min-width: 246px;
  max-width: 275px;
  padding: 15px;
  border-radius: 5px;
  text-align: initial;
}
/* shrink tooltips to not be cutoff on left edge of narrow viewports
   45vw is chosen to be ~= width of the left column of metrics
*/
@media screen and (max-width: 535px) {
  .tooltip {
    min-width: 45vw;
    padding: 3vw;
  }
}

.tooltip-boundary:hover {
  background-color: var(--color-hover);
}

.tooltip-boundary:hover .tooltip {
  display: block;
  animation: fadeInTooltip 250ms;
  animation-fill-mode: forwards;
  animation-delay: 850ms;
  bottom: 100%;
  z-index: 1;
  will-change: opacity;
  right: 0;
  pointer-events: none;
}

.tooltip::before {
  content: "";
  border: solid transparent;
  border-bottom-color: #fff;
  border-width: 10px;
  position: absolute;
  bottom: -20px;
  right: 6px;
  transform: rotate(180deg);
  pointer-events: none;
}

@keyframes fadeInTooltip {
  0% { opacity: 0; }
  75% { opacity: 1; }
  100% { opacity: 1;  filter: drop-shadow(1px 0px 1px #aaa) drop-shadow(0px 2px 4px hsla(206, 6%, 25%, 0.15)); pointer-events: auto; }
}

/*# sourceURL=audits/lighthouse/report.css */</style>
</head>
<body class="lh-root lh-vars">
  <noscript>Lighthouse report requires JavaScript. Please enable.</noscript>
  <div hidden><!--
@license
Copyright 2018 Google Inc. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS-IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<!-- Lighthouse run warnings -->
<template id="tmpl-lh-warnings--toplevel">
  <div class="lh-warnings lh-warnings--toplevel">
    <strong class="lh-warnings__msg"></strong>
    <ul></ul>
  </div>
</template>

<!-- Lighthouse score scale -->
<template id="tmpl-lh-scorescale">
  <div class="lh-scorescale">
      <span class="lh-scorescale-range lh-scorescale-range--fail">0&ndash;49</span>
      <span class="lh-scorescale-range lh-scorescale-range--average">50&ndash;89</span>
      <span class="lh-scorescale-range lh-scorescale-range--pass">90&ndash;100</span>
  </div>
</template>

<!-- Toggle arrow chevron -->
<template id="tmpl-lh-chevron">
  <svg class="lh-chevron" title="See audits" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100">
    <g class="lh-chevron__lines">
      <path class="lh-chevron__line lh-chevron__line-left" d="M10 50h40"></path>
      <path class="lh-chevron__line lh-chevron__line-right" d="M90 50H50"></path>
    </g>
  </svg>
</template>

<!-- Lighthouse category header -->
<template id="tmpl-lh-category-header">
  <div class="lh-category-header">
    <div class="lh-score__gauge" role="heading" aria-level="2"></div>
    <div class="lh-category-header__description"></div>
  </div>
</template>

<!-- Lighthouse clump -->
<template id="tmpl-lh-clump">
  <!-- TODO: group classes shouldn't be reused for clumps. -->
  <details class="lh-clump lh-audit-group">
    <summary>
      <div class="lh-audit-group__summary">
        <div class="lh-audit-group__header">
          <span class="lh-audit-group__title"></span>
          <span class="lh-audit-group__itemcount"></span>
          <!-- .lh-audit-group__description will be added here -->
          <!-- .lh-metrics-toggle will be added here -->
        </div>
        <div class=""></div>
      </div>
    </summary>
  </details>
</template>

<!-- Lighthouse metrics toggle -->
<template id="tmpl-lh-metrics-toggle">
  <div class="lh-metrics-toggle">
    <input class="lh-metrics-toggle__input" type="checkbox" id="toggle-metric-descriptions" aria-label="Toggle the display of metric descriptions">
    <label class="lh-metrics-toggle__label" for="toggle-metric-descriptions">
      <div class="lh-metrics-toggle__icon lh-metrics-toggle__icon--less" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
          <path class="lh-metrics-toggle__lines" d="M4 9h16v2H4zm0 4h10v2H4z" />
        </svg>
      </div>
      <div class="lh-metrics-toggle__icon lh-metrics-toggle__icon--more" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path class="lh-metrics-toggle__lines" d="M3 18h12v-2H3v2zM3 6v2h18V6H3zm0 7h18v-2H3v2z" />
        </svg>
      </div>
    </label>
  </div>
</template>

<!-- Lighthouse audit -->
<template id="tmpl-lh-audit">
  <div class="lh-audit">
    <details class="lh-expandable-details">
      <summary>
        <div class="lh-audit__header lh-expandable-details__summary">
          <span class="lh-audit__score-icon"></span>
          <span class="lh-audit__title-and-text">
            <span class="lh-audit__title"></span>
            <span class="lh-audit__display-text"></span>
          </span>
          <div class="lh-chevron-container"></div>
        </div>
      </summary>
      <div class="lh-audit__description"></div>
      <div class="lh-audit__stackpacks"></div>
    </details>
  </div>
</template>

<!-- Lighthouse perf metric -->
<template id="tmpl-lh-metric">
  <div class="lh-metric">
    <div class="lh-metric__innerwrap">
      <span class="lh-metric__title"></span>
      <div class="lh-metric__value"></div>
      <div class="lh-metric__description"></div>
    </div>
  </div>
</template>

<!-- Lighthouse perf opportunity -->
<template id="tmpl-lh-opportunity">
  <div class="lh-audit lh-audit--load-opportunity">
    <details class="lh-expandable-details">
        <summary>
          <div class="lh-audit__header lh-expandable-details__summary">
            <div class="lh-load-opportunity__cols">
              <div class="lh-load-opportunity__col lh-load-opportunity__col--one">
                <span class="lh-audit__score-icon"></span>
                <div class="lh-audit__title"></div>
              </div>
              <div class="lh-load-opportunity__col lh-load-opportunity__col--two">
                <div class="lh-load-opportunity__sparkline">
                  <div class="lh-sparkline"><div class="lh-sparkline__bar"></div></div>
                </div>
                <div class="lh-audit__display-text"></div>
                <div class="lh-chevron-container" title="See resources"></div>
              </div>
            </div>
          </div>
        </summary>
      <div class="lh-audit__description"></div>
      <div class="lh-audit__stackpacks"></div>
    </details>
  </div>
</template>

<!-- Lighthouse perf opportunity header -->
<template id="tmpl-lh-opportunity-header">
  <div class="lh-load-opportunity__header lh-load-opportunity__cols">
    <div class="lh-load-opportunity__col lh-load-opportunity__col--one"></div>
    <div class="lh-load-opportunity__col lh-load-opportunity__col--two"></div>
  </div>
</template>

<!-- Lighthouse score container -->
<template id="tmpl-lh-scores-wrapper">
  <style>
    .lh-scores-container {
      display: flex;
      flex-direction: column;
      padding: var(--scores-container-padding);
      position: relative;
      width: 100%;
    }

    .lh-sticky-header {
      --gauge-circle-size: 36px;
      --plugin-badge-size: 18px;
      --plugin-icon-size: 75%;
      --gauge-wrapper-width: 60px;
      --gauge-percentage-font-size: 13px;
      position: sticky;
      left: 0;
      right: 0;
      top: var(--topbar-height);
      font-weight: 700;
      display: none;
      justify-content: center;
      background-color: var(--sticky-header-background-color);
      border-bottom: 1px solid var(--color-gray-200);
      padding-top: var(--score-container-padding);
      padding-bottom: 4px;
      z-index: 1;
      pointer-events: none;
    }

    .lh-sticky-header--visible {
      display: grid;
      grid-auto-flow: column;
      pointer-events: auto;
    }

    /* Disable the gauge arc animation for the sticky header, so toggling display: none
       does not play the animation. */
    .lh-sticky-header .lh-gauge-arc {
      animation: none;
    }

    .lh-sticky-header .lh-gauge__label {
      display: none;
    }

    .lh-highlighter {
      width: var(--gauge-wrapper-width);
      height: 1px;
      background-color: var(--highlighter-background-color);
      /* Position at bottom of first gauge in sticky header. */
      position: absolute;
      grid-column: 1;
      bottom: -1px;
    }

    .lh-gauge__wrapper:first-of-type {
      contain: none;
    }
  </style>
  <div class="lh-scores-wrapper">
    <div class="lh-scores-container">
      <div class="pyro">
        <div class="before"></div>
        <div class="after"></div>
      </div>
    </div>
  </div>
</template>

<!-- Lighthouse topbar -->
<template id="tmpl-lh-topbar">
  <style>
    .lh-topbar {
      position: sticky;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      display: flex;
      align-items: center;
      height: var(--topbar-height);
      background-color: var(--topbar-background-color);
      padding: var(--topbar-padding);
    }

    .lh-topbar__logo {
      width: var(--topbar-logo-size);
      height: var(--topbar-logo-size);
      user-select: none;
      flex: none;
    }
    .lh-topbar__logo .shape {
      fill: var(--report-text-color);
    }

    .lh-topbar__url {
      margin: var(--topbar-padding);
      text-decoration: none;
      color: var(--report-text-color);
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
    }

    .lh-tools {
      margin-left: auto;
      will-change: transform;
    }
    .lh-tools__button {
      width: var(--tools-icon-size);
      height: var(--tools-icon-size);
      cursor: pointer;
      margin-right: 5px;
      /* This is actually a button element, but we want to style it like a transparent div. */
      display: flex;
      background: none;
      color: inherit;
      border: none;
      padding: 0;
      font: inherit;
      outline: inherit;
    }
    .lh-tools__button svg {
      fill: var(--tools-icon-color);
    }
    .dark .lh-tools__button svg {
      filter: invert(1);
    }
    .lh-tools__button.active + .lh-tools__dropdown {
      opacity: 1;
      clip: rect(-1px, 187px, 242px, -3px);
      visibility: visible;
    }
    .lh-tools__dropdown {
      position: absolute;
      background-color: var(--report-background-color);
      border: 1px solid var(--report-border-color);
      border-radius: 3px;
      padding: calc(var(--default-padding) / 2) 0;
      cursor: pointer;
      top: 36px;
      right: 0;
      box-shadow: 1px 1px 3px #ccc;
      min-width: 125px;
      clip: rect(0, 164px, 0, 0);
      visibility: hidden;
      opacity: 0;
      transition: all 200ms cubic-bezier(0,0,0.2,1);
    }
    .lh-tools__dropdown a {
      display: block;
      color: currentColor;
      text-decoration: none;
      white-space: nowrap;
      padding: 0 12px;
      line-height: 2;
    }
    .lh-tools__dropdown a:hover,
    .lh-tools__dropdown a:focus {
      background-color: var(--color-gray-200);
      outline: none;
    }
    .lh-tools__dropdown .report-icon {
      cursor: pointer;
      background-repeat: no-repeat;
      background-position: 8px 50%;
      background-size: 18px;
      background-color: transparent;
      text-indent: 18px;
    }
    .dark .report-icon {
      color: var(--color-gray-900);
      filter: invert(1);
    }
    .dark .lh-tools__dropdown a:hover,
    .dark .lh-tools__dropdown a:focus {
      background-color: #BDBDBD;
    }
    /* copy icon needs slight adjustments to look great */
    .lh-tools__dropdown .report-icon--copy {
      background-size: 16px;
      background-position: 9px 50%;
    }
    /* save-as-gist option hidden in report */
    .lh-tools__dropdown .lh-tools--gist {
      display: none;
    }

    @media screen and (max-width: 964px) {
      .lh-tools__dropdown {
        right: 0;
        left: initial;
      }
    }
    @media print {
      .lh-topbar {
        position: static;
        margin-left: 0;
      }
    }
  </style>

  <div class="lh-topbar">
    <!-- Lighthouse logo.  -->
    <svg class="lh-topbar__logo" viewBox="0 0 24 24">
      <defs>
        <linearGradient x1="57.456%" y1="13.086%" x2="18.259%" y2="72.322%" id="lh-topbar__logo--a">
          <stop stop-color="#262626" stop-opacity=".1" offset="0%"/>
          <stop stop-color="#262626" stop-opacity="0" offset="100%"/>
        </linearGradient>
        <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="lh-topbar__logo--b">
          <stop stop-color="#262626" stop-opacity=".1" offset="0%"/>
          <stop stop-color="#262626" stop-opacity="0" offset="100%"/>
        </linearGradient>
        <linearGradient x1="58.764%" y1="65.756%" x2="36.939%" y2="50.14%" id="lh-topbar__logo--c">
          <stop stop-color="#262626" stop-opacity=".1" offset="0%"/>
          <stop stop-color="#262626" stop-opacity="0" offset="100%"/>
        </linearGradient>
        <linearGradient x1="41.635%" y1="20.358%" x2="72.863%" y2="85.424%" id="lh-topbar__logo--d">
          <stop stop-color="#FFF" stop-opacity=".1" offset="0%"/>
          <stop stop-color="#FFF" stop-opacity="0" offset="100%"/>
        </linearGradient>
      </defs>
      <g fill="none" fill-rule="evenodd">
        <path d="M12 3l4.125 2.625v3.75H18v2.25h-1.688l1.5 9.375H6.188l1.5-9.375H6v-2.25h1.875V5.648L12 3zm2.201 9.938L9.54 14.633 9 18.028l5.625-2.062-.424-3.028zM12.005 5.67l-1.88 1.207v2.498h3.75V6.86l-1.87-1.19z" fill="#F44B21"/>
        <path fill="#FFF" d="M14.201 12.938L9.54 14.633 9 18.028l5.625-2.062z"/>
        <path d="M6 18c-2.042 0-3.95-.01-5.813 0l1.5-9.375h4.326L6 18z" fill="url(#lh-topbar__logo--a)" fill-rule="nonzero" transform="translate(6 3)"/>
        <path fill="#FFF176" fill-rule="nonzero" d="M13.875 9.375v-2.56l-1.87-1.19-1.88 1.207v2.543z"/>
        <path fill="url(#lh-topbar__logo--b)" fill-rule="nonzero" d="M0 6.375h6v2.25H0z" transform="translate(6 3)"/>
        <path fill="url(#lh-topbar__logo--c)" fill-rule="nonzero" d="M6 6.375H1.875v-3.75L6 0z" transform="translate(6 3)"/>
        <path fill="url(#lh-topbar__logo--d)" fill-rule="nonzero" d="M6 0l4.125 2.625v3.75H12v2.25h-1.688l1.5 9.375H.188l1.5-9.375H0v-2.25h1.875V2.648z" transform="translate(6 3)"/>
      </g>
    </svg>

    <a href="" class="lh-topbar__url" target="_blank" rel="noopener"></a>

    <div class="lh-tools">
      <button id="lh-tools-button" class="report-icon report-icon--share lh-tools__button" title="Tools menu" aria-label="Toggle report tools menu" aria-haspopup="menu" aria-expanded="false" aria-controls="lh-tools-dropdown">
        <svg width="100%" height="100%" viewBox="0 0 24 24">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
        </svg>
      </button>
      <div id="lh-tools-dropdown" role="menu" class="lh-tools__dropdown" aria-labelledby="lh-tools-button">
         <!-- TODO(i18n): localize tools dropdown -->
        <a role="menuitem" tabindex="-1" href="#" class="report-icon report-icon--print" data-action="print-summary">Print Summary</a>
        <a role="menuitem" tabindex="-1" href="#" class="report-icon report-icon--print" data-action="print-expanded">Print Expanded</a>
        <a role="menuitem" tabindex="-1" href="#" class="report-icon report-icon--copy" data-action="copy">Copy JSON</a>
        <a role="menuitem" tabindex="-1" href="#" class="report-icon report-icon--download" data-action="save-html">Save as HTML</a>
        <a role="menuitem" tabindex="-1" href="#" class="report-icon report-icon--download" data-action="save-json">Save as JSON</a>
        <a role="menuitem" tabindex="-1" href="#" class="report-icon report-icon--open lh-tools--viewer" data-action="open-viewer">Open in Viewer</a>
        <a role="menuitem" tabindex="-1" href="#" class="report-icon report-icon--open lh-tools--gist" data-action="save-gist">Save as Gist</a>
        <a role="menuitem" tabindex="-1" href="#" class="report-icon report-icon--dark" data-action="toggle-dark">Toggle Dark Theme</a>
      </div>
    </div>
  </div>
</template>

<!-- Lighthouse header -->
<template id="tmpl-lh-heading">
  <style>
    /* CSS Fireworks. Originally by Eddie Lin
       https://codepen.io/paulirish/pen/yEVMbP
    */
    .pyro {
      display: none;
      z-index: 1;
      pointer-events: none;
    }
    .score100 .pyro {
      display: block;
    }
    .score100 .lh-lighthouse stop:first-child {
      stop-color: hsla(200, 12%, 95%, 0);
    }
    .score100 .lh-lighthouse stop:last-child {
      stop-color: hsla(65, 81%, 76%, 1);
    }

    .pyro > .before, .pyro > .after {
      position: absolute;
      width: 5px;
      height: 5px;
      border-radius: 2.5px;
      box-shadow: 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff;
      animation: 1s bang ease-out infinite backwards,  1s gravity ease-in infinite backwards,  5s position linear infinite backwards;
      animation-delay: 1s, 1s, 1s;
    }

    .pyro > .after {
      animation-delay: 2.25s, 2.25s, 2.25s;
      animation-duration: 1.25s, 1.25s, 6.25s;
    }
    .fireworks-paused .pyro > div {
      animation-play-state: paused;
    }

    @keyframes bang {
      to {
        box-shadow: -70px -115.67px #47ebbc, -28px -99.67px #eb47a4, 58px -31.67px #7eeb47, 13px -141.67px #eb47c5, -19px 6.33px #7347eb, -2px -74.67px #ebd247, 24px -151.67px #eb47e0, 57px -138.67px #b4eb47, -51px -104.67px #479eeb, 62px 8.33px #ebcf47, -93px 0.33px #d547eb, -16px -118.67px #47bfeb, 53px -84.67px #47eb83, 66px -57.67px #eb47bf, -93px -65.67px #91eb47, 30px -13.67px #86eb47, -2px -59.67px #83eb47, -44px 1.33px #eb47eb, 61px -58.67px #47eb73, 5px -22.67px #47e8eb, -66px -28.67px #ebe247, 42px -123.67px #eb5547, -75px 26.33px #7beb47, 15px -52.67px #a147eb, 36px -51.67px #eb8347, -38px -12.67px #eb5547, -46px -59.67px #47eb81, 78px -114.67px #eb47ba, 15px -156.67px #eb47bf, -36px 1.33px #eb4783, -72px -86.67px #eba147, 31px -46.67px #ebe247, -68px 29.33px #47e2eb, -55px 19.33px #ebe047, -56px 27.33px #4776eb, -13px -91.67px #eb5547, -47px -138.67px #47ebc7, -18px -96.67px #eb47ac, 11px -88.67px #4783eb, -67px -28.67px #47baeb, 53px 10.33px #ba47eb, 11px 19.33px #5247eb, -5px -11.67px #eb4791, -68px -4.67px #47eba7, 95px -37.67px #eb478b, -67px -162.67px #eb5d47, -54px -120.67px #eb6847, 49px -12.67px #ebe047, 88px 8.33px #47ebda, 97px 33.33px #eb8147, 6px -71.67px #ebbc47;
      }
    }
    @keyframes gravity {
      to {
        transform: translateY(80px);
        opacity: 0;
      }
    }
    @keyframes position {
      0%, 19.9% {
        margin-top: 4%;
        margin-left: 47%;
      }
      20%, 39.9% {
        margin-top: 7%;
        margin-left: 30%;
      }
      40%, 59.9% {
        margin-top: 6%;
        margin-left: 70%;
      }
      60%, 79.9% {
        margin-top: 3%;
        margin-left: 20%;
      }
      80%, 99.9% {
        margin-top: 3%;
        margin-left: 80%;
      }
    }
  </style>

  <div class="lh-header-container">
    <div class="lh-scores-wrapper-placeholder"></div>
  </div>
</template>


<!-- Lighthouse footer -->
<template id="tmpl-lh-footer">
  <style>
    .lh-footer {
      padding: var(--footer-padding-vertical) calc(var(--default-padding) * 2);
      max-width: var(--report-width);
      margin: 0 auto;
    }
    .lh-footer .lh-generated {
      text-align: center;
    }
    .lh-env__title {
      font-size: var(--env-item-font-size-big);
      line-height: var(--env-item-line-height-big);
      text-align: center;
      padding: var(--score-container-padding);
    }
    .lh-env {
      padding: var(--default-padding) 0;
    }
    .lh-env__items {
      padding-left: 16px;
      margin: 0 0 var(--audits-margin-bottom);
      padding: 0;
    }
    .lh-env__items .lh-env__item:nth-child(2n) {
      background-color: var(--env-item-background-color);
    }
    .lh-env__item {
      display: flex;
      padding: var(--env-item-padding);
      position: relative;
    }
    span.lh-env__name {
      font-weight: bold;
      min-width: var(--env-name-min-width);
      flex: 0.5;
      padding: 0 8px;
    }
    span.lh-env__description {
      text-align: left;
      flex: 1;
    }
  </style>
  <footer class="lh-footer">
    <!-- TODO(i18n): localize runtime settings -->
    <div class="lh-env">
      <div class="lh-env__title">Runtime Settings</div>
      <ul class="lh-env__items">
        <template id="tmpl-lh-env__items">
          <li class="lh-env__item">
            <span class="lh-env__name"></span>
            <span class="lh-env__description"></span>
          </li>
        </template>
      </ul>
    </div>

    <div class="lh-generated">
      Generated by <b>Lighthouse</b> <span class="lh-footer__version"></span> |
      <a href="https://github.com/GoogleChrome/Lighthouse/issues" target="_blank" rel="noopener">File an issue</a>
    </div>
  </footer>
</template>

<!-- Lighthouse score gauge -->
<template id="tmpl-lh-gauge">
  <a href="#" class="lh-gauge__wrapper">
    <!-- Wrapper exists for the ::before plugin icon. Cannot create pseudo-elements on svgs. -->
    <div class="lh-gauge__svg-wrapper">
      <svg viewBox="0 0 120 120" class="lh-gauge">
        <circle class="lh-gauge-base" r="56" cx="60" cy="60"></circle>
        <circle class="lh-gauge-arc" transform="rotate(-90 60 60)" r="56" cx="60" cy="60"></circle>
      </svg>
    </div>
    <div class="lh-gauge__percentage"></div>
    <!-- TODO: should likely be an h2  -->
    <div class="lh-gauge__label"></div>
  </a>
</template>


<!-- Lighthouse PWA badge gauge -->
<template id="tmpl-lh-gauge--pwa">
  <style>
    .lh-gauge--pwa .lh-gauge--pwa__component {
      display: none;
    }
    .lh-gauge--pwa__wrapper:not(.lh-badged--all) .lh-gauge--pwa__logo > path {
      /* Gray logo unless everything is passing. */
      fill: #B0B0B0;
    }

    .lh-gauge--pwa__disc {
      fill: var(--color-gray-200);
    }

    .lh-gauge--pwa__logo--primary-color {
      fill: #304FFE;
    }

    .lh-gauge--pwa__logo--secondary-color {
      fill: #3D3D3D;
    }
    .dark .lh-gauge--pwa__logo--secondary-color {
      fill: #D8B6B6;
    }

    /* No passing groups. */
    .lh-gauge--pwa__wrapper:not([class*='lh-badged--']) .lh-gauge--pwa__na-line {
      display: inline;
    }
    /* Just optimized. Same n/a line as no passing groups. */
    .lh-gauge--pwa__wrapper.lh-badged--pwa-optimized:not(.lh-badged--pwa-installable):not(.lh-badged--pwa-fast-reliable) .lh-gauge--pwa__na-line {
      display: inline;
    }

    /* Just fast and reliable. */
    .lh-gauge--pwa__wrapper.lh-badged--pwa-fast-reliable:not(.lh-badged--pwa-installable) .lh-gauge--pwa__fast-reliable-badge {
      display: inline;
    }

    /* Just installable. */
    .lh-gauge--pwa__wrapper.lh-badged--pwa-installable:not(.lh-badged--pwa-fast-reliable) .lh-gauge--pwa__installable-badge {
      display: inline;
    }

    /* Fast and reliable and installable. */
    .lh-gauge--pwa__wrapper.lh-badged--pwa-fast-reliable.lh-badged--pwa-installable .lh-gauge--pwa__fast-reliable-installable-badges {
      display: inline;
    }

    /* All passing groups. */
    .lh-gauge--pwa__wrapper.lh-badged--all .lh-gauge--pwa__check-circle {
      display: inline;
    }
  </style>

  <a href="#" class="lh-gauge__wrapper lh-gauge--pwa__wrapper">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" class="lh-gauge lh-gauge--pwa">
      <defs>
        <linearGradient id="lh-gauge--pwa__check-circle__gradient" x1="50%" y1="0%" x2="50%" y2="100%">
          <stop stop-color="#00C852" offset="0%"></stop>
          <stop stop-color="#009688" offset="100%"></stop>
        </linearGradient>
        <linearGradient id="lh-gauge--pwa__installable__shadow-gradient" x1="76.056%" x2="24.111%" y1="82.995%" y2="24.735%">
          <stop stop-color="#A5D6A7" offset="0%"></stop>
          <stop stop-color="#80CBC4" offset="100%"></stop>
        </linearGradient>
        <linearGradient id="lh-gauge--pwa__fast-reliable__shadow-gradient" x1="76.056%" y1="82.995%" x2="25.678%" y2="26.493%">
          <stop stop-color="#64B5F6" offset="0%"></stop>
          <stop stop-color="#2979FF" offset="100%"></stop>
        </linearGradient>

        <g id="lh-gauge--pwa__fast-reliable-badge">
          <circle fill="#FFFFFF" cx="10" cy="10" r="10"></circle>
          <path fill="#304FFE" d="M10 3.58l5.25 2.34v3.5c0 3.23-2.24 6.26-5.25 7-3.01-.74-5.25-3.77-5.25-7v-3.5L10 3.58zm-.47 10.74l2.76-4.83.03-.07c.04-.08 0-.24-.22-.24h-1.64l.47-3.26h-.47l-2.7 4.77c-.02.01.05-.1-.04.05-.09.16-.1.31.18.31h1.63l-.47 3.27h.47z"/>
        </g>
        <g id="lh-gauge--pwa__installable-badge">
          <circle fill="#FFFFFF" cx="10" cy="10" r="10"></circle>
          <path fill="#009688" d="M10 4.167A5.835 5.835 0 0 0 4.167 10 5.835 5.835 0 0 0 10 15.833 5.835 5.835 0 0 0 15.833 10 5.835 5.835 0 0 0 10 4.167zm2.917 6.416h-2.334v2.334H9.417v-2.334H7.083V9.417h2.334V7.083h1.166v2.334h2.334v1.166z"/>
        </g>
      </defs>

      <g stroke="none" fill-rule="nonzero">
        <!-- Background and PWA logo (color by default) -->
        <circle class="lh-gauge--pwa__disc" cx="30" cy="30" r="30"></circle>
        <g class="lh-gauge--pwa__logo">
          <path class="lh-gauge--pwa__logo--secondary-color" d="M35.66 19.39l.7-1.75h2L37.4 15 38.6 12l3.4 9h-2.51l-.58-1.61z"/>
          <path class="lh-gauge--pwa__logo--primary-color" d="M33.52 21l3.65-9h-2.42l-2.5 5.82L30.5 12h-1.86l-1.9 5.82-1.35-2.65-1.21 3.72L25.4 21h2.38l1.72-5.2 1.64 5.2z"/>
          <path class="lh-gauge--pwa__logo--secondary-color" fill-rule="nonzero" d="M20.3 17.91h1.48c.45 0 .85-.05 1.2-.15l.39-1.18 1.07-3.3a2.64 2.64 0 0 0-.28-.37c-.55-.6-1.36-.91-2.42-.91H18v9h2.3V17.9zm1.96-3.84c.22.22.33.5.33.87 0 .36-.1.65-.29.87-.2.23-.59.35-1.15.35h-.86v-2.41h.87c.52 0 .89.1 1.1.32z"/>
        </g>

        <!-- No badges. -->
        <rect class="lh-gauge--pwa__component lh-gauge--pwa__na-line" fill="#FFFFFF" x="20" y="32" width="20" height="4" rx="2"></rect>

        <!-- Just fast and reliable. -->
        <g class="lh-gauge--pwa__component lh-gauge--pwa__fast-reliable-badge" transform="translate(20, 29)">
          <path fill="url(#lh-gauge--pwa__fast-reliable__shadow-gradient)" d="M33.63 19.49A30 30 0 0 1 16.2 30.36L3 17.14 17.14 3l16.49 16.49z"/>
          <use href="#lh-gauge--pwa__fast-reliable-badge" />
        </g>

        <!-- Just installable. -->
        <g class="lh-gauge--pwa__component lh-gauge--pwa__installable-badge" transform="translate(20, 29)">
          <path fill="url(#lh-gauge--pwa__installable__shadow-gradient)" d="M33.629 19.487c-4.272 5.453-10.391 9.39-17.415 10.869L3 17.142 17.142 3 33.63 19.487z"/>
          <use href="#lh-gauge--pwa__installable-badge" />
        </g>

        <!-- Fast and reliable and installable. -->
        <g class="lh-gauge--pwa__component lh-gauge--pwa__fast-reliable-installable-badges">
          <g transform="translate(8, 29)"> <!-- fast and reliable -->
            <path fill="url(#lh-gauge--pwa__fast-reliable__shadow-gradient)" d="M16.321 30.463L3 17.143 17.142 3l22.365 22.365A29.864 29.864 0 0 1 22 31c-1.942 0-3.84-.184-5.679-.537z"/>
            <use href="#lh-gauge--pwa__fast-reliable-badge" />
          </g>
          <g transform="translate(32, 29)"> <!-- installable -->
            <path fill="url(#lh-gauge--pwa__installable__shadow-gradient)" d="M25.982 11.84a30.107 30.107 0 0 1-13.08 15.203L3 17.143 17.142 3l8.84 8.84z"/>
            <use href="#lh-gauge--pwa__installable-badge" />
          </g>
        </g>

        <!-- Full PWA. -->
        <g class="lh-gauge--pwa__component lh-gauge--pwa__check-circle" transform="translate(18, 28)">
          <circle fill="#FFFFFF" cx="12" cy="12" r="12"></circle>
          <path fill="url(#lh-gauge--pwa__check-circle__gradient)" d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
        </g>
      </g>
    </svg>

    <div class="lh-gauge__label"></div>
  </a>
</template>

<!-- Lighthouse crtiical request chains component -->
<template id="tmpl-lh-crc">
  <div class="lh-crc-container">
    <style>
      .lh-crc .tree-marker {
        width: 12px;
        height: 26px;
        display: block;
        float: left;
        background-position: top left;
      }
      .lh-crc .horiz-down {
        background: url('data:image/svg+xml;utf8,<svg width="16" height="26" viewBox="0 0 16 26" xmlns="http://www.w3.org/2000/svg"><g fill="%23D8D8D8" fill-rule="evenodd"><path d="M16 12v2H-2v-2z"/><path d="M9 12v14H7V12z"/></g></svg>');
      }
      .lh-crc .right {
        background: url('data:image/svg+xml;utf8,<svg width="16" height="26" viewBox="0 0 16 26" xmlns="http://www.w3.org/2000/svg"><path d="M16 12v2H0v-2z" fill="%23D8D8D8" fill-rule="evenodd"/></svg>');
      }
      .lh-crc .up-right {
        background: url('data:image/svg+xml;utf8,<svg width="16" height="26" viewBox="0 0 16 26" xmlns="http://www.w3.org/2000/svg"><path d="M7 0h2v14H7zm2 12h7v2H9z" fill="%23D8D8D8" fill-rule="evenodd"/></svg>');
      }
      .lh-crc .vert-right {
        background: url('data:image/svg+xml;utf8,<svg width="16" height="26" viewBox="0 0 16 26" xmlns="http://www.w3.org/2000/svg"><path d="M7 0h2v27H7zm2 12h7v2H9z" fill="%23D8D8D8" fill-rule="evenodd"/></svg>');
      }
      .lh-crc .vert {
        background: url('data:image/svg+xml;utf8,<svg width="16" height="26" viewBox="0 0 16 26" xmlns="http://www.w3.org/2000/svg"><path d="M7 0h2v26H7z" fill="%23D8D8D8" fill-rule="evenodd"/></svg>');
      }
      .lh-crc .crc-tree {
        font-size: 14px;
        width: 100%;
        overflow-x: auto;
      }
      .lh-crc .crc-node {
        height: 26px;
        line-height: 26px;
        white-space: nowrap;
      }
      .lh-crc .crc-node__tree-value {
        margin-left: 10px;
      }
      .lh-crc .crc-node__tree-value div {
        display: inline;
      }
      .lh-crc .crc-node__chain-duration {
        font-weight: 700;
      }
      .lh-crc .crc-initial-nav {
        color: #595959;
        font-style: italic;
      }
      .lh-crc__summary-value {
        margin-bottom: 10px;
      }
    </style>
    <div>
      <div class="lh-crc__summary-value">
        <span class="lh-crc__longest_duration_label"></span> <b class="lh-crc__longest_duration"></b>
      </div>
    </div>
    <div class="lh-crc">
      <div class="crc-initial-nav"></div>
      <!-- stamp for each chain -->
      <template id="tmpl-lh-crc__chains">
        <div class="crc-node">
          <span class="crc-node__tree-marker">

          </span>
          <span class="crc-node__tree-value">

          </span>
        </div>
      </template>
    </div>
  </div>
</template>

<template id="tmpl-lh-3p-filter">
  <style>
    .lh-3p-filter {
      background-color: var(--table-higlight-background-color);
      color: var(--color-gray-600);
      float: right;
      padding: 6px;
    }
    .lh-3p-filter-label, .lh-3p-filter-input {
      vertical-align: middle;
      user-select: none;
    }
    .lh-3p-filter-input:disabled + .lh-3p-ui-string {
      text-decoration: line-through;
    }
  </style>
  <div class="lh-3p-filter">
    <label class="lh-3p-filter-label">
      <input type="checkbox" class="lh-3p-filter-input" checked />
      <span class="lh-3p-ui-string">Show 3rd party resources</span> (<span class="lh-3p-filter-count"></span>)
    </label>
  </div>
</template>

<!-- Lighthouse snippet component -->
<template id="tmpl-lh-snippet">
    <div class="lh-snippet">
      <style>
          :root {
            --snippet-highlight-light: #fbf1f2;
            --snippet-highlight-dark: #ffd6d8;
          }

         .lh-snippet__header {
          position: relative;
          overflow: hidden;
          padding: 10px;
          border-bottom: none;
          color: var(--snippet-color);
          background-color: var(--snippet-background-color);
          border: 1px solid var(--report-border-color-secondary);
        }
        .lh-snippet__title {
          font-weight: bold;
          float: left;
        }
        .lh-snippet__node {
          float: left;
          margin-left: 4px;
        }
        .lh-snippet__toggle-expand {
          padding: 1px 7px;
          margin-top: -1px;
          margin-right: -7px;
          float: right;
          background: transparent;
          border: none;
          cursor: pointer;
          font-size: 14px;
          color: #0c50c7;
        }

        .lh-snippet__snippet {
          overflow: auto;
          border: 1px solid var(--report-border-color-secondary);
        }
        /* Container needed so that all children grow to the width of the scroll container */
        .lh-snippet__snippet-inner {
          display: inline-block;
          min-width: 100%;
        }

        .lh-snippet:not(.lh-snippet--expanded) .lh-snippet__show-if-expanded {
          display: none;
        }
        .lh-snippet.lh-snippet--expanded .lh-snippet__show-if-collapsed {
          display: none;
        }

        .lh-snippet__line {
          background: white;
          white-space: pre;
          display: flex;
        }
        .lh-snippet__line:not(.lh-snippet__line--message):first-child {
          padding-top: 4px;
        }
        .lh-snippet__line:not(.lh-snippet__line--message):last-child {
          padding-bottom: 4px;
        }
        .lh-snippet__line--content-highlighted {
          background: var(--snippet-highlight-dark);
        }
        .lh-snippet__line--message {
          background: var(--snippet-highlight-light);
        }
        .lh-snippet__line--message .lh-snippet__line-number {
          padding-top: 10px;
          padding-bottom: 10px;
        }
        .lh-snippet__line--message code {
          padding: 10px;
          padding-left: 5px;
          color: var(--color-fail);
          font-family: var(--report-font-family);
        }
        .lh-snippet__line--message code {
          white-space: normal;
        }
        .lh-snippet__line-icon {
          padding-top: 10px;
          display: none;
        }
        .lh-snippet__line--message .lh-snippet__line-icon {
          display: block;
        }
        .lh-snippet__line-icon:before {
          content: "";
          display: inline-block;
          vertical-align: middle;
          margin-right: 4px;
          width: var(--score-icon-size);
          height: var(--score-icon-size);
          background-image: var(--fail-icon-url);
        }
        .lh-snippet__line-number {
          flex-shrink: 0;
          width: 40px;
          text-align: right;
          font-family: monospace;
          padding-right: 5px;
          margin-right: 5px;
          color: var(--color-gray-600);
          user-select: none;
        }
      </style>
      <template id="tmpl-lh-snippet__header">
        <div class="lh-snippet__header">
          <div class="lh-snippet__title"></div>
          <div class="lh-snippet__node"></div>
          <button class="lh-snippet__toggle-expand">
            <span class="lh-snippet__btn-label-collapse lh-snippet__show-if-expanded"></span>
            <span class="lh-snippet__btn-label-expand lh-snippet__show-if-collapsed"></span>
          </button>
        </div>
      </template>
      <template id="tmpl-lh-snippet__content">
        <div class="lh-snippet__snippet">
          <div class="lh-snippet__snippet-inner"></div>
        </div>
      </template>
      <template id="tmpl-lh-snippet__line">
          <div class="lh-snippet__line">
            <div class="lh-snippet__line-number"></div>
            <div class="lh-snippet__line-icon"></div>
            <code></code>
          </div>
        </template>
    </div>
  </template>


/*# sourceURL=audits/lighthouse/templates.html */</div>

  <main><!-- report populated here --></main>

  <div id="lh-log"></div>

  <script>/**
 * @license
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/* globals self, URL */

const ELLIPSIS = '\u2026';
const NBSP = '\xa0';
const PASS_THRESHOLD = 0.9;
const SCREENSHOT_PREFIX = 'data:image/jpeg;base64,';

const RATINGS = {
  PASS: {label: 'pass', minScore: PASS_THRESHOLD},
  AVERAGE: {label: 'average', minScore: 0.5},
  FAIL: {label: 'fail'},
  ERROR: {label: 'error'},
};

// 25 most used tld plus one domains (aka public suffixes) from http archive.
// @see https://github.com/GoogleChrome/lighthouse/pull/5065#discussion_r191926212
// The canonical list is https://publicsuffix.org/learn/ but we're only using subset to conserve bytes
const listOfTlds = [
  'com', 'co', 'gov', 'edu', 'ac', 'org', 'go', 'gob', 'or', 'net', 'in', 'ne', 'nic', 'gouv',
  'web', 'spb', 'blog', 'jus', 'kiev', 'mil', 'wi', 'qc', 'ca', 'bel', 'on',
];

class Util {
  static get PASS_THRESHOLD() {
    return PASS_THRESHOLD;
  }

  static get MS_DISPLAY_VALUE() {
    return `%10d${NBSP}ms`;
  }

  /**
   * Returns a new LHR that's reshaped for slightly better ergonomics within the report rendereer.
   * Also, sets up the localized UI strings used within renderer and makes changes to old LHRs to be
   * compatible with current renderer.
   * The LHR passed in is not mutated.
   * TODO(team): we all agree the LHR shape change is technical debt we should fix
   * @param {LH.Result} result
   * @return {LH.ReportResult}
   */
  static prepareReportResult(result) {
    // If any mutations happen to the report within the renderers, we want the original object untouched
    const clone = /** @type {LH.ReportResult} */ (JSON.parse(JSON.stringify(result)));

    // If LHR is older (≤3.0.3), it has no locale setting. Set default.
    if (!clone.configSettings.locale) {
      clone.configSettings.locale = 'en';
    }

    for (const audit of Object.values(clone.audits)) {
      // Turn 'not-applicable' (LHR <4.0) and 'not_applicable' (older proto versions)
      // into 'notApplicable' (LHR ≥4.0).
      // @ts-ignore tsc rightly flags that these values shouldn't occur.
      // eslint-disable-next-line max-len
      if (audit.scoreDisplayMode === 'not_applicable' || audit.scoreDisplayMode === 'not-applicable') {
        audit.scoreDisplayMode = 'notApplicable';
      }

      if (audit.details) {
        // Turn `auditDetails.type` of undefined (LHR <4.2) and 'diagnostic' (LHR <5.0)
        // into 'debugdata' (LHR ≥5.0).
        // @ts-ignore tsc rightly flags that these values shouldn't occur.
        if (audit.details.type === undefined || audit.details.type === 'diagnostic') {
          audit.details.type = 'debugdata';
        }

        // Add the jpg data URL prefix to filmstrip screenshots without them (LHR <5.0).
        if (audit.details.type === 'filmstrip') {
          for (const screenshot of audit.details.items) {
            if (!screenshot.data.startsWith(SCREENSHOT_PREFIX)) {
              screenshot.data = SCREENSHOT_PREFIX + screenshot.data;
            }
          }
        }
      }
    }

    // Set locale for number/date formatting and grab localized renderer strings from the LHR.
    Util.setNumberDateLocale(clone.configSettings.locale);
    if (clone.i18n && clone.i18n.rendererFormattedStrings) {
      Util.updateAllUIStrings(clone.i18n.rendererFormattedStrings);
    }

    // For convenience, smoosh all AuditResults into their auditRef (which has just weight & group)
    if (typeof clone.categories !== 'object') throw new Error('No categories provided.');
    for (const category of Object.values(clone.categories)) {
      category.auditRefs.forEach(auditRef => {
        const result = clone.audits[auditRef.id];
        auditRef.result = result;

        // attach the stackpacks to the auditRef object
        if (clone.stackPacks) {
          clone.stackPacks.forEach(pack => {
            if (pack.descriptions[auditRef.id]) {
              auditRef.stackPacks = auditRef.stackPacks || [];
              auditRef.stackPacks.push({
                title: pack.title,
                iconDataURL: pack.iconDataURL,
                description: pack.descriptions[auditRef.id],
              });
            }
          });
        }
      });
    }

    return clone;
  }


  /**
   * @param {LH.I18NRendererStrings} rendererFormattedStrings
   */
  static updateAllUIStrings(rendererFormattedStrings) {
    // TODO(i18n): don't mutate these here but on the LHR and pass that around everywhere
    for (const [key, value] of Object.entries(rendererFormattedStrings)) {
      Util.UIStrings[key] = value;
    }
  }

  /**
   * Used to determine if the "passed" for the purposes of showing up in the "failed" or "passed"
   * sections of the report.
   *
   * @param {{score: (number|null), scoreDisplayMode: string}} audit
   * @return {boolean}
   */
  static showAsPassed(audit) {
    switch (audit.scoreDisplayMode) {
      case 'manual':
      case 'notApplicable':
        return true;
      case 'error':
      case 'informative':
        return false;
      case 'numeric':
      case 'binary':
      default:
        return Number(audit.score) >= RATINGS.PASS.minScore;
    }
  }

  /**
   * Convert a score to a rating label.
   * @param {number|null} score
   * @param {string=} scoreDisplayMode
   * @return {string}
   */
  static calculateRating(score, scoreDisplayMode) {
    // Handle edge cases first, manual and not applicable receive 'pass', errored audits receive 'error'
    if (scoreDisplayMode === 'manual' || scoreDisplayMode === 'notApplicable') {
      return RATINGS.PASS.label;
    } else if (scoreDisplayMode === 'error') {
      return RATINGS.ERROR.label;
    } else if (score === null) {
      return RATINGS.FAIL.label;
    }

    // At this point, we're rating a standard binary/numeric audit
    let rating = RATINGS.FAIL.label;
    if (score >= RATINGS.PASS.minScore) {
      rating = RATINGS.PASS.label;
    } else if (score >= RATINGS.AVERAGE.minScore) {
      rating = RATINGS.AVERAGE.label;
    }
    return rating;
  }

  /**
   * Format number.
   * @param {number} number
   * @param {number=} granularity Number of decimal places to include. Defaults to 0.1.
   * @return {string}
   */
  static formatNumber(number, granularity = 0.1) {
    const coarseValue = Math.round(number / granularity) * granularity;
    return Util.numberFormatter.format(coarseValue);
  }

  /**
   * @param {number} size
   * @param {number=} granularity Controls how coarse the displayed value is, defaults to .01
   * @return {string}
   */
  static formatBytesToKB(size, granularity = 0.1) {
    const kbs = Util.numberFormatter.format(Math.round(size / 1024 / granularity) * granularity);
    return `${kbs}${NBSP}KB`;
  }

  /**
   * @param {number} ms
   * @param {number=} granularity Controls how coarse the displayed value is, defaults to 10
   * @return {string}
   */
  static formatMilliseconds(ms, granularity = 10) {
    const coarseTime = Math.round(ms / granularity) * granularity;
    return `${Util.numberFormatter.format(coarseTime)}${NBSP}ms`;
  }

  /**
   * @param {number} ms
   * @param {number=} granularity Controls how coarse the displayed value is, defaults to 0.1
   * @return {string}
   */
  static formatSeconds(ms, granularity = 0.1) {
    const coarseTime = Math.round(ms / 1000 / granularity) * granularity;
    return `${Util.numberFormatter.format(coarseTime)}${NBSP}s`;
  }

  /**
   * Format time.
   * @param {string} date
   * @return {string}
   */
  static formatDateTime(date) {
    /** @type {Intl.DateTimeFormatOptions} */
    const options = {
      month: 'short', day: 'numeric', year: 'numeric',
      hour: 'numeric', minute: 'numeric', timeZoneName: 'short',
    };
    let formatter = new Intl.DateTimeFormat(Util.numberDateLocale, options);

    // Force UTC if runtime timezone could not be detected.
    // See https://github.com/GoogleChrome/lighthouse/issues/1056
    const tz = formatter.resolvedOptions().timeZone;
    if (!tz || tz.toLowerCase() === 'etc/unknown') {
      options.timeZone = 'UTC';
      formatter = new Intl.DateTimeFormat(Util.numberDateLocale, options);
    }
    return formatter.format(new Date(date));
  }
  /**
   * Converts a time in milliseconds into a duration string, i.e. `1d 2h 13m 52s`
   * @param {number} timeInMilliseconds
   * @return {string}
   */
  static formatDuration(timeInMilliseconds) {
    let timeInSeconds = timeInMilliseconds / 1000;
    if (Math.round(timeInSeconds) === 0) {
      return 'None';
    }

    /** @type {Array<string>} */
    const parts = [];
    const unitLabels = /** @type {Object<string, number>} */ ({
      d: 60 * 60 * 24,
      h: 60 * 60,
      m: 60,
      s: 1,
    });

    Object.keys(unitLabels).forEach(label => {
      const unit = unitLabels[label];
      const numberOfUnits = Math.floor(timeInSeconds / unit);
      if (numberOfUnits > 0) {
        timeInSeconds -= numberOfUnits * unit;
        parts.push(`${numberOfUnits}\xa0${label}`);
      }
    });

    return parts.join(' ');
  }

  /**
   * Split a string by markdown code spans (enclosed in `backticks`), splitting
   * into segments that were enclosed in backticks (marked as `isCode === true`)
   * and those that outside the backticks (`isCode === false`).
   * @param {string} text
   * @return {Array<{isCode: true, text: string}|{isCode: false, text: string}>}
   */
  static splitMarkdownCodeSpans(text) {
    /** @type {Array<{isCode: true, text: string}|{isCode: false, text: string}>} */
    const segments = [];

    // Split on backticked code spans.
    const parts = text.split(/`(.*?)`/g);
    for (let i = 0; i < parts.length; i ++) {
      const text = parts[i];

      // Empty strings are an artifact of splitting, not meaningful.
      if (!text) continue;

      // Alternates between plain text and code segments.
      const isCode = i % 2 !== 0;
      segments.push({
        isCode,
        text,
      });
    }

    return segments;
  }

  /**
   * Split a string on markdown links (e.g. [some link](https://...)) into
   * segments of plain text that weren't part of a link (marked as
   * `isLink === false`), and segments with text content and a URL that did make
   * up a link (marked as `isLink === true`).
   * @param {string} text
   * @return {Array<{isLink: true, text: string, linkHref: string}|{isLink: false, text: string}>}
   */
  static splitMarkdownLink(text) {
    /** @type {Array<{isLink: true, text: string, linkHref: string}|{isLink: false, text: string}>} */
    const segments = [];

    const parts = text.split(/\[([^\]]+?)\]\((https?:\/\/.*?)\)/g);
    while (parts.length) {
      // Shift off the same number of elements as the pre-split and capture groups.
      const [preambleText, linkText, linkHref] = parts.splice(0, 3);

      if (preambleText) { // Skip empty text as it's an artifact of splitting, not meaningful.
        segments.push({
          isLink: false,
          text: preambleText,
        });
      }

      // Append link if there are any.
      if (linkText && linkHref) {
        segments.push({
          isLink: true,
          text: linkText,
          linkHref,
        });
      }
    }

    return segments;
  }

  /**
   * @param {URL} parsedUrl
   * @param {{numPathParts?: number, preserveQuery?: boolean, preserveHost?: boolean}=} options
   * @return {string}
   */
  static getURLDisplayName(parsedUrl, options) {
    // Closure optional properties aren't optional in tsc, so fallback needs undefined  values.
    options = options || {numPathParts: undefined, preserveQuery: undefined,
      preserveHost: undefined};
    const numPathParts = options.numPathParts !== undefined ? options.numPathParts : 2;
    const preserveQuery = options.preserveQuery !== undefined ? options.preserveQuery : true;
    const preserveHost = options.preserveHost || false;

    let name;

    if (parsedUrl.protocol === 'about:' || parsedUrl.protocol === 'data:') {
      // Handle 'about:*' and 'data:*' URLs specially since they have no path.
      name = parsedUrl.href;
    } else {
      name = parsedUrl.pathname;
      const parts = name.split('/').filter(part => part.length);
      if (numPathParts && parts.length > numPathParts) {
        name = ELLIPSIS + parts.slice(-1 * numPathParts).join('/');
      }

      if (preserveHost) {
        name = `${parsedUrl.host}/${name.replace(/^\//, '')}`;
      }
      if (preserveQuery) {
        name = `${name}${parsedUrl.search}`;
      }
    }

    const MAX_LENGTH = 64;
    // Always elide hexadecimal hash
    name = name.replace(/([a-f0-9]{7})[a-f0-9]{13}[a-f0-9]*/g, `$1${ELLIPSIS}`);
    // Also elide other hash-like mixed-case strings
    name = name.replace(/([a-zA-Z0-9-_]{9})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9-_]{10,}/g,
      `$1${ELLIPSIS}`);
    // Also elide long number sequences
    name = name.replace(/(\d{3})\d{6,}/g, `$1${ELLIPSIS}`);
    // Merge any adjacent ellipses
    name = name.replace(/\u2026+/g, ELLIPSIS);

    // Elide query params first
    if (name.length > MAX_LENGTH && name.includes('?')) {
      // Try to leave the first query parameter intact
      name = name.replace(/\?([^=]*)(=)?.*/, `?$1$2${ELLIPSIS}`);

      // Remove it all if it's still too long
      if (name.length > MAX_LENGTH) {
        name = name.replace(/\?.*/, `?${ELLIPSIS}`);
      }
    }

    // Elide too long names next
    if (name.length > MAX_LENGTH) {
      const dotIndex = name.lastIndexOf('.');
      if (dotIndex >= 0) {
        name = name.slice(0, MAX_LENGTH - 1 - (name.length - dotIndex)) +
          // Show file extension
          `${ELLIPSIS}${name.slice(dotIndex)}`;
      } else {
        name = name.slice(0, MAX_LENGTH - 1) + ELLIPSIS;
      }
    }

    return name;
  }

  /**
   * Split a URL into a file, hostname and origin for easy display.
   * @param {string} url
   * @return {{file: string, hostname: string, origin: string}}
   */
  static parseURL(url) {
    const parsedUrl = new URL(url);
    return {
      file: Util.getURLDisplayName(parsedUrl),
      hostname: parsedUrl.hostname,
      origin: parsedUrl.origin,
    };
  }

  /**
   * @param {string|URL} value
   * @return {URL}
   */
  static createOrReturnURL(value) {
    if (value instanceof URL) {
      return value;
    }

    return new URL(value);
  }

  /**
   * Gets the tld of a domain
   *
   * @param {string} hostname
   * @return {string} tld
   */
  static getTld(hostname) {
    const tlds = hostname.split('.').slice(-2);

    if (!listOfTlds.includes(tlds[0])) {
      return `.${tlds[tlds.length - 1]}`;
    }

    return `.${tlds.join('.')}`;
  }

  /**
   * Returns a primary domain for provided hostname (e.g. www.example.com -> example.com).
   * @param {string|URL} url hostname or URL object
   * @returns {string}
   */
  static getRootDomain(url) {
    const hostname = Util.createOrReturnURL(url).hostname;
    const tld = Util.getTld(hostname);

    // tld is .com or .co.uk which means we means that length is 1 to big
    // .com => 2 & .co.uk => 3
    const splitTld = tld.split('.');

    // get TLD + root domain
    return hostname.split('.').slice(-splitTld.length).join('.');
  }

  /**
   * @param {LH.Config.Settings} settings
   * @return {Array<{name: string, description: string}>}
   */
  static getEnvironmentDisplayValues(settings) {
    const emulationDesc = Util.getEmulationDescriptions(settings);

    return [
      {
        name: 'Device',
        description: emulationDesc.deviceEmulation,
      },
      {
        name: 'Network throttling',
        description: emulationDesc.networkThrottling,
      },
      {
        name: 'CPU throttling',
        description: emulationDesc.cpuThrottling,
      },
    ];
  }

  /**
   * @param {LH.Config.Settings} settings
   * @return {{deviceEmulation: string, networkThrottling: string, cpuThrottling: string, summary: string}}
   */
  static getEmulationDescriptions(settings) {
    let cpuThrottling;
    let networkThrottling;
    let summary;

    const throttling = settings.throttling;

    switch (settings.throttlingMethod) {
      case 'provided':
        cpuThrottling = 'Provided by environment';
        networkThrottling = 'Provided by environment';
        summary = 'No throttling applied';
        break;
      case 'devtools': {
        const {cpuSlowdownMultiplier, requestLatencyMs} = throttling;
        cpuThrottling = `${Util.formatNumber(cpuSlowdownMultiplier)}x slowdown (DevTools)`;
        networkThrottling = `${Util.formatNumber(requestLatencyMs)}${NBSP}ms HTTP RTT, ` +
          `${Util.formatNumber(throttling.downloadThroughputKbps)}${NBSP}Kbps down, ` +
          `${Util.formatNumber(throttling.uploadThroughputKbps)}${NBSP}Kbps up (DevTools)`;
        summary = 'Throttled Slow 4G network';
        break;
      }
      case 'simulate': {
        const {cpuSlowdownMultiplier, rttMs, throughputKbps} = throttling;
        cpuThrottling = `${Util.formatNumber(cpuSlowdownMultiplier)}x slowdown (Simulated)`;
        networkThrottling = `${Util.formatNumber(rttMs)}${NBSP}ms TCP RTT, ` +
          `${Util.formatNumber(throughputKbps)}${NBSP}Kbps throughput (Simulated)`;
        summary = 'Simulated Slow 4G network';
        break;
      }
      default:
        cpuThrottling = 'Unknown';
        networkThrottling = 'Unknown';
        summary = 'Unknown';
    }

    let deviceEmulation = 'No emulation';
    if (settings.emulatedFormFactor === 'mobile') deviceEmulation = 'Emulated Nexus 5X';
    if (settings.emulatedFormFactor === 'desktop') deviceEmulation = 'Emulated Desktop';

    return {
      deviceEmulation,
      cpuThrottling,
      networkThrottling,
      summary: `${deviceEmulation}, ${summary}`,
    };
  }

  /**
   * Set the locale to be used for Util's number and date formatting functions.
   * @param {LH.Locale} locale
   */
  static setNumberDateLocale(locale) {
    // When testing, use a locale with more exciting numeric formatting
    if (locale === 'en-XA') locale = 'de';

    Util.numberDateLocale = locale;
    Util.numberFormatter = new Intl.NumberFormat(locale);
  }

  /**
   * Returns only lines that are near a message, or the first few lines if there are
   * no line messages.
   * @param {LH.Audit.Details.SnippetValue['lines']} lines
   * @param {LH.Audit.Details.SnippetValue['lineMessages']} lineMessages
   * @param {number} surroundingLineCount Number of lines to include before and after
   * the message. If this is e.g. 2 this function might return 5 lines.
   */
  static filterRelevantLines(lines, lineMessages, surroundingLineCount) {
    if (lineMessages.length === 0) {
      // no lines with messages, just return the first bunch of lines
      return lines.slice(0, surroundingLineCount * 2 + 1);
    }

    const minGapSize = 3;
    const lineNumbersToKeep = new Set();
    // Sort messages so we can check lineNumbersToKeep to see how big the gap to
    // the previous line is.
    lineMessages = lineMessages.sort((a, b) => (a.lineNumber || 0) - (b.lineNumber || 0));
    lineMessages.forEach(({lineNumber}) => {
      let firstSurroundingLineNumber = lineNumber - surroundingLineCount;
      let lastSurroundingLineNumber = lineNumber + surroundingLineCount;

      while (firstSurroundingLineNumber < 1) {
        // make sure we still show (surroundingLineCount * 2 + 1) lines in total
        firstSurroundingLineNumber++;
        lastSurroundingLineNumber++;
      }
      // If only a few lines would be omitted normally then we prefer to include
      // extra lines to avoid the tiny gap
      if (lineNumbersToKeep.has(firstSurroundingLineNumber - minGapSize - 1)) {
        firstSurroundingLineNumber -= minGapSize;
      }
      for (let i = firstSurroundingLineNumber; i <= lastSurroundingLineNumber; i++) {
        const surroundingLineNumber = i;
        lineNumbersToKeep.add(surroundingLineNumber);
      }
    });

    return lines.filter(line => lineNumbersToKeep.has(line.lineNumber));
  }

  /**
   * @param {string} categoryId
   */
  static isPluginCategory(categoryId) {
    return categoryId.startsWith('lighthouse-plugin-');
  }
}

/**
 * This value is updated on each run to the locale of the report
 * @type {LH.Locale}
 */
Util.numberDateLocale = 'en';

/**
 * This value stays in sync with Util.numberDateLocale.
 * @type {Intl.NumberFormat}
 */
Util.numberFormatter = new Intl.NumberFormat(Util.numberDateLocale);

/**
 * Report-renderer-specific strings.
 * @type {LH.I18NRendererStrings}
 */
Util.UIStrings = {
  /** Disclaimer shown to users below the metric values (First Contentful Paint, Time to Interactive, etc) to warn them that the numbers they see will likely change slightly the next time they run Lighthouse. */
  varianceDisclaimer: 'Values are estimated and may vary. The performance score is [based only on these metrics](https://github.com/GoogleChrome/lighthouse/blob/d2ec9ffbb21de9ad1a0f86ed24575eda32c796f0/docs/scoring.md#how-are-the-scores-weighted).',
  /** Column heading label for the listing of opportunity audits. Each audit title represents an opportunity. There are only 2 columns, so no strict character limit.  */
  opportunityResourceColumnLabel: 'Opportunity',
  /** Column heading label for the estimated page load savings of opportunity audits. Estimated Savings is the total amount of time (in seconds) that Lighthouse computed could be reduced from the total page load time, if the suggested action is taken. There are only 2 columns, so no strict character limit. */
  opportunitySavingsColumnLabel: 'Estimated Savings',

  /** An error string displayed next to a particular audit when it has errored, but not provided any specific error message. */
  errorMissingAuditInfo: 'Report error: no audit information',
  /** A label, shown next to an audit title or metric title, indicating that there was an error computing it. The user can hover on the label to reveal a tooltip with the extended error message. Translation should be short (< 20 characters). */
  errorLabel: 'Error!',
  /** This label is shown above a bulleted list of warnings. It is shown directly below an audit that produced warnings. Warnings describe situations the user should be aware of, as Lighthouse was unable to complete all the work required on this audit. For example, The 'Unable to decode image (biglogo.jpg)' warning may show up below an image encoding audit. */
  warningHeader: 'Warnings: ',
  /** The tooltip text on an expandable chevron icon. Clicking the icon expands a section to reveal a list of audit results that was hidden by default. */
  auditGroupExpandTooltip: 'Show audits',
  /** Section heading shown above a list of passed audits that contain warnings. Audits under this section do not negatively impact the score, but Lighthouse has generated some potentially actionable suggestions that should be reviewed. This section is expanded by default and displays after the failing audits. */
  warningAuditsGroupTitle: 'Passed audits but with warnings',
  /** Section heading shown above a list of audits that are passing. 'Passed' here refers to a passing grade. This section is collapsed by default, as the user should be focusing on the failed audits instead. Users can click this heading to reveal the list. */
  passedAuditsGroupTitle: 'Passed audits',
  /** Section heading shown above a list of audits that do not apply to the page. For example, if an audit is 'Are images optimized?', but the page has no images on it, the audit will be marked as not applicable. This is neither passing or failing. This section is collapsed by default, as the user should be focusing on the failed audits instead. Users can click this heading to reveal the list. */
  notApplicableAuditsGroupTitle: 'Not applicable',
  /** Section heading shown above a list of audits that were not computed by Lighthouse. They serve as a list of suggestions for the user to go and manually check. For example, Lighthouse can't automate testing cross-browser compatibility, so that is listed within this section, so the user is reminded to test it themselves. This section is collapsed by default, as the user should be focusing on the failed audits instead. Users can click this heading to reveal the list. */
  manualAuditsGroupTitle: 'Additional items to manually check',

  /** Label shown preceding any important warnings that may have invalidated the entire report. For example, if the user has Chrome extensions installed, they may add enough performance overhead that Lighthouse's performance metrics are unreliable. If shown, this will be displayed at the top of the report UI. */
  toplevelWarningsMessage: 'There were issues affecting this run of Lighthouse:',

  /** String of text shown in a graphical representation of the flow of network requests for the web page. This label represents the initial network request that fetches an HTML page. This navigation may be redirected (eg. Initial navigation to http://example.com redirects to https://www.example.com). */
  crcInitialNavigation: 'Initial Navigation',
  /** Label of value shown in the summary of critical request chains. Refers to the total amount of time (milliseconds) of the longest critical path chain/sequence of network requests. Example value: 2310 ms */
  crcLongestDurationLabel: 'Maximum critical path latency:',

  /** Label for button that shows all lines of the snippet when clicked */
  snippetExpandButtonLabel: 'Expand snippet',
  /** Label for button that only shows a few lines of the snippet when clicked */
  snippetCollapseButtonLabel: 'Collapse snippet',

  /** Explanation shown to users below performance results to inform them that the test was done with a 4G network connection and to warn them that the numbers they see will likely change slightly the next time they run Lighthouse. 'Lighthouse' becomes link text to additional documentation. */
  lsPerformanceCategoryDescription: '[Lighthouse](https://developers.google.com/web/tools/lighthouse/) analysis of the current page on an emulated mobile network. Values are estimated and may vary.',
  /** Title of the lab data section of the Performance category. Within this section are various speed metrics which quantify the pageload performance into values presented in seconds and milliseconds. "Lab" is an abbreviated form of "laboratory", and refers to the fact that the data is from a controlled test of a website, not measurements from real users visiting that site.  */
  labDataTitle: 'Lab Data',

  /** This label is for a checkbox above a table of items loaded by a web page. The checkbox is used to show or hide third-party (or "3rd-party") resources in the table, where "third-party resources" refers to items loaded by a web page from URLs that aren't controlled by the owner of the web page. */
  thirdPartyResourcesLabel: 'Show 3rd-party resources',
};

if (typeof module !== 'undefined' && module.exports) {
  module.exports = Util;
} else {
  self.Util = Util;
}
;
/**
 * @license
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/* globals URL self Util */

/** @typedef {HTMLElementTagNameMap & {[id: string]: HTMLElement}} HTMLElementByTagName */

class DOM {
  /**
   * @param {Document} document
   */
  constructor(document) {
    /** @type {Document} */
    this._document = document;
    /** @type {string} */
    this._lighthouseChannel = 'unknown';
  }

  /**
   * @template {string} T
   * @param {T} name
   * @param {string=} className
   * @param {Object<string, (string|undefined)>=} attrs Attribute key/val pairs.
   *     Note: if an attribute key has an undefined value, this method does not
   *     set the attribute on the node.
   * @return {HTMLElementByTagName[T]}
   */
  createElement(name, className, attrs = {}) {
    const element = this._document.createElement(name);
    if (className) {
      element.className = className;
    }
    Object.keys(attrs).forEach(key => {
      const value = attrs[key];
      if (typeof value !== 'undefined') {
        element.setAttribute(key, value);
      }
    });
    return element;
  }

  /**
   * @return {DocumentFragment}
   */
  createFragment() {
    return this._document.createDocumentFragment();
  }

  /**
   * @template {string} T
   * @param {Element} parentElem
   * @param {T} elementName
   * @param {string=} className
   * @param {Object<string, (string|undefined)>=} attrs Attribute key/val pairs.
   *     Note: if an attribute key has an undefined value, this method does not
   *     set the attribute on the node.
   * @return {HTMLElementByTagName[T]}
   */
  createChildOf(parentElem, elementName, className, attrs) {
    const element = this.createElement(elementName, className, attrs);
    parentElem.appendChild(element);
    return element;
  }

  /**
   * @param {string} selector
   * @param {ParentNode} context
   * @return {DocumentFragment} A clone of the template content.
   * @throws {Error}
   */
  cloneTemplate(selector, context) {
    const template = /** @type {?HTMLTemplateElement} */ (context.querySelector(selector));
    if (!template) {
      throw new Error(`Template not found: template${selector}`);
    }

    const clone = this._document.importNode(template.content, true);

    // Prevent duplicate styles in the DOM. After a template has been stamped
    // for the first time, remove the clone's styles so they're not re-added.
    if (template.hasAttribute('data-stamped')) {
      this.findAll('style', clone).forEach(style => style.remove());
    }
    template.setAttribute('data-stamped', 'true');

    return clone;
  }

  /**
   * Resets the "stamped" state of the templates.
   */
  resetTemplates() {
    this.findAll('template[data-stamped]', this._document).forEach(t => {
      t.removeAttribute('data-stamped');
    });
  }

  /**
   * @param {string} text
   * @return {Element}
   */
  convertMarkdownLinkSnippets(text) {
    const element = this.createElement('span');

    for (const segment of Util.splitMarkdownLink(text)) {
      if (!segment.isLink) {
        // Plain text segment.
        element.appendChild(this._document.createTextNode(segment.text));
        continue;
      }

      // Otherwise, append any links found.
      const url = new URL(segment.linkHref);

      const DOCS_ORIGINS = ['https://developers.google.com', 'https://web.dev'];
      if (DOCS_ORIGINS.includes(url.origin)) {
        url.searchParams.set('utm_source', 'lighthouse');
        url.searchParams.set('utm_medium', this._lighthouseChannel);
      }

      const a = this.createElement('a');
      a.rel = 'noopener';
      a.target = '_blank';
      a.textContent = segment.text;
      a.href = url.href;
      element.appendChild(a);
    }

    return element;
  }

  /**
   * @param {string} markdownText
   * @return {Element}
   */
  convertMarkdownCodeSnippets(markdownText) {
    const element = this.createElement('span');

    for (const segment of Util.splitMarkdownCodeSpans(markdownText)) {
      if (segment.isCode) {
        const pre = this.createElement('code');
        pre.textContent = segment.text;
        element.appendChild(pre);
      } else {
        element.appendChild(this._document.createTextNode(segment.text));
      }
    }

    return element;
  }

  /**
   * The channel to use for UTM data when rendering links to the documentation.
   * @param {string} lighthouseChannel
   */
  setLighthouseChannel(lighthouseChannel) {
    this._lighthouseChannel = lighthouseChannel;
  }

  /**
   * @return {Document}
   */
  document() {
    return this._document;
  }

  /**
   * TODO(paulirish): import and conditionally apply the DevTools frontend subclasses instead of this
   * @return {boolean}
   */
  isDevTools() {
    return !!this._document.querySelector('.lh-devtools');
  }

  /**
   * Guaranteed context.querySelector. Always returns an element or throws if
   * nothing matches query.
   * @param {string} query
   * @param {ParentNode} context
   * @return {HTMLElement}
   */
  find(query, context) {
    /** @type {?HTMLElement} */
    const result = context.querySelector(query);
    if (result === null) {
      throw new Error(`query ${query} not found`);
    }
    return result;
  }

  /**
   * Helper for context.querySelectorAll. Returns an Array instead of a NodeList.
   * @param {string} query
   * @param {ParentNode} context
   * @return {Array<HTMLElement>}
   */
  findAll(query, context) {
    return Array.from(context.querySelectorAll(query));
  }
}

if (typeof module !== 'undefined' && module.exports) {
  module.exports = DOM;
} else {
  self.DOM = DOM;
}
;
/*
Details Element Polyfill 2.4.0
Copyright © 2019 Javan Makhmali
 */
(function() {
  "use strict";
  var element = document.createElement("details");
  var elementIsNative = typeof HTMLDetailsElement != "undefined" && element instanceof HTMLDetailsElement;
  var support = {
    open: "open" in element || elementIsNative,
    toggle: "ontoggle" in element
  };
  var styles = '\ndetails, summary {\n  display: block;\n}\ndetails:not([open]) > *:not(summary) {\n  display: none;\n}\nsummary::before {\n  content: "►";\n  padding-right: 0.3rem;\n  font-size: 0.6rem;\n  cursor: default;\n}\n[open] > summary::before {\n  content: "▼";\n}\n';
  var _ref = [], forEach = _ref.forEach, slice = _ref.slice;
  if (!support.open) {
    polyfillStyles();
    polyfillProperties();
    polyfillToggle();
    polyfillAccessibility();
  }
  if (support.open && !support.toggle) {
    polyfillToggleEvent();
  }
  function polyfillStyles() {
    document.head.insertAdjacentHTML("afterbegin", "<style>" + styles + "\u003c/style>");
  }
  function polyfillProperties() {
    var prototype = document.createElement("details").constructor.prototype;
    var setAttribute = prototype.setAttribute, removeAttribute = prototype.removeAttribute;
    var open = Object.getOwnPropertyDescriptor(prototype, "open");
    Object.defineProperties(prototype, {
      open: {
        get: function get() {
          if (this.tagName == "DETAILS") {
            return this.hasAttribute("open");
          } else {
            if (open && open.get) {
              return open.get.call(this);
            }
          }
        },
        set: function set(value) {
          if (this.tagName == "DETAILS") {
            return value ? this.setAttribute("open", "") : this.removeAttribute("open");
          } else {
            if (open && open.set) {
              return open.set.call(this, value);
            }
          }
        }
      },
      setAttribute: {
        value: function value(name, _value) {
          var _this = this;
          var call = function call() {
            return setAttribute.call(_this, name, _value);
          };
          if (name == "open" && this.tagName == "DETAILS") {
            var wasOpen = this.hasAttribute("open");
            var result = call();
            if (!wasOpen) {
              var summary = this.querySelector("summary");
              if (summary) summary.setAttribute("aria-expanded", true);
              triggerToggle(this);
            }
            return result;
          }
          return call();
        }
      },
      removeAttribute: {
        value: function value(name) {
          var _this2 = this;
          var call = function call() {
            return removeAttribute.call(_this2, name);
          };
          if (name == "open" && this.tagName == "DETAILS") {
            var wasOpen = this.hasAttribute("open");
            var result = call();
            if (wasOpen) {
              var summary = this.querySelector("summary");
              if (summary) summary.setAttribute("aria-expanded", false);
              triggerToggle(this);
            }
            return result;
          }
          return call();
        }
      }
    });
  }
  function polyfillToggle() {
    onTogglingTrigger(function(element) {
      element.hasAttribute("open") ? element.removeAttribute("open") : element.setAttribute("open", "");
    });
  }
  function polyfillToggleEvent() {
    if (window.MutationObserver) {
      new MutationObserver(function(mutations) {
        forEach.call(mutations, function(mutation) {
          var target = mutation.target, attributeName = mutation.attributeName;
          if (target.tagName == "DETAILS" && attributeName == "open") {
            triggerToggle(target);
          }
        });
      }).observe(document.documentElement, {
        attributes: true,
        subtree: true
      });
    } else {
      onTogglingTrigger(function(element) {
        var wasOpen = element.getAttribute("open");
        setTimeout(function() {
          var isOpen = element.getAttribute("open");
          if (wasOpen != isOpen) {
            triggerToggle(element);
          }
        }, 1);
      });
    }
  }
  function polyfillAccessibility() {
    setAccessibilityAttributes(document);
    if (window.MutationObserver) {
      new MutationObserver(function(mutations) {
        forEach.call(mutations, function(mutation) {
          forEach.call(mutation.addedNodes, setAccessibilityAttributes);
        });
      }).observe(document.documentElement, {
        subtree: true,
        childList: true
      });
    } else {
      document.addEventListener("DOMNodeInserted", function(event) {
        setAccessibilityAttributes(event.target);
      });
    }
  }
  function setAccessibilityAttributes(root) {
    findElementsWithTagName(root, "SUMMARY").forEach(function(summary) {
      var details = findClosestElementWithTagName(summary, "DETAILS");
      summary.setAttribute("aria-expanded", details.hasAttribute("open"));
      if (!summary.hasAttribute("tabindex")) summary.setAttribute("tabindex", "0");
      if (!summary.hasAttribute("role")) summary.setAttribute("role", "button");
    });
  }
  function eventIsSignificant(event) {
    return !(event.defaultPrevented || event.ctrlKey || event.metaKey || event.shiftKey || event.target.isContentEditable);
  }
  function onTogglingTrigger(callback) {
    addEventListener("click", function(event) {
      if (eventIsSignificant(event)) {
        if (event.which <= 1) {
          var element = findClosestElementWithTagName(event.target, "SUMMARY");
          if (element && element.parentNode && element.parentNode.tagName == "DETAILS") {
            callback(element.parentNode);
          }
        }
      }
    }, false);
    addEventListener("keydown", function(event) {
      if (eventIsSignificant(event)) {
        if (event.keyCode == 13 || event.keyCode == 32) {
          var element = findClosestElementWithTagName(event.target, "SUMMARY");
          if (element && element.parentNode && element.parentNode.tagName == "DETAILS") {
            callback(element.parentNode);
            event.preventDefault();
          }
        }
      }
    }, false);
  }
  function triggerToggle(element) {
    var event = document.createEvent("Event");
    event.initEvent("toggle", false, false);
    element.dispatchEvent(event);
  }
  function findElementsWithTagName(root, tagName) {
    return (root.tagName == tagName ? [ root ] : []).concat(typeof root.getElementsByTagName == "function" ? slice.call(root.getElementsByTagName(tagName)) : []);
  }
  function findClosestElementWithTagName(element, tagName) {
    if (typeof element.closest == "function") {
      return element.closest(tagName);
    } else {
      while (element) {
        if (element.tagName == tagName) {
          return element;
        } else {
          element = element.parentNode;
        }
      }
    }
  }
})();
;
/**
 * @license
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/* globals self CriticalRequestChainRenderer SnippetRenderer Util URL */

/** @typedef {import('./dom.js')} DOM */

const URL_PREFIXES = ['http://', 'https://', 'data:'];

class DetailsRenderer {
  /**
   * @param {DOM} dom
   */
  constructor(dom) {
    /** @type {DOM} */
    this._dom = dom;
    /** @type {ParentNode} */
    this._templateContext; // eslint-disable-line no-unused-expressions
  }

  /**
   * @param {ParentNode} context
   */
  setTemplateContext(context) {
    this._templateContext = context;
  }

  /**
   * @param {LH.Audit.Details} details
   * @return {Element|null}
   */
  render(details) {
    switch (details.type) {
      case 'filmstrip':
        return this._renderFilmstrip(details);
      case 'list':
        return this._renderList(details);
      case 'table':
        return this._renderTable(details);
      case 'criticalrequestchain':
        return CriticalRequestChainRenderer.render(this._dom, this._templateContext, details, this);
      case 'opportunity':
        return this._renderTable(details);

      // Internal-only details, not for rendering.
      case 'screenshot':
      case 'debugdata':
        return null;

      default: {
        // @ts-ignore tsc thinks this is unreachable, but be forward compatible
        // with new unexpected detail types.
        return this._renderUnknown(details.type, details);
      }
    }
  }

  /**
   * @param {{value: number, granularity?: number}} details
   * @return {Element}
   */
  _renderBytes(details) {
    // TODO: handle displayUnit once we have something other than 'kb'
    const value = Util.formatBytesToKB(details.value, details.granularity);
    return this._renderText(value);
  }

  /**
   * @param {{value: number, granularity?: number, displayUnit?: string}} details
   * @return {Element}
   */
  _renderMilliseconds(details) {
    let value = Util.formatMilliseconds(details.value, details.granularity);
    if (details.displayUnit === 'duration') {
      value = Util.formatDuration(details.value);
    }

    return this._renderText(value);
  }

  /**
   * @param {string} text
   * @return {HTMLElement}
   */
  renderTextURL(text) {
    const url = text;

    let displayedPath;
    let displayedHost;
    let title;
    try {
      const parsed = Util.parseURL(url);
      displayedPath = parsed.file === '/' ? parsed.origin : parsed.file;
      displayedHost = parsed.file === '/' ? '' : `(${parsed.hostname})`;
      title = url;
    } catch (e) {
      displayedPath = url;
    }

    const element = this._dom.createElement('div', 'lh-text__url');
    element.appendChild(this._renderLink({text: displayedPath, url}));

    if (displayedHost) {
      const hostElem = this._renderText(displayedHost);
      hostElem.classList.add('lh-text__url-host');
      element.appendChild(hostElem);
    }

    if (title) {
      element.title = url;
      // set the url on the element's dataset which we use to check 3rd party origins
      element.dataset.url = url;
    }
    return element;
  }

  /**
   * @param {{text: string, url: string}} details
   * @return {Element}
   */
  _renderLink(details) {
    const allowedProtocols = ['https:', 'http:'];
    let url;
    try {
      url = new URL(details.url);
    } catch (_) {}

    if (!url || !allowedProtocols.includes(url.protocol)) {
      // Fall back to just the link text if invalid or protocol not allowed.
      return this._renderText(details.text);
    }

    const a = this._dom.createElement('a');
    a.rel = 'noopener';
    a.target = '_blank';
    a.textContent = details.text;
    a.href = url.href;

    return a;
  }

  /**
   * @param {string} text
   * @return {Element}
   */
  _renderText(text) {
    const element = this._dom.createElement('div', 'lh-text');
    element.textContent = text;
    return element;
  }

  /**
   * @param {string} text
   * @return {Element}
   */
  _renderNumeric(text) {
    const element = this._dom.createElement('div', 'lh-numeric');
    element.textContent = text;
    return element;
  }

  /**
   * Create small thumbnail with scaled down image asset.
   * @param {string} details
   * @return {Element}
   */
  _renderThumbnail(details) {
    const element = this._dom.createElement('img', 'lh-thumbnail');
    const strValue = details;
    element.src = strValue;
    element.title = strValue;
    element.alt = '';
    return element;
  }

  /**
   * @param {string} type
   * @param {*} value
   */
  _renderUnknown(type, value) {
    // eslint-disable-next-line no-console
    console.error(`Unknown details type: ${type}`, value);
    const element = this._dom.createElement('details', 'lh-unknown');
    this._dom.createChildOf(element, 'summary').textContent =
      `We don't know how to render audit details of type \`${type}\`. ` +
      'The Lighthouse version that collected this data is likely newer than the Lighthouse ' +
      'version of the report renderer. Expand for the raw JSON.';
    this._dom.createChildOf(element, 'pre').textContent = JSON.stringify(value, null, 2);
    return element;
  }

  /**
   * Render a details item value for embedding in a table. Renders the value
   * based on the heading's valueType, unless the value itself has a `type`
   * property to override it.
   * @param {LH.Audit.Details.TableItem[string] | LH.Audit.Details.OpportunityItem[string]} value
   * @param {LH.Audit.Details.OpportunityColumnHeading} heading
   * @return {Element|null}
   */
  _renderTableValue(value, heading) {
    if (typeof value === 'undefined' || value === null) {
      return null;
    }

    // First deal with the possible object forms of value.
    if (typeof value === 'object') {
      // The value's type overrides the heading's for this column.
      switch (value.type) {
        case 'code': {
          return this._renderCode(value.value);
        }
        case 'link': {
          return this._renderLink(value);
        }
        case 'node': {
          return this.renderNode(value);
        }
        case 'url': {
          return this.renderTextURL(value.value);
        }
        default: {
          return this._renderUnknown(value.type, value);
        }
      }
    }

    // Next, deal with primitives.
    switch (heading.valueType) {
      case 'bytes': {
        const numValue = Number(value);
        return this._renderBytes({value: numValue, granularity: 1});
      }
      case 'code': {
        const strValue = String(value);
        return this._renderCode(strValue);
      }
      case 'ms': {
        const msValue = {
          value: Number(value),
          granularity: heading.granularity,
          displayUnit: heading.displayUnit,
        };
        return this._renderMilliseconds(msValue);
      }
      case 'numeric': {
        const strValue = String(value);
        return this._renderNumeric(strValue);
      }
      case 'text': {
        const strValue = String(value);
        return this._renderText(strValue);
      }
      case 'thumbnail': {
        const strValue = String(value);
        return this._renderThumbnail(strValue);
      }
      case 'timespanMs': {
        const numValue = Number(value);
        return this._renderMilliseconds({value: numValue});
      }
      case 'url': {
        const strValue = String(value);
        if (URL_PREFIXES.some(prefix => strValue.startsWith(prefix))) {
          return this.renderTextURL(strValue);
        } else {
          // Fall back to <pre> rendering if not actually a URL.
          return this._renderCode(strValue);
        }
      }
      default: {
        return this._renderUnknown(heading.valueType, value);
      }
    }
  }

  /**
   * Get the headings of a table-like details object, converted into the
   * OpportunityColumnHeading type until we have all details use the same
   * heading format.
   * @param {LH.Audit.Details.Table|LH.Audit.Details.Opportunity} tableLike
   * @return {Array<LH.Audit.Details.OpportunityColumnHeading>} header
   */
  _getCanonicalizedTableHeadings(tableLike) {
    if (tableLike.type === 'opportunity') {
      return tableLike.headings;
    }

    return tableLike.headings.map(heading => {
      return {
        key: heading.key,
        label: heading.text,
        valueType: heading.itemType,
        displayUnit: heading.displayUnit,
        granularity: heading.granularity,
      };
    });
  }

  /**
   * @param {LH.Audit.Details.Table|LH.Audit.Details.Opportunity} details
   * @return {Element}
   */
  _renderTable(details) {
    if (!details.items.length) return this._dom.createElement('span');

    const tableElem = this._dom.createElement('table', 'lh-table');
    const theadElem = this._dom.createChildOf(tableElem, 'thead');
    const theadTrElem = this._dom.createChildOf(theadElem, 'tr');

    const headings = this._getCanonicalizedTableHeadings(details);

    for (const heading of headings) {
      const valueType = heading.valueType || 'text';
      const classes = `lh-table-column--${valueType}`;
      const labelEl = this._dom.createElement('div', 'lh-text');
      labelEl.textContent = heading.label;
      this._dom.createChildOf(theadTrElem, 'th', classes).appendChild(labelEl);
    }

    const tbodyElem = this._dom.createChildOf(tableElem, 'tbody');
    for (const row of details.items) {
      const rowElem = this._dom.createChildOf(tbodyElem, 'tr');
      for (const heading of headings) {
        const value = row[heading.key];
        const valueElement = this._renderTableValue(value, heading);

        if (valueElement) {
          const classes = `lh-table-column--${heading.valueType}`;
          this._dom.createChildOf(rowElem, 'td', classes).appendChild(valueElement);
        } else {
          this._dom.createChildOf(rowElem, 'td', 'lh-table-column--empty');
        }
      }
    }
    return tableElem;
  }

  /**
   * @param {LH.Audit.Details.List} details
   * @return {Element}
   */
  _renderList(details) {
    const listContainer = this._dom.createElement('div', 'lh-list');

    details.items.forEach(item => {
      const snippetEl = SnippetRenderer.render(this._dom, this._templateContext, item, this);
      listContainer.appendChild(snippetEl);
    });

    return listContainer;
  }

  /**
   * @param {LH.Audit.Details.NodeValue} item
   * @return {Element}
   * @protected
   */
  renderNode(item) {
    const element = this._dom.createElement('span', 'lh-node');
    if (item.nodeLabel) {
      const nodeLabelEl = this._dom.createElement('div');
      nodeLabelEl.textContent = item.nodeLabel;
      element.appendChild(nodeLabelEl);
    }
    if (item.snippet) {
      const snippetEl = this._dom.createElement('div');
      snippetEl.classList.add('lh-node__snippet');
      snippetEl.textContent = item.snippet;
      element.appendChild(snippetEl);
    }
    if (item.selector) {
      element.title = item.selector;
    }
    if (item.path) element.setAttribute('data-path', item.path);
    if (item.selector) element.setAttribute('data-selector', item.selector);
    if (item.snippet) element.setAttribute('data-snippet', item.snippet);

    return element;
  }

  /**
   * @param {LH.Audit.Details.Filmstrip} details
   * @return {Element}
   */
  _renderFilmstrip(details) {
    const filmstripEl = this._dom.createElement('div', 'lh-filmstrip');

    for (const thumbnail of details.items) {
      const frameEl = this._dom.createChildOf(filmstripEl, 'div', 'lh-filmstrip__frame');
      this._dom.createChildOf(frameEl, 'img', 'lh-filmstrip__thumbnail', {
        src: thumbnail.data,
        alt: `Screenshot`,
      });
    }
    return filmstripEl;
  }

  /**
   * @param {string} text
   * @return {Element}
   */
  _renderCode(text) {
    const pre = this._dom.createElement('pre', 'lh-code');
    pre.textContent = text;
    return pre;
  }
}

if (typeof module !== 'undefined' && module.exports) {
  module.exports = DetailsRenderer;
} else {
  self.DetailsRenderer = DetailsRenderer;
}
;
/**
 * @license
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/**
 * @fileoverview This file contains helpers for constructing and rendering the
 * critical request chains network tree.
 */

/* globals self Util */

/** @typedef {import('./dom.js')} DOM */

class CriticalRequestChainRenderer {
  /**
   * Create render context for critical-request-chain tree display.
   * @param {LH.Audit.SimpleCriticalRequestNode} tree
   * @return {{tree: LH.Audit.SimpleCriticalRequestNode, startTime: number, transferSize: number}}
   */
  static initTree(tree) {
    let startTime = 0;
    const rootNodes = Object.keys(tree);
    if (rootNodes.length > 0) {
      const node = tree[rootNodes[0]];
      startTime = node.request.startTime;
    }

    return {tree, startTime, transferSize: 0};
  }

  /**
   * Helper to create context for each critical-request-chain node based on its
   * parent. Calculates if this node is the last child, whether it has any
   * children itself and what the tree looks like all the way back up to the root,
   * so the tree markers can be drawn correctly.
   * @param {LH.Audit.SimpleCriticalRequestNode} parent
   * @param {string} id
   * @param {number} startTime
   * @param {number} transferSize
   * @param {Array<boolean>=} treeMarkers
   * @param {boolean=} parentIsLastChild
   * @return {CRCSegment}
   */
  static createSegment(parent, id, startTime, transferSize, treeMarkers, parentIsLastChild) {
    const node = parent[id];
    const siblings = Object.keys(parent);
    const isLastChild = siblings.indexOf(id) === (siblings.length - 1);
    const hasChildren = !!node.children && Object.keys(node.children).length > 0;

    // Copy the tree markers so that we don't change by reference.
    const newTreeMarkers = Array.isArray(treeMarkers) ? treeMarkers.slice(0) : [];

    // Add on the new entry.
    if (typeof parentIsLastChild !== 'undefined') {
      newTreeMarkers.push(!parentIsLastChild);
    }

    return {
      node,
      isLastChild,
      hasChildren,
      startTime,
      transferSize: transferSize + node.request.transferSize,
      treeMarkers: newTreeMarkers,
    };
  }

  /**
   * Creates the DOM for a tree segment.
   * @param {DOM} dom
   * @param {DocumentFragment} tmpl
   * @param {CRCSegment} segment
   * @param {DetailsRenderer} detailsRenderer
   * @return {Node}
   */
  static createChainNode(dom, tmpl, segment, detailsRenderer) {
    const chainsEl = dom.cloneTemplate('#tmpl-lh-crc__chains', tmpl);

    // Hovering over request shows full URL.
    dom.find('.crc-node', chainsEl).setAttribute('title', segment.node.request.url);

    const treeMarkeEl = dom.find('.crc-node__tree-marker', chainsEl);

    // Construct lines and add spacers for sub requests.
    segment.treeMarkers.forEach(separator => {
      if (separator) {
        treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker vert'));
        treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker'));
      } else {
        treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker'));
        treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker'));
      }
    });

    if (segment.isLastChild) {
      treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker up-right'));
      treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker right'));
    } else {
      treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker vert-right'));
      treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker right'));
    }

    if (segment.hasChildren) {
      treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker horiz-down'));
    } else {
      treeMarkeEl.appendChild(dom.createElement('span', 'tree-marker right'));
    }

    // Fill in url, host, and request size information.
    const url = segment.node.request.url;
    const linkEl = detailsRenderer.renderTextURL(url);
    const treevalEl = dom.find('.crc-node__tree-value', chainsEl);
    treevalEl.appendChild(linkEl);

    if (!segment.hasChildren) {
      const {startTime, endTime, transferSize} = segment.node.request;
      const span = dom.createElement('span', 'crc-node__chain-duration');
      span.textContent = ' - ' + Util.formatMilliseconds((endTime - startTime) * 1000) + ', ';
      const span2 = dom.createElement('span', 'crc-node__chain-duration');
      span2.textContent = Util.formatBytesToKB(transferSize, 0.01);

      treevalEl.appendChild(span);
      treevalEl.appendChild(span2);
    }

    return chainsEl;
  }

  /**
   * Recursively builds a tree from segments.
   * @param {DOM} dom
   * @param {DocumentFragment} tmpl
   * @param {CRCSegment} segment
   * @param {Element} elem Parent element.
   * @param {LH.Audit.Details.CriticalRequestChain} details
   * @param {DetailsRenderer} detailsRenderer
   */
  static buildTree(dom, tmpl, segment, elem, details, detailsRenderer) {
    elem.appendChild(CRCRenderer.createChainNode(dom, tmpl, segment, detailsRenderer));
    if (segment.node.children) {
      for (const key of Object.keys(segment.node.children)) {
        const childSegment = CRCRenderer.createSegment(segment.node.children, key,
          segment.startTime, segment.transferSize, segment.treeMarkers, segment.isLastChild);
        CRCRenderer.buildTree(dom, tmpl, childSegment, elem, details, detailsRenderer);
      }
    }
  }

  /**
   * @param {DOM} dom
   * @param {ParentNode} templateContext
   * @param {LH.Audit.Details.CriticalRequestChain} details
   * @param {DetailsRenderer} detailsRenderer
   * @return {Element}
   */
  static render(dom, templateContext, details, detailsRenderer) {
    const tmpl = dom.cloneTemplate('#tmpl-lh-crc', templateContext);
    const containerEl = dom.find('.lh-crc', tmpl);

    // Fill in top summary.
    dom.find('.crc-initial-nav', tmpl).textContent = Util.UIStrings.crcInitialNavigation;
    dom.find('.lh-crc__longest_duration_label', tmpl).textContent =
        Util.UIStrings.crcLongestDurationLabel;
    dom.find('.lh-crc__longest_duration', tmpl).textContent =
        Util.formatMilliseconds(details.longestChain.duration);

    // Construct visual tree.
    const root = CRCRenderer.initTree(details.chains);
    for (const key of Object.keys(root.tree)) {
      const segment = CRCRenderer.createSegment(root.tree, key, root.startTime, root.transferSize);
      CRCRenderer.buildTree(dom, tmpl, segment, containerEl, details, detailsRenderer);
    }

    return dom.find('.lh-crc-container', tmpl);
  }
}

// Alias b/c the name is really long.
const CRCRenderer = CriticalRequestChainRenderer;

// Allow Node require()'ing.
if (typeof module !== 'undefined' && module.exports) {
  module.exports = CriticalRequestChainRenderer;
} else {
  self.CriticalRequestChainRenderer = CriticalRequestChainRenderer;
}

/** @typedef {{
      node: LH.Audit.SimpleCriticalRequestNode[string],
      isLastChild: boolean,
      hasChildren: boolean,
      startTime: number,
      transferSize: number,
      treeMarkers: Array<boolean>
  }} CRCSegment
 */
;
/**
 * @license Copyright 2019 Google Inc. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
 */
'use strict';

/* globals self, Util */

/** @typedef {import('./details-renderer')} DetailsRenderer */

/** @enum {number} */
const LineVisibility = {
  /** Show regardless of whether the snippet is collapsed or expanded */
  ALWAYS: 0,
  WHEN_COLLAPSED: 1,
  WHEN_EXPANDED: 2,
};

/** @enum {number} */
const LineContentType = {
  /** A line of content */
  CONTENT_NORMAL: 0,
  /** A line of content that's emphasized by setting the CSS background color */
  CONTENT_HIGHLIGHTED: 1,
  /** Use when some lines are hidden, shows the "..." placeholder */
  PLACEHOLDER: 2,
  /** A message about a line of content or the snippet in general */
  MESSAGE: 3,
};

/** @typedef {{
    content: string;
    lineNumber: string | number;
    contentType: LineContentType;
    truncated?: boolean;
    visibility?: LineVisibility;
}} LineDetails */

const classNamesByContentType = {
  [LineContentType.CONTENT_NORMAL]: ['lh-snippet__line--content'],
  [LineContentType.CONTENT_HIGHLIGHTED]: [
    'lh-snippet__line--content',
    'lh-snippet__line--content-highlighted',
  ],
  [LineContentType.PLACEHOLDER]: ['lh-snippet__line--placeholder'],
  [LineContentType.MESSAGE]: ['lh-snippet__line--message'],
};

/**
 * @param {LH.Audit.Details.SnippetValue['lines']} lines
 * @param {number} lineNumber
 * @return {{line?: LH.Audit.Details.SnippetValue['lines'][0], previousLine?: LH.Audit.Details.SnippetValue['lines'][0]}}
 */
function getLineAndPreviousLine(lines, lineNumber) {
  return {
    line: lines.find(l => l.lineNumber === lineNumber),
    previousLine: lines.find(l => l.lineNumber === lineNumber - 1),
  };
}

/**
 * @param {LH.Audit.Details.SnippetValue["lineMessages"]} messages
 * @param {number} lineNumber
 */
function getMessagesForLineNumber(messages, lineNumber) {
  return messages.filter(h => h.lineNumber === lineNumber);
}

/**
 * @param {LH.Audit.Details.SnippetValue} details
 * @return {LH.Audit.Details.SnippetValue['lines']}
 */
function getLinesWhenCollapsed(details) {
  const SURROUNDING_LINES_TO_SHOW_WHEN_COLLAPSED = 2;
  return Util.filterRelevantLines(
    details.lines,
    details.lineMessages,
    SURROUNDING_LINES_TO_SHOW_WHEN_COLLAPSED
  );
}

/**
 * Render snippet of text with line numbers and annotations.
 * By default we only show a few lines around each annotation and the user
 * can click "Expand snippet" to show more.
 * Content lines with annotations are highlighted.
 */
class SnippetRenderer {
  /**
   * @param {DOM} dom
   * @param {DocumentFragment} tmpl
   * @param {LH.Audit.Details.SnippetValue} details
   * @param {DetailsRenderer} detailsRenderer
   * @param {function} toggleExpandedFn
   * @return {DocumentFragment}
   */
  static renderHeader(dom, tmpl, details, detailsRenderer, toggleExpandedFn) {
    const linesWhenCollapsed = getLinesWhenCollapsed(details);
    const canExpand = linesWhenCollapsed.length < details.lines.length;

    const header = dom.cloneTemplate('#tmpl-lh-snippet__header', tmpl);
    dom.find('.lh-snippet__title', header).textContent = details.title;

    const {
      snippetCollapseButtonLabel,
      snippetExpandButtonLabel,
    } = Util.UIStrings;
    dom.find(
      '.lh-snippet__btn-label-collapse',
      header
    ).textContent = snippetCollapseButtonLabel;
    dom.find(
      '.lh-snippet__btn-label-expand',
      header
    ).textContent = snippetExpandButtonLabel;

    const toggleExpandButton = dom.find('.lh-snippet__toggle-expand', header);
    // If we're already showing all the available lines of the snippet, we don't need an
    // expand/collapse button and can remove it from the DOM.
    // If we leave the button in though, wire up the click listener to toggle visibility!
    if (!canExpand) {
      toggleExpandButton.remove();
    } else {
      toggleExpandButton.addEventListener('click', () => toggleExpandedFn());
    }

    // We only show the source node of the snippet in DevTools because then the user can
    // access the full element detail. Just being able to see the outer HTML isn't very useful.
    if (details.node && dom.isDevTools()) {
      const nodeContainer = dom.find('.lh-snippet__node', header);
      nodeContainer.appendChild(detailsRenderer.renderNode(details.node));
    }

    return header;
  }

  /**
   * Renders a line (text content, message, or placeholder) as a DOM element.
   * @param {DOM} dom
   * @param {DocumentFragment} tmpl
   * @param {LineDetails} lineDetails
   * @return {Element}
   */
  static renderSnippetLine(
      dom,
      tmpl,
      {content, lineNumber, truncated, contentType, visibility}
  ) {
    const clonedTemplate = dom.cloneTemplate('#tmpl-lh-snippet__line', tmpl);
    const contentLine = dom.find('.lh-snippet__line', clonedTemplate);
    const {classList} = contentLine;

    classNamesByContentType[contentType].forEach(typeClass =>
      classList.add(typeClass)
    );

    if (visibility === LineVisibility.WHEN_COLLAPSED) {
      classList.add('lh-snippet__show-if-collapsed');
    } else if (visibility === LineVisibility.WHEN_EXPANDED) {
      classList.add('lh-snippet__show-if-expanded');
    }

    const lineContent = content + (truncated ? '…' : '');
    const lineContentEl = dom.find('.lh-snippet__line code', contentLine);
    if (contentType === LineContentType.MESSAGE) {
      lineContentEl.appendChild(dom.convertMarkdownLinkSnippets(lineContent));
    } else {
      lineContentEl.textContent = lineContent;
    }

    dom.find(
      '.lh-snippet__line-number',
      contentLine
    ).textContent = lineNumber.toString();

    return contentLine;
  }

  /**
   * @param {DOM} dom
   * @param {DocumentFragment} tmpl
   * @param {{message: string}} message
   * @return {Element}
   */
  static renderMessage(dom, tmpl, message) {
    return SnippetRenderer.renderSnippetLine(dom, tmpl, {
      lineNumber: ' ',
      content: message.message,
      contentType: LineContentType.MESSAGE,
    });
  }

  /**
   * @param {DOM} dom
   * @param {DocumentFragment} tmpl
   * @param {LineVisibility} visibility
   * @return {Element}
   */
  static renderOmittedLinesPlaceholder(dom, tmpl, visibility) {
    return SnippetRenderer.renderSnippetLine(dom, tmpl, {
      lineNumber: '…',
      content: '',
      visibility,
      contentType: LineContentType.PLACEHOLDER,
    });
  }

  /**
   * @param {DOM} dom
   * @param {DocumentFragment} tmpl
   * @param {LH.Audit.Details.SnippetValue} details
   * @return {DocumentFragment}
   */
  static renderSnippetContent(dom, tmpl, details) {
    const template = dom.cloneTemplate('#tmpl-lh-snippet__content', tmpl);
    const snippetEl = dom.find('.lh-snippet__snippet-inner', template);

    // First render messages that don't belong to specific lines
    details.generalMessages.forEach(m =>
      snippetEl.append(SnippetRenderer.renderMessage(dom, tmpl, m))
    );
    // Then render the lines and their messages, as well as placeholders where lines are omitted
    snippetEl.append(SnippetRenderer.renderSnippetLines(dom, tmpl, details));

    return template;
  }

  /**
   * @param {DOM} dom
   * @param {DocumentFragment} tmpl
   * @param {LH.Audit.Details.SnippetValue} details
   * @return {DocumentFragment}
   */
  static renderSnippetLines(dom, tmpl, details) {
    const {lineMessages, generalMessages, lineCount, lines} = details;
    const linesWhenCollapsed = getLinesWhenCollapsed(details);
    const hasOnlyGeneralMessages =
      generalMessages.length > 0 && lineMessages.length === 0;

    const lineContainer = dom.createFragment();

    // When a line is not shown in the collapsed state we try to see if we also need an
    // omitted lines placeholder for the expanded state, rather than rendering two separate
    // placeholders.
    let hasPendingOmittedLinesPlaceholderForCollapsedState = false;

    for (let lineNumber = 1; lineNumber <= lineCount; lineNumber++) {
      const {line, previousLine} = getLineAndPreviousLine(lines, lineNumber);
      const {
        line: lineWhenCollapsed,
        previousLine: previousLineWhenCollapsed,
      } = getLineAndPreviousLine(linesWhenCollapsed, lineNumber);

      const showLineWhenCollapsed = !!lineWhenCollapsed;
      const showPreviousLineWhenCollapsed = !!previousLineWhenCollapsed;

      // If we went from showing lines in the collapsed state to not showing them
      // we need to render a placeholder
      if (showPreviousLineWhenCollapsed && !showLineWhenCollapsed) {
        hasPendingOmittedLinesPlaceholderForCollapsedState = true;
      }
      // If we are back to lines being visible in the collapsed and the placeholder
      // hasn't been rendered yet then render it now
      if (
        showLineWhenCollapsed &&
        hasPendingOmittedLinesPlaceholderForCollapsedState
      ) {
        lineContainer.append(
          SnippetRenderer.renderOmittedLinesPlaceholder(
            dom,
            tmpl,
            LineVisibility.WHEN_COLLAPSED
          )
        );
        hasPendingOmittedLinesPlaceholderForCollapsedState = false;
      }

      // Render omitted lines placeholder if we have not already rendered one for this gap
      const isFirstOmittedLineWhenExpanded = !line && !!previousLine;
      const isFirstLineOverallAndIsOmittedWhenExpanded =
        !line && lineNumber === 1;
      if (
        isFirstOmittedLineWhenExpanded ||
        isFirstLineOverallAndIsOmittedWhenExpanded
      ) {
        // In the collapsed state we don't show omitted lines placeholders around
        // the edges of the snippet
        const hasRenderedAllLinesVisibleWhenCollapsed = !linesWhenCollapsed.some(
          l => l.lineNumber > lineNumber
        );
        const onlyShowWhenExpanded =
          hasRenderedAllLinesVisibleWhenCollapsed || lineNumber === 1;
        lineContainer.append(
          SnippetRenderer.renderOmittedLinesPlaceholder(
            dom,
            tmpl,
            onlyShowWhenExpanded
              ? LineVisibility.WHEN_EXPANDED
              : LineVisibility.ALWAYS
          )
        );
        hasPendingOmittedLinesPlaceholderForCollapsedState = false;
      }

      if (!line) {
        // Can't render the line if we don't know its content (instead we've rendered a placeholder)
        continue;
      }

      // Now render the line and any messages
      const messages = getMessagesForLineNumber(lineMessages, lineNumber);
      const highlightLine = messages.length > 0 || hasOnlyGeneralMessages;
      const contentLineDetails = Object.assign({}, line, {
        contentType: highlightLine
          ? LineContentType.CONTENT_HIGHLIGHTED
          : LineContentType.CONTENT_NORMAL,
        visibility: lineWhenCollapsed
          ? LineVisibility.ALWAYS
          : LineVisibility.WHEN_EXPANDED,
      });
      lineContainer.append(
        SnippetRenderer.renderSnippetLine(dom, tmpl, contentLineDetails)
      );

      messages.forEach(message => {
        lineContainer.append(SnippetRenderer.renderMessage(dom, tmpl, message));
      });
    }

    return lineContainer;
  }

  /**
   * @param {DOM} dom
   * @param {ParentNode} templateContext
   * @param {LH.Audit.Details.SnippetValue} details
   * @param {DetailsRenderer} detailsRenderer
   * @return {Element}
   */
  static render(dom, templateContext, details, detailsRenderer) {
    const tmpl = dom.cloneTemplate('#tmpl-lh-snippet', templateContext);
    const snippetEl = dom.find('.lh-snippet', tmpl);

    const header = SnippetRenderer.renderHeader(
      dom,
      tmpl,
      details,
      detailsRenderer,
      () => snippetEl.classList.toggle('lh-snippet--expanded')
    );
    const content = SnippetRenderer.renderSnippetContent(dom, tmpl, details);
    snippetEl.append(header, content);

    return snippetEl;
  }
}

// Allow Node require()'ing.
if (typeof module !== 'undefined' && module.exports) {
  module.exports = SnippetRenderer;
} else {
  self.SnippetRenderer = SnippetRenderer;
}
;
/**
 * @license Copyright 2017 Google Inc. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
 */
'use strict';

/* global URL */

/**
 * @fileoverview
 * @suppress {reportUnknownTypes}
 */

/**
 * Generate a filenamePrefix of hostname_YYYY-MM-DD_HH-MM-SS
 * Date/time uses the local timezone, however Node has unreliable ICU
 * support, so we must construct a YYYY-MM-DD date format manually. :/
 * @param {{finalUrl: string, fetchTime: string}} lhr
 * @return {string}
 */
function getFilenamePrefix(lhr) {
  const hostname = new URL(lhr.finalUrl).hostname;
  const date = (lhr.fetchTime && new Date(lhr.fetchTime)) || new Date();

  const timeStr = date.toLocaleTimeString('en-US', {hour12: false});
  const dateParts = date.toLocaleDateString('en-US', {
    year: 'numeric', month: '2-digit', day: '2-digit',
  }).split('/');
  // @ts-ignore - parts exists
  dateParts.unshift(dateParts.pop());
  const dateStr = dateParts.join('-');

  const filenamePrefix = `${hostname}_${dateStr}_${timeStr}`;
  // replace characters that are unfriendly to filenames
  return filenamePrefix.replace(/[/?<>\\:*|"]/g, '-');
}

// don't attempt to export in the browser.
if (typeof module !== 'undefined' && module.exports) {
  module.exports = {getFilenamePrefix};
}
;
/**
 * @license
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/**
 * Logs messages via a UI butter.
 */
class Logger {
  /**
   * @param {Element} element
   */
  constructor(element) {
    /** @type {Element} */
    this.el = element;
    this._id = undefined;
  }

  /**
   * Shows a butter bar.
   * @param {string} msg The message to show.
   * @param {boolean=} autoHide True to hide the message after a duration.
   *     Default is true.
   */
  log(msg, autoHide = true) {
    this._id && clearTimeout(this._id);

    this.el.textContent = msg;
    this.el.classList.add('show');
    if (autoHide) {
      this._id = setTimeout(_ => {
        this.el.classList.remove('show');
      }, 7000);
    }
  }

  /**
   * @param {string} msg
   */
  warn(msg) {
    this.log('Warning: ' + msg);
  }

  /**
   * @param {string} msg
   */
  error(msg) {
    this.log(msg);

    // Rethrow to make sure it's auditable as an error, but in a setTimeout so page
    // recovers gracefully and user can try loading a report again.
    setTimeout(_ => {
      throw new Error(msg);
    }, 0);
  }

  /**
   * Explicitly hides the butter bar.
   */
  hide() {
    this._id && clearTimeout(this._id);
    this.el.classList.remove('show');
  }
}

if (typeof module !== 'undefined' && module.exports) {
  module.exports = Logger;
}
;
/**
 * @license
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/* eslint-env browser */

/**
 * @fileoverview Adds tools button, print, and other dynamic functionality to
 * the report.
 */

/* globals getFilenamePrefix Util */

/**
 * @param {HTMLTableElement} tableEl
 * @return {Array<HTMLTableRowElement>}
 */
function getTableRows(tableEl) {
  return Array.from(tableEl.tBodies[0].rows);
}

class ReportUIFeatures {
  /**
   * @param {DOM} dom
   */
  constructor(dom) {
    /** @type {LH.Result} */
    this.json; // eslint-disable-line no-unused-expressions
    /** @type {DOM} */
    this._dom = dom;
    /** @type {Document} */
    this._document = this._dom.document();
    /** @type {ParentNode} */
    this._templateContext = this._dom.document();
    /** @type {DropDown} */
    this._dropDown = new DropDown(this._dom);
    /** @type {boolean} */
    this._copyAttempt = false;
    /** @type {HTMLElement} */
    this.topbarEl; // eslint-disable-line no-unused-expressions
    /** @type {HTMLElement} */
    this.scoreScaleEl; // eslint-disable-line no-unused-expressions
    /** @type {HTMLElement} */
    this.stickyHeaderEl; // eslint-disable-line no-unused-expressions
    /** @type {HTMLElement} */
    this.highlightEl; // eslint-disable-line no-unused-expressions

    this.onMediaQueryChange = this.onMediaQueryChange.bind(this);
    this.onCopy = this.onCopy.bind(this);
    this.onDropDownMenuClick = this.onDropDownMenuClick.bind(this);
    this.onKeyUp = this.onKeyUp.bind(this);
    this.collapseAllDetails = this.collapseAllDetails.bind(this);
    this.expandAllDetails = this.expandAllDetails.bind(this);
    this._toggleDarkTheme = this._toggleDarkTheme.bind(this);
    this._updateStickyHeaderOnScroll = this._updateStickyHeaderOnScroll.bind(this);
  }

  /**
   * Adds tools button, print, and other functionality to the report. The method
   * should be called whenever the report needs to be re-rendered.
   * @param {LH.Result} report
   */
  initFeatures(report) {
    this.json = report;

    this._setupMediaQueryListeners();
    this._dropDown.setup(this.onDropDownMenuClick);
    this._setupThirdPartyFilter();
    this._setUpCollapseDetailsAfterPrinting();
    this._resetUIState();
    this._document.addEventListener('keyup', this.onKeyUp);
    this._document.addEventListener('copy', this.onCopy);

    const topbarLogo = this._dom.find('.lh-topbar__logo', this._document);
    topbarLogo.addEventListener('click', () => this._toggleDarkTheme());

    let turnOffTheLights = false;
    // Do not query the system preferences for DevTools - DevTools should only apply dark theme
    // if dark is selected in the settings panel.
    if (!this._dom.isDevTools() && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      turnOffTheLights = true;
    }

    // Fireworks.
    const scoresAll100 = Object.values(report.categories).every(cat => cat.score === 1);
    const hasAllCoreCategories =
      Object.keys(report.categories).filter(id => !Util.isPluginCategory(id)).length >= 5;
    if (scoresAll100 && hasAllCoreCategories) {
      turnOffTheLights = true;
      this._enableFireworks();
    }

    if (turnOffTheLights) {
      this._toggleDarkTheme(true);
    }

    // There is only a sticky header when at least 2 categories are present.
    if (Object.keys(this.json.categories).length >= 2) {
      this._setupStickyHeaderElements();
      const containerEl = this._dom.find('.lh-container', this._document);
      const elToAddScrollListener = this._getScrollParent(containerEl);
      elToAddScrollListener.addEventListener('scroll', this._updateStickyHeaderOnScroll);

      // Use ResizeObserver where available.
      // TODO: there is an issue with incorrect position numbers and, as a result, performance
      // issues due to layout thrashing.
      // See https://github.com/GoogleChrome/lighthouse/pull/9023/files#r288822287 for details.
      // For now, limit to DevTools.
      if (this._dom.isDevTools()) {
        const resizeObserver = new window.ResizeObserver(this._updateStickyHeaderOnScroll);
        resizeObserver.observe(containerEl);
      } else {
        window.addEventListener('resize', this._updateStickyHeaderOnScroll);
      }
    }

    // Show the metric descriptions by default when there is an error.
    const hasMetricError = report.categories.performance && report.categories.performance.auditRefs
      .some(audit => Boolean(audit.group === 'metrics' && report.audits[audit.id].errorMessage));
    if (hasMetricError) {
      const toggleInputEl = /** @type {HTMLInputElement} */ (
        this._dom.find('.lh-metrics-toggle__input', this._document));
      toggleInputEl.checked = true;
    }
  }

  /**
   * Define a custom element for <templates> to be extracted from. For example:
   *     this.setTemplateContext(new DOMParser().parseFromString(htmlStr, 'text/html'))
   * @param {ParentNode} context
   */
  setTemplateContext(context) {
    this._templateContext = context;
  }

  /**
   * Finds the first scrollable ancestor of `element`. Falls back to the document.
   * @param {HTMLElement} element
   * @return {Node}
   */
  _getScrollParent(element) {
    const {overflowY} = window.getComputedStyle(element);
    const isScrollable = overflowY !== 'visible' && overflowY !== 'hidden';

    if (isScrollable) {
      return element;
    }

    if (element.parentElement) {
      return this._getScrollParent(element.parentElement);
    }

    return document;
  }

  _enableFireworks() {
    const scoresContainer = this._dom.find('.lh-scores-container', this._document);
    scoresContainer.classList.add('score100');
    scoresContainer.addEventListener('click', _ => {
      scoresContainer.classList.toggle('fireworks-paused');
    });
  }

  /**
   * Fires a custom DOM event on target.
   * @param {string} name Name of the event.
   * @param {Node=} target DOM node to fire the event on.
   * @param {*=} detail Custom data to include.
   */
  _fireEventOn(name, target = this._document, detail) {
    const event = new CustomEvent(name, detail ? {detail} : undefined);
    target.dispatchEvent(event);
  }

  _setupMediaQueryListeners() {
    const mediaQuery = self.matchMedia('(max-width: 500px)');
    mediaQuery.addListener(this.onMediaQueryChange);
    // Ensure the handler is called on init
    this.onMediaQueryChange(mediaQuery);
  }

  /**
   * Handle media query change events.
   * @param {MediaQueryList|MediaQueryListEvent} mql
   */
  onMediaQueryChange(mql) {
    const root = this._dom.find('.lh-root', this._document);
    root.classList.toggle('lh-narrow', mql.matches);
  }

  _setupThirdPartyFilter() {
    // Some audits should not display the third party filter option.
    const thirdPartyFilterAuditExclusions = [
      // This audit deals explicitly with third party resources.
      'uses-rel-preconnect',
    ];

    // Get all tables with a text url column.
    /** @type {Array<HTMLTableElement>} */
    const tables = Array.from(this._document.querySelectorAll('.lh-table'));
    const tablesWithUrls = tables
      .filter(el => el.querySelector('td.lh-table-column--url'))
      .filter(el => {
        const containingAudit = el.closest('.lh-audit');
        if (!containingAudit) throw new Error('.lh-table not within audit');
        return !thirdPartyFilterAuditExclusions.includes(containingAudit.id);
      });

    tablesWithUrls.forEach((tableEl, index) => {
      const urlItems = this._getUrlItems(tableEl);
      const thirdPartyRows = this._getThirdPartyRows(tableEl, urlItems, this.json.finalUrl);

      // create input box
      const filterTemplate = this._dom.cloneTemplate('#tmpl-lh-3p-filter', this._templateContext);
      const filterInput =
        /** @type {HTMLInputElement} */ (this._dom.find('input', filterTemplate));
      const id = `lh-3p-filter-label--${index}`;

      filterInput.id = id;
      filterInput.addEventListener('change', e => {
        // Remove rows from the dom and keep track of them to re-add on uncheck.
        // Why removing instead of hiding? To keep nth-child(even) background-colors working.
        if (e.target instanceof HTMLInputElement && !e.target.checked) {
          for (const row of thirdPartyRows.values()) {
            row.remove();
          }
        } else {
          // Add row elements back to original positions.
          for (const [position, row] of thirdPartyRows.entries()) {
            const childrenArr = getTableRows(tableEl);
            tableEl.tBodies[0].insertBefore(row, childrenArr[position]);
          }
        }
      });

      this._dom.find('label', filterTemplate).setAttribute('for', id);
      this._dom.find('.lh-3p-filter-count', filterTemplate).textContent =
          `${thirdPartyRows.size}`;
      this._dom.find('.lh-3p-ui-string', filterTemplate).textContent =
          Util.UIStrings.thirdPartyResourcesLabel;

      // If all or none of the rows are 3rd party, disable the checkbox.
      if (thirdPartyRows.size === urlItems.length || !thirdPartyRows.size) {
        filterInput.disabled = true;
        filterInput.checked = thirdPartyRows.size === urlItems.length;
      }

      // Finally, add checkbox to the DOM.
      if (!tableEl.parentNode) return; // Keep tsc happy.
      tableEl.parentNode.insertBefore(filterTemplate, tableEl);
    });
  }

  /**
   * From a table with URL entries, finds the rows containing third-party URLs
   * and returns a Map of those rows, mapping from row index to row Element.
   * @param {HTMLTableElement} el
   * @param {string} finalUrl
   * @param {Array<HTMLElement>} urlItems
   * @return {Map<number, HTMLTableRowElement>}
   */
  _getThirdPartyRows(el, urlItems, finalUrl) {
    const finalUrlRootDomain = Util.getRootDomain(finalUrl);

    /** @type {Map<number, HTMLTableRowElement>} */
    const thirdPartyRows = new Map();
    for (const urlItem of urlItems) {
      const datasetUrl = urlItem.dataset.url;
      if (!datasetUrl) continue;
      const isThirdParty = Util.getRootDomain(datasetUrl) !== finalUrlRootDomain;
      if (!isThirdParty) continue;

      const urlRowEl = urlItem.closest('tr');
      if (urlRowEl) {
        const rowPosition = getTableRows(el).indexOf(urlRowEl);
        thirdPartyRows.set(rowPosition, urlRowEl);
      }
    }

    return thirdPartyRows;
  }

  /**
   * From a table, finds and returns URL items.
   * @param {HTMLTableElement} tableEl
   * @return {Array<HTMLElement>}
   */
  _getUrlItems(tableEl) {
    return this._dom.findAll('.lh-text__url', tableEl);
  }

  _setupStickyHeaderElements() {
    this.topbarEl = this._dom.find('.lh-topbar', this._document);
    this.scoreScaleEl = this._dom.find('.lh-scorescale', this._document);
    this.stickyHeaderEl = this._dom.find('.lh-sticky-header', this._document);

    // Highlighter will be absolutely positioned at first gauge, then transformed on scroll.
    this.highlightEl = this._dom.createChildOf(this.stickyHeaderEl, 'div', 'lh-highlighter');
  }

  /**
   * Handle copy events.
   * @param {ClipboardEvent} e
   */
  onCopy(e) {
    // Only handle copy button presses (e.g. ignore the user copying page text).
    if (this._copyAttempt && e.clipboardData) {
      // We want to write our own data to the clipboard, not the user's text selection.
      e.preventDefault();
      e.clipboardData.setData('text/plain', JSON.stringify(this.json, null, 2));

      this._fireEventOn('lh-log', this._document, {
        cmd: 'log', msg: 'Report JSON copied to clipboard',
      });
    }

    this._copyAttempt = false;
  }

  /**
   * Copies the report JSON to the clipboard (if supported by the browser).
   */
  onCopyButtonClick() {
    this._fireEventOn('lh-analytics', this._document, {
      cmd: 'send',
      fields: {hitType: 'event', eventCategory: 'report', eventAction: 'copy'},
    });

    try {
      if (this._document.queryCommandSupported('copy')) {
        this._copyAttempt = true;

        // Note: In Safari 10.0.1, execCommand('copy') returns true if there's
        // a valid text selection on the page. See http://caniuse.com/#feat=clipboard.
        if (!this._document.execCommand('copy')) {
          this._copyAttempt = false; // Prevent event handler from seeing this as a copy attempt.

          this._fireEventOn('lh-log', this._document, {
            cmd: 'warn', msg: 'Your browser does not support copy to clipboard.',
          });
        }
      }
    } catch (/** @type {Error} */ e) {
      this._copyAttempt = false;
      this._fireEventOn('lh-log', this._document, {cmd: 'log', msg: e.message});
    }
  }

  /**
   * Resets the state of page before capturing the page for export.
   * When the user opens the exported HTML page, certain UI elements should
   * be in their closed state (not opened) and the templates should be unstamped.
   */
  _resetUIState() {
    this._dropDown.close();
    this._dom.resetTemplates();
  }

  /**
   * Handler for tool button.
   * @param {Event} e
   */
  onDropDownMenuClick(e) {
    e.preventDefault();

    const el = /** @type {?Element} */ (e.target);

    if (!el || !el.hasAttribute('data-action')) {
      return;
    }

    switch (el.getAttribute('data-action')) {
      case 'copy':
        this.onCopyButtonClick();
        break;
      case 'print-summary':
        this.collapseAllDetails();
        this._print();
        break;
      case 'print-expanded':
        this.expandAllDetails();
        this._print();
        break;
      case 'save-json': {
        const jsonStr = JSON.stringify(this.json, null, 2);
        this._saveFile(new Blob([jsonStr], {type: 'application/json'}));
        break;
      }
      case 'save-html': {
        const htmlStr = this.getReportHtml();
        try {
          this._saveFile(new Blob([htmlStr], {type: 'text/html'}));
        } catch (/** @type {Error} */ e) {
          this._fireEventOn('lh-log', this._document, {
            cmd: 'error', msg: 'Could not export as HTML. ' + e.message,
          });
        }
        break;
      }
      case 'open-viewer': {
        const viewerPath = '/lighthouse/viewer/';
        ReportUIFeatures.openTabAndSendJsonReport(this.json, viewerPath);
        break;
      }
      case 'save-gist': {
        this.saveAsGist();
        break;
      }
      case 'toggle-dark': {
        this._toggleDarkTheme();
        break;
      }
    }

    this._dropDown.close();
  }

  _print() {
    self.print();
  }

  /**
   * Keyup handler for the document.
   * @param {KeyboardEvent} e
   */
  onKeyUp(e) {
    // Ctrl+P - Expands audit details when user prints via keyboard shortcut.
    if ((e.ctrlKey || e.metaKey) && e.keyCode === 80) {
      this._dropDown.close();
    }
  }

  /**
   * Opens a new tab to the online viewer and sends the local page's JSON results
   * to the online viewer using postMessage.
   * @param {LH.Result} reportJson
   * @param {string} viewerPath
   * @protected
   */
  static openTabAndSendJsonReport(reportJson, viewerPath) {
    const VIEWER_ORIGIN = 'https://googlechrome.github.io';
    // Chrome doesn't allow us to immediately postMessage to a popup right
    // after it's created. Normally, we could also listen for the popup window's
    // load event, however it is cross-domain and won't fire. Instead, listen
    // for a message from the target app saying "I'm open".
    const json = reportJson;
    window.addEventListener('message', function msgHandler(messageEvent) {
      if (messageEvent.origin !== VIEWER_ORIGIN) {
        return;
      }
      if (popup && messageEvent.data.opened) {
        popup.postMessage({lhresults: json}, VIEWER_ORIGIN);
        window.removeEventListener('message', msgHandler);
      }
    });

    // The popup's window.name is keyed by version+url+fetchTime, so we reuse/select tabs correctly
    // @ts-ignore - If this is a v2 LHR, use old `generatedTime`.
    const fallbackFetchTime = /** @type {string} */ (json.generatedTime);
    const fetchTime = json.fetchTime || fallbackFetchTime;
    const windowName = `${json.lighthouseVersion}-${json.requestedUrl}-${fetchTime}`;
    const popup = window.open(`${VIEWER_ORIGIN}${viewerPath}`, windowName);
  }

  /**
   * Expands all audit `<details>`.
   * Ideally, a print stylesheet could take care of this, but CSS has no way to
   * open a `<details>` element.
   */
  expandAllDetails() {
    const details = /** @type {Array<HTMLDetailsElement>} */ (this._dom.findAll(
        '.lh-categories details', this._document));
    details.map(detail => detail.open = true);
  }

  /**
   * Collapses all audit `<details>`.
   * open a `<details>` element.
   */
  collapseAllDetails() {
    const details = /** @type {Array<HTMLDetailsElement>} */ (this._dom.findAll(
        '.lh-categories details', this._document));
    details.map(detail => detail.open = false);
  }

  /**
   * Sets up listeners to collapse audit `<details>` when the user closes the
   * print dialog, all `<details>` are collapsed.
   */
  _setUpCollapseDetailsAfterPrinting() {
    // FF and IE implement these old events.
    if ('onbeforeprint' in self) {
      self.addEventListener('afterprint', this.collapseAllDetails);
    } else {
      const win = /** @type {Window} */ (self);
      // Note: FF implements both window.onbeforeprint and media listeners. However,
      // it doesn't matchMedia doesn't fire when matching 'print'.
      win.matchMedia('print').addListener(mql => {
        if (mql.matches) {
          this.expandAllDetails();
        } else {
          this.collapseAllDetails();
        }
      });
    }
  }

  /**
   * Returns the html that recreates this report.
   * @return {string}
   * @protected
   */
  getReportHtml() {
    this._resetUIState();
    return this._document.documentElement.outerHTML;
  }

  /**
   * Save json as a gist. Unimplemented in base UI features.
   * @protected
   */
  saveAsGist() {
    throw new Error('Cannot save as gist from base report');
  }

  /**
   * Downloads a file (blob) using a[download].
   * @param {Blob|File} blob The file to save.
   * @private
   */
  _saveFile(blob) {
    const filename = getFilenamePrefix({
      finalUrl: this.json.finalUrl,
      fetchTime: this.json.fetchTime,
    });

    const ext = blob.type.match('json') ? '.json' : '.html';
    const href = URL.createObjectURL(blob);

    const a = this._dom.createElement('a');
    a.download = `${filename}${ext}`;
    a.href = href;
    this._document.body.appendChild(a); // Firefox requires anchor to be in the DOM.
    a.click();

    // cleanup.
    this._document.body.removeChild(a);
    setTimeout(_ => URL.revokeObjectURL(href), 500);
  }

  /**
   * @private
   * @param {boolean} [force]
   */
  _toggleDarkTheme(force) {
    const el = this._dom.find('.lh-vars', this._document);
    // This seems unnecessary, but in DevTools, passing "undefined" as the second
    // parameter acts like passing "false".
    // https://github.com/ChromeDevTools/devtools-frontend/blob/dd6a6d4153647c2a4203c327c595692c5e0a4256/front_end/dom_extension/DOMExtension.js#L809-L819
    if (typeof force === 'undefined') {
      el.classList.toggle('dark');
    } else {
      el.classList.toggle('dark', force);
    }
  }

  _updateStickyHeaderOnScroll() {
    // Show sticky header when the score scale begins to go underneath the topbar.
    const topbarBottom = this.topbarEl.getBoundingClientRect().bottom;
    const scoreScaleTop = this.scoreScaleEl.getBoundingClientRect().top;
    const showStickyHeader = topbarBottom >= scoreScaleTop;

    // Highlight mini gauge when section is in view.
    // In view = the last category that starts above the middle of the window.
    const categoryEls = Array.from(this._document.querySelectorAll('.lh-category'));
    const categoriesAboveTheMiddle =
      categoryEls.filter(el => el.getBoundingClientRect().top - window.innerHeight / 2 < 0);
    const highlightIndex =
      categoriesAboveTheMiddle.length > 0 ? categoriesAboveTheMiddle.length - 1 : 0;

    // Category order matches gauge order in sticky header.
    const gaugeWrapperEls = this.stickyHeaderEl.querySelectorAll('.lh-gauge__wrapper');
    const gaugeToHighlight = gaugeWrapperEls[highlightIndex];
    const origin = gaugeWrapperEls[0].getBoundingClientRect().left;
    const offset = gaugeToHighlight.getBoundingClientRect().left - origin;

    // Mutate at end to avoid layout thrashing.
    this.highlightEl.style.transform = `translate(${offset}px)`;
    this.stickyHeaderEl.classList.toggle('lh-sticky-header--visible', showStickyHeader);
  }
}

class DropDown {
  /**
   * @param {DOM} dom
   */
  constructor(dom) {
    /** @type {DOM} */
    this._dom = dom;
    /** @type {HTMLElement} */
    this._toggleEl; // eslint-disable-line no-unused-expressions
    /** @type {HTMLElement} */
    this._menuEl; // eslint-disable-line no-unused-expressions

    this.onDocumentKeyDown = this.onDocumentKeyDown.bind(this);
    this.onToggleClick = this.onToggleClick.bind(this);
    this.onToggleKeydown = this.onToggleKeydown.bind(this);
    this.onMenuKeydown = this.onMenuKeydown.bind(this);

    this._getNextMenuItem = this._getNextMenuItem.bind(this);
    this._getNextSelectableNode = this._getNextSelectableNode.bind(this);
    this._getPreviousMenuItem = this._getPreviousMenuItem.bind(this);
  }

  /**
   * @param {function(MouseEvent): any} menuClickHandler
   */
  setup(menuClickHandler) {
    this._toggleEl = this._dom.find('.lh-tools__button', this._dom.document());
    this._toggleEl.addEventListener('click', this.onToggleClick);
    this._toggleEl.addEventListener('keydown', this.onToggleKeydown);

    this._menuEl = this._dom.find('.lh-tools__dropdown', this._dom.document());
    this._menuEl.addEventListener('keydown', this.onMenuKeydown);
    this._menuEl.addEventListener('click', menuClickHandler);
  }

  close() {
    this._toggleEl.classList.remove('active');
    this._toggleEl.setAttribute('aria-expanded', 'false');
    if (this._menuEl.contains(this._dom.document().activeElement)) {
      // Refocus on the tools button if the drop down last had focus
      this._toggleEl.focus();
    }
    this._dom.document().removeEventListener('keydown', this.onDocumentKeyDown);
  }

  /**
   * @param {HTMLElement} firstFocusElement
   */
  open(firstFocusElement) {
    if (this._toggleEl.classList.contains('active')) {
      // If the drop down is already open focus on the element
      firstFocusElement.focus();
    } else {
      // Wait for drop down transition to complete so options are focusable.
      this._menuEl.addEventListener('transitionend', () => {
        firstFocusElement.focus();
      }, {once: true});
    }

    this._toggleEl.classList.add('active');
    this._toggleEl.setAttribute('aria-expanded', 'true');
    this._dom.document().addEventListener('keydown', this.onDocumentKeyDown);
  }

  /**
   * Click handler for tools button.
   * @param {Event} e
   */
  onToggleClick(e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    if (this._toggleEl.classList.contains('active')) {
      this.close();
    } else {
      this.open(this._getNextMenuItem());
    }
  }

  /**
   * Handler for tool button.
   * @param {KeyboardEvent} e
   */
  onToggleKeydown(e) {
    switch (e.code) {
      case 'ArrowUp':
        e.preventDefault();
        this.open(this._getPreviousMenuItem());
        break;
      case 'ArrowDown':
      case 'Enter':
      case ' ':
        e.preventDefault();
        this.open(this._getNextMenuItem());
        break;
      default:
       // no op
    }
  }

  /**
   * Handler for tool DropDown.
   * @param {KeyboardEvent} e
   */
  onMenuKeydown(e) {
    const el = /** @type {?HTMLElement} */ (e.target);

    switch (e.code) {
      case 'ArrowUp':
        e.preventDefault();
        this._getPreviousMenuItem(el).focus();
        break;
      case 'ArrowDown':
        e.preventDefault();
        this._getNextMenuItem(el).focus();
        break;
      case 'Home':
        e.preventDefault();
        this._getNextMenuItem().focus();
        break;
      case 'End':
        e.preventDefault();
        this._getPreviousMenuItem().focus();
        break;
      default:
       // no op
    }
  }

  /**
   * Keydown handler for the document.
   * @param {KeyboardEvent} e
   */
  onDocumentKeyDown(e) {
    if (e.keyCode === 27) { // ESC
      this.close();
    }
  }

  /**
   * @param {Array<Node>} allNodes
   * @param {?Node=} startNode
   * @returns {Node}
   */
  _getNextSelectableNode(allNodes, startNode) {
    const nodes = allNodes.filter((node) => {
      if (!(node instanceof HTMLElement)) {
        return false;
      }

      // 'Save as Gist' option may be disabled.
      if (node.hasAttribute('disabled')) {
        return false;
      }

      // 'Save as Gist' option may have display none.
      if (window.getComputedStyle(node).display === 'none') {
        return false;
      }

      return true;
    });

    let nextIndex = startNode ? (nodes.indexOf(startNode) + 1) : 0;
    if (nextIndex >= nodes.length) {
      nextIndex = 0;
    }

    return nodes[nextIndex];
  }

  /**
   * @param {?Element=} startEl
   * @returns {HTMLElement}
   */
  _getNextMenuItem(startEl) {
    const nodes = Array.from(this._menuEl.childNodes);
    return /** @type {HTMLElement} */ (this._getNextSelectableNode(nodes, startEl));
  }

  /**
   * @param {?Element=} startEl
   * @returns {HTMLElement}
   */
  _getPreviousMenuItem(startEl) {
    const nodes = Array.from(this._menuEl.childNodes).reverse();
    return /** @type {HTMLElement} */ (this._getNextSelectableNode(nodes, startEl));
  }
}

if (typeof module !== 'undefined' && module.exports) {
  module.exports = ReportUIFeatures;
} else {
  self.ReportUIFeatures = ReportUIFeatures;
}
;
/**
 * @license
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/* globals self, Util */

/** @typedef {import('./dom.js')} DOM */
/** @typedef {import('./report-renderer.js')} ReportRenderer */
/** @typedef {import('./details-renderer.js')} DetailsRenderer */
/** @typedef {import('./util.js')} Util */
/** @typedef {'failed'|'warning'|'manual'|'passed'|'notApplicable'} TopLevelClumpId */

class CategoryRenderer {
  /**
   * @param {DOM} dom
   * @param {DetailsRenderer} detailsRenderer
   */
  constructor(dom, detailsRenderer) {
    /** @type {DOM} */
    this.dom = dom;
    /** @type {DetailsRenderer} */
    this.detailsRenderer = detailsRenderer;
    /** @type {ParentNode} */
    this.templateContext = this.dom.document();

    this.detailsRenderer.setTemplateContext(this.templateContext);
  }

  /**
   * Display info per top-level clump. Define on class to avoid race with Util init.
   */
  get _clumpTitles() {
    return {
      warning: Util.UIStrings.warningAuditsGroupTitle,
      manual: Util.UIStrings.manualAuditsGroupTitle,
      passed: Util.UIStrings.passedAuditsGroupTitle,
      notApplicable: Util.UIStrings.notApplicableAuditsGroupTitle,
    };
  }

  /**
   * @param {LH.ReportResult.AuditRef} audit
   * @return {Element}
   */
  renderAudit(audit) {
    const tmpl = this.dom.cloneTemplate('#tmpl-lh-audit', this.templateContext);
    return this.populateAuditValues(audit, tmpl);
  }

  /**
   * Populate an DOM tree with audit details. Used by renderAudit and renderOpportunity
   * @param {LH.ReportResult.AuditRef} audit
   * @param {DocumentFragment} tmpl
   * @return {Element}
   */
  populateAuditValues(audit, tmpl) {
    const auditEl = this.dom.find('.lh-audit', tmpl);
    auditEl.id = audit.result.id;
    const scoreDisplayMode = audit.result.scoreDisplayMode;

    if (audit.result.displayValue) {
      this.dom.find('.lh-audit__display-text', auditEl).textContent = audit.result.displayValue;
    }

    const titleEl = this.dom.find('.lh-audit__title', auditEl);
    titleEl.appendChild(this.dom.convertMarkdownCodeSnippets(audit.result.title));
    this.dom.find('.lh-audit__description', auditEl)
        .appendChild(this.dom.convertMarkdownLinkSnippets(audit.result.description));

    if (audit.stackPacks) {
      audit.stackPacks.forEach(pack => {
        const packElm = this.dom.createElement('div');
        packElm.classList.add('lh-audit__stackpack');

        const packElmImg = this.dom.createElement('img');
        packElmImg.classList.add('lh-audit__stackpack__img');
        packElmImg.src = pack.iconDataURL;
        packElmImg.alt = pack.title;
        packElm.appendChild(packElmImg);

        packElm.appendChild(this.dom.convertMarkdownLinkSnippets(pack.description));

        this.dom.find('.lh-audit__stackpacks', auditEl)
          .appendChild(packElm);
      });
    }

    const header = /** @type {HTMLDetailsElement} */ (this.dom.find('details', auditEl));
    if (audit.result.details) {
      const elem = this.detailsRenderer.render(audit.result.details);
      if (elem) {
        elem.classList.add('lh-details');
        header.appendChild(elem);
      }
    }

    // Add chevron SVG to the end of the summary
    this.dom.find('.lh-chevron-container', auditEl).appendChild(this._createChevron());
    this._setRatingClass(auditEl, audit.result.score, scoreDisplayMode);

    if (audit.result.scoreDisplayMode === 'error') {
      auditEl.classList.add(`lh-audit--error`);
      const textEl = this.dom.find('.lh-audit__display-text', auditEl);
      textEl.textContent = Util.UIStrings.errorLabel;
      textEl.classList.add('tooltip-boundary');
      const tooltip = this.dom.createChildOf(textEl, 'div', 'tooltip tooltip--error');
      tooltip.textContent = audit.result.errorMessage || Util.UIStrings.errorMissingAuditInfo;
    } else if (audit.result.explanation) {
      const explEl = this.dom.createChildOf(titleEl, 'div', 'lh-audit-explanation');
      explEl.textContent = audit.result.explanation;
    }
    const warnings = audit.result.warnings;
    if (!warnings || warnings.length === 0) return auditEl;

    // Add list of warnings or singular warning
    const warningsEl = this.dom.createChildOf(titleEl, 'div', 'lh-warnings');
    this.dom.createChildOf(warningsEl, 'span').textContent = Util.UIStrings.warningHeader;
    if (warnings.length === 1) {
      warningsEl.appendChild(this.dom.document().createTextNode(warnings.join('')));
    } else {
      const warningsUl = this.dom.createChildOf(warningsEl, 'ul');
      for (const warning of warnings) {
        const item = this.dom.createChildOf(warningsUl, 'li');
        item.textContent = warning;
      }
    }
    return auditEl;
  }

  /**
   * @return {HTMLElement}
   */
  _createChevron() {
    const chevronTmpl = this.dom.cloneTemplate('#tmpl-lh-chevron', this.templateContext);
    const chevronEl = this.dom.find('.lh-chevron', chevronTmpl);
    return chevronEl;
  }

  /**
   * @param {Element} element DOM node to populate with values.
   * @param {number|null} score
   * @param {string} scoreDisplayMode
   * @return {Element}
   */
  _setRatingClass(element, score, scoreDisplayMode) {
    const rating = Util.calculateRating(score, scoreDisplayMode);
    element.classList.add(`lh-audit--${scoreDisplayMode.toLowerCase()}`);
    if (scoreDisplayMode !== 'informative') {
      element.classList.add(`lh-audit--${rating}`);
    }
    return element;
  }

  /**
   * @param {LH.ReportResult.Category} category
   * @param {Record<string, LH.Result.ReportGroup>} groupDefinitions
   * @return {Element}
   */
  renderCategoryHeader(category, groupDefinitions) {
    const tmpl = this.dom.cloneTemplate('#tmpl-lh-category-header', this.templateContext);

    const gaugeContainerEl = this.dom.find('.lh-score__gauge', tmpl);
    const gaugeEl = this.renderScoreGauge(category, groupDefinitions);
    gaugeContainerEl.appendChild(gaugeEl);

    if (category.description) {
      const descEl = this.dom.convertMarkdownLinkSnippets(category.description);
      this.dom.find('.lh-category-header__description', tmpl).appendChild(descEl);
    }

    return /** @type {Element} */ (tmpl.firstElementChild);
  }

  /**
   * Renders the group container for a group of audits. Individual audit elements can be added
   * directly to the returned element.
   * @param {LH.Result.ReportGroup} group
   * @return {Element}
   */
  renderAuditGroup(group) {
    const groupEl = this.dom.createElement('div', 'lh-audit-group');

    const auditGroupHeader = this.dom.createElement('div', 'lh-audit-group__header');

    this.dom.createChildOf(auditGroupHeader, 'span', 'lh-audit-group__title')
      .textContent = group.title;
    if (group.description) {
      const descriptionEl = this.dom.convertMarkdownLinkSnippets(group.description);
      descriptionEl.classList.add('lh-audit-group__description');
      auditGroupHeader.appendChild(descriptionEl);
    }
    groupEl.appendChild(auditGroupHeader);

    return groupEl;
  }

  /**
   * Takes an array of auditRefs, groups them if requested, then returns an
   * array of audit and audit-group elements.
   * @param {Array<LH.ReportResult.AuditRef>} auditRefs
   * @param {Object<string, LH.Result.ReportGroup>} groupDefinitions
   * @return {Array<Element>}
   */
  _renderGroupedAudits(auditRefs, groupDefinitions) {
    // Audits grouped by their group (or under notAGroup).
    /** @type {Map<string, Array<LH.ReportResult.AuditRef>>} */
    const grouped = new Map();

    // Add audits without a group first so they will appear first.
    const notAGroup = 'NotAGroup';
    grouped.set(notAGroup, []);

    for (const auditRef of auditRefs) {
      const groupId = auditRef.group || notAGroup;
      const groupAuditRefs = grouped.get(groupId) || [];
      groupAuditRefs.push(auditRef);
      grouped.set(groupId, groupAuditRefs);
    }

    /** @type {Array<Element>} */
    const auditElements = [];

    for (const [groupId, groupAuditRefs] of grouped) {
      if (groupId === notAGroup) {
        // Push not-grouped audits individually.
        for (const auditRef of groupAuditRefs) {
          auditElements.push(this.renderAudit(auditRef));
        }
        continue;
      }

      // Push grouped audits as a group.
      const groupDef = groupDefinitions[groupId];
      const auditGroupElem = this.renderAuditGroup(groupDef);
      for (const auditRef of groupAuditRefs) {
        auditGroupElem.appendChild(this.renderAudit(auditRef));
      }
      auditGroupElem.classList.add(`lh-audit-group--${groupId}`);
      auditElements.push(auditGroupElem);
    }

    return auditElements;
  }

  /**
   * Take a set of audits, group them if they have groups, then render in a top-level
   * clump that can't be expanded/collapsed.
   * @param {Array<LH.ReportResult.AuditRef>} auditRefs
   * @param {Object<string, LH.Result.ReportGroup>} groupDefinitions
   * @return {Element}
   */
  renderUnexpandableClump(auditRefs, groupDefinitions) {
    const clumpElement = this.dom.createElement('div');
    const elements = this._renderGroupedAudits(auditRefs, groupDefinitions);
    elements.forEach(elem => clumpElement.appendChild(elem));
    return clumpElement;
  }

  /**
   * Take a set of audits and render in a top-level, expandable clump that starts
   * in a collapsed state.
   * @param {Exclude<TopLevelClumpId, 'failed'>} clumpId
   * @param {{auditRefs: Array<LH.ReportResult.AuditRef>, description?: string}} clumpOpts
   * @return {Element}
   */
  renderClump(clumpId, {auditRefs, description}) {
    const clumpTmpl = this.dom.cloneTemplate('#tmpl-lh-clump', this.templateContext);
    const clumpElement = this.dom.find('.lh-clump', clumpTmpl);

    if (clumpId === 'warning') {
      clumpElement.setAttribute('open', '');
    }

    const summaryInnerEl = this.dom.find('.lh-audit-group__summary', clumpElement);
    const chevronEl = summaryInnerEl.appendChild(this._createChevron());
    chevronEl.title = Util.UIStrings.auditGroupExpandTooltip;

    const headerEl = this.dom.find('.lh-audit-group__header', clumpElement);
    const title = this._clumpTitles[clumpId];
    this.dom.find('.lh-audit-group__title', headerEl).textContent = title;
    if (description) {
      const descriptionEl = this.dom.convertMarkdownLinkSnippets(description);
      descriptionEl.classList.add('lh-audit-group__description');
      headerEl.appendChild(descriptionEl);
    }

    const itemCountEl = this.dom.find('.lh-audit-group__itemcount', clumpElement);
    itemCountEl.textContent = `(${auditRefs.length})`;

    // Add all audit results to the clump.
    const auditElements = auditRefs.map(this.renderAudit.bind(this));
    clumpElement.append(...auditElements);

    clumpElement.classList.add(`lh-clump--${clumpId.toLowerCase()}`);
    return clumpElement;
  }

  /**
   * @param {ParentNode} context
   */
  setTemplateContext(context) {
    this.templateContext = context;
    this.detailsRenderer.setTemplateContext(context);
  }

  /**
   * @param {LH.ReportResult.Category} category
   * @param {Record<string, LH.Result.ReportGroup>} groupDefinitions
   * @return {DocumentFragment}
   */
  renderScoreGauge(category, groupDefinitions) { // eslint-disable-line no-unused-vars
    const tmpl = this.dom.cloneTemplate('#tmpl-lh-gauge', this.templateContext);
    const wrapper = /** @type {HTMLAnchorElement} */ (this.dom.find('.lh-gauge__wrapper', tmpl));
    wrapper.href = `#${category.id}`;
    wrapper.classList.add(`lh-gauge__wrapper--${Util.calculateRating(category.score)}`);

    if (Util.isPluginCategory(category.id)) {
      wrapper.classList.add('lh-gauge__wrapper--plugin');
    }

    // Cast `null` to 0
    const numericScore = Number(category.score);
    const gauge = this.dom.find('.lh-gauge', tmpl);
    // 352 is ~= 2 * Math.PI * gauge radius (56)
    // https://codepen.io/xgad/post/svg-radial-progress-meters
    // score of 50: `stroke-dasharray: 176 352`;
    /** @type {?SVGCircleElement} */
    const gaugeArc = gauge.querySelector('.lh-gauge-arc');
    if (gaugeArc) {
      gaugeArc.style.strokeDasharray = `${numericScore * 352} 352`;
    }

    const scoreOutOf100 = Math.round(numericScore * 100);
    const percentageEl = this.dom.find('.lh-gauge__percentage', tmpl);
    percentageEl.textContent = scoreOutOf100.toString();
    if (category.score === null) {
      percentageEl.textContent = '?';
      percentageEl.title = Util.UIStrings.errorLabel;
    }

    this.dom.find('.lh-gauge__label', tmpl).textContent = category.title;
    return tmpl;
  }

  /**
   * @param {LH.ReportResult.AuditRef} audit
   * @return {boolean}
   */
  _auditHasWarning(audit) {
    return Boolean(audit.result.warnings && audit.result.warnings.length);
  }

  /**
   * Returns the id of the top-level clump to put this audit in.
   * @param {LH.ReportResult.AuditRef} auditRef
   * @return {TopLevelClumpId}
   */
  _getClumpIdForAuditRef(auditRef) {
    const scoreDisplayMode = auditRef.result.scoreDisplayMode;
    if (scoreDisplayMode === 'manual' || scoreDisplayMode === 'notApplicable') {
      return scoreDisplayMode;
    }

    if (Util.showAsPassed(auditRef.result)) {
      if (this._auditHasWarning(auditRef)) {
        return 'warning';
      } else {
        return 'passed';
      }
    } else {
      return 'failed';
    }
  }

  /**
   * Renders a set of top level sections (clumps), under a status of failed, warning,
   * manual, passed, or notApplicable. The result ends up something like:
   *
   * failed clump
   *   ├── audit 1 (w/o group)
   *   ├── audit 2 (w/o group)
   *   ├── audit group
   *   |  ├── audit 3
   *   |  └── audit 4
   *   └── audit group
   *      ├── audit 5
   *      └── audit 6
   * other clump (e.g. 'manual')
   *   ├── audit 1
   *   ├── audit 2
   *   ├── …
   *   ⋮
   * @param {LH.ReportResult.Category} category
   * @param {Object<string, LH.Result.ReportGroup>} [groupDefinitions]
   * @return {Element}
   */
  render(category, groupDefinitions = {}) {
    const element = this.dom.createElement('div', 'lh-category');
    this.createPermalinkSpan(element, category.id);
    element.appendChild(this.renderCategoryHeader(category, groupDefinitions));

    // Top level clumps for audits, in order they will appear in the report.
    /** @type {Map<TopLevelClumpId, Array<LH.ReportResult.AuditRef>>} */
    const clumps = new Map();
    clumps.set('failed', []);
    clumps.set('warning', []);
    clumps.set('manual', []);
    clumps.set('passed', []);
    clumps.set('notApplicable', []);

    // Sort audits into clumps.
    for (const auditRef of category.auditRefs) {
      const clumpId = this._getClumpIdForAuditRef(auditRef);
      const clump = /** @type {Array<LH.ReportResult.AuditRef>} */ (clumps.get(clumpId)); // already defined
      clump.push(auditRef);
      clumps.set(clumpId, clump);
    }

    // Render each clump.
    for (const [clumpId, auditRefs] of clumps) {
      if (auditRefs.length === 0) continue;

      if (clumpId === 'failed') {
        const clumpElem = this.renderUnexpandableClump(auditRefs, groupDefinitions);
        clumpElem.classList.add(`lh-clump--failed`);
        element.appendChild(clumpElem);
        continue;
      }

      const description = clumpId === 'manual' ? category.manualDescription : undefined;
      const clumpElem = this.renderClump(clumpId, {auditRefs, description});
      element.appendChild(clumpElem);
    }

    return element;
  }

  /**
   * Create a non-semantic span used for hash navigation of categories
   * @param {Element} element
   * @param {string} id
   */
  createPermalinkSpan(element, id) {
    const permalinkEl = this.dom.createChildOf(element, 'span', 'lh-permalink');
    permalinkEl.id = id;
  }
}

if (typeof module !== 'undefined' && module.exports) {
  module.exports = CategoryRenderer;
} else {
  self.CategoryRenderer = CategoryRenderer;
}
;
/**
 * @license
 * Copyright 2018 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/* globals self, Util, CategoryRenderer */

/** @typedef {import('./dom.js')} DOM */

class PerformanceCategoryRenderer extends CategoryRenderer {
  /**
   * @param {LH.ReportResult.AuditRef} audit
   * @return {Element}
   */
  _renderMetric(audit) {
    const tmpl = this.dom.cloneTemplate('#tmpl-lh-metric', this.templateContext);
    const element = this.dom.find('.lh-metric', tmpl);
    element.id = audit.result.id;
    const rating = Util.calculateRating(audit.result.score, audit.result.scoreDisplayMode);
    element.classList.add(`lh-metric--${rating}`);

    const titleEl = this.dom.find('.lh-metric__title', tmpl);
    titleEl.textContent = audit.result.title;

    const valueEl = this.dom.find('.lh-metric__value', tmpl);
    valueEl.textContent = audit.result.displayValue || '';

    const descriptionEl = this.dom.find('.lh-metric__description', tmpl);
    descriptionEl.appendChild(this.dom.convertMarkdownLinkSnippets(audit.result.description));

    if (audit.result.scoreDisplayMode === 'error') {
      descriptionEl.textContent = '';
      valueEl.textContent = 'Error!';
      const tooltip = this.dom.createChildOf(descriptionEl, 'span');
      tooltip.textContent = audit.result.errorMessage || 'Report error: no metric information';
    }

    return element;
  }

  /**
   * @param {LH.ReportResult.AuditRef} audit
   * @param {number} scale
   * @return {Element}
   */
  _renderOpportunity(audit, scale) {
    const oppTmpl = this.dom.cloneTemplate('#tmpl-lh-opportunity', this.templateContext);
    const element = this.populateAuditValues(audit, oppTmpl);
    element.id = audit.result.id;

    if (!audit.result.details || audit.result.scoreDisplayMode === 'error') {
      return element;
    }
    const details = audit.result.details;
    if (details.type !== 'opportunity') {
      return element;
    }

    // Overwrite the displayValue with opportunity's wastedMs
    const displayEl = this.dom.find('.lh-audit__display-text', element);
    const sparklineWidthPct = `${details.overallSavingsMs / scale * 100}%`;
    this.dom.find('.lh-sparkline__bar', element).style.width = sparklineWidthPct;
    displayEl.textContent = Util.formatSeconds(details.overallSavingsMs, 0.01);

    // Set [title] tooltips
    if (audit.result.displayValue) {
      const displayValue = audit.result.displayValue;
      this.dom.find('.lh-load-opportunity__sparkline', element).title = displayValue;
      displayEl.title = displayValue;
    }

    return element;
  }

  /**
   * Get an audit's wastedMs to sort the opportunity by, and scale the sparkline width
   * Opportunities with an error won't have a details object, so MIN_VALUE is returned to keep any
   * erroring opportunities last in sort order.
   * @param {LH.ReportResult.AuditRef} audit
   * @return {number}
   */
  _getWastedMs(audit) {
    if (audit.result.details && audit.result.details.type === 'opportunity') {
      const details = audit.result.details;
      if (typeof details.overallSavingsMs !== 'number') {
        throw new Error('non-opportunity details passed to _getWastedMs');
      }
      return details.overallSavingsMs;
    } else {
      return Number.MIN_VALUE;
    }
  }

  /**
   * @param {LH.ReportResult.Category} category
   * @param {Object<string, LH.Result.ReportGroup>} groups
   * @param {'PSI'=} environment 'PSI' and undefined are the only valid values
   * @return {Element}
   * @override
   */
  render(category, groups, environment) {
    const element = this.dom.createElement('div', 'lh-category');
    if (environment === 'PSI') {
      const gaugeEl = this.dom.createElement('div', 'lh-score__gauge');
      gaugeEl.appendChild(this.renderScoreGauge(category, groups));
      element.appendChild(gaugeEl);
    } else {
      this.createPermalinkSpan(element, category.id);
      element.appendChild(this.renderCategoryHeader(category, groups));
    }

    // Metrics.
    const metricAuditsEl = this.renderAuditGroup(groups.metrics);

    // Metric descriptions toggle.
    const toggleTmpl = this.dom.cloneTemplate('#tmpl-lh-metrics-toggle', this.templateContext);
    const _toggleEl = this.dom.find('.lh-metrics-toggle', toggleTmpl);
    metricAuditsEl.append(..._toggleEl.childNodes);

    const metricAudits = category.auditRefs.filter(audit => audit.group === 'metrics');
    const keyMetrics = metricAudits.filter(a => a.weight >= 3);
    const otherMetrics = metricAudits.filter(a => a.weight < 3);

    const metricsBoxesEl = this.dom.createChildOf(metricAuditsEl, 'div', 'lh-columns');
    const metricsColumn1El = this.dom.createChildOf(metricsBoxesEl, 'div', 'lh-column');
    const metricsColumn2El = this.dom.createChildOf(metricsBoxesEl, 'div', 'lh-column');

    keyMetrics.forEach(item => {
      metricsColumn1El.appendChild(this._renderMetric(item));
    });
    otherMetrics.forEach(item => {
      metricsColumn2El.appendChild(this._renderMetric(item));
    });

    // 'Values are estimated and may vary' is used as the category description for PSI
    if (environment !== 'PSI') {
      const estValuesEl = this.dom.createChildOf(metricAuditsEl, 'div', 'lh-metrics__disclaimer');
      const disclaimerEl = this.dom.convertMarkdownLinkSnippets(Util.UIStrings.varianceDisclaimer);
      estValuesEl.appendChild(disclaimerEl);
    }

    metricAuditsEl.classList.add('lh-audit-group--metrics');
    element.appendChild(metricAuditsEl);

    // Filmstrip
    const timelineEl = this.dom.createChildOf(element, 'div', 'lh-filmstrip-container');
    const thumbnailAudit = category.auditRefs.find(audit => audit.id === 'screenshot-thumbnails');
    const thumbnailResult = thumbnailAudit && thumbnailAudit.result;
    if (thumbnailResult && thumbnailResult.details) {
      timelineEl.id = thumbnailResult.id;
      const filmstripEl = this.detailsRenderer.render(thumbnailResult.details);
      filmstripEl && timelineEl.appendChild(filmstripEl);
    }

    // Budgets
    const budgetAudit = category.auditRefs.find(audit => audit.id === 'performance-budget');
    if (budgetAudit && budgetAudit.result.details) {
      const table = this.detailsRenderer.render(budgetAudit.result.details);
      if (table) {
        table.id = budgetAudit.id;
        table.classList.add('lh-audit');
        const budgetsGroupEl = this.renderAuditGroup(groups.budgets);
        budgetsGroupEl.appendChild(table);
        budgetsGroupEl.classList.add('lh-audit-group--budgets');
        element.appendChild(budgetsGroupEl);
      }
    }

    // Opportunities
    const opportunityAudits = category.auditRefs
        .filter(audit => audit.group === 'load-opportunities' && !Util.showAsPassed(audit.result))
        .sort((auditA, auditB) => this._getWastedMs(auditB) - this._getWastedMs(auditA));

    if (opportunityAudits.length) {
      // Scale the sparklines relative to savings, minimum 2s to not overstate small savings
      const minimumScale = 2000;
      const wastedMsValues = opportunityAudits.map(audit => this._getWastedMs(audit));
      const maxWaste = Math.max(...wastedMsValues);
      const scale = Math.max(Math.ceil(maxWaste / 1000) * 1000, minimumScale);
      const groupEl = this.renderAuditGroup(groups['load-opportunities']);
      const tmpl = this.dom.cloneTemplate('#tmpl-lh-opportunity-header', this.templateContext);

      this.dom.find('.lh-load-opportunity__col--one', tmpl).textContent =
        Util.UIStrings.opportunityResourceColumnLabel;
      this.dom.find('.lh-load-opportunity__col--two', tmpl).textContent =
        Util.UIStrings.opportunitySavingsColumnLabel;

      const headerEl = this.dom.find('.lh-load-opportunity__header', tmpl);
      groupEl.appendChild(headerEl);
      opportunityAudits.forEach(item => groupEl.appendChild(this._renderOpportunity(item, scale)));
      groupEl.classList.add('lh-audit-group--load-opportunities');
      element.appendChild(groupEl);
    }

    // Diagnostics
    const diagnosticAudits = category.auditRefs
        .filter(audit => audit.group === 'diagnostics' && !Util.showAsPassed(audit.result))
        .sort((a, b) => {
          const scoreA = a.result.scoreDisplayMode === 'informative' ? 100 : Number(a.result.score);
          const scoreB = b.result.scoreDisplayMode === 'informative' ? 100 : Number(b.result.score);
          return scoreA - scoreB;
        });

    if (diagnosticAudits.length) {
      const groupEl = this.renderAuditGroup(groups['diagnostics']);
      diagnosticAudits.forEach(item => groupEl.appendChild(this.renderAudit(item)));
      groupEl.classList.add('lh-audit-group--diagnostics');
      element.appendChild(groupEl);
    }

    // Passed audits
    const passedAudits = category.auditRefs
        .filter(audit => (audit.group === 'load-opportunities' || audit.group === 'diagnostics') &&
            Util.showAsPassed(audit.result));

    if (!passedAudits.length) return element;

    const clumpOpts = {
      auditRefs: passedAudits,
      groupDefinitions: groups,
    };
    const passedElem = this.renderClump('passed', clumpOpts);
    element.appendChild(passedElem);
    return element;
  }
}

if (typeof module !== 'undefined' && module.exports) {
  module.exports = PerformanceCategoryRenderer;
} else {
  self.PerformanceCategoryRenderer = PerformanceCategoryRenderer;
}
;
/**
 * @license
 * Copyright 2018 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/* globals self, Util, CategoryRenderer */

/**
 * An always-increasing counter for making unique SVG ID suffixes.
 */
const getUniqueSuffix = (() => {
  let svgSuffix = 0;
  return function() {
    return svgSuffix++;
  };
})();

class PwaCategoryRenderer extends CategoryRenderer {
  /**
   * @param {LH.ReportResult.Category} category
   * @param {Object<string, LH.Result.ReportGroup>} [groupDefinitions]
   * @return {Element}
   */
  render(category, groupDefinitions = {}) {
    const categoryElem = this.dom.createElement('div', 'lh-category');
    this.createPermalinkSpan(categoryElem, category.id);
    categoryElem.appendChild(this.renderCategoryHeader(category, groupDefinitions));

    const auditRefs = category.auditRefs;

    // Regular audits aren't split up into pass/fail/notApplicable clumps, they're
    // all put in a top-level clump that isn't expandable/collapsible.
    const regularAuditRefs = auditRefs.filter(ref => ref.result.scoreDisplayMode !== 'manual');
    const auditsElem = this._renderAudits(regularAuditRefs, groupDefinitions);
    categoryElem.appendChild(auditsElem);

    // Manual audits are still in a manual clump.
    const manualAuditRefs = auditRefs.filter(ref => ref.result.scoreDisplayMode === 'manual');
    const manualElem = this.renderClump('manual',
      {auditRefs: manualAuditRefs, description: category.manualDescription});
    categoryElem.appendChild(manualElem);

    return categoryElem;
  }

  /**
   * @param {LH.ReportResult.Category} category
   * @param {Record<string, LH.Result.ReportGroup>} groupDefinitions
   * @return {DocumentFragment}
   */
  renderScoreGauge(category, groupDefinitions) {
    // Defer to parent-gauge style if category error.
    if (category.score === null) {
      return super.renderScoreGauge(category, groupDefinitions);
    }

    const tmpl = this.dom.cloneTemplate('#tmpl-lh-gauge--pwa', this.templateContext);
    const wrapper = /** @type {HTMLAnchorElement} */ (this.dom.find('.lh-gauge--pwa__wrapper',
      tmpl));
    wrapper.href = `#${category.id}`;

    // Correct IDs in case multiple instances end up in the page.
    const svgRoot = tmpl.querySelector('svg');
    if (!svgRoot) throw new Error('no SVG element found in PWA score gauge template');
    PwaCategoryRenderer._makeSvgReferencesUnique(svgRoot);

    const allGroups = this._getGroupIds(category.auditRefs);
    const passingGroupIds = this._getPassingGroupIds(category.auditRefs);

    if (passingGroupIds.size === allGroups.size) {
      wrapper.classList.add('lh-badged--all');
    } else {
      for (const passingGroupId of passingGroupIds) {
        wrapper.classList.add(`lh-badged--${passingGroupId}`);
      }
    }

    this.dom.find('.lh-gauge__label', tmpl).textContent = category.title;
    wrapper.title = this._getGaugeTooltip(category.auditRefs, groupDefinitions);
    return tmpl;
  }

  /**
   * Returns the group IDs found in auditRefs.
   * @param {Array<LH.ReportResult.AuditRef>} auditRefs
   * @return {Set<string>}
   */
  _getGroupIds(auditRefs) {
    const groupIds = auditRefs.map(ref => ref.group).filter(/** @return {g is string} */ g => !!g);
    return new Set(groupIds);
  }

  /**
   * Returns the group IDs whose audits are all considered passing.
   * @param {Array<LH.ReportResult.AuditRef>} auditRefs
   * @return {Set<string>}
   */
  _getPassingGroupIds(auditRefs) {
    const uniqueGroupIds = this._getGroupIds(auditRefs);

    // Remove any that have a failing audit.
    for (const auditRef of auditRefs) {
      if (!Util.showAsPassed(auditRef.result) && auditRef.group) {
        uniqueGroupIds.delete(auditRef.group);
      }
    }

    return uniqueGroupIds;
  }

  /**
   * Returns a tooltip string summarizing group pass rates.
   * @param {Array<LH.ReportResult.AuditRef>} auditRefs
   * @param {Record<string, LH.Result.ReportGroup>} groupDefinitions
   * @return {string}
   */
  _getGaugeTooltip(auditRefs, groupDefinitions) {
    const groupIds = this._getGroupIds(auditRefs);

    const tips = [];
    for (const groupId of groupIds) {
      const groupAuditRefs = auditRefs.filter(ref => ref.group === groupId);
      const auditCount = groupAuditRefs.length;
      const passedCount = groupAuditRefs.filter(ref => Util.showAsPassed(ref.result)).length;

      const title = groupDefinitions[groupId].title;
      tips.push(`${title}: ${passedCount}/${auditCount}`);
    }

    return tips.join(', ');
  }

  /**
   * Render non-manual audits in groups, giving a badge to any group that has
   * all passing audits.
   * @param {Array<LH.ReportResult.AuditRef>} auditRefs
   * @param {Object<string, LH.Result.ReportGroup>} groupDefinitions
   * @return {Element}
   */
  _renderAudits(auditRefs, groupDefinitions) {
    const auditsElem = this.renderUnexpandableClump(auditRefs, groupDefinitions);

    // Add a 'badged' class to group if all audits in that group pass.
    const passsingGroupIds = this._getPassingGroupIds(auditRefs);
    for (const groupId of passsingGroupIds) {
      const groupElem = this.dom.find(`.lh-audit-group--${groupId}`, auditsElem);
      groupElem.classList.add('lh-badged');
    }

    return auditsElem;
  }

  /**
   * Alters SVG id references so multiple instances of an SVG element can coexist
   * in a single page. If `svgRoot` has a `<defs>` block, gives all elements defined
   * in it unique ids, then updates id references (`<use xlink:href="...">`,
   * `fill="url(#...)"`) to the altered ids in all descendents of `svgRoot`.
   * @param {SVGElement} svgRoot
   */
  static _makeSvgReferencesUnique(svgRoot) {
    const defsEl = svgRoot.querySelector('defs');
    if (!defsEl) return;

    const idSuffix = getUniqueSuffix();
    const elementsToUpdate = defsEl.querySelectorAll('[id]');
    for (const el of elementsToUpdate) {
      const oldId = el.id;
      const newId = `${oldId}-${idSuffix}`;
      el.id = newId;

      // Update all <use>s.
      const useEls = svgRoot.querySelectorAll(`use[href="#${oldId}"]`);
      for (const useEl of useEls) {
        useEl.setAttribute('href', `#${newId}`);
      }

      // Update all fill="url(#...)"s.
      const fillEls = svgRoot.querySelectorAll(`[fill="url(#${oldId})"]`);
      for (const fillEl of fillEls) {
        fillEl.setAttribute('fill', `url(#${newId})`);
      }
    }
  }
}

if (typeof module !== 'undefined' && module.exports) {
  module.exports = PwaCategoryRenderer;
} else {
  self.PwaCategoryRenderer = PwaCategoryRenderer;
}
;
/**
 * @license
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS-IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';

/**
 * @fileoverview The entry point for rendering the Lighthouse report based on the JSON output.
 *    This file is injected into the report HTML along with the JSON report.
 *
 * Dummy text for ensuring report robustness: \u003c/script> pre$`post %%LIGHTHOUSE_JSON%%
 */

/** @typedef {import('./dom.js')} DOM */

/* globals self, Util, DetailsRenderer, CategoryRenderer, PerformanceCategoryRenderer, PwaCategoryRenderer */

class ReportRenderer {
  /**
   * @param {DOM} dom
   */
  constructor(dom) {
    /** @type {DOM} */
    this._dom = dom;
    /** @type {ParentNode} */
    this._templateContext = this._dom.document();
  }

  /**
   * @param {LH.Result} result
   * @param {Element} container Parent element to render the report into.
   * @return {Element}
   */
  renderReport(result, container) {
    // Mutate the UIStrings if necessary (while saving originals)
    const originalUIStrings = JSON.parse(JSON.stringify(Util.UIStrings));

    this._dom.setLighthouseChannel(result.configSettings.channel || 'unknown');

    const report = Util.prepareReportResult(result);

    container.textContent = ''; // Remove previous report.
    container.appendChild(this._renderReport(report));

    // put the UIStrings back into original state
    Util.updateAllUIStrings(originalUIStrings);

    return container;
  }

  /**
   * Define a custom element for <templates> to be extracted from. For example:
   *     this.setTemplateContext(new DOMParser().parseFromString(htmlStr, 'text/html'))
   * @param {ParentNode} context
   */
  setTemplateContext(context) {
    this._templateContext = context;
  }

  /**
   * @param {LH.ReportResult} report
   * @return {DocumentFragment}
   */
  _renderReportTopbar(report) {
    const el = this._dom.cloneTemplate('#tmpl-lh-topbar', this._templateContext);
    const metadataUrl = /** @type {HTMLAnchorElement} */ (this._dom.find('.lh-topbar__url', el));
    metadataUrl.href = metadataUrl.textContent = report.finalUrl;
    metadataUrl.title = report.finalUrl;
    return el;
  }

  /**
   * @return {DocumentFragment}
   */
  _renderReportHeader() {
    const el = this._dom.cloneTemplate('#tmpl-lh-heading', this._templateContext);
    const domFragment = this._dom.cloneTemplate('#tmpl-lh-scores-wrapper', this._templateContext);
    const placeholder = this._dom.find('.lh-scores-wrapper-placeholder', el);
    /** @type {HTMLDivElement} */ (placeholder.parentNode).replaceChild(domFragment, placeholder);
    return el;
  }

  /**
   * @param {LH.ReportResult} report
   * @return {DocumentFragment}
   */
  _renderReportFooter(report) {
    const footer = this._dom.cloneTemplate('#tmpl-lh-footer', this._templateContext);

    const env = this._dom.find('.lh-env__items', footer);
    env.id = 'runtime-settings';
    const envValues = Util.getEnvironmentDisplayValues(report.configSettings || {});
    [
      {name: 'URL', description: report.finalUrl},
      {name: 'Fetch time', description: Util.formatDateTime(report.fetchTime)},
      ...envValues,
      {name: 'User agent (host)', description: report.userAgent},
      {name: 'User agent (network)', description: report.environment &&
        report.environment.networkUserAgent},
      {name: 'CPU/Memory Power', description: report.environment &&
        report.environment.benchmarkIndex.toFixed(0)},
    ].forEach(runtime => {
      if (!runtime.description) return;

      const item = this._dom.cloneTemplate('#tmpl-lh-env__items', env);
      this._dom.find('.lh-env__name', item).textContent = runtime.name;
      this._dom.find('.lh-env__description', item).textContent = runtime.description;
      env.appendChild(item);
    });

    this._dom.find('.lh-footer__version', footer).textContent = report.lighthouseVersion;
    return footer;
  }

  /**
   * Returns a div with a list of top-level warnings, or an empty div if no warnings.
   * @param {LH.ReportResult} report
   * @return {Node}
   */
  _renderReportWarnings(report) {
    if (!report.runWarnings || report.runWarnings.length === 0) {
      return this._dom.createElement('div');
    }

    const container = this._dom.cloneTemplate('#tmpl-lh-warnings--toplevel', this._templateContext);
    const message = this._dom.find('.lh-warnings__msg', container);
    message.textContent = Util.UIStrings.toplevelWarningsMessage;

    const warnings = this._dom.find('ul', container);
    for (const warningString of report.runWarnings) {
      const warning = warnings.appendChild(this._dom.createElement('li'));
      warning.textContent = warningString;
    }

    return container;
  }

  /**
   * @param {LH.ReportResult} report
   * @param {CategoryRenderer} categoryRenderer
   * @param {Record<string, CategoryRenderer>} specificCategoryRenderers
   * @return {DocumentFragment[]}
   */
  _renderScoreGauges(report, categoryRenderer, specificCategoryRenderers) {
    // Group gauges in this order: default, pwa, plugins.
    const defaultGauges = [];
    const customGauges = []; // PWA.
    const pluginGauges = [];

    for (const category of Object.values(report.categories)) {
      const renderer = specificCategoryRenderers[category.id] || categoryRenderer;
      const categoryGauge = renderer.renderScoreGauge(category, report.categoryGroups || {});

      if (Util.isPluginCategory(category.id)) {
        pluginGauges.push(categoryGauge);
      } else if (renderer.renderScoreGauge === categoryRenderer.renderScoreGauge) {
        // The renderer for default categories is just the default CategoryRenderer.
        // If the functions are equal, then renderer is an instance of CategoryRenderer.
        // For example, the PWA category uses PwaCategoryRenderer, which overrides
        // CategoryRenderer.renderScoreGauge, so it would fail this check and be placed
        // in the customGauges bucket.
        defaultGauges.push(categoryGauge);
      } else {
        customGauges.push(categoryGauge);
      }
    }

    return [...defaultGauges, ...customGauges, ...pluginGauges];
  }

  /**
   * @param {LH.ReportResult} report
   * @return {DocumentFragment}
   */
  _renderReport(report) {
    const detailsRenderer = new DetailsRenderer(this._dom);
    const categoryRenderer = new CategoryRenderer(this._dom, detailsRenderer);
    categoryRenderer.setTemplateContext(this._templateContext);

    /** @type {Record<string, CategoryRenderer>} */
    const specificCategoryRenderers = {
      performance: new PerformanceCategoryRenderer(this._dom, detailsRenderer),
      pwa: new PwaCategoryRenderer(this._dom, detailsRenderer),
    };
    Object.values(specificCategoryRenderers).forEach(renderer => {
      renderer.setTemplateContext(this._templateContext);
    });

    const headerContainer = this._dom.createElement('div');
    headerContainer.appendChild(this._renderReportHeader());

    const reportContainer = this._dom.createElement('div', 'lh-container');
    const reportSection = this._dom.createElement('div', 'lh-report');
    reportSection.appendChild(this._renderReportWarnings(report));

    let scoreHeader;
    const isSoloCategory = Object.keys(report.categories).length === 1;
    if (!isSoloCategory) {
      scoreHeader = this._dom.createElement('div', 'lh-scores-header');
    } else {
      headerContainer.classList.add('lh-header--solo-category');
    }

    if (scoreHeader) {
      const scoreScale = this._dom.cloneTemplate('#tmpl-lh-scorescale', this._templateContext);
      const scoresContainer = this._dom.find('.lh-scores-container', headerContainer);
      scoreHeader.append(
        ...this._renderScoreGauges(report, categoryRenderer, specificCategoryRenderers));
      scoresContainer.appendChild(scoreHeader);
      scoresContainer.appendChild(scoreScale);

      const stickyHeader = this._dom.createElement('div', 'lh-sticky-header');
      stickyHeader.append(
        ...this._renderScoreGauges(report, categoryRenderer, specificCategoryRenderers));
      reportContainer.appendChild(stickyHeader);
    }

    const categories = reportSection.appendChild(this._dom.createElement('div', 'lh-categories'));
    for (const category of Object.values(report.categories)) {
      const renderer = specificCategoryRenderers[category.id] || categoryRenderer;
      // .lh-category-wrapper is full-width and provides horizontal rules between categories.
      // .lh-category within has the max-width: var(--report-width);
      const wrapper = renderer.dom.createChildOf(categories, 'div', 'lh-category-wrapper');
      wrapper.appendChild(renderer.render(category, report.categoryGroups));
    }

    const reportFragment = this._dom.createFragment();
    const topbarDocumentFragment = this._renderReportTopbar(report);

    reportFragment.appendChild(topbarDocumentFragment);
    reportFragment.appendChild(reportContainer);
    reportContainer.appendChild(headerContainer);
    reportContainer.appendChild(reportSection);
    reportSection.appendChild(this._renderReportFooter(report));

    return reportFragment;
  }
}

/** @type {LH.I18NRendererStrings} */
ReportRenderer._UIStringsStash = {};

if (typeof module !== 'undefined' && module.exports) {
  module.exports = ReportRenderer;
} else {
  self.ReportRenderer = ReportRenderer;
}

/*# sourceURL=audits/lighthouse/report.js */
  //# sourceURL=compiled-reportrenderer.js
  </script>
  <script>window.__LIGHTHOUSE_JSON__ = {"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4021.2 Safari/537.36 OPR/68.0.3590.0 (Edition developer)","environment":{"networkUserAgent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3694.0 Safari/537.36 Chrome-Lighthouse","hostUserAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4021.2 Safari/537.36 OPR/68.0.3590.0 (Edition developer)","benchmarkIndex":1464},"lighthouseVersion":"5.7.0","fetchTime":"2020-02-08T21:32:25.234Z","requestedUrl":"https://iny.su/feed","finalUrl":"https://iny.su/feed","runWarnings":[],"audits":{"is-on-https":{"id":"is-on-https","title":"Uses HTTPS","description":"All sites should be protected with HTTPS, even ones that don't handle sensitive data. HTTPS prevents intruders from tampering with or passively listening in on the communications between your app and your users, and is a prerequisite for HTTP/2 and many new web platform APIs. [Learn more](https://web.dev/is-on-https).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[]}},"redirects-http":{"id":"redirects-http","title":"Redirects HTTP traffic to HTTPS","description":"If you've already set up HTTPS, make sure that you redirect all HTTP traffic to HTTPS in order to enable secure web features for all your users. [Learn more](https://web.dev/redirects-http).","score":1,"scoreDisplayMode":"binary"},"service-worker":{"id":"service-worker","title":"Does not register a service worker that controls page and `start_url`","description":"The service worker is the technology that enables your app to use many Progressive Web App features, such as offline, add to homescreen, and push notifications. [Learn more](https://web.dev/service-worker).","score":0,"scoreDisplayMode":"binary"},"works-offline":{"id":"works-offline","title":"Current page does not respond with a 200 when offline","description":"If you're building a Progressive Web App, consider using a service worker so that your app can work offline. [Learn more](https://web.dev/works-offline).","score":0,"scoreDisplayMode":"binary","warnings":[]},"viewport":{"id":"viewport","title":"Has a `\u003cmeta name=\"viewport\">` tag with `width` or `initial-scale`","description":"Add a `\u003cmeta name=\"viewport\">` tag to optimize your app for mobile screens. [Learn more](https://web.dev/viewport).","score":1,"scoreDisplayMode":"binary","warnings":[]},"without-javascript":{"id":"without-javascript","title":"Contains some content when JavaScript is not available","description":"Your app should display some content when JavaScript is disabled, even if it's just a warning to the user that JavaScript is required to use the app. [Learn more](https://web.dev/without-javascript).","score":1,"scoreDisplayMode":"binary"},"first-contentful-paint":{"id":"first-contentful-paint","title":"First Contentful Paint","description":"First Contentful Paint marks the time at which the first text or image is painted. [Learn more](https://web.dev/first-contentful-paint).","score":0.02,"scoreDisplayMode":"numeric","numericValue":9552.439900000001,"displayValue":"9.6 s"},"first-meaningful-paint":{"id":"first-meaningful-paint","title":"First Meaningful Paint","description":"First Meaningful Paint measures when the primary content of a page is visible. [Learn more](https://web.dev/first-meaningful-paint).","score":0.02,"scoreDisplayMode":"numeric","numericValue":9564.939900000001,"displayValue":"9.6 s"},"load-fast-enough-for-pwa":{"id":"load-fast-enough-for-pwa","title":"Page load is fast enough on mobile networks","description":"A fast page load over a cellular network ensures a good mobile user experience. [Learn more](https://web.dev/load-fast-enough-for-pwa).","score":1,"scoreDisplayMode":"binary","numericValue":9784.9415},"speed-index":{"id":"speed-index","title":"Speed Index","description":"Speed Index shows how quickly the contents of a page are visibly populated. [Learn more](https://web.dev/speed-index).","score":0.03,"scoreDisplayMode":"numeric","numericValue":13035.10303526217,"displayValue":"13.0 s"},"screenshot-thumbnails":{"id":"screenshot-thumbnails","title":"Screenshot Thumbnails","description":"This is what the load of your site looked like.","score":null,"scoreDisplayMode":"informative","details":{"type":"filmstrip","scale":5168,"items":[{"timing":517,"timestamp":1945558493458.9998,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":1034,"timestamp":1945559010258.9998,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":1550,"timestamp":1945559527059,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":2067,"timestamp":1945560043859,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":2584,"timestamp":1945560560659,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":3101,"timestamp":1945561077458.9998,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":3618,"timestamp":1945561594258.9998,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":4134,"timestamp":1945562111059,"data":"data:image/jpeg;base64,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"},{"timing":4651,"timestamp":1945562627859,"data":"data:image/jpeg;base64,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"},{"timing":5168,"timestamp":1945563144659,"data":"data:image/jpeg;base64,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"}]}},"final-screenshot":{"id":"final-screenshot","title":"Final Screenshot","description":"The last screenshot captured of the pageload.","score":null,"scoreDisplayMode":"informative","details":{"type":"screenshot","timing":5185,"timestamp":1945563162102,"data":"data:image/jpeg;base64,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"}},"estimated-input-latency":{"id":"estimated-input-latency","title":"Estimated Input Latency","description":"Estimated Input Latency is an estimate of how long your app takes to respond to user input, in milliseconds, during the busiest 5s window of page load. If your latency is higher than 50 ms, users may perceive your app as laggy. [Learn more](https://web.dev/estimated-input-latency).","score":0,"scoreDisplayMode":"numeric","numericValue":2547.2000000000003,"displayValue":"2,550 ms"},"total-blocking-time":{"id":"total-blocking-time","title":"Total Blocking Time","description":"Sum of all time periods between FCP and Time to Interactive, when task length exceeded 50ms, expressed in milliseconds.","score":1,"scoreDisplayMode":"numeric","numericValue":37,"displayValue":"40 ms"},"max-potential-fid":{"id":"max-potential-fid","title":"Max Potential First Input Delay","description":"The maximum potential First Input Delay that your users could experience is the duration, in milliseconds, of the longest task. [Learn more](https://developers.google.com/web/updates/2018/05/first-input-delay).","score":0,"scoreDisplayMode":"numeric","numericValue":3450,"displayValue":"3,450 ms"},"errors-in-console":{"id":"errors-in-console","title":"No browser errors logged to the console","description":"Errors logged to the console indicate unresolved problems. They can come from network request failures and other browser concerns. [Learn more](https://web.dev/errors-in-console)","score":1,"scoreDisplayMode":"binary","numericValue":0,"details":{"type":"table","headings":[],"items":[]}},"time-to-first-byte":{"id":"time-to-first-byte","title":"Server response times are low (TTFB)","description":"Time To First Byte identifies the time at which your server sends a response. [Learn more](https://web.dev/time-to-first-byte).","score":1,"scoreDisplayMode":"binary","numericValue":75.06099999999999,"displayValue":"Root document took 80 ms","details":{"type":"opportunity","overallSavingsMs":-524.939,"headings":[],"items":[]}},"first-cpu-idle":{"id":"first-cpu-idle","title":"First CPU Idle","description":"First CPU Idle marks the first time at which the page's main thread is quiet enough to handle input.  [Learn more](https://web.dev/first-cpu-idle).","score":0.2,"scoreDisplayMode":"numeric","numericValue":9564.939900000001,"displayValue":"9.6 s"},"interactive":{"id":"interactive","title":"Time to Interactive","description":"Time to interactive is the amount of time it takes for the page to become fully interactive. [Learn more](https://web.dev/interactive).","score":0.28,"scoreDisplayMode":"numeric","numericValue":9784.9415,"displayValue":"9.8 s"},"user-timings":{"id":"user-timings","title":"User Timing marks and measures","description":"Consider instrumenting your app with the User Timing API to measure your app's real-world performance during key user experiences. [Learn more](https://web.dev/user-timings).","score":null,"scoreDisplayMode":"notApplicable","details":{"type":"table","headings":[],"items":[]}},"critical-request-chains":{"id":"critical-request-chains","title":"Avoid chaining critical requests","description":"The Critical Request Chains below show you what resources are loaded with a high priority. Consider reducing the length of chains, reducing the download size of resources, or deferring the download of unnecessary resources to improve page load. [Learn more](https://web.dev/critical-request-chains).","score":null,"scoreDisplayMode":"informative","displayValue":"5 chains found","details":{"type":"criticalrequestchain","chains":{"BD349D150EF7FAB848A7ED4EC6FE64AC":{"request":{"url":"https://iny.su/feed","startTime":1945557.978185,"endTime":1945558.05621,"responseReceivedTime":1945558.0554079998,"transferSize":1572},"children":{"2808.110":{"request":{"url":"https://iny.su/web/css/theme/main-dark.css?version=32","startTime":1945558.072147,"endTime":1945558.121912,"responseReceivedTime":1945558.120202,"transferSize":893}},"2808.111":{"request":{"url":"https://iny.su/web/css/themes.css?version=10","startTime":1945558.072629,"endTime":1945558.122333,"responseReceivedTime":1945558.120684,"transferSize":743}},"2808.112":{"request":{"url":"https://iny.su/web/css/@offline.css","startTime":1945558.072965,"endTime":1945558.122644,"responseReceivedTime":1945558.121148,"transferSize":1357}},"2808.113":{"request":{"url":"https://iny.su/web/js/core/init.js?version=273","startTime":1945558.073989,"endTime":1945558.19807,"responseReceivedTime":1945558.196537,"transferSize":2910}},"2808.114":{"request":{"url":"https://iny.su/web/js/module/@offline.js","startTime":1945558.074743,"endTime":1945558.199142,"responseReceivedTime":1945558.1970630002,"transferSize":3266}}}},"2808.159":{"request":{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","startTime":1945561.998358,"endTime":1945562.207129,"responseReceivedTime":1945562.084212,"transferSize":67455}},"2808.153":{"request":{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","startTime":1945561.999817,"endTime":1945562.369586,"responseReceivedTime":1945562.248519,"transferSize":65975}},"2808.150":{"request":{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Light.woff2","startTime":1945562.001247,"endTime":1945562.532923,"responseReceivedTime":1945562.411608,"transferSize":66263}}},"longestChain":{"duration":4554.738000035286,"length":1,"transferSize":66263}}},"redirects":{"id":"redirects","title":"Avoid multiple page redirects","description":"Redirects introduce additional delays before the page can be loaded. [Learn more](https://web.dev/redirects).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"installable-manifest":{"id":"installable-manifest","title":"Web app manifest meets the installability requirements","description":"Browsers can proactively prompt users to add your app to their homescreen, which can lead to higher engagement. [Learn more](https://web.dev/installable-manifest).","score":1,"scoreDisplayMode":"binary","details":{"type":"debugdata","items":[{"failures":[],"isParseFailure":false,"hasStartUrl":true,"hasIconsAtLeast192px":true,"hasIconsAtLeast512px":true,"hasPWADisplayValue":true,"hasBackgroundColor":true,"hasThemeColor":true,"hasShortName":true,"shortNameLength":true,"hasName":true}]}},"apple-touch-icon":{"id":"apple-touch-icon","title":"Provides a valid `apple-touch-icon`","description":"For ideal appearance on iOS when users add a progressive web app to the home screen, define an `apple-touch-icon`. It must point to a non-transparent 192px (or 180px) square PNG. [Learn More](https://web.dev/apple-touch-icon/).","score":1,"scoreDisplayMode":"binary","warnings":[]},"splash-screen":{"id":"splash-screen","title":"Configured for a custom splash screen","description":"A themed splash screen ensures a high-quality experience when users launch your app from their homescreens. [Learn more](https://web.dev/splash-screen).","score":1,"scoreDisplayMode":"binary","details":{"type":"debugdata","items":[{"failures":[],"isParseFailure":false,"hasStartUrl":true,"hasIconsAtLeast192px":true,"hasIconsAtLeast512px":true,"hasPWADisplayValue":true,"hasBackgroundColor":true,"hasThemeColor":true,"hasShortName":true,"shortNameLength":true,"hasName":true}]}},"themed-omnibox":{"id":"themed-omnibox","title":"Sets a theme color for the address bar.","description":"The browser address bar can be themed to match your site. [Learn more](https://web.dev/themed-omnibox).","score":1,"scoreDisplayMode":"binary","details":{"type":"debugdata","items":[{"failures":[],"themeColor":"#4285f4","isParseFailure":false,"hasStartUrl":true,"hasIconsAtLeast192px":true,"hasIconsAtLeast512px":true,"hasPWADisplayValue":true,"hasBackgroundColor":true,"hasThemeColor":true,"hasShortName":true,"shortNameLength":true,"hasName":true}]}},"content-width":{"id":"content-width","title":"Content is sized correctly for the viewport","description":"If the width of your app's content doesn't match the width of the viewport, your app might not be optimized for mobile screens. [Learn more](https://web.dev/content-width).","score":null,"scoreDisplayMode":"notApplicable"},"image-aspect-ratio":{"id":"image-aspect-ratio","title":"Displays images with correct aspect ratio","description":"Image display dimensions should match natural aspect ratio. [Learn more](https://web.dev/image-aspect-ratio).","score":1,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[],"items":[]}},"deprecations":{"id":"deprecations","title":"Uses deprecated APIs","description":"Deprecated APIs will eventually be removed from the browser. [Learn more](https://web.dev/deprecations).","score":0,"scoreDisplayMode":"binary","displayValue":"2 warnings found","details":{"type":"table","headings":[{"key":"value","itemType":"text","text":"Deprecation / Warning"},{"key":"url","itemType":"url","text":"URL"},{"key":"lineNumber","itemType":"text","text":"Line"}],"items":[{"value":"Synchronous XMLHttpRequest on the main thread is deprecated because of its detrimental effects to the end user's experience. For more help, check https://xhr.spec.whatwg.org/.","url":"https://iny.su/web/js/module/@offline.js","source":"deprecation","lineNumber":1},{"value":"Synchronous XMLHttpRequest on the main thread is deprecated because of its detrimental effects to the end user's experience. For more help, check https://xhr.spec.whatwg.org/.","url":"https://iny.su/web/js/module/@offline.js","source":"deprecation","lineNumber":1}]}},"mainthread-work-breakdown":{"id":"mainthread-work-breakdown","title":"Minimize main-thread work","description":"Consider reducing the time spent parsing, compiling and executing JS. You may find delivering smaller JS payloads helps with this. [Learn more](https://web.dev/mainthread-work-breakdown)","score":0,"scoreDisplayMode":"numeric","numericValue":17254.932000000008,"displayValue":"17.3 s","details":{"type":"table","headings":[{"key":"groupLabel","itemType":"text","text":"Category"},{"key":"duration","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"group":"scriptEvaluation","groupLabel":"Script Evaluation","duration":14073.16800000001},{"group":"styleLayout","groupLabel":"Style & Layout","duration":1770.1040000000012},{"group":"other","groupLabel":"Other","duration":728.3839999999965},{"group":"paintCompositeRender","groupLabel":"Rendering","duration":269.5960000000002},{"group":"scriptParseCompile","groupLabel":"Script Parsing & Compilation","duration":208.6640000000001},{"group":"parseHTML","groupLabel":"Parse HTML & CSS","duration":163.72},{"group":"garbageCollection","groupLabel":"Garbage Collection","duration":41.296}]}},"bootup-time":{"id":"bootup-time","title":"Reduce JavaScript execution time","description":"Consider reducing the time spent parsing, compiling, and executing JS. You may find delivering smaller JS payloads helps with this. [Learn more](https://web.dev/bootup-time).","score":0.04,"scoreDisplayMode":"numeric","numericValue":14233.868000000006,"displayValue":"14.2 s","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"total","granularity":1,"itemType":"ms","text":"Total CPU Time"},{"key":"scripting","granularity":1,"itemType":"ms","text":"Script Evaluation"},{"key":"scriptParseCompile","granularity":1,"itemType":"ms","text":"Script Parse"}],"items":[{"url":"https://iny.su/web/vendor/js/jquery.js","total":14124.784000000005,"scripting":13875.876000000006,"scriptParseCompile":182.71200000000007},{"url":"Other","total":2976.8439999999973,"scripting":74.82800000000002,"scriptParseCompile":3.056},{"url":"https://iny.su/web/js/core/init.js?version=273","total":54.48800000000001,"scripting":44.812000000000005,"scriptParseCompile":2.176},{"url":"chrome-extension://bgpmiljelfnilfcfmoppijdkmccbccel/filter_content.js","total":50.40799999999998,"scripting":47.82799999999998,"scriptParseCompile":2.58}],"summary":{"wastedMs":14233.868000000006}}},"uses-rel-preload":{"id":"uses-rel-preload","title":"Preload key requests","description":"Consider using `\u003clink rel=preload>` to prioritize fetching resources that are currently requested later in page load. [Learn more](https://web.dev/uses-rel-preload).","score":0.37,"scoreDisplayMode":"numeric","numericValue":1864,"displayValue":"Potential savings of 1,860 ms","details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"wastedMs","valueType":"timespanMs","label":"Potential Savings"}],"items":[{"url":"https://iny.su/web/vendor/css/bootstrap.min.css?version=4","wastedMs":1864},{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","wastedMs":1050},{"url":"https://iny.su/web/css/common.css?version=68","wastedMs":1050}],"overallSavingsMs":1864}},"uses-rel-preconnect":{"id":"uses-rel-preconnect","title":"Preconnect to required origins","description":"Consider adding `preconnect` or `dns-prefetch` resource hints to establish early connections to important third-party origins. [Learn more](https://web.dev/uses-rel-preconnect).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"font-display":{"id":"font-display","title":"Ensure text remains visible during webfont load","description":"Leverage the font-display CSS feature to ensure text is user-visible while webfonts are loading. [Learn more](https://web.dev/font-display).","score":0,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"wastedMs","itemType":"ms","text":"Potential Savings"}],"items":[{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","wastedMs":208.7709999177605},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","wastedMs":369.76899998262525},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Light.woff2","wastedMs":531.6759999841452}]}},"diagnostics":{"id":"diagnostics","title":"Diagnostics","description":"Collection of useful page vitals.","score":null,"scoreDisplayMode":"informative","details":{"type":"debugdata","items":[{"numRequests":40,"numScripts":3,"numStylesheets":6,"numFonts":3,"numTasks":773,"numTasksOver10ms":19,"numTasksOver25ms":2,"numTasksOver50ms":1,"numTasksOver100ms":1,"numTasksOver500ms":1,"rtt":0.1963,"throughput":2533552.16445759,"maxRtt":0.19790000000000002,"maxServerLatency":72.58970000000001,"totalByteWeight":1241318,"totalTaskTime":4313.73299999999,"mainDocumentTransferSize":1572}]}},"network-requests":{"id":"network-requests","title":"Network Requests","description":"Lists the network requests that were made during page load.","score":null,"scoreDisplayMode":"informative","numericValue":40,"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"startTime","itemType":"ms","granularity":1,"text":"Start Time"},{"key":"endTime","itemType":"ms","granularity":1,"text":"End Time"},{"key":"transferSize","itemType":"bytes","displayUnit":"kb","granularity":1,"text":"Transfer Size"},{"key":"resourceSize","itemType":"bytes","displayUnit":"kb","granularity":1,"text":"Resource Size"},{"key":"statusCode","itemType":"text","text":"Status Code"},{"key":"mimeType","itemType":"text","text":"MIME Type"},{"key":"resourceType","itemType":"text","text":"Resource Type"}],"items":[{"url":"https://iny.su/feed","startTime":0,"endTime":78.02500016987324,"transferSize":1572,"resourceSize":7878,"statusCode":200,"mimeType":"text/html","resourceType":"Document"},{"url":"https://iny.su/web/css/theme/main-dark.css?version=32","startTime":93.96200021728873,"endTime":143.72700010426342,"transferSize":893,"resourceSize":1432,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/css/themes.css?version=10","startTime":94.44400016218424,"endTime":144.14800005033612,"transferSize":743,"resourceSize":10934,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/css/@offline.css","startTime":94.78000015951693,"endTime":144.45900009013712,"transferSize":1357,"resourceSize":18658,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/js/core/init.js?version=273","startTime":95.80400004051626,"endTime":219.88500002771616,"transferSize":2910,"resourceSize":21038,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://iny.su/web/js/module/@offline.js","startTime":96.55800019390881,"endTime":220.95700004138052,"transferSize":3266,"resourceSize":18622,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://iny.su/web/vendor/js/jquery.js","startTime":224.84900010749698,"endTime":312.6860000193119,"transferSize":45348,"resourceSize":176290,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://iny.su/web/js/include/main/boot.json?time=1581197546147","startTime":331.3160000834614,"endTime":396.009000018239,"transferSize":1570,"resourceSize":2832,"statusCode":200,"mimeType":"text/plain","resourceType":"XHR"},{"url":"https://iny.su/web/file/favicon/main/favicon.ico?option=with_brain_v2","startTime":332.3950001504272,"endTime":395.5270000733435,"transferSize":12562,"resourceSize":24754,"statusCode":200,"mimeType":"image/x-icon","resourceType":"Other"},{"url":"https://iny.su/web/vendor/css/bootstrap.min.css?version=4","startTime":405.2390002179891,"endTime":454.5140000991523,"transferSize":23361,"resourceSize":311516,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","startTime":406.6610001027584,"endTime":3873.0450000148267,"transferSize":67558,"resourceSize":1236002,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/css/common.css?version=68","startTime":407.7769999857992,"endTime":598.1500002089888,"transferSize":679,"resourceSize":1004,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/vendor/js/bootstrap.min.js?version=4","startTime":413.2230000104755,"endTime":679.7200001310557,"transferSize":15580,"resourceSize":116144,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/vendor/js/mdb.min.js?version=4","startTime":691.3580000400543,"endTime":1303.5110000055283,"transferSize":121065,"resourceSize":820606,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/vendor/js/popper.min.js?version=4","startTime":1369.1950000356883,"endTime":1414.870000211522,"transferSize":7494,"resourceSize":41074,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/vendor/js/icon.js?version=4","startTime":1421.2000002153218,"endTime":3198.623000178486,"transferSize":413457,"resourceSize":2263692,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/tpl/main.tpl.js?version=69","startTime":3244.2930000834167,"endTime":3288.2960001006722,"transferSize":1377,"resourceSize":9932,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/main.style.js?version=79","startTime":3292.1810001134872,"endTime":3385.723000159487,"transferSize":1327,"resourceSize":9184,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/core/dateParse.js?version=17","startTime":3391.271000029519,"endTime":3438.435000134632,"transferSize":670,"resourceSize":3250,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/core/navigation.js?version=70","startTime":3444.1780000925064,"endTime":3505.3630000911653,"transferSize":2138,"resourceSize":17324,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=getWarp&v=0.1","startTime":3511.544000124559,"endTime":3578.2840000465512,"transferSize":1942,"resourceSize":19022,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/forms.js?version=64","startTime":3530.621000099927,"endTime":3575.0930001959205,"transferSize":1180,"resourceSize":1982,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/userApi.js?version=76","startTime":3579.1120000649244,"endTime":3641.327999997884,"transferSize":1985,"resourceSize":13756,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/core/languages.js?version=65","startTime":3646.7089999932796,"endTime":3690.582000184804,"transferSize":1073,"resourceSize":6494,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=lang/get&v=0.1&language=ru","startTime":3694.486000109464,"endTime":3765.772000188008,"transferSize":1783,"resourceSize":8006,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/fn.js?version=64","startTime":3704.5900002121925,"endTime":3748.5990000423044,"transferSize":1566,"resourceSize":4310,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/law-manager.js?version=7","startTime":3754.9750001635402,"endTime":3798.9080001134425,"transferSize":1575,"resourceSize":7936,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=getHeader&v=0.1&domain=iny.su&type=user","startTime":3803.5200000740588,"endTime":3876.477000070736,"transferSize":874,"resourceSize":3558,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=getFooter&v=0.1&domain=iny.su&type=none","startTime":3812.930000014603,"endTime":3874.2070000153035,"transferSize":220,"resourceSize":76,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://go.iny.su/uc/cc4ca42/v6f7584/bb549e6e/bd64c099313.jpg","startTime":3833.454000065103,"endTime":3982.80300013721,"transferSize":154255,"resourceSize":252204,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://go.iny.su/uc/cc4ca42/v6f7584/ef567538/ffed277ea1d.jpg","startTime":3834.192000096664,"endTime":4056.3610000535846,"transferSize":149029,"resourceSize":246978,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://iny.su/web/file/favicon/main/favicon.ico?option=with_brain_v2","startTime":3839.9200001731515,"endTime":3840.7800002023578,"transferSize":0,"resourceSize":24754,"statusCode":200,"mimeType":"image/x-icon","resourceType":"Other"},{"url":"https://iny.su/api.php?_action=checker&v=0.1","startTime":3893.2460001669824,"endTime":3964.735000161454,"transferSize":304,"resourceSize":204,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","startTime":4020.1730001717806,"endTime":4228.944000089541,"transferSize":67455,"resourceSize":99952,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","startTime":4021.6320001054555,"endTime":4391.401000088081,"transferSize":65975,"resourceSize":98472,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Light.woff2","startTime":4023.062000051141,"endTime":4554.738000035286,"transferSize":66263,"resourceSize":98760,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://iny.su/api.php?_action=checker&v=0.1","startTime":4429.453000193462,"endTime":4553.823000052944,"transferSize":304,"resourceSize":204,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=checker&v=0.1","startTime":4431.650000158697,"endTime":4554.537000134587,"transferSize":304,"resourceSize":204,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjw","startTime":4861.579000018537,"endTime":4861.799000063911,"transferSize":0,"resourceSize":1078,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://iny.su/api.php?_action=checker&v=0.1","startTime":6146.830999990925,"endTime":6221.660000039265,"transferSize":304,"resourceSize":204,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"}]}},"network-rtt":{"id":"network-rtt","title":"Network Round Trip Times","description":"Network round trip times (RTT) have a large impact on performance. If the RTT to an origin is high, it's an indication that servers closer to the user could improve performance. [Learn more](https://hpbn.co/primer-on-latency-and-bandwidth/).","score":null,"scoreDisplayMode":"informative","numericValue":0.19790000000000002,"displayValue":"0 ms","details":{"type":"table","headings":[{"key":"origin","itemType":"text","text":"URL"},{"key":"rtt","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"origin":"https://iny.su","rtt":0.19790000000000002},{"origin":"https://go.iny.su","rtt":0.1963}]}},"network-server-latency":{"id":"network-server-latency","title":"Server Backend Latencies","description":"Server latencies can impact web performance. If the server latency of an origin is high, it's an indication the server is overloaded or has poor backend performance. [Learn more](https://hpbn.co/primer-on-web-performance/#analyzing-the-resource-waterfall).","score":null,"scoreDisplayMode":"informative","numericValue":72.58970000000001,"displayValue":"70 ms","details":{"type":"table","headings":[{"key":"origin","itemType":"text","text":"URL"},{"key":"serverResponseTime","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"origin":"https://go.iny.su","serverResponseTime":72.58970000000001},{"origin":"https://iny.su","serverResponseTime":64.4151}]}},"main-thread-tasks":{"id":"main-thread-tasks","title":"Tasks","description":"Lists the toplevel main thread tasks that executed during page load.","score":null,"scoreDisplayMode":"informative","numericValue":59,"details":{"type":"table","headings":[{"key":"startTime","itemType":"ms","granularity":1,"text":"Start Time"},{"key":"duration","itemType":"ms","granularity":1,"text":"End Time"}],"items":[{"duration":6.621,"startTime":94.979},{"duration":17.922,"startTime":107.003},{"duration":10.867,"startTime":241.104},{"duration":11.337,"startTime":329.08},{"duration":3418.235,"startTime":411.477},{"duration":15.885,"startTime":3837.042},{"duration":7.929,"startTime":3858.955},{"duration":7.656,"startTime":3869.224},{"duration":6.611,"startTime":3879.207},{"duration":8.47,"startTime":3895.968},{"duration":13.292,"startTime":3910.562},{"duration":6.132,"startTime":3924.598},{"duration":12.299,"startTime":3930.742},{"duration":7.7,"startTime":3946.332},{"duration":10.097,"startTime":3956.028},{"duration":5.207,"startTime":3969.779},{"duration":27.417,"startTime":3977.367},{"duration":18.998,"startTime":4009.161},{"duration":13.035,"startTime":4036.972},{"duration":8.269,"startTime":4052.145},{"duration":7.293,"startTime":4061.366},{"duration":12.802,"startTime":4070.775},{"duration":11.636,"startTime":4085.585},{"duration":9.806,"startTime":4099.203},{"duration":13.646,"startTime":4115.55},{"duration":11.052,"startTime":4133.075},{"duration":9.352,"startTime":4149.013},{"duration":9.085,"startTime":4165.63},{"duration":8.77,"startTime":4182.284},{"duration":9.451,"startTime":4198.945},{"duration":8.585,"startTime":4215.389},{"duration":9.669,"startTime":4232.369},{"duration":9.786,"startTime":4249.014},{"duration":9.163,"startTime":4265.243},{"duration":10.748,"startTime":4282.528},{"duration":8.404,"startTime":4298.845},{"duration":8.707,"startTime":4315.132},{"duration":8.632,"startTime":4332.4},{"duration":9.216,"startTime":4348.475},{"duration":8.639,"startTime":4365.162},{"duration":8.866,"startTime":4382.115},{"duration":9.55,"startTime":4398.501},{"duration":11.768,"startTime":4415.438},{"duration":7.041,"startTime":4433.235},{"duration":6.368,"startTime":4440.314},{"duration":8.107,"startTime":4449.819},{"duration":7.423,"startTime":4465.215},{"duration":8.604,"startTime":4482.017},{"duration":8.504,"startTime":4499.011},{"duration":7.819,"startTime":4515.279},{"duration":8.191,"startTime":4532.213},{"duration":7.319,"startTime":4548.898},{"duration":10.514,"startTime":4565.267},{"duration":5.28,"startTime":4580.673},{"duration":10.587,"startTime":4586.02},{"duration":6.158,"startTime":4678.365},{"duration":6.847,"startTime":4870.813},{"duration":7.844,"startTime":5320.591},{"duration":6.765,"startTime":5335.676}]}},"metrics":{"id":"metrics","title":"Metrics","description":"Collects all available metrics.","score":null,"scoreDisplayMode":"informative","numericValue":9784.9415,"details":{"type":"debugdata","items":[{"firstContentfulPaint":9552,"firstMeaningfulPaint":9565,"firstCPUIdle":9565,"interactive":9785,"speedIndex":13035,"estimatedInputLatency":2547,"totalBlockingTime":37,"observedNavigationStart":0,"observedNavigationStartTs":1945557976659,"observedFirstPaint":3919,"observedFirstPaintTs":1945561895162,"observedFirstContentfulPaint":3919,"observedFirstContentfulPaintTs":1945561895162,"observedFirstMeaningfulPaint":3919,"observedFirstMeaningfulPaintTs":1945561895162,"observedLargestContentfulPaint":4102,"observedLargestContentfulPaintTs":1945562078483,"observedTraceEnd":5628,"observedTraceEndTs":1945563604600,"observedLoad":328,"observedLoadTs":1945558305078,"observedDomContentLoaded":238,"observedDomContentLoadedTs":1945558214280,"observedFirstVisualChange":3918,"observedFirstVisualChangeTs":1945561894659,"observedLastVisualChange":5168,"observedLastVisualChangeTs":1945563144659,"observedSpeedIndex":4380,"observedSpeedIndexTs":1945562356492},{"lcpInvalidated":false}]}},"offline-start-url":{"id":"offline-start-url","title":"`start_url` does not respond with a 200 when offline","description":"A service worker enables your web app to be reliable in unpredictable network conditions. [Learn more](https://web.dev/offline-start-url).","score":0,"scoreDisplayMode":"binary","explanation":"Timed out waiting for start_url to respond.","warnings":[]},"performance-budget":{"id":"performance-budget","title":"Performance budget","description":"Keep the quantity and size of network requests under the targets set by the provided performance budget. [Learn more](https://developers.google.com/web/tools/lighthouse/audits/budgets).","score":null,"scoreDisplayMode":"notApplicable"},"resource-summary":{"id":"resource-summary","title":"Keep request counts low and transfer sizes small","description":"To set budgets for the quantity and size of page resources, add a budget.json file. [Learn more](https://developers.google.com/web/tools/lighthouse/audits/budgets).","score":null,"scoreDisplayMode":"informative","displayValue":"40 requests • 1,212 KB","details":{"type":"table","headings":[{"key":"label","itemType":"text","text":"Resource Type"},{"key":"requestCount","itemType":"numeric","text":"Requests"},{"key":"size","itemType":"bytes","text":"Transfer Size"}],"items":[{"resourceType":"total","label":"Total","requestCount":40,"size":1241318},{"resourceType":"other","label":"Other","requestCount":24,"size":590654},{"resourceType":"image","label":"Image","requestCount":3,"size":303284},{"resourceType":"font","label":"Font","requestCount":3,"size":199693},{"resourceType":"stylesheet","label":"Stylesheet","requestCount":6,"size":94591},{"resourceType":"script","label":"Script","requestCount":3,"size":51524},{"resourceType":"document","label":"Document","requestCount":1,"size":1572},{"resourceType":"media","label":"Media","requestCount":0,"size":0},{"resourceType":"third-party","label":"Third-party","requestCount":1,"size":0}]}},"third-party-summary":{"id":"third-party-summary","title":"Minimize third-party usage","description":"Third-party code can significantly impact load performance. Limit the number of redundant third-party providers and try to load third-party code after your page has primarily finished loading. [Learn more](https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/loading-third-party-javascript/).","score":null,"scoreDisplayMode":"notApplicable"},"pwa-cross-browser":{"id":"pwa-cross-browser","title":"Site works cross-browser","description":"To reach the most number of users, sites should work across every major browser. [Learn more](https://web.dev/pwa-cross-browser).","score":null,"scoreDisplayMode":"manual"},"pwa-page-transitions":{"id":"pwa-page-transitions","title":"Page transitions don't feel like they block on the network","description":"Transitions should feel snappy as you tap around, even on a slow network. This experience is key to a user's perception of performance. [Learn more](https://web.dev/pwa-page-transitions).","score":null,"scoreDisplayMode":"manual"},"pwa-each-page-has-url":{"id":"pwa-each-page-has-url","title":"Each page has a URL","description":"Ensure individual pages are deep linkable via URL and that URLs are unique for the purpose of shareability on social media. [Learn more](https://web.dev/pwa-each-page-has-url).","score":null,"scoreDisplayMode":"manual"},"accesskeys":{"id":"accesskeys","title":"`[accesskey]` values are unique","description":"Access keys let users quickly focus a part of the page. For proper navigation, each access key must be unique. [Learn more](https://web.dev/accesskeys/).","score":null,"scoreDisplayMode":"notApplicable"},"aria-allowed-attr":{"id":"aria-allowed-attr","title":"`[aria-*]` attributes match their roles","description":"Each ARIA `role` supports a specific subset of `aria-*` attributes. Mismatching these invalidates the `aria-*` attributes. [Learn more](https://web.dev/aria-allowed-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-attr":{"id":"aria-required-attr","title":"`[role]`s have all required `[aria-*]` attributes","description":"Some ARIA roles have required attributes that describe the state of the element to screen readers. [Learn more](https://web.dev/aria-required-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-children":{"id":"aria-required-children","title":"Elements with an ARIA `[role]` that require children to contain a specific `[role]` have all required children.","description":"Some ARIA parent roles must contain specific child roles to perform their intended accessibility functions. [Learn more](https://web.dev/aria-required-children/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-parent":{"id":"aria-required-parent","title":"`[role]`s are contained by their required parent element","description":"Some ARIA child roles must be contained by specific parent roles to properly perform their intended accessibility functions. [Learn more](https://web.dev/aria-required-parent/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-roles":{"id":"aria-roles","title":"`[role]` values are valid","description":"ARIA roles must have valid values in order to perform their intended accessibility functions. [Learn more](https://web.dev/aria-roles/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-valid-attr-value":{"id":"aria-valid-attr-value","title":"`[aria-*]` attributes have valid values","description":"Assistive technologies, like screen readers, can't interpret ARIA attributes with invalid values. [Learn more](https://web.dev/aria-valid-attr-value/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-valid-attr":{"id":"aria-valid-attr","title":"`[aria-*]` attributes are valid and not misspelled","description":"Assistive technologies, like screen readers, can't interpret ARIA attributes with invalid names. [Learn more](https://web.dev/aria-valid-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"audio-caption":{"id":"audio-caption","title":"`\u003caudio>` elements contain a `\u003ctrack>` element with `[kind=\"captions\"]`","description":"Captions make audio elements usable for deaf or hearing-impaired users, providing critical information such as who is talking, what they're saying, and other non-speech information. [Learn more](https://web.dev/audio-caption/).","score":null,"scoreDisplayMode":"notApplicable"},"button-name":{"id":"button-name","title":"Buttons have an accessible name","description":"When a button doesn't have an accessible name, screen readers announce it as \"button\", making it unusable for users who rely on screen readers. [Learn more](https://web.dev/button-name/).","score":null,"scoreDisplayMode":"notApplicable"},"bypass":{"id":"bypass","title":"The page contains a heading, skip link, or landmark region","description":"Adding ways to bypass repetitive content lets keyboard users navigate the page more efficiently. [Learn more](https://web.dev/bypass/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"color-contrast":{"id":"color-contrast","title":"Background and foreground colors do not have a sufficient contrast ratio.","description":"Low-contrast text is difficult or impossible for many users to read. [Learn more](https://web.dev/color-contrast/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":".px-0.mt-0.col-10:nth-child(3) > .card.theme-panel.z-depth-0 > .card-body > p","path":"1,HTML,1,BODY,0,APPLICATION,1,MAIN,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,3,DIV,0,DIV,1,DIV,1,P","snippet":"\u003cp class=\"card-text\">Сервис коротких ссылок, необходимый для корректной работы сайта!\u003c/p>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.28 (foreground color: #747373, background color: #242424, font size: 10.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Сервис коротких ссылок, необходимый для корректной работы сайта!"}},{"node":{"type":"node","selector":"a[href$=\"bl6\"]","path":"1,HTML,1,BODY,0,APPLICATION,1,MAIN,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,3,DIV,0,DIV,1,DIV,2,A","snippet":"\u003ca href=\"https://go.iny.su/bl6\" onclick=\"return nav.go(this);\" data-lang=\"text_open\" type=\"button\" class=\"btn btn-rounded btn-outline-primary z-depth-0\" data-lang-success=\"true\">Открыть\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 4.35 (foreground color: #4285f4, background color: #242424, font size: 9.7pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"ОТКРЫТЬ"}},{"node":{"type":"node","selector":".px-0.mt-0.col-10:nth-child(4) > .card.theme-panel.z-depth-0 > .card-body > p","path":"1,HTML,1,BODY,0,APPLICATION,1,MAIN,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,4,DIV,0,DIV,1,DIV,1,P","snippet":"\u003cp class=\"card-text\">Tester Online - Уникальная система создания тестов на INY.SU!\u003c/p>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.28 (foreground color: #747373, background color: #242424, font size: 10.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Tester Online - Уникальная система создания тестов на INY.SU!"}},{"node":{"type":"node","selector":"a[href$=\"bl7\"]","path":"1,HTML,1,BODY,0,APPLICATION,1,MAIN,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,4,DIV,0,DIV,1,DIV,2,A","snippet":"\u003ca href=\"https://go.iny.su/bl7\" onclick=\"return nav.go(this);\" data-lang=\"text_open\" type=\"button\" class=\"btn btn-rounded btn-outline-primary z-depth-0\" data-lang-success=\"true\">Открыть\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 4.35 (foreground color: #4285f4, background color: #242424, font size: 9.7pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"ОТКРЫТЬ"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.color","wcag2aa","wcag143"]}}},"definition-list":{"id":"definition-list","title":"`\u003cdl>`'s contain only properly-ordered `\u003cdt>` and `\u003cdd>` groups, `\u003cscript>` or `\u003ctemplate>` elements.","description":"When definition lists are not properly marked up, screen readers may produce confusing or inaccurate output. [Learn more](https://web.dev/definition-list/).","score":null,"scoreDisplayMode":"notApplicable"},"dlitem":{"id":"dlitem","title":"Definition list items are wrapped in `\u003cdl>` elements","description":"Definition list items (`\u003cdt>` and `\u003cdd>`) must be wrapped in a parent `\u003cdl>` element to ensure that screen readers can properly announce them. [Learn more](https://web.dev/dlitem/).","score":null,"scoreDisplayMode":"notApplicable"},"document-title":{"id":"document-title","title":"Document has a `\u003ctitle>` element","description":"The title gives screen reader users an overview of the page, and search engine users rely on it heavily to determine if a page is relevant to their search. [Learn more](https://web.dev/document-title/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"duplicate-id":{"id":"duplicate-id","title":"`[id]` attributes on the page are unique","description":"The value of an id attribute must be unique to prevent other instances from being overlooked by assistive technologies. [Learn more](https://web.dev/duplicate-id/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"frame-title":{"id":"frame-title","title":"`\u003cframe>` or `\u003ciframe>` elements have a title","description":"Screen reader users rely on frame titles to describe the contents of frames. [Learn more](https://web.dev/frame-title/).","score":null,"scoreDisplayMode":"notApplicable"},"html-has-lang":{"id":"html-has-lang","title":"`\u003chtml>` element has a `[lang]` attribute","description":"If a page doesn't specify a lang attribute, a screen reader assumes that the page is in the default language that the user chose when setting up the screen reader. If the page isn't actually in the default language, then the screen reader might not announce the page's text correctly. [Learn more](https://web.dev/html-has-lang/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"html-lang-valid":{"id":"html-lang-valid","title":"`\u003chtml>` element has a valid value for its `[lang]` attribute","description":"Specifying a valid [BCP 47 language](https://www.w3.org/International/questions/qa-choosing-language-tags#question) helps screen readers announce text properly. [Learn more](https://web.dev/html-lang-valid/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"image-alt":{"id":"image-alt","title":"Image elements have `[alt]` attributes","description":"Informative elements should aim for short, descriptive alternate text. Decorative elements can be ignored with an empty alt attribute. [Learn more](https://web.dev/image-alt/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"input-image-alt":{"id":"input-image-alt","title":"`\u003cinput type=\"image\">` elements have `[alt]` text","description":"When an image is being used as an `\u003cinput>` button, providing alternative text can help screen reader users understand the purpose of the button. [Learn more](https://web.dev/input-image-alt/).","score":null,"scoreDisplayMode":"notApplicable"},"label":{"id":"label","title":"Form elements have associated labels","description":"Labels ensure that form controls are announced properly by assistive technologies, like screen readers. [Learn more](https://web.dev/label/).","score":null,"scoreDisplayMode":"notApplicable"},"layout-table":{"id":"layout-table","title":"Presentational `\u003ctable>` elements avoid using `\u003cth>`, `\u003ccaption>` or the `[summary]` attribute.","description":"A table being used for layout purposes should not include data elements, such as the th or caption elements or the summary attribute, because this can create a confusing experience for screen reader users. [Learn more](https://web.dev/layout-table/).","score":null,"scoreDisplayMode":"notApplicable"},"link-name":{"id":"link-name","title":"Links do not have a discernible name","description":"Link text (and alternate text for images, when used as links) that is discernible, unique, and focusable improves the navigation experience for screen reader users. [Learn more](https://web.dev/link-name/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"#themeToggle","path":"1,HTML,1,BODY,0,APPLICATION,0,HEADER,0,NAV,0,DIV,3,UL,0,LI,0,A","snippet":"\u003ca id=\"themeToggle\" class=\"nav-link waves-effect waves-light\" onclick=\"styleThemeToggle('#themeToggle'); return false;\" href=\"#\">","explanation":"Fix all of the following:\n  Element is in tab order and does not have accessible text\n\nFix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"a"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.name-role-value","wcag2a","wcag412","wcag244","section508","section508.22.a"]}}},"list":{"id":"list","title":"Lists contain only `\u003cli>` elements and script supporting elements (`\u003cscript>` and `\u003ctemplate>`).","description":"Screen readers have a specific way of announcing lists. Ensuring proper list structure aids screen reader output. [Learn more](https://web.dev/list/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"listitem":{"id":"listitem","title":"List items (`\u003cli>`) are contained within `\u003cul>` or `\u003col>` parent elements","description":"Screen readers require list items (`\u003cli>`) to be contained within a parent `\u003cul>` or `\u003col>` to be announced properly. [Learn more](https://web.dev/listitem/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"meta-refresh":{"id":"meta-refresh","title":"The document does not use `\u003cmeta http-equiv=\"refresh\">`","description":"Users do not expect a page to refresh automatically, and doing so will move focus back to the top of the page. This may create a frustrating or confusing experience. [Learn more](https://web.dev/meta-refresh/).","score":null,"scoreDisplayMode":"notApplicable"},"meta-viewport":{"id":"meta-viewport","title":"`[user-scalable=\"no\"]` is not used in the `\u003cmeta name=\"viewport\">` element and the `[maximum-scale]` attribute is not less than 5.","description":"Disabling zooming is problematic for users with low vision who rely on screen magnification to properly see the contents of a web page. [Learn more](https://web.dev/meta-viewport/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"object-alt":{"id":"object-alt","title":"`\u003cobject>` elements have `[alt]` text","description":"Screen readers cannot translate non-text content. Adding alt text to `\u003cobject>` elements helps screen readers convey meaning to users. [Learn more](https://web.dev/object-alt/).","score":null,"scoreDisplayMode":"notApplicable"},"tabindex":{"id":"tabindex","title":"No element has a `[tabindex]` value greater than 0","description":"A value greater than 0 implies an explicit navigation ordering. Although technically valid, this often creates frustrating experiences for users who rely on assistive technologies. [Learn more](https://web.dev/tabindex/).","score":null,"scoreDisplayMode":"notApplicable"},"td-headers-attr":{"id":"td-headers-attr","title":"Cells in a `\u003ctable>` element that use the `[headers]` attribute refer to table cells within the same table.","description":"Screen readers have features to make navigating tables easier. Ensuring `\u003ctd>` cells using the `[headers]` attribute only refer to other cells in the same table may improve the experience for screen reader users. [Learn more](https://web.dev/td-headers-attr/).","score":null,"scoreDisplayMode":"notApplicable"},"th-has-data-cells":{"id":"th-has-data-cells","title":"`\u003cth>` elements and elements with `[role=\"columnheader\"/\"rowheader\"]` have data cells they describe.","description":"Screen readers have features to make navigating tables easier. Ensuring table headers always refer to some set of cells may improve the experience for screen reader users. [Learn more](https://web.dev/th-has-data-cells/).","score":null,"scoreDisplayMode":"notApplicable"},"valid-lang":{"id":"valid-lang","title":"`[lang]` attributes have a valid value","description":"Specifying a valid [BCP 47 language](https://www.w3.org/International/questions/qa-choosing-language-tags#question) on elements helps ensure that text is pronounced correctly by a screen reader. [Learn more](https://web.dev/valid-lang/).","score":null,"scoreDisplayMode":"notApplicable"},"video-caption":{"id":"video-caption","title":"`\u003cvideo>` elements contain a `\u003ctrack>` element with `[kind=\"captions\"]`","description":"When a video provides a caption it is easier for deaf and hearing impaired users to access its information. [Learn more](https://web.dev/video-caption/).","score":null,"scoreDisplayMode":"notApplicable"},"video-description":{"id":"video-description","title":"`\u003cvideo>` elements contain a `\u003ctrack>` element with `[kind=\"description\"]`","description":"Audio descriptions provide relevant information for videos that dialogue cannot, such as facial expressions and scenes. [Learn more](https://web.dev/video-description/).","score":null,"scoreDisplayMode":"notApplicable"},"custom-controls-labels":{"id":"custom-controls-labels","title":"Custom controls have associated labels","description":"Custom interactive controls have associated labels, provided by aria-label or aria-labelledby. [Learn more](https://web.dev/custom-controls-labels/).","score":null,"scoreDisplayMode":"manual"},"custom-controls-roles":{"id":"custom-controls-roles","title":"Custom controls have ARIA roles","description":"Custom interactive controls have appropriate ARIA roles. [Learn more](https://web.dev/custom-control-roles/).","score":null,"scoreDisplayMode":"manual"},"focus-traps":{"id":"focus-traps","title":"User focus is not accidentally trapped in a region","description":"A user can tab into and out of any control or region without accidentally trapping their focus. [Learn more](https://web.dev/focus-traps/).","score":null,"scoreDisplayMode":"manual"},"focusable-controls":{"id":"focusable-controls","title":"Interactive controls are keyboard focusable","description":"Custom interactive controls are keyboard focusable and display a focus indicator. [Learn more](https://web.dev/focusable-controls/).","score":null,"scoreDisplayMode":"manual"},"heading-levels":{"id":"heading-levels","title":"Headings don't skip levels","description":"Headings are used to create an outline for the page and heading levels are not skipped. [Learn more](https://web.dev/heading-levels/).","score":null,"scoreDisplayMode":"manual"},"interactive-element-affordance":{"id":"interactive-element-affordance","title":"Interactive elements indicate their purpose and state","description":"Interactive elements, such as links and buttons, should indicate their state and be distinguishable from non-interactive elements. [Learn more](https://web.dev/interactive-element-affordance/).","score":null,"scoreDisplayMode":"manual"},"logical-tab-order":{"id":"logical-tab-order","title":"The page has a logical tab order","description":"Tabbing through the page follows the visual layout. Users cannot focus elements that are offscreen. [Learn more](https://web.dev/logical-tab-order/).","score":null,"scoreDisplayMode":"manual"},"managed-focus":{"id":"managed-focus","title":"The user's focus is directed to new content added to the page","description":"If new content, such as a dialog, is added to the page, the user's focus is directed to it. [Learn more](https://web.dev/managed-focus/).","score":null,"scoreDisplayMode":"manual"},"offscreen-content-hidden":{"id":"offscreen-content-hidden","title":"Offscreen content is hidden from assistive technology","description":"Offscreen content is hidden with display: none or aria-hidden=true. [Learn more](https://web.dev/offscreen-content-hidden/).","score":null,"scoreDisplayMode":"manual"},"use-landmarks":{"id":"use-landmarks","title":"HTML5 landmark elements are used to improve navigation","description":"Landmark elements (\u003cmain>, \u003cnav>, etc.) are used to improve the keyboard navigation of the page for assistive technology. [Learn more](https://web.dev/use-landmarks/).","score":null,"scoreDisplayMode":"manual"},"visual-order-follows-dom":{"id":"visual-order-follows-dom","title":"Visual order on the page follows DOM order","description":"DOM order matches the visual order, improving navigation for assistive technology. [Learn more](https://web.dev/visual-order-follows-dom/).","score":null,"scoreDisplayMode":"manual"},"uses-long-cache-ttl":{"id":"uses-long-cache-ttl","title":"Serve static assets with an efficient cache policy","description":"A long cache lifetime can speed up repeat visits to your page. [Learn more](https://web.dev/uses-long-cache-ttl).","score":0.74,"scoreDisplayMode":"numeric","numericValue":60557.74525139664,"displayValue":"14 resources found","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"cacheLifetimeMs","itemType":"ms","text":"Cache TTL","displayUnit":"duration"},{"key":"totalBytes","itemType":"bytes","text":"Size","displayUnit":"kb","granularity":1}],"items":[{"url":"https://go.iny.su/uc/cc4ca42/v6f7584/bb549e6e/bd64c099313.jpg","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":154255,"wastedBytes":14391.388268156423},{"url":"https://go.iny.su/uc/cc4ca42/v6f7584/ef567538/ffed277ea1d.jpg","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":149029,"wastedBytes":13903.822905027931},{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":67558,"wastedBytes":6302.897206703909},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":67455,"wastedBytes":6293.2877094972055},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Light.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":66263,"wastedBytes":6182.07877094972},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":65975,"wastedBytes":6155.2094972067025},{"url":"https://iny.su/web/vendor/js/jquery.js","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":45348,"wastedBytes":4230.7910614525135},{"url":"https://iny.su/web/vendor/css/bootstrap.min.css?version=4","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":23361,"wastedBytes":2179.4899441340776},{"url":"https://iny.su/web/js/module/@offline.js","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":3266,"wastedBytes":304.70502793296083},{"url":"https://iny.su/web/js/core/init.js?version=273","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":2910,"wastedBytes":271.4916201117318},{"url":"https://iny.su/web/css/@offline.css","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":1357,"wastedBytes":126.60279329608936},{"url":"https://iny.su/web/css/theme/main-dark.css?version=32","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":893,"wastedBytes":83.31340782122903},{"url":"https://iny.su/web/css/themes.css?version=10","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":743,"wastedBytes":69.31899441340781},{"url":"https://iny.su/web/css/common.css?version=68","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":679,"wastedBytes":63.34804469273742}],"summary":{"wastedBytes":60557.74525139664}}},"total-byte-weight":{"id":"total-byte-weight","title":"Avoids enormous network payloads","description":"Large network payloads cost users real money and are highly correlated with long load times. [Learn more](https://web.dev/total-byte-weight).","score":1,"scoreDisplayMode":"numeric","numericValue":1241318,"displayValue":"Total size was 1,212 KB","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"totalBytes","itemType":"bytes","text":"Size"}],"items":[{"url":"https://iny.su/web/vendor/js/icon.js?version=4","totalBytes":413457},{"url":"https://go.iny.su/uc/cc4ca42/v6f7584/bb549e6e/bd64c099313.jpg","totalBytes":154255},{"url":"https://go.iny.su/uc/cc4ca42/v6f7584/ef567538/ffed277ea1d.jpg","totalBytes":149029},{"url":"https://iny.su/web/vendor/js/mdb.min.js?version=4","totalBytes":121065},{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","totalBytes":67558},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","totalBytes":67455},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Light.woff2","totalBytes":66263},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","totalBytes":65975},{"url":"https://iny.su/web/vendor/js/jquery.js","totalBytes":45348},{"url":"https://iny.su/web/vendor/css/bootstrap.min.css?version=4","totalBytes":23361}]}},"offscreen-images":{"id":"offscreen-images","title":"Defer offscreen images","description":"Consider lazy-loading offscreen and hidden images after all critical resources have finished loading to lower time to interactive. [Learn more](https://web.dev/offscreen-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"render-blocking-resources":{"id":"render-blocking-resources","title":"Eliminate render-blocking resources","description":"Resources are blocking the first paint of your page. Consider delivering critical JS/CSS inline and deferring all non-critical JS/styles. [Learn more](https://web.dev/render-blocking-resources).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"unminified-css":{"id":"unminified-css","title":"Minify CSS","description":"Minifying CSS files can reduce network payload sizes. [Learn more](https://web.dev/unminified-css).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"unminified-javascript":{"id":"unminified-javascript","title":"Minify JavaScript","description":"Minifying JavaScript files can reduce payload sizes and script parse time. [Learn more](https://web.dev/unminified-javascript).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"unused-css-rules":{"id":"unused-css-rules","title":"Remove unused CSS","description":"Remove dead rules from stylesheets and defer the loading of CSS not used for above-the-fold content to reduce unnecessary bytes consumed by network activity. [Learn more](https://web.dev/unused-css-rules).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"Potential savings of 87 KB","details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"totalBytes","valueType":"bytes","label":"Size"},{"key":"wastedBytes","valueType":"bytes","label":"Potential Savings"}],"items":[{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","wastedBytes":66771,"wastedPercent":98.83541427988894,"totalBytes":67558},{"url":"https://iny.su/web/vendor/css/bootstrap.min.css?version=4","wastedBytes":22153,"wastedPercent":94.82723198808408,"totalBytes":23361}],"overallSavingsMs":0,"overallSavingsBytes":88924}},"uses-webp-images":{"id":"uses-webp-images","title":"Serve images in next-gen formats","description":"Image formats like JPEG 2000, JPEG XR, and WebP often provide better compression than PNG or JPEG, which means faster downloads and less data consumption. [Learn more](https://web.dev/uses-webp-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-optimized-images":{"id":"uses-optimized-images","title":"Efficiently encode images","description":"Optimized images load faster and consume less cellular data. [Learn more](https://web.dev/uses-optimized-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-text-compression":{"id":"uses-text-compression","title":"Enable text compression","description":"Text-based resources should be served with compression (gzip, deflate or brotli) to minimize total network bytes. [Learn more](https://web.dev/uses-text-compression).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-responsive-images":{"id":"uses-responsive-images","title":"Properly size images","description":"Serve images that are appropriately-sized to save cellular data and improve load time. [Learn more](https://web.dev/uses-responsive-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"Potential savings of 224 KB","warnings":[],"details":{"type":"opportunity","headings":[{"key":"url","valueType":"thumbnail","label":""},{"key":"url","valueType":"url","label":"URL"},{"key":"totalBytes","valueType":"bytes","label":"Size"},{"key":"wastedBytes","valueType":"bytes","label":"Potential Savings"}],"items":[{"url":"https://go.iny.su/uc/cc4ca42/v6f7584/bb549e6e/bd64c099313.jpg","totalBytes":154255,"wastedBytes":116745,"wastedPercent":75.68327430996729},{"url":"https://go.iny.su/uc/cc4ca42/v6f7584/ef567538/ffed277ea1d.jpg","totalBytes":149029,"wastedBytes":112790,"wastedPercent":75.68327430996729}],"overallSavingsMs":0,"overallSavingsBytes":229535}},"efficient-animated-content":{"id":"efficient-animated-content","title":"Use video formats for animated content","description":"Large GIFs are inefficient for delivering animated content. Consider using MPEG4/WebM videos for animations and PNG/WebP for static images instead of GIF to save network bytes. [Learn more](https://web.dev/efficient-animated-content)","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"appcache-manifest":{"id":"appcache-manifest","title":"Avoids Application Cache","description":"Application Cache is deprecated. [Learn more](https://web.dev/appcache-manifest).","score":1,"scoreDisplayMode":"binary"},"doctype":{"id":"doctype","title":"Page has the HTML doctype","description":"Specifying a doctype prevents the browser from switching to quirks-mode. [Learn more](https://web.dev/doctype).","score":1,"scoreDisplayMode":"binary"},"dom-size":{"id":"dom-size","title":"Avoids an excessive DOM size","description":"A large DOM will increase memory usage, cause longer [style calculations](https://developers.google.com/web/fundamentals/performance/rendering/reduce-the-scope-and-complexity-of-style-calculations), and produce costly [layout reflows](https://developers.google.com/speed/articles/reflow). [Learn more](https://web.dev/dom-size).","score":1,"scoreDisplayMode":"numeric","numericValue":213,"displayValue":"213 elements","details":{"type":"table","headings":[{"key":"statistic","itemType":"text","text":"Statistic"},{"key":"element","itemType":"code","text":"Element"},{"key":"value","itemType":"numeric","text":"Value"}],"items":[{"statistic":"Total DOM Elements","element":"","value":"213"},{"statistic":"Maximum DOM Depth","element":{"type":"code","value":"\u003cpath fill=\"currentColor\" d=\"M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z\">"},"value":"12"},{"statistic":"Maximum Child Elements","element":{"type":"code","value":"\u003cbody aria-busy=\"true\">"},"value":"26"}]}},"external-anchors-use-rel-noopener":{"id":"external-anchors-use-rel-noopener","title":"Links to cross-origin destinations are safe","description":"Add `rel=\"noopener\"` or `rel=\"noreferrer\"` to any external links to improve performance and prevent security vulnerabilities. [Learn more](https://web.dev/external-anchors-use-rel-noopener).","score":1,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[],"items":[]}},"geolocation-on-start":{"id":"geolocation-on-start","title":"Avoids requesting the geolocation permission on page load","description":"Users are mistrustful of or confused by sites that request their location without context. Consider tying the request to a user action instead. [Learn more](https://web.dev/geolocation-on-start).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"no-document-write":{"id":"no-document-write","title":"Avoids `document.write()`","description":"For users on slow connections, external scripts dynamically injected via `document.write()` can delay page load by tens of seconds. [Learn more](https://web.dev/no-document-write).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"no-vulnerable-libraries":{"id":"no-vulnerable-libraries","title":"Avoids front-end JavaScript libraries with known security vulnerabilities","description":"Some third-party scripts may contain known security vulnerabilities that are easily identified and exploited by attackers. [Learn more](https://web.dev/no-vulnerable-libraries).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[],"summary":{}}},"js-libraries":{"id":"js-libraries","title":"Detected JavaScript libraries","description":"All front-end JavaScript libraries detected on the page. [Learn more](https://web.dev/js-libraries).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"name","itemType":"text","text":"Name"},{"key":"version","itemType":"text","text":"Version"}],"items":[{"name":"Bootstrap","version":"4.3.1","npm":"bootstrap"},{"name":"jQuery","version":"3.4.1","npm":"jquery"},{"name":"jQuery (Fast path)","npm":"jquery"}],"summary":{}}},"notification-on-start":{"id":"notification-on-start","title":"Avoids requesting the notification permission on page load","description":"Users are mistrustful of or confused by sites that request to send notifications without context. Consider tying the request to user gestures instead. [Learn more](https://web.dev/notification-on-start).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"password-inputs-can-be-pasted-into":{"id":"password-inputs-can-be-pasted-into","title":"Allows users to paste into password fields","description":"Preventing password pasting undermines good security policy. [Learn more](https://web.dev/password-inputs-can-be-pasted-into).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"uses-http2":{"id":"uses-http2","title":"Uses HTTP/2 for its own resources","description":"HTTP/2 offers many benefits over HTTP/1.1, including binary headers, multiplexing, and server push. [Learn more](https://web.dev/uses-http2).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[]}},"uses-passive-event-listeners":{"id":"uses-passive-event-listeners","title":"Uses passive listeners to improve scrolling performance","description":"Consider marking your touch and wheel event listeners as `passive` to improve your page's scroll performance. [Learn more](https://web.dev/uses-passive-event-listeners).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"meta-description":{"id":"meta-description","title":"Document does not have a meta description","description":"Meta descriptions may be included in search results to concisely summarize page content. [Learn more](https://web.dev/meta-description).","score":0,"scoreDisplayMode":"binary","explanation":"Description text is empty."},"http-status-code":{"id":"http-status-code","title":"Page has successful HTTP status code","description":"Pages with unsuccessful HTTP status codes may not be indexed properly. [Learn more](https://web.dev/http-status-code).","score":1,"scoreDisplayMode":"binary"},"font-size":{"id":"font-size","title":"Document uses legible font sizes","description":"Font sizes less than 12px are too small to be legible and require mobile visitors to “pinch to zoom” in order to read. Strive to have >60% of page text ≥12px. [Learn more](https://web.dev/font-size).","score":null,"scoreDisplayMode":"notApplicable"},"link-text":{"id":"link-text","title":"Links have descriptive text","description":"Descriptive link text helps search engines understand your content. [Learn more](https://web.dev/link-text).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[],"summary":{}}},"is-crawlable":{"id":"is-crawlable","title":"Page isn’t blocked from indexing","description":"Search engines are unable to include your pages in search results if they don't have permission to crawl them. [Learn more](https://web.dev/is-crawable).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"robots-txt":{"id":"robots-txt","title":"robots.txt is valid","description":"If your robots.txt file is malformed, crawlers may not be able to understand how you want your website to be crawled or indexed. [Learn more](https://web.dev/robots-txt).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[],"summary":{}}},"tap-targets":{"id":"tap-targets","title":"Tap targets are sized appropriately","description":"Interactive elements like buttons and links should be large enough (48x48px), and have enough space around them, to be easy enough to tap without overlapping onto other elements. [Learn more](https://web.dev/tap-targets).","score":null,"scoreDisplayMode":"notApplicable"},"hreflang":{"id":"hreflang","title":"Document has a valid `hreflang`","description":"hreflang links tell search engines what version of a page they should list in search results for a given language or region. [Learn more](https://web.dev/hreflang).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"plugins":{"id":"plugins","title":"Document avoids plugins","description":"Search engines can't index plugin content, and many devices restrict plugins or don't support them. [Learn more](https://web.dev/plugins).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"canonical":{"id":"canonical","title":"Document has a valid `rel=canonical`","description":"Canonical links suggest which URL to show in search results. [Learn more](https://web.dev/canonical).","score":null,"scoreDisplayMode":"notApplicable"},"structured-data":{"id":"structured-data","title":"Structured data is valid","description":"Run the [Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool/) and the [Structured Data Linter](http://linter.structured-data.org/) to validate structured data. [Learn more](https://web.dev/structured-data).","score":null,"scoreDisplayMode":"manual"}},"configSettings":{"output":"json","maxWaitForFcp":30000,"maxWaitForLoad":45000,"throttlingMethod":"simulate","throttling":{"rttMs":150,"throughputKbps":1638.4,"requestLatencyMs":562.5,"downloadThroughputKbps":1474.5600000000002,"uploadThroughputKbps":675,"cpuSlowdownMultiplier":4},"auditMode":false,"gatherMode":false,"disableStorageReset":false,"emulatedFormFactor":"desktop","internalDisableDeviceScreenEmulation":true,"channel":"devtools","budgets":null,"locale":"en-US","blockedUrlPatterns":null,"additionalTraceCategories":null,"extraHeaders":null,"precomputedLanternData":null,"onlyAudits":null,"onlyCategories":["performance","pwa","best-practices","accessibility","seo"],"skipAudits":null},"categories":{"performance":{"title":"Performance","auditRefs":[{"id":"first-contentful-paint","weight":3,"group":"metrics"},{"id":"first-meaningful-paint","weight":1,"group":"metrics"},{"id":"speed-index","weight":4,"group":"metrics"},{"id":"interactive","weight":5,"group":"metrics"},{"id":"first-cpu-idle","weight":2,"group":"metrics"},{"id":"max-potential-fid","weight":0,"group":"metrics"},{"id":"estimated-input-latency","weight":0},{"id":"total-blocking-time","weight":0},{"id":"render-blocking-resources","weight":0,"group":"load-opportunities"},{"id":"uses-responsive-images","weight":0,"group":"load-opportunities"},{"id":"offscreen-images","weight":0,"group":"load-opportunities"},{"id":"unminified-css","weight":0,"group":"load-opportunities"},{"id":"unminified-javascript","weight":0,"group":"load-opportunities"},{"id":"unused-css-rules","weight":0,"group":"load-opportunities"},{"id":"uses-optimized-images","weight":0,"group":"load-opportunities"},{"id":"uses-webp-images","weight":0,"group":"load-opportunities"},{"id":"uses-text-compression","weight":0,"group":"load-opportunities"},{"id":"uses-rel-preconnect","weight":0,"group":"load-opportunities"},{"id":"time-to-first-byte","weight":0,"group":"load-opportunities"},{"id":"redirects","weight":0,"group":"load-opportunities"},{"id":"uses-rel-preload","weight":0,"group":"load-opportunities"},{"id":"efficient-animated-content","weight":0,"group":"load-opportunities"},{"id":"total-byte-weight","weight":0,"group":"diagnostics"},{"id":"uses-long-cache-ttl","weight":0,"group":"diagnostics"},{"id":"dom-size","weight":0,"group":"diagnostics"},{"id":"critical-request-chains","weight":0,"group":"diagnostics"},{"id":"user-timings","weight":0,"group":"diagnostics"},{"id":"bootup-time","weight":0,"group":"diagnostics"},{"id":"mainthread-work-breakdown","weight":0,"group":"diagnostics"},{"id":"font-display","weight":0,"group":"diagnostics"},{"id":"performance-budget","weight":0,"group":"budgets"},{"id":"resource-summary","weight":0,"group":"diagnostics"},{"id":"third-party-summary","weight":0,"group":"diagnostics"},{"id":"network-requests","weight":0},{"id":"network-rtt","weight":0},{"id":"network-server-latency","weight":0},{"id":"main-thread-tasks","weight":0},{"id":"diagnostics","weight":0},{"id":"metrics","weight":0},{"id":"screenshot-thumbnails","weight":0},{"id":"final-screenshot","weight":0}],"id":"performance","score":0.13},"accessibility":{"title":"Accessibility","description":"These checks highlight opportunities to [improve the accessibility of your web app](https://developers.google.com/web/fundamentals/accessibility). Only a subset of accessibility issues can be automatically detected so manual testing is also encouraged.","manualDescription":"These items address areas which an automated testing tool cannot cover. Learn more in our guide on [conducting an accessibility review](https://developers.google.com/web/fundamentals/accessibility/how-to-review).","auditRefs":[{"id":"accesskeys","weight":0,"group":"a11y-navigation"},{"id":"aria-allowed-attr","weight":10,"group":"a11y-aria"},{"id":"aria-required-attr","weight":10,"group":"a11y-aria"},{"id":"aria-required-children","weight":10,"group":"a11y-aria"},{"id":"aria-required-parent","weight":10,"group":"a11y-aria"},{"id":"aria-roles","weight":10,"group":"a11y-aria"},{"id":"aria-valid-attr-value","weight":10,"group":"a11y-aria"},{"id":"aria-valid-attr","weight":10,"group":"a11y-aria"},{"id":"audio-caption","weight":0,"group":"a11y-audio-video"},{"id":"button-name","weight":0,"group":"a11y-names-labels"},{"id":"bypass","weight":3,"group":"a11y-navigation"},{"id":"color-contrast","weight":3,"group":"a11y-color-contrast"},{"id":"definition-list","weight":0,"group":"a11y-tables-lists"},{"id":"dlitem","weight":0,"group":"a11y-tables-lists"},{"id":"document-title","weight":3,"group":"a11y-names-labels"},{"id":"duplicate-id","weight":1,"group":"a11y-best-practices"},{"id":"frame-title","weight":0,"group":"a11y-names-labels"},{"id":"html-has-lang","weight":3,"group":"a11y-language"},{"id":"html-lang-valid","weight":3,"group":"a11y-language"},{"id":"image-alt","weight":10,"group":"a11y-names-labels"},{"id":"input-image-alt","weight":0,"group":"a11y-names-labels"},{"id":"label","weight":0,"group":"a11y-names-labels"},{"id":"layout-table","weight":0,"group":"a11y-tables-lists"},{"id":"link-name","weight":3,"group":"a11y-names-labels"},{"id":"list","weight":3,"group":"a11y-tables-lists"},{"id":"listitem","weight":3,"group":"a11y-tables-lists"},{"id":"meta-refresh","weight":0,"group":"a11y-best-practices"},{"id":"meta-viewport","weight":10,"group":"a11y-best-practices"},{"id":"object-alt","weight":0,"group":"a11y-names-labels"},{"id":"tabindex","weight":0,"group":"a11y-navigation"},{"id":"td-headers-attr","weight":0,"group":"a11y-tables-lists"},{"id":"th-has-data-cells","weight":0,"group":"a11y-tables-lists"},{"id":"valid-lang","weight":0,"group":"a11y-language"},{"id":"video-caption","weight":0,"group":"a11y-audio-video"},{"id":"video-description","weight":0,"group":"a11y-audio-video"},{"id":"logical-tab-order","weight":0},{"id":"focusable-controls","weight":0},{"id":"interactive-element-affordance","weight":0},{"id":"managed-focus","weight":0},{"id":"focus-traps","weight":0},{"id":"custom-controls-labels","weight":0},{"id":"custom-controls-roles","weight":0},{"id":"visual-order-follows-dom","weight":0},{"id":"offscreen-content-hidden","weight":0},{"id":"heading-levels","weight":0},{"id":"use-landmarks","weight":0}],"id":"accessibility","score":0.95},"best-practices":{"title":"Best Practices","auditRefs":[{"id":"appcache-manifest","weight":1},{"id":"is-on-https","weight":1},{"id":"uses-http2","weight":1},{"id":"uses-passive-event-listeners","weight":1},{"id":"no-document-write","weight":1},{"id":"external-anchors-use-rel-noopener","weight":1},{"id":"geolocation-on-start","weight":1},{"id":"doctype","weight":1},{"id":"no-vulnerable-libraries","weight":1},{"id":"js-libraries","weight":0},{"id":"notification-on-start","weight":1},{"id":"deprecations","weight":1},{"id":"password-inputs-can-be-pasted-into","weight":1},{"id":"errors-in-console","weight":1},{"id":"image-aspect-ratio","weight":1}],"id":"best-practices","score":0.93},"seo":{"title":"SEO","description":"These checks ensure that your page is optimized for search engine results ranking. There are additional factors Lighthouse does not check that may affect your search ranking. [Learn more](https://support.google.com/webmasters/answer/35769).","manualDescription":"Run these additional validators on your site to check additional SEO best practices.","auditRefs":[{"id":"viewport","weight":1,"group":"seo-mobile"},{"id":"document-title","weight":1,"group":"seo-content"},{"id":"meta-description","weight":1,"group":"seo-content"},{"id":"http-status-code","weight":1,"group":"seo-crawl"},{"id":"link-text","weight":1,"group":"seo-content"},{"id":"is-crawlable","weight":1,"group":"seo-crawl"},{"id":"robots-txt","weight":1,"group":"seo-crawl"},{"id":"image-alt","weight":1,"group":"seo-content"},{"id":"hreflang","weight":1,"group":"seo-content"},{"id":"canonical","weight":0,"group":"seo-content"},{"id":"font-size","weight":0,"group":"seo-mobile"},{"id":"plugins","weight":1,"group":"seo-content"},{"id":"tap-targets","weight":0,"group":"seo-mobile"},{"id":"structured-data","weight":0}],"id":"seo","score":0.9},"pwa":{"title":"Progressive Web App","description":"These checks validate the aspects of a Progressive Web App. [Learn more](https://developers.google.com/web/progressive-web-apps/checklist).","manualDescription":"These checks are required by the baseline [PWA Checklist](https://developers.google.com/web/progressive-web-apps/checklist) but are not automatically checked by Lighthouse. They do not affect your score but it's important that you verify them manually.","auditRefs":[{"id":"load-fast-enough-for-pwa","weight":7,"group":"pwa-fast-reliable"},{"id":"works-offline","weight":5,"group":"pwa-fast-reliable"},{"id":"offline-start-url","weight":1,"group":"pwa-fast-reliable"},{"id":"is-on-https","weight":2,"group":"pwa-installable"},{"id":"service-worker","weight":1,"group":"pwa-installable"},{"id":"installable-manifest","weight":2,"group":"pwa-installable"},{"id":"redirects-http","weight":2,"group":"pwa-optimized"},{"id":"splash-screen","weight":1,"group":"pwa-optimized"},{"id":"themed-omnibox","weight":1,"group":"pwa-optimized"},{"id":"content-width","weight":0,"group":"pwa-optimized"},{"id":"viewport","weight":2,"group":"pwa-optimized"},{"id":"without-javascript","weight":1,"group":"pwa-optimized"},{"id":"apple-touch-icon","weight":1,"group":"pwa-optimized"},{"id":"pwa-cross-browser","weight":0},{"id":"pwa-page-transitions","weight":0},{"id":"pwa-each-page-has-url","weight":0}],"id":"pwa","score":0.73}},"categoryGroups":{"metrics":{"title":"Metrics"},"load-opportunities":{"title":"Opportunities","description":"These suggestions can help your page load faster. They don't [directly affect](https://github.com/GoogleChrome/lighthouse/blob/d2ec9ffbb21de9ad1a0f86ed24575eda32c796f0/docs/scoring.md#how-are-the-scores-weighted) the Performance score."},"budgets":{"title":"Budgets","description":"Performance budgets set standards for the performance of your site."},"diagnostics":{"title":"Diagnostics","description":"More information about the performance of your application. These numbers don't [directly affect](https://github.com/GoogleChrome/lighthouse/blob/d2ec9ffbb21de9ad1a0f86ed24575eda32c796f0/docs/scoring.md#how-are-the-scores-weighted) the Performance score."},"pwa-fast-reliable":{"title":"Fast and reliable"},"pwa-installable":{"title":"Installable"},"pwa-optimized":{"title":"PWA Optimized"},"a11y-best-practices":{"title":"Best practices","description":"These items highlight common accessibility best practices."},"a11y-color-contrast":{"title":"Contrast","description":"These are opportunities to improve the legibility of your content."},"a11y-names-labels":{"title":"Names and labels","description":"These are opportunities to improve the semantics of the controls in your application. This may enhance the experience for users of assistive technology, like a screen reader."},"a11y-navigation":{"title":"Navigation","description":"These are opportunities to improve keyboard navigation in your application."},"a11y-aria":{"title":"ARIA","description":"These are opportunities to improve the usage of ARIA in your application which may enhance the experience for users of assistive technology, like a screen reader."},"a11y-language":{"title":"Internationalization and localization","description":"These are opportunities to improve the interpretation of your content by users in different locales."},"a11y-audio-video":{"title":"Audio and video","description":"These are opportunities to provide alternative content for audio and video. This may improve the experience for users with hearing or vision impairments."},"a11y-tables-lists":{"title":"Tables and lists","description":"These are opportunities to to improve the experience of reading tabular or list data using assistive technology, like a screen reader."},"seo-mobile":{"title":"Mobile Friendly","description":"Make sure your pages are mobile friendly so users don’t have to pinch or zoom in order to read the content pages. [Learn more](https://developers.google.com/search/mobile-sites/)."},"seo-content":{"title":"Content Best Practices","description":"Format your HTML in a way that enables crawlers to better understand your app’s content."},"seo-crawl":{"title":"Crawling and Indexing","description":"To appear in search results, crawlers need access to your app."},"lighthouse-plugin-publisher-ads-metrics":{"title":"Metrics"},"lighthouse-plugin-publisher-ads-ads-performance":{"title":"Ad Speed"},"lighthouse-plugin-publisher-ads-ads-best-practices":{"title":"Tag Best Practices"}},"timing":{"entries":[{"startTime":237.91,"name":"lh:init:config","duration":90.56,"entryType":"measure"},{"startTime":245.63,"name":"lh:config:requireGatherers","duration":8.24,"entryType":"measure"},{"startTime":254,"name":"lh:config:requireAudits","duration":58.11,"entryType":"measure"},{"startTime":329.35,"name":"lh:init:connect","duration":2.14,"entryType":"measure"},{"startTime":331.56,"name":"lh:gather:loadBlank","duration":31.52,"entryType":"measure"},{"startTime":363.46,"name":"lh:gather:getVersion","duration":2.24,"entryType":"measure"},{"startTime":365.89,"name":"lh:gather:getBenchmarkIndex","duration":502.65,"entryType":"measure"},{"startTime":868.64,"name":"lh:gather:setupDriver","duration":26.35,"entryType":"measure"},{"startTime":895.17,"name":"lh:gather:loadBlank","duration":15.88,"entryType":"measure"},{"startTime":911.24,"name":"lh:gather:setupPassNetwork","duration":3.99,"entryType":"measure"},{"startTime":915.33,"name":"lh:driver:cleanBrowserCaches","duration":108.46,"entryType":"measure"},{"startTime":1024.21,"name":"lh:gather:beforePass","duration":10.28,"entryType":"measure"},{"startTime":1024.34,"name":"lh:gather:beforePass:CSSUsage","duration":0.16,"entryType":"measure"},{"startTime":1024.57,"name":"lh:gather:beforePass:ViewportDimensions","duration":0.07,"entryType":"measure"},{"startTime":1024.67,"name":"lh:gather:beforePass:RuntimeExceptions","duration":0.14,"entryType":"measure"},{"startTime":1024.85,"name":"lh:gather:beforePass:ConsoleMessages","duration":5.05,"entryType":"measure"},{"startTime":1030.01,"name":"lh:gather:beforePass:AnchorElements","duration":0.11,"entryType":"measure"},{"startTime":1030.2,"name":"lh:gather:beforePass:ImageElements","duration":0.06,"entryType":"measure"},{"startTime":1030.32,"name":"lh:gather:beforePass:LinkElements","duration":0.06,"entryType":"measure"},{"startTime":1030.43,"name":"lh:gather:beforePass:MetaElements","duration":0.05,"entryType":"measure"},{"startTime":1030.66,"name":"lh:gather:beforePass:ScriptElements","duration":0.11,"entryType":"measure"},{"startTime":1030.9,"name":"lh:gather:beforePass:AppCacheManifest","duration":0.1,"entryType":"measure"},{"startTime":1031.04,"name":"lh:gather:beforePass:Doctype","duration":0.06,"entryType":"measure"},{"startTime":1031.15,"name":"lh:gather:beforePass:DOMStats","duration":0.05,"entryType":"measure"},{"startTime":1031.24,"name":"lh:gather:beforePass:OptimizedImages","duration":0.07,"entryType":"measure"},{"startTime":1031.34,"name":"lh:gather:beforePass:PasswordInputsWithPreventedPaste","duration":0.05,"entryType":"measure"},{"startTime":1031.44,"name":"lh:gather:beforePass:ResponseCompression","duration":0.06,"entryType":"measure"},{"startTime":1031.53,"name":"lh:gather:beforePass:TagsBlockingFirstPaint","duration":2.42,"entryType":"measure"},{"startTime":1034.02,"name":"lh:gather:beforePass:FontSize","duration":0.07,"entryType":"measure"},{"startTime":1034.14,"name":"lh:gather:beforePass:EmbeddedContent","duration":0.07,"entryType":"measure"},{"startTime":1034.24,"name":"lh:gather:beforePass:RobotsTxt","duration":0.04,"entryType":"measure"},{"startTime":1034.32,"name":"lh:gather:beforePass:TapTargets","duration":0.05,"entryType":"measure"},{"startTime":1034.4,"name":"lh:gather:beforePass:Accessibility","duration":0.05,"entryType":"measure"},{"startTime":1034.68,"name":"lh:gather:beginRecording","duration":10.1,"entryType":"measure"},{"startTime":1035.17,"name":"lh:gather:getVersion","duration":1.64,"entryType":"measure"},{"startTime":1045.24,"name":"lh:gather:loadPage-defaultPass","duration":5633.7,"entryType":"measure"},{"startTime":6679.06,"name":"lh:gather:pass","duration":1.62,"entryType":"measure"},{"startTime":6680.79,"name":"lh:gather:getTrace","duration":1334.54,"entryType":"measure"},{"startTime":8015.41,"name":"lh:gather:getDevtoolsLog","duration":3.91,"entryType":"measure"},{"startTime":8020.95,"name":"lh:gather:afterPass","duration":673.27,"entryType":"measure"},{"startTime":8027.8,"name":"lh:gather:afterPass:CSSUsage","duration":216.14,"entryType":"measure"},{"startTime":8243.98,"name":"lh:gather:afterPass:ViewportDimensions","duration":3.63,"entryType":"measure"},{"startTime":8247.64,"name":"lh:gather:afterPass:RuntimeExceptions","duration":1.51,"entryType":"measure"},{"startTime":8249.19,"name":"lh:gather:afterPass:ConsoleMessages","duration":3.32,"entryType":"measure"},{"startTime":8252.55,"name":"lh:gather:afterPass:AnchorElements","duration":12.54,"entryType":"measure"},{"startTime":8265.12,"name":"lh:gather:afterPass:ImageElements","duration":11.84,"entryType":"measure"},{"startTime":8277,"name":"lh:gather:afterPass:LinkElements","duration":4.05,"entryType":"measure"},{"startTime":8281.09,"name":"lh:gather:afterPass:MetaElements","duration":3.25,"entryType":"measure"},{"startTime":8284.36,"name":"lh:gather:afterPass:ScriptElements","duration":4.95,"entryType":"measure"},{"startTime":8289.34,"name":"lh:gather:afterPass:AppCacheManifest","duration":6.57,"entryType":"measure"},{"startTime":8295.94,"name":"lh:gather:afterPass:Doctype","duration":3.02,"entryType":"measure"},{"startTime":8299,"name":"lh:gather:afterPass:DOMStats","duration":5.54,"entryType":"measure"},{"startTime":8304.56,"name":"lh:gather:afterPass:OptimizedImages","duration":1.58,"entryType":"measure"},{"startTime":8306.16,"name":"lh:gather:afterPass:PasswordInputsWithPreventedPaste","duration":4.89,"entryType":"measure"},{"startTime":8311.07,"name":"lh:gather:afterPass:ResponseCompression","duration":1.52,"entryType":"measure"},{"startTime":8312.61,"name":"lh:gather:afterPass:TagsBlockingFirstPaint","duration":3.9,"entryType":"measure"},{"startTime":8316.55,"name":"lh:gather:afterPass:FontSize","duration":83.44,"entryType":"measure"},{"startTime":8400.02,"name":"lh:gather:afterPass:EmbeddedContent","duration":3.14,"entryType":"measure"},{"startTime":8403.2,"name":"lh:gather:afterPass:RobotsTxt","duration":48.22,"entryType":"measure"},{"startTime":8451.45,"name":"lh:gather:afterPass:TapTargets","duration":18.35,"entryType":"measure"},{"startTime":8469.84,"name":"lh:gather:afterPass:Accessibility","duration":224.34,"entryType":"measure"},{"startTime":8779.58,"name":"lh:gather:loadBlank","duration":40.57,"entryType":"measure"},{"startTime":8820.18,"name":"lh:gather:setupPassNetwork","duration":12.15,"entryType":"measure"},{"startTime":8832.4,"name":"lh:gather:beforePass","duration":6.38,"entryType":"measure"},{"startTime":8832.45,"name":"lh:gather:beforePass:ServiceWorker","duration":5.22,"entryType":"measure"},{"startTime":8837.7,"name":"lh:gather:beforePass:Offline","duration":0.98,"entryType":"measure"},{"startTime":8838.71,"name":"lh:gather:beforePass:StartUrl","duration":0.06,"entryType":"measure"},{"startTime":8838.79,"name":"lh:gather:beginRecording","duration":0.13,"entryType":"measure"},{"startTime":8838.97,"name":"lh:gather:loadPage-offlinePass","duration":272.51,"entryType":"measure"},{"startTime":9111.52,"name":"lh:gather:pass","duration":0.33,"entryType":"measure"},{"startTime":9111.89,"name":"lh:gather:getDevtoolsLog","duration":0.27,"entryType":"measure"},{"startTime":9185.01,"name":"lh:gather:afterPass","duration":3260.81,"entryType":"measure"},{"startTime":9360.24,"name":"lh:gather:afterPass:ServiceWorker","duration":41.18,"entryType":"measure"},{"startTime":9401.47,"name":"lh:gather:afterPass:Offline","duration":7.34,"entryType":"measure"},{"startTime":9408.9,"name":"lh:gather:afterPass:StartUrl","duration":3036.84,"entryType":"measure"},{"startTime":12445.95,"name":"lh:gather:loadBlank","duration":136.57,"entryType":"measure"},{"startTime":12582.56,"name":"lh:gather:setupPassNetwork","duration":5.22,"entryType":"measure"},{"startTime":12587.82,"name":"lh:gather:beforePass","duration":0.3,"entryType":"measure"},{"startTime":12587.88,"name":"lh:gather:beforePass:HTTPRedirect","duration":0.11,"entryType":"measure"},{"startTime":12588.02,"name":"lh:gather:beforePass:HTMLWithoutJavaScript","duration":0.06,"entryType":"measure"},{"startTime":12588.15,"name":"lh:gather:beginRecording","duration":0.14,"entryType":"measure"},{"startTime":12588.32,"name":"lh:gather:loadPage-redirectPass","duration":177.57,"entryType":"measure"},{"startTime":12765.94,"name":"lh:gather:pass","duration":0.23,"entryType":"measure"},{"startTime":12766.19,"name":"lh:gather:getDevtoolsLog","duration":0.66,"entryType":"measure"},{"startTime":12844.17,"name":"lh:gather:afterPass","duration":59.27,"entryType":"measure"},{"startTime":12896.42,"name":"lh:gather:afterPass:HTTPRedirect","duration":2.96,"entryType":"measure"},{"startTime":12899.41,"name":"lh:gather:afterPass:HTMLWithoutJavaScript","duration":4,"entryType":"measure"},{"startTime":12903.58,"name":"lh:gather:disconnect","duration":19.34,"entryType":"measure"},{"startTime":328.73,"name":"lh:runner:run","duration":13957.93,"entryType":"measure"},{"startTime":12923.71,"name":"lh:runner:auditing","duration":1362.3,"entryType":"measure"},{"startTime":12928.65,"name":"lh:audit:is-on-https","duration":3.78,"entryType":"measure"},{"startTime":12929.28,"name":"lh:computed:NetworkRecords","duration":2.59,"entryType":"measure"},{"startTime":12932.93,"name":"lh:audit:redirects-http","duration":0.45,"entryType":"measure"},{"startTime":12933.79,"name":"lh:audit:service-worker","duration":0.74,"entryType":"measure"},{"startTime":12934.8,"name":"lh:audit:works-offline","duration":0.38,"entryType":"measure"},{"startTime":12935.45,"name":"lh:audit:viewport","duration":0.98,"entryType":"measure"},{"startTime":12935.65,"name":"lh:computed:ViewportMeta","duration":0.6,"entryType":"measure"},{"startTime":12936.71,"name":"lh:audit:without-javascript","duration":0.32,"entryType":"measure"},{"startTime":12937.26,"name":"lh:audit:first-contentful-paint","duration":80.15,"entryType":"measure"},{"startTime":12937.56,"name":"lh:computed:FirstContentfulPaint","duration":79.45,"entryType":"measure"},{"startTime":12937.69,"name":"lh:computed:TraceOfTab","duration":57.2,"entryType":"measure"},{"startTime":12995.03,"name":"lh:computed:LanternFirstContentfulPaint","duration":21.78,"entryType":"measure"},{"startTime":12995.23,"name":"lh:computed:PageDependencyGraph","duration":4.77,"entryType":"measure"},{"startTime":13000.07,"name":"lh:computed:LoadSimulator","duration":2.4,"entryType":"measure"},{"startTime":13000.22,"name":"lh:computed:NetworkAnalysis","duration":1.95,"entryType":"measure"},{"startTime":13017.71,"name":"lh:audit:first-meaningful-paint","duration":4.87,"entryType":"measure"},{"startTime":13017.99,"name":"lh:computed:FirstMeaningfulPaint","duration":4.35,"entryType":"measure"},{"startTime":13018.11,"name":"lh:computed:LanternFirstMeaningfulPaint","duration":4.2,"entryType":"measure"},{"startTime":13022.88,"name":"lh:audit:load-fast-enough-for-pwa","duration":11.28,"entryType":"measure"},{"startTime":13024.67,"name":"lh:computed:Interactive","duration":9.25,"entryType":"measure"},{"startTime":13024.8,"name":"lh:computed:LanternInteractive","duration":9.09,"entryType":"measure"},{"startTime":13034.39,"name":"lh:audit:speed-index","duration":736.78,"entryType":"measure"},{"startTime":13034.66,"name":"lh:computed:SpeedIndex","duration":736.23,"entryType":"measure"},{"startTime":13034.74,"name":"lh:computed:LanternSpeedIndex","duration":736.1,"entryType":"measure"},{"startTime":13034.82,"name":"lh:computed:Speedline","duration":721.32,"entryType":"measure"},{"startTime":13771.24,"name":"lh:audit:screenshot-thumbnails","duration":209.88,"entryType":"measure"},{"startTime":13981.23,"name":"lh:audit:final-screenshot","duration":3.57,"entryType":"measure"},{"startTime":13981.52,"name":"lh:computed:Screenshots","duration":3.2,"entryType":"measure"},{"startTime":13987.32,"name":"lh:audit:estimated-input-latency","duration":10.83,"entryType":"measure"},{"startTime":13987.6,"name":"lh:computed:EstimatedInputLatency","duration":10.33,"entryType":"measure"},{"startTime":13987.71,"name":"lh:computed:LanternEstimatedInputLatency","duration":10.18,"entryType":"measure"},{"startTime":13998.45,"name":"lh:audit:total-blocking-time","duration":13.35,"entryType":"measure"},{"startTime":13998.79,"name":"lh:computed:TotalBlockingTime","duration":12.79,"entryType":"measure"},{"startTime":13998.91,"name":"lh:computed:LanternTotalBlockingTime","duration":12.62,"entryType":"measure"},{"startTime":14012.11,"name":"lh:audit:max-potential-fid","duration":6.26,"entryType":"measure"},{"startTime":14012.39,"name":"lh:computed:MaxPotentialFID","duration":5.37,"entryType":"measure"},{"startTime":14012.47,"name":"lh:computed:LanternMaxPotentialFID","duration":5.24,"entryType":"measure"},{"startTime":14018.69,"name":"lh:audit:errors-in-console","duration":0.6,"entryType":"measure"},{"startTime":14019.55,"name":"lh:audit:time-to-first-byte","duration":0.71,"entryType":"measure"},{"startTime":14019.78,"name":"lh:computed:MainResource","duration":0.23,"entryType":"measure"},{"startTime":14020.5,"name":"lh:audit:first-cpu-idle","duration":6.74,"entryType":"measure"},{"startTime":14020.73,"name":"lh:computed:FirstCPUIdle","duration":6.26,"entryType":"measure"},{"startTime":14020.8,"name":"lh:computed:LanternFirstCPUIdle","duration":6.11,"entryType":"measure"},{"startTime":14027.49,"name":"lh:audit:interactive","duration":0.66,"entryType":"measure"},{"startTime":14028.39,"name":"lh:audit:user-timings","duration":2.95,"entryType":"measure"},{"startTime":14028.64,"name":"lh:computed:UserTimings","duration":2.3,"entryType":"measure"},{"startTime":14031.63,"name":"lh:audit:critical-request-chains","duration":1.45,"entryType":"measure"},{"startTime":14031.86,"name":"lh:computed:CriticalRequestChains","duration":0.47,"entryType":"measure"},{"startTime":14033.32,"name":"lh:audit:redirects","duration":0.72,"entryType":"measure"},{"startTime":14034.3,"name":"lh:audit:installable-manifest","duration":1.21,"entryType":"measure"},{"startTime":14034.52,"name":"lh:computed:ManifestValues","duration":0.64,"entryType":"measure"},{"startTime":14035.83,"name":"lh:audit:apple-touch-icon","duration":0.38,"entryType":"measure"},{"startTime":14036.45,"name":"lh:audit:splash-screen","duration":0.4,"entryType":"measure"},{"startTime":14037.09,"name":"lh:audit:themed-omnibox","duration":0.57,"entryType":"measure"},{"startTime":14037.9,"name":"lh:audit:content-width","duration":0.33,"entryType":"measure"},{"startTime":14038.47,"name":"lh:audit:image-aspect-ratio","duration":0.62,"entryType":"measure"},{"startTime":14039.33,"name":"lh:audit:deprecations","duration":0.97,"entryType":"measure"},{"startTime":14044.13,"name":"lh:audit:mainthread-work-breakdown","duration":19.34,"entryType":"measure"},{"startTime":14044.47,"name":"lh:computed:MainThreadTasks","duration":17.65,"entryType":"measure"},{"startTime":14063.74,"name":"lh:audit:bootup-time","duration":3.47,"entryType":"measure"},{"startTime":14067.62,"name":"lh:audit:uses-rel-preload","duration":8.61,"entryType":"measure"},{"startTime":14067.98,"name":"lh:computed:LoadSimulator","duration":0.18,"entryType":"measure"},{"startTime":14076.61,"name":"lh:audit:uses-rel-preconnect","duration":0.71,"entryType":"measure"},{"startTime":14077.58,"name":"lh:audit:font-display","duration":3.81,"entryType":"measure"},{"startTime":14081.46,"name":"lh:audit:diagnostics","duration":1.45,"entryType":"measure"},{"startTime":14082.96,"name":"lh:audit:network-requests","duration":0.69,"entryType":"measure"},{"startTime":14083.88,"name":"lh:audit:network-rtt","duration":0.46,"entryType":"measure"},{"startTime":14084.6,"name":"lh:audit:network-server-latency","duration":0.45,"entryType":"measure"},{"startTime":14085.1,"name":"lh:audit:main-thread-tasks","duration":0.47,"entryType":"measure"},{"startTime":14085.61,"name":"lh:audit:metrics","duration":1.03,"entryType":"measure"},{"startTime":14085.96,"name":"lh:computed:LargestContentfulPaint","duration":0.11,"entryType":"measure"},{"startTime":14086.89,"name":"lh:audit:offline-start-url","duration":0.35,"entryType":"measure"},{"startTime":14087.42,"name":"lh:audit:performance-budget","duration":1.14,"entryType":"measure"},{"startTime":14087.64,"name":"lh:computed:ResourceSummary","duration":0.77,"entryType":"measure"},{"startTime":14088.78,"name":"lh:audit:resource-summary","duration":0.57,"entryType":"measure"},{"startTime":14089.57,"name":"lh:audit:third-party-summary","duration":20.72,"entryType":"measure"},{"startTime":14110.62,"name":"lh:audit:pwa-cross-browser","duration":0.3,"entryType":"measure"},{"startTime":14111.19,"name":"lh:audit:pwa-page-transitions","duration":0.21,"entryType":"measure"},{"startTime":14111.59,"name":"lh:audit:pwa-each-page-has-url","duration":0.2,"entryType":"measure"},{"startTime":14111.99,"name":"lh:audit:accesskeys","duration":0.38,"entryType":"measure"},{"startTime":14112.59,"name":"lh:audit:aria-allowed-attr","duration":0.67,"entryType":"measure"},{"startTime":14113.48,"name":"lh:audit:aria-required-attr","duration":0.64,"entryType":"measure"},{"startTime":14114.41,"name":"lh:audit:aria-required-children","duration":0.62,"entryType":"measure"},{"startTime":14115.26,"name":"lh:audit:aria-required-parent","duration":0.63,"entryType":"measure"},{"startTime":14116.08,"name":"lh:audit:aria-roles","duration":0.65,"entryType":"measure"},{"startTime":14116.93,"name":"lh:audit:aria-valid-attr-value","duration":0.62,"entryType":"measure"},{"startTime":14117.76,"name":"lh:audit:aria-valid-attr","duration":0.62,"entryType":"measure"},{"startTime":14118.61,"name":"lh:audit:audio-caption","duration":1.66,"entryType":"measure"},{"startTime":14120.69,"name":"lh:audit:button-name","duration":0.44,"entryType":"measure"},{"startTime":14121.49,"name":"lh:audit:bypass","duration":0.69,"entryType":"measure"},{"startTime":14122.42,"name":"lh:audit:color-contrast","duration":2.42,"entryType":"measure"},{"startTime":14125.58,"name":"lh:audit:definition-list","duration":0.63,"entryType":"measure"},{"startTime":14126.55,"name":"lh:audit:dlitem","duration":0.39,"entryType":"measure"},{"startTime":14127.15,"name":"lh:audit:document-title","duration":0.63,"entryType":"measure"},{"startTime":14127.98,"name":"lh:audit:duplicate-id","duration":0.61,"entryType":"measure"},{"startTime":14128.8,"name":"lh:audit:frame-title","duration":0.35,"entryType":"measure"},{"startTime":14129.35,"name":"lh:audit:html-has-lang","duration":0.61,"entryType":"measure"},{"startTime":14130.18,"name":"lh:audit:html-lang-valid","duration":0.62,"entryType":"measure"},{"startTime":14131,"name":"lh:audit:image-alt","duration":0.61,"entryType":"measure"},{"startTime":14131.82,"name":"lh:audit:input-image-alt","duration":0.78,"entryType":"measure"},{"startTime":14132.81,"name":"lh:audit:label","duration":0.36,"entryType":"measure"},{"startTime":14133.4,"name":"lh:audit:layout-table","duration":0.44,"entryType":"measure"},{"startTime":14134.06,"name":"lh:audit:link-name","duration":0.61,"entryType":"measure"},{"startTime":14134.89,"name":"lh:audit:list","duration":0.57,"entryType":"measure"},{"startTime":14135.67,"name":"lh:audit:listitem","duration":0.65,"entryType":"measure"},{"startTime":14136.52,"name":"lh:audit:meta-refresh","duration":0.4,"entryType":"measure"},{"startTime":14137.17,"name":"lh:audit:meta-viewport","duration":0.56,"entryType":"measure"},{"startTime":14137.91,"name":"lh:audit:object-alt","duration":0.4,"entryType":"measure"},{"startTime":14138.52,"name":"lh:audit:tabindex","duration":0.45,"entryType":"measure"},{"startTime":14139.21,"name":"lh:audit:td-headers-attr","duration":0.71,"entryType":"measure"},{"startTime":14140.62,"name":"lh:audit:th-has-data-cells","duration":0.94,"entryType":"measure"},{"startTime":14141.9,"name":"lh:audit:valid-lang","duration":0.72,"entryType":"measure"},{"startTime":14142.89,"name":"lh:audit:video-caption","duration":0.54,"entryType":"measure"},{"startTime":14143.66,"name":"lh:audit:video-description","duration":0.52,"entryType":"measure"},{"startTime":14144.25,"name":"lh:audit:custom-controls-labels","duration":0.1,"entryType":"measure"},{"startTime":14144.4,"name":"lh:audit:custom-controls-roles","duration":0.08,"entryType":"measure"},{"startTime":14144.58,"name":"lh:audit:focus-traps","duration":0.11,"entryType":"measure"},{"startTime":14144.74,"name":"lh:audit:focusable-controls","duration":0.08,"entryType":"measure"},{"startTime":14144.87,"name":"lh:audit:heading-levels","duration":0.07,"entryType":"measure"},{"startTime":14144.99,"name":"lh:audit:interactive-element-affordance","duration":0.08,"entryType":"measure"},{"startTime":14145.12,"name":"lh:audit:logical-tab-order","duration":0.06,"entryType":"measure"},{"startTime":14145.23,"name":"lh:audit:managed-focus","duration":0.07,"entryType":"measure"},{"startTime":14145.35,"name":"lh:audit:offscreen-content-hidden","duration":0.07,"entryType":"measure"},{"startTime":14145.47,"name":"lh:audit:use-landmarks","duration":0.08,"entryType":"measure"},{"startTime":14145.59,"name":"lh:audit:visual-order-follows-dom","duration":0.07,"entryType":"measure"},{"startTime":14146.54,"name":"lh:audit:uses-long-cache-ttl","duration":1.5,"entryType":"measure"},{"startTime":14148.24,"name":"lh:audit:total-byte-weight","duration":0.79,"entryType":"measure"},{"startTime":14149.23,"name":"lh:audit:offscreen-images","duration":3.44,"entryType":"measure"},{"startTime":14152.96,"name":"lh:audit:render-blocking-resources","duration":7.37,"entryType":"measure"},{"startTime":14156.24,"name":"lh:computed:FirstContentfulPaint","duration":3.79,"entryType":"measure"},{"startTime":14156.37,"name":"lh:computed:LanternFirstContentfulPaint","duration":3.62,"entryType":"measure"},{"startTime":14160.52,"name":"lh:audit:unminified-css","duration":82.1,"entryType":"measure"},{"startTime":14243,"name":"lh:audit:unminified-javascript","duration":3.3,"entryType":"measure"},{"startTime":14246.49,"name":"lh:audit:unused-css-rules","duration":3.98,"entryType":"measure"},{"startTime":14250.73,"name":"lh:audit:uses-webp-images","duration":3.01,"entryType":"measure"},{"startTime":14254.04,"name":"lh:audit:uses-optimized-images","duration":2.65,"entryType":"measure"},{"startTime":14257.17,"name":"lh:audit:uses-text-compression","duration":2.77,"entryType":"measure"},{"startTime":14260.2,"name":"lh:audit:uses-responsive-images","duration":2.17,"entryType":"measure"},{"startTime":14262.6,"name":"lh:audit:efficient-animated-content","duration":2.15,"entryType":"measure"},{"startTime":14264.97,"name":"lh:audit:appcache-manifest","duration":0.3,"entryType":"measure"},{"startTime":14265.46,"name":"lh:audit:doctype","duration":0.3,"entryType":"measure"},{"startTime":14265.96,"name":"lh:audit:dom-size","duration":0.66,"entryType":"measure"},{"startTime":14266.86,"name":"lh:audit:external-anchors-use-rel-noopener","duration":0.42,"entryType":"measure"},{"startTime":14267.5,"name":"lh:audit:geolocation-on-start","duration":0.38,"entryType":"measure"},{"startTime":14268.05,"name":"lh:audit:no-document-write","duration":0.3,"entryType":"measure"},{"startTime":14268.58,"name":"lh:audit:no-vulnerable-libraries","duration":6.15,"entryType":"measure"},{"startTime":14275.02,"name":"lh:audit:js-libraries","duration":0.69,"entryType":"measure"},{"startTime":14276,"name":"lh:audit:notification-on-start","duration":0.45,"entryType":"measure"},{"startTime":14276.8,"name":"lh:audit:password-inputs-can-be-pasted-into","duration":0.39,"entryType":"measure"},{"startTime":14277.4,"name":"lh:audit:uses-http2","duration":0.63,"entryType":"measure"},{"startTime":14278.25,"name":"lh:audit:uses-passive-event-listeners","duration":0.31,"entryType":"measure"},{"startTime":14278.75,"name":"lh:audit:meta-description","duration":0.32,"entryType":"measure"},{"startTime":14279.27,"name":"lh:audit:http-status-code","duration":0.33,"entryType":"measure"},{"startTime":14279.78,"name":"lh:audit:font-size","duration":0.38,"entryType":"measure"},{"startTime":14280.35,"name":"lh:audit:link-text","duration":0.66,"entryType":"measure"},{"startTime":14281.29,"name":"lh:audit:is-crawlable","duration":1.26,"entryType":"measure"},{"startTime":14282.74,"name":"lh:audit:robots-txt","duration":0.51,"entryType":"measure"},{"startTime":14283.45,"name":"lh:audit:tap-targets","duration":0.35,"entryType":"measure"},{"startTime":14283.99,"name":"lh:audit:hreflang","duration":0.33,"entryType":"measure"},{"startTime":14284.5,"name":"lh:audit:plugins","duration":0.39,"entryType":"measure"},{"startTime":14285.1,"name":"lh:audit:canonical","duration":0.49,"entryType":"measure"},{"startTime":14285.79,"name":"lh:audit:structured-data","duration":0.2,"entryType":"measure"},{"startTime":14286.02,"name":"lh:runner:generate","duration":0.63,"entryType":"measure"}],"total":13957.93},"i18n":{"rendererFormattedStrings":{},"icuMessagePaths":{"lighthouse-core/audits/is-on-https.js | title":["audits[is-on-https].title"],"lighthouse-core/audits/is-on-https.js | description":["audits[is-on-https].description"],"lighthouse-core/audits/redirects-http.js | title":["audits[redirects-http].title"],"lighthouse-core/audits/redirects-http.js | description":["audits[redirects-http].description"],"lighthouse-core/audits/service-worker.js | failureTitle":["audits[service-worker].title"],"lighthouse-core/audits/service-worker.js | description":["audits[service-worker].description"],"lighthouse-core/audits/works-offline.js | failureTitle":["audits[works-offline].title"],"lighthouse-core/audits/works-offline.js | description":["audits[works-offline].description"],"lighthouse-core/audits/viewport.js | title":["audits.viewport.title"],"lighthouse-core/audits/viewport.js | description":["audits.viewport.description"],"lighthouse-core/audits/without-javascript.js | title":["audits[without-javascript].title"],"lighthouse-core/audits/without-javascript.js | description":["audits[without-javascript].description"],"lighthouse-core/audits/metrics/first-contentful-paint.js | title":["audits[first-contentful-paint].title"],"lighthouse-core/audits/metrics/first-contentful-paint.js | description":["audits[first-contentful-paint].description"],"lighthouse-core/lib/i18n/i18n.js | seconds":[{"values":{"timeInMs":9552.439900000001},"path":"audits[first-contentful-paint].displayValue"},{"values":{"timeInMs":9564.939900000001},"path":"audits[first-meaningful-paint].displayValue"},{"values":{"timeInMs":13035.10303526217},"path":"audits[speed-index].displayValue"},{"values":{"timeInMs":9564.939900000001},"path":"audits[first-cpu-idle].displayValue"},{"values":{"timeInMs":9784.9415},"path":"audits.interactive.displayValue"},{"values":{"timeInMs":17254.932000000008},"path":"audits[mainthread-work-breakdown].displayValue"},{"values":{"timeInMs":14233.868000000006},"path":"audits[bootup-time].displayValue"}],"lighthouse-core/audits/metrics/first-meaningful-paint.js | title":["audits[first-meaningful-paint].title"],"lighthouse-core/audits/metrics/first-meaningful-paint.js | description":["audits[first-meaningful-paint].description"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | title":["audits[load-fast-enough-for-pwa].title"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | description":["audits[load-fast-enough-for-pwa].description"],"lighthouse-core/audits/metrics/speed-index.js | title":["audits[speed-index].title"],"lighthouse-core/audits/metrics/speed-index.js | description":["audits[speed-index].description"],"lighthouse-core/audits/metrics/estimated-input-latency.js | title":["audits[estimated-input-latency].title"],"lighthouse-core/audits/metrics/estimated-input-latency.js | description":["audits[estimated-input-latency].description"],"lighthouse-core/lib/i18n/i18n.js | ms":[{"values":{"timeInMs":2547.2000000000003},"path":"audits[estimated-input-latency].displayValue"},{"values":{"timeInMs":37},"path":"audits[total-blocking-time].displayValue"},{"values":{"timeInMs":3450},"path":"audits[max-potential-fid].displayValue"},{"values":{"timeInMs":0.19790000000000002},"path":"audits[network-rtt].displayValue"},{"values":{"timeInMs":72.58970000000001},"path":"audits[network-server-latency].displayValue"}],"lighthouse-core/audits/metrics/total-blocking-time.js | title":["audits[total-blocking-time].title"],"lighthouse-core/audits/metrics/total-blocking-time.js | description":["audits[total-blocking-time].description"],"lighthouse-core/audits/metrics/max-potential-fid.js | title":["audits[max-potential-fid].title"],"lighthouse-core/audits/metrics/max-potential-fid.js | description":["audits[max-potential-fid].description"],"lighthouse-core/audits/errors-in-console.js | title":["audits[errors-in-console].title"],"lighthouse-core/audits/errors-in-console.js | description":["audits[errors-in-console].description"],"lighthouse-core/audits/time-to-first-byte.js | title":["audits[time-to-first-byte].title"],"lighthouse-core/audits/time-to-first-byte.js | description":["audits[time-to-first-byte].description"],"lighthouse-core/audits/time-to-first-byte.js | displayValue":[{"values":{"timeInMs":75.06099999999999},"path":"audits[time-to-first-byte].displayValue"}],"lighthouse-core/audits/metrics/first-cpu-idle.js | title":["audits[first-cpu-idle].title"],"lighthouse-core/audits/metrics/first-cpu-idle.js | description":["audits[first-cpu-idle].description"],"lighthouse-core/audits/metrics/interactive.js | title":["audits.interactive.title"],"lighthouse-core/audits/metrics/interactive.js | description":["audits.interactive.description"],"lighthouse-core/audits/user-timings.js | title":["audits[user-timings].title"],"lighthouse-core/audits/user-timings.js | description":["audits[user-timings].description"],"lighthouse-core/audits/critical-request-chains.js | title":["audits[critical-request-chains].title"],"lighthouse-core/audits/critical-request-chains.js | description":["audits[critical-request-chains].description"],"lighthouse-core/audits/critical-request-chains.js | displayValue":[{"values":{"itemCount":5},"path":"audits[critical-request-chains].displayValue"}],"lighthouse-core/audits/redirects.js | title":["audits.redirects.title"],"lighthouse-core/audits/redirects.js | description":["audits.redirects.description"],"lighthouse-core/audits/installable-manifest.js | title":["audits[installable-manifest].title"],"lighthouse-core/audits/installable-manifest.js | description":["audits[installable-manifest].description"],"lighthouse-core/audits/apple-touch-icon.js | title":["audits[apple-touch-icon].title"],"lighthouse-core/audits/apple-touch-icon.js | description":["audits[apple-touch-icon].description"],"lighthouse-core/audits/splash-screen.js | title":["audits[splash-screen].title"],"lighthouse-core/audits/splash-screen.js | description":["audits[splash-screen].description"],"lighthouse-core/audits/themed-omnibox.js | title":["audits[themed-omnibox].title"],"lighthouse-core/audits/themed-omnibox.js | description":["audits[themed-omnibox].description"],"lighthouse-core/audits/content-width.js | title":["audits[content-width].title"],"lighthouse-core/audits/content-width.js | description":["audits[content-width].description"],"lighthouse-core/audits/image-aspect-ratio.js | title":["audits[image-aspect-ratio].title"],"lighthouse-core/audits/image-aspect-ratio.js | description":["audits[image-aspect-ratio].description"],"lighthouse-core/audits/deprecations.js | failureTitle":["audits.deprecations.title"],"lighthouse-core/audits/deprecations.js | description":["audits.deprecations.description"],"lighthouse-core/audits/deprecations.js | displayValue":[{"values":{"itemCount":2},"path":"audits.deprecations.displayValue"}],"lighthouse-core/audits/deprecations.js | columnDeprecate":["audits.deprecations.details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnURL":["audits.deprecations.details.headings[1].text","audits[bootup-time].details.headings[0].text","audits[uses-rel-preload].details.headings[0].label","audits[font-display].details.headings[0].text","audits[network-rtt].details.headings[0].text","audits[network-server-latency].details.headings[0].text","audits[uses-long-cache-ttl].details.headings[0].text","audits[total-byte-weight].details.headings[0].text","audits[unused-css-rules].details.headings[0].label","audits[uses-responsive-images].details.headings[1].label"],"lighthouse-core/audits/deprecations.js | columnLine":["audits.deprecations.details.headings[2].text"],"lighthouse-core/audits/mainthread-work-breakdown.js | failureTitle":["audits[mainthread-work-breakdown].title"],"lighthouse-core/audits/mainthread-work-breakdown.js | description":["audits[mainthread-work-breakdown].description"],"lighthouse-core/audits/mainthread-work-breakdown.js | columnCategory":["audits[mainthread-work-breakdown].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnTimeSpent":["audits[mainthread-work-breakdown].details.headings[1].text","audits[network-rtt].details.headings[1].text","audits[network-server-latency].details.headings[1].text"],"lighthouse-core/audits/bootup-time.js | failureTitle":["audits[bootup-time].title"],"lighthouse-core/audits/bootup-time.js | description":["audits[bootup-time].description"],"lighthouse-core/audits/bootup-time.js | columnTotal":["audits[bootup-time].details.headings[1].text"],"lighthouse-core/audits/bootup-time.js | columnScriptEval":["audits[bootup-time].details.headings[2].text"],"lighthouse-core/audits/bootup-time.js | columnScriptParse":["audits[bootup-time].details.headings[3].text"],"lighthouse-core/audits/uses-rel-preload.js | title":["audits[uses-rel-preload].title"],"lighthouse-core/audits/uses-rel-preload.js | description":["audits[uses-rel-preload].description"],"lighthouse-core/lib/i18n/i18n.js | displayValueMsSavings":[{"values":{"wastedMs":1864},"path":"audits[uses-rel-preload].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnWastedBytes":["audits[uses-rel-preload].details.headings[1].label","audits[font-display].details.headings[1].text","audits[unused-css-rules].details.headings[2].label","audits[uses-responsive-images].details.headings[3].label"],"lighthouse-core/audits/uses-rel-preconnect.js | title":["audits[uses-rel-preconnect].title"],"lighthouse-core/audits/uses-rel-preconnect.js | description":["audits[uses-rel-preconnect].description"],"lighthouse-core/audits/font-display.js | failureTitle":["audits[font-display].title"],"lighthouse-core/audits/font-display.js | description":["audits[font-display].description"],"lighthouse-core/audits/network-rtt.js | title":["audits[network-rtt].title"],"lighthouse-core/audits/network-rtt.js | description":["audits[network-rtt].description"],"lighthouse-core/audits/network-server-latency.js | title":["audits[network-server-latency].title"],"lighthouse-core/audits/network-server-latency.js | description":["audits[network-server-latency].description"],"lighthouse-core/audits/offline-start-url.js | failureTitle":["audits[offline-start-url].title"],"lighthouse-core/audits/offline-start-url.js | description":["audits[offline-start-url].description"],"lighthouse-core/audits/performance-budget.js | title":["audits[performance-budget].title"],"lighthouse-core/audits/performance-budget.js | description":["audits[performance-budget].description"],"lighthouse-core/audits/resource-summary.js | title":["audits[resource-summary].title"],"lighthouse-core/audits/resource-summary.js | description":["audits[resource-summary].description"],"lighthouse-core/audits/resource-summary.js | displayValue":[{"values":{"requestCount":40,"byteCount":1241318},"path":"audits[resource-summary].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnResourceType":["audits[resource-summary].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnRequests":["audits[resource-summary].details.headings[1].text"],"lighthouse-core/lib/i18n/i18n.js | columnTransferSize":["audits[resource-summary].details.headings[2].text"],"lighthouse-core/lib/i18n/i18n.js | totalResourceType":["audits[resource-summary].details.items[0].label"],"lighthouse-core/lib/i18n/i18n.js | otherResourceType":["audits[resource-summary].details.items[1].label"],"lighthouse-core/lib/i18n/i18n.js | imageResourceType":["audits[resource-summary].details.items[2].label"],"lighthouse-core/lib/i18n/i18n.js | fontResourceType":["audits[resource-summary].details.items[3].label"],"lighthouse-core/lib/i18n/i18n.js | stylesheetResourceType":["audits[resource-summary].details.items[4].label"],"lighthouse-core/lib/i18n/i18n.js | scriptResourceType":["audits[resource-summary].details.items[5].label"],"lighthouse-core/lib/i18n/i18n.js | documentResourceType":["audits[resource-summary].details.items[6].label"],"lighthouse-core/lib/i18n/i18n.js | mediaResourceType":["audits[resource-summary].details.items[7].label"],"lighthouse-core/lib/i18n/i18n.js | thirdPartyResourceType":["audits[resource-summary].details.items[8].label"],"lighthouse-core/audits/third-party-summary.js | title":["audits[third-party-summary].title"],"lighthouse-core/audits/third-party-summary.js | description":["audits[third-party-summary].description"],"lighthouse-core/audits/manual/pwa-cross-browser.js | title":["audits[pwa-cross-browser].title"],"lighthouse-core/audits/manual/pwa-cross-browser.js | description":["audits[pwa-cross-browser].description"],"lighthouse-core/audits/manual/pwa-page-transitions.js | title":["audits[pwa-page-transitions].title"],"lighthouse-core/audits/manual/pwa-page-transitions.js | description":["audits[pwa-page-transitions].description"],"lighthouse-core/audits/manual/pwa-each-page-has-url.js | title":["audits[pwa-each-page-has-url].title"],"lighthouse-core/audits/manual/pwa-each-page-has-url.js | description":["audits[pwa-each-page-has-url].description"],"lighthouse-core/audits/accessibility/accesskeys.js | title":["audits.accesskeys.title"],"lighthouse-core/audits/accessibility/accesskeys.js | description":["audits.accesskeys.description"],"lighthouse-core/audits/accessibility/aria-allowed-attr.js | title":["audits[aria-allowed-attr].title"],"lighthouse-core/audits/accessibility/aria-allowed-attr.js | description":["audits[aria-allowed-attr].description"],"lighthouse-core/audits/accessibility/aria-required-attr.js | title":["audits[aria-required-attr].title"],"lighthouse-core/audits/accessibility/aria-required-attr.js | description":["audits[aria-required-attr].description"],"lighthouse-core/audits/accessibility/aria-required-children.js | title":["audits[aria-required-children].title"],"lighthouse-core/audits/accessibility/aria-required-children.js | description":["audits[aria-required-children].description"],"lighthouse-core/audits/accessibility/aria-required-parent.js | title":["audits[aria-required-parent].title"],"lighthouse-core/audits/accessibility/aria-required-parent.js | description":["audits[aria-required-parent].description"],"lighthouse-core/audits/accessibility/aria-roles.js | title":["audits[aria-roles].title"],"lighthouse-core/audits/accessibility/aria-roles.js | description":["audits[aria-roles].description"],"lighthouse-core/audits/accessibility/aria-valid-attr-value.js | title":["audits[aria-valid-attr-value].title"],"lighthouse-core/audits/accessibility/aria-valid-attr-value.js | description":["audits[aria-valid-attr-value].description"],"lighthouse-core/audits/accessibility/aria-valid-attr.js | title":["audits[aria-valid-attr].title"],"lighthouse-core/audits/accessibility/aria-valid-attr.js | description":["audits[aria-valid-attr].description"],"lighthouse-core/audits/accessibility/audio-caption.js | title":["audits[audio-caption].title"],"lighthouse-core/audits/accessibility/audio-caption.js | description":["audits[audio-caption].description"],"lighthouse-core/audits/accessibility/button-name.js | title":["audits[button-name].title"],"lighthouse-core/audits/accessibility/button-name.js | description":["audits[button-name].description"],"lighthouse-core/audits/accessibility/bypass.js | title":["audits.bypass.title"],"lighthouse-core/audits/accessibility/bypass.js | description":["audits.bypass.description"],"lighthouse-core/audits/accessibility/color-contrast.js | failureTitle":["audits[color-contrast].title"],"lighthouse-core/audits/accessibility/color-contrast.js | description":["audits[color-contrast].description"],"lighthouse-core/audits/accessibility/axe-audit.js | failingElementsHeader":["audits[color-contrast].details.headings[0].text","audits[link-name].details.headings[0].text"],"lighthouse-core/audits/accessibility/definition-list.js | title":["audits[definition-list].title"],"lighthouse-core/audits/accessibility/definition-list.js | description":["audits[definition-list].description"],"lighthouse-core/audits/accessibility/dlitem.js | title":["audits.dlitem.title"],"lighthouse-core/audits/accessibility/dlitem.js | description":["audits.dlitem.description"],"lighthouse-core/audits/accessibility/document-title.js | title":["audits[document-title].title"],"lighthouse-core/audits/accessibility/document-title.js | description":["audits[document-title].description"],"lighthouse-core/audits/accessibility/duplicate-id.js | title":["audits[duplicate-id].title"],"lighthouse-core/audits/accessibility/duplicate-id.js | description":["audits[duplicate-id].description"],"lighthouse-core/audits/accessibility/frame-title.js | title":["audits[frame-title].title"],"lighthouse-core/audits/accessibility/frame-title.js | description":["audits[frame-title].description"],"lighthouse-core/audits/accessibility/html-has-lang.js | title":["audits[html-has-lang].title"],"lighthouse-core/audits/accessibility/html-has-lang.js | description":["audits[html-has-lang].description"],"lighthouse-core/audits/accessibility/html-lang-valid.js | title":["audits[html-lang-valid].title"],"lighthouse-core/audits/accessibility/html-lang-valid.js | description":["audits[html-lang-valid].description"],"lighthouse-core/audits/accessibility/image-alt.js | title":["audits[image-alt].title"],"lighthouse-core/audits/accessibility/image-alt.js | description":["audits[image-alt].description"],"lighthouse-core/audits/accessibility/input-image-alt.js | title":["audits[input-image-alt].title"],"lighthouse-core/audits/accessibility/input-image-alt.js | description":["audits[input-image-alt].description"],"lighthouse-core/audits/accessibility/label.js | title":["audits.label.title"],"lighthouse-core/audits/accessibility/label.js | description":["audits.label.description"],"lighthouse-core/audits/accessibility/layout-table.js | title":["audits[layout-table].title"],"lighthouse-core/audits/accessibility/layout-table.js | description":["audits[layout-table].description"],"lighthouse-core/audits/accessibility/link-name.js | failureTitle":["audits[link-name].title"],"lighthouse-core/audits/accessibility/link-name.js | description":["audits[link-name].description"],"lighthouse-core/audits/accessibility/list.js | title":["audits.list.title"],"lighthouse-core/audits/accessibility/list.js | description":["audits.list.description"],"lighthouse-core/audits/accessibility/listitem.js | title":["audits.listitem.title"],"lighthouse-core/audits/accessibility/listitem.js | description":["audits.listitem.description"],"lighthouse-core/audits/accessibility/meta-refresh.js | title":["audits[meta-refresh].title"],"lighthouse-core/audits/accessibility/meta-refresh.js | description":["audits[meta-refresh].description"],"lighthouse-core/audits/accessibility/meta-viewport.js | title":["audits[meta-viewport].title"],"lighthouse-core/audits/accessibility/meta-viewport.js | description":["audits[meta-viewport].description"],"lighthouse-core/audits/accessibility/object-alt.js | title":["audits[object-alt].title"],"lighthouse-core/audits/accessibility/object-alt.js | description":["audits[object-alt].description"],"lighthouse-core/audits/accessibility/tabindex.js | title":["audits.tabindex.title"],"lighthouse-core/audits/accessibility/tabindex.js | description":["audits.tabindex.description"],"lighthouse-core/audits/accessibility/td-headers-attr.js | title":["audits[td-headers-attr].title"],"lighthouse-core/audits/accessibility/td-headers-attr.js | description":["audits[td-headers-attr].description"],"lighthouse-core/audits/accessibility/th-has-data-cells.js | title":["audits[th-has-data-cells].title"],"lighthouse-core/audits/accessibility/th-has-data-cells.js | description":["audits[th-has-data-cells].description"],"lighthouse-core/audits/accessibility/valid-lang.js | title":["audits[valid-lang].title"],"lighthouse-core/audits/accessibility/valid-lang.js | description":["audits[valid-lang].description"],"lighthouse-core/audits/accessibility/video-caption.js | title":["audits[video-caption].title"],"lighthouse-core/audits/accessibility/video-caption.js | description":["audits[video-caption].description"],"lighthouse-core/audits/accessibility/video-description.js | title":["audits[video-description].title"],"lighthouse-core/audits/accessibility/video-description.js | description":["audits[video-description].description"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | failureTitle":["audits[uses-long-cache-ttl].title"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | description":["audits[uses-long-cache-ttl].description"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | displayValue":[{"values":{"itemCount":14},"path":"audits[uses-long-cache-ttl].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnCacheTTL":["audits[uses-long-cache-ttl].details.headings[1].text"],"lighthouse-core/lib/i18n/i18n.js | columnSize":["audits[uses-long-cache-ttl].details.headings[2].text","audits[total-byte-weight].details.headings[1].text","audits[unused-css-rules].details.headings[1].label","audits[uses-responsive-images].details.headings[2].label"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | title":["audits[total-byte-weight].title"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | description":["audits[total-byte-weight].description"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | displayValue":[{"values":{"totalBytes":1241318},"path":"audits[total-byte-weight].displayValue"}],"lighthouse-core/audits/byte-efficiency/offscreen-images.js | title":["audits[offscreen-images].title"],"lighthouse-core/audits/byte-efficiency/offscreen-images.js | description":["audits[offscreen-images].description"],"lighthouse-core/audits/byte-efficiency/render-blocking-resources.js | title":["audits[render-blocking-resources].title"],"lighthouse-core/audits/byte-efficiency/render-blocking-resources.js | description":["audits[render-blocking-resources].description"],"lighthouse-core/audits/byte-efficiency/unminified-css.js | title":["audits[unminified-css].title"],"lighthouse-core/audits/byte-efficiency/unminified-css.js | description":["audits[unminified-css].description"],"lighthouse-core/audits/byte-efficiency/unminified-javascript.js | title":["audits[unminified-javascript].title"],"lighthouse-core/audits/byte-efficiency/unminified-javascript.js | description":["audits[unminified-javascript].description"],"lighthouse-core/audits/byte-efficiency/unused-css-rules.js | title":["audits[unused-css-rules].title"],"lighthouse-core/audits/byte-efficiency/unused-css-rules.js | description":["audits[unused-css-rules].description"],"lighthouse-core/lib/i18n/i18n.js | displayValueByteSavings":[{"values":{"wastedBytes":88924},"path":"audits[unused-css-rules].displayValue"},{"values":{"wastedBytes":229535},"path":"audits[uses-responsive-images].displayValue"}],"lighthouse-core/audits/byte-efficiency/uses-webp-images.js | title":["audits[uses-webp-images].title"],"lighthouse-core/audits/byte-efficiency/uses-webp-images.js | description":["audits[uses-webp-images].description"],"lighthouse-core/audits/byte-efficiency/uses-optimized-images.js | title":["audits[uses-optimized-images].title"],"lighthouse-core/audits/byte-efficiency/uses-optimized-images.js | description":["audits[uses-optimized-images].description"],"lighthouse-core/audits/byte-efficiency/uses-text-compression.js | title":["audits[uses-text-compression].title"],"lighthouse-core/audits/byte-efficiency/uses-text-compression.js | description":["audits[uses-text-compression].description"],"lighthouse-core/audits/byte-efficiency/uses-responsive-images.js | title":["audits[uses-responsive-images].title"],"lighthouse-core/audits/byte-efficiency/uses-responsive-images.js | description":["audits[uses-responsive-images].description"],"lighthouse-core/audits/byte-efficiency/efficient-animated-content.js | title":["audits[efficient-animated-content].title"],"lighthouse-core/audits/byte-efficiency/efficient-animated-content.js | description":["audits[efficient-animated-content].description"],"lighthouse-core/audits/dobetterweb/appcache-manifest.js | title":["audits[appcache-manifest].title"],"lighthouse-core/audits/dobetterweb/appcache-manifest.js | description":["audits[appcache-manifest].description"],"lighthouse-core/audits/dobetterweb/doctype.js | title":["audits.doctype.title"],"lighthouse-core/audits/dobetterweb/doctype.js | description":["audits.doctype.description"],"lighthouse-core/audits/dobetterweb/dom-size.js | title":["audits[dom-size].title"],"lighthouse-core/audits/dobetterweb/dom-size.js | description":["audits[dom-size].description"],"lighthouse-core/audits/dobetterweb/dom-size.js | displayValue":[{"values":{"itemCount":213},"path":"audits[dom-size].displayValue"}],"lighthouse-core/audits/dobetterweb/dom-size.js | columnStatistic":["audits[dom-size].details.headings[0].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | columnElement":["audits[dom-size].details.headings[1].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | columnValue":["audits[dom-size].details.headings[2].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMElements":["audits[dom-size].details.items[0].statistic"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMDepth":["audits[dom-size].details.items[1].statistic"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMWidth":["audits[dom-size].details.items[2].statistic"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | title":["audits[external-anchors-use-rel-noopener].title"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | description":["audits[external-anchors-use-rel-noopener].description"],"lighthouse-core/audits/dobetterweb/geolocation-on-start.js | title":["audits[geolocation-on-start].title"],"lighthouse-core/audits/dobetterweb/geolocation-on-start.js | description":["audits[geolocation-on-start].description"],"lighthouse-core/audits/dobetterweb/no-document-write.js | title":["audits[no-document-write].title"],"lighthouse-core/audits/dobetterweb/no-document-write.js | description":["audits[no-document-write].description"],"lighthouse-core/audits/dobetterweb/no-vulnerable-libraries.js | title":["audits[no-vulnerable-libraries].title"],"lighthouse-core/audits/dobetterweb/no-vulnerable-libraries.js | description":["audits[no-vulnerable-libraries].description"],"lighthouse-core/audits/dobetterweb/js-libraries.js | title":["audits[js-libraries].title"],"lighthouse-core/audits/dobetterweb/js-libraries.js | description":["audits[js-libraries].description"],"lighthouse-core/lib/i18n/i18n.js | columnName":["audits[js-libraries].details.headings[0].text"],"lighthouse-core/audits/dobetterweb/js-libraries.js | columnVersion":["audits[js-libraries].details.headings[1].text"],"lighthouse-core/audits/dobetterweb/notification-on-start.js | title":["audits[notification-on-start].title"],"lighthouse-core/audits/dobetterweb/notification-on-start.js | description":["audits[notification-on-start].description"],"lighthouse-core/audits/dobetterweb/password-inputs-can-be-pasted-into.js | title":["audits[password-inputs-can-be-pasted-into].title"],"lighthouse-core/audits/dobetterweb/password-inputs-can-be-pasted-into.js | description":["audits[password-inputs-can-be-pasted-into].description"],"lighthouse-core/audits/dobetterweb/uses-http2.js | title":["audits[uses-http2].title"],"lighthouse-core/audits/dobetterweb/uses-http2.js | description":["audits[uses-http2].description"],"lighthouse-core/audits/dobetterweb/uses-passive-event-listeners.js | title":["audits[uses-passive-event-listeners].title"],"lighthouse-core/audits/dobetterweb/uses-passive-event-listeners.js | description":["audits[uses-passive-event-listeners].description"],"lighthouse-core/audits/seo/meta-description.js | failureTitle":["audits[meta-description].title"],"lighthouse-core/audits/seo/meta-description.js | description":["audits[meta-description].description"],"lighthouse-core/audits/seo/meta-description.js | explanation":["audits[meta-description].explanation"],"lighthouse-core/audits/seo/http-status-code.js | title":["audits[http-status-code].title"],"lighthouse-core/audits/seo/http-status-code.js | description":["audits[http-status-code].description"],"lighthouse-core/audits/seo/font-size.js | title":["audits[font-size].title"],"lighthouse-core/audits/seo/font-size.js | description":["audits[font-size].description"],"lighthouse-core/audits/seo/link-text.js | title":["audits[link-text].title"],"lighthouse-core/audits/seo/link-text.js | description":["audits[link-text].description"],"lighthouse-core/audits/seo/is-crawlable.js | title":["audits[is-crawlable].title"],"lighthouse-core/audits/seo/is-crawlable.js | description":["audits[is-crawlable].description"],"lighthouse-core/audits/seo/robots-txt.js | title":["audits[robots-txt].title"],"lighthouse-core/audits/seo/robots-txt.js | description":["audits[robots-txt].description"],"lighthouse-core/audits/seo/tap-targets.js | title":["audits[tap-targets].title"],"lighthouse-core/audits/seo/tap-targets.js | description":["audits[tap-targets].description"],"lighthouse-core/audits/seo/hreflang.js | title":["audits.hreflang.title"],"lighthouse-core/audits/seo/hreflang.js | description":["audits.hreflang.description"],"lighthouse-core/audits/seo/plugins.js | title":["audits.plugins.title"],"lighthouse-core/audits/seo/plugins.js | description":["audits.plugins.description"],"lighthouse-core/audits/seo/canonical.js | title":["audits.canonical.title"],"lighthouse-core/audits/seo/canonical.js | description":["audits.canonical.description"],"lighthouse-core/audits/seo/manual/structured-data.js | title":["audits[structured-data].title"],"lighthouse-core/audits/seo/manual/structured-data.js | description":["audits[structured-data].description"],"lighthouse-core/config/default-config.js | performanceCategoryTitle":["categories.performance.title"],"lighthouse-core/config/default-config.js | a11yCategoryTitle":["categories.accessibility.title"],"lighthouse-core/config/default-config.js | a11yCategoryDescription":["categories.accessibility.description"],"lighthouse-core/config/default-config.js | a11yCategoryManualDescription":["categories.accessibility.manualDescription"],"lighthouse-core/config/default-config.js | bestPracticesCategoryTitle":["categories[best-practices].title"],"lighthouse-core/config/default-config.js | seoCategoryTitle":["categories.seo.title"],"lighthouse-core/config/default-config.js | seoCategoryDescription":["categories.seo.description"],"lighthouse-core/config/default-config.js | seoCategoryManualDescription":["categories.seo.manualDescription"],"lighthouse-core/config/default-config.js | pwaCategoryTitle":["categories.pwa.title"],"lighthouse-core/config/default-config.js | pwaCategoryDescription":["categories.pwa.description"],"lighthouse-core/config/default-config.js | pwaCategoryManualDescription":["categories.pwa.manualDescription"],"lighthouse-core/config/default-config.js | metricGroupTitle":["categoryGroups.metrics.title"],"lighthouse-core/config/default-config.js | loadOpportunitiesGroupTitle":["categoryGroups[load-opportunities].title"],"lighthouse-core/config/default-config.js | loadOpportunitiesGroupDescription":["categoryGroups[load-opportunities].description"],"lighthouse-core/config/default-config.js | budgetsGroupTitle":["categoryGroups.budgets.title"],"lighthouse-core/config/default-config.js | budgetsGroupDescription":["categoryGroups.budgets.description"],"lighthouse-core/config/default-config.js | diagnosticsGroupTitle":["categoryGroups.diagnostics.title"],"lighthouse-core/config/default-config.js | diagnosticsGroupDescription":["categoryGroups.diagnostics.description"],"lighthouse-core/config/default-config.js | pwaFastReliableGroupTitle":["categoryGroups[pwa-fast-reliable].title"],"lighthouse-core/config/default-config.js | pwaInstallableGroupTitle":["categoryGroups[pwa-installable].title"],"lighthouse-core/config/default-config.js | pwaOptimizedGroupTitle":["categoryGroups[pwa-optimized].title"],"lighthouse-core/config/default-config.js | a11yBestPracticesGroupTitle":["categoryGroups[a11y-best-practices].title"],"lighthouse-core/config/default-config.js | a11yBestPracticesGroupDescription":["categoryGroups[a11y-best-practices].description"],"lighthouse-core/config/default-config.js | a11yColorContrastGroupTitle":["categoryGroups[a11y-color-contrast].title"],"lighthouse-core/config/default-config.js | a11yColorContrastGroupDescription":["categoryGroups[a11y-color-contrast].description"],"lighthouse-core/config/default-config.js | a11yNamesLabelsGroupTitle":["categoryGroups[a11y-names-labels].title"],"lighthouse-core/config/default-config.js | a11yNamesLabelsGroupDescription":["categoryGroups[a11y-names-labels].description"],"lighthouse-core/config/default-config.js | a11yNavigationGroupTitle":["categoryGroups[a11y-navigation].title"],"lighthouse-core/config/default-config.js | a11yNavigationGroupDescription":["categoryGroups[a11y-navigation].description"],"lighthouse-core/config/default-config.js | a11yAriaGroupTitle":["categoryGroups[a11y-aria].title"],"lighthouse-core/config/default-config.js | a11yAriaGroupDescription":["categoryGroups[a11y-aria].description"],"lighthouse-core/config/default-config.js | a11yLanguageGroupTitle":["categoryGroups[a11y-language].title"],"lighthouse-core/config/default-config.js | a11yLanguageGroupDescription":["categoryGroups[a11y-language].description"],"lighthouse-core/config/default-config.js | a11yAudioVideoGroupTitle":["categoryGroups[a11y-audio-video].title"],"lighthouse-core/config/default-config.js | a11yAudioVideoGroupDescription":["categoryGroups[a11y-audio-video].description"],"lighthouse-core/config/default-config.js | a11yTablesListsVideoGroupTitle":["categoryGroups[a11y-tables-lists].title"],"lighthouse-core/config/default-config.js | a11yTablesListsVideoGroupDescription":["categoryGroups[a11y-tables-lists].description"],"lighthouse-core/config/default-config.js | seoMobileGroupTitle":["categoryGroups[seo-mobile].title"],"lighthouse-core/config/default-config.js | seoMobileGroupDescription":["categoryGroups[seo-mobile].description"],"lighthouse-core/config/default-config.js | seoContentGroupTitle":["categoryGroups[seo-content].title"],"lighthouse-core/config/default-config.js | seoContentGroupDescription":["categoryGroups[seo-content].description"],"lighthouse-core/config/default-config.js | seoCrawlingGroupTitle":["categoryGroups[seo-crawl].title"],"lighthouse-core/config/default-config.js | seoCrawlingGroupDescription":["categoryGroups[seo-crawl].description"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__METRICS":["categoryGroups[lighthouse-plugin-publisher-ads-metrics].title"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__ADS_PERFORMANCE":["categoryGroups[lighthouse-plugin-publisher-ads-ads-performance].title"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__ADS_BEST_PRACTICES":["categoryGroups[lighthouse-plugin-publisher-ads-ads-best-practices].title"]}},"stackPacks":[]};</script>
  <script>
    function __initLighthouseReport__() {
      const dom = new DOM(document);
      const renderer = new ReportRenderer(dom);

      const container = document.querySelector('main');
      renderer.renderReport(window.__LIGHTHOUSE_JSON__, container);

      // Hook in JS features and page-level event listeners after the report
      // is in the document.
      const features = new ReportUIFeatures(dom);
      features.initFeatures(window.__LIGHTHOUSE_JSON__);
    }
    window.addEventListener('DOMContentLoaded', __initLighthouseReport__);

    document.addEventListener('lh-analytics', e => {
      if (window.ga) {
        ga(e.detail.cmd, e.detail.fields);
      }
    });

    document.addEventListener('lh-log', e => {
      const logger = new Logger(document.querySelector('#lh-log'));

      switch (e.detail.cmd) {
        case 'log':
          logger.log(e.detail.msg);
          break;
        case 'warn':
          logger.warn(e.detail.msg);
          break;
        case 'error':
          logger.error(e.detail.msg);
          break;
        case 'hide':
          logger.hide();
          break;
      }
    });
  </script>
</body>
</html>

/*# sourceURL=audits/lighthouse/template.html */