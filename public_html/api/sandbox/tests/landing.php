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
  <script>window.__LIGHTHOUSE_JSON__ = {"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4021.2 Safari/537.36 OPR/68.0.3590.0 (Edition developer)","environment":{"networkUserAgent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3694.0 Safari/537.36 Chrome-Lighthouse","hostUserAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4021.2 Safari/537.36 OPR/68.0.3590.0 (Edition developer)","benchmarkIndex":1388},"lighthouseVersion":"5.7.0","fetchTime":"2020-02-08T21:43:58.660Z","requestedUrl":"https://iny.su/landings/yesfedor","finalUrl":"https://iny.su/landings/yesfedor","runWarnings":[],"audits":{"is-on-https":{"id":"is-on-https","title":"Uses HTTPS","description":"All sites should be protected with HTTPS, even ones that don't handle sensitive data. HTTPS prevents intruders from tampering with or passively listening in on the communications between your app and your users, and is a prerequisite for HTTP/2 and many new web platform APIs. [Learn more](https://web.dev/is-on-https).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[]}},"redirects-http":{"id":"redirects-http","title":"Redirects HTTP traffic to HTTPS","description":"If you've already set up HTTPS, make sure that you redirect all HTTP traffic to HTTPS in order to enable secure web features for all your users. [Learn more](https://web.dev/redirects-http).","score":1,"scoreDisplayMode":"binary"},"service-worker":{"id":"service-worker","title":"Does not register a service worker that controls page and `start_url`","description":"The service worker is the technology that enables your app to use many Progressive Web App features, such as offline, add to homescreen, and push notifications. [Learn more](https://web.dev/service-worker).","score":0,"scoreDisplayMode":"binary"},"works-offline":{"id":"works-offline","title":"Current page does not respond with a 200 when offline","description":"If you're building a Progressive Web App, consider using a service worker so that your app can work offline. [Learn more](https://web.dev/works-offline).","score":0,"scoreDisplayMode":"binary","warnings":[]},"viewport":{"id":"viewport","title":"Has a `\u003cmeta name=\"viewport\">` tag with `width` or `initial-scale`","description":"Add a `\u003cmeta name=\"viewport\">` tag to optimize your app for mobile screens. [Learn more](https://web.dev/viewport).","score":1,"scoreDisplayMode":"binary","warnings":[]},"without-javascript":{"id":"without-javascript","title":"Contains some content when JavaScript is not available","description":"Your app should display some content when JavaScript is disabled, even if it's just a warning to the user that JavaScript is required to use the app. [Learn more](https://web.dev/without-javascript).","score":1,"scoreDisplayMode":"binary"},"first-contentful-paint":{"id":"first-contentful-paint","title":"First Contentful Paint","description":"First Contentful Paint marks the time at which the first text or image is painted. [Learn more](https://web.dev/first-contentful-paint).","score":0.04,"scoreDisplayMode":"numeric","numericValue":8354.795,"displayValue":"8.4 s"},"first-meaningful-paint":{"id":"first-meaningful-paint","title":"First Meaningful Paint","description":"First Meaningful Paint measures when the primary content of a page is visible. [Learn more](https://web.dev/first-meaningful-paint).","score":0.04,"scoreDisplayMode":"numeric","numericValue":8429.795,"displayValue":"8.4 s"},"load-fast-enough-for-pwa":{"id":"load-fast-enough-for-pwa","title":"Page load is not fast enough on mobile networks","description":"A fast page load over a cellular network ensures a good mobile user experience. [Learn more](https://web.dev/load-fast-enough-for-pwa).","score":0,"scoreDisplayMode":"binary","numericValue":24056.295,"displayValue":"Interactive at 24.1 s","explanation":"Your page loads too slowly and is not interactive within 10 seconds. Look at the opportunities and diagnostics in the \"Performance\" section to learn how to improve."},"speed-index":{"id":"speed-index","title":"Speed Index","description":"Speed Index shows how quickly the contents of a page are visibly populated. [Learn more](https://web.dev/speed-index).","score":0.02,"scoreDisplayMode":"numeric","numericValue":13699.894604450976,"displayValue":"13.7 s"},"screenshot-thumbnails":{"id":"screenshot-thumbnails","title":"Screenshot Thumbnails","description":"This is what the load of your site looked like.","score":null,"scoreDisplayMode":"informative","details":{"type":"filmstrip","scale":6420,"items":[{"timing":642,"timestamp":1946252163910,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":1284,"timestamp":1946252805910,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":1926,"timestamp":1946253447910,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":2568,"timestamp":1946254089910,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":3210,"timestamp":1946254731910,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":3852,"timestamp":1946255373910,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1NLAPj096ggcDkZoAWgAoAKACgAoAKACgAoAKACgAoAKACgBrAHvigBVXb3JoAC2COCc+lACbvY0AKWx2NACbvY0AG/wBjQAbvY0ALu9j+VABu9jQAbvY0AJu9jQAobIHB5oATf7H8qAF3exoANi+goAWgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgBpL7uAu31zz+WKAEJffwF2/XmgB9ABQAUAFABQAUAFABQAUAFABQBGI2H/LQn8BQAoRgxJkJHYYFAD6ACgAoAKACgAoAKACgAoAKACgAoAKACgBCAwIPQ0AMjt0ibK5zjHJJoAkoAKACgAoAKACgAoAKACgAoAKACgBvmD3/I0AAcH1/75NAChwex/I0AJ5g9/wAjQAbwPX8jQAeYPf8A75NAAHB9fyNAChgfX8qADeCcc/kaAFoAKACgAoAKACgCLY3cA/XH+FACBH9B+n+FABsfIOBwc9v8KAFKMSDtHH+fSgBdrf3FoAXBOPkXj3oAMH+4PzoATaf+ea/nQA7L/wB0fnQAZf8Auj86ADL/AN0fnQAZf+6PzoAMv/dH50AGX/uj86ADL/3R+dADIVXOQQcelAEtABQAUAFABQAUAFABQAUAFABQAUAFABQAxepOT6Y5oAfQAUAFABQAUAFABQAUAFABQAUAFABQAUARqNuOv5f/AFqAHbxnv+RoAN49D+VADqACgAoAKACgAoAKACgAoAKACgAoAgBGAAV+mR/hQA7eMjAT86AHGTv8v50AIZcY+7z/ALVAB5v+7n/eoABKSP4fzoAXc390fnQAuW/uj86ADL+g/OgAy390fnQAZf0H50AGX/uj86ADLf3R+dABlvQfnQAoz3FAEaowwOT79P60AOBY56cdsf8A16ADc46rn6D/AOvQAZf0/Qf40AGX9MfUf/XoAAWOeMf5+tABl89OPp/9egAy/p+OP/r0AGX9P8/nQAZf0x+H/wBegAy+en6f/XoATMmenH0/+vQAoL7sYx744/nQAuG9R+VACjOeo/KgBvl46HFABs5PJ5oAdg+o/KgAw3qPyoAUUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFABQAUAFAH//Z"},{"timing":4494,"timestamp":1946256015910,"data":"data:image/jpeg;base64,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"},{"timing":5136,"timestamp":1946256657910,"data":"data:image/jpeg;base64,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"},{"timing":5778,"timestamp":1946257299910,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APzMhjtmt53lnkjnVR5MaR7ldsjO45G0YzyM8447iCCvQAUAFAyM/db60FEe8qQQcGmBMGZnXJz360ADQLno36UgE+yjaT82fTFAEUkJHQE0AfbH7Of7OPw08ffAqz8Q+JLPd4hO7y4TLdD7Zi6ljPKSBI9iKp5HzfXNfcZdl1Gvh6Mp0VJS5ru7TVnps+p+VZ5nmLwuKxVOnieRw5OSHInzXS5tbdL3+fQ7x/2RfhGX/d6RDtK7wXvL5ccE7ThzhuAOMrk/exk1639jYT7VD/yZ/wDyR8v/AKzZo9Xirf8Abi/+RGS/sl/COOWVV0TzEX/VsLy8G8bgOQZeDjn8MZo/sbBvah/5M/0bKfEeZ/8AQV/5TX/yJBJ+yd8KVQMvhxZCSRt+3XYI9/8AWYx+NUsmwbdvY2/7eb/9uInxLmkY3jibvtyRX5xRz2r/AAX8GfDL4h/CHVvDWj/2bqD+PdGgM63c8nyGfdjDuR1RTnGeK8nOMtw2EwntaULO67+fds+n4XznH5jjpU8VU5oqLdrRWt1rok+58WeWn9xfyr4U/Vw8tP7i/lQAvlr/AHV/KgA8tf7q/lTAjMS7JPlXAx2FICtNGBj5QBj0oAsRxgyJ8i4/3RQU7Fl4EJ/1a/8AfugkPs6BCPLT67DQAwRQ9PLj5+oxQAeUhwMIMejdarmfcjlT3Q2SJduQBt7DIzRzS7hyR7L7ihMrJIQ2M+1HNLuPlXYi59aOaXcOVdkehfs7D/jIL4Y55/4qjS+v/X3FSbb0bCyXQ5OgoKQC9qrYBKQChR5Mp5zkUgKkilygAyT0oAI7kxdUDEetKwD/AO0QDzH/AOPGgdiT+0Qw+4w+jUrsQf2gvXD9fWndgN+2IWyS/wClFwHNeRyZ3MwXt8oouBFLdKwDDazf7uKYFNsknPWgD0H9nb/k4L4Y/wDY0aX/AOlcVAHJU2AUwCjQBV60gFx+6l/CkBVKl3jAbaScZNAFj+ytxbbdRMR15xWXN5Gjiu5Xk09lk2iRGJGchuKrm0vYEugg0ybI5T/vqhTQ3HQintnhXLEdccGrM0Q9BmgNxaBBQAxjQVY9L/ZgRZP2lfhMrqGVvF2kAqwyCPtkVAmcVT3ETWdnNqF3Da28ZlnmcRxxqMlmJwAPxosB0umfCjxtrMAm0/wdr99C2MSW2mTyKcpvGCFPVPm+nPSkBW/4V74p/s+G+/4RrWPsM0ayxXP2CXy5EYZVlbbggjkEdRQBX07wjrmq2jz2ekX91C7eWkkFs7qz7lQqCBydzquPVgO4oAfH8MfGNxZ213B4V1uS2ncJFOmnTFHY8gBtuCfpTA2rf4falD4agtb7wF4gk1i/uJZbHVYfMjWVFiBMawmFhKF2vISrA4zk4FDiV5kl14Nt7bxJcrcfDnxTarZwrdXmlteMjQoqt5j5a23JFu2kFskBSCzE5E7EkF98ONXk0G3ksPh34ohkliEhv7gSTQuqjc7xqIE4yj8l2AUEHJBagd2Yl78JvG+nuiXfhDXbZ3VnVZtOmUsF+8QCvQd/Si4rjbz4U+NdP0uPUbrwjrltp8kZlS6m06ZImQKWLBiuCAqsc+ik9qLhcqyfD7xTDdW9q/hrWEubh5I4YWsJQ8jJneqrtySu1sgdNpz0pgOsvh54o1HU7fTrfw7qkt/cIXgthZyeZKNjv8i4y2VjcjHXacdKAMvX/D+p+GNUl0zWdNu9J1GEKZbO+gaGZAyhl3IwBGVIIyOQQe9Azvf2X/8Ak5f4Sf8AY36R/wClsVAjh6YC5weKYDo2Me0oShDbxt4w3r9akWohAK7SMrnOO1Ax8Q+R1GQoGQB0B/yBQBWVowmJRuQfwHo3OcH24oA2W8Y27vMzeHNLYOyMgL3OYQrA4VvOyQQAnzZwvTB5oArr4ogWeWQ6Dph3pIqxnziqFwQGAMnJXJ25yM8kGgCynjSwXVUvG8JaO8IXb9haa98leeoP2jzM/VyOBwBmgDIvNWiupi8VlFZKwUGKB3K8dTl2ZuTycnqTjAwKVgEOox+WYwj7D1XfwadgM9sMMY+XOQvb0/lQA5ZXRtyuytgjIPODnP55P5mgBJZXndnldpHYlizHJJPUk0Aek/sv/wDJy/wk/wCxv0j/ANLYqAOHpoBaoBRUiFpDHxHaX919KYHrf7NXwW0X40R/FBdaub+2/wCEW8C6p4nshYOieZdW3leWkm5GzGfMbIXa3TDCpYup7r4z/YD8MeIvgX4W8dfCrXNV1e717xZcaTbx6tPEkDac2qTWFnc7TFHKpLGyEmQxBuM7UAIDDqeX/tqfs2+C/gL8SfDWleANd1HXfDeteHLXXIb/AFKeK4aXzpZlVkeKONTGUjRhwT8xOcEAD0VxrU9G+Dv7Evw28afDf4aeKPFPifXtEt/EHh7xTrWs3ds8TxWY0y5jjjeOPySxQRuzSKSxYqNpSpTuN6HlX7S/7Kj/ALOXwu+Fmoauup2vjTxBc67ba3YXjL9nhNldpDA9uAitseNw+4swcMrLhSKaYHztg0xBigBDkUDEagR6Z+y//wAnL/CT/sb9I/8AS2KgDh6oApgOFSwFpCIpWKEYJGeOKYztvhP8add+C48YtodvY3DeKPDl54YvPt0bv5dtc7PMeLa64kHlrtLblHOVNID0DwP+3V8S/h14P8L+HvD50qxh8O6TrGj2t6LdzcvFqM0c8sjuZMCSOWKJ42QKAUAYOMggWMHxj8ddc+JGpfD7VNd0vRbqPwfoun6FbWKxSiC8tbRmKLcAyFmLhirlGTI6BTVIR1ll+1p4ss/BGm+FNP0Dw3Y6Jp+j+IdDtYIIrljFa6xKJLlQz3DMTGQFiLEkAfP5h5o0Fqcz8WPjx4w+NHgD4d+E/E62U9l4Fs5rDTLuGEx3MkLiJQsxDbW2JBEikKpwuWLsS1Fg1PLf7GP9xvWiw9RraRx0aiwDTpG4Zw+PpRYZE2lEH+MH/dosTqelfsy6aIv2k/hMxJ48W6SeV/6fIqLFHmlIAo1AKBMfmkMhn7UxIgk+4aQytQA4MR3P4GgBRIw6Mw/GmAvnyf8APR/++qLgO+1Tf89ZP++jRcAF3ODxM/8A31RcB41G7VSBcOB6ZouA06nd5/4+HouB6b+zDqV1J+0r8JFeZmU+LtIBB9PtkVFwOFNnLkkAY+tXYm9iKSNomw3Wlaw07iCpsAuaQIjn7UDK7j5DQBXoAKACgAoAKACgBCaAG0Aem/sv/wDJy/wk/wCxv0j/ANLYqAObmZIRvMKlR2DVYrFK4njmHyx7D65oGQUgFzmlYmxHNyopjRA+drfSpGV6ACgAoAKACgBKAEPWgBKAPTf2X/8Ak5f4Sf8AY36R/wClsVAHOygIpzHGQvPBqwMt2DOSBgE9KAEBpbiCjUYyX7n40CK55UipGV6ACgAoAKAEJxQAZoAbQAUAem/sv/8AJzHwk/7G/SP/AEtioA4egQVTGFABRYBkv3KAICeD9KkCvQBZtdMvL62vbi2tJ7i3sYhPdSxRMyW8ZkSMPIQMKpeSNMnA3Oo6kUAVqAENACHJ96AE7mgAoAKAPTP2Xs/8NM/CT0/4S/SP/S2KgDhjIo7imSAkU9x+dMYF1HcfnQAoZSOooC42RgUPIoYEA61IyvQB9Ufs+/DXwD41+EHjy7T4g2vhG7bw/FZ+JbXXxve3C6vZ3C3dkkag3EbxQGIQ/wCsE5jTJE6EAj5w8ZP4ek8UakfCkOpQeG/OIsF1mWOS8MQ4VpjGqpvPUqowucAtjcQZiGgBKACgAoAQ0Aem/svD/jJf4Sf9jfpH/pbFQB5xWxAuaAEJIFAC5PrQAo6ik9hkg61kUV6ACgAoARulACHtQAlABQAh6igD039l/wD5OZ+En/Y36R/6WxUAf//Z"},{"timing":6420,"timestamp":1946257941910,"data":"data:image/jpeg;base64,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"}]}},"final-screenshot":{"id":"final-screenshot","title":"Final Screenshot","description":"The last screenshot captured of the pageload.","score":null,"scoreDisplayMode":"informative","details":{"type":"screenshot","timing":6421,"timestamp":1946257942564,"data":"data:image/jpeg;base64,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"}},"estimated-input-latency":{"id":"estimated-input-latency","title":"Estimated Input Latency","description":"Estimated Input Latency is an estimate of how long your app takes to respond to user input, in milliseconds, during the busiest 5s window of page load. If your latency is higher than 50 ms, users may perceive your app as laggy. [Learn more](https://web.dev/estimated-input-latency).","score":0,"scoreDisplayMode":"numeric","numericValue":2094.4,"displayValue":"2,090 ms"},"total-blocking-time":{"id":"total-blocking-time","title":"Total Blocking Time","description":"Sum of all time periods between FCP and Time to Interactive, when task length exceeded 50ms, expressed in milliseconds.","score":0.31,"scoreDisplayMode":"numeric","numericValue":795.5,"displayValue":"800 ms"},"max-potential-fid":{"id":"max-potential-fid","title":"Max Potential First Input Delay","description":"The maximum potential First Input Delay that your users could experience is the duration, in milliseconds, of the longest task. [Learn more](https://developers.google.com/web/updates/2018/05/first-input-delay).","score":0,"scoreDisplayMode":"numeric","numericValue":2950,"displayValue":"2,950 ms"},"errors-in-console":{"id":"errors-in-console","title":"Browser errors were logged to the console","description":"Errors logged to the console indicate unresolved problems. They can come from network request failures and other browser concerns. [Learn more](https://web.dev/errors-in-console)","score":0,"scoreDisplayMode":"binary","numericValue":3,"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"description","itemType":"code","text":"Description"}],"items":[{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://www.youtube.com/yts/jsbin/www-embed-player-vflo2ve9T/www-embed-player.js"},{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://www.youtube.com/yts/jsbin/www-embed-player-vflo2ve9T/www-embed-player.js"},{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://www.youtube.com/ptracking?html5=1&video_id=t9emR6Fex4Y&cpn=IiOOpOiMvkex7yVn&ei=pCs_XsrcIcHr7QTehqDgBQ&ptk=youtube_none&pltype=contentugc"}]}},"time-to-first-byte":{"id":"time-to-first-byte","title":"Server response times are low (TTFB)","description":"Time To First Byte identifies the time at which your server sends a response. [Learn more](https://web.dev/time-to-first-byte).","score":1,"scoreDisplayMode":"binary","numericValue":69.656,"displayValue":"Root document took 70 ms","details":{"type":"opportunity","overallSavingsMs":-530.344,"headings":[],"items":[]}},"first-cpu-idle":{"id":"first-cpu-idle","title":"First CPU Idle","description":"First CPU Idle marks the first time at which the page's main thread is quiet enough to handle input.  [Learn more](https://web.dev/first-cpu-idle).","score":0.29,"scoreDisplayMode":"numeric","numericValue":8429.795,"displayValue":"8.4 s"},"interactive":{"id":"interactive","title":"Time to Interactive","description":"Time to interactive is the amount of time it takes for the page to become fully interactive. [Learn more](https://web.dev/interactive).","score":0.01,"scoreDisplayMode":"numeric","numericValue":24056.295,"displayValue":"24.1 s"},"user-timings":{"id":"user-timings","title":"User Timing marks and measures","description":"Consider instrumenting your app with the User Timing API to measure your app's real-world performance during key user experiences. [Learn more](https://web.dev/user-timings).","score":null,"scoreDisplayMode":"notApplicable","details":{"type":"table","headings":[],"items":[]}},"critical-request-chains":{"id":"critical-request-chains","title":"Avoid chaining critical requests","description":"The Critical Request Chains below show you what resources are loaded with a high priority. Consider reducing the length of chains, reducing the download size of resources, or deferring the download of unnecessary resources to improve page load. [Learn more](https://web.dev/critical-request-chains).","score":null,"scoreDisplayMode":"informative","displayValue":"5 chains found","details":{"type":"criticalrequestchain","chains":{"7223F16B66A8BEAACEB0643C461F9C8C":{"request":{"url":"https://iny.su/landings/yesfedor","startTime":1946251.523269,"endTime":1946251.594949,"responseReceivedTime":1946251.59438,"transferSize":1810},"children":{"4692.124":{"request":{"url":"https://iny.su/web/css/theme/main-dark.css?version=32","startTime":1946251.608902,"endTime":1946251.657172,"responseReceivedTime":1946251.656302,"transferSize":893}},"4692.125":{"request":{"url":"https://iny.su/web/css/themes.css?version=10","startTime":1946251.610821,"endTime":1946251.657896,"responseReceivedTime":1946251.656717,"transferSize":743}},"4692.126":{"request":{"url":"https://iny.su/web/css/@offline.css","startTime":1946251.61162,"endTime":1946251.679054,"responseReceivedTime":1946251.677346,"transferSize":1357}},"4692.127":{"request":{"url":"https://iny.su/web/js/core/init.js?version=273","startTime":1946251.612424,"endTime":1946251.679808,"responseReceivedTime":1946251.677795,"transferSize":2910}},"4692.128":{"request":{"url":"https://iny.su/web/js/module/@offline.js","startTime":1946251.613554,"endTime":1946251.680091,"responseReceivedTime":1946251.678221,"transferSize":3266}}}}},"longestChain":{"duration":156.82199993170798,"length":2,"transferSize":3266}}},"redirects":{"id":"redirects","title":"Avoid multiple page redirects","description":"Redirects introduce additional delays before the page can be loaded. [Learn more](https://web.dev/redirects).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"installable-manifest":{"id":"installable-manifest","title":"Web app manifest meets the installability requirements","description":"Browsers can proactively prompt users to add your app to their homescreen, which can lead to higher engagement. [Learn more](https://web.dev/installable-manifest).","score":1,"scoreDisplayMode":"binary","details":{"type":"debugdata","items":[{"failures":[],"isParseFailure":false,"hasStartUrl":true,"hasIconsAtLeast192px":true,"hasIconsAtLeast512px":true,"hasPWADisplayValue":true,"hasBackgroundColor":true,"hasThemeColor":true,"hasShortName":true,"shortNameLength":true,"hasName":true}]}},"apple-touch-icon":{"id":"apple-touch-icon","title":"Provides a valid `apple-touch-icon`","description":"For ideal appearance on iOS when users add a progressive web app to the home screen, define an `apple-touch-icon`. It must point to a non-transparent 192px (or 180px) square PNG. [Learn More](https://web.dev/apple-touch-icon/).","score":1,"scoreDisplayMode":"binary","warnings":[]},"splash-screen":{"id":"splash-screen","title":"Configured for a custom splash screen","description":"A themed splash screen ensures a high-quality experience when users launch your app from their homescreens. [Learn more](https://web.dev/splash-screen).","score":1,"scoreDisplayMode":"binary","details":{"type":"debugdata","items":[{"failures":[],"isParseFailure":false,"hasStartUrl":true,"hasIconsAtLeast192px":true,"hasIconsAtLeast512px":true,"hasPWADisplayValue":true,"hasBackgroundColor":true,"hasThemeColor":true,"hasShortName":true,"shortNameLength":true,"hasName":true}]}},"themed-omnibox":{"id":"themed-omnibox","title":"Sets a theme color for the address bar.","description":"The browser address bar can be themed to match your site. [Learn more](https://web.dev/themed-omnibox).","score":1,"scoreDisplayMode":"binary","details":{"type":"debugdata","items":[{"failures":[],"themeColor":"#4285f4","isParseFailure":false,"hasStartUrl":true,"hasIconsAtLeast192px":true,"hasIconsAtLeast512px":true,"hasPWADisplayValue":true,"hasBackgroundColor":true,"hasThemeColor":true,"hasShortName":true,"shortNameLength":true,"hasName":true}]}},"content-width":{"id":"content-width","title":"Content is sized correctly for the viewport","description":"If the width of your app's content doesn't match the width of the viewport, your app might not be optimized for mobile screens. [Learn more](https://web.dev/content-width).","score":null,"scoreDisplayMode":"notApplicable"},"image-aspect-ratio":{"id":"image-aspect-ratio","title":"Displays images with correct aspect ratio","description":"Image display dimensions should match natural aspect ratio. [Learn more](https://web.dev/image-aspect-ratio).","score":1,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[],"items":[]}},"deprecations":{"id":"deprecations","title":"Uses deprecated APIs","description":"Deprecated APIs will eventually be removed from the browser. [Learn more](https://web.dev/deprecations).","score":0,"scoreDisplayMode":"binary","displayValue":"2 warnings found","details":{"type":"table","headings":[{"key":"value","itemType":"text","text":"Deprecation / Warning"},{"key":"url","itemType":"url","text":"URL"},{"key":"lineNumber","itemType":"text","text":"Line"}],"items":[{"value":"Synchronous XMLHttpRequest on the main thread is deprecated because of its detrimental effects to the end user's experience. For more help, check https://xhr.spec.whatwg.org/.","url":"https://iny.su/web/js/module/@offline.js","source":"deprecation","lineNumber":1},{"value":"Synchronous XMLHttpRequest on the main thread is deprecated because of its detrimental effects to the end user's experience. For more help, check https://xhr.spec.whatwg.org/.","url":"https://iny.su/web/js/module/@offline.js","source":"deprecation","lineNumber":1}]}},"mainthread-work-breakdown":{"id":"mainthread-work-breakdown","title":"Minimize main-thread work","description":"Consider reducing the time spent parsing, compiling and executing JS. You may find delivering smaller JS payloads helps with this. [Learn more](https://web.dev/mainthread-work-breakdown)","score":0,"scoreDisplayMode":"numeric","numericValue":17205.719999999666,"displayValue":"17.2 s","details":{"type":"table","headings":[{"key":"groupLabel","itemType":"text","text":"Category"},{"key":"duration","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"group":"scriptEvaluation","groupLabel":"Script Evaluation","duration":12424.503999999964},{"group":"styleLayout","groupLabel":"Style & Layout","duration":1913.5039999999983},{"group":"paintCompositeRender","groupLabel":"Rendering","duration":1319.5879999997142},{"group":"other","groupLabel":"Other","duration":1121.6359999999875},{"group":"scriptParseCompile","groupLabel":"Script Parsing & Compilation","duration":210.61600000000004},{"group":"parseHTML","groupLabel":"Parse HTML & CSS","duration":154.04400000000004},{"group":"garbageCollection","groupLabel":"Garbage Collection","duration":61.827999999999996}]}},"bootup-time":{"id":"bootup-time","title":"Reduce JavaScript execution time","description":"Consider reducing the time spent parsing, compiling, and executing JS. You may find delivering smaller JS payloads helps with this. [Learn more](https://web.dev/bootup-time).","score":0.05,"scoreDisplayMode":"numeric","numericValue":12532.707999999993,"displayValue":"12.5 s","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"total","granularity":1,"itemType":"ms","text":"Total CPU Time"},{"key":"scripting","granularity":1,"itemType":"ms","text":"Script Evaluation"},{"key":"scriptParseCompile","granularity":1,"itemType":"ms","text":"Script Parse"}],"items":[{"url":"https://iny.su/web/vendor/js/jquery.js","total":12158.759999999993,"scripting":11785.523999999992,"scriptParseCompile":178.81600000000003},{"url":"Other","total":4655.2119999997,"scripting":302.22800000000075,"scriptParseCompile":1.768},{"url":"https://s.ytimg.com/yts/jsbin/www-widgetapi-vflMm4105/www-widgetapi.js","total":215.7440000000003,"scripting":194.30000000000032,"scriptParseCompile":10.075999999999999},{"url":"https://iny.su/web/js/core/init.js?version=273","total":73.35199999999999,"scripting":58.02799999999999,"scriptParseCompile":1.9680000000000002}],"summary":{"wastedMs":12532.707999999993}}},"uses-rel-preload":{"id":"uses-rel-preload","title":"Preload key requests","description":"Consider using `\u003clink rel=preload>` to prioritize fetching resources that are currently requested later in page load. [Learn more](https://web.dev/uses-rel-preload).","score":0.21,"scoreDisplayMode":"numeric","numericValue":3207,"displayValue":"Potential savings of 3,210 ms","details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"wastedMs","valueType":"timespanMs","label":"Potential Savings"}],"items":[{"url":"https://iny.su/web/vendor/css/bootstrap.min.css?version=4","wastedMs":3207},{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","wastedMs":1800},{"url":"https://iny.su/web/css/common.css?version=68","wastedMs":1800},{"url":"https://iny.su/web/css/landings/yesfedor.css?v=67","wastedMs":1650}],"overallSavingsMs":3207}},"uses-rel-preconnect":{"id":"uses-rel-preconnect","title":"Preconnect to required origins","description":"Consider adding `preconnect` or `dns-prefetch` resource hints to establish early connections to important third-party origins. [Learn more](https://web.dev/uses-rel-preconnect).","score":0.75,"scoreDisplayMode":"numeric","numericValue":300,"displayValue":"Potential savings of 300 ms","warnings":[],"details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"wastedMs","valueType":"timespanMs","label":"Potential Savings"}],"items":[{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com","wastedMs":300}],"overallSavingsMs":300}},"font-display":{"id":"font-display","title":"Ensure text remains visible during webfont load","description":"Leverage the font-display CSS feature to ensure text is user-visible while webfonts are loading. [Learn more](https://web.dev/font-display).","score":0,"scoreDisplayMode":"binary","warnings":["Lighthouse was unable to automatically check the font-display value for the following URL: https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBBc4.woff2.","Lighthouse was unable to automatically check the font-display value for the following URL: https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2.","Lighthouse was unable to automatically check the font-display value for the following URL: https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2.","Lighthouse was unable to automatically check the font-display value for the following URL: https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2."],"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"wastedMs","itemType":"ms","text":"Potential Savings"}],"items":[{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","wastedMs":344.05199997127056},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Light.woff2","wastedMs":410.1199998985976},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","wastedMs":462.6339999958873},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Medium.woff2","wastedMs":544.4070000667125}]}},"diagnostics":{"id":"diagnostics","title":"Diagnostics","description":"Collection of useful page vitals.","score":null,"scoreDisplayMode":"informative","details":{"type":"debugdata","items":[{"numRequests":80,"numScripts":12,"numStylesheets":9,"numFonts":8,"numTasks":1315,"numTasksOver10ms":26,"numTasksOver25ms":10,"numTasksOver50ms":5,"numTasksOver100ms":4,"numTasksOver500ms":1,"rtt":3.0720000000000005,"throughput":8376057.532297755,"maxRtt":3.0720000000000005,"maxServerLatency":88.54199999999999,"totalByteWeight":8616189,"totalTaskTime":4301.430000000005,"mainDocumentTransferSize":1810}]}},"network-requests":{"id":"network-requests","title":"Network Requests","description":"Lists the network requests that were made during page load.","score":null,"scoreDisplayMode":"informative","numericValue":80,"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"startTime","itemType":"ms","granularity":1,"text":"Start Time"},{"key":"endTime","itemType":"ms","granularity":1,"text":"End Time"},{"key":"transferSize","itemType":"bytes","displayUnit":"kb","granularity":1,"text":"Transfer Size"},{"key":"resourceSize","itemType":"bytes","displayUnit":"kb","granularity":1,"text":"Resource Size"},{"key":"statusCode","itemType":"text","text":"Status Code"},{"key":"mimeType","itemType":"text","text":"MIME Type"},{"key":"resourceType","itemType":"text","text":"Resource Type"}],"items":[{"url":"https://iny.su/landings/yesfedor","startTime":0,"endTime":71.68000005185604,"transferSize":1810,"resourceSize":9358,"statusCode":200,"mimeType":"text/html","resourceType":"Document"},{"url":"https://iny.su/web/css/theme/main-dark.css?version=32","startTime":85.63299989327788,"endTime":133.90300003811717,"transferSize":893,"resourceSize":1432,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/css/themes.css?version=10","startTime":87.55200006999075,"endTime":134.62699996307492,"transferSize":743,"resourceSize":10934,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/css/@offline.css","startTime":88.35100010037422,"endTime":155.78499995172024,"transferSize":1357,"resourceSize":18658,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/js/core/init.js?version=273","startTime":89.15499993599951,"endTime":156.5390001051128,"transferSize":2910,"resourceSize":21038,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://iny.su/web/js/module/@offline.js","startTime":90.2849999256432,"endTime":156.82199993170798,"transferSize":3266,"resourceSize":18622,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://iny.su/web/vendor/js/jquery.js","startTime":163.933000061661,"endTime":254.59000002592802,"transferSize":30866,"resourceSize":176290,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://iny.su/web/js/include/main/boot.json?time=1581198239631","startTime":275.36999993026257,"endTime":336.0800000373274,"transferSize":1570,"resourceSize":2832,"statusCode":200,"mimeType":"text/plain","resourceType":"XHR"},{"url":"https://iny.su/web/file/favicon/main/favicon.ico?option=with_brain_v2","startTime":276.6100000590086,"endTime":339.3830000422895,"transferSize":12562,"resourceSize":24754,"statusCode":200,"mimeType":"image/x-icon","resourceType":"Other"},{"url":"https://iny.su/web/vendor/css/bootstrap.min.css?version=4","startTime":344.26099993288517,"endTime":432.1779999881983,"transferSize":23361,"resourceSize":311516,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","startTime":345.5910000484437,"endTime":3327.4970001075417,"transferSize":67558,"resourceSize":1236002,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/css/common.css?version=68","startTime":346.84500005096197,"endTime":557.7090000733733,"transferSize":679,"resourceSize":1004,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/vendor/js/bootstrap.min.js?version=4","startTime":351.9540000706911,"endTime":585.4619999881834,"transferSize":15580,"resourceSize":116144,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/vendor/js/mdb.min.js?version=4","startTime":599.2950000800192,"endTime":1137.8679999615997,"transferSize":121065,"resourceSize":820606,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/vendor/js/popper.min.js?version=4","startTime":1190.5839999672025,"endTime":1234.9729998968542,"transferSize":7494,"resourceSize":41074,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/vendor/js/icon.js?version=4","startTime":1242.1359999570996,"endTime":2656.7720000166446,"transferSize":413448,"resourceSize":2263692,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/tpl/main.tpl.js?version=69","startTime":2699.0849999710917,"endTime":2743.10200009495,"transferSize":1377,"resourceSize":9932,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/main.style.js?version=79","startTime":2746.50299991481,"endTime":2791.8779999017715,"transferSize":1327,"resourceSize":9184,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/core/dateParse.js?version=17","startTime":2796.1349999532104,"endTime":2839.4279999192804,"transferSize":670,"resourceSize":3250,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/core/navigation.js?version=70","startTime":2842.9709998890758,"endTime":2888.4560000151396,"transferSize":2138,"resourceSize":17324,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=getWarp&v=0.1","startTime":2894.37699993141,"endTime":2963.8179999310523,"transferSize":7358,"resourceSize":35162,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/forms.js?version=64","startTime":2930.202000075951,"endTime":2974.1390000563115,"transferSize":1180,"resourceSize":1982,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/userApi.js?version=76","startTime":2977.599000092596,"endTime":3022.675999905914,"transferSize":1985,"resourceSize":13756,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/core/languages.js?version=65","startTime":3028.9660000707954,"endTime":3073.5359999816865,"transferSize":1073,"resourceSize":6494,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=lang/get&v=0.1&language=ru","startTime":3077.119000023231,"endTime":3142.621000064537,"transferSize":1783,"resourceSize":8006,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/fn.js?version=64","startTime":3082.141000078991,"endTime":3125.8149999193847,"transferSize":1566,"resourceSize":4310,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/web/js/module/law-manager.js?version=7","startTime":3129.3989999685436,"endTime":3173.386000096798,"transferSize":1575,"resourceSize":7936,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=getHeader&v=0.1&domain=iny.su&type=user","startTime":3176.44300009124,"endTime":3241.9030000455678,"transferSize":874,"resourceSize":3558,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=getFooter&v=0.1&domain=iny.su&type=none","startTime":3185.4300000704825,"endTime":3248.8899999298155,"transferSize":220,"resourceSize":76,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://iny.su/web/file/favicon/main/favicon.ico?option=with_brain_v2","startTime":3196.860000025481,"endTime":3197.7200000546873,"transferSize":0,"resourceSize":24754,"statusCode":200,"mimeType":"image/x-icon","resourceType":"Other"},{"url":"https://iny.su/web/css/landings/yesfedor.css?v=67","startTime":3201.460999902338,"endTime":3243.6850001104176,"transferSize":624,"resourceSize":894,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://iny.su/web/js/landings/yesfedor.js?v=64","startTime":3206.741000059992,"endTime":3250.8109998889267,"transferSize":791,"resourceSize":3642,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://unpkg.com/aos@2.3.1/dist/aos.css?version=1","startTime":3255.210000090301,"endTime":3383.8680000044405,"transferSize":130,"resourceSize":0,"statusCode":302,"mimeType":"text/plain"},{"url":"https://unpkg.com/aos@2.3.1/dist/aos.js?version=1","startTime":3258.398999925703,"endTime":3385.5369999073446,"transferSize":103,"resourceSize":0,"statusCode":302,"mimeType":"text/plain"},{"url":"https://www.youtube.com/iframe_api","startTime":3279.6350000426173,"endTime":3324.3460000958294,"transferSize":923,"resourceSize":1718,"statusCode":200,"mimeType":"application/javascript","resourceType":"Script"},{"url":"https://iny.su/web/file/images/main/landings/yesfedor/writecode.jpg","startTime":3292.399999918416,"endTime":3338.9879998285323,"transferSize":4674834,"resourceSize":4718592,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://img.youtube.com/vi/t9emR6Fex4Y/maxresdefault.jpg","startTime":3292.84800007008,"endTime":3338.5689998976886,"transferSize":53,"resourceSize":67700,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://iny.su/api.php?_action=checker&v=0.1","startTime":3359.5280000008643,"endTime":3666.111000115052,"transferSize":400,"resourceSize":204,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://unpkg.com/aos@2.3.1/dist/aos.css?version=1","startTime":3255.210000090301,"endTime":3383.8899999391288,"transferSize":130,"resourceSize":0,"statusCode":302,"mimeType":"text/plain"},{"url":"https://unpkg.com/aos@2.3.1/dist/aos.css","startTime":3384.1109999921173,"endTime":3468.961999984458,"transferSize":1602,"resourceSize":52106,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://unpkg.com/aos@2.3.1/dist/aos.js?version=1","startTime":3258.398999925703,"endTime":3385.5810000095516,"transferSize":103,"resourceSize":0,"statusCode":302,"mimeType":"text/plain"},{"url":"https://unpkg.com/aos@2.3.1/dist/aos.js","startTime":3385.7370000332594,"endTime":3471.8619999475777,"transferSize":4258,"resourceSize":28478,"statusCode":200,"mimeType":"application/javascript","resourceType":"Script"},{"url":"https://s.ytimg.com/yts/jsbin/www-widgetapi-vflMm4105/www-widgetapi.js","startTime":3399.4299999903888,"endTime":3439.1389999073,"transferSize":16359,"resourceSize":54948,"statusCode":200,"mimeType":"text/javascript","resourceType":"Script"},{"url":"https://www.youtube.com/embed/t9emR6Fex4Y?autohide=1&rel=0&autoplay=0&playsinline=1&iv_load_policy=3&modestbranding=1&controls=0&showinfo=0&disablekb=1&enablejsapi=1&origin=https%3A%2F%2Finy.su&widgetid=1","startTime":3465.032000094652,"endTime":3465.5869998969138,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"Document"},{"url":"https://www.youtube.com/embed/t9emR6Fex4Y?autohide=1&rel=0&autoplay=0&playsinline=1&iv_load_policy=3&modestbranding=1&controls=0&showinfo=0&disablekb=1&enablejsapi=1&origin=https%3A%2F%2Finy.su&widgetid=1","startTime":3480.7980000041425,"endTime":3678.8780000060797,"transferSize":17569,"resourceSize":45208,"statusCode":200,"mimeType":"text/html","resourceType":"Document"},{"url":"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cp","startTime":3612.8549999557436,"endTime":3613.0450000055134,"transferSize":0,"resourceSize":396,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","startTime":3646.00700000301,"endTime":3990.0589999742806,"transferSize":50423,"resourceSize":98472,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Light.woff2","startTime":3648.2410000171512,"endTime":4058.360999915749,"transferSize":50858,"resourceSize":98760,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","startTime":3649.4100000709295,"endTime":4112.044000066817,"transferSize":100259,"resourceSize":99952,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Medium.woff2","startTime":3650.0589998904616,"endTime":4194.465999957174,"transferSize":70108,"resourceSize":100448,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://www.youtube.com/yts/cssbin/www-player-vflQJDcuD.css","startTime":3685.1290001068264,"endTime":3760.575999971479,"transferSize":41960,"resourceSize":273416,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://www.youtube.com/yts/jsbin/www-embed-player-vflo2ve9T/www-embed-player.js","startTime":3685.8810000121593,"endTime":3759.7850000020117,"transferSize":40594,"resourceSize":112770,"statusCode":200,"mimeType":"text/javascript","resourceType":"Script"},{"url":"https://www.youtube.com/yts/jsbin/player_ias-vflZgL1a2/ru_RU/base.js","startTime":3688.2730000652373,"endTime":3812.5799999106675,"transferSize":413618,"resourceSize":1274329,"statusCode":200,"mimeType":"text/javascript","resourceType":"Script"},{"url":"https://googleads.g.doubleclick.net/pagead/id","startTime":3909.6029999200255,"endTime":3910.005999961868,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"XHR"},{"url":"https://www.google.com/js/bg/SkABCby1tsjyITqGq-Y_EQnLFPJf8iIedpDB_9O5x1g.js","startTime":3914.935000007972,"endTime":3951.7709999345243,"transferSize":5547,"resourceSize":12307,"statusCode":200,"mimeType":"text/javascript","resourceType":"Script"},{"url":"https://static.doubleclick.net/instream/ad_status.js","startTime":3916.1729998886585,"endTime":3917.28900000453,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"Script"},{"url":"https://www.youtube.com/yts/jsbin/player_ias-vflZgL1a2/ru_RU/embed.js","startTime":4031.8899999838322,"endTime":4107.593999942765,"transferSize":7196,"resourceSize":23250,"statusCode":200,"mimeType":"text/javascript","resourceType":"Script"},{"url":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAADGCAYAAAAT+OqFAAAAdklEQVQoz42QQQ7AIAgEF/T/D+kbq/","startTime":4043.322999961674,"endTime":4043.3529999572784,"transferSize":0,"resourceSize":175,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://yt3.ggpht.com/-g6E715g-x9I/AAAAAAAAAAI/AAAAAAAAAAA/UfcRMZmcd0M/s68-c-k-no-mo-rj-c0xffffff/photo.jpg","startTime":4044.518999988213,"endTime":4078.4310000017285,"transferSize":1645,"resourceSize":1614,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://i.ytimg.com/vi/t9emR6Fex4Y/hqdefault.jpg","startTime":4046.8460000120103,"endTime":4088.1149999331683,"transferSize":4851,"resourceSize":4789,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBBc4.woff2","startTime":4048.6620001029223,"endTime":4086.79399988614,"transferSize":15618,"resourceSize":15552,"statusCode":200,"mimeType":"font/woff2","resourceType":"Font"},{"url":"https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2","startTime":4050.7890000008047,"endTime":4089.1509999055415,"transferSize":10186,"resourceSize":10120,"statusCode":200,"mimeType":"font/woff2","resourceType":"Font"},{"url":"https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2","startTime":4056.5150000620633,"endTime":4093.26700004749,"transferSize":15410,"resourceSize":15344,"statusCode":200,"mimeType":"font/woff2","resourceType":"Font"},{"url":"https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2","startTime":4060.659999959171,"endTime":4101.32099990733,"transferSize":9898,"resourceSize":9832,"statusCode":200,"mimeType":"font/woff2","resourceType":"Font"},{"url":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjw","startTime":4310.260999947786,"endTime":4310.459000058472,"transferSize":0,"resourceSize":1078,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://www.youtube.com/get_video_info?html5=1&video_id=t9emR6Fex4Y&cpn=IiOOpOiMvkex7yVn&eurl=https%3A%2F%2Finy.su%2Flandings%2Fyesfedor&el=embedded&hl=ru_RU&sts=18298&lact=648&c=WEB_EMBEDDED_PLAYER&cver=20200207&cplayer=UNIPLAYER&cbr=Firefox&cbrver=46.0&cos=Windows&cosver=10.0&iv_load_policy=3&width=1000&height=970&splay=1&authuser=0&ei=oys_XsTxFsuuyAXJkrTICg&iframe=1&embed_config=%7B%7D&co_rel=1&ancestor_origins=https%3A%2F%2Finy.su","startTime":4609.050000086427,"endTime":4944.327000062913,"transferSize":17672,"resourceSize":62417,"statusCode":200,"mimeType":"application/x-www-form-urlencoded","resourceType":"XHR"},{"url":"https://www.youtube.com/api/stats/qoe?event=streamingstats&fmt=136&afmt=251&cpn=IiOOpOiMvkex7yVn&ei=pCs_XsrcIcHr7QTehqDgBQ&el=embedded&docid=t9emR6Fex4Y&ns=yt&fexp=23744176%2C23804281%2C23827263%2C23836248%2C23837040%2C23837993%2C23839597%2C23842630%2C23843507%2C23847144%2C23853804%2C23855886%2C23857949%2C23859802%2C23859863%2C23860862%2C23864470%2C23866005%2C23866089%2C23866808%2C23867883%2C23868140%2C23869291%2C23870766%2C23872498%2C23873884%2C23873884%2C23874359%2C23876506%2C23876871%2C9407157%2C9449243%2C9471654&cl=293658884&seq=1&c=WEB_EMBEDDED_PLAYER&cver=20200207&cplayer=UNIPLAYER&cbr=Firefox&cbrver=46.0&cos=Windows&cosver=10.0&vps=0.000:N,0.365:N&afs=0.365:251::i&vfs=0.365:136:136::s&view=0.365:1000:970&bwe=0.365:4986397&bat=0.365:1:1&vis=0.365:0&cmt=0.365:0.000&bh=0.365:0.000","startTime":4967.838000040501,"endTime":5005.945000099018,"transferSize":158,"resourceSize":0,"statusCode":204,"mimeType":"text/html","resourceType":"Other"},{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=136&aitags=133%2C134%2C135%2C136%2C160%2C242%2C243%2C244%2C247%2C278&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=video%2Fmp4&gir=yes&clen=2298263&otfp=1&dur=14.480&lmt=1566503596398451&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2211222&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRQIhAIddNC6sOW_aamwB0tuNOwHaDONEHdWGTTfoxUpEijsjAiAQ6-IG3g3WMyTM_cNV3Zt7TqPbj49w-W26vJGOvBqhmQ%3D%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=0-807&rn=1&rbuf=0","startTime":4974.8400000389665,"endTime":4995.353000005707,"transferSize":1846,"resourceSize":808,"statusCode":200,"mimeType":"video/mp4","resourceType":"XHR"},{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=251&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=audio%2Fwebm&gir=yes&clen=6854&otfp=1&dur=14.521&lmt=1566503755632334&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2201222&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRgIhAMUnylFfePbVdnSlpGftRZz0OzIQgyWYDFSdnVRVNb5jAiEAss884T-GrqBAhAhImXmMofBnMo_s2jInhh_pBlwzhoY%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=0-291&rn=2&rbuf=0","startTime":4979.055000003427,"endTime":4998.4979999717325,"transferSize":1300,"resourceSize":292,"statusCode":200,"mimeType":"audio/webm","resourceType":"XHR"},{"url":"https://www.youtube.com/yts/jsbin/player_ias-vflZgL1a2/ru_RU/endscreen.js","startTime":4991.6069998871535,"endTime":5039.50299997814,"transferSize":5064,"resourceSize":14230,"statusCode":200,"mimeType":"text/javascript","resourceType":"Script"},{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=136&aitags=133%2C134%2C135%2C136%2C160%2C242%2C243%2C244%2C247%2C278&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=video%2Fmp4&gir=yes&clen=2298263&otfp=1&dur=14.480&lmt=1566503596398451&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2211222&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRQIhAIddNC6sOW_aamwB0tuNOwHaDONEHdWGTTfoxUpEijsjAiAQ6-IG3g3WMyTM_cNV3Zt7TqPbj49w-W26vJGOvBqhmQ%3D%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=808-810918&rn=3&rbuf=0","startTime":5027.5900000706315,"endTime":5146.411000052467,"transferSize":810800,"resourceSize":810111,"statusCode":200,"mimeType":"video/mp4","resourceType":"XHR"},{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=251&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=audio%2Fwebm&gir=yes&clen=6854&otfp=1&dur=14.521&lmt=1566503755632334&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2201222&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRgIhAMUnylFfePbVdnSlpGftRZz0OzIQgyWYDFSdnVRVNb5jAiEAss884T-GrqBAhAhImXmMofBnMo_s2jInhh_pBlwzhoY%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=292-4800&rn=4&rbuf=0","startTime":5153.080000076443,"endTime":5161.009999923408,"transferSize":4633,"resourceSize":4509,"statusCode":200,"mimeType":"audio/webm","resourceType":"XHR"},{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=136&aitags=133%2C134%2C135%2C136%2C160%2C242%2C243%2C244%2C247%2C278&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=video%2Fmp4&gir=yes&clen=2298263&otfp=1&dur=14.480&lmt=1566503596398451&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2211222&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRQIhAIddNC6sOW_aamwB0tuNOwHaDONEHdWGTTfoxUpEijsjAiAQ6-IG3g3WMyTM_cNV3Zt7TqPbj49w-W26vJGOvBqhmQ%3D%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=810919-1627739&rn=5&rbuf=5120","startTime":5167.020000051707,"endTime":5330.936999991536,"transferSize":816853,"resourceSize":816821,"statusCode":200,"mimeType":"video/mp4","resourceType":"XHR"},{"url":"https://www.youtube.com/api/stats/playback?ns=yt&el=embedded&cpn=IiOOpOiMvkex7yVn&docid=t9emR6Fex4Y&ver=2&referrer=https%3A%2F%2Fwww.youtube.com%2Fembed%2Ft9emR6Fex4Y%3Fautohide%3D1%26rel%3D0%26autoplay%3D0%26playsinline%3D1%26iv_load_policy%3D3%26modestbranding%3D1%26controls%3D0%26showinfo%3D0%26disablekb%3D1%26enablejsapi%3D1%26origin%3Dhttps%253A%252F%252Finy.su%26widgetid%3D1&cmt=0.036&ei=pCs_XsrcIcHr7QTehqDgBQ&fmt=136&fs=0&rt=0.69&of=9rxKHumC91IZqjFOK3Eq3w&euri=https%3A%2F%2Finy.su%2Flandings%2Fyesfedor&lact=1335&cl=293658884&mos=1&vm=CAEQABgEKixaZkdEdkxJSVZabTF6WWhhYmN0TWNUVzg3M3pDUXd6V29JRzRzNEQ2VHBjPQ&volume=100&c=WEB_EMBEDDED_PLAYER&cver=20200207&cplayer=UNIPLAYER&cbr=Firefox&cbrver=46.0&cos=Windows&cosver=10.0&splay=1&hl=ru_RU&cr=RU&uga=m24&len=14.521&fexp=23744176%2C23804281%2C23827263%2C23836248%2C23837040%2C23837993%2C23839597%2C23842630%2C23843507%2C23847144%2C23853804%2C23855886%2C23857949%2C23859802%2C23859863%2C23860862%2C23864470%2C23866005%2C23866089%2C23866808%2C23867883%2C23868140%2C23869291%2C23870766%2C23872498%2C23873884%2C23873884%2C23874359%2C23876506%2C23876871%2C9407157%2C9449243%2C9471654&rtn=3&afmt=251&size=970%3A1000&inview=1","startTime":5293.394000036642,"endTime":5357.983000110835,"transferSize":44,"resourceSize":0,"statusCode":204,"mimeType":"text/html","resourceType":"Image"},{"url":"https://www.youtube.com/ptracking?html5=1&video_id=t9emR6Fex4Y&cpn=IiOOpOiMvkex7yVn&ei=pCs_XsrcIcHr7QTehqDgBQ&ptk=youtube_none&pltype=contentugc","startTime":5293.374000117183,"endTime":5293.776999926195,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"Image"},{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=251&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=audio%2Fwebm&gir=yes&clen=6854&otfp=1&dur=14.521&lmt=1566503755632334&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2201222&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRgIhAMUnylFfePbVdnSlpGftRZz0OzIQgyWYDFSdnVRVNb5jAiEAss884T-GrqBAhAhImXmMofBnMo_s2jInhh_pBlwzhoY%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=4801-6854&rn=6&rbuf=10001","startTime":5345.573999918997,"endTime":5363.143000053242,"transferSize":2082,"resourceSize":2053,"statusCode":200,"mimeType":"audio/webm","resourceType":"XHR"},{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=136&aitags=133%2C134%2C135%2C136%2C160%2C242%2C243%2C244%2C247%2C278&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=video%2Fmp4&gir=yes&clen=2298263&otfp=1&dur=14.480&lmt=1566503596398451&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2211222&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRQIhAIddNC6sOW_aamwB0tuNOwHaDONEHdWGTTfoxUpEijsjAiAQ6-IG3g3WMyTM_cNV3Zt7TqPbj49w-W26vJGOvBqhmQ%3D%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=1627740-2298262&rn=7&rbuf=10124","startTime":5368.674000026658,"endTime":5458.195999963209,"transferSize":670555,"resourceSize":670523,"statusCode":200,"mimeType":"video/mp4","resourceType":"XHR"},{"url":"https://iny.su/api.php?_action=checker&v=0.1","startTime":5528.859999962151,"endTime":6021.523999981582,"transferSize":400,"resourceSize":204,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://www.youtube.com/api/stats/watchtime?ns=yt&el=embedded&cpn=IiOOpOiMvkex7yVn&docid=t9emR6Fex4Y&ver=2&referrer=https%3A%2F%2Fwww.youtube.com%2Fembed%2Ft9emR6Fex4Y%3Fautohide%3D1%26rel%3D0%26autoplay%3D0%26playsinline%3D1%26iv_load_policy%3D3%26modestbranding%3D1%26controls%3D0%26showinfo%3D0%26disablekb%3D1%26enablejsapi%3D1%26origin%3Dhttps%253A%252F%252Finy.su%26widgetid%3D1&cmt=2.354&ei=pCs_XsrcIcHr7QTehqDgBQ&fmt=136&fs=0&rt=3.002&of=9rxKHumC91IZqjFOK3Eq3w&euri=https%3A%2F%2Finy.su%2Flandings%2Fyesfedor&lact=2070&cl=293658884&state=playing&vm=CAEQABgEKixaZkdEdkxJSVZabTF6WWhhYmN0TWNUVzg3M3pDUXd6V29JRzRzNEQ2VHBjPQ&volume=100&c=WEB_EMBEDDED_PLAYER&cver=20200207&cplayer=UNIPLAYER&cbr=Firefox&cbrver=46.0&cos=Windows&cosver=10.0&splay=1&hl=ru_RU&cr=RU&uga=m24&len=14.521&rtn=13&afmt=251&idpj=-8&ldpj=-22&rti=3&muted=0&st=0&et=2.354","startTime":7600.633000023663,"endTime":7641.679000109434,"transferSize":44,"resourceSize":0,"statusCode":204,"mimeType":"text/html","resourceType":"Image"},{"url":"https://iny.su/api.php?_action=checker&v=0.1","startTime":8026.0060001164675,"endTime":8592.36799995415,"transferSize":400,"resourceSize":204,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"}]}},"network-rtt":{"id":"network-rtt","title":"Network Round Trip Times","description":"Network round trip times (RTT) have a large impact on performance. If the RTT to an origin is high, it's an indication that servers closer to the user could improve performance. [Learn more](https://hpbn.co/primer-on-latency-and-bandwidth/).","score":null,"scoreDisplayMode":"informative","numericValue":3.0720000000000005,"displayValue":"0 ms","details":{"type":"table","headings":[{"key":"origin","itemType":"text","text":"URL"},{"key":"rtt","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"origin":"https://iny.su","rtt":3.0720000000000005},{"origin":"https://unpkg.com","rtt":3.0720000000000005},{"origin":"https://www.youtube.com","rtt":3.0720000000000005},{"origin":"https://img.youtube.com","rtt":3.0720000000000005},{"origin":"https://s.ytimg.com","rtt":3.0720000000000005},{"origin":"https://www.google.com","rtt":3.0720000000000005},{"origin":"https://yt3.ggpht.com","rtt":3.0720000000000005},{"origin":"https://i.ytimg.com","rtt":3.0720000000000005},{"origin":"https://fonts.gstatic.com","rtt":3.0720000000000005},{"origin":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com","rtt":3.0720000000000005}]}},"network-server-latency":{"id":"network-server-latency","title":"Server Backend Latencies","description":"Server latencies can impact web performance. If the server latency of an origin is high, it's an indication the server is overloaded or has poor backend performance. [Learn more](https://hpbn.co/primer-on-web-performance/#analyzing-the-resource-waterfall).","score":null,"scoreDisplayMode":"informative","numericValue":88.54199999999999,"displayValue":"90 ms","details":{"type":"table","headings":[{"key":"origin","itemType":"text","text":"URL"},{"key":"serverResponseTime","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"origin":"https://unpkg.com","serverResponseTime":88.54199999999999},{"origin":"https://iny.su","serverResponseTime":56.794999999999995},{"origin":"https://www.youtube.com","serverResponseTime":44.321},{"origin":"https://i.ytimg.com","serverResponseTime":34.106},{"origin":"https://www.google.com","serverResponseTime":31.388},{"origin":"https://yt3.ggpht.com","serverResponseTime":29.943},{"origin":"https://s.ytimg.com","serverResponseTime":29.669},{"origin":"https://img.youtube.com","serverResponseTime":29.504},{"origin":"https://fonts.gstatic.com","serverResponseTime":27.6},{"origin":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com","serverResponseTime":2.0979999999999994}]}},"main-thread-tasks":{"id":"main-thread-tasks","title":"Tasks","description":"Lists the toplevel main thread tasks that executed during page load.","score":null,"scoreDisplayMode":"informative","numericValue":37,"details":{"type":"table","headings":[{"key":"startTime","itemType":"ms","granularity":1,"text":"Start Time"},{"key":"duration","itemType":"ms","granularity":1,"text":"End Time"}],"items":[{"duration":18.154,"startTime":92.413},{"duration":13.53,"startTime":173.115},{"duration":10.06,"startTime":265.963},{"duration":5.23,"startTime":277.956},{"duration":2852.186,"startTime":344.493},{"duration":97.862,"startTime":3204.485},{"duration":5.297,"startTime":3308.446},{"duration":11.11,"startTime":3313.754},{"duration":7.207,"startTime":3326.668},{"duration":6.1,"startTime":3337.388},{"duration":14.318,"startTime":3343.555},{"duration":10.289,"startTime":3373.73},{"duration":20.741,"startTime":3408.414},{"duration":7.11,"startTime":3429.468},{"duration":36.415,"startTime":3448.163},{"duration":6.994,"startTime":3494.507},{"duration":5.188,"startTime":3509.299},{"duration":38.907,"startTime":3612.332},{"duration":48.498,"startTime":3657.457},{"duration":133.513,"startTime":3713.899},{"duration":25.68,"startTime":3850.06},{"duration":21.567,"startTime":3930.048},{"duration":23.766,"startTime":3956.446},{"duration":18.718,"startTime":3990.469},{"duration":22.542,"startTime":4014.126},{"duration":24.609,"startTime":4039.844},{"duration":9.593,"startTime":4066.8},{"duration":107.978,"startTime":4076.454},{"duration":30.968,"startTime":4191.832},{"duration":23.38,"startTime":4228.581},{"duration":10.345,"startTime":4309.958},{"duration":124.146,"startTime":4456.346},{"duration":10.118,"startTime":5028.403},{"duration":13.981,"startTime":5199.589},{"duration":8.658,"startTime":5311.862},{"duration":5.048,"startTime":5531.998},{"duration":5.144,"startTime":6436.94}]}},"metrics":{"id":"metrics","title":"Metrics","description":"Collects all available metrics.","score":null,"scoreDisplayMode":"informative","numericValue":24056.295,"details":{"type":"debugdata","items":[{"firstContentfulPaint":8355,"firstMeaningfulPaint":8430,"firstCPUIdle":8430,"interactive":24056,"speedIndex":13700,"estimatedInputLatency":2094,"totalBlockingTime":796,"observedNavigationStart":0,"observedNavigationStartTs":1946251521910,"observedFirstPaint":3387,"observedFirstPaintTs":1946254909226,"observedFirstContentfulPaint":3387,"observedFirstContentfulPaintTs":1946254909226,"observedFirstMeaningfulPaint":3387,"observedFirstMeaningfulPaintTs":1946254909226,"observedLargestContentfulPaint":4104,"observedLargestContentfulPaintTs":1946255625855,"observedTraceEnd":6436,"observedTraceEndTs":1946257957678,"observedLoad":270,"observedLoadTs":1946251792014,"observedDomContentLoaded":179,"observedDomContentLoadedTs":1946251700839,"observedFirstVisualChange":3853,"observedFirstVisualChangeTs":1946255374910,"observedLastVisualChange":6420,"observedLastVisualChangeTs":1946257941910,"observedSpeedIndex":4507,"observedSpeedIndexTs":1946256028728},{"lcpInvalidated":false}]}},"offline-start-url":{"id":"offline-start-url","title":"`start_url` does not respond with a 200 when offline","description":"A service worker enables your web app to be reliable in unpredictable network conditions. [Learn more](https://web.dev/offline-start-url).","score":0,"scoreDisplayMode":"binary","explanation":"Timed out waiting for start_url to respond.","warnings":[]},"performance-budget":{"id":"performance-budget","title":"Performance budget","description":"Keep the quantity and size of network requests under the targets set by the provided performance budget. [Learn more](https://developers.google.com/web/tools/lighthouse/audits/budgets).","score":null,"scoreDisplayMode":"notApplicable"},"resource-summary":{"id":"resource-summary","title":"Keep request counts low and transfer sizes small","description":"To set budgets for the quantity and size of page resources, add a budget.json file. [Learn more](https://developers.google.com/web/tools/lighthouse/audits/budgets).","score":null,"scoreDisplayMode":"informative","displayValue":"80 requests • 8,414 KB","details":{"type":"table","headings":[{"key":"label","itemType":"text","text":"Resource Type"},{"key":"requestCount","itemType":"numeric","text":"Requests"},{"key":"size","itemType":"bytes","text":"Transfer Size"}],"items":[{"resourceType":"total","label":"Total","requestCount":80,"size":8616189},{"resourceType":"image","label":"Image","requestCount":10,"size":4681471},{"resourceType":"other","label":"Other","requestCount":38,"size":2923201},{"resourceType":"script","label":"Script","requestCount":12,"size":530601},{"resourceType":"font","label":"Font","requestCount":8,"size":322760},{"resourceType":"stylesheet","label":"Stylesheet","requestCount":9,"size":138777},{"resourceType":"document","label":"Document","requestCount":3,"size":19379},{"resourceType":"media","label":"Media","requestCount":0,"size":0},{"resourceType":"third-party","label":"Third-party","requestCount":40,"size":2938804}]}},"third-party-summary":{"id":"third-party-summary","title":"Minimize third-party usage","description":"Third-party code can significantly impact load performance. Limit the number of redundant third-party providers and try to load third-party code after your page has primarily finished loading. [Learn more](https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/loading-third-party-javascript/).","score":1,"scoreDisplayMode":"binary","displayValue":"Third-party code blocked the main thread for 80 ms","details":{"type":"table","headings":[{"key":"entity","itemType":"link","text":"Third-Party"},{"key":"transferSize","granularity":1,"itemType":"bytes","text":"Size"},{"key":"blockingTime","granularity":1,"itemType":"ms","text":"Main-Thread Blocking Time"}],"items":[{"entity":{"type":"link","text":"YouTube","url":"https://youtube.com"},"transferSize":567750,"mainThreadTime":219.60800000000032,"blockingTime":81.356},{"entity":{"type":"link","text":"Unpkg","url":"https://unpkg.com"},"transferSize":6326,"mainThreadTime":10.491999999999999,"blockingTime":0},{"entity":{"type":"link","text":"Other Google APIs/SDKs","url":"https://developers.google.com/apis-explorer/#p/"},"transferSize":5547,"mainThreadTime":0,"blockingTime":0},{"entity":{"type":"link","text":"Google/Doubleclick Ads","url":"https://www.doubleclickbygoogle.com/"},"transferSize":0,"mainThreadTime":0,"blockingTime":0}],"summary":{"wastedBytes":579623,"wastedMs":81.356}}},"pwa-cross-browser":{"id":"pwa-cross-browser","title":"Site works cross-browser","description":"To reach the most number of users, sites should work across every major browser. [Learn more](https://web.dev/pwa-cross-browser).","score":null,"scoreDisplayMode":"manual"},"pwa-page-transitions":{"id":"pwa-page-transitions","title":"Page transitions don't feel like they block on the network","description":"Transitions should feel snappy as you tap around, even on a slow network. This experience is key to a user's perception of performance. [Learn more](https://web.dev/pwa-page-transitions).","score":null,"scoreDisplayMode":"manual"},"pwa-each-page-has-url":{"id":"pwa-each-page-has-url","title":"Each page has a URL","description":"Ensure individual pages are deep linkable via URL and that URLs are unique for the purpose of shareability on social media. [Learn more](https://web.dev/pwa-each-page-has-url).","score":null,"scoreDisplayMode":"manual"},"accesskeys":{"id":"accesskeys","title":"`[accesskey]` values are unique","description":"Access keys let users quickly focus a part of the page. For proper navigation, each access key must be unique. [Learn more](https://web.dev/accesskeys/).","score":null,"scoreDisplayMode":"notApplicable"},"aria-allowed-attr":{"id":"aria-allowed-attr","title":"`[aria-*]` attributes match their roles","description":"Each ARIA `role` supports a specific subset of `aria-*` attributes. Mismatching these invalidates the `aria-*` attributes. [Learn more](https://web.dev/aria-allowed-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-attr":{"id":"aria-required-attr","title":"`[role]`s have all required `[aria-*]` attributes","description":"Some ARIA roles have required attributes that describe the state of the element to screen readers. [Learn more](https://web.dev/aria-required-attr/).","score":null,"scoreDisplayMode":"notApplicable"},"aria-required-children":{"id":"aria-required-children","title":"Elements with an ARIA `[role]` that require children to contain a specific `[role]` have all required children.","description":"Some ARIA parent roles must contain specific child roles to perform their intended accessibility functions. [Learn more](https://web.dev/aria-required-children/).","score":null,"scoreDisplayMode":"notApplicable"},"aria-required-parent":{"id":"aria-required-parent","title":"`[role]`s are contained by their required parent element","description":"Some ARIA child roles must be contained by specific parent roles to properly perform their intended accessibility functions. [Learn more](https://web.dev/aria-required-parent/).","score":null,"scoreDisplayMode":"notApplicable"},"aria-roles":{"id":"aria-roles","title":"`[role]` values are valid","description":"ARIA roles must have valid values in order to perform their intended accessibility functions. [Learn more](https://web.dev/aria-roles/).","score":null,"scoreDisplayMode":"notApplicable"},"aria-valid-attr-value":{"id":"aria-valid-attr-value","title":"`[aria-*]` attributes have valid values","description":"Assistive technologies, like screen readers, can't interpret ARIA attributes with invalid values. [Learn more](https://web.dev/aria-valid-attr-value/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-valid-attr":{"id":"aria-valid-attr","title":"`[aria-*]` attributes are valid and not misspelled","description":"Assistive technologies, like screen readers, can't interpret ARIA attributes with invalid names. [Learn more](https://web.dev/aria-valid-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"audio-caption":{"id":"audio-caption","title":"`\u003caudio>` elements contain a `\u003ctrack>` element with `[kind=\"captions\"]`","description":"Captions make audio elements usable for deaf or hearing-impaired users, providing critical information such as who is talking, what they're saying, and other non-speech information. [Learn more](https://web.dev/audio-caption/).","score":null,"scoreDisplayMode":"notApplicable"},"button-name":{"id":"button-name","title":"Buttons have an accessible name","description":"When a button doesn't have an accessible name, screen readers announce it as \"button\", making it unusable for users who rely on screen readers. [Learn more](https://web.dev/button-name/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"bypass":{"id":"bypass","title":"The page contains a heading, skip link, or landmark region","description":"Adding ways to bypass repetitive content lets keyboard users navigate the page more efficiently. [Learn more](https://web.dev/bypass/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"color-contrast":{"id":"color-contrast","title":"Background and foreground colors do not have a sufficient contrast ratio.","description":"Low-contrast text is difficult or impossible for many users to read. [Learn more](https://web.dev/color-contrast/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":".white-text-border:nth-child(1)","path":"1,HTML,1,BODY,0,APPLICATION,5,DIV,0,DIV,0,DIV,0,H2,1,SPAN","snippet":"\u003cspan class=\"white-text-border\">созданием\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 1.04 (foreground color: #fafafa, background color: #ffffff, font size: 42.0pt, font weight: bold). Expected contrast ratio of 3:1","nodeLabel":"созданием"}},{"node":{"type":"node","selector":".white-text-border:nth-child(4)","path":"1,HTML,1,BODY,0,APPLICATION,5,DIV,0,DIV,0,DIV,0,H2,5,SPAN","snippet":"\u003cspan class=\"white-text-border\">брендингом\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 1.04 (foreground color: #fafafa, background color: #ffffff, font size: 42.0pt, font weight: bold). Expected contrast ratio of 3:1","nodeLabel":"брендингом"}},{"node":{"type":"node","selector":".white-text-border:nth-child(7)","path":"1,HTML,1,BODY,0,APPLICATION,5,DIV,0,DIV,0,DIV,0,H2,11,SPAN","snippet":"\u003cspan class=\"white-text-border\">digital\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 1.04 (foreground color: #fafafa, background color: #ffffff, font size: 42.0pt, font weight: bold). Expected contrast ratio of 3:1","nodeLabel":"digital"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.color","wcag2aa","wcag143"]}}},"definition-list":{"id":"definition-list","title":"`\u003cdl>`'s contain only properly-ordered `\u003cdt>` and `\u003cdd>` groups, `\u003cscript>` or `\u003ctemplate>` elements.","description":"When definition lists are not properly marked up, screen readers may produce confusing or inaccurate output. [Learn more](https://web.dev/definition-list/).","score":null,"scoreDisplayMode":"notApplicable"},"dlitem":{"id":"dlitem","title":"Definition list items are wrapped in `\u003cdl>` elements","description":"Definition list items (`\u003cdt>` and `\u003cdd>`) must be wrapped in a parent `\u003cdl>` element to ensure that screen readers can properly announce them. [Learn more](https://web.dev/dlitem/).","score":null,"scoreDisplayMode":"notApplicable"},"document-title":{"id":"document-title","title":"Document has a `\u003ctitle>` element","description":"The title gives screen reader users an overview of the page, and search engine users rely on it heavily to determine if a page is relevant to their search. [Learn more](https://web.dev/document-title/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"duplicate-id":{"id":"duplicate-id","title":"`[id]` attributes on the page are unique","description":"The value of an id attribute must be unique to prevent other instances from being overlooked by assistive technologies. [Learn more](https://web.dev/duplicate-id/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"frame-title":{"id":"frame-title","title":"`\u003cframe>` or `\u003ciframe>` elements have a title","description":"Screen reader users rely on frame titles to describe the contents of frames. [Learn more](https://web.dev/frame-title/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"html-has-lang":{"id":"html-has-lang","title":"`\u003chtml>` element has a `[lang]` attribute","description":"If a page doesn't specify a lang attribute, a screen reader assumes that the page is in the default language that the user chose when setting up the screen reader. If the page isn't actually in the default language, then the screen reader might not announce the page's text correctly. [Learn more](https://web.dev/html-has-lang/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"html-lang-valid":{"id":"html-lang-valid","title":"`\u003chtml>` element has a valid value for its `[lang]` attribute","description":"Specifying a valid [BCP 47 language](https://www.w3.org/International/questions/qa-choosing-language-tags#question) helps screen readers announce text properly. [Learn more](https://web.dev/html-lang-valid/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"image-alt":{"id":"image-alt","title":"Image elements have `[alt]` attributes","description":"Informative elements should aim for short, descriptive alternate text. Decorative elements can be ignored with an empty alt attribute. [Learn more](https://web.dev/image-alt/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"input-image-alt":{"id":"input-image-alt","title":"`\u003cinput type=\"image\">` elements have `[alt]` text","description":"When an image is being used as an `\u003cinput>` button, providing alternative text can help screen reader users understand the purpose of the button. [Learn more](https://web.dev/input-image-alt/).","score":null,"scoreDisplayMode":"notApplicable"},"label":{"id":"label","title":"Form elements have associated labels","description":"Labels ensure that form controls are announced properly by assistive technologies, like screen readers. [Learn more](https://web.dev/label/).","score":null,"scoreDisplayMode":"notApplicable"},"layout-table":{"id":"layout-table","title":"Presentational `\u003ctable>` elements avoid using `\u003cth>`, `\u003ccaption>` or the `[summary]` attribute.","description":"A table being used for layout purposes should not include data elements, such as the th or caption elements or the summary attribute, because this can create a confusing experience for screen reader users. [Learn more](https://web.dev/layout-table/).","score":null,"scoreDisplayMode":"notApplicable"},"link-name":{"id":"link-name","title":"Links do not have a discernible name","description":"Link text (and alternate text for images, when used as links) that is discernible, unique, and focusable improves the navigation experience for screen reader users. [Learn more](https://web.dev/link-name/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"a[onclick=\"return\\ nav\\.scroll\\(this\\)\\;\"]","path":"1,HTML,1,BODY,0,APPLICATION,3,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,0,A","snippet":"\u003ca onclick=\"return nav.scroll(this);\" href=\"#scroll\">","explanation":"Fix all of the following:\n  Element is in tab order and does not have accessible text\n\nFix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"a"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.name-role-value","wcag2a","wcag412","wcag244","section508","section508.22.a"]}}},"list":{"id":"list","title":"Lists contain only `\u003cli>` elements and script supporting elements (`\u003cscript>` and `\u003ctemplate>`).","description":"Screen readers have a specific way of announcing lists. Ensuring proper list structure aids screen reader output. [Learn more](https://web.dev/list/).","score":null,"scoreDisplayMode":"notApplicable"},"listitem":{"id":"listitem","title":"List items (`\u003cli>`) are contained within `\u003cul>` or `\u003col>` parent elements","description":"Screen readers require list items (`\u003cli>`) to be contained within a parent `\u003cul>` or `\u003col>` to be announced properly. [Learn more](https://web.dev/listitem/).","score":null,"scoreDisplayMode":"notApplicable"},"meta-refresh":{"id":"meta-refresh","title":"The document does not use `\u003cmeta http-equiv=\"refresh\">`","description":"Users do not expect a page to refresh automatically, and doing so will move focus back to the top of the page. This may create a frustrating or confusing experience. [Learn more](https://web.dev/meta-refresh/).","score":null,"scoreDisplayMode":"notApplicable"},"meta-viewport":{"id":"meta-viewport","title":"`[user-scalable=\"no\"]` is not used in the `\u003cmeta name=\"viewport\">` element and the `[maximum-scale]` attribute is not less than 5.","description":"Disabling zooming is problematic for users with low vision who rely on screen magnification to properly see the contents of a web page. [Learn more](https://web.dev/meta-viewport/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"object-alt":{"id":"object-alt","title":"`\u003cobject>` elements have `[alt]` text","description":"Screen readers cannot translate non-text content. Adding alt text to `\u003cobject>` elements helps screen readers convey meaning to users. [Learn more](https://web.dev/object-alt/).","score":null,"scoreDisplayMode":"notApplicable"},"tabindex":{"id":"tabindex","title":"No element has a `[tabindex]` value greater than 0","description":"A value greater than 0 implies an explicit navigation ordering. Although technically valid, this often creates frustrating experiences for users who rely on assistive technologies. [Learn more](https://web.dev/tabindex/).","score":null,"scoreDisplayMode":"notApplicable"},"td-headers-attr":{"id":"td-headers-attr","title":"Cells in a `\u003ctable>` element that use the `[headers]` attribute refer to table cells within the same table.","description":"Screen readers have features to make navigating tables easier. Ensuring `\u003ctd>` cells using the `[headers]` attribute only refer to other cells in the same table may improve the experience for screen reader users. [Learn more](https://web.dev/td-headers-attr/).","score":null,"scoreDisplayMode":"notApplicable"},"th-has-data-cells":{"id":"th-has-data-cells","title":"`\u003cth>` elements and elements with `[role=\"columnheader\"/\"rowheader\"]` have data cells they describe.","description":"Screen readers have features to make navigating tables easier. Ensuring table headers always refer to some set of cells may improve the experience for screen reader users. [Learn more](https://web.dev/th-has-data-cells/).","score":null,"scoreDisplayMode":"notApplicable"},"valid-lang":{"id":"valid-lang","title":"`[lang]` attributes have a valid value","description":"Specifying a valid [BCP 47 language](https://www.w3.org/International/questions/qa-choosing-language-tags#question) on elements helps ensure that text is pronounced correctly by a screen reader. [Learn more](https://web.dev/valid-lang/).","score":null,"scoreDisplayMode":"notApplicable"},"video-caption":{"id":"video-caption","title":"`\u003cvideo>` elements contain a `\u003ctrack>` element with `[kind=\"captions\"]`","description":"When a video provides a caption it is easier for deaf and hearing impaired users to access its information. [Learn more](https://web.dev/video-caption/).","score":null,"scoreDisplayMode":"notApplicable"},"video-description":{"id":"video-description","title":"`\u003cvideo>` elements contain a `\u003ctrack>` element with `[kind=\"description\"]`","description":"Audio descriptions provide relevant information for videos that dialogue cannot, such as facial expressions and scenes. [Learn more](https://web.dev/video-description/).","score":null,"scoreDisplayMode":"notApplicable"},"custom-controls-labels":{"id":"custom-controls-labels","title":"Custom controls have associated labels","description":"Custom interactive controls have associated labels, provided by aria-label or aria-labelledby. [Learn more](https://web.dev/custom-controls-labels/).","score":null,"scoreDisplayMode":"manual"},"custom-controls-roles":{"id":"custom-controls-roles","title":"Custom controls have ARIA roles","description":"Custom interactive controls have appropriate ARIA roles. [Learn more](https://web.dev/custom-control-roles/).","score":null,"scoreDisplayMode":"manual"},"focus-traps":{"id":"focus-traps","title":"User focus is not accidentally trapped in a region","description":"A user can tab into and out of any control or region without accidentally trapping their focus. [Learn more](https://web.dev/focus-traps/).","score":null,"scoreDisplayMode":"manual"},"focusable-controls":{"id":"focusable-controls","title":"Interactive controls are keyboard focusable","description":"Custom interactive controls are keyboard focusable and display a focus indicator. [Learn more](https://web.dev/focusable-controls/).","score":null,"scoreDisplayMode":"manual"},"heading-levels":{"id":"heading-levels","title":"Headings don't skip levels","description":"Headings are used to create an outline for the page and heading levels are not skipped. [Learn more](https://web.dev/heading-levels/).","score":null,"scoreDisplayMode":"manual"},"interactive-element-affordance":{"id":"interactive-element-affordance","title":"Interactive elements indicate their purpose and state","description":"Interactive elements, such as links and buttons, should indicate their state and be distinguishable from non-interactive elements. [Learn more](https://web.dev/interactive-element-affordance/).","score":null,"scoreDisplayMode":"manual"},"logical-tab-order":{"id":"logical-tab-order","title":"The page has a logical tab order","description":"Tabbing through the page follows the visual layout. Users cannot focus elements that are offscreen. [Learn more](https://web.dev/logical-tab-order/).","score":null,"scoreDisplayMode":"manual"},"managed-focus":{"id":"managed-focus","title":"The user's focus is directed to new content added to the page","description":"If new content, such as a dialog, is added to the page, the user's focus is directed to it. [Learn more](https://web.dev/managed-focus/).","score":null,"scoreDisplayMode":"manual"},"offscreen-content-hidden":{"id":"offscreen-content-hidden","title":"Offscreen content is hidden from assistive technology","description":"Offscreen content is hidden with display: none or aria-hidden=true. [Learn more](https://web.dev/offscreen-content-hidden/).","score":null,"scoreDisplayMode":"manual"},"use-landmarks":{"id":"use-landmarks","title":"HTML5 landmark elements are used to improve navigation","description":"Landmark elements (\u003cmain>, \u003cnav>, etc.) are used to improve the keyboard navigation of the page for assistive technology. [Learn more](https://web.dev/use-landmarks/).","score":null,"scoreDisplayMode":"manual"},"visual-order-follows-dom":{"id":"visual-order-follows-dom","title":"Visual order on the page follows DOM order","description":"DOM order matches the visual order, improving navigation for assistive technology. [Learn more](https://web.dev/visual-order-follows-dom/).","score":null,"scoreDisplayMode":"manual"},"uses-long-cache-ttl":{"id":"uses-long-cache-ttl","title":"Serve static assets with an efficient cache policy","description":"A long cache lifetime can speed up repeat visits to your page. [Learn more](https://web.dev/uses-long-cache-ttl).","score":0.12,"scoreDisplayMode":"numeric","numericValue":526310.7187150837,"displayValue":"23 resources found","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"cacheLifetimeMs","itemType":"ms","text":"Cache TTL","displayUnit":"duration"},{"key":"totalBytes","itemType":"bytes","text":"Size","displayUnit":"kb","granularity":1}],"items":[{"url":"https://i.ytimg.com/vi/t9emR6Fex4Y/hqdefault.jpg","debugData":{"type":"debugdata","public":true,"max-age":7200},"cacheLifetimeMs":7200000,"cacheHitProbability":0.25,"totalBytes":4851,"wastedBytes":3638.25},{"url":"https://img.youtube.com/vi/t9emR6Fex4Y/maxresdefault.jpg","debugData":{"type":"debugdata","public":true,"max-age":7200},"cacheLifetimeMs":7200000,"cacheHitProbability":0.25,"totalBytes":53,"wastedBytes":39.75},{"url":"https://yt3.ggpht.com/-g6E715g-x9I/AAAAAAAAAAI/AAAAAAAAAAA/UfcRMZmcd0M/s68-c-k-no-mo-rj-c0xffffff/photo.jpg","debugData":{"type":"debugdata","public":true,"max-age":86400,"no-transform":true},"cacheLifetimeMs":86400000,"cacheHitProbability":0.6,"totalBytes":1645,"wastedBytes":658},{"url":"https://www.youtube.com/yts/jsbin/player_ias-vflZgL1a2/ru_RU/base.js","debugData":{"type":"debugdata","public":true,"max-age":691200},"cacheLifetimeMs":691200000,"cacheHitProbability":0.9002793296089385,"totalBytes":413618,"wastedBytes":41246.26424581007},{"url":"https://www.youtube.com/yts/jsbin/www-embed-player-vflo2ve9T/www-embed-player.js","debugData":{"type":"debugdata","public":true,"max-age":691200},"cacheLifetimeMs":691200000,"cacheHitProbability":0.9002793296089385,"totalBytes":40594,"wastedBytes":4048.0608938547493},{"url":"https://s.ytimg.com/yts/jsbin/www-widgetapi-vflMm4105/www-widgetapi.js","debugData":{"type":"debugdata","public":true,"max-age":691200},"cacheLifetimeMs":691200000,"cacheHitProbability":0.9002793296089385,"totalBytes":16359,"wastedBytes":1631.3304469273746},{"url":"https://www.youtube.com/yts/jsbin/player_ias-vflZgL1a2/ru_RU/embed.js","debugData":{"type":"debugdata","public":true,"max-age":691200},"cacheLifetimeMs":691200000,"cacheHitProbability":0.9002793296089385,"totalBytes":7196,"wastedBytes":717.5899441340783},{"url":"https://www.youtube.com/yts/jsbin/player_ias-vflZgL1a2/ru_RU/endscreen.js","debugData":{"type":"debugdata","public":true,"max-age":691200},"cacheLifetimeMs":691200000,"cacheHitProbability":0.9002793296089385,"totalBytes":5064,"wastedBytes":504.9854748603353},{"url":"https://iny.su/web/file/images/main/landings/yesfedor/writecode.jpg","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":4674834,"wastedBytes":436143.7307262569},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":100259,"wastedBytes":9353.772625698322},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Medium.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":70108,"wastedBytes":6540.802234636871},{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":67558,"wastedBytes":6302.897206703909},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Light.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":50858,"wastedBytes":4744.85251396648},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":50423,"wastedBytes":4704.268715083798},{"url":"https://iny.su/web/vendor/js/jquery.js","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":30866,"wastedBytes":2879.6770949720667},{"url":"https://iny.su/web/vendor/css/bootstrap.min.css?version=4","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":23361,"wastedBytes":2179.4899441340776},{"url":"https://iny.su/web/js/module/@offline.js","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":3266,"wastedBytes":304.70502793296083},{"url":"https://iny.su/web/js/core/init.js?version=273","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":2910,"wastedBytes":271.4916201117318},{"url":"https://iny.su/web/css/@offline.css","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":1357,"wastedBytes":126.60279329608936},{"url":"https://iny.su/web/css/theme/main-dark.css?version=32","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":893,"wastedBytes":83.31340782122903},{"url":"https://iny.su/web/css/themes.css?version=10","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":743,"wastedBytes":69.31899441340781},{"url":"https://iny.su/web/css/common.css?version=68","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":679,"wastedBytes":63.34804469273742},{"url":"https://iny.su/web/css/landings/yesfedor.css?v=67","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":624,"wastedBytes":58.21675977653631}],"summary":{"wastedBytes":526310.7187150837}}},"total-byte-weight":{"id":"total-byte-weight","title":"Avoid enormous network payloads","description":"Large network payloads cost users real money and are highly correlated with long load times. [Learn more](https://web.dev/total-byte-weight).","score":0.55,"scoreDisplayMode":"numeric","numericValue":3941355,"displayValue":"Total size was 3,849 KB","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"totalBytes","itemType":"bytes","text":"Size"}],"items":[{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=136&aitags=133%2C134%2C135%2C136%2C160%2C242%2C243%2C244%2C247%2C278&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=video%2Fmp4&gir=yes&clen=2298263&otfp=1&dur=14.480&lmt=1566503596398451&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2211222&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRQIhAIddNC6sOW_aamwB0tuNOwHaDONEHdWGTTfoxUpEijsjAiAQ6-IG3g3WMyTM_cNV3Zt7TqPbj49w-W26vJGOvBqhmQ%3D%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=810919-1627739&rn=5&rbuf=5120","totalBytes":816853},{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=136&aitags=133%2C134%2C135%2C136%2C160%2C242%2C243%2C244%2C247%2C278&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=video%2Fmp4&gir=yes&clen=2298263&otfp=1&dur=14.480&lmt=1566503596398451&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2211222&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRQIhAIddNC6sOW_aamwB0tuNOwHaDONEHdWGTTfoxUpEijsjAiAQ6-IG3g3WMyTM_cNV3Zt7TqPbj49w-W26vJGOvBqhmQ%3D%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=808-810918&rn=3&rbuf=0","totalBytes":810800},{"url":"https://r3---sn-8ph2xajvh-0ate.googlevideo.com/videoplayback?expire=1581219844&ei=pCs_XsT8Hoy8yQWSgIioAQ&ip=128.69.86.114&id=o-AG2lSJhZ9LnjILoeTCzwq3vY-diul7bHrnmDzOET2vHg&itag=136&aitags=133%2C134%2C135%2C136%2C160%2C242%2C243%2C244%2C247%2C278&source=youtube&requiressl=yes&mm=31%2C29&mn=sn-8ph2xajvh-0ate%2Csn-n8v7znze&ms=au%2Crdu&mv=m&mvi=2&pcm2cms=yes&pl=24&pcm2=yes&initcwndbps=1352500&vprv=1&mime=video%2Fmp4&gir=yes&clen=2298263&otfp=1&dur=14.480&lmt=1566503596398451&mt=1581198150&fvip=4&keepalive=yes&fexp=23842630%2C23860862&c=WEB_EMBEDDED_PLAYER&txp=2211222&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cpcm2%2Cvprv%2Cmime%2Cgir%2Cclen%2Cotfp%2Cdur%2Clmt&sig=ALgxI2wwRQIhAIddNC6sOW_aamwB0tuNOwHaDONEHdWGTTfoxUpEijsjAiAQ6-IG3g3WMyTM_cNV3Zt7TqPbj49w-W26vJGOvBqhmQ%3D%3D&lsparams=mm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpcm2cms%2Cpl%2Cinitcwndbps&lsig=AHylml4wRAIgZKBHO85HZ6TRQnZ8zHR_QP3ddTN7FvID-v3v5Ek6VxUCICjLf_qZo3DJRDIyYr_ZZQJSE-tXJLA8Jp26wsf8cIrj&alr=yes&cpn=IiOOpOiMvkex7yVn&cver=20200207&range=1627740-2298262&rn=7&rbuf=10124","totalBytes":670555},{"url":"https://www.youtube.com/yts/jsbin/player_ias-vflZgL1a2/ru_RU/base.js","totalBytes":413618},{"url":"https://iny.su/web/vendor/js/icon.js?version=4","totalBytes":413448},{"url":"https://iny.su/web/vendor/js/mdb.min.js?version=4","totalBytes":121065},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","totalBytes":100259},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Medium.woff2","totalBytes":70108},{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","totalBytes":67558},{"url":"https://iny.su/web/vendor/font/roboto/Roboto-Light.woff2","totalBytes":50858}]}},"offscreen-images":{"id":"offscreen-images","title":"Defer offscreen images","description":"Consider lazy-loading offscreen and hidden images after all critical resources have finished loading to lower time to interactive. [Learn more](https://web.dev/offscreen-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"render-blocking-resources":{"id":"render-blocking-resources","title":"Eliminate render-blocking resources","description":"Resources are blocking the first paint of your page. Consider delivering critical JS/CSS inline and deferring all non-critical JS/styles. [Learn more](https://web.dev/render-blocking-resources).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"unminified-css":{"id":"unminified-css","title":"Minify CSS","description":"Minifying CSS files can reduce network payload sizes. [Learn more](https://web.dev/unminified-css).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"unminified-javascript":{"id":"unminified-javascript","title":"Minify JavaScript","description":"Minifying JavaScript files can reduce payload sizes and script parse time. [Learn more](https://web.dev/unminified-javascript).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"unused-css-rules":{"id":"unused-css-rules","title":"Remove unused CSS","description":"Remove dead rules from stylesheets and defer the loading of CSS not used for above-the-fold content to reduce unnecessary bytes consumed by network activity. [Learn more](https://web.dev/unused-css-rules).","score":0.67,"scoreDisplayMode":"numeric","numericValue":450,"displayValue":"Potential savings of 87 KB","details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"totalBytes","valueType":"bytes","label":"Size"},{"key":"wastedBytes","valueType":"bytes","label":"Potential Savings"}],"items":[{"url":"https://iny.su/web/vendor/css/mdb.min.css?version=4","wastedBytes":66887,"wastedPercent":99.00726227693741,"totalBytes":67558},{"url":"https://iny.su/web/vendor/css/bootstrap.min.css?version=4","wastedBytes":22138,"wastedPercent":94.76302982832343,"totalBytes":23361}],"overallSavingsMs":450,"overallSavingsBytes":89025}},"uses-webp-images":{"id":"uses-webp-images","title":"Serve images in next-gen formats","description":"Image formats like JPEG 2000, JPEG XR, and WebP often provide better compression than PNG or JPEG, which means faster downloads and less data consumption. [Learn more](https://web.dev/uses-webp-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-optimized-images":{"id":"uses-optimized-images","title":"Efficiently encode images","description":"Optimized images load faster and consume less cellular data. [Learn more](https://web.dev/uses-optimized-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-text-compression":{"id":"uses-text-compression","title":"Enable text compression","description":"Text-based resources should be served with compression (gzip, deflate or brotli) to minimize total network bytes. [Learn more](https://web.dev/uses-text-compression).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-responsive-images":{"id":"uses-responsive-images","title":"Properly size images","description":"Serve images that are appropriately-sized to save cellular data and improve load time. [Learn more](https://web.dev/uses-responsive-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"efficient-animated-content":{"id":"efficient-animated-content","title":"Use video formats for animated content","description":"Large GIFs are inefficient for delivering animated content. Consider using MPEG4/WebM videos for animations and PNG/WebP for static images instead of GIF to save network bytes. [Learn more](https://web.dev/efficient-animated-content)","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"appcache-manifest":{"id":"appcache-manifest","title":"Avoids Application Cache","description":"Application Cache is deprecated. [Learn more](https://web.dev/appcache-manifest).","score":1,"scoreDisplayMode":"binary"},"doctype":{"id":"doctype","title":"Page has the HTML doctype","description":"Specifying a doctype prevents the browser from switching to quirks-mode. [Learn more](https://web.dev/doctype).","score":1,"scoreDisplayMode":"binary"},"dom-size":{"id":"dom-size","title":"Avoids an excessive DOM size","description":"A large DOM will increase memory usage, cause longer [style calculations](https://developers.google.com/web/fundamentals/performance/rendering/reduce-the-scope-and-complexity-of-style-calculations), and produce costly [layout reflows](https://developers.google.com/speed/articles/reflow). [Learn more](https://web.dev/dom-size).","score":1,"scoreDisplayMode":"numeric","numericValue":234,"displayValue":"234 elements","details":{"type":"table","headings":[{"key":"statistic","itemType":"text","text":"Statistic"},{"key":"element","itemType":"code","text":"Element"},{"key":"value","itemType":"numeric","text":"Value"}],"items":[{"statistic":"Total DOM Elements","element":"","value":"234"},{"statistic":"Maximum DOM Depth","element":{"type":"code","value":"\u003cpath fill=\"currentColor\" d=\"M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z\">"},"value":"12"},{"statistic":"Maximum Child Elements","element":{"type":"code","value":"\u003cbody aria-busy=\"true\" data-aos-easing=\"ease\" data-aos-duration=\"400\" data-aos-delay=\"0\">"},"value":"23"}]}},"external-anchors-use-rel-noopener":{"id":"external-anchors-use-rel-noopener","title":"Links to cross-origin destinations are safe","description":"Add `rel=\"noopener\"` or `rel=\"noreferrer\"` to any external links to improve performance and prevent security vulnerabilities. [Learn more](https://web.dev/external-anchors-use-rel-noopener).","score":1,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[],"items":[]}},"geolocation-on-start":{"id":"geolocation-on-start","title":"Avoids requesting the geolocation permission on page load","description":"Users are mistrustful of or confused by sites that request their location without context. Consider tying the request to a user action instead. [Learn more](https://web.dev/geolocation-on-start).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"no-document-write":{"id":"no-document-write","title":"Avoids `document.write()`","description":"For users on slow connections, external scripts dynamically injected via `document.write()` can delay page load by tens of seconds. [Learn more](https://web.dev/no-document-write).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"no-vulnerable-libraries":{"id":"no-vulnerable-libraries","title":"Avoids front-end JavaScript libraries with known security vulnerabilities","description":"Some third-party scripts may contain known security vulnerabilities that are easily identified and exploited by attackers. [Learn more](https://web.dev/no-vulnerable-libraries).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[],"summary":{}}},"js-libraries":{"id":"js-libraries","title":"Detected JavaScript libraries","description":"All front-end JavaScript libraries detected on the page. [Learn more](https://web.dev/js-libraries).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"name","itemType":"text","text":"Name"},{"key":"version","itemType":"text","text":"Version"}],"items":[{"name":"Bootstrap","version":"4.3.1","npm":"bootstrap"},{"name":"jQuery","version":"3.4.1","npm":"jquery"},{"name":"jQuery (Fast path)","npm":"jquery"}],"summary":{}}},"notification-on-start":{"id":"notification-on-start","title":"Avoids requesting the notification permission on page load","description":"Users are mistrustful of or confused by sites that request to send notifications without context. Consider tying the request to user gestures instead. [Learn more](https://web.dev/notification-on-start).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"password-inputs-can-be-pasted-into":{"id":"password-inputs-can-be-pasted-into","title":"Allows users to paste into password fields","description":"Preventing password pasting undermines good security policy. [Learn more](https://web.dev/password-inputs-can-be-pasted-into).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"uses-http2":{"id":"uses-http2","title":"Uses HTTP/2 for its own resources","description":"HTTP/2 offers many benefits over HTTP/1.1, including binary headers, multiplexing, and server push. [Learn more](https://web.dev/uses-http2).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[]}},"uses-passive-event-listeners":{"id":"uses-passive-event-listeners","title":"Does not use passive listeners to improve scrolling performance","description":"Consider marking your touch and wheel event listeners as `passive` to improve your page's scroll performance. [Learn more](https://web.dev/uses-passive-event-listeners).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"label","itemType":"text","text":"Location"}],"items":[{"label":"line: 4882","url":"https://www.youtube.com/yts/jsbin/player_ias-vflZgL1a2/ru_RU/base.js"}]}},"meta-description":{"id":"meta-description","title":"Document has a meta description","description":"Meta descriptions may be included in search results to concisely summarize page content. [Learn more](https://web.dev/meta-description).","score":1,"scoreDisplayMode":"binary"},"http-status-code":{"id":"http-status-code","title":"Page has successful HTTP status code","description":"Pages with unsuccessful HTTP status codes may not be indexed properly. [Learn more](https://web.dev/http-status-code).","score":1,"scoreDisplayMode":"binary"},"font-size":{"id":"font-size","title":"Document uses legible font sizes","description":"Font sizes less than 12px are too small to be legible and require mobile visitors to “pinch to zoom” in order to read. Strive to have >60% of page text ≥12px. [Learn more](https://web.dev/font-size).","score":null,"scoreDisplayMode":"notApplicable"},"link-text":{"id":"link-text","title":"Links have descriptive text","description":"Descriptive link text helps search engines understand your content. [Learn more](https://web.dev/link-text).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[],"summary":{}}},"is-crawlable":{"id":"is-crawlable","title":"Page isn’t blocked from indexing","description":"Search engines are unable to include your pages in search results if they don't have permission to crawl them. [Learn more](https://web.dev/is-crawable).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"robots-txt":{"id":"robots-txt","title":"robots.txt is valid","description":"If your robots.txt file is malformed, crawlers may not be able to understand how you want your website to be crawled or indexed. [Learn more](https://web.dev/robots-txt).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[],"summary":{}}},"tap-targets":{"id":"tap-targets","title":"Tap targets are sized appropriately","description":"Interactive elements like buttons and links should be large enough (48x48px), and have enough space around them, to be easy enough to tap without overlapping onto other elements. [Learn more](https://web.dev/tap-targets).","score":null,"scoreDisplayMode":"notApplicable"},"hreflang":{"id":"hreflang","title":"Document has a valid `hreflang`","description":"hreflang links tell search engines what version of a page they should list in search results for a given language or region. [Learn more](https://web.dev/hreflang).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"plugins":{"id":"plugins","title":"Document avoids plugins","description":"Search engines can't index plugin content, and many devices restrict plugins or don't support them. [Learn more](https://web.dev/plugins).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"canonical":{"id":"canonical","title":"Document has a valid `rel=canonical`","description":"Canonical links suggest which URL to show in search results. [Learn more](https://web.dev/canonical).","score":null,"scoreDisplayMode":"notApplicable"},"structured-data":{"id":"structured-data","title":"Structured data is valid","description":"Run the [Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool/) and the [Structured Data Linter](http://linter.structured-data.org/) to validate structured data. [Learn more](https://web.dev/structured-data).","score":null,"scoreDisplayMode":"manual"}},"configSettings":{"output":"json","maxWaitForFcp":30000,"maxWaitForLoad":45000,"throttlingMethod":"simulate","throttling":{"rttMs":150,"throughputKbps":1638.4,"requestLatencyMs":562.5,"downloadThroughputKbps":1474.5600000000002,"uploadThroughputKbps":675,"cpuSlowdownMultiplier":4},"auditMode":false,"gatherMode":false,"disableStorageReset":false,"emulatedFormFactor":"desktop","internalDisableDeviceScreenEmulation":true,"channel":"devtools","budgets":null,"locale":"en-US","blockedUrlPatterns":null,"additionalTraceCategories":null,"extraHeaders":null,"precomputedLanternData":null,"onlyAudits":null,"onlyCategories":["performance","pwa","best-practices","accessibility","seo"],"skipAudits":null},"categories":{"performance":{"title":"Performance","auditRefs":[{"id":"first-contentful-paint","weight":3,"group":"metrics"},{"id":"first-meaningful-paint","weight":1,"group":"metrics"},{"id":"speed-index","weight":4,"group":"metrics"},{"id":"interactive","weight":5,"group":"metrics"},{"id":"first-cpu-idle","weight":2,"group":"metrics"},{"id":"max-potential-fid","weight":0,"group":"metrics"},{"id":"estimated-input-latency","weight":0},{"id":"total-blocking-time","weight":0},{"id":"render-blocking-resources","weight":0,"group":"load-opportunities"},{"id":"uses-responsive-images","weight":0,"group":"load-opportunities"},{"id":"offscreen-images","weight":0,"group":"load-opportunities"},{"id":"unminified-css","weight":0,"group":"load-opportunities"},{"id":"unminified-javascript","weight":0,"group":"load-opportunities"},{"id":"unused-css-rules","weight":0,"group":"load-opportunities"},{"id":"uses-optimized-images","weight":0,"group":"load-opportunities"},{"id":"uses-webp-images","weight":0,"group":"load-opportunities"},{"id":"uses-text-compression","weight":0,"group":"load-opportunities"},{"id":"uses-rel-preconnect","weight":0,"group":"load-opportunities"},{"id":"time-to-first-byte","weight":0,"group":"load-opportunities"},{"id":"redirects","weight":0,"group":"load-opportunities"},{"id":"uses-rel-preload","weight":0,"group":"load-opportunities"},{"id":"efficient-animated-content","weight":0,"group":"load-opportunities"},{"id":"total-byte-weight","weight":0,"group":"diagnostics"},{"id":"uses-long-cache-ttl","weight":0,"group":"diagnostics"},{"id":"dom-size","weight":0,"group":"diagnostics"},{"id":"critical-request-chains","weight":0,"group":"diagnostics"},{"id":"user-timings","weight":0,"group":"diagnostics"},{"id":"bootup-time","weight":0,"group":"diagnostics"},{"id":"mainthread-work-breakdown","weight":0,"group":"diagnostics"},{"id":"font-display","weight":0,"group":"diagnostics"},{"id":"performance-budget","weight":0,"group":"budgets"},{"id":"resource-summary","weight":0,"group":"diagnostics"},{"id":"third-party-summary","weight":0,"group":"diagnostics"},{"id":"network-requests","weight":0},{"id":"network-rtt","weight":0},{"id":"network-server-latency","weight":0},{"id":"main-thread-tasks","weight":0},{"id":"diagnostics","weight":0},{"id":"metrics","weight":0},{"id":"screenshot-thumbnails","weight":0},{"id":"final-screenshot","weight":0}],"id":"performance","score":0.06},"accessibility":{"title":"Accessibility","description":"These checks highlight opportunities to [improve the accessibility of your web app](https://developers.google.com/web/fundamentals/accessibility). Only a subset of accessibility issues can be automatically detected so manual testing is also encouraged.","manualDescription":"These items address areas which an automated testing tool cannot cover. Learn more in our guide on [conducting an accessibility review](https://developers.google.com/web/fundamentals/accessibility/how-to-review).","auditRefs":[{"id":"accesskeys","weight":0,"group":"a11y-navigation"},{"id":"aria-allowed-attr","weight":10,"group":"a11y-aria"},{"id":"aria-required-attr","weight":0,"group":"a11y-aria"},{"id":"aria-required-children","weight":0,"group":"a11y-aria"},{"id":"aria-required-parent","weight":0,"group":"a11y-aria"},{"id":"aria-roles","weight":0,"group":"a11y-aria"},{"id":"aria-valid-attr-value","weight":10,"group":"a11y-aria"},{"id":"aria-valid-attr","weight":10,"group":"a11y-aria"},{"id":"audio-caption","weight":0,"group":"a11y-audio-video"},{"id":"button-name","weight":10,"group":"a11y-names-labels"},{"id":"bypass","weight":3,"group":"a11y-navigation"},{"id":"color-contrast","weight":3,"group":"a11y-color-contrast"},{"id":"definition-list","weight":0,"group":"a11y-tables-lists"},{"id":"dlitem","weight":0,"group":"a11y-tables-lists"},{"id":"document-title","weight":3,"group":"a11y-names-labels"},{"id":"duplicate-id","weight":1,"group":"a11y-best-practices"},{"id":"frame-title","weight":3,"group":"a11y-names-labels"},{"id":"html-has-lang","weight":3,"group":"a11y-language"},{"id":"html-lang-valid","weight":3,"group":"a11y-language"},{"id":"image-alt","weight":10,"group":"a11y-names-labels"},{"id":"input-image-alt","weight":0,"group":"a11y-names-labels"},{"id":"label","weight":0,"group":"a11y-names-labels"},{"id":"layout-table","weight":0,"group":"a11y-tables-lists"},{"id":"link-name","weight":3,"group":"a11y-names-labels"},{"id":"list","weight":0,"group":"a11y-tables-lists"},{"id":"listitem","weight":0,"group":"a11y-tables-lists"},{"id":"meta-refresh","weight":0,"group":"a11y-best-practices"},{"id":"meta-viewport","weight":10,"group":"a11y-best-practices"},{"id":"object-alt","weight":0,"group":"a11y-names-labels"},{"id":"tabindex","weight":0,"group":"a11y-navigation"},{"id":"td-headers-attr","weight":0,"group":"a11y-tables-lists"},{"id":"th-has-data-cells","weight":0,"group":"a11y-tables-lists"},{"id":"valid-lang","weight":0,"group":"a11y-language"},{"id":"video-caption","weight":0,"group":"a11y-audio-video"},{"id":"video-description","weight":0,"group":"a11y-audio-video"},{"id":"logical-tab-order","weight":0},{"id":"focusable-controls","weight":0},{"id":"interactive-element-affordance","weight":0},{"id":"managed-focus","weight":0},{"id":"focus-traps","weight":0},{"id":"custom-controls-labels","weight":0},{"id":"custom-controls-roles","weight":0},{"id":"visual-order-follows-dom","weight":0},{"id":"offscreen-content-hidden","weight":0},{"id":"heading-levels","weight":0},{"id":"use-landmarks","weight":0}],"id":"accessibility","score":0.93},"best-practices":{"title":"Best Practices","auditRefs":[{"id":"appcache-manifest","weight":1},{"id":"is-on-https","weight":1},{"id":"uses-http2","weight":1},{"id":"uses-passive-event-listeners","weight":1},{"id":"no-document-write","weight":1},{"id":"external-anchors-use-rel-noopener","weight":1},{"id":"geolocation-on-start","weight":1},{"id":"doctype","weight":1},{"id":"no-vulnerable-libraries","weight":1},{"id":"js-libraries","weight":0},{"id":"notification-on-start","weight":1},{"id":"deprecations","weight":1},{"id":"password-inputs-can-be-pasted-into","weight":1},{"id":"errors-in-console","weight":1},{"id":"image-aspect-ratio","weight":1}],"id":"best-practices","score":0.79},"seo":{"title":"SEO","description":"These checks ensure that your page is optimized for search engine results ranking. There are additional factors Lighthouse does not check that may affect your search ranking. [Learn more](https://support.google.com/webmasters/answer/35769).","manualDescription":"Run these additional validators on your site to check additional SEO best practices.","auditRefs":[{"id":"viewport","weight":1,"group":"seo-mobile"},{"id":"document-title","weight":1,"group":"seo-content"},{"id":"meta-description","weight":1,"group":"seo-content"},{"id":"http-status-code","weight":1,"group":"seo-crawl"},{"id":"link-text","weight":1,"group":"seo-content"},{"id":"is-crawlable","weight":1,"group":"seo-crawl"},{"id":"robots-txt","weight":1,"group":"seo-crawl"},{"id":"image-alt","weight":1,"group":"seo-content"},{"id":"hreflang","weight":1,"group":"seo-content"},{"id":"canonical","weight":0,"group":"seo-content"},{"id":"font-size","weight":0,"group":"seo-mobile"},{"id":"plugins","weight":1,"group":"seo-content"},{"id":"tap-targets","weight":0,"group":"seo-mobile"},{"id":"structured-data","weight":0}],"id":"seo","score":1},"pwa":{"title":"Progressive Web App","description":"These checks validate the aspects of a Progressive Web App. [Learn more](https://developers.google.com/web/progressive-web-apps/checklist).","manualDescription":"These checks are required by the baseline [PWA Checklist](https://developers.google.com/web/progressive-web-apps/checklist) but are not automatically checked by Lighthouse. They do not affect your score but it's important that you verify them manually.","auditRefs":[{"id":"load-fast-enough-for-pwa","weight":7,"group":"pwa-fast-reliable"},{"id":"works-offline","weight":5,"group":"pwa-fast-reliable"},{"id":"offline-start-url","weight":1,"group":"pwa-fast-reliable"},{"id":"is-on-https","weight":2,"group":"pwa-installable"},{"id":"service-worker","weight":1,"group":"pwa-installable"},{"id":"installable-manifest","weight":2,"group":"pwa-installable"},{"id":"redirects-http","weight":2,"group":"pwa-optimized"},{"id":"splash-screen","weight":1,"group":"pwa-optimized"},{"id":"themed-omnibox","weight":1,"group":"pwa-optimized"},{"id":"content-width","weight":0,"group":"pwa-optimized"},{"id":"viewport","weight":2,"group":"pwa-optimized"},{"id":"without-javascript","weight":1,"group":"pwa-optimized"},{"id":"apple-touch-icon","weight":1,"group":"pwa-optimized"},{"id":"pwa-cross-browser","weight":0},{"id":"pwa-page-transitions","weight":0},{"id":"pwa-each-page-has-url","weight":0}],"id":"pwa","score":0.46}},"categoryGroups":{"metrics":{"title":"Metrics"},"load-opportunities":{"title":"Opportunities","description":"These suggestions can help your page load faster. They don't [directly affect](https://github.com/GoogleChrome/lighthouse/blob/d2ec9ffbb21de9ad1a0f86ed24575eda32c796f0/docs/scoring.md#how-are-the-scores-weighted) the Performance score."},"budgets":{"title":"Budgets","description":"Performance budgets set standards for the performance of your site."},"diagnostics":{"title":"Diagnostics","description":"More information about the performance of your application. These numbers don't [directly affect](https://github.com/GoogleChrome/lighthouse/blob/d2ec9ffbb21de9ad1a0f86ed24575eda32c796f0/docs/scoring.md#how-are-the-scores-weighted) the Performance score."},"pwa-fast-reliable":{"title":"Fast and reliable"},"pwa-installable":{"title":"Installable"},"pwa-optimized":{"title":"PWA Optimized"},"a11y-best-practices":{"title":"Best practices","description":"These items highlight common accessibility best practices."},"a11y-color-contrast":{"title":"Contrast","description":"These are opportunities to improve the legibility of your content."},"a11y-names-labels":{"title":"Names and labels","description":"These are opportunities to improve the semantics of the controls in your application. This may enhance the experience for users of assistive technology, like a screen reader."},"a11y-navigation":{"title":"Navigation","description":"These are opportunities to improve keyboard navigation in your application."},"a11y-aria":{"title":"ARIA","description":"These are opportunities to improve the usage of ARIA in your application which may enhance the experience for users of assistive technology, like a screen reader."},"a11y-language":{"title":"Internationalization and localization","description":"These are opportunities to improve the interpretation of your content by users in different locales."},"a11y-audio-video":{"title":"Audio and video","description":"These are opportunities to provide alternative content for audio and video. This may improve the experience for users with hearing or vision impairments."},"a11y-tables-lists":{"title":"Tables and lists","description":"These are opportunities to to improve the experience of reading tabular or list data using assistive technology, like a screen reader."},"seo-mobile":{"title":"Mobile Friendly","description":"Make sure your pages are mobile friendly so users don’t have to pinch or zoom in order to read the content pages. [Learn more](https://developers.google.com/search/mobile-sites/)."},"seo-content":{"title":"Content Best Practices","description":"Format your HTML in a way that enables crawlers to better understand your app’s content."},"seo-crawl":{"title":"Crawling and Indexing","description":"To appear in search results, crawlers need access to your app."},"lighthouse-plugin-publisher-ads-metrics":{"title":"Metrics"},"lighthouse-plugin-publisher-ads-ads-performance":{"title":"Ad Speed"},"lighthouse-plugin-publisher-ads-ads-best-practices":{"title":"Tag Best Practices"}},"timing":{"entries":[{"startTime":229.59,"name":"lh:init:config","duration":99.16,"entryType":"measure"},{"startTime":238.61,"name":"lh:config:requireGatherers","duration":8.97,"entryType":"measure"},{"startTime":247.7,"name":"lh:config:requireAudits","duration":64.47,"entryType":"measure"},{"startTime":329.6,"name":"lh:init:connect","duration":2.09,"entryType":"measure"},{"startTime":331.77,"name":"lh:gather:loadBlank","duration":33.39,"entryType":"measure"},{"startTime":365.3,"name":"lh:gather:getVersion","duration":7.69,"entryType":"measure"},{"startTime":373.15,"name":"lh:gather:getBenchmarkIndex","duration":502.75,"entryType":"measure"},{"startTime":876.02,"name":"lh:gather:setupDriver","duration":59.66,"entryType":"measure"},{"startTime":935.87,"name":"lh:gather:loadBlank","duration":14.41,"entryType":"measure"},{"startTime":950.38,"name":"lh:gather:setupPassNetwork","duration":6.25,"entryType":"measure"},{"startTime":956.75,"name":"lh:driver:cleanBrowserCaches","duration":205.46,"entryType":"measure"},{"startTime":1162.4,"name":"lh:gather:beforePass","duration":8.05,"entryType":"measure"},{"startTime":1162.47,"name":"lh:gather:beforePass:CSSUsage","duration":0.1,"entryType":"measure"},{"startTime":1162.6,"name":"lh:gather:beforePass:ViewportDimensions","duration":0.04,"entryType":"measure"},{"startTime":1162.69,"name":"lh:gather:beforePass:RuntimeExceptions","duration":0.22,"entryType":"measure"},{"startTime":1162.94,"name":"lh:gather:beforePass:ConsoleMessages","duration":4.22,"entryType":"measure"},{"startTime":1167.22,"name":"lh:gather:beforePass:AnchorElements","duration":0.08,"entryType":"measure"},{"startTime":1167.34,"name":"lh:gather:beforePass:ImageElements","duration":0.05,"entryType":"measure"},{"startTime":1167.43,"name":"lh:gather:beforePass:LinkElements","duration":0.04,"entryType":"measure"},{"startTime":1167.51,"name":"lh:gather:beforePass:MetaElements","duration":0.04,"entryType":"measure"},{"startTime":1167.57,"name":"lh:gather:beforePass:ScriptElements","duration":0.04,"entryType":"measure"},{"startTime":1167.62,"name":"lh:gather:beforePass:AppCacheManifest","duration":0.03,"entryType":"measure"},{"startTime":1167.7,"name":"lh:gather:beforePass:Doctype","duration":0.04,"entryType":"measure"},{"startTime":1167.76,"name":"lh:gather:beforePass:DOMStats","duration":0.03,"entryType":"measure"},{"startTime":1167.81,"name":"lh:gather:beforePass:OptimizedImages","duration":0.04,"entryType":"measure"},{"startTime":1167.86,"name":"lh:gather:beforePass:PasswordInputsWithPreventedPaste","duration":0.03,"entryType":"measure"},{"startTime":1167.92,"name":"lh:gather:beforePass:ResponseCompression","duration":0.03,"entryType":"measure"},{"startTime":1167.98,"name":"lh:gather:beforePass:TagsBlockingFirstPaint","duration":2.08,"entryType":"measure"},{"startTime":1170.12,"name":"lh:gather:beforePass:FontSize","duration":0.06,"entryType":"measure"},{"startTime":1170.21,"name":"lh:gather:beforePass:EmbeddedContent","duration":0.04,"entryType":"measure"},{"startTime":1170.27,"name":"lh:gather:beforePass:RobotsTxt","duration":0.04,"entryType":"measure"},{"startTime":1170.33,"name":"lh:gather:beforePass:TapTargets","duration":0.03,"entryType":"measure"},{"startTime":1170.38,"name":"lh:gather:beforePass:Accessibility","duration":0.04,"entryType":"measure"},{"startTime":1170.58,"name":"lh:gather:beginRecording","duration":4.93,"entryType":"measure"},{"startTime":1170.94,"name":"lh:gather:getVersion","duration":1.3,"entryType":"measure"},{"startTime":1175.71,"name":"lh:gather:loadPage-defaultPass","duration":6436.9,"entryType":"measure"},{"startTime":7612.73,"name":"lh:gather:pass","duration":1.99,"entryType":"measure"},{"startTime":7614.87,"name":"lh:gather:getTrace","duration":2906.09,"entryType":"measure"},{"startTime":10521.03,"name":"lh:gather:getDevtoolsLog","duration":11.41,"entryType":"measure"},{"startTime":10534.47,"name":"lh:gather:afterPass","duration":1626.78,"entryType":"measure"},{"startTime":10544.57,"name":"lh:gather:afterPass:CSSUsage","duration":338.5,"entryType":"measure"},{"startTime":10883.12,"name":"lh:gather:afterPass:ViewportDimensions","duration":5.08,"entryType":"measure"},{"startTime":10888.23,"name":"lh:gather:afterPass:RuntimeExceptions","duration":5.3,"entryType":"measure"},{"startTime":10893.58,"name":"lh:gather:afterPass:ConsoleMessages","duration":4.14,"entryType":"measure"},{"startTime":10897.82,"name":"lh:gather:afterPass:AnchorElements","duration":7.4,"entryType":"measure"},{"startTime":10905.25,"name":"lh:gather:afterPass:ImageElements","duration":20.01,"entryType":"measure"},{"startTime":10925.3,"name":"lh:gather:afterPass:LinkElements","duration":3.7,"entryType":"measure"},{"startTime":10929.04,"name":"lh:gather:afterPass:MetaElements","duration":3.32,"entryType":"measure"},{"startTime":10932.38,"name":"lh:gather:afterPass:ScriptElements","duration":7.8,"entryType":"measure"},{"startTime":10940.23,"name":"lh:gather:afterPass:AppCacheManifest","duration":3.96,"entryType":"measure"},{"startTime":10944.21,"name":"lh:gather:afterPass:Doctype","duration":2.64,"entryType":"measure"},{"startTime":10946.88,"name":"lh:gather:afterPass:DOMStats","duration":6.2,"entryType":"measure"},{"startTime":10953.11,"name":"lh:gather:afterPass:OptimizedImages","duration":3.31,"entryType":"measure"},{"startTime":10956.5,"name":"lh:gather:afterPass:PasswordInputsWithPreventedPaste","duration":2.91,"entryType":"measure"},{"startTime":10959.44,"name":"lh:gather:afterPass:ResponseCompression","duration":1.42,"entryType":"measure"},{"startTime":10960.9,"name":"lh:gather:afterPass:TagsBlockingFirstPaint","duration":4.14,"entryType":"measure"},{"startTime":10965.07,"name":"lh:gather:afterPass:FontSize","duration":148.03,"entryType":"measure"},{"startTime":11113.35,"name":"lh:gather:afterPass:EmbeddedContent","duration":4.43,"entryType":"measure"},{"startTime":11117.83,"name":"lh:gather:afterPass:RobotsTxt","duration":394.18,"entryType":"measure"},{"startTime":11512.04,"name":"lh:gather:afterPass:TapTargets","duration":20.58,"entryType":"measure"},{"startTime":11532.67,"name":"lh:gather:afterPass:Accessibility","duration":628.5,"entryType":"measure"},{"startTime":12238.45,"name":"lh:gather:loadBlank","duration":42.32,"entryType":"measure"},{"startTime":12280.81,"name":"lh:gather:setupPassNetwork","duration":11.41,"entryType":"measure"},{"startTime":12292.27,"name":"lh:gather:beforePass","duration":6.12,"entryType":"measure"},{"startTime":12292.32,"name":"lh:gather:beforePass:ServiceWorker","duration":5.12,"entryType":"measure"},{"startTime":12297.48,"name":"lh:gather:beforePass:Offline","duration":0.82,"entryType":"measure"},{"startTime":12298.33,"name":"lh:gather:beforePass:StartUrl","duration":0.05,"entryType":"measure"},{"startTime":12298.41,"name":"lh:gather:beginRecording","duration":0.14,"entryType":"measure"},{"startTime":12298.6,"name":"lh:gather:loadPage-offlinePass","duration":229.52,"entryType":"measure"},{"startTime":12528.16,"name":"lh:gather:pass","duration":0.33,"entryType":"measure"},{"startTime":12528.53,"name":"lh:gather:getDevtoolsLog","duration":0.32,"entryType":"measure"},{"startTime":12607.04,"name":"lh:gather:afterPass","duration":3168.61,"entryType":"measure"},{"startTime":12743.72,"name":"lh:gather:afterPass:ServiceWorker","duration":1.68,"entryType":"measure"},{"startTime":12745.45,"name":"lh:gather:afterPass:Offline","duration":18.31,"entryType":"measure"},{"startTime":12763.8,"name":"lh:gather:afterPass:StartUrl","duration":3011.82,"entryType":"measure"},{"startTime":15775.71,"name":"lh:gather:loadBlank","duration":115.05,"entryType":"measure"},{"startTime":15890.89,"name":"lh:gather:setupPassNetwork","duration":7,"entryType":"measure"},{"startTime":15897.92,"name":"lh:gather:beforePass","duration":0.24,"entryType":"measure"},{"startTime":15897.97,"name":"lh:gather:beforePass:HTTPRedirect","duration":0.11,"entryType":"measure"},{"startTime":15898.1,"name":"lh:gather:beforePass:HTMLWithoutJavaScript","duration":0.05,"entryType":"measure"},{"startTime":15898.18,"name":"lh:gather:beginRecording","duration":0.1,"entryType":"measure"},{"startTime":15898.3,"name":"lh:gather:loadPage-redirectPass","duration":171.44,"entryType":"measure"},{"startTime":16069.79,"name":"lh:gather:pass","duration":0.22,"entryType":"measure"},{"startTime":16070.05,"name":"lh:gather:getDevtoolsLog","duration":0.43,"entryType":"measure"},{"startTime":16153.32,"name":"lh:gather:afterPass","duration":62.85,"entryType":"measure"},{"startTime":16205.82,"name":"lh:gather:afterPass:HTTPRedirect","duration":4.73,"entryType":"measure"},{"startTime":16210.58,"name":"lh:gather:afterPass:HTMLWithoutJavaScript","duration":5.56,"entryType":"measure"},{"startTime":16216.3,"name":"lh:gather:disconnect","duration":23.87,"entryType":"measure"},{"startTime":329,"name":"lh:runner:run","duration":17487.11,"entryType":"measure"},{"startTime":16240.57,"name":"lh:runner:auditing","duration":1574.89,"entryType":"measure"},{"startTime":16244.06,"name":"lh:audit:is-on-https","duration":5.51,"entryType":"measure"},{"startTime":16244.5,"name":"lh:computed:NetworkRecords","duration":4.48,"entryType":"measure"},{"startTime":16249.99,"name":"lh:audit:redirects-http","duration":0.37,"entryType":"measure"},{"startTime":16250.71,"name":"lh:audit:service-worker","duration":0.75,"entryType":"measure"},{"startTime":16251.75,"name":"lh:audit:works-offline","duration":0.75,"entryType":"measure"},{"startTime":16253.14,"name":"lh:audit:viewport","duration":1.42,"entryType":"measure"},{"startTime":16253.63,"name":"lh:computed:ViewportMeta","duration":0.72,"entryType":"measure"},{"startTime":16254.89,"name":"lh:audit:without-javascript","duration":0.39,"entryType":"measure"},{"startTime":16255.56,"name":"lh:audit:first-contentful-paint","duration":89.25,"entryType":"measure"},{"startTime":16255.82,"name":"lh:computed:FirstContentfulPaint","duration":88.65,"entryType":"measure"},{"startTime":16255.95,"name":"lh:computed:TraceOfTab","duration":65.73,"entryType":"measure"},{"startTime":16321.82,"name":"lh:computed:LanternFirstContentfulPaint","duration":22.61,"entryType":"measure"},{"startTime":16322.05,"name":"lh:computed:PageDependencyGraph","duration":9.94,"entryType":"measure"},{"startTime":16332.05,"name":"lh:computed:LoadSimulator","duration":1.94,"entryType":"measure"},{"startTime":16332.19,"name":"lh:computed:NetworkAnalysis","duration":1.59,"entryType":"measure"},{"startTime":16345.05,"name":"lh:audit:first-meaningful-paint","duration":6.19,"entryType":"measure"},{"startTime":16345.3,"name":"lh:computed:FirstMeaningfulPaint","duration":5.66,"entryType":"measure"},{"startTime":16345.45,"name":"lh:computed:LanternFirstMeaningfulPaint","duration":5.48,"entryType":"measure"},{"startTime":16351.65,"name":"lh:audit:load-fast-enough-for-pwa","duration":26.29,"entryType":"measure"},{"startTime":16353.03,"name":"lh:computed:Interactive","duration":24.6,"entryType":"measure"},{"startTime":16353.27,"name":"lh:computed:LanternInteractive","duration":24.32,"entryType":"measure"},{"startTime":16378.28,"name":"lh:audit:speed-index","duration":693.32,"entryType":"measure"},{"startTime":16378.53,"name":"lh:computed:SpeedIndex","duration":692.5,"entryType":"measure"},{"startTime":16378.63,"name":"lh:computed:LanternSpeedIndex","duration":692.14,"entryType":"measure"},{"startTime":16378.72,"name":"lh:computed:Speedline","duration":661.67,"entryType":"measure"},{"startTime":17071.99,"name":"lh:audit:screenshot-thumbnails","duration":278.54,"entryType":"measure"},{"startTime":17350.64,"name":"lh:audit:final-screenshot","duration":5.55,"entryType":"measure"},{"startTime":17350.96,"name":"lh:computed:Screenshots","duration":5.07,"entryType":"measure"},{"startTime":17358.69,"name":"lh:audit:estimated-input-latency","duration":13.63,"entryType":"measure"},{"startTime":17358.97,"name":"lh:computed:EstimatedInputLatency","duration":13.11,"entryType":"measure"},{"startTime":17359.08,"name":"lh:computed:LanternEstimatedInputLatency","duration":12.96,"entryType":"measure"},{"startTime":17372.81,"name":"lh:audit:total-blocking-time","duration":10.36,"entryType":"measure"},{"startTime":17373.25,"name":"lh:computed:TotalBlockingTime","duration":9.66,"entryType":"measure"},{"startTime":17373.45,"name":"lh:computed:LanternTotalBlockingTime","duration":9.43,"entryType":"measure"},{"startTime":17383.49,"name":"lh:audit:max-potential-fid","duration":15.65,"entryType":"measure"},{"startTime":17383.82,"name":"lh:computed:MaxPotentialFID","duration":15,"entryType":"measure"},{"startTime":17384.07,"name":"lh:computed:LanternMaxPotentialFID","duration":14.7,"entryType":"measure"},{"startTime":17399.76,"name":"lh:audit:errors-in-console","duration":1.01,"entryType":"measure"},{"startTime":17401.1,"name":"lh:audit:time-to-first-byte","duration":0.8,"entryType":"measure"},{"startTime":17401.36,"name":"lh:computed:MainResource","duration":0.25,"entryType":"measure"},{"startTime":17402.55,"name":"lh:audit:first-cpu-idle","duration":10.19,"entryType":"measure"},{"startTime":17402.94,"name":"lh:computed:FirstCPUIdle","duration":9.41,"entryType":"measure"},{"startTime":17403.05,"name":"lh:computed:LanternFirstCPUIdle","duration":9.2,"entryType":"measure"},{"startTime":17413.02,"name":"lh:audit:interactive","duration":0.56,"entryType":"measure"},{"startTime":17414.05,"name":"lh:audit:user-timings","duration":7.17,"entryType":"measure"},{"startTime":17414.28,"name":"lh:computed:UserTimings","duration":6.45,"entryType":"measure"},{"startTime":17421.66,"name":"lh:audit:critical-request-chains","duration":1.62,"entryType":"measure"},{"startTime":17422.05,"name":"lh:computed:CriticalRequestChains","duration":0.54,"entryType":"measure"},{"startTime":17423.58,"name":"lh:audit:redirects","duration":0.77,"entryType":"measure"},{"startTime":17424.7,"name":"lh:audit:installable-manifest","duration":1.33,"entryType":"measure"},{"startTime":17424.95,"name":"lh:computed:ManifestValues","duration":0.69,"entryType":"measure"},{"startTime":17426.35,"name":"lh:audit:apple-touch-icon","duration":0.41,"entryType":"measure"},{"startTime":17427.02,"name":"lh:audit:splash-screen","duration":0.55,"entryType":"measure"},{"startTime":17427.83,"name":"lh:audit:themed-omnibox","duration":3.25,"entryType":"measure"},{"startTime":17431.7,"name":"lh:audit:content-width","duration":0.56,"entryType":"measure"},{"startTime":17432.57,"name":"lh:audit:image-aspect-ratio","duration":0.57,"entryType":"measure"},{"startTime":17433.5,"name":"lh:audit:deprecations","duration":0.63,"entryType":"measure"},{"startTime":17434.42,"name":"lh:audit:mainthread-work-breakdown","duration":92.74,"entryType":"measure"},{"startTime":17434.8,"name":"lh:computed:MainThreadTasks","duration":86.21,"entryType":"measure"},{"startTime":17527.47,"name":"lh:audit:bootup-time","duration":10.38,"entryType":"measure"},{"startTime":17538.17,"name":"lh:audit:uses-rel-preload","duration":7.02,"entryType":"measure"},{"startTime":17538.84,"name":"lh:computed:LoadSimulator","duration":0.2,"entryType":"measure"},{"startTime":17545.43,"name":"lh:audit:uses-rel-preconnect","duration":0.84,"entryType":"measure"},{"startTime":17546.5,"name":"lh:audit:font-display","duration":3.86,"entryType":"measure"},{"startTime":17550.43,"name":"lh:audit:diagnostics","duration":1.33,"entryType":"measure"},{"startTime":17551.81,"name":"lh:audit:network-requests","duration":2.4,"entryType":"measure"},{"startTime":17554.69,"name":"lh:audit:network-rtt","duration":1.26,"entryType":"measure"},{"startTime":17556.18,"name":"lh:audit:network-server-latency","duration":0.52,"entryType":"measure"},{"startTime":17556.76,"name":"lh:audit:main-thread-tasks","duration":0.87,"entryType":"measure"},{"startTime":17557.68,"name":"lh:audit:metrics","duration":1.19,"entryType":"measure"},{"startTime":17558.08,"name":"lh:computed:LargestContentfulPaint","duration":0.21,"entryType":"measure"},{"startTime":17559.13,"name":"lh:audit:offline-start-url","duration":0.36,"entryType":"measure"},{"startTime":17559.67,"name":"lh:audit:performance-budget","duration":1.92,"entryType":"measure"},{"startTime":17559.94,"name":"lh:computed:ResourceSummary","duration":1.5,"entryType":"measure"},{"startTime":17561.81,"name":"lh:audit:resource-summary","duration":0.59,"entryType":"measure"},{"startTime":17562.6,"name":"lh:audit:third-party-summary","duration":75.79,"entryType":"measure"},{"startTime":17638.71,"name":"lh:audit:pwa-cross-browser","duration":0.32,"entryType":"measure"},{"startTime":17639.3,"name":"lh:audit:pwa-page-transitions","duration":0.22,"entryType":"measure"},{"startTime":17639.72,"name":"lh:audit:pwa-each-page-has-url","duration":0.33,"entryType":"measure"},{"startTime":17640.29,"name":"lh:audit:accesskeys","duration":0.41,"entryType":"measure"},{"startTime":17640.92,"name":"lh:audit:aria-allowed-attr","duration":1.01,"entryType":"measure"},{"startTime":17642.16,"name":"lh:audit:aria-required-attr","duration":0.29,"entryType":"measure"},{"startTime":17642.75,"name":"lh:audit:aria-required-children","duration":0.37,"entryType":"measure"},{"startTime":17643.34,"name":"lh:audit:aria-required-parent","duration":0.33,"entryType":"measure"},{"startTime":17643.88,"name":"lh:audit:aria-roles","duration":0.33,"entryType":"measure"},{"startTime":17644.41,"name":"lh:audit:aria-valid-attr-value","duration":0.88,"entryType":"measure"},{"startTime":17645.54,"name":"lh:audit:aria-valid-attr","duration":0.73,"entryType":"measure"},{"startTime":17646.51,"name":"lh:audit:audio-caption","duration":0.37,"entryType":"measure"},{"startTime":17647.07,"name":"lh:audit:button-name","duration":0.73,"entryType":"measure"},{"startTime":17648.04,"name":"lh:audit:bypass","duration":1.89,"entryType":"measure"},{"startTime":17650.21,"name":"lh:audit:color-contrast","duration":0.82,"entryType":"measure"},{"startTime":17651.29,"name":"lh:audit:definition-list","duration":0.39,"entryType":"measure"},{"startTime":17651.97,"name":"lh:audit:dlitem","duration":2.19,"entryType":"measure"},{"startTime":17654.52,"name":"lh:audit:document-title","duration":1.63,"entryType":"measure"},{"startTime":17656.45,"name":"lh:audit:duplicate-id","duration":0.83,"entryType":"measure"},{"startTime":17657.52,"name":"lh:audit:frame-title","duration":0.74,"entryType":"measure"},{"startTime":17658.49,"name":"lh:audit:html-has-lang","duration":0.74,"entryType":"measure"},{"startTime":17659.46,"name":"lh:audit:html-lang-valid","duration":0.74,"entryType":"measure"},{"startTime":17660.43,"name":"lh:audit:image-alt","duration":0.8,"entryType":"measure"},{"startTime":17661.45,"name":"lh:audit:input-image-alt","duration":0.45,"entryType":"measure"},{"startTime":17662.11,"name":"lh:audit:label","duration":0.39,"entryType":"measure"},{"startTime":17662.74,"name":"lh:audit:layout-table","duration":0.41,"entryType":"measure"},{"startTime":17663.33,"name":"lh:audit:link-name","duration":0.65,"entryType":"measure"},{"startTime":17664.21,"name":"lh:audit:list","duration":0.41,"entryType":"measure"},{"startTime":17664.86,"name":"lh:audit:listitem","duration":0.43,"entryType":"measure"},{"startTime":17665.5,"name":"lh:audit:meta-refresh","duration":0.46,"entryType":"measure"},{"startTime":17666.24,"name":"lh:audit:meta-viewport","duration":0.62,"entryType":"measure"},{"startTime":17667.06,"name":"lh:audit:object-alt","duration":0.45,"entryType":"measure"},{"startTime":17667.71,"name":"lh:audit:tabindex","duration":0.53,"entryType":"measure"},{"startTime":17668.53,"name":"lh:audit:td-headers-attr","duration":1.41,"entryType":"measure"},{"startTime":17670.46,"name":"lh:audit:th-has-data-cells","duration":0.82,"entryType":"measure"},{"startTime":17671.62,"name":"lh:audit:valid-lang","duration":0.65,"entryType":"measure"},{"startTime":17672.54,"name":"lh:audit:video-caption","duration":0.63,"entryType":"measure"},{"startTime":17673.41,"name":"lh:audit:video-description","duration":0.65,"entryType":"measure"},{"startTime":17674.13,"name":"lh:audit:custom-controls-labels","duration":0.11,"entryType":"measure"},{"startTime":17674.29,"name":"lh:audit:custom-controls-roles","duration":0.08,"entryType":"measure"},{"startTime":17674.42,"name":"lh:audit:focus-traps","duration":0.08,"entryType":"measure"},{"startTime":17674.55,"name":"lh:audit:focusable-controls","duration":0.08,"entryType":"measure"},{"startTime":17674.68,"name":"lh:audit:heading-levels","duration":0.08,"entryType":"measure"},{"startTime":17674.8,"name":"lh:audit:interactive-element-affordance","duration":0.08,"entryType":"measure"},{"startTime":17674.93,"name":"lh:audit:logical-tab-order","duration":0.19,"entryType":"measure"},{"startTime":17675.17,"name":"lh:audit:managed-focus","duration":0.11,"entryType":"measure"},{"startTime":17675.32,"name":"lh:audit:offscreen-content-hidden","duration":0.13,"entryType":"measure"},{"startTime":17675.5,"name":"lh:audit:use-landmarks","duration":0.08,"entryType":"measure"},{"startTime":17675.63,"name":"lh:audit:visual-order-follows-dom","duration":0.08,"entryType":"measure"},{"startTime":17676.5,"name":"lh:audit:uses-long-cache-ttl","duration":1.91,"entryType":"measure"},{"startTime":17678.65,"name":"lh:audit:total-byte-weight","duration":0.71,"entryType":"measure"},{"startTime":17679.56,"name":"lh:audit:offscreen-images","duration":5.04,"entryType":"measure"},{"startTime":17684.93,"name":"lh:audit:render-blocking-resources","duration":11.07,"entryType":"measure"},{"startTime":17692.37,"name":"lh:computed:FirstContentfulPaint","duration":3.28,"entryType":"measure"},{"startTime":17692.53,"name":"lh:computed:LanternFirstContentfulPaint","duration":3.09,"entryType":"measure"},{"startTime":17696.22,"name":"lh:audit:unminified-css","duration":66.47,"entryType":"measure"},{"startTime":17762.95,"name":"lh:audit:unminified-javascript","duration":3.38,"entryType":"measure"},{"startTime":17766.52,"name":"lh:audit:unused-css-rules","duration":3.96,"entryType":"measure"},{"startTime":17770.9,"name":"lh:audit:uses-webp-images","duration":5.66,"entryType":"measure"},{"startTime":17776.84,"name":"lh:audit:uses-optimized-images","duration":3.14,"entryType":"measure"},{"startTime":17780.21,"name":"lh:audit:uses-text-compression","duration":5.07,"entryType":"measure"},{"startTime":17786,"name":"lh:audit:uses-responsive-images","duration":4.02,"entryType":"measure"},{"startTime":17790.31,"name":"lh:audit:efficient-animated-content","duration":3.01,"entryType":"measure"},{"startTime":17793.58,"name":"lh:audit:appcache-manifest","duration":0.51,"entryType":"measure"},{"startTime":17794.3,"name":"lh:audit:doctype","duration":0.31,"entryType":"measure"},{"startTime":17794.81,"name":"lh:audit:dom-size","duration":0.72,"entryType":"measure"},{"startTime":17795.77,"name":"lh:audit:external-anchors-use-rel-noopener","duration":0.45,"entryType":"measure"},{"startTime":17796.47,"name":"lh:audit:geolocation-on-start","duration":0.39,"entryType":"measure"},{"startTime":17797.04,"name":"lh:audit:no-document-write","duration":0.32,"entryType":"measure"},{"startTime":17797.59,"name":"lh:audit:no-vulnerable-libraries","duration":5.95,"entryType":"measure"},{"startTime":17804.01,"name":"lh:audit:js-libraries","duration":0.74,"entryType":"measure"},{"startTime":17805.27,"name":"lh:audit:notification-on-start","duration":0.56,"entryType":"measure"},{"startTime":17806.07,"name":"lh:audit:password-inputs-can-be-pasted-into","duration":0.33,"entryType":"measure"},{"startTime":17806.61,"name":"lh:audit:uses-http2","duration":0.66,"entryType":"measure"},{"startTime":17807.48,"name":"lh:audit:uses-passive-event-listeners","duration":0.39,"entryType":"measure"},{"startTime":17808.06,"name":"lh:audit:meta-description","duration":0.29,"entryType":"measure"},{"startTime":17808.55,"name":"lh:audit:http-status-code","duration":0.33,"entryType":"measure"},{"startTime":17809.06,"name":"lh:audit:font-size","duration":0.38,"entryType":"measure"},{"startTime":17809.64,"name":"lh:audit:link-text","duration":0.55,"entryType":"measure"},{"startTime":17810.49,"name":"lh:audit:is-crawlable","duration":1.25,"entryType":"measure"},{"startTime":17811.94,"name":"lh:audit:robots-txt","duration":0.54,"entryType":"measure"},{"startTime":17812.69,"name":"lh:audit:tap-targets","duration":0.36,"entryType":"measure"},{"startTime":17813.24,"name":"lh:audit:hreflang","duration":0.32,"entryType":"measure"},{"startTime":17813.74,"name":"lh:audit:plugins","duration":0.47,"entryType":"measure"},{"startTime":17814.44,"name":"lh:audit:canonical","duration":0.6,"entryType":"measure"},{"startTime":17815.23,"name":"lh:audit:structured-data","duration":0.22,"entryType":"measure"},{"startTime":17815.46,"name":"lh:runner:generate","duration":0.63,"entryType":"measure"}],"total":17487.11},"i18n":{"rendererFormattedStrings":{},"icuMessagePaths":{"lighthouse-core/audits/is-on-https.js | title":["audits[is-on-https].title"],"lighthouse-core/audits/is-on-https.js | description":["audits[is-on-https].description"],"lighthouse-core/audits/redirects-http.js | title":["audits[redirects-http].title"],"lighthouse-core/audits/redirects-http.js | description":["audits[redirects-http].description"],"lighthouse-core/audits/service-worker.js | failureTitle":["audits[service-worker].title"],"lighthouse-core/audits/service-worker.js | description":["audits[service-worker].description"],"lighthouse-core/audits/works-offline.js | failureTitle":["audits[works-offline].title"],"lighthouse-core/audits/works-offline.js | description":["audits[works-offline].description"],"lighthouse-core/audits/viewport.js | title":["audits.viewport.title"],"lighthouse-core/audits/viewport.js | description":["audits.viewport.description"],"lighthouse-core/audits/without-javascript.js | title":["audits[without-javascript].title"],"lighthouse-core/audits/without-javascript.js | description":["audits[without-javascript].description"],"lighthouse-core/audits/metrics/first-contentful-paint.js | title":["audits[first-contentful-paint].title"],"lighthouse-core/audits/metrics/first-contentful-paint.js | description":["audits[first-contentful-paint].description"],"lighthouse-core/lib/i18n/i18n.js | seconds":[{"values":{"timeInMs":8354.795},"path":"audits[first-contentful-paint].displayValue"},{"values":{"timeInMs":8429.795},"path":"audits[first-meaningful-paint].displayValue"},{"values":{"timeInMs":13699.894604450976},"path":"audits[speed-index].displayValue"},{"values":{"timeInMs":8429.795},"path":"audits[first-cpu-idle].displayValue"},{"values":{"timeInMs":24056.295},"path":"audits.interactive.displayValue"},{"values":{"timeInMs":17205.719999999666},"path":"audits[mainthread-work-breakdown].displayValue"},{"values":{"timeInMs":12532.707999999993},"path":"audits[bootup-time].displayValue"}],"lighthouse-core/audits/metrics/first-meaningful-paint.js | title":["audits[first-meaningful-paint].title"],"lighthouse-core/audits/metrics/first-meaningful-paint.js | description":["audits[first-meaningful-paint].description"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | failureTitle":["audits[load-fast-enough-for-pwa].title"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | description":["audits[load-fast-enough-for-pwa].description"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | displayValueText":[{"values":{"timeInMs":24056.295},"path":"audits[load-fast-enough-for-pwa].displayValue"}],"lighthouse-core/audits/load-fast-enough-for-pwa.js | explanationLoadSlow":["audits[load-fast-enough-for-pwa].explanation"],"lighthouse-core/audits/metrics/speed-index.js | title":["audits[speed-index].title"],"lighthouse-core/audits/metrics/speed-index.js | description":["audits[speed-index].description"],"lighthouse-core/audits/metrics/estimated-input-latency.js | title":["audits[estimated-input-latency].title"],"lighthouse-core/audits/metrics/estimated-input-latency.js | description":["audits[estimated-input-latency].description"],"lighthouse-core/lib/i18n/i18n.js | ms":[{"values":{"timeInMs":2094.4},"path":"audits[estimated-input-latency].displayValue"},{"values":{"timeInMs":795.5},"path":"audits[total-blocking-time].displayValue"},{"values":{"timeInMs":2950},"path":"audits[max-potential-fid].displayValue"},{"values":{"timeInMs":3.0720000000000005},"path":"audits[network-rtt].displayValue"},{"values":{"timeInMs":88.54199999999999},"path":"audits[network-server-latency].displayValue"}],"lighthouse-core/audits/metrics/total-blocking-time.js | title":["audits[total-blocking-time].title"],"lighthouse-core/audits/metrics/total-blocking-time.js | description":["audits[total-blocking-time].description"],"lighthouse-core/audits/metrics/max-potential-fid.js | title":["audits[max-potential-fid].title"],"lighthouse-core/audits/metrics/max-potential-fid.js | description":["audits[max-potential-fid].description"],"lighthouse-core/audits/errors-in-console.js | failureTitle":["audits[errors-in-console].title"],"lighthouse-core/audits/errors-in-console.js | description":["audits[errors-in-console].description"],"lighthouse-core/lib/i18n/i18n.js | columnURL":["audits[errors-in-console].details.headings[0].text","audits.deprecations.details.headings[1].text","audits[bootup-time].details.headings[0].text","audits[uses-rel-preload].details.headings[0].label","audits[uses-rel-preconnect].details.headings[0].label","audits[font-display].details.headings[0].text","audits[network-rtt].details.headings[0].text","audits[network-server-latency].details.headings[0].text","audits[uses-long-cache-ttl].details.headings[0].text","audits[total-byte-weight].details.headings[0].text","audits[unused-css-rules].details.headings[0].label","audits[uses-passive-event-listeners].details.headings[0].text"],"lighthouse-core/audits/errors-in-console.js | columnDesc":["audits[errors-in-console].details.headings[1].text"],"lighthouse-core/audits/time-to-first-byte.js | title":["audits[time-to-first-byte].title"],"lighthouse-core/audits/time-to-first-byte.js | description":["audits[time-to-first-byte].description"],"lighthouse-core/audits/time-to-first-byte.js | displayValue":[{"values":{"timeInMs":69.656},"path":"audits[time-to-first-byte].displayValue"}],"lighthouse-core/audits/metrics/first-cpu-idle.js | title":["audits[first-cpu-idle].title"],"lighthouse-core/audits/metrics/first-cpu-idle.js | description":["audits[first-cpu-idle].description"],"lighthouse-core/audits/metrics/interactive.js | title":["audits.interactive.title"],"lighthouse-core/audits/metrics/interactive.js | description":["audits.interactive.description"],"lighthouse-core/audits/user-timings.js | title":["audits[user-timings].title"],"lighthouse-core/audits/user-timings.js | description":["audits[user-timings].description"],"lighthouse-core/audits/critical-request-chains.js | title":["audits[critical-request-chains].title"],"lighthouse-core/audits/critical-request-chains.js | description":["audits[critical-request-chains].description"],"lighthouse-core/audits/critical-request-chains.js | displayValue":[{"values":{"itemCount":5},"path":"audits[critical-request-chains].displayValue"}],"lighthouse-core/audits/redirects.js | title":["audits.redirects.title"],"lighthouse-core/audits/redirects.js | description":["audits.redirects.description"],"lighthouse-core/audits/installable-manifest.js | title":["audits[installable-manifest].title"],"lighthouse-core/audits/installable-manifest.js | description":["audits[installable-manifest].description"],"lighthouse-core/audits/apple-touch-icon.js | title":["audits[apple-touch-icon].title"],"lighthouse-core/audits/apple-touch-icon.js | description":["audits[apple-touch-icon].description"],"lighthouse-core/audits/splash-screen.js | title":["audits[splash-screen].title"],"lighthouse-core/audits/splash-screen.js | description":["audits[splash-screen].description"],"lighthouse-core/audits/themed-omnibox.js | title":["audits[themed-omnibox].title"],"lighthouse-core/audits/themed-omnibox.js | description":["audits[themed-omnibox].description"],"lighthouse-core/audits/content-width.js | title":["audits[content-width].title"],"lighthouse-core/audits/content-width.js | description":["audits[content-width].description"],"lighthouse-core/audits/image-aspect-ratio.js | title":["audits[image-aspect-ratio].title"],"lighthouse-core/audits/image-aspect-ratio.js | description":["audits[image-aspect-ratio].description"],"lighthouse-core/audits/deprecations.js | failureTitle":["audits.deprecations.title"],"lighthouse-core/audits/deprecations.js | description":["audits.deprecations.description"],"lighthouse-core/audits/deprecations.js | displayValue":[{"values":{"itemCount":2},"path":"audits.deprecations.displayValue"}],"lighthouse-core/audits/deprecations.js | columnDeprecate":["audits.deprecations.details.headings[0].text"],"lighthouse-core/audits/deprecations.js | columnLine":["audits.deprecations.details.headings[2].text"],"lighthouse-core/audits/mainthread-work-breakdown.js | failureTitle":["audits[mainthread-work-breakdown].title"],"lighthouse-core/audits/mainthread-work-breakdown.js | description":["audits[mainthread-work-breakdown].description"],"lighthouse-core/audits/mainthread-work-breakdown.js | columnCategory":["audits[mainthread-work-breakdown].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnTimeSpent":["audits[mainthread-work-breakdown].details.headings[1].text","audits[network-rtt].details.headings[1].text","audits[network-server-latency].details.headings[1].text"],"lighthouse-core/audits/bootup-time.js | failureTitle":["audits[bootup-time].title"],"lighthouse-core/audits/bootup-time.js | description":["audits[bootup-time].description"],"lighthouse-core/audits/bootup-time.js | columnTotal":["audits[bootup-time].details.headings[1].text"],"lighthouse-core/audits/bootup-time.js | columnScriptEval":["audits[bootup-time].details.headings[2].text"],"lighthouse-core/audits/bootup-time.js | columnScriptParse":["audits[bootup-time].details.headings[3].text"],"lighthouse-core/audits/uses-rel-preload.js | title":["audits[uses-rel-preload].title"],"lighthouse-core/audits/uses-rel-preload.js | description":["audits[uses-rel-preload].description"],"lighthouse-core/lib/i18n/i18n.js | displayValueMsSavings":[{"values":{"wastedMs":3207},"path":"audits[uses-rel-preload].displayValue"},{"values":{"wastedMs":300},"path":"audits[uses-rel-preconnect].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnWastedBytes":["audits[uses-rel-preload].details.headings[1].label","audits[uses-rel-preconnect].details.headings[1].label","audits[font-display].details.headings[1].text","audits[unused-css-rules].details.headings[2].label"],"lighthouse-core/audits/uses-rel-preconnect.js | title":["audits[uses-rel-preconnect].title"],"lighthouse-core/audits/uses-rel-preconnect.js | description":["audits[uses-rel-preconnect].description"],"lighthouse-core/audits/font-display.js | failureTitle":["audits[font-display].title"],"lighthouse-core/audits/font-display.js | description":["audits[font-display].description"],"lighthouse-core/audits/font-display.js | undeclaredFontURLWarning":[{"values":{"fontURL":"https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBBc4.woff2"},"path":"audits[font-display].warnings[0]"},{"values":{"fontURL":"https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2"},"path":"audits[font-display].warnings[1]"},{"values":{"fontURL":"https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2"},"path":"audits[font-display].warnings[2]"},{"values":{"fontURL":"https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2"},"path":"audits[font-display].warnings[3]"}],"lighthouse-core/audits/network-rtt.js | title":["audits[network-rtt].title"],"lighthouse-core/audits/network-rtt.js | description":["audits[network-rtt].description"],"lighthouse-core/audits/network-server-latency.js | title":["audits[network-server-latency].title"],"lighthouse-core/audits/network-server-latency.js | description":["audits[network-server-latency].description"],"lighthouse-core/audits/offline-start-url.js | failureTitle":["audits[offline-start-url].title"],"lighthouse-core/audits/offline-start-url.js | description":["audits[offline-start-url].description"],"lighthouse-core/audits/performance-budget.js | title":["audits[performance-budget].title"],"lighthouse-core/audits/performance-budget.js | description":["audits[performance-budget].description"],"lighthouse-core/audits/resource-summary.js | title":["audits[resource-summary].title"],"lighthouse-core/audits/resource-summary.js | description":["audits[resource-summary].description"],"lighthouse-core/audits/resource-summary.js | displayValue":[{"values":{"requestCount":80,"byteCount":8616189},"path":"audits[resource-summary].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnResourceType":["audits[resource-summary].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnRequests":["audits[resource-summary].details.headings[1].text"],"lighthouse-core/lib/i18n/i18n.js | columnTransferSize":["audits[resource-summary].details.headings[2].text"],"lighthouse-core/lib/i18n/i18n.js | totalResourceType":["audits[resource-summary].details.items[0].label"],"lighthouse-core/lib/i18n/i18n.js | imageResourceType":["audits[resource-summary].details.items[1].label"],"lighthouse-core/lib/i18n/i18n.js | otherResourceType":["audits[resource-summary].details.items[2].label"],"lighthouse-core/lib/i18n/i18n.js | scriptResourceType":["audits[resource-summary].details.items[3].label"],"lighthouse-core/lib/i18n/i18n.js | fontResourceType":["audits[resource-summary].details.items[4].label"],"lighthouse-core/lib/i18n/i18n.js | stylesheetResourceType":["audits[resource-summary].details.items[5].label"],"lighthouse-core/lib/i18n/i18n.js | documentResourceType":["audits[resource-summary].details.items[6].label"],"lighthouse-core/lib/i18n/i18n.js | mediaResourceType":["audits[resource-summary].details.items[7].label"],"lighthouse-core/lib/i18n/i18n.js | thirdPartyResourceType":["audits[resource-summary].details.items[8].label"],"lighthouse-core/audits/third-party-summary.js | title":["audits[third-party-summary].title"],"lighthouse-core/audits/third-party-summary.js | description":["audits[third-party-summary].description"],"lighthouse-core/audits/third-party-summary.js | displayValue":[{"values":{"timeInMs":81.356},"path":"audits[third-party-summary].displayValue"}],"lighthouse-core/audits/third-party-summary.js | columnThirdParty":["audits[third-party-summary].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnSize":["audits[third-party-summary].details.headings[1].text","audits[uses-long-cache-ttl].details.headings[2].text","audits[total-byte-weight].details.headings[1].text","audits[unused-css-rules].details.headings[1].label"],"lighthouse-core/audits/third-party-summary.js | columnBlockingTime":["audits[third-party-summary].details.headings[2].text"],"lighthouse-core/audits/manual/pwa-cross-browser.js | title":["audits[pwa-cross-browser].title"],"lighthouse-core/audits/manual/pwa-cross-browser.js | description":["audits[pwa-cross-browser].description"],"lighthouse-core/audits/manual/pwa-page-transitions.js | title":["audits[pwa-page-transitions].title"],"lighthouse-core/audits/manual/pwa-page-transitions.js | description":["audits[pwa-page-transitions].description"],"lighthouse-core/audits/manual/pwa-each-page-has-url.js | title":["audits[pwa-each-page-has-url].title"],"lighthouse-core/audits/manual/pwa-each-page-has-url.js | description":["audits[pwa-each-page-has-url].description"],"lighthouse-core/audits/accessibility/accesskeys.js | title":["audits.accesskeys.title"],"lighthouse-core/audits/accessibility/accesskeys.js | description":["audits.accesskeys.description"],"lighthouse-core/audits/accessibility/aria-allowed-attr.js | title":["audits[aria-allowed-attr].title"],"lighthouse-core/audits/accessibility/aria-allowed-attr.js | description":["audits[aria-allowed-attr].description"],"lighthouse-core/audits/accessibility/aria-required-attr.js | title":["audits[aria-required-attr].title"],"lighthouse-core/audits/accessibility/aria-required-attr.js | description":["audits[aria-required-attr].description"],"lighthouse-core/audits/accessibility/aria-required-children.js | title":["audits[aria-required-children].title"],"lighthouse-core/audits/accessibility/aria-required-children.js | description":["audits[aria-required-children].description"],"lighthouse-core/audits/accessibility/aria-required-parent.js | title":["audits[aria-required-parent].title"],"lighthouse-core/audits/accessibility/aria-required-parent.js | description":["audits[aria-required-parent].description"],"lighthouse-core/audits/accessibility/aria-roles.js | title":["audits[aria-roles].title"],"lighthouse-core/audits/accessibility/aria-roles.js | description":["audits[aria-roles].description"],"lighthouse-core/audits/accessibility/aria-valid-attr-value.js | title":["audits[aria-valid-attr-value].title"],"lighthouse-core/audits/accessibility/aria-valid-attr-value.js | description":["audits[aria-valid-attr-value].description"],"lighthouse-core/audits/accessibility/aria-valid-attr.js | title":["audits[aria-valid-attr].title"],"lighthouse-core/audits/accessibility/aria-valid-attr.js | description":["audits[aria-valid-attr].description"],"lighthouse-core/audits/accessibility/audio-caption.js | title":["audits[audio-caption].title"],"lighthouse-core/audits/accessibility/audio-caption.js | description":["audits[audio-caption].description"],"lighthouse-core/audits/accessibility/button-name.js | title":["audits[button-name].title"],"lighthouse-core/audits/accessibility/button-name.js | description":["audits[button-name].description"],"lighthouse-core/audits/accessibility/bypass.js | title":["audits.bypass.title"],"lighthouse-core/audits/accessibility/bypass.js | description":["audits.bypass.description"],"lighthouse-core/audits/accessibility/color-contrast.js | failureTitle":["audits[color-contrast].title"],"lighthouse-core/audits/accessibility/color-contrast.js | description":["audits[color-contrast].description"],"lighthouse-core/audits/accessibility/axe-audit.js | failingElementsHeader":["audits[color-contrast].details.headings[0].text","audits[link-name].details.headings[0].text"],"lighthouse-core/audits/accessibility/definition-list.js | title":["audits[definition-list].title"],"lighthouse-core/audits/accessibility/definition-list.js | description":["audits[definition-list].description"],"lighthouse-core/audits/accessibility/dlitem.js | title":["audits.dlitem.title"],"lighthouse-core/audits/accessibility/dlitem.js | description":["audits.dlitem.description"],"lighthouse-core/audits/accessibility/document-title.js | title":["audits[document-title].title"],"lighthouse-core/audits/accessibility/document-title.js | description":["audits[document-title].description"],"lighthouse-core/audits/accessibility/duplicate-id.js | title":["audits[duplicate-id].title"],"lighthouse-core/audits/accessibility/duplicate-id.js | description":["audits[duplicate-id].description"],"lighthouse-core/audits/accessibility/frame-title.js | title":["audits[frame-title].title"],"lighthouse-core/audits/accessibility/frame-title.js | description":["audits[frame-title].description"],"lighthouse-core/audits/accessibility/html-has-lang.js | title":["audits[html-has-lang].title"],"lighthouse-core/audits/accessibility/html-has-lang.js | description":["audits[html-has-lang].description"],"lighthouse-core/audits/accessibility/html-lang-valid.js | title":["audits[html-lang-valid].title"],"lighthouse-core/audits/accessibility/html-lang-valid.js | description":["audits[html-lang-valid].description"],"lighthouse-core/audits/accessibility/image-alt.js | title":["audits[image-alt].title"],"lighthouse-core/audits/accessibility/image-alt.js | description":["audits[image-alt].description"],"lighthouse-core/audits/accessibility/input-image-alt.js | title":["audits[input-image-alt].title"],"lighthouse-core/audits/accessibility/input-image-alt.js | description":["audits[input-image-alt].description"],"lighthouse-core/audits/accessibility/label.js | title":["audits.label.title"],"lighthouse-core/audits/accessibility/label.js | description":["audits.label.description"],"lighthouse-core/audits/accessibility/layout-table.js | title":["audits[layout-table].title"],"lighthouse-core/audits/accessibility/layout-table.js | description":["audits[layout-table].description"],"lighthouse-core/audits/accessibility/link-name.js | failureTitle":["audits[link-name].title"],"lighthouse-core/audits/accessibility/link-name.js | description":["audits[link-name].description"],"lighthouse-core/audits/accessibility/list.js | title":["audits.list.title"],"lighthouse-core/audits/accessibility/list.js | description":["audits.list.description"],"lighthouse-core/audits/accessibility/listitem.js | title":["audits.listitem.title"],"lighthouse-core/audits/accessibility/listitem.js | description":["audits.listitem.description"],"lighthouse-core/audits/accessibility/meta-refresh.js | title":["audits[meta-refresh].title"],"lighthouse-core/audits/accessibility/meta-refresh.js | description":["audits[meta-refresh].description"],"lighthouse-core/audits/accessibility/meta-viewport.js | title":["audits[meta-viewport].title"],"lighthouse-core/audits/accessibility/meta-viewport.js | description":["audits[meta-viewport].description"],"lighthouse-core/audits/accessibility/object-alt.js | title":["audits[object-alt].title"],"lighthouse-core/audits/accessibility/object-alt.js | description":["audits[object-alt].description"],"lighthouse-core/audits/accessibility/tabindex.js | title":["audits.tabindex.title"],"lighthouse-core/audits/accessibility/tabindex.js | description":["audits.tabindex.description"],"lighthouse-core/audits/accessibility/td-headers-attr.js | title":["audits[td-headers-attr].title"],"lighthouse-core/audits/accessibility/td-headers-attr.js | description":["audits[td-headers-attr].description"],"lighthouse-core/audits/accessibility/th-has-data-cells.js | title":["audits[th-has-data-cells].title"],"lighthouse-core/audits/accessibility/th-has-data-cells.js | description":["audits[th-has-data-cells].description"],"lighthouse-core/audits/accessibility/valid-lang.js | title":["audits[valid-lang].title"],"lighthouse-core/audits/accessibility/valid-lang.js | description":["audits[valid-lang].description"],"lighthouse-core/audits/accessibility/video-caption.js | title":["audits[video-caption].title"],"lighthouse-core/audits/accessibility/video-caption.js | description":["audits[video-caption].description"],"lighthouse-core/audits/accessibility/video-description.js | title":["audits[video-description].title"],"lighthouse-core/audits/accessibility/video-description.js | description":["audits[video-description].description"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | failureTitle":["audits[uses-long-cache-ttl].title"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | description":["audits[uses-long-cache-ttl].description"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | displayValue":[{"values":{"itemCount":23},"path":"audits[uses-long-cache-ttl].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnCacheTTL":["audits[uses-long-cache-ttl].details.headings[1].text"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | failureTitle":["audits[total-byte-weight].title"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | description":["audits[total-byte-weight].description"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | displayValue":[{"values":{"totalBytes":3941355},"path":"audits[total-byte-weight].displayValue"}],"lighthouse-core/audits/byte-efficiency/offscreen-images.js | title":["audits[offscreen-images].title"],"lighthouse-core/audits/byte-efficiency/offscreen-images.js | description":["audits[offscreen-images].description"],"lighthouse-core/audits/byte-efficiency/render-blocking-resources.js | title":["audits[render-blocking-resources].title"],"lighthouse-core/audits/byte-efficiency/render-blocking-resources.js | description":["audits[render-blocking-resources].description"],"lighthouse-core/audits/byte-efficiency/unminified-css.js | title":["audits[unminified-css].title"],"lighthouse-core/audits/byte-efficiency/unminified-css.js | description":["audits[unminified-css].description"],"lighthouse-core/audits/byte-efficiency/unminified-javascript.js | title":["audits[unminified-javascript].title"],"lighthouse-core/audits/byte-efficiency/unminified-javascript.js | description":["audits[unminified-javascript].description"],"lighthouse-core/audits/byte-efficiency/unused-css-rules.js | title":["audits[unused-css-rules].title"],"lighthouse-core/audits/byte-efficiency/unused-css-rules.js | description":["audits[unused-css-rules].description"],"lighthouse-core/lib/i18n/i18n.js | displayValueByteSavings":[{"values":{"wastedBytes":89025},"path":"audits[unused-css-rules].displayValue"}],"lighthouse-core/audits/byte-efficiency/uses-webp-images.js | title":["audits[uses-webp-images].title"],"lighthouse-core/audits/byte-efficiency/uses-webp-images.js | description":["audits[uses-webp-images].description"],"lighthouse-core/audits/byte-efficiency/uses-optimized-images.js | title":["audits[uses-optimized-images].title"],"lighthouse-core/audits/byte-efficiency/uses-optimized-images.js | description":["audits[uses-optimized-images].description"],"lighthouse-core/audits/byte-efficiency/uses-text-compression.js | title":["audits[uses-text-compression].title"],"lighthouse-core/audits/byte-efficiency/uses-text-compression.js | description":["audits[uses-text-compression].description"],"lighthouse-core/audits/byte-efficiency/uses-responsive-images.js | title":["audits[uses-responsive-images].title"],"lighthouse-core/audits/byte-efficiency/uses-responsive-images.js | description":["audits[uses-responsive-images].description"],"lighthouse-core/audits/byte-efficiency/efficient-animated-content.js | title":["audits[efficient-animated-content].title"],"lighthouse-core/audits/byte-efficiency/efficient-animated-content.js | description":["audits[efficient-animated-content].description"],"lighthouse-core/audits/dobetterweb/appcache-manifest.js | title":["audits[appcache-manifest].title"],"lighthouse-core/audits/dobetterweb/appcache-manifest.js | description":["audits[appcache-manifest].description"],"lighthouse-core/audits/dobetterweb/doctype.js | title":["audits.doctype.title"],"lighthouse-core/audits/dobetterweb/doctype.js | description":["audits.doctype.description"],"lighthouse-core/audits/dobetterweb/dom-size.js | title":["audits[dom-size].title"],"lighthouse-core/audits/dobetterweb/dom-size.js | description":["audits[dom-size].description"],"lighthouse-core/audits/dobetterweb/dom-size.js | displayValue":[{"values":{"itemCount":234},"path":"audits[dom-size].displayValue"}],"lighthouse-core/audits/dobetterweb/dom-size.js | columnStatistic":["audits[dom-size].details.headings[0].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | columnElement":["audits[dom-size].details.headings[1].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | columnValue":["audits[dom-size].details.headings[2].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMElements":["audits[dom-size].details.items[0].statistic"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMDepth":["audits[dom-size].details.items[1].statistic"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMWidth":["audits[dom-size].details.items[2].statistic"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | title":["audits[external-anchors-use-rel-noopener].title"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | description":["audits[external-anchors-use-rel-noopener].description"],"lighthouse-core/audits/dobetterweb/geolocation-on-start.js | title":["audits[geolocation-on-start].title"],"lighthouse-core/audits/dobetterweb/geolocation-on-start.js | description":["audits[geolocation-on-start].description"],"lighthouse-core/audits/dobetterweb/no-document-write.js | title":["audits[no-document-write].title"],"lighthouse-core/audits/dobetterweb/no-document-write.js | description":["audits[no-document-write].description"],"lighthouse-core/audits/dobetterweb/no-vulnerable-libraries.js | title":["audits[no-vulnerable-libraries].title"],"lighthouse-core/audits/dobetterweb/no-vulnerable-libraries.js | description":["audits[no-vulnerable-libraries].description"],"lighthouse-core/audits/dobetterweb/js-libraries.js | title":["audits[js-libraries].title"],"lighthouse-core/audits/dobetterweb/js-libraries.js | description":["audits[js-libraries].description"],"lighthouse-core/lib/i18n/i18n.js | columnName":["audits[js-libraries].details.headings[0].text"],"lighthouse-core/audits/dobetterweb/js-libraries.js | columnVersion":["audits[js-libraries].details.headings[1].text"],"lighthouse-core/audits/dobetterweb/notification-on-start.js | title":["audits[notification-on-start].title"],"lighthouse-core/audits/dobetterweb/notification-on-start.js | description":["audits[notification-on-start].description"],"lighthouse-core/audits/dobetterweb/password-inputs-can-be-pasted-into.js | title":["audits[password-inputs-can-be-pasted-into].title"],"lighthouse-core/audits/dobetterweb/password-inputs-can-be-pasted-into.js | description":["audits[password-inputs-can-be-pasted-into].description"],"lighthouse-core/audits/dobetterweb/uses-http2.js | title":["audits[uses-http2].title"],"lighthouse-core/audits/dobetterweb/uses-http2.js | description":["audits[uses-http2].description"],"lighthouse-core/audits/dobetterweb/uses-passive-event-listeners.js | failureTitle":["audits[uses-passive-event-listeners].title"],"lighthouse-core/audits/dobetterweb/uses-passive-event-listeners.js | description":["audits[uses-passive-event-listeners].description"],"lighthouse-core/lib/i18n/i18n.js | columnLocation":["audits[uses-passive-event-listeners].details.headings[1].text"],"lighthouse-core/audits/seo/meta-description.js | title":["audits[meta-description].title"],"lighthouse-core/audits/seo/meta-description.js | description":["audits[meta-description].description"],"lighthouse-core/audits/seo/http-status-code.js | title":["audits[http-status-code].title"],"lighthouse-core/audits/seo/http-status-code.js | description":["audits[http-status-code].description"],"lighthouse-core/audits/seo/font-size.js | title":["audits[font-size].title"],"lighthouse-core/audits/seo/font-size.js | description":["audits[font-size].description"],"lighthouse-core/audits/seo/link-text.js | title":["audits[link-text].title"],"lighthouse-core/audits/seo/link-text.js | description":["audits[link-text].description"],"lighthouse-core/audits/seo/is-crawlable.js | title":["audits[is-crawlable].title"],"lighthouse-core/audits/seo/is-crawlable.js | description":["audits[is-crawlable].description"],"lighthouse-core/audits/seo/robots-txt.js | title":["audits[robots-txt].title"],"lighthouse-core/audits/seo/robots-txt.js | description":["audits[robots-txt].description"],"lighthouse-core/audits/seo/tap-targets.js | title":["audits[tap-targets].title"],"lighthouse-core/audits/seo/tap-targets.js | description":["audits[tap-targets].description"],"lighthouse-core/audits/seo/hreflang.js | title":["audits.hreflang.title"],"lighthouse-core/audits/seo/hreflang.js | description":["audits.hreflang.description"],"lighthouse-core/audits/seo/plugins.js | title":["audits.plugins.title"],"lighthouse-core/audits/seo/plugins.js | description":["audits.plugins.description"],"lighthouse-core/audits/seo/canonical.js | title":["audits.canonical.title"],"lighthouse-core/audits/seo/canonical.js | description":["audits.canonical.description"],"lighthouse-core/audits/seo/manual/structured-data.js | title":["audits[structured-data].title"],"lighthouse-core/audits/seo/manual/structured-data.js | description":["audits[structured-data].description"],"lighthouse-core/config/default-config.js | performanceCategoryTitle":["categories.performance.title"],"lighthouse-core/config/default-config.js | a11yCategoryTitle":["categories.accessibility.title"],"lighthouse-core/config/default-config.js | a11yCategoryDescription":["categories.accessibility.description"],"lighthouse-core/config/default-config.js | a11yCategoryManualDescription":["categories.accessibility.manualDescription"],"lighthouse-core/config/default-config.js | bestPracticesCategoryTitle":["categories[best-practices].title"],"lighthouse-core/config/default-config.js | seoCategoryTitle":["categories.seo.title"],"lighthouse-core/config/default-config.js | seoCategoryDescription":["categories.seo.description"],"lighthouse-core/config/default-config.js | seoCategoryManualDescription":["categories.seo.manualDescription"],"lighthouse-core/config/default-config.js | pwaCategoryTitle":["categories.pwa.title"],"lighthouse-core/config/default-config.js | pwaCategoryDescription":["categories.pwa.description"],"lighthouse-core/config/default-config.js | pwaCategoryManualDescription":["categories.pwa.manualDescription"],"lighthouse-core/config/default-config.js | metricGroupTitle":["categoryGroups.metrics.title"],"lighthouse-core/config/default-config.js | loadOpportunitiesGroupTitle":["categoryGroups[load-opportunities].title"],"lighthouse-core/config/default-config.js | loadOpportunitiesGroupDescription":["categoryGroups[load-opportunities].description"],"lighthouse-core/config/default-config.js | budgetsGroupTitle":["categoryGroups.budgets.title"],"lighthouse-core/config/default-config.js | budgetsGroupDescription":["categoryGroups.budgets.description"],"lighthouse-core/config/default-config.js | diagnosticsGroupTitle":["categoryGroups.diagnostics.title"],"lighthouse-core/config/default-config.js | diagnosticsGroupDescription":["categoryGroups.diagnostics.description"],"lighthouse-core/config/default-config.js | pwaFastReliableGroupTitle":["categoryGroups[pwa-fast-reliable].title"],"lighthouse-core/config/default-config.js | pwaInstallableGroupTitle":["categoryGroups[pwa-installable].title"],"lighthouse-core/config/default-config.js | pwaOptimizedGroupTitle":["categoryGroups[pwa-optimized].title"],"lighthouse-core/config/default-config.js | a11yBestPracticesGroupTitle":["categoryGroups[a11y-best-practices].title"],"lighthouse-core/config/default-config.js | a11yBestPracticesGroupDescription":["categoryGroups[a11y-best-practices].description"],"lighthouse-core/config/default-config.js | a11yColorContrastGroupTitle":["categoryGroups[a11y-color-contrast].title"],"lighthouse-core/config/default-config.js | a11yColorContrastGroupDescription":["categoryGroups[a11y-color-contrast].description"],"lighthouse-core/config/default-config.js | a11yNamesLabelsGroupTitle":["categoryGroups[a11y-names-labels].title"],"lighthouse-core/config/default-config.js | a11yNamesLabelsGroupDescription":["categoryGroups[a11y-names-labels].description"],"lighthouse-core/config/default-config.js | a11yNavigationGroupTitle":["categoryGroups[a11y-navigation].title"],"lighthouse-core/config/default-config.js | a11yNavigationGroupDescription":["categoryGroups[a11y-navigation].description"],"lighthouse-core/config/default-config.js | a11yAriaGroupTitle":["categoryGroups[a11y-aria].title"],"lighthouse-core/config/default-config.js | a11yAriaGroupDescription":["categoryGroups[a11y-aria].description"],"lighthouse-core/config/default-config.js | a11yLanguageGroupTitle":["categoryGroups[a11y-language].title"],"lighthouse-core/config/default-config.js | a11yLanguageGroupDescription":["categoryGroups[a11y-language].description"],"lighthouse-core/config/default-config.js | a11yAudioVideoGroupTitle":["categoryGroups[a11y-audio-video].title"],"lighthouse-core/config/default-config.js | a11yAudioVideoGroupDescription":["categoryGroups[a11y-audio-video].description"],"lighthouse-core/config/default-config.js | a11yTablesListsVideoGroupTitle":["categoryGroups[a11y-tables-lists].title"],"lighthouse-core/config/default-config.js | a11yTablesListsVideoGroupDescription":["categoryGroups[a11y-tables-lists].description"],"lighthouse-core/config/default-config.js | seoMobileGroupTitle":["categoryGroups[seo-mobile].title"],"lighthouse-core/config/default-config.js | seoMobileGroupDescription":["categoryGroups[seo-mobile].description"],"lighthouse-core/config/default-config.js | seoContentGroupTitle":["categoryGroups[seo-content].title"],"lighthouse-core/config/default-config.js | seoContentGroupDescription":["categoryGroups[seo-content].description"],"lighthouse-core/config/default-config.js | seoCrawlingGroupTitle":["categoryGroups[seo-crawl].title"],"lighthouse-core/config/default-config.js | seoCrawlingGroupDescription":["categoryGroups[seo-crawl].description"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__METRICS":["categoryGroups[lighthouse-plugin-publisher-ads-metrics].title"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__ADS_PERFORMANCE":["categoryGroups[lighthouse-plugin-publisher-ads-ads-performance].title"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__ADS_BEST_PRACTICES":["categoryGroups[lighthouse-plugin-publisher-ads-ads-best-practices].title"]}},"stackPacks":[]};</script>
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