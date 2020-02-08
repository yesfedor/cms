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
  <script>window.__LIGHTHOUSE_JSON__ = {"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4021.2 Safari/537.36 OPR/68.0.3590.0 (Edition developer)","environment":{"networkUserAgent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3694.0 Safari/537.36 Chrome-Lighthouse","hostUserAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4021.2 Safari/537.36 OPR/68.0.3590.0 (Edition developer)","benchmarkIndex":1468},"lighthouseVersion":"5.7.0","fetchTime":"2020-02-08T21:45:24.071Z","requestedUrl":"https://tester.iny.su/review","finalUrl":"https://tester.iny.su/review","runWarnings":[],"audits":{"is-on-https":{"id":"is-on-https","title":"Uses HTTPS","description":"All sites should be protected with HTTPS, even ones that don't handle sensitive data. HTTPS prevents intruders from tampering with or passively listening in on the communications between your app and your users, and is a prerequisite for HTTP/2 and many new web platform APIs. [Learn more](https://web.dev/is-on-https).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[]}},"redirects-http":{"id":"redirects-http","title":"Redirects HTTP traffic to HTTPS","description":"If you've already set up HTTPS, make sure that you redirect all HTTP traffic to HTTPS in order to enable secure web features for all your users. [Learn more](https://web.dev/redirects-http).","score":1,"scoreDisplayMode":"binary"},"service-worker":{"id":"service-worker","title":"Does not register a service worker that controls page and `start_url`","description":"The service worker is the technology that enables your app to use many Progressive Web App features, such as offline, add to homescreen, and push notifications. [Learn more](https://web.dev/service-worker).","score":0,"scoreDisplayMode":"binary"},"works-offline":{"id":"works-offline","title":"Current page does not respond with a 200 when offline","description":"If you're building a Progressive Web App, consider using a service worker so that your app can work offline. [Learn more](https://web.dev/works-offline).","score":0,"scoreDisplayMode":"binary","warnings":[]},"viewport":{"id":"viewport","title":"Has a `\u003cmeta name=\"viewport\">` tag with `width` or `initial-scale`","description":"Add a `\u003cmeta name=\"viewport\">` tag to optimize your app for mobile screens. [Learn more](https://web.dev/viewport).","score":1,"scoreDisplayMode":"binary","warnings":[]},"without-javascript":{"id":"without-javascript","title":"Contains some content when JavaScript is not available","description":"Your app should display some content when JavaScript is disabled, even if it's just a warning to the user that JavaScript is required to use the app. [Learn more](https://web.dev/without-javascript).","score":1,"scoreDisplayMode":"binary"},"first-contentful-paint":{"id":"first-contentful-paint","title":"First Contentful Paint","description":"First Contentful Paint marks the time at which the first text or image is painted. [Learn more](https://web.dev/first-contentful-paint).","score":0.16,"scoreDisplayMode":"numeric","numericValue":6110.191,"displayValue":"6.1 s"},"first-meaningful-paint":{"id":"first-meaningful-paint","title":"First Meaningful Paint","description":"First Meaningful Paint measures when the primary content of a page is visible. [Learn more](https://web.dev/first-meaningful-paint).","score":0.15,"scoreDisplayMode":"numeric","numericValue":6185.191,"displayValue":"6.2 s"},"load-fast-enough-for-pwa":{"id":"load-fast-enough-for-pwa","title":"Page load is fast enough on mobile networks","description":"A fast page load over a cellular network ensures a good mobile user experience. [Learn more](https://web.dev/load-fast-enough-for-pwa).","score":1,"scoreDisplayMode":"binary","numericValue":6254.191},"speed-index":{"id":"speed-index","title":"Speed Index","description":"Speed Index shows how quickly the contents of a page are visibly populated. [Learn more](https://web.dev/speed-index).","score":0.22,"scoreDisplayMode":"numeric","numericValue":7980.092214053062,"displayValue":"8.0 s"},"screenshot-thumbnails":{"id":"screenshot-thumbnails","title":"Screenshot Thumbnails","description":"This is what the load of your site looked like.","score":null,"scoreDisplayMode":"informative","details":{"type":"filmstrip","scale":3393,"items":[{"timing":339,"timestamp":1946337190751,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":679,"timestamp":1946337530051,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":1018,"timestamp":1946337869351,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":1357,"timestamp":1946338208651,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":1697,"timestamp":1946338547951,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":2036,"timestamp":1946338887251,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":2375,"timestamp":1946339226551,"data":"data:image/jpeg;base64,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"},{"timing":2714,"timestamp":1946339565851,"data":"data:image/jpeg;base64,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"},{"timing":3054,"timestamp":1946339905151,"data":"data:image/jpeg;base64,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"},{"timing":3393,"timestamp":1946340244451,"data":"data:image/jpeg;base64,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"}]}},"final-screenshot":{"id":"final-screenshot","title":"Final Screenshot","description":"The last screenshot captured of the pageload.","score":null,"scoreDisplayMode":"informative","details":{"type":"screenshot","timing":3410,"timestamp":1946340261157,"data":"data:image/jpeg;base64,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"}},"estimated-input-latency":{"id":"estimated-input-latency","title":"Estimated Input Latency","description":"Estimated Input Latency is an estimate of how long your app takes to respond to user input, in milliseconds, during the busiest 5s window of page load. If your latency is higher than 50 ms, users may perceive your app as laggy. [Learn more](https://web.dev/estimated-input-latency).","score":1,"scoreDisplayMode":"numeric","numericValue":12.8,"displayValue":"10 ms"},"total-blocking-time":{"id":"total-blocking-time","title":"Total Blocking Time","description":"Sum of all time periods between FCP and Time to Interactive, when task length exceeded 50ms, expressed in milliseconds.","score":1,"scoreDisplayMode":"numeric","numericValue":29,"displayValue":"30 ms"},"max-potential-fid":{"id":"max-potential-fid","title":"Max Potential First Input Delay","description":"The maximum potential First Input Delay that your users could experience is the duration, in milliseconds, of the longest task. [Learn more](https://developers.google.com/web/updates/2018/05/first-input-delay).","score":1,"scoreDisplayMode":"numeric","numericValue":66.5,"displayValue":"70 ms"},"errors-in-console":{"id":"errors-in-console","title":"No browser errors logged to the console","description":"Errors logged to the console indicate unresolved problems. They can come from network request failures and other browser concerns. [Learn more](https://web.dev/errors-in-console)","score":1,"scoreDisplayMode":"binary","numericValue":0,"details":{"type":"table","headings":[],"items":[]}},"time-to-first-byte":{"id":"time-to-first-byte","title":"Server response times are low (TTFB)","description":"Time To First Byte identifies the time at which your server sends a response. [Learn more](https://web.dev/time-to-first-byte).","score":1,"scoreDisplayMode":"binary","numericValue":54.016,"displayValue":"Root document took 50 ms","details":{"type":"opportunity","overallSavingsMs":-545.984,"headings":[],"items":[]}},"first-cpu-idle":{"id":"first-cpu-idle","title":"First CPU Idle","description":"First CPU Idle marks the first time at which the page's main thread is quiet enough to handle input.  [Learn more](https://web.dev/first-cpu-idle).","score":0.54,"scoreDisplayMode":"numeric","numericValue":6185.191,"displayValue":"6.2 s"},"interactive":{"id":"interactive","title":"Time to Interactive","description":"Time to interactive is the amount of time it takes for the page to become fully interactive. [Learn more](https://web.dev/interactive).","score":0.62,"scoreDisplayMode":"numeric","numericValue":6254.191,"displayValue":"6.3 s"},"user-timings":{"id":"user-timings","title":"User Timing marks and measures","description":"Consider instrumenting your app with the User Timing API to measure your app's real-world performance during key user experiences. [Learn more](https://web.dev/user-timings).","score":null,"scoreDisplayMode":"notApplicable","details":{"type":"table","headings":[],"items":[]}},"critical-request-chains":{"id":"critical-request-chains","title":"Avoid chaining critical requests","description":"The Critical Request Chains below show you what resources are loaded with a high priority. Consider reducing the length of chains, reducing the download size of resources, or deferring the download of unnecessary resources to improve page load. [Learn more](https://web.dev/critical-request-chains).","score":null,"scoreDisplayMode":"informative","displayValue":"6 chains found","details":{"type":"criticalrequestchain","chains":{"7197CD8B0343EA8D6A1DF276D6220E6C":{"request":{"url":"https://tester.iny.su/review","startTime":1946336.852912,"endTime":1946336.909419,"responseReceivedTime":1946336.9086139998,"transferSize":1621},"children":{"8780.183":{"request":{"url":"https://tester.iny.su/web/css/theme/tester-dark.css?version=32","startTime":1946336.931649,"endTime":1946336.975161,"responseReceivedTime":1946336.974226,"transferSize":214}},"8780.184":{"request":{"url":"https://tester.iny.su/web/css/themes.css?version=10","startTime":1946336.932186,"endTime":1946336.984293,"responseReceivedTime":1946336.9767,"transferSize":743}},"8780.185":{"request":{"url":"https://tester.iny.su/web/css/@offline.css","startTime":1946336.933159,"endTime":1946336.98485,"responseReceivedTime":1946336.977054,"transferSize":1357}},"8780.186":{"request":{"url":"https://tester.iny.su/web/js/core/init.js?version=273","startTime":1946336.935036,"endTime":1946336.985421,"responseReceivedTime":1946336.9844610002,"transferSize":2910}},"8780.187":{"request":{"url":"https://tester.iny.su/web/js/module/@offline.js","startTime":1946336.936107,"endTime":1946337.008734,"responseReceivedTime":1946337.008046,"transferSize":3266}},"8780.191":{"request":{"url":"https://tester.iny.su/web/css/theme/main.css","startTime":1946336.976512,"endTime":1946337.023629,"responseReceivedTime":1946337.0230079999,"transferSize":889}}}},"8780.233":{"request":{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","startTime":1946339.043752,"endTime":1946339.160545,"responseReceivedTime":1946339.124423,"transferSize":67455}},"8780.227":{"request":{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","startTime":1946339.044107,"endTime":1946339.32865,"responseReceivedTime":1946339.219341,"transferSize":65975}},"8780.230":{"request":{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Medium.woff2","startTime":1946339.046078,"endTime":1946339.474894,"responseReceivedTime":1946339.378736,"transferSize":67951}},"8780.224":{"request":{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Light.woff2","startTime":1946339.051609,"endTime":1946339.597806,"responseReceivedTime":1946339.523905,"transferSize":66263}}},"longestChain":{"duration":2744.8940000031143,"length":1,"transferSize":66263}}},"redirects":{"id":"redirects","title":"Avoid multiple page redirects","description":"Redirects introduce additional delays before the page can be loaded. [Learn more](https://web.dev/redirects).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"installable-manifest":{"id":"installable-manifest","title":"Web app manifest meets the installability requirements","description":"Browsers can proactively prompt users to add your app to their homescreen, which can lead to higher engagement. [Learn more](https://web.dev/installable-manifest).","score":1,"scoreDisplayMode":"binary","details":{"type":"debugdata","items":[{"failures":[],"isParseFailure":false,"hasStartUrl":true,"hasIconsAtLeast192px":true,"hasIconsAtLeast512px":true,"hasPWADisplayValue":true,"hasBackgroundColor":true,"hasThemeColor":true,"hasShortName":true,"shortNameLength":true,"hasName":true}]}},"apple-touch-icon":{"id":"apple-touch-icon","title":"Provides a valid `apple-touch-icon`","description":"For ideal appearance on iOS when users add a progressive web app to the home screen, define an `apple-touch-icon`. It must point to a non-transparent 192px (or 180px) square PNG. [Learn More](https://web.dev/apple-touch-icon/).","score":1,"scoreDisplayMode":"binary","warnings":[]},"splash-screen":{"id":"splash-screen","title":"Configured for a custom splash screen","description":"A themed splash screen ensures a high-quality experience when users launch your app from their homescreens. [Learn more](https://web.dev/splash-screen).","score":1,"scoreDisplayMode":"binary","details":{"type":"debugdata","items":[{"failures":[],"isParseFailure":false,"hasStartUrl":true,"hasIconsAtLeast192px":true,"hasIconsAtLeast512px":true,"hasPWADisplayValue":true,"hasBackgroundColor":true,"hasThemeColor":true,"hasShortName":true,"shortNameLength":true,"hasName":true}]}},"themed-omnibox":{"id":"themed-omnibox","title":"Sets a theme color for the address bar.","description":"The browser address bar can be themed to match your site. [Learn more](https://web.dev/themed-omnibox).","score":1,"scoreDisplayMode":"binary","details":{"type":"debugdata","items":[{"failures":[],"themeColor":"#4285f4","isParseFailure":false,"hasStartUrl":true,"hasIconsAtLeast192px":true,"hasIconsAtLeast512px":true,"hasPWADisplayValue":true,"hasBackgroundColor":true,"hasThemeColor":true,"hasShortName":true,"shortNameLength":true,"hasName":true}]}},"content-width":{"id":"content-width","title":"Content is sized correctly for the viewport","description":"If the width of your app's content doesn't match the width of the viewport, your app might not be optimized for mobile screens. [Learn more](https://web.dev/content-width).","score":null,"scoreDisplayMode":"notApplicable"},"image-aspect-ratio":{"id":"image-aspect-ratio","title":"Displays images with correct aspect ratio","description":"Image display dimensions should match natural aspect ratio. [Learn more](https://web.dev/image-aspect-ratio).","score":1,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[],"items":[]}},"deprecations":{"id":"deprecations","title":"Uses deprecated APIs","description":"Deprecated APIs will eventually be removed from the browser. [Learn more](https://web.dev/deprecations).","score":0,"scoreDisplayMode":"binary","displayValue":"2 warnings found","details":{"type":"table","headings":[{"key":"value","itemType":"text","text":"Deprecation / Warning"},{"key":"url","itemType":"url","text":"URL"},{"key":"lineNumber","itemType":"text","text":"Line"}],"items":[{"value":"Synchronous XMLHttpRequest on the main thread is deprecated because of its detrimental effects to the end user's experience. For more help, check https://xhr.spec.whatwg.org/.","url":"https://tester.iny.su/web/js/module/@offline.js","source":"deprecation","lineNumber":1},{"value":"Synchronous XMLHttpRequest on the main thread is deprecated because of its detrimental effects to the end user's experience. For more help, check https://xhr.spec.whatwg.org/.","url":"https://tester.iny.su/web/js/module/@offline.js","source":"deprecation","lineNumber":1}]}},"mainthread-work-breakdown":{"id":"mainthread-work-breakdown","title":"Minimize main-thread work","description":"Consider reducing the time spent parsing, compiling and executing JS. You may find delivering smaller JS payloads helps with this. [Learn more](https://web.dev/mainthread-work-breakdown)","score":0.06,"scoreDisplayMode":"numeric","numericValue":9245.948000000008,"displayValue":"9.2 s","details":{"type":"table","headings":[{"key":"groupLabel","itemType":"text","text":"Category"},{"key":"duration","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"group":"scriptEvaluation","groupLabel":"Script Evaluation","duration":6903.944000000009},{"group":"styleLayout","groupLabel":"Style & Layout","duration":1159.608},{"group":"other","groupLabel":"Other","duration":597.4160000000003},{"group":"paintCompositeRender","groupLabel":"Rendering","duration":215.67599999999982},{"group":"scriptParseCompile","groupLabel":"Script Parsing & Compilation","duration":196.1800000000001},{"group":"parseHTML","groupLabel":"Parse HTML & CSS","duration":142.39999999999998},{"group":"garbageCollection","groupLabel":"Garbage Collection","duration":30.724}]}},"bootup-time":{"id":"bootup-time","title":"Reduce JavaScript execution time","description":"Consider reducing the time spent parsing, compiling, and executing JS. You may find delivering smaller JS payloads helps with this. [Learn more](https://web.dev/bootup-time).","score":0.19,"scoreDisplayMode":"numeric","numericValue":7011.900000000001,"displayValue":"7.0 s","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"total","granularity":1,"itemType":"ms","text":"Total CPU Time"},{"key":"scripting","granularity":1,"itemType":"ms","text":"Script Evaluation"},{"key":"scriptParseCompile","granularity":1,"itemType":"ms","text":"Script Parse"}],"items":[{"url":"https://tester.iny.su/web/vendor/js/jquery.js","total":6950.128000000001,"scripting":6732.688,"scriptParseCompile":166.3720000000001},{"url":"Other","total":2135.844,"scripting":51.72000000000006,"scriptParseCompile":1.808},{"url":"https://tester.iny.su/web/js/core/init.js?version=273","total":71.48799999999999,"scripting":57.52799999999998,"scriptParseCompile":1.784}],"summary":{"wastedMs":7011.900000000001}}},"uses-rel-preload":{"id":"uses-rel-preload","title":"Preload key requests","description":"Consider using `\u003clink rel=preload>` to prioritize fetching resources that are currently requested later in page load. [Learn more](https://web.dev/uses-rel-preload).","score":0.35,"scoreDisplayMode":"numeric","numericValue":1993,"displayValue":"Potential savings of 1,990 ms","details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"wastedMs","valueType":"timespanMs","label":"Potential Savings"}],"items":[{"url":"https://tester.iny.su/web/vendor/css/bootstrap.min.css","wastedMs":1993},{"url":"https://tester.iny.su/web/css/common.css?version=68","wastedMs":1457},{"url":"https://tester.iny.su/web/vendor/css/mdb.min.css","wastedMs":300}],"overallSavingsMs":1993}},"uses-rel-preconnect":{"id":"uses-rel-preconnect","title":"Preconnect to required origins","description":"Consider adding `preconnect` or `dns-prefetch` resource hints to establish early connections to important third-party origins. [Learn more](https://web.dev/uses-rel-preconnect).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"font-display":{"id":"font-display","title":"Ensure text remains visible during webfont load","description":"Leverage the font-display CSS feature to ensure text is user-visible while webfonts are loading. [Learn more](https://web.dev/font-display).","score":0,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"wastedMs","itemType":"ms","text":"Potential Savings"}],"items":[{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","wastedMs":116.79300013929605},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","wastedMs":284.54299992881715},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Medium.woff2","wastedMs":428.8159999996424},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Light.woff2","wastedMs":546.1969999596477}]}},"diagnostics":{"id":"diagnostics","title":"Diagnostics","description":"Collection of useful page vitals.","score":null,"scoreDisplayMode":"informative","details":{"type":"debugdata","items":[{"numRequests":39,"numScripts":3,"numStylesheets":7,"numFonts":4,"numTasks":695,"numTasksOver10ms":10,"numTasksOver25ms":2,"numTasksOver50ms":2,"numTasksOver100ms":1,"numTasksOver500ms":1,"rtt":0.137,"throughput":4048772.6316107265,"maxRtt":0.137,"maxServerLatency":43.191,"totalByteWeight":1011848,"totalTaskTime":2311.487000000002,"mainDocumentTransferSize":1621}]}},"network-requests":{"id":"network-requests","title":"Network Requests","description":"Lists the network requests that were made during page load.","score":null,"scoreDisplayMode":"informative","numericValue":39,"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"startTime","itemType":"ms","granularity":1,"text":"Start Time"},{"key":"endTime","itemType":"ms","granularity":1,"text":"End Time"},{"key":"transferSize","itemType":"bytes","displayUnit":"kb","granularity":1,"text":"Transfer Size"},{"key":"resourceSize","itemType":"bytes","displayUnit":"kb","granularity":1,"text":"Resource Size"},{"key":"statusCode","itemType":"text","text":"Status Code"},{"key":"mimeType","itemType":"text","text":"MIME Type"},{"key":"resourceType","itemType":"text","text":"Resource Type"}],"items":[{"url":"https://tester.iny.su/review","startTime":0,"endTime":56.50700000114739,"transferSize":1621,"resourceSize":8170,"statusCode":200,"mimeType":"text/html","resourceType":"Document"},{"url":"https://tester.iny.su/web/css/theme/tester-dark.css?version=32","startTime":78.73700000345707,"endTime":122.24900000728667,"transferSize":214,"resourceSize":76,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://tester.iny.su/web/css/themes.css?version=10","startTime":79.27400013431907,"endTime":131.38100015930831,"transferSize":743,"resourceSize":10934,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://tester.iny.su/web/css/@offline.css","startTime":80.24700009264052,"endTime":131.9379999767989,"transferSize":1357,"resourceSize":18658,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://tester.iny.su/web/js/core/init.js?version=273","startTime":82.12400018237531,"endTime":132.50900013372302,"transferSize":2910,"resourceSize":21038,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://tester.iny.su/web/js/module/@offline.js","startTime":83.19500018842518,"endTime":155.82200000062585,"transferSize":3266,"resourceSize":18622,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://tester.iny.su/web/css/theme/main.css","startTime":123.60000004991889,"endTime":170.71700002998114,"transferSize":889,"resourceSize":1424,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://tester.iny.su/web/vendor/js/jquery.js","startTime":173.39500016532838,"endTime":251.7280001193285,"transferSize":45348,"resourceSize":176290,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://tester.iny.su/web/file/favicon/main/favicon.ico?option=with_brain_v2","startTime":272.42100005969405,"endTime":329.41000000573695,"transferSize":12562,"resourceSize":24754,"statusCode":200,"mimeType":"image/x-icon","resourceType":"Other"},{"url":"https://tester.iny.su/web/js/include/tester/boot.json?time=1581198324970","startTime":280.508000170812,"endTime":330.26399998925626,"transferSize":1594,"resourceSize":2878,"statusCode":200,"mimeType":"text/plain","resourceType":"XHR"},{"url":"https://tester.iny.su/web/vendor/css/bootstrap.min.css","startTime":336.7260000668466,"endTime":416.15900001488626,"transferSize":23361,"resourceSize":311516,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://tester.iny.su/web/vendor/css/mdb.min.css","startTime":337.883000029251,"endTime":2084.921000059694,"transferSize":67558,"resourceSize":1236002,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://tester.iny.su/web/css/common.css?version=68","startTime":338.8249999843538,"endTime":526.2840001378208,"transferSize":679,"resourceSize":1004,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://tester.iny.su/web/vendor/js/bootstrap.min.js","startTime":345.57000012136996,"endTime":562.0010001584888,"transferSize":15580,"resourceSize":116144,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/vendor/js/mdb.min.js","startTime":572.0650001894683,"endTime":763.0810001865029,"transferSize":121065,"resourceSize":820606,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/vendor/js/popper.min.js","startTime":815.5660000629723,"endTime":855.6719999760389,"transferSize":7494,"resourceSize":41074,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/vendor/js/icon.js","startTime":861.8290000595152,"endTime":1531.6139999777079,"transferSize":413457,"resourceSize":2263692,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/js/tpl/main.tpl.js?version=64","startTime":1573.5200000926852,"endTime":1613.0350001621991,"transferSize":1377,"resourceSize":9932,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/js/module/main.style.js?version=64","startTime":1616.7560000903904,"endTime":1656.5310000441968,"transferSize":1327,"resourceSize":9184,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/js/core/dateParse.js?version=8","startTime":1661.8280000984669,"endTime":1701.3660001102835,"transferSize":670,"resourceSize":3250,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/js/core/navigation.js?version=69","startTime":1705.9280001558363,"endTime":1746.3579999748617,"transferSize":2138,"resourceSize":17324,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/api.php?_action=getWarp&v=0.1","startTime":1752.92900018394,"endTime":1876.3560000807047,"transferSize":1355,"resourceSize":11430,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://tester.iny.su/web/js/module/forms.js?version=64","startTime":1756.6339999902993,"endTime":1795.8700000308454,"transferSize":1180,"resourceSize":1982,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/js/module/userApi.js?version=64","startTime":1799.2400000803173,"endTime":1839.0160000417382,"transferSize":1985,"resourceSize":13756,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/js/core/languages.js?version=65","startTime":1846.0910001304,"endTime":1885.0879999808967,"transferSize":1073,"resourceSize":6494,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/api.php?_action=lang/get&v=0.1&language=ru","startTime":1889.1930000390857,"endTime":1957.0920001715422,"transferSize":1783,"resourceSize":8006,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://tester.iny.su/web/js/module/fn.js?version=64","startTime":1895.0500001665205,"endTime":1934.554000152275,"transferSize":1566,"resourceSize":4310,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/web/js/module/law-manager.js?version=7","startTime":1937.908000079915,"endTime":1977.8750000987202,"transferSize":1575,"resourceSize":7936,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"XHR"},{"url":"https://tester.iny.su/api.php?_action=getHeader&v=0.1&domain=tester.iny.su&type=user","startTime":1980.9570000506938,"endTime":2052.2150001488626,"transferSize":605,"resourceSize":1556,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://tester.iny.su/api.php?_action=getFooter&v=0.1&domain=tester.iny.su&type=none","startTime":1990.290000103414,"endTime":2058.4720000624657,"transferSize":220,"resourceSize":76,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://tester.iny.su/web/file/favicon/main/favicon.ico?option=with_brain_v2","startTime":1999.2130000609905,"endTime":2000.9660001378506,"transferSize":0,"resourceSize":24754,"statusCode":200,"mimeType":"image/x-icon","resourceType":"Other"},{"url":"https://tester.iny.su/uc/f5d1278e8109edd94e1e4197e04873b9/5dd2199a.png","startTime":2007.4540001805872,"endTime":2046.2760000955313,"transferSize":7044,"resourceSize":13728,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://tester.iny.su/api.php?_action=checker&v=0.1","startTime":2129.452000139281,"endTime":2190.1190001517534,"transferSize":304,"resourceSize":204,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","startTime":2190.8400000538677,"endTime":2307.6330001931638,"transferSize":67455,"resourceSize":99952,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","startTime":2191.1950001958758,"endTime":2475.738000124693,"transferSize":65975,"resourceSize":98472,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Medium.woff2","startTime":2193.1660000700504,"endTime":2621.9820000696927,"transferSize":67951,"resourceSize":100448,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Light.woff2","startTime":2198.6970000434667,"endTime":2744.8940000031143,"transferSize":66263,"resourceSize":98760,"statusCode":200,"mimeType":"application/font-woff2","resourceType":"Font"},{"url":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjw","startTime":3084.5060001593083,"endTime":3084.70100001432,"transferSize":0,"resourceSize":1078,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://tester.iny.su/api.php?_action=checker&v=0.1","startTime":4344.611000036821,"endTime":4404.67800013721,"transferSize":304,"resourceSize":204,"statusCode":200,"mimeType":"text/html","resourceType":"XHR"}]}},"network-rtt":{"id":"network-rtt","title":"Network Round Trip Times","description":"Network round trip times (RTT) have a large impact on performance. If the RTT to an origin is high, it's an indication that servers closer to the user could improve performance. [Learn more](https://hpbn.co/primer-on-latency-and-bandwidth/).","score":null,"scoreDisplayMode":"informative","numericValue":0.137,"displayValue":"0 ms","details":{"type":"table","headings":[{"key":"origin","itemType":"text","text":"URL"},{"key":"rtt","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"origin":"https://tester.iny.su","rtt":0.137}]}},"network-server-latency":{"id":"network-server-latency","title":"Server Backend Latencies","description":"Server latencies can impact web performance. If the server latency of an origin is high, it's an indication the server is overloaded or has poor backend performance. [Learn more](https://hpbn.co/primer-on-web-performance/#analyzing-the-resource-waterfall).","score":null,"scoreDisplayMode":"informative","numericValue":43.191,"displayValue":"40 ms","details":{"type":"table","headings":[{"key":"origin","itemType":"text","text":"URL"},{"key":"serverResponseTime","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"origin":"https://tester.iny.su","serverResponseTime":43.191}]}},"main-thread-tasks":{"id":"main-thread-tasks","title":"Tasks","description":"Lists the toplevel main thread tasks that executed during page load.","score":null,"scoreDisplayMode":"informative","numericValue":38,"details":{"type":"table","headings":[{"key":"startTime","itemType":"ms","granularity":1,"text":"Start Time"},{"key":"duration","itemType":"ms","granularity":1,"text":"End Time"}],"items":[{"duration":5.898,"startTime":75.699},{"duration":20.423,"startTime":87.487},{"duration":13.326,"startTime":181.263},{"duration":15.681,"startTime":263.721},{"duration":6.288,"startTime":283.984},{"duration":1662.473,"startTime":340.741},{"duration":9.149,"startTime":2009.606},{"duration":58.694,"startTime":2021.436},{"duration":6.835,"startTime":2102.371},{"duration":6.438,"startTime":2109.217},{"duration":21.519,"startTime":2115.673},{"duration":7.904,"startTime":2141.461},{"duration":23.652,"startTime":2154.094},{"duration":20.964,"startTime":2177.785},{"duration":5.58,"startTime":2202.796},{"duration":12.428,"startTime":2208.394},{"duration":7.327,"startTime":2232.634},{"duration":6.616,"startTime":2240.396},{"duration":8.339,"startTime":2259.09},{"duration":6.927,"startTime":2286.234},{"duration":9.832,"startTime":2312.321},{"duration":6.659,"startTime":2325.909},{"duration":10.178,"startTime":2343.643},{"duration":6.955,"startTime":2356.016},{"duration":7.505,"startTime":2370.025},{"duration":6.901,"startTime":2386.412},{"duration":6.511,"startTime":2402.993},{"duration":6.312,"startTime":2419.875},{"duration":7.547,"startTime":2436.476},{"duration":6.193,"startTime":2453.683},{"duration":5.957,"startTime":2469.887},{"duration":8.476,"startTime":2489.421},{"duration":8.78,"startTime":2637.144},{"duration":7.234,"startTime":2770.558},{"duration":6.558,"startTime":3089.718},{"duration":5.88,"startTime":3137.52},{"duration":7.428,"startTime":3165.731},{"duration":6.747,"startTime":3177.226}]}},"metrics":{"id":"metrics","title":"Metrics","description":"Collects all available metrics.","score":null,"scoreDisplayMode":"informative","numericValue":6254.191,"details":{"type":"debugdata","items":[{"firstContentfulPaint":6110,"firstMeaningfulPaint":6185,"firstCPUIdle":6185,"interactive":6254,"speedIndex":7980,"estimatedInputLatency":13,"totalBlockingTime":29,"observedNavigationStart":0,"observedNavigationStartTs":1946336851451,"observedFirstPaint":2176,"observedFirstPaintTs":1946339027583,"observedFirstContentfulPaint":2176,"observedFirstContentfulPaintTs":1946339027583,"observedFirstMeaningfulPaint":2176,"observedFirstMeaningfulPaintTs":1946339027583,"observedLargestContentfulPaint":2293,"observedLargestContentfulPaintTs":1946339144243,"observedTraceEnd":3540,"observedTraceEndTs":1946340391749,"observedLoad":271,"observedLoadTs":1946337122823,"observedDomContentLoaded":185,"observedDomContentLoadedTs":1946337036346,"observedFirstVisualChange":2159,"observedFirstVisualChangeTs":1946339010451,"observedLastVisualChange":3393,"observedLastVisualChangeTs":1946340244451,"observedSpeedIndex":2380,"observedSpeedIndexTs":1946339231607},{"lcpInvalidated":false}]}},"offline-start-url":{"id":"offline-start-url","title":"`start_url` does not respond with a 200 when offline","description":"A service worker enables your web app to be reliable in unpredictable network conditions. [Learn more](https://web.dev/offline-start-url).","score":0,"scoreDisplayMode":"binary","explanation":"Timed out waiting for start_url to respond.","warnings":["Lighthouse couldn't read the `start_url` from the manifest. As a result, the `start_url` was assumed to be the document's URL. Error message: 'ERROR: start_url must be same-origin as document'."]},"performance-budget":{"id":"performance-budget","title":"Performance budget","description":"Keep the quantity and size of network requests under the targets set by the provided performance budget. [Learn more](https://developers.google.com/web/tools/lighthouse/audits/budgets).","score":null,"scoreDisplayMode":"notApplicable"},"resource-summary":{"id":"resource-summary","title":"Keep request counts low and transfer sizes small","description":"To set budgets for the quantity and size of page resources, add a budget.json file. [Learn more](https://developers.google.com/web/tools/lighthouse/audits/budgets).","score":null,"scoreDisplayMode":"informative","displayValue":"39 requests • 988 KB","details":{"type":"table","headings":[{"key":"label","itemType":"text","text":"Resource Type"},{"key":"requestCount","itemType":"numeric","text":"Requests"},{"key":"size","itemType":"bytes","text":"Transfer Size"}],"items":[{"resourceType":"total","label":"Total","requestCount":39,"size":1011848},{"resourceType":"other","label":"Other","requestCount":22,"size":589214},{"resourceType":"font","label":"Font","requestCount":4,"size":267644},{"resourceType":"stylesheet","label":"Stylesheet","requestCount":7,"size":94801},{"resourceType":"script","label":"Script","requestCount":3,"size":51524},{"resourceType":"image","label":"Image","requestCount":2,"size":7044},{"resourceType":"document","label":"Document","requestCount":1,"size":1621},{"resourceType":"media","label":"Media","requestCount":0,"size":0},{"resourceType":"third-party","label":"Third-party","requestCount":1,"size":0}]}},"third-party-summary":{"id":"third-party-summary","title":"Minimize third-party usage","description":"Third-party code can significantly impact load performance. Limit the number of redundant third-party providers and try to load third-party code after your page has primarily finished loading. [Learn more](https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/loading-third-party-javascript/).","score":null,"scoreDisplayMode":"notApplicable"},"pwa-cross-browser":{"id":"pwa-cross-browser","title":"Site works cross-browser","description":"To reach the most number of users, sites should work across every major browser. [Learn more](https://web.dev/pwa-cross-browser).","score":null,"scoreDisplayMode":"manual"},"pwa-page-transitions":{"id":"pwa-page-transitions","title":"Page transitions don't feel like they block on the network","description":"Transitions should feel snappy as you tap around, even on a slow network. This experience is key to a user's perception of performance. [Learn more](https://web.dev/pwa-page-transitions).","score":null,"scoreDisplayMode":"manual"},"pwa-each-page-has-url":{"id":"pwa-each-page-has-url","title":"Each page has a URL","description":"Ensure individual pages are deep linkable via URL and that URLs are unique for the purpose of shareability on social media. [Learn more](https://web.dev/pwa-each-page-has-url).","score":null,"scoreDisplayMode":"manual"},"accesskeys":{"id":"accesskeys","title":"`[accesskey]` values are unique","description":"Access keys let users quickly focus a part of the page. For proper navigation, each access key must be unique. [Learn more](https://web.dev/accesskeys/).","score":null,"scoreDisplayMode":"notApplicable"},"aria-allowed-attr":{"id":"aria-allowed-attr","title":"`[aria-*]` attributes match their roles","description":"Each ARIA `role` supports a specific subset of `aria-*` attributes. Mismatching these invalidates the `aria-*` attributes. [Learn more](https://web.dev/aria-allowed-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-attr":{"id":"aria-required-attr","title":"`[role]`s have all required `[aria-*]` attributes","description":"Some ARIA roles have required attributes that describe the state of the element to screen readers. [Learn more](https://web.dev/aria-required-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-children":{"id":"aria-required-children","title":"Elements with an ARIA `[role]` that require children to contain a specific `[role]` have all required children.","description":"Some ARIA parent roles must contain specific child roles to perform their intended accessibility functions. [Learn more](https://web.dev/aria-required-children/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-parent":{"id":"aria-required-parent","title":"`[role]`s are contained by their required parent element","description":"Some ARIA child roles must be contained by specific parent roles to properly perform their intended accessibility functions. [Learn more](https://web.dev/aria-required-parent/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-roles":{"id":"aria-roles","title":"`[role]` values are valid","description":"ARIA roles must have valid values in order to perform their intended accessibility functions. [Learn more](https://web.dev/aria-roles/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-valid-attr-value":{"id":"aria-valid-attr-value","title":"`[aria-*]` attributes have valid values","description":"Assistive technologies, like screen readers, can't interpret ARIA attributes with invalid values. [Learn more](https://web.dev/aria-valid-attr-value/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-valid-attr":{"id":"aria-valid-attr","title":"`[aria-*]` attributes are valid and not misspelled","description":"Assistive technologies, like screen readers, can't interpret ARIA attributes with invalid names. [Learn more](https://web.dev/aria-valid-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"audio-caption":{"id":"audio-caption","title":"`\u003caudio>` elements contain a `\u003ctrack>` element with `[kind=\"captions\"]`","description":"Captions make audio elements usable for deaf or hearing-impaired users, providing critical information such as who is talking, what they're saying, and other non-speech information. [Learn more](https://web.dev/audio-caption/).","score":null,"scoreDisplayMode":"notApplicable"},"button-name":{"id":"button-name","title":"Buttons have an accessible name","description":"When a button doesn't have an accessible name, screen readers announce it as \"button\", making it unusable for users who rely on screen readers. [Learn more](https://web.dev/button-name/).","score":null,"scoreDisplayMode":"notApplicable"},"bypass":{"id":"bypass","title":"The page contains a heading, skip link, or landmark region","description":"Adding ways to bypass repetitive content lets keyboard users navigate the page more efficiently. [Learn more](https://web.dev/bypass/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"color-contrast":{"id":"color-contrast","title":"Background and foreground colors do not have a sufficient contrast ratio.","description":"Low-contrast text is difficult or impossible for many users to read. [Learn more](https://web.dev/color-contrast/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"b","path":"1,HTML,1,BODY,0,APPLICATION,0,HEADER,0,NAV,0,DIV,0,A,0,B","snippet":"\u003cb class=\"theme-logo\">INY\u003c/b>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.56 (foreground color: #ffffff, background color: #4285f4, font size: 15.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"INY"}},{"node":{"type":"node","selector":".waves-effect","path":"1,HTML,1,BODY,0,APPLICATION,0,HEADER,0,NAV,0,DIV,1,UL,0,LI,0,A","snippet":"\u003ca href=\"/info\" class=\"theme-nav-link nav-link waves-effect waves-light\" onclick=\"return nav.go(this);\">Как пользоваться?\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.56 (foreground color: #ffffff, background color: #4285f4, font size: 12.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Как пользоваться?"}},{"node":{"type":"node","selector":"a[target=\"_blank\"]","path":"1,HTML,1,BODY,0,APPLICATION,0,HEADER,0,NAV,0,DIV,2,UL,0,LI,0,A","snippet":"\u003ca onclick=\"return nav.away(this);\" target=\"_blank\" class=\"theme-nav-link nav-link\" href=\"//iny.su\">Назад\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.56 (foreground color: #ffffff, background color: #4285f4, font size: 12.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Назад"}},{"node":{"type":"node","selector":"#cards-new > .col-md-6.col-lg-4.p-2 > .card.p-2 > .card-body.p-2.text-center > .btn.btn-rounded.btn-primary","path":"1,HTML,1,BODY,0,APPLICATION,1,MAIN,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,1,DIV,2,A","snippet":"\u003ca onclick=\"return nav.go(this);\" href=\"/test5\" class=\"btn btn-rounded btn-primary\">Пройти тест\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.56 (foreground color: #ffffff, background color: #4285f4, font size: 9.7pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"ПРОЙТИ ТЕСТ"}},{"node":{"type":"node","selector":"#cards-new-my > .col-md-6.col-lg-4.p-2 > .card.p-2 > .card-body.p-2.text-center > .btn.btn-rounded.btn-primary","path":"1,HTML,1,BODY,0,APPLICATION,1,MAIN,0,DIV,1,DIV,2,DIV,1,DIV,0,DIV,0,DIV,1,DIV,2,A","snippet":"\u003ca onclick=\"return nav.go(this);\" href=\"/test5\" class=\"btn btn-rounded btn-primary\">Пройти тест\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.56 (foreground color: #ffffff, background color: #4285f4, font size: 9.7pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"ПРОЙТИ ТЕСТ"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.color","wcag2aa","wcag143"]}}},"definition-list":{"id":"definition-list","title":"`\u003cdl>`'s contain only properly-ordered `\u003cdt>` and `\u003cdd>` groups, `\u003cscript>` or `\u003ctemplate>` elements.","description":"When definition lists are not properly marked up, screen readers may produce confusing or inaccurate output. [Learn more](https://web.dev/definition-list/).","score":null,"scoreDisplayMode":"notApplicable"},"dlitem":{"id":"dlitem","title":"Definition list items are wrapped in `\u003cdl>` elements","description":"Definition list items (`\u003cdt>` and `\u003cdd>`) must be wrapped in a parent `\u003cdl>` element to ensure that screen readers can properly announce them. [Learn more](https://web.dev/dlitem/).","score":null,"scoreDisplayMode":"notApplicable"},"document-title":{"id":"document-title","title":"Document has a `\u003ctitle>` element","description":"The title gives screen reader users an overview of the page, and search engine users rely on it heavily to determine if a page is relevant to their search. [Learn more](https://web.dev/document-title/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"duplicate-id":{"id":"duplicate-id","title":"`[id]` attributes on the page are unique","description":"The value of an id attribute must be unique to prevent other instances from being overlooked by assistive technologies. [Learn more](https://web.dev/duplicate-id/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"frame-title":{"id":"frame-title","title":"`\u003cframe>` or `\u003ciframe>` elements have a title","description":"Screen reader users rely on frame titles to describe the contents of frames. [Learn more](https://web.dev/frame-title/).","score":null,"scoreDisplayMode":"notApplicable"},"html-has-lang":{"id":"html-has-lang","title":"`\u003chtml>` element has a `[lang]` attribute","description":"If a page doesn't specify a lang attribute, a screen reader assumes that the page is in the default language that the user chose when setting up the screen reader. If the page isn't actually in the default language, then the screen reader might not announce the page's text correctly. [Learn more](https://web.dev/html-has-lang/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"html-lang-valid":{"id":"html-lang-valid","title":"`\u003chtml>` element has a valid value for its `[lang]` attribute","description":"Specifying a valid [BCP 47 language](https://www.w3.org/International/questions/qa-choosing-language-tags#question) helps screen readers announce text properly. [Learn more](https://web.dev/html-lang-valid/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"image-alt":{"id":"image-alt","title":"Image elements have `[alt]` attributes","description":"Informative elements should aim for short, descriptive alternate text. Decorative elements can be ignored with an empty alt attribute. [Learn more](https://web.dev/image-alt/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"input-image-alt":{"id":"input-image-alt","title":"`\u003cinput type=\"image\">` elements have `[alt]` text","description":"When an image is being used as an `\u003cinput>` button, providing alternative text can help screen reader users understand the purpose of the button. [Learn more](https://web.dev/input-image-alt/).","score":null,"scoreDisplayMode":"notApplicable"},"label":{"id":"label","title":"Form elements have associated labels","description":"Labels ensure that form controls are announced properly by assistive technologies, like screen readers. [Learn more](https://web.dev/label/).","score":null,"scoreDisplayMode":"notApplicable"},"layout-table":{"id":"layout-table","title":"Presentational `\u003ctable>` elements avoid using `\u003cth>`, `\u003ccaption>` or the `[summary]` attribute.","description":"A table being used for layout purposes should not include data elements, such as the th or caption elements or the summary attribute, because this can create a confusing experience for screen reader users. [Learn more](https://web.dev/layout-table/).","score":null,"scoreDisplayMode":"notApplicable"},"link-name":{"id":"link-name","title":"Links have a discernible name","description":"Link text (and alternate text for images, when used as links) that is discernible, unique, and focusable improves the navigation experience for screen reader users. [Learn more](https://web.dev/link-name/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"list":{"id":"list","title":"Lists contain only `\u003cli>` elements and script supporting elements (`\u003cscript>` and `\u003ctemplate>`).","description":"Screen readers have a specific way of announcing lists. Ensuring proper list structure aids screen reader output. [Learn more](https://web.dev/list/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"listitem":{"id":"listitem","title":"List items (`\u003cli>`) are contained within `\u003cul>` or `\u003col>` parent elements","description":"Screen readers require list items (`\u003cli>`) to be contained within a parent `\u003cul>` or `\u003col>` to be announced properly. [Learn more](https://web.dev/listitem/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"meta-refresh":{"id":"meta-refresh","title":"The document does not use `\u003cmeta http-equiv=\"refresh\">`","description":"Users do not expect a page to refresh automatically, and doing so will move focus back to the top of the page. This may create a frustrating or confusing experience. [Learn more](https://web.dev/meta-refresh/).","score":null,"scoreDisplayMode":"notApplicable"},"meta-viewport":{"id":"meta-viewport","title":"`[user-scalable=\"no\"]` is not used in the `\u003cmeta name=\"viewport\">` element and the `[maximum-scale]` attribute is not less than 5.","description":"Disabling zooming is problematic for users with low vision who rely on screen magnification to properly see the contents of a web page. [Learn more](https://web.dev/meta-viewport/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"object-alt":{"id":"object-alt","title":"`\u003cobject>` elements have `[alt]` text","description":"Screen readers cannot translate non-text content. Adding alt text to `\u003cobject>` elements helps screen readers convey meaning to users. [Learn more](https://web.dev/object-alt/).","score":null,"scoreDisplayMode":"notApplicable"},"tabindex":{"id":"tabindex","title":"No element has a `[tabindex]` value greater than 0","description":"A value greater than 0 implies an explicit navigation ordering. Although technically valid, this often creates frustrating experiences for users who rely on assistive technologies. [Learn more](https://web.dev/tabindex/).","score":null,"scoreDisplayMode":"notApplicable"},"td-headers-attr":{"id":"td-headers-attr","title":"Cells in a `\u003ctable>` element that use the `[headers]` attribute refer to table cells within the same table.","description":"Screen readers have features to make navigating tables easier. Ensuring `\u003ctd>` cells using the `[headers]` attribute only refer to other cells in the same table may improve the experience for screen reader users. [Learn more](https://web.dev/td-headers-attr/).","score":null,"scoreDisplayMode":"notApplicable"},"th-has-data-cells":{"id":"th-has-data-cells","title":"`\u003cth>` elements and elements with `[role=\"columnheader\"/\"rowheader\"]` have data cells they describe.","description":"Screen readers have features to make navigating tables easier. Ensuring table headers always refer to some set of cells may improve the experience for screen reader users. [Learn more](https://web.dev/th-has-data-cells/).","score":null,"scoreDisplayMode":"notApplicable"},"valid-lang":{"id":"valid-lang","title":"`[lang]` attributes have a valid value","description":"Specifying a valid [BCP 47 language](https://www.w3.org/International/questions/qa-choosing-language-tags#question) on elements helps ensure that text is pronounced correctly by a screen reader. [Learn more](https://web.dev/valid-lang/).","score":null,"scoreDisplayMode":"notApplicable"},"video-caption":{"id":"video-caption","title":"`\u003cvideo>` elements contain a `\u003ctrack>` element with `[kind=\"captions\"]`","description":"When a video provides a caption it is easier for deaf and hearing impaired users to access its information. [Learn more](https://web.dev/video-caption/).","score":null,"scoreDisplayMode":"notApplicable"},"video-description":{"id":"video-description","title":"`\u003cvideo>` elements contain a `\u003ctrack>` element with `[kind=\"description\"]`","description":"Audio descriptions provide relevant information for videos that dialogue cannot, such as facial expressions and scenes. [Learn more](https://web.dev/video-description/).","score":null,"scoreDisplayMode":"notApplicable"},"custom-controls-labels":{"id":"custom-controls-labels","title":"Custom controls have associated labels","description":"Custom interactive controls have associated labels, provided by aria-label or aria-labelledby. [Learn more](https://web.dev/custom-controls-labels/).","score":null,"scoreDisplayMode":"manual"},"custom-controls-roles":{"id":"custom-controls-roles","title":"Custom controls have ARIA roles","description":"Custom interactive controls have appropriate ARIA roles. [Learn more](https://web.dev/custom-control-roles/).","score":null,"scoreDisplayMode":"manual"},"focus-traps":{"id":"focus-traps","title":"User focus is not accidentally trapped in a region","description":"A user can tab into and out of any control or region without accidentally trapping their focus. [Learn more](https://web.dev/focus-traps/).","score":null,"scoreDisplayMode":"manual"},"focusable-controls":{"id":"focusable-controls","title":"Interactive controls are keyboard focusable","description":"Custom interactive controls are keyboard focusable and display a focus indicator. [Learn more](https://web.dev/focusable-controls/).","score":null,"scoreDisplayMode":"manual"},"heading-levels":{"id":"heading-levels","title":"Headings don't skip levels","description":"Headings are used to create an outline for the page and heading levels are not skipped. [Learn more](https://web.dev/heading-levels/).","score":null,"scoreDisplayMode":"manual"},"interactive-element-affordance":{"id":"interactive-element-affordance","title":"Interactive elements indicate their purpose and state","description":"Interactive elements, such as links and buttons, should indicate their state and be distinguishable from non-interactive elements. [Learn more](https://web.dev/interactive-element-affordance/).","score":null,"scoreDisplayMode":"manual"},"logical-tab-order":{"id":"logical-tab-order","title":"The page has a logical tab order","description":"Tabbing through the page follows the visual layout. Users cannot focus elements that are offscreen. [Learn more](https://web.dev/logical-tab-order/).","score":null,"scoreDisplayMode":"manual"},"managed-focus":{"id":"managed-focus","title":"The user's focus is directed to new content added to the page","description":"If new content, such as a dialog, is added to the page, the user's focus is directed to it. [Learn more](https://web.dev/managed-focus/).","score":null,"scoreDisplayMode":"manual"},"offscreen-content-hidden":{"id":"offscreen-content-hidden","title":"Offscreen content is hidden from assistive technology","description":"Offscreen content is hidden with display: none or aria-hidden=true. [Learn more](https://web.dev/offscreen-content-hidden/).","score":null,"scoreDisplayMode":"manual"},"use-landmarks":{"id":"use-landmarks","title":"HTML5 landmark elements are used to improve navigation","description":"Landmark elements (\u003cmain>, \u003cnav>, etc.) are used to improve the keyboard navigation of the page for assistive technology. [Learn more](https://web.dev/use-landmarks/).","score":null,"scoreDisplayMode":"manual"},"visual-order-follows-dom":{"id":"visual-order-follows-dom","title":"Visual order on the page follows DOM order","description":"DOM order matches the visual order, improving navigation for assistive technology. [Learn more](https://web.dev/visual-order-follows-dom/).","score":null,"scoreDisplayMode":"manual"},"uses-long-cache-ttl":{"id":"uses-long-cache-ttl","title":"Serve static assets with an efficient cache policy","description":"A long cache lifetime can speed up repeat visits to your page. [Learn more](https://web.dev/uses-long-cache-ttl).","score":0.85,"scoreDisplayMode":"numeric","numericValue":39278.866480446915,"displayValue":"15 resources found","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"cacheLifetimeMs","itemType":"ms","text":"Cache TTL","displayUnit":"duration"},{"key":"totalBytes","itemType":"bytes","text":"Size","displayUnit":"kb","granularity":1}],"items":[{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Medium.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":67951,"wastedBytes":6339.562569832401},{"url":"https://tester.iny.su/web/vendor/css/mdb.min.css","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":67558,"wastedBytes":6302.897206703909},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":67455,"wastedBytes":6293.2877094972055},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Light.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":66263,"wastedBytes":6182.07877094972},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":65975,"wastedBytes":6155.2094972067025},{"url":"https://tester.iny.su/web/vendor/js/jquery.js","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":45348,"wastedBytes":4230.7910614525135},{"url":"https://tester.iny.su/web/vendor/css/bootstrap.min.css","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":23361,"wastedBytes":2179.4899441340776},{"url":"https://tester.iny.su/uc/f5d1278e8109edd94e1e4197e04873b9/5dd2199a.png","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":7044,"wastedBytes":657.1776536312848},{"url":"https://tester.iny.su/web/js/module/@offline.js","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":3266,"wastedBytes":304.70502793296083},{"url":"https://tester.iny.su/web/js/core/init.js?version=273","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":2910,"wastedBytes":271.4916201117318},{"url":"https://tester.iny.su/web/css/@offline.css","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":1357,"wastedBytes":126.60279329608936},{"url":"https://tester.iny.su/web/css/theme/main.css","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":889,"wastedBytes":82.94022346368713},{"url":"https://tester.iny.su/web/css/themes.css?version=10","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":743,"wastedBytes":69.31899441340781},{"url":"https://tester.iny.su/web/css/common.css?version=68","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":679,"wastedBytes":63.34804469273742},{"url":"https://tester.iny.su/web/css/theme/tester-dark.css?version=32","debugData":{"type":"debugdata","max-age":2678400},"cacheLifetimeMs":2678400000,"cacheHitProbability":0.9067039106145252,"totalBytes":214,"wastedBytes":19.965363128491617}],"summary":{"wastedBytes":39278.866480446915}}},"total-byte-weight":{"id":"total-byte-weight","title":"Avoids enormous network payloads","description":"Large network payloads cost users real money and are highly correlated with long load times. [Learn more](https://web.dev/total-byte-weight).","score":1,"scoreDisplayMode":"numeric","numericValue":1011848,"displayValue":"Total size was 988 KB","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"totalBytes","itemType":"bytes","text":"Size"}],"items":[{"url":"https://tester.iny.su/web/vendor/js/icon.js","totalBytes":413457},{"url":"https://tester.iny.su/web/vendor/js/mdb.min.js","totalBytes":121065},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Medium.woff2","totalBytes":67951},{"url":"https://tester.iny.su/web/vendor/css/mdb.min.css","totalBytes":67558},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Bold.woff2","totalBytes":67455},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Light.woff2","totalBytes":66263},{"url":"https://tester.iny.su/web/vendor/font/roboto/Roboto-Regular.woff2","totalBytes":65975},{"url":"https://tester.iny.su/web/vendor/js/jquery.js","totalBytes":45348},{"url":"https://tester.iny.su/web/vendor/css/bootstrap.min.css","totalBytes":23361},{"url":"https://tester.iny.su/web/vendor/js/bootstrap.min.js","totalBytes":15580}]}},"offscreen-images":{"id":"offscreen-images","title":"Defer offscreen images","description":"Consider lazy-loading offscreen and hidden images after all critical resources have finished loading to lower time to interactive. [Learn more](https://web.dev/offscreen-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"render-blocking-resources":{"id":"render-blocking-resources","title":"Eliminate render-blocking resources","description":"Resources are blocking the first paint of your page. Consider delivering critical JS/CSS inline and deferring all non-critical JS/styles. [Learn more](https://web.dev/render-blocking-resources).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"unminified-css":{"id":"unminified-css","title":"Minify CSS","description":"Minifying CSS files can reduce network payload sizes. [Learn more](https://web.dev/unminified-css).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"unminified-javascript":{"id":"unminified-javascript","title":"Minify JavaScript","description":"Minifying JavaScript files can reduce payload sizes and script parse time. [Learn more](https://web.dev/unminified-javascript).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"unused-css-rules":{"id":"unused-css-rules","title":"Remove unused CSS","description":"Remove dead rules from stylesheets and defer the loading of CSS not used for above-the-fold content to reduce unnecessary bytes consumed by network activity. [Learn more](https://web.dev/unused-css-rules).","score":0.83,"scoreDisplayMode":"numeric","numericValue":210,"displayValue":"Potential savings of 87 KB","details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"totalBytes","valueType":"bytes","label":"Size"},{"key":"wastedBytes","valueType":"bytes","label":"Potential Savings"}],"items":[{"url":"https://tester.iny.su/web/vendor/css/mdb.min.css","wastedBytes":66763,"wastedPercent":98.82376356822462,"totalBytes":67558},{"url":"https://tester.iny.su/web/vendor/css/bootstrap.min.css","wastedBytes":22363,"wastedPercent":95.72670424633085,"totalBytes":23361}],"overallSavingsMs":210,"overallSavingsBytes":89126}},"uses-webp-images":{"id":"uses-webp-images","title":"Serve images in next-gen formats","description":"Image formats like JPEG 2000, JPEG XR, and WebP often provide better compression than PNG or JPEG, which means faster downloads and less data consumption. [Learn more](https://web.dev/uses-webp-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-optimized-images":{"id":"uses-optimized-images","title":"Efficiently encode images","description":"Optimized images load faster and consume less cellular data. [Learn more](https://web.dev/uses-optimized-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-text-compression":{"id":"uses-text-compression","title":"Enable text compression","description":"Text-based resources should be served with compression (gzip, deflate or brotli) to minimize total network bytes. [Learn more](https://web.dev/uses-text-compression).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-responsive-images":{"id":"uses-responsive-images","title":"Properly size images","description":"Serve images that are appropriately-sized to save cellular data and improve load time. [Learn more](https://web.dev/uses-responsive-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"Potential savings of 6 KB","warnings":[],"details":{"type":"opportunity","headings":[{"key":"url","valueType":"thumbnail","label":""},{"key":"url","valueType":"url","label":"URL"},{"key":"totalBytes","valueType":"bytes","label":"Size"},{"key":"wastedBytes","valueType":"bytes","label":"Potential Savings"}],"items":[{"url":"https://tester.iny.su/uc/f5d1278e8109edd94e1e4197e04873b9/5dd2199a.png","totalBytes":7044,"wastedBytes":6087,"wastedPercent":86.41045364843045}],"overallSavingsMs":0,"overallSavingsBytes":6087}},"efficient-animated-content":{"id":"efficient-animated-content","title":"Use video formats for animated content","description":"Large GIFs are inefficient for delivering animated content. Consider using MPEG4/WebM videos for animations and PNG/WebP for static images instead of GIF to save network bytes. [Learn more](https://web.dev/efficient-animated-content)","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"appcache-manifest":{"id":"appcache-manifest","title":"Avoids Application Cache","description":"Application Cache is deprecated. [Learn more](https://web.dev/appcache-manifest).","score":1,"scoreDisplayMode":"binary"},"doctype":{"id":"doctype","title":"Page has the HTML doctype","description":"Specifying a doctype prevents the browser from switching to quirks-mode. [Learn more](https://web.dev/doctype).","score":1,"scoreDisplayMode":"binary"},"dom-size":{"id":"dom-size","title":"Avoids an excessive DOM size","description":"A large DOM will increase memory usage, cause longer [style calculations](https://developers.google.com/web/fundamentals/performance/rendering/reduce-the-scope-and-complexity-of-style-calculations), and produce costly [layout reflows](https://developers.google.com/speed/articles/reflow). [Learn more](https://web.dev/dom-size).","score":1,"scoreDisplayMode":"numeric","numericValue":114,"displayValue":"114 elements","details":{"type":"table","headings":[{"key":"statistic","itemType":"text","text":"Statistic"},{"key":"element","itemType":"code","text":"Element"},{"key":"value","itemType":"numeric","text":"Value"}],"items":[{"statistic":"Total DOM Elements","element":"","value":"114"},{"statistic":"Maximum DOM Depth","element":{"type":"code","value":"\u003ca onclick=\"return nav.away(this);\" class=\"white-text h5\" href=\"https://iny.su/id1\">"},"value":"17"},{"statistic":"Maximum Child Elements","element":{"type":"code","value":"\u003cbody aria-busy=\"true\">"},"value":"22"}]}},"external-anchors-use-rel-noopener":{"id":"external-anchors-use-rel-noopener","title":"Links to cross-origin destinations are unsafe","description":"Add `rel=\"noopener\"` or `rel=\"noreferrer\"` to any external links to improve performance and prevent security vulnerabilities. [Learn more](https://web.dev/external-anchors-use-rel-noopener).","score":0,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[{"key":"href","itemType":"url","text":"URL"},{"key":"target","itemType":"text","text":"Target"},{"key":"rel","itemType":"text","text":"Rel"}],"items":[{"href":"https://iny.su/","target":"_blank","rel":"","outerHTML":"\u003ca onclick=\"return nav.away(this);\" target=\"_blank\" class=\"theme-nav-link nav-link\" href=\"//iny.su\">"}]}},"geolocation-on-start":{"id":"geolocation-on-start","title":"Avoids requesting the geolocation permission on page load","description":"Users are mistrustful of or confused by sites that request their location without context. Consider tying the request to a user action instead. [Learn more](https://web.dev/geolocation-on-start).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"no-document-write":{"id":"no-document-write","title":"Avoids `document.write()`","description":"For users on slow connections, external scripts dynamically injected via `document.write()` can delay page load by tens of seconds. [Learn more](https://web.dev/no-document-write).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"no-vulnerable-libraries":{"id":"no-vulnerable-libraries","title":"Avoids front-end JavaScript libraries with known security vulnerabilities","description":"Some third-party scripts may contain known security vulnerabilities that are easily identified and exploited by attackers. [Learn more](https://web.dev/no-vulnerable-libraries).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[],"summary":{}}},"js-libraries":{"id":"js-libraries","title":"Detected JavaScript libraries","description":"All front-end JavaScript libraries detected on the page. [Learn more](https://web.dev/js-libraries).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"name","itemType":"text","text":"Name"},{"key":"version","itemType":"text","text":"Version"}],"items":[{"name":"Bootstrap","version":"4.3.1","npm":"bootstrap"},{"name":"jQuery","version":"3.4.1","npm":"jquery"},{"name":"jQuery (Fast path)","npm":"jquery"}],"summary":{}}},"notification-on-start":{"id":"notification-on-start","title":"Avoids requesting the notification permission on page load","description":"Users are mistrustful of or confused by sites that request to send notifications without context. Consider tying the request to user gestures instead. [Learn more](https://web.dev/notification-on-start).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"password-inputs-can-be-pasted-into":{"id":"password-inputs-can-be-pasted-into","title":"Allows users to paste into password fields","description":"Preventing password pasting undermines good security policy. [Learn more](https://web.dev/password-inputs-can-be-pasted-into).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"uses-http2":{"id":"uses-http2","title":"Uses HTTP/2 for its own resources","description":"HTTP/2 offers many benefits over HTTP/1.1, including binary headers, multiplexing, and server push. [Learn more](https://web.dev/uses-http2).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[]}},"uses-passive-event-listeners":{"id":"uses-passive-event-listeners","title":"Uses passive listeners to improve scrolling performance","description":"Consider marking your touch and wheel event listeners as `passive` to improve your page's scroll performance. [Learn more](https://web.dev/uses-passive-event-listeners).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"meta-description":{"id":"meta-description","title":"Document does not have a meta description","description":"Meta descriptions may be included in search results to concisely summarize page content. [Learn more](https://web.dev/meta-description).","score":0,"scoreDisplayMode":"binary","explanation":"Description text is empty."},"http-status-code":{"id":"http-status-code","title":"Page has successful HTTP status code","description":"Pages with unsuccessful HTTP status codes may not be indexed properly. [Learn more](https://web.dev/http-status-code).","score":1,"scoreDisplayMode":"binary"},"font-size":{"id":"font-size","title":"Document uses legible font sizes","description":"Font sizes less than 12px are too small to be legible and require mobile visitors to “pinch to zoom” in order to read. Strive to have >60% of page text ≥12px. [Learn more](https://web.dev/font-size).","score":null,"scoreDisplayMode":"notApplicable"},"link-text":{"id":"link-text","title":"Links have descriptive text","description":"Descriptive link text helps search engines understand your content. [Learn more](https://web.dev/link-text).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[],"summary":{}}},"is-crawlable":{"id":"is-crawlable","title":"Page isn’t blocked from indexing","description":"Search engines are unable to include your pages in search results if they don't have permission to crawl them. [Learn more](https://web.dev/is-crawable).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"robots-txt":{"id":"robots-txt","title":"robots.txt is valid","description":"If your robots.txt file is malformed, crawlers may not be able to understand how you want your website to be crawled or indexed. [Learn more](https://web.dev/robots-txt).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[],"summary":{}}},"tap-targets":{"id":"tap-targets","title":"Tap targets are sized appropriately","description":"Interactive elements like buttons and links should be large enough (48x48px), and have enough space around them, to be easy enough to tap without overlapping onto other elements. [Learn more](https://web.dev/tap-targets).","score":null,"scoreDisplayMode":"notApplicable"},"hreflang":{"id":"hreflang","title":"Document has a valid `hreflang`","description":"hreflang links tell search engines what version of a page they should list in search results for a given language or region. [Learn more](https://web.dev/hreflang).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"plugins":{"id":"plugins","title":"Document avoids plugins","description":"Search engines can't index plugin content, and many devices restrict plugins or don't support them. [Learn more](https://web.dev/plugins).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"canonical":{"id":"canonical","title":"Document has a valid `rel=canonical`","description":"Canonical links suggest which URL to show in search results. [Learn more](https://web.dev/canonical).","score":null,"scoreDisplayMode":"notApplicable"},"structured-data":{"id":"structured-data","title":"Structured data is valid","description":"Run the [Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool/) and the [Structured Data Linter](http://linter.structured-data.org/) to validate structured data. [Learn more](https://web.dev/structured-data).","score":null,"scoreDisplayMode":"manual"}},"configSettings":{"output":"json","maxWaitForFcp":30000,"maxWaitForLoad":45000,"throttlingMethod":"simulate","throttling":{"rttMs":150,"throughputKbps":1638.4,"requestLatencyMs":562.5,"downloadThroughputKbps":1474.5600000000002,"uploadThroughputKbps":675,"cpuSlowdownMultiplier":4},"auditMode":false,"gatherMode":false,"disableStorageReset":false,"emulatedFormFactor":"desktop","internalDisableDeviceScreenEmulation":true,"channel":"devtools","budgets":null,"locale":"en-US","blockedUrlPatterns":null,"additionalTraceCategories":null,"extraHeaders":null,"precomputedLanternData":null,"onlyAudits":null,"onlyCategories":["performance","pwa","best-practices","accessibility","seo"],"skipAudits":null},"categories":{"performance":{"title":"Performance","auditRefs":[{"id":"first-contentful-paint","weight":3,"group":"metrics"},{"id":"first-meaningful-paint","weight":1,"group":"metrics"},{"id":"speed-index","weight":4,"group":"metrics"},{"id":"interactive","weight":5,"group":"metrics"},{"id":"first-cpu-idle","weight":2,"group":"metrics"},{"id":"max-potential-fid","weight":0,"group":"metrics"},{"id":"estimated-input-latency","weight":0},{"id":"total-blocking-time","weight":0},{"id":"render-blocking-resources","weight":0,"group":"load-opportunities"},{"id":"uses-responsive-images","weight":0,"group":"load-opportunities"},{"id":"offscreen-images","weight":0,"group":"load-opportunities"},{"id":"unminified-css","weight":0,"group":"load-opportunities"},{"id":"unminified-javascript","weight":0,"group":"load-opportunities"},{"id":"unused-css-rules","weight":0,"group":"load-opportunities"},{"id":"uses-optimized-images","weight":0,"group":"load-opportunities"},{"id":"uses-webp-images","weight":0,"group":"load-opportunities"},{"id":"uses-text-compression","weight":0,"group":"load-opportunities"},{"id":"uses-rel-preconnect","weight":0,"group":"load-opportunities"},{"id":"time-to-first-byte","weight":0,"group":"load-opportunities"},{"id":"redirects","weight":0,"group":"load-opportunities"},{"id":"uses-rel-preload","weight":0,"group":"load-opportunities"},{"id":"efficient-animated-content","weight":0,"group":"load-opportunities"},{"id":"total-byte-weight","weight":0,"group":"diagnostics"},{"id":"uses-long-cache-ttl","weight":0,"group":"diagnostics"},{"id":"dom-size","weight":0,"group":"diagnostics"},{"id":"critical-request-chains","weight":0,"group":"diagnostics"},{"id":"user-timings","weight":0,"group":"diagnostics"},{"id":"bootup-time","weight":0,"group":"diagnostics"},{"id":"mainthread-work-breakdown","weight":0,"group":"diagnostics"},{"id":"font-display","weight":0,"group":"diagnostics"},{"id":"performance-budget","weight":0,"group":"budgets"},{"id":"resource-summary","weight":0,"group":"diagnostics"},{"id":"third-party-summary","weight":0,"group":"diagnostics"},{"id":"network-requests","weight":0},{"id":"network-rtt","weight":0},{"id":"network-server-latency","weight":0},{"id":"main-thread-tasks","weight":0},{"id":"diagnostics","weight":0},{"id":"metrics","weight":0},{"id":"screenshot-thumbnails","weight":0},{"id":"final-screenshot","weight":0}],"id":"performance","score":0.38},"accessibility":{"title":"Accessibility","description":"These checks highlight opportunities to [improve the accessibility of your web app](https://developers.google.com/web/fundamentals/accessibility). Only a subset of accessibility issues can be automatically detected so manual testing is also encouraged.","manualDescription":"These items address areas which an automated testing tool cannot cover. Learn more in our guide on [conducting an accessibility review](https://developers.google.com/web/fundamentals/accessibility/how-to-review).","auditRefs":[{"id":"accesskeys","weight":0,"group":"a11y-navigation"},{"id":"aria-allowed-attr","weight":10,"group":"a11y-aria"},{"id":"aria-required-attr","weight":10,"group":"a11y-aria"},{"id":"aria-required-children","weight":10,"group":"a11y-aria"},{"id":"aria-required-parent","weight":10,"group":"a11y-aria"},{"id":"aria-roles","weight":10,"group":"a11y-aria"},{"id":"aria-valid-attr-value","weight":10,"group":"a11y-aria"},{"id":"aria-valid-attr","weight":10,"group":"a11y-aria"},{"id":"audio-caption","weight":0,"group":"a11y-audio-video"},{"id":"button-name","weight":0,"group":"a11y-names-labels"},{"id":"bypass","weight":3,"group":"a11y-navigation"},{"id":"color-contrast","weight":3,"group":"a11y-color-contrast"},{"id":"definition-list","weight":0,"group":"a11y-tables-lists"},{"id":"dlitem","weight":0,"group":"a11y-tables-lists"},{"id":"document-title","weight":3,"group":"a11y-names-labels"},{"id":"duplicate-id","weight":1,"group":"a11y-best-practices"},{"id":"frame-title","weight":0,"group":"a11y-names-labels"},{"id":"html-has-lang","weight":3,"group":"a11y-language"},{"id":"html-lang-valid","weight":3,"group":"a11y-language"},{"id":"image-alt","weight":10,"group":"a11y-names-labels"},{"id":"input-image-alt","weight":0,"group":"a11y-names-labels"},{"id":"label","weight":0,"group":"a11y-names-labels"},{"id":"layout-table","weight":0,"group":"a11y-tables-lists"},{"id":"link-name","weight":3,"group":"a11y-names-labels"},{"id":"list","weight":3,"group":"a11y-tables-lists"},{"id":"listitem","weight":3,"group":"a11y-tables-lists"},{"id":"meta-refresh","weight":0,"group":"a11y-best-practices"},{"id":"meta-viewport","weight":10,"group":"a11y-best-practices"},{"id":"object-alt","weight":0,"group":"a11y-names-labels"},{"id":"tabindex","weight":0,"group":"a11y-navigation"},{"id":"td-headers-attr","weight":0,"group":"a11y-tables-lists"},{"id":"th-has-data-cells","weight":0,"group":"a11y-tables-lists"},{"id":"valid-lang","weight":0,"group":"a11y-language"},{"id":"video-caption","weight":0,"group":"a11y-audio-video"},{"id":"video-description","weight":0,"group":"a11y-audio-video"},{"id":"logical-tab-order","weight":0},{"id":"focusable-controls","weight":0},{"id":"interactive-element-affordance","weight":0},{"id":"managed-focus","weight":0},{"id":"focus-traps","weight":0},{"id":"custom-controls-labels","weight":0},{"id":"custom-controls-roles","weight":0},{"id":"visual-order-follows-dom","weight":0},{"id":"offscreen-content-hidden","weight":0},{"id":"heading-levels","weight":0},{"id":"use-landmarks","weight":0}],"id":"accessibility","score":0.97},"best-practices":{"title":"Best Practices","auditRefs":[{"id":"appcache-manifest","weight":1},{"id":"is-on-https","weight":1},{"id":"uses-http2","weight":1},{"id":"uses-passive-event-listeners","weight":1},{"id":"no-document-write","weight":1},{"id":"external-anchors-use-rel-noopener","weight":1},{"id":"geolocation-on-start","weight":1},{"id":"doctype","weight":1},{"id":"no-vulnerable-libraries","weight":1},{"id":"js-libraries","weight":0},{"id":"notification-on-start","weight":1},{"id":"deprecations","weight":1},{"id":"password-inputs-can-be-pasted-into","weight":1},{"id":"errors-in-console","weight":1},{"id":"image-aspect-ratio","weight":1}],"id":"best-practices","score":0.86},"seo":{"title":"SEO","description":"These checks ensure that your page is optimized for search engine results ranking. There are additional factors Lighthouse does not check that may affect your search ranking. [Learn more](https://support.google.com/webmasters/answer/35769).","manualDescription":"Run these additional validators on your site to check additional SEO best practices.","auditRefs":[{"id":"viewport","weight":1,"group":"seo-mobile"},{"id":"document-title","weight":1,"group":"seo-content"},{"id":"meta-description","weight":1,"group":"seo-content"},{"id":"http-status-code","weight":1,"group":"seo-crawl"},{"id":"link-text","weight":1,"group":"seo-content"},{"id":"is-crawlable","weight":1,"group":"seo-crawl"},{"id":"robots-txt","weight":1,"group":"seo-crawl"},{"id":"image-alt","weight":1,"group":"seo-content"},{"id":"hreflang","weight":1,"group":"seo-content"},{"id":"canonical","weight":0,"group":"seo-content"},{"id":"font-size","weight":0,"group":"seo-mobile"},{"id":"plugins","weight":1,"group":"seo-content"},{"id":"tap-targets","weight":0,"group":"seo-mobile"},{"id":"structured-data","weight":0}],"id":"seo","score":0.9},"pwa":{"title":"Progressive Web App","description":"These checks validate the aspects of a Progressive Web App. [Learn more](https://developers.google.com/web/progressive-web-apps/checklist).","manualDescription":"These checks are required by the baseline [PWA Checklist](https://developers.google.com/web/progressive-web-apps/checklist) but are not automatically checked by Lighthouse. They do not affect your score but it's important that you verify them manually.","auditRefs":[{"id":"load-fast-enough-for-pwa","weight":7,"group":"pwa-fast-reliable"},{"id":"works-offline","weight":5,"group":"pwa-fast-reliable"},{"id":"offline-start-url","weight":1,"group":"pwa-fast-reliable"},{"id":"is-on-https","weight":2,"group":"pwa-installable"},{"id":"service-worker","weight":1,"group":"pwa-installable"},{"id":"installable-manifest","weight":2,"group":"pwa-installable"},{"id":"redirects-http","weight":2,"group":"pwa-optimized"},{"id":"splash-screen","weight":1,"group":"pwa-optimized"},{"id":"themed-omnibox","weight":1,"group":"pwa-optimized"},{"id":"content-width","weight":0,"group":"pwa-optimized"},{"id":"viewport","weight":2,"group":"pwa-optimized"},{"id":"without-javascript","weight":1,"group":"pwa-optimized"},{"id":"apple-touch-icon","weight":1,"group":"pwa-optimized"},{"id":"pwa-cross-browser","weight":0},{"id":"pwa-page-transitions","weight":0},{"id":"pwa-each-page-has-url","weight":0}],"id":"pwa","score":0.73}},"categoryGroups":{"metrics":{"title":"Metrics"},"load-opportunities":{"title":"Opportunities","description":"These suggestions can help your page load faster. They don't [directly affect](https://github.com/GoogleChrome/lighthouse/blob/d2ec9ffbb21de9ad1a0f86ed24575eda32c796f0/docs/scoring.md#how-are-the-scores-weighted) the Performance score."},"budgets":{"title":"Budgets","description":"Performance budgets set standards for the performance of your site."},"diagnostics":{"title":"Diagnostics","description":"More information about the performance of your application. These numbers don't [directly affect](https://github.com/GoogleChrome/lighthouse/blob/d2ec9ffbb21de9ad1a0f86ed24575eda32c796f0/docs/scoring.md#how-are-the-scores-weighted) the Performance score."},"pwa-fast-reliable":{"title":"Fast and reliable"},"pwa-installable":{"title":"Installable"},"pwa-optimized":{"title":"PWA Optimized"},"a11y-best-practices":{"title":"Best practices","description":"These items highlight common accessibility best practices."},"a11y-color-contrast":{"title":"Contrast","description":"These are opportunities to improve the legibility of your content."},"a11y-names-labels":{"title":"Names and labels","description":"These are opportunities to improve the semantics of the controls in your application. This may enhance the experience for users of assistive technology, like a screen reader."},"a11y-navigation":{"title":"Navigation","description":"These are opportunities to improve keyboard navigation in your application."},"a11y-aria":{"title":"ARIA","description":"These are opportunities to improve the usage of ARIA in your application which may enhance the experience for users of assistive technology, like a screen reader."},"a11y-language":{"title":"Internationalization and localization","description":"These are opportunities to improve the interpretation of your content by users in different locales."},"a11y-audio-video":{"title":"Audio and video","description":"These are opportunities to provide alternative content for audio and video. This may improve the experience for users with hearing or vision impairments."},"a11y-tables-lists":{"title":"Tables and lists","description":"These are opportunities to to improve the experience of reading tabular or list data using assistive technology, like a screen reader."},"seo-mobile":{"title":"Mobile Friendly","description":"Make sure your pages are mobile friendly so users don’t have to pinch or zoom in order to read the content pages. [Learn more](https://developers.google.com/search/mobile-sites/)."},"seo-content":{"title":"Content Best Practices","description":"Format your HTML in a way that enables crawlers to better understand your app’s content."},"seo-crawl":{"title":"Crawling and Indexing","description":"To appear in search results, crawlers need access to your app."},"lighthouse-plugin-publisher-ads-metrics":{"title":"Metrics"},"lighthouse-plugin-publisher-ads-ads-performance":{"title":"Ad Speed"},"lighthouse-plugin-publisher-ads-ads-best-practices":{"title":"Tag Best Practices"}},"timing":{"entries":[{"startTime":191.74,"name":"lh:init:config","duration":92.61,"entryType":"measure"},{"startTime":199.93,"name":"lh:config:requireGatherers","duration":8,"entryType":"measure"},{"startTime":208.04,"name":"lh:config:requireAudits","duration":59.79,"entryType":"measure"},{"startTime":285.36,"name":"lh:init:connect","duration":2.15,"entryType":"measure"},{"startTime":287.58,"name":"lh:gather:loadBlank","duration":35.68,"entryType":"measure"},{"startTime":323.43,"name":"lh:gather:getVersion","duration":2.66,"entryType":"measure"},{"startTime":326.23,"name":"lh:gather:getBenchmarkIndex","duration":503.71,"entryType":"measure"},{"startTime":830.05,"name":"lh:gather:setupDriver","duration":50.28,"entryType":"measure"},{"startTime":880.51,"name":"lh:gather:loadBlank","duration":13.46,"entryType":"measure"},{"startTime":894.07,"name":"lh:gather:setupPassNetwork","duration":6.66,"entryType":"measure"},{"startTime":900.9,"name":"lh:driver:cleanBrowserCaches","duration":134.73,"entryType":"measure"},{"startTime":1035.78,"name":"lh:gather:beforePass","duration":4.79,"entryType":"measure"},{"startTime":1035.83,"name":"lh:gather:beforePass:CSSUsage","duration":0.07,"entryType":"measure"},{"startTime":1035.91,"name":"lh:gather:beforePass:ViewportDimensions","duration":0.02,"entryType":"measure"},{"startTime":1035.95,"name":"lh:gather:beforePass:RuntimeExceptions","duration":0.06,"entryType":"measure"},{"startTime":1036.03,"name":"lh:gather:beforePass:ConsoleMessages","duration":2.59,"entryType":"measure"},{"startTime":1038.69,"name":"lh:gather:beforePass:AnchorElements","duration":0.06,"entryType":"measure"},{"startTime":1038.78,"name":"lh:gather:beforePass:ImageElements","duration":0.03,"entryType":"measure"},{"startTime":1038.84,"name":"lh:gather:beforePass:LinkElements","duration":0.03,"entryType":"measure"},{"startTime":1038.89,"name":"lh:gather:beforePass:MetaElements","duration":0.02,"entryType":"measure"},{"startTime":1038.93,"name":"lh:gather:beforePass:ScriptElements","duration":0.03,"entryType":"measure"},{"startTime":1038.96,"name":"lh:gather:beforePass:AppCacheManifest","duration":0.03,"entryType":"measure"},{"startTime":1039.01,"name":"lh:gather:beforePass:Doctype","duration":0.02,"entryType":"measure"},{"startTime":1039.04,"name":"lh:gather:beforePass:DOMStats","duration":0.02,"entryType":"measure"},{"startTime":1039.08,"name":"lh:gather:beforePass:OptimizedImages","duration":0.02,"entryType":"measure"},{"startTime":1039.12,"name":"lh:gather:beforePass:PasswordInputsWithPreventedPaste","duration":0.02,"entryType":"measure"},{"startTime":1039.15,"name":"lh:gather:beforePass:ResponseCompression","duration":0.02,"entryType":"measure"},{"startTime":1039.19,"name":"lh:gather:beforePass:TagsBlockingFirstPaint","duration":1.11,"entryType":"measure"},{"startTime":1040.34,"name":"lh:gather:beforePass:FontSize","duration":0.04,"entryType":"measure"},{"startTime":1040.39,"name":"lh:gather:beforePass:EmbeddedContent","duration":0.03,"entryType":"measure"},{"startTime":1040.44,"name":"lh:gather:beforePass:RobotsTxt","duration":0.02,"entryType":"measure"},{"startTime":1040.49,"name":"lh:gather:beforePass:TapTargets","duration":0.02,"entryType":"measure"},{"startTime":1040.52,"name":"lh:gather:beforePass:Accessibility","duration":0.03,"entryType":"measure"},{"startTime":1040.64,"name":"lh:gather:beginRecording","duration":3.48,"entryType":"measure"},{"startTime":1040.86,"name":"lh:gather:getVersion","duration":0.72,"entryType":"measure"},{"startTime":1044.32,"name":"lh:gather:loadPage-defaultPass","duration":3544.65,"entryType":"measure"},{"startTime":4589.09,"name":"lh:gather:pass","duration":1.29,"entryType":"measure"},{"startTime":4590.48,"name":"lh:gather:getTrace","duration":999.67,"entryType":"measure"},{"startTime":5590.21,"name":"lh:gather:getDevtoolsLog","duration":3.77,"entryType":"measure"},{"startTime":5597.21,"name":"lh:gather:afterPass","duration":591.2,"entryType":"measure"},{"startTime":5602.16,"name":"lh:gather:afterPass:CSSUsage","duration":213.82,"entryType":"measure"},{"startTime":5816.02,"name":"lh:gather:afterPass:ViewportDimensions","duration":3.01,"entryType":"measure"},{"startTime":5819.05,"name":"lh:gather:afterPass:RuntimeExceptions","duration":1.28,"entryType":"measure"},{"startTime":5820.36,"name":"lh:gather:afterPass:ConsoleMessages","duration":2.76,"entryType":"measure"},{"startTime":5823.16,"name":"lh:gather:afterPass:AnchorElements","duration":12.12,"entryType":"measure"},{"startTime":5835.31,"name":"lh:gather:afterPass:ImageElements","duration":7.63,"entryType":"measure"},{"startTime":5842.99,"name":"lh:gather:afterPass:LinkElements","duration":5.51,"entryType":"measure"},{"startTime":5848.53,"name":"lh:gather:afterPass:MetaElements","duration":3.07,"entryType":"measure"},{"startTime":5851.63,"name":"lh:gather:afterPass:ScriptElements","duration":5.94,"entryType":"measure"},{"startTime":5857.61,"name":"lh:gather:afterPass:AppCacheManifest","duration":4.64,"entryType":"measure"},{"startTime":5862.32,"name":"lh:gather:afterPass:Doctype","duration":4.02,"entryType":"measure"},{"startTime":5866.37,"name":"lh:gather:afterPass:DOMStats","duration":5.29,"entryType":"measure"},{"startTime":5871.69,"name":"lh:gather:afterPass:OptimizedImages","duration":1.52,"entryType":"measure"},{"startTime":5873.24,"name":"lh:gather:afterPass:PasswordInputsWithPreventedPaste","duration":2.79,"entryType":"measure"},{"startTime":5876.05,"name":"lh:gather:afterPass:ResponseCompression","duration":1.58,"entryType":"measure"},{"startTime":5877.65,"name":"lh:gather:afterPass:TagsBlockingFirstPaint","duration":5.77,"entryType":"measure"},{"startTime":5883.48,"name":"lh:gather:afterPass:FontSize","duration":70.35,"entryType":"measure"},{"startTime":5953.86,"name":"lh:gather:afterPass:EmbeddedContent","duration":2.94,"entryType":"measure"},{"startTime":5956.83,"name":"lh:gather:afterPass:RobotsTxt","duration":43.39,"entryType":"measure"},{"startTime":6000.25,"name":"lh:gather:afterPass:TapTargets","duration":11.47,"entryType":"measure"},{"startTime":6011.84,"name":"lh:gather:afterPass:Accessibility","duration":176.54,"entryType":"measure"},{"startTime":6350.86,"name":"lh:gather:loadBlank","duration":40.23,"entryType":"measure"},{"startTime":6391.13,"name":"lh:gather:setupPassNetwork","duration":6.85,"entryType":"measure"},{"startTime":6398.19,"name":"lh:gather:beforePass","duration":9.95,"entryType":"measure"},{"startTime":6398.29,"name":"lh:gather:beforePass:ServiceWorker","duration":8.67,"entryType":"measure"},{"startTime":6406.99,"name":"lh:gather:beforePass:Offline","duration":1.06,"entryType":"measure"},{"startTime":6408.08,"name":"lh:gather:beforePass:StartUrl","duration":0.05,"entryType":"measure"},{"startTime":6408.16,"name":"lh:gather:beginRecording","duration":0.13,"entryType":"measure"},{"startTime":6408.34,"name":"lh:gather:loadPage-offlinePass","duration":215.8,"entryType":"measure"},{"startTime":6624.19,"name":"lh:gather:pass","duration":0.39,"entryType":"measure"},{"startTime":6624.62,"name":"lh:gather:getDevtoolsLog","duration":0.27,"entryType":"measure"},{"startTime":6709.12,"name":"lh:gather:afterPass","duration":3196.38,"entryType":"measure"},{"startTime":6867.82,"name":"lh:gather:afterPass:ServiceWorker","duration":7.4,"entryType":"measure"},{"startTime":6875.27,"name":"lh:gather:afterPass:Offline","duration":16.94,"entryType":"measure"},{"startTime":6892.24,"name":"lh:gather:afterPass:StartUrl","duration":3013.22,"entryType":"measure"},{"startTime":9905.56,"name":"lh:gather:loadBlank","duration":118.25,"entryType":"measure"},{"startTime":10023.85,"name":"lh:gather:setupPassNetwork","duration":10.78,"entryType":"measure"},{"startTime":10034.66,"name":"lh:gather:beforePass","duration":0.3,"entryType":"measure"},{"startTime":10034.72,"name":"lh:gather:beforePass:HTTPRedirect","duration":0.14,"entryType":"measure"},{"startTime":10034.88,"name":"lh:gather:beforePass:HTMLWithoutJavaScript","duration":0.07,"entryType":"measure"},{"startTime":10034.98,"name":"lh:gather:beginRecording","duration":0.17,"entryType":"measure"},{"startTime":10035.19,"name":"lh:gather:loadPage-redirectPass","duration":193.82,"entryType":"measure"},{"startTime":10229.79,"name":"lh:gather:pass","duration":0.42,"entryType":"measure"},{"startTime":10230.24,"name":"lh:gather:getDevtoolsLog","duration":0.44,"entryType":"measure"},{"startTime":10315.42,"name":"lh:gather:afterPass","duration":54.68,"entryType":"measure"},{"startTime":10358.45,"name":"lh:gather:afterPass:HTTPRedirect","duration":2.73,"entryType":"measure"},{"startTime":10362.41,"name":"lh:gather:afterPass:HTMLWithoutJavaScript","duration":7.66,"entryType":"measure"},{"startTime":10370.22,"name":"lh:gather:disconnect","duration":21.57,"entryType":"measure"},{"startTime":284.6,"name":"lh:runner:run","duration":11382.59,"entryType":"measure"},{"startTime":10392.21,"name":"lh:runner:auditing","duration":1274.31,"entryType":"measure"},{"startTime":10396.58,"name":"lh:audit:is-on-https","duration":3.83,"entryType":"measure"},{"startTime":10397.51,"name":"lh:computed:NetworkRecords","duration":2.36,"entryType":"measure"},{"startTime":10400.82,"name":"lh:audit:redirects-http","duration":0.33,"entryType":"measure"},{"startTime":10401.49,"name":"lh:audit:service-worker","duration":0.65,"entryType":"measure"},{"startTime":10402.43,"name":"lh:audit:works-offline","duration":0.38,"entryType":"measure"},{"startTime":10403.08,"name":"lh:audit:viewport","duration":0.97,"entryType":"measure"},{"startTime":10403.27,"name":"lh:computed:ViewportMeta","duration":0.6,"entryType":"measure"},{"startTime":10404.33,"name":"lh:audit:without-javascript","duration":0.38,"entryType":"measure"},{"startTime":10404.94,"name":"lh:audit:first-contentful-paint","duration":55.95,"entryType":"measure"},{"startTime":10405.17,"name":"lh:computed:FirstContentfulPaint","duration":55.37,"entryType":"measure"},{"startTime":10405.3,"name":"lh:computed:TraceOfTab","duration":43.32,"entryType":"measure"},{"startTime":10448.75,"name":"lh:computed:LanternFirstContentfulPaint","duration":11.78,"entryType":"measure"},{"startTime":10448.94,"name":"lh:computed:PageDependencyGraph","duration":3.48,"entryType":"measure"},{"startTime":10452.48,"name":"lh:computed:LoadSimulator","duration":2.08,"entryType":"measure"},{"startTime":10452.63,"name":"lh:computed:NetworkAnalysis","duration":1.72,"entryType":"measure"},{"startTime":10461.12,"name":"lh:audit:first-meaningful-paint","duration":4.99,"entryType":"measure"},{"startTime":10461.79,"name":"lh:computed:FirstMeaningfulPaint","duration":4.11,"entryType":"measure"},{"startTime":10462.07,"name":"lh:computed:LanternFirstMeaningfulPaint","duration":3.78,"entryType":"measure"},{"startTime":10466.39,"name":"lh:audit:load-fast-enough-for-pwa","duration":9.12,"entryType":"measure"},{"startTime":10466.75,"name":"lh:computed:Interactive","duration":8.47,"entryType":"measure"},{"startTime":10466.84,"name":"lh:computed:LanternInteractive","duration":8.34,"entryType":"measure"},{"startTime":10475.8,"name":"lh:audit:speed-index","duration":677.11,"entryType":"measure"},{"startTime":10476.12,"name":"lh:computed:SpeedIndex","duration":676.12,"entryType":"measure"},{"startTime":10476.31,"name":"lh:computed:LanternSpeedIndex","duration":675.88,"entryType":"measure"},{"startTime":10476.45,"name":"lh:computed:Speedline","duration":664.2,"entryType":"measure"},{"startTime":11153.05,"name":"lh:audit:screenshot-thumbnails","duration":232.04,"entryType":"measure"},{"startTime":11385.2,"name":"lh:audit:final-screenshot","duration":4.11,"entryType":"measure"},{"startTime":11385.62,"name":"lh:computed:Screenshots","duration":3.5,"entryType":"measure"},{"startTime":11392.22,"name":"lh:audit:estimated-input-latency","duration":17.41,"entryType":"measure"},{"startTime":11392.56,"name":"lh:computed:EstimatedInputLatency","duration":16.78,"entryType":"measure"},{"startTime":11392.69,"name":"lh:computed:LanternEstimatedInputLatency","duration":16.61,"entryType":"measure"},{"startTime":11409.95,"name":"lh:audit:total-blocking-time","duration":9.85,"entryType":"measure"},{"startTime":11410.68,"name":"lh:computed:TotalBlockingTime","duration":8.9,"entryType":"measure"},{"startTime":11410.85,"name":"lh:computed:LanternTotalBlockingTime","duration":8.7,"entryType":"measure"},{"startTime":11420.1,"name":"lh:audit:max-potential-fid","duration":9.1,"entryType":"measure"},{"startTime":11420.39,"name":"lh:computed:MaxPotentialFID","duration":8.54,"entryType":"measure"},{"startTime":11420.62,"name":"lh:computed:LanternMaxPotentialFID","duration":8.27,"entryType":"measure"},{"startTime":11429.55,"name":"lh:audit:errors-in-console","duration":0.9,"entryType":"measure"},{"startTime":11430.9,"name":"lh:audit:time-to-first-byte","duration":1.06,"entryType":"measure"},{"startTime":11431.24,"name":"lh:computed:MainResource","duration":0.43,"entryType":"measure"},{"startTime":11432.24,"name":"lh:audit:first-cpu-idle","duration":7.97,"entryType":"measure"},{"startTime":11432.53,"name":"lh:computed:FirstCPUIdle","duration":7.36,"entryType":"measure"},{"startTime":11432.62,"name":"lh:computed:LanternFirstCPUIdle","duration":7.2,"entryType":"measure"},{"startTime":11440.49,"name":"lh:audit:interactive","duration":0.64,"entryType":"measure"},{"startTime":11441.45,"name":"lh:audit:user-timings","duration":2.58,"entryType":"measure"},{"startTime":11442.08,"name":"lh:computed:UserTimings","duration":1.6,"entryType":"measure"},{"startTime":11444.28,"name":"lh:audit:critical-request-chains","duration":2.52,"entryType":"measure"},{"startTime":11444.83,"name":"lh:computed:CriticalRequestChains","duration":0.91,"entryType":"measure"},{"startTime":11447.13,"name":"lh:audit:redirects","duration":1.46,"entryType":"measure"},{"startTime":11448.89,"name":"lh:audit:installable-manifest","duration":1.33,"entryType":"measure"},{"startTime":11449.14,"name":"lh:computed:ManifestValues","duration":0.71,"entryType":"measure"},{"startTime":11450.45,"name":"lh:audit:apple-touch-icon","duration":0.4,"entryType":"measure"},{"startTime":11451.08,"name":"lh:audit:splash-screen","duration":0.41,"entryType":"measure"},{"startTime":11451.74,"name":"lh:audit:themed-omnibox","duration":0.56,"entryType":"measure"},{"startTime":11452.55,"name":"lh:audit:content-width","duration":0.35,"entryType":"measure"},{"startTime":11453.13,"name":"lh:audit:image-aspect-ratio","duration":0.69,"entryType":"measure"},{"startTime":11454.07,"name":"lh:audit:deprecations","duration":0.49,"entryType":"measure"},{"startTime":11454.83,"name":"lh:audit:mainthread-work-breakdown","duration":18.25,"entryType":"measure"},{"startTime":11455.11,"name":"lh:computed:MainThreadTasks","duration":16.83,"entryType":"measure"},{"startTime":11473.34,"name":"lh:audit:bootup-time","duration":2.84,"entryType":"measure"},{"startTime":11476.54,"name":"lh:audit:uses-rel-preload","duration":4.75,"entryType":"measure"},{"startTime":11476.9,"name":"lh:computed:LoadSimulator","duration":0.19,"entryType":"measure"},{"startTime":11481.56,"name":"lh:audit:uses-rel-preconnect","duration":0.65,"entryType":"measure"},{"startTime":11482.45,"name":"lh:audit:font-display","duration":3.56,"entryType":"measure"},{"startTime":11486.07,"name":"lh:audit:diagnostics","duration":0.81,"entryType":"measure"},{"startTime":11486.93,"name":"lh:audit:network-requests","duration":0.63,"entryType":"measure"},{"startTime":11487.78,"name":"lh:audit:network-rtt","duration":0.42,"entryType":"measure"},{"startTime":11488.4,"name":"lh:audit:network-server-latency","duration":0.4,"entryType":"measure"},{"startTime":11488.85,"name":"lh:audit:main-thread-tasks","duration":0.38,"entryType":"measure"},{"startTime":11489.28,"name":"lh:audit:metrics","duration":1.04,"entryType":"measure"},{"startTime":11489.61,"name":"lh:computed:LargestContentfulPaint","duration":0.16,"entryType":"measure"},{"startTime":11490.57,"name":"lh:audit:offline-start-url","duration":0.36,"entryType":"measure"},{"startTime":11491.11,"name":"lh:audit:performance-budget","duration":1.12,"entryType":"measure"},{"startTime":11491.32,"name":"lh:computed:ResourceSummary","duration":0.77,"entryType":"measure"},{"startTime":11492.47,"name":"lh:audit:resource-summary","duration":0.58,"entryType":"measure"},{"startTime":11493.25,"name":"lh:audit:third-party-summary","duration":17.36,"entryType":"measure"},{"startTime":11510.92,"name":"lh:audit:pwa-cross-browser","duration":0.78,"entryType":"measure"},{"startTime":11512.27,"name":"lh:audit:pwa-page-transitions","duration":0.48,"entryType":"measure"},{"startTime":11513.04,"name":"lh:audit:pwa-each-page-has-url","duration":0.56,"entryType":"measure"},{"startTime":11513.94,"name":"lh:audit:accesskeys","duration":0.54,"entryType":"measure"},{"startTime":11514.75,"name":"lh:audit:aria-allowed-attr","duration":0.82,"entryType":"measure"},{"startTime":11515.82,"name":"lh:audit:aria-required-attr","duration":0.73,"entryType":"measure"},{"startTime":11516.88,"name":"lh:audit:aria-required-children","duration":0.72,"entryType":"measure"},{"startTime":11517.84,"name":"lh:audit:aria-required-parent","duration":0.72,"entryType":"measure"},{"startTime":11518.77,"name":"lh:audit:aria-roles","duration":0.63,"entryType":"measure"},{"startTime":11519.6,"name":"lh:audit:aria-valid-attr-value","duration":0.62,"entryType":"measure"},{"startTime":11520.43,"name":"lh:audit:aria-valid-attr","duration":0.61,"entryType":"measure"},{"startTime":11521.26,"name":"lh:audit:audio-caption","duration":0.28,"entryType":"measure"},{"startTime":11521.73,"name":"lh:audit:button-name","duration":0.29,"entryType":"measure"},{"startTime":11522.24,"name":"lh:audit:bypass","duration":0.61,"entryType":"measure"},{"startTime":11523.07,"name":"lh:audit:color-contrast","duration":0.72,"entryType":"measure"},{"startTime":11524.1,"name":"lh:audit:definition-list","duration":0.32,"entryType":"measure"},{"startTime":11524.63,"name":"lh:audit:dlitem","duration":1.58,"entryType":"measure"},{"startTime":11526.45,"name":"lh:audit:document-title","duration":0.64,"entryType":"measure"},{"startTime":11527.31,"name":"lh:audit:duplicate-id","duration":0.62,"entryType":"measure"},{"startTime":11528.52,"name":"lh:audit:frame-title","duration":0.59,"entryType":"measure"},{"startTime":11529.43,"name":"lh:audit:html-has-lang","duration":1.29,"entryType":"measure"},{"startTime":11531.07,"name":"lh:audit:html-lang-valid","duration":0.88,"entryType":"measure"},{"startTime":11532.23,"name":"lh:audit:image-alt","duration":0.65,"entryType":"measure"},{"startTime":11533.11,"name":"lh:audit:input-image-alt","duration":0.4,"entryType":"measure"},{"startTime":11533.72,"name":"lh:audit:label","duration":0.47,"entryType":"measure"},{"startTime":11534.45,"name":"lh:audit:layout-table","duration":0.88,"entryType":"measure"},{"startTime":11535.61,"name":"lh:audit:link-name","duration":0.82,"entryType":"measure"},{"startTime":11536.73,"name":"lh:audit:list","duration":0.84,"entryType":"measure"},{"startTime":11537.81,"name":"lh:audit:listitem","duration":0.56,"entryType":"measure"},{"startTime":11538.57,"name":"lh:audit:meta-refresh","duration":0.39,"entryType":"measure"},{"startTime":11539.23,"name":"lh:audit:meta-viewport","duration":0.54,"entryType":"measure"},{"startTime":11539.95,"name":"lh:audit:object-alt","duration":0.39,"entryType":"measure"},{"startTime":11540.56,"name":"lh:audit:tabindex","duration":0.44,"entryType":"measure"},{"startTime":11541.25,"name":"lh:audit:td-headers-attr","duration":0.45,"entryType":"measure"},{"startTime":11541.94,"name":"lh:audit:th-has-data-cells","duration":0.47,"entryType":"measure"},{"startTime":11542.61,"name":"lh:audit:valid-lang","duration":0.48,"entryType":"measure"},{"startTime":11543.29,"name":"lh:audit:video-caption","duration":0.49,"entryType":"measure"},{"startTime":11544,"name":"lh:audit:video-description","duration":0.55,"entryType":"measure"},{"startTime":11544.64,"name":"lh:audit:custom-controls-labels","duration":1.3,"entryType":"measure"},{"startTime":11546.11,"name":"lh:audit:custom-controls-roles","duration":0.17,"entryType":"measure"},{"startTime":11546.34,"name":"lh:audit:focus-traps","duration":0.11,"entryType":"measure"},{"startTime":11546.55,"name":"lh:audit:focusable-controls","duration":0.42,"entryType":"measure"},{"startTime":11547.31,"name":"lh:audit:heading-levels","duration":0.17,"entryType":"measure"},{"startTime":11547.56,"name":"lh:audit:interactive-element-affordance","duration":0.16,"entryType":"measure"},{"startTime":11547.79,"name":"lh:audit:logical-tab-order","duration":0.11,"entryType":"measure"},{"startTime":11547.96,"name":"lh:audit:managed-focus","duration":0.26,"entryType":"measure"},{"startTime":11548.3,"name":"lh:audit:offscreen-content-hidden","duration":0.11,"entryType":"measure"},{"startTime":11548.51,"name":"lh:audit:use-landmarks","duration":0.11,"entryType":"measure"},{"startTime":11548.67,"name":"lh:audit:visual-order-follows-dom","duration":0.09,"entryType":"measure"},{"startTime":11549.57,"name":"lh:audit:uses-long-cache-ttl","duration":1.51,"entryType":"measure"},{"startTime":11551.3,"name":"lh:audit:total-byte-weight","duration":0.56,"entryType":"measure"},{"startTime":11552.04,"name":"lh:audit:offscreen-images","duration":3.23,"entryType":"measure"},{"startTime":11555.59,"name":"lh:audit:render-blocking-resources","duration":7.9,"entryType":"measure"},{"startTime":11559.44,"name":"lh:computed:FirstContentfulPaint","duration":3.42,"entryType":"measure"},{"startTime":11559.58,"name":"lh:computed:LanternFirstContentfulPaint","duration":3.23,"entryType":"measure"},{"startTime":11563.75,"name":"lh:audit:unminified-css","duration":58.79,"entryType":"measure"},{"startTime":11622.78,"name":"lh:audit:unminified-javascript","duration":2.89,"entryType":"measure"},{"startTime":11625.84,"name":"lh:audit:unused-css-rules","duration":1.94,"entryType":"measure"},{"startTime":11628.98,"name":"lh:audit:uses-webp-images","duration":3.77,"entryType":"measure"},{"startTime":11632.99,"name":"lh:audit:uses-optimized-images","duration":1.89,"entryType":"measure"},{"startTime":11635.07,"name":"lh:audit:uses-text-compression","duration":1.73,"entryType":"measure"},{"startTime":11636.99,"name":"lh:audit:uses-responsive-images","duration":1.88,"entryType":"measure"},{"startTime":11639.07,"name":"lh:audit:efficient-animated-content","duration":3.36,"entryType":"measure"},{"startTime":11642.66,"name":"lh:audit:appcache-manifest","duration":0.29,"entryType":"measure"},{"startTime":11643.15,"name":"lh:audit:doctype","duration":0.36,"entryType":"measure"},{"startTime":11643.71,"name":"lh:audit:dom-size","duration":0.57,"entryType":"measure"},{"startTime":11644.54,"name":"lh:audit:external-anchors-use-rel-noopener","duration":2.81,"entryType":"measure"},{"startTime":11647.71,"name":"lh:audit:geolocation-on-start","duration":0.69,"entryType":"measure"},{"startTime":11648.63,"name":"lh:audit:no-document-write","duration":0.34,"entryType":"measure"},{"startTime":11649.2,"name":"lh:audit:no-vulnerable-libraries","duration":5.62,"entryType":"measure"},{"startTime":11655.04,"name":"lh:audit:js-libraries","duration":0.32,"entryType":"measure"},{"startTime":11655.6,"name":"lh:audit:notification-on-start","duration":0.32,"entryType":"measure"},{"startTime":11656.13,"name":"lh:audit:password-inputs-can-be-pasted-into","duration":0.31,"entryType":"measure"},{"startTime":11656.62,"name":"lh:audit:uses-http2","duration":0.57,"entryType":"measure"},{"startTime":11657.4,"name":"lh:audit:uses-passive-event-listeners","duration":0.32,"entryType":"measure"},{"startTime":11657.91,"name":"lh:audit:meta-description","duration":0.32,"entryType":"measure"},{"startTime":11658.43,"name":"lh:audit:http-status-code","duration":0.32,"entryType":"measure"},{"startTime":11658.93,"name":"lh:audit:font-size","duration":0.38,"entryType":"measure"},{"startTime":11659.5,"name":"lh:audit:link-text","duration":0.5,"entryType":"measure"},{"startTime":11660.28,"name":"lh:audit:is-crawlable","duration":1.86,"entryType":"measure"},{"startTime":11662.43,"name":"lh:audit:robots-txt","duration":0.91,"entryType":"measure"},{"startTime":11663.64,"name":"lh:audit:tap-targets","duration":0.5,"entryType":"measure"},{"startTime":11664.46,"name":"lh:audit:hreflang","duration":0.39,"entryType":"measure"},{"startTime":11665.05,"name":"lh:audit:plugins","duration":0.32,"entryType":"measure"},{"startTime":11665.59,"name":"lh:audit:canonical","duration":0.48,"entryType":"measure"},{"startTime":11666.27,"name":"lh:audit:structured-data","duration":0.23,"entryType":"measure"},{"startTime":11666.53,"name":"lh:runner:generate","duration":0.65,"entryType":"measure"}],"total":11382.59},"i18n":{"rendererFormattedStrings":{},"icuMessagePaths":{"lighthouse-core/audits/is-on-https.js | title":["audits[is-on-https].title"],"lighthouse-core/audits/is-on-https.js | description":["audits[is-on-https].description"],"lighthouse-core/audits/redirects-http.js | title":["audits[redirects-http].title"],"lighthouse-core/audits/redirects-http.js | description":["audits[redirects-http].description"],"lighthouse-core/audits/service-worker.js | failureTitle":["audits[service-worker].title"],"lighthouse-core/audits/service-worker.js | description":["audits[service-worker].description"],"lighthouse-core/audits/works-offline.js | failureTitle":["audits[works-offline].title"],"lighthouse-core/audits/works-offline.js | description":["audits[works-offline].description"],"lighthouse-core/audits/viewport.js | title":["audits.viewport.title"],"lighthouse-core/audits/viewport.js | description":["audits.viewport.description"],"lighthouse-core/audits/without-javascript.js | title":["audits[without-javascript].title"],"lighthouse-core/audits/without-javascript.js | description":["audits[without-javascript].description"],"lighthouse-core/audits/metrics/first-contentful-paint.js | title":["audits[first-contentful-paint].title"],"lighthouse-core/audits/metrics/first-contentful-paint.js | description":["audits[first-contentful-paint].description"],"lighthouse-core/lib/i18n/i18n.js | seconds":[{"values":{"timeInMs":6110.191},"path":"audits[first-contentful-paint].displayValue"},{"values":{"timeInMs":6185.191},"path":"audits[first-meaningful-paint].displayValue"},{"values":{"timeInMs":7980.092214053062},"path":"audits[speed-index].displayValue"},{"values":{"timeInMs":6185.191},"path":"audits[first-cpu-idle].displayValue"},{"values":{"timeInMs":6254.191},"path":"audits.interactive.displayValue"},{"values":{"timeInMs":9245.948000000008},"path":"audits[mainthread-work-breakdown].displayValue"},{"values":{"timeInMs":7011.900000000001},"path":"audits[bootup-time].displayValue"}],"lighthouse-core/audits/metrics/first-meaningful-paint.js | title":["audits[first-meaningful-paint].title"],"lighthouse-core/audits/metrics/first-meaningful-paint.js | description":["audits[first-meaningful-paint].description"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | title":["audits[load-fast-enough-for-pwa].title"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | description":["audits[load-fast-enough-for-pwa].description"],"lighthouse-core/audits/metrics/speed-index.js | title":["audits[speed-index].title"],"lighthouse-core/audits/metrics/speed-index.js | description":["audits[speed-index].description"],"lighthouse-core/audits/metrics/estimated-input-latency.js | title":["audits[estimated-input-latency].title"],"lighthouse-core/audits/metrics/estimated-input-latency.js | description":["audits[estimated-input-latency].description"],"lighthouse-core/lib/i18n/i18n.js | ms":[{"values":{"timeInMs":12.8},"path":"audits[estimated-input-latency].displayValue"},{"values":{"timeInMs":29},"path":"audits[total-blocking-time].displayValue"},{"values":{"timeInMs":66.5},"path":"audits[max-potential-fid].displayValue"},{"values":{"timeInMs":0.137},"path":"audits[network-rtt].displayValue"},{"values":{"timeInMs":43.191},"path":"audits[network-server-latency].displayValue"}],"lighthouse-core/audits/metrics/total-blocking-time.js | title":["audits[total-blocking-time].title"],"lighthouse-core/audits/metrics/total-blocking-time.js | description":["audits[total-blocking-time].description"],"lighthouse-core/audits/metrics/max-potential-fid.js | title":["audits[max-potential-fid].title"],"lighthouse-core/audits/metrics/max-potential-fid.js | description":["audits[max-potential-fid].description"],"lighthouse-core/audits/errors-in-console.js | title":["audits[errors-in-console].title"],"lighthouse-core/audits/errors-in-console.js | description":["audits[errors-in-console].description"],"lighthouse-core/audits/time-to-first-byte.js | title":["audits[time-to-first-byte].title"],"lighthouse-core/audits/time-to-first-byte.js | description":["audits[time-to-first-byte].description"],"lighthouse-core/audits/time-to-first-byte.js | displayValue":[{"values":{"timeInMs":54.016},"path":"audits[time-to-first-byte].displayValue"}],"lighthouse-core/audits/metrics/first-cpu-idle.js | title":["audits[first-cpu-idle].title"],"lighthouse-core/audits/metrics/first-cpu-idle.js | description":["audits[first-cpu-idle].description"],"lighthouse-core/audits/metrics/interactive.js | title":["audits.interactive.title"],"lighthouse-core/audits/metrics/interactive.js | description":["audits.interactive.description"],"lighthouse-core/audits/user-timings.js | title":["audits[user-timings].title"],"lighthouse-core/audits/user-timings.js | description":["audits[user-timings].description"],"lighthouse-core/audits/critical-request-chains.js | title":["audits[critical-request-chains].title"],"lighthouse-core/audits/critical-request-chains.js | description":["audits[critical-request-chains].description"],"lighthouse-core/audits/critical-request-chains.js | displayValue":[{"values":{"itemCount":6},"path":"audits[critical-request-chains].displayValue"}],"lighthouse-core/audits/redirects.js | title":["audits.redirects.title"],"lighthouse-core/audits/redirects.js | description":["audits.redirects.description"],"lighthouse-core/audits/installable-manifest.js | title":["audits[installable-manifest].title"],"lighthouse-core/audits/installable-manifest.js | description":["audits[installable-manifest].description"],"lighthouse-core/audits/apple-touch-icon.js | title":["audits[apple-touch-icon].title"],"lighthouse-core/audits/apple-touch-icon.js | description":["audits[apple-touch-icon].description"],"lighthouse-core/audits/splash-screen.js | title":["audits[splash-screen].title"],"lighthouse-core/audits/splash-screen.js | description":["audits[splash-screen].description"],"lighthouse-core/audits/themed-omnibox.js | title":["audits[themed-omnibox].title"],"lighthouse-core/audits/themed-omnibox.js | description":["audits[themed-omnibox].description"],"lighthouse-core/audits/content-width.js | title":["audits[content-width].title"],"lighthouse-core/audits/content-width.js | description":["audits[content-width].description"],"lighthouse-core/audits/image-aspect-ratio.js | title":["audits[image-aspect-ratio].title"],"lighthouse-core/audits/image-aspect-ratio.js | description":["audits[image-aspect-ratio].description"],"lighthouse-core/audits/deprecations.js | failureTitle":["audits.deprecations.title"],"lighthouse-core/audits/deprecations.js | description":["audits.deprecations.description"],"lighthouse-core/audits/deprecations.js | displayValue":[{"values":{"itemCount":2},"path":"audits.deprecations.displayValue"}],"lighthouse-core/audits/deprecations.js | columnDeprecate":["audits.deprecations.details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnURL":["audits.deprecations.details.headings[1].text","audits[bootup-time].details.headings[0].text","audits[uses-rel-preload].details.headings[0].label","audits[font-display].details.headings[0].text","audits[network-rtt].details.headings[0].text","audits[network-server-latency].details.headings[0].text","audits[uses-long-cache-ttl].details.headings[0].text","audits[total-byte-weight].details.headings[0].text","audits[unused-css-rules].details.headings[0].label","audits[uses-responsive-images].details.headings[1].label","audits[external-anchors-use-rel-noopener].details.headings[0].text"],"lighthouse-core/audits/deprecations.js | columnLine":["audits.deprecations.details.headings[2].text"],"lighthouse-core/audits/mainthread-work-breakdown.js | failureTitle":["audits[mainthread-work-breakdown].title"],"lighthouse-core/audits/mainthread-work-breakdown.js | description":["audits[mainthread-work-breakdown].description"],"lighthouse-core/audits/mainthread-work-breakdown.js | columnCategory":["audits[mainthread-work-breakdown].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnTimeSpent":["audits[mainthread-work-breakdown].details.headings[1].text","audits[network-rtt].details.headings[1].text","audits[network-server-latency].details.headings[1].text"],"lighthouse-core/audits/bootup-time.js | failureTitle":["audits[bootup-time].title"],"lighthouse-core/audits/bootup-time.js | description":["audits[bootup-time].description"],"lighthouse-core/audits/bootup-time.js | columnTotal":["audits[bootup-time].details.headings[1].text"],"lighthouse-core/audits/bootup-time.js | columnScriptEval":["audits[bootup-time].details.headings[2].text"],"lighthouse-core/audits/bootup-time.js | columnScriptParse":["audits[bootup-time].details.headings[3].text"],"lighthouse-core/audits/uses-rel-preload.js | title":["audits[uses-rel-preload].title"],"lighthouse-core/audits/uses-rel-preload.js | description":["audits[uses-rel-preload].description"],"lighthouse-core/lib/i18n/i18n.js | displayValueMsSavings":[{"values":{"wastedMs":1993},"path":"audits[uses-rel-preload].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnWastedBytes":["audits[uses-rel-preload].details.headings[1].label","audits[font-display].details.headings[1].text","audits[unused-css-rules].details.headings[2].label","audits[uses-responsive-images].details.headings[3].label"],"lighthouse-core/audits/uses-rel-preconnect.js | title":["audits[uses-rel-preconnect].title"],"lighthouse-core/audits/uses-rel-preconnect.js | description":["audits[uses-rel-preconnect].description"],"lighthouse-core/audits/font-display.js | failureTitle":["audits[font-display].title"],"lighthouse-core/audits/font-display.js | description":["audits[font-display].description"],"lighthouse-core/audits/network-rtt.js | title":["audits[network-rtt].title"],"lighthouse-core/audits/network-rtt.js | description":["audits[network-rtt].description"],"lighthouse-core/audits/network-server-latency.js | title":["audits[network-server-latency].title"],"lighthouse-core/audits/network-server-latency.js | description":["audits[network-server-latency].description"],"lighthouse-core/audits/offline-start-url.js | failureTitle":["audits[offline-start-url].title"],"lighthouse-core/audits/offline-start-url.js | description":["audits[offline-start-url].description"],"lighthouse-core/audits/offline-start-url.js | warningCantStart":[{"values":{"manifestWarning":"ERROR: start_url must be same-origin as document"},"path":"audits[offline-start-url].warnings[0]"}],"lighthouse-core/audits/performance-budget.js | title":["audits[performance-budget].title"],"lighthouse-core/audits/performance-budget.js | description":["audits[performance-budget].description"],"lighthouse-core/audits/resource-summary.js | title":["audits[resource-summary].title"],"lighthouse-core/audits/resource-summary.js | description":["audits[resource-summary].description"],"lighthouse-core/audits/resource-summary.js | displayValue":[{"values":{"requestCount":39,"byteCount":1011848},"path":"audits[resource-summary].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnResourceType":["audits[resource-summary].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnRequests":["audits[resource-summary].details.headings[1].text"],"lighthouse-core/lib/i18n/i18n.js | columnTransferSize":["audits[resource-summary].details.headings[2].text"],"lighthouse-core/lib/i18n/i18n.js | totalResourceType":["audits[resource-summary].details.items[0].label"],"lighthouse-core/lib/i18n/i18n.js | otherResourceType":["audits[resource-summary].details.items[1].label"],"lighthouse-core/lib/i18n/i18n.js | fontResourceType":["audits[resource-summary].details.items[2].label"],"lighthouse-core/lib/i18n/i18n.js | stylesheetResourceType":["audits[resource-summary].details.items[3].label"],"lighthouse-core/lib/i18n/i18n.js | scriptResourceType":["audits[resource-summary].details.items[4].label"],"lighthouse-core/lib/i18n/i18n.js | imageResourceType":["audits[resource-summary].details.items[5].label"],"lighthouse-core/lib/i18n/i18n.js | documentResourceType":["audits[resource-summary].details.items[6].label"],"lighthouse-core/lib/i18n/i18n.js | mediaResourceType":["audits[resource-summary].details.items[7].label"],"lighthouse-core/lib/i18n/i18n.js | thirdPartyResourceType":["audits[resource-summary].details.items[8].label"],"lighthouse-core/audits/third-party-summary.js | title":["audits[third-party-summary].title"],"lighthouse-core/audits/third-party-summary.js | description":["audits[third-party-summary].description"],"lighthouse-core/audits/manual/pwa-cross-browser.js | title":["audits[pwa-cross-browser].title"],"lighthouse-core/audits/manual/pwa-cross-browser.js | description":["audits[pwa-cross-browser].description"],"lighthouse-core/audits/manual/pwa-page-transitions.js | title":["audits[pwa-page-transitions].title"],"lighthouse-core/audits/manual/pwa-page-transitions.js | description":["audits[pwa-page-transitions].description"],"lighthouse-core/audits/manual/pwa-each-page-has-url.js | title":["audits[pwa-each-page-has-url].title"],"lighthouse-core/audits/manual/pwa-each-page-has-url.js | description":["audits[pwa-each-page-has-url].description"],"lighthouse-core/audits/accessibility/accesskeys.js | title":["audits.accesskeys.title"],"lighthouse-core/audits/accessibility/accesskeys.js | description":["audits.accesskeys.description"],"lighthouse-core/audits/accessibility/aria-allowed-attr.js | title":["audits[aria-allowed-attr].title"],"lighthouse-core/audits/accessibility/aria-allowed-attr.js | description":["audits[aria-allowed-attr].description"],"lighthouse-core/audits/accessibility/aria-required-attr.js | title":["audits[aria-required-attr].title"],"lighthouse-core/audits/accessibility/aria-required-attr.js | description":["audits[aria-required-attr].description"],"lighthouse-core/audits/accessibility/aria-required-children.js | title":["audits[aria-required-children].title"],"lighthouse-core/audits/accessibility/aria-required-children.js | description":["audits[aria-required-children].description"],"lighthouse-core/audits/accessibility/aria-required-parent.js | title":["audits[aria-required-parent].title"],"lighthouse-core/audits/accessibility/aria-required-parent.js | description":["audits[aria-required-parent].description"],"lighthouse-core/audits/accessibility/aria-roles.js | title":["audits[aria-roles].title"],"lighthouse-core/audits/accessibility/aria-roles.js | description":["audits[aria-roles].description"],"lighthouse-core/audits/accessibility/aria-valid-attr-value.js | title":["audits[aria-valid-attr-value].title"],"lighthouse-core/audits/accessibility/aria-valid-attr-value.js | description":["audits[aria-valid-attr-value].description"],"lighthouse-core/audits/accessibility/aria-valid-attr.js | title":["audits[aria-valid-attr].title"],"lighthouse-core/audits/accessibility/aria-valid-attr.js | description":["audits[aria-valid-attr].description"],"lighthouse-core/audits/accessibility/audio-caption.js | title":["audits[audio-caption].title"],"lighthouse-core/audits/accessibility/audio-caption.js | description":["audits[audio-caption].description"],"lighthouse-core/audits/accessibility/button-name.js | title":["audits[button-name].title"],"lighthouse-core/audits/accessibility/button-name.js | description":["audits[button-name].description"],"lighthouse-core/audits/accessibility/bypass.js | title":["audits.bypass.title"],"lighthouse-core/audits/accessibility/bypass.js | description":["audits.bypass.description"],"lighthouse-core/audits/accessibility/color-contrast.js | failureTitle":["audits[color-contrast].title"],"lighthouse-core/audits/accessibility/color-contrast.js | description":["audits[color-contrast].description"],"lighthouse-core/audits/accessibility/axe-audit.js | failingElementsHeader":["audits[color-contrast].details.headings[0].text"],"lighthouse-core/audits/accessibility/definition-list.js | title":["audits[definition-list].title"],"lighthouse-core/audits/accessibility/definition-list.js | description":["audits[definition-list].description"],"lighthouse-core/audits/accessibility/dlitem.js | title":["audits.dlitem.title"],"lighthouse-core/audits/accessibility/dlitem.js | description":["audits.dlitem.description"],"lighthouse-core/audits/accessibility/document-title.js | title":["audits[document-title].title"],"lighthouse-core/audits/accessibility/document-title.js | description":["audits[document-title].description"],"lighthouse-core/audits/accessibility/duplicate-id.js | title":["audits[duplicate-id].title"],"lighthouse-core/audits/accessibility/duplicate-id.js | description":["audits[duplicate-id].description"],"lighthouse-core/audits/accessibility/frame-title.js | title":["audits[frame-title].title"],"lighthouse-core/audits/accessibility/frame-title.js | description":["audits[frame-title].description"],"lighthouse-core/audits/accessibility/html-has-lang.js | title":["audits[html-has-lang].title"],"lighthouse-core/audits/accessibility/html-has-lang.js | description":["audits[html-has-lang].description"],"lighthouse-core/audits/accessibility/html-lang-valid.js | title":["audits[html-lang-valid].title"],"lighthouse-core/audits/accessibility/html-lang-valid.js | description":["audits[html-lang-valid].description"],"lighthouse-core/audits/accessibility/image-alt.js | title":["audits[image-alt].title"],"lighthouse-core/audits/accessibility/image-alt.js | description":["audits[image-alt].description"],"lighthouse-core/audits/accessibility/input-image-alt.js | title":["audits[input-image-alt].title"],"lighthouse-core/audits/accessibility/input-image-alt.js | description":["audits[input-image-alt].description"],"lighthouse-core/audits/accessibility/label.js | title":["audits.label.title"],"lighthouse-core/audits/accessibility/label.js | description":["audits.label.description"],"lighthouse-core/audits/accessibility/layout-table.js | title":["audits[layout-table].title"],"lighthouse-core/audits/accessibility/layout-table.js | description":["audits[layout-table].description"],"lighthouse-core/audits/accessibility/link-name.js | title":["audits[link-name].title"],"lighthouse-core/audits/accessibility/link-name.js | description":["audits[link-name].description"],"lighthouse-core/audits/accessibility/list.js | title":["audits.list.title"],"lighthouse-core/audits/accessibility/list.js | description":["audits.list.description"],"lighthouse-core/audits/accessibility/listitem.js | title":["audits.listitem.title"],"lighthouse-core/audits/accessibility/listitem.js | description":["audits.listitem.description"],"lighthouse-core/audits/accessibility/meta-refresh.js | title":["audits[meta-refresh].title"],"lighthouse-core/audits/accessibility/meta-refresh.js | description":["audits[meta-refresh].description"],"lighthouse-core/audits/accessibility/meta-viewport.js | title":["audits[meta-viewport].title"],"lighthouse-core/audits/accessibility/meta-viewport.js | description":["audits[meta-viewport].description"],"lighthouse-core/audits/accessibility/object-alt.js | title":["audits[object-alt].title"],"lighthouse-core/audits/accessibility/object-alt.js | description":["audits[object-alt].description"],"lighthouse-core/audits/accessibility/tabindex.js | title":["audits.tabindex.title"],"lighthouse-core/audits/accessibility/tabindex.js | description":["audits.tabindex.description"],"lighthouse-core/audits/accessibility/td-headers-attr.js | title":["audits[td-headers-attr].title"],"lighthouse-core/audits/accessibility/td-headers-attr.js | description":["audits[td-headers-attr].description"],"lighthouse-core/audits/accessibility/th-has-data-cells.js | title":["audits[th-has-data-cells].title"],"lighthouse-core/audits/accessibility/th-has-data-cells.js | description":["audits[th-has-data-cells].description"],"lighthouse-core/audits/accessibility/valid-lang.js | title":["audits[valid-lang].title"],"lighthouse-core/audits/accessibility/valid-lang.js | description":["audits[valid-lang].description"],"lighthouse-core/audits/accessibility/video-caption.js | title":["audits[video-caption].title"],"lighthouse-core/audits/accessibility/video-caption.js | description":["audits[video-caption].description"],"lighthouse-core/audits/accessibility/video-description.js | title":["audits[video-description].title"],"lighthouse-core/audits/accessibility/video-description.js | description":["audits[video-description].description"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | failureTitle":["audits[uses-long-cache-ttl].title"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | description":["audits[uses-long-cache-ttl].description"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | displayValue":[{"values":{"itemCount":15},"path":"audits[uses-long-cache-ttl].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnCacheTTL":["audits[uses-long-cache-ttl].details.headings[1].text"],"lighthouse-core/lib/i18n/i18n.js | columnSize":["audits[uses-long-cache-ttl].details.headings[2].text","audits[total-byte-weight].details.headings[1].text","audits[unused-css-rules].details.headings[1].label","audits[uses-responsive-images].details.headings[2].label"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | title":["audits[total-byte-weight].title"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | description":["audits[total-byte-weight].description"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | displayValue":[{"values":{"totalBytes":1011848},"path":"audits[total-byte-weight].displayValue"}],"lighthouse-core/audits/byte-efficiency/offscreen-images.js | title":["audits[offscreen-images].title"],"lighthouse-core/audits/byte-efficiency/offscreen-images.js | description":["audits[offscreen-images].description"],"lighthouse-core/audits/byte-efficiency/render-blocking-resources.js | title":["audits[render-blocking-resources].title"],"lighthouse-core/audits/byte-efficiency/render-blocking-resources.js | description":["audits[render-blocking-resources].description"],"lighthouse-core/audits/byte-efficiency/unminified-css.js | title":["audits[unminified-css].title"],"lighthouse-core/audits/byte-efficiency/unminified-css.js | description":["audits[unminified-css].description"],"lighthouse-core/audits/byte-efficiency/unminified-javascript.js | title":["audits[unminified-javascript].title"],"lighthouse-core/audits/byte-efficiency/unminified-javascript.js | description":["audits[unminified-javascript].description"],"lighthouse-core/audits/byte-efficiency/unused-css-rules.js | title":["audits[unused-css-rules].title"],"lighthouse-core/audits/byte-efficiency/unused-css-rules.js | description":["audits[unused-css-rules].description"],"lighthouse-core/lib/i18n/i18n.js | displayValueByteSavings":[{"values":{"wastedBytes":89126},"path":"audits[unused-css-rules].displayValue"},{"values":{"wastedBytes":6087},"path":"audits[uses-responsive-images].displayValue"}],"lighthouse-core/audits/byte-efficiency/uses-webp-images.js | title":["audits[uses-webp-images].title"],"lighthouse-core/audits/byte-efficiency/uses-webp-images.js | description":["audits[uses-webp-images].description"],"lighthouse-core/audits/byte-efficiency/uses-optimized-images.js | title":["audits[uses-optimized-images].title"],"lighthouse-core/audits/byte-efficiency/uses-optimized-images.js | description":["audits[uses-optimized-images].description"],"lighthouse-core/audits/byte-efficiency/uses-text-compression.js | title":["audits[uses-text-compression].title"],"lighthouse-core/audits/byte-efficiency/uses-text-compression.js | description":["audits[uses-text-compression].description"],"lighthouse-core/audits/byte-efficiency/uses-responsive-images.js | title":["audits[uses-responsive-images].title"],"lighthouse-core/audits/byte-efficiency/uses-responsive-images.js | description":["audits[uses-responsive-images].description"],"lighthouse-core/audits/byte-efficiency/efficient-animated-content.js | title":["audits[efficient-animated-content].title"],"lighthouse-core/audits/byte-efficiency/efficient-animated-content.js | description":["audits[efficient-animated-content].description"],"lighthouse-core/audits/dobetterweb/appcache-manifest.js | title":["audits[appcache-manifest].title"],"lighthouse-core/audits/dobetterweb/appcache-manifest.js | description":["audits[appcache-manifest].description"],"lighthouse-core/audits/dobetterweb/doctype.js | title":["audits.doctype.title"],"lighthouse-core/audits/dobetterweb/doctype.js | description":["audits.doctype.description"],"lighthouse-core/audits/dobetterweb/dom-size.js | title":["audits[dom-size].title"],"lighthouse-core/audits/dobetterweb/dom-size.js | description":["audits[dom-size].description"],"lighthouse-core/audits/dobetterweb/dom-size.js | displayValue":[{"values":{"itemCount":114},"path":"audits[dom-size].displayValue"}],"lighthouse-core/audits/dobetterweb/dom-size.js | columnStatistic":["audits[dom-size].details.headings[0].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | columnElement":["audits[dom-size].details.headings[1].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | columnValue":["audits[dom-size].details.headings[2].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMElements":["audits[dom-size].details.items[0].statistic"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMDepth":["audits[dom-size].details.items[1].statistic"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMWidth":["audits[dom-size].details.items[2].statistic"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | failureTitle":["audits[external-anchors-use-rel-noopener].title"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | description":["audits[external-anchors-use-rel-noopener].description"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | columnTarget":["audits[external-anchors-use-rel-noopener].details.headings[1].text"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | columnRel":["audits[external-anchors-use-rel-noopener].details.headings[2].text"],"lighthouse-core/audits/dobetterweb/geolocation-on-start.js | title":["audits[geolocation-on-start].title"],"lighthouse-core/audits/dobetterweb/geolocation-on-start.js | description":["audits[geolocation-on-start].description"],"lighthouse-core/audits/dobetterweb/no-document-write.js | title":["audits[no-document-write].title"],"lighthouse-core/audits/dobetterweb/no-document-write.js | description":["audits[no-document-write].description"],"lighthouse-core/audits/dobetterweb/no-vulnerable-libraries.js | title":["audits[no-vulnerable-libraries].title"],"lighthouse-core/audits/dobetterweb/no-vulnerable-libraries.js | description":["audits[no-vulnerable-libraries].description"],"lighthouse-core/audits/dobetterweb/js-libraries.js | title":["audits[js-libraries].title"],"lighthouse-core/audits/dobetterweb/js-libraries.js | description":["audits[js-libraries].description"],"lighthouse-core/lib/i18n/i18n.js | columnName":["audits[js-libraries].details.headings[0].text"],"lighthouse-core/audits/dobetterweb/js-libraries.js | columnVersion":["audits[js-libraries].details.headings[1].text"],"lighthouse-core/audits/dobetterweb/notification-on-start.js | title":["audits[notification-on-start].title"],"lighthouse-core/audits/dobetterweb/notification-on-start.js | description":["audits[notification-on-start].description"],"lighthouse-core/audits/dobetterweb/password-inputs-can-be-pasted-into.js | title":["audits[password-inputs-can-be-pasted-into].title"],"lighthouse-core/audits/dobetterweb/password-inputs-can-be-pasted-into.js | description":["audits[password-inputs-can-be-pasted-into].description"],"lighthouse-core/audits/dobetterweb/uses-http2.js | title":["audits[uses-http2].title"],"lighthouse-core/audits/dobetterweb/uses-http2.js | description":["audits[uses-http2].description"],"lighthouse-core/audits/dobetterweb/uses-passive-event-listeners.js | title":["audits[uses-passive-event-listeners].title"],"lighthouse-core/audits/dobetterweb/uses-passive-event-listeners.js | description":["audits[uses-passive-event-listeners].description"],"lighthouse-core/audits/seo/meta-description.js | failureTitle":["audits[meta-description].title"],"lighthouse-core/audits/seo/meta-description.js | description":["audits[meta-description].description"],"lighthouse-core/audits/seo/meta-description.js | explanation":["audits[meta-description].explanation"],"lighthouse-core/audits/seo/http-status-code.js | title":["audits[http-status-code].title"],"lighthouse-core/audits/seo/http-status-code.js | description":["audits[http-status-code].description"],"lighthouse-core/audits/seo/font-size.js | title":["audits[font-size].title"],"lighthouse-core/audits/seo/font-size.js | description":["audits[font-size].description"],"lighthouse-core/audits/seo/link-text.js | title":["audits[link-text].title"],"lighthouse-core/audits/seo/link-text.js | description":["audits[link-text].description"],"lighthouse-core/audits/seo/is-crawlable.js | title":["audits[is-crawlable].title"],"lighthouse-core/audits/seo/is-crawlable.js | description":["audits[is-crawlable].description"],"lighthouse-core/audits/seo/robots-txt.js | title":["audits[robots-txt].title"],"lighthouse-core/audits/seo/robots-txt.js | description":["audits[robots-txt].description"],"lighthouse-core/audits/seo/tap-targets.js | title":["audits[tap-targets].title"],"lighthouse-core/audits/seo/tap-targets.js | description":["audits[tap-targets].description"],"lighthouse-core/audits/seo/hreflang.js | title":["audits.hreflang.title"],"lighthouse-core/audits/seo/hreflang.js | description":["audits.hreflang.description"],"lighthouse-core/audits/seo/plugins.js | title":["audits.plugins.title"],"lighthouse-core/audits/seo/plugins.js | description":["audits.plugins.description"],"lighthouse-core/audits/seo/canonical.js | title":["audits.canonical.title"],"lighthouse-core/audits/seo/canonical.js | description":["audits.canonical.description"],"lighthouse-core/audits/seo/manual/structured-data.js | title":["audits[structured-data].title"],"lighthouse-core/audits/seo/manual/structured-data.js | description":["audits[structured-data].description"],"lighthouse-core/config/default-config.js | performanceCategoryTitle":["categories.performance.title"],"lighthouse-core/config/default-config.js | a11yCategoryTitle":["categories.accessibility.title"],"lighthouse-core/config/default-config.js | a11yCategoryDescription":["categories.accessibility.description"],"lighthouse-core/config/default-config.js | a11yCategoryManualDescription":["categories.accessibility.manualDescription"],"lighthouse-core/config/default-config.js | bestPracticesCategoryTitle":["categories[best-practices].title"],"lighthouse-core/config/default-config.js | seoCategoryTitle":["categories.seo.title"],"lighthouse-core/config/default-config.js | seoCategoryDescription":["categories.seo.description"],"lighthouse-core/config/default-config.js | seoCategoryManualDescription":["categories.seo.manualDescription"],"lighthouse-core/config/default-config.js | pwaCategoryTitle":["categories.pwa.title"],"lighthouse-core/config/default-config.js | pwaCategoryDescription":["categories.pwa.description"],"lighthouse-core/config/default-config.js | pwaCategoryManualDescription":["categories.pwa.manualDescription"],"lighthouse-core/config/default-config.js | metricGroupTitle":["categoryGroups.metrics.title"],"lighthouse-core/config/default-config.js | loadOpportunitiesGroupTitle":["categoryGroups[load-opportunities].title"],"lighthouse-core/config/default-config.js | loadOpportunitiesGroupDescription":["categoryGroups[load-opportunities].description"],"lighthouse-core/config/default-config.js | budgetsGroupTitle":["categoryGroups.budgets.title"],"lighthouse-core/config/default-config.js | budgetsGroupDescription":["categoryGroups.budgets.description"],"lighthouse-core/config/default-config.js | diagnosticsGroupTitle":["categoryGroups.diagnostics.title"],"lighthouse-core/config/default-config.js | diagnosticsGroupDescription":["categoryGroups.diagnostics.description"],"lighthouse-core/config/default-config.js | pwaFastReliableGroupTitle":["categoryGroups[pwa-fast-reliable].title"],"lighthouse-core/config/default-config.js | pwaInstallableGroupTitle":["categoryGroups[pwa-installable].title"],"lighthouse-core/config/default-config.js | pwaOptimizedGroupTitle":["categoryGroups[pwa-optimized].title"],"lighthouse-core/config/default-config.js | a11yBestPracticesGroupTitle":["categoryGroups[a11y-best-practices].title"],"lighthouse-core/config/default-config.js | a11yBestPracticesGroupDescription":["categoryGroups[a11y-best-practices].description"],"lighthouse-core/config/default-config.js | a11yColorContrastGroupTitle":["categoryGroups[a11y-color-contrast].title"],"lighthouse-core/config/default-config.js | a11yColorContrastGroupDescription":["categoryGroups[a11y-color-contrast].description"],"lighthouse-core/config/default-config.js | a11yNamesLabelsGroupTitle":["categoryGroups[a11y-names-labels].title"],"lighthouse-core/config/default-config.js | a11yNamesLabelsGroupDescription":["categoryGroups[a11y-names-labels].description"],"lighthouse-core/config/default-config.js | a11yNavigationGroupTitle":["categoryGroups[a11y-navigation].title"],"lighthouse-core/config/default-config.js | a11yNavigationGroupDescription":["categoryGroups[a11y-navigation].description"],"lighthouse-core/config/default-config.js | a11yAriaGroupTitle":["categoryGroups[a11y-aria].title"],"lighthouse-core/config/default-config.js | a11yAriaGroupDescription":["categoryGroups[a11y-aria].description"],"lighthouse-core/config/default-config.js | a11yLanguageGroupTitle":["categoryGroups[a11y-language].title"],"lighthouse-core/config/default-config.js | a11yLanguageGroupDescription":["categoryGroups[a11y-language].description"],"lighthouse-core/config/default-config.js | a11yAudioVideoGroupTitle":["categoryGroups[a11y-audio-video].title"],"lighthouse-core/config/default-config.js | a11yAudioVideoGroupDescription":["categoryGroups[a11y-audio-video].description"],"lighthouse-core/config/default-config.js | a11yTablesListsVideoGroupTitle":["categoryGroups[a11y-tables-lists].title"],"lighthouse-core/config/default-config.js | a11yTablesListsVideoGroupDescription":["categoryGroups[a11y-tables-lists].description"],"lighthouse-core/config/default-config.js | seoMobileGroupTitle":["categoryGroups[seo-mobile].title"],"lighthouse-core/config/default-config.js | seoMobileGroupDescription":["categoryGroups[seo-mobile].description"],"lighthouse-core/config/default-config.js | seoContentGroupTitle":["categoryGroups[seo-content].title"],"lighthouse-core/config/default-config.js | seoContentGroupDescription":["categoryGroups[seo-content].description"],"lighthouse-core/config/default-config.js | seoCrawlingGroupTitle":["categoryGroups[seo-crawl].title"],"lighthouse-core/config/default-config.js | seoCrawlingGroupDescription":["categoryGroups[seo-crawl].description"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__METRICS":["categoryGroups[lighthouse-plugin-publisher-ads-metrics].title"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__ADS_PERFORMANCE":["categoryGroups[lighthouse-plugin-publisher-ads-ads-performance].title"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__ADS_BEST_PRACTICES":["categoryGroups[lighthouse-plugin-publisher-ads-ads-best-practices].title"]}},"stackPacks":[]};</script>
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