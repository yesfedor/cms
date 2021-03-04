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
  <script>window.__LIGHTHOUSE_JSON__ = {"userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4021.2 Safari/537.36 OPR/68.0.3590.0 (Edition developer)","environment":{"networkUserAgent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3694.0 Safari/537.36 Chrome-Lighthouse","hostUserAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4021.2 Safari/537.36 OPR/68.0.3590.0 (Edition developer)","benchmarkIndex":1392},"lighthouseVersion":"5.7.0","fetchTime":"2020-02-09T14:35:58.685Z","requestedUrl":"https://vk.com/im?sel=c190","finalUrl":"https://vk.com/im?sel=c190","runWarnings":["Chrome extensions negatively affected this page's load performance. Try auditing the page in incognito mode or from a Chrome profile without extensions."],"audits":{"is-on-https":{"id":"is-on-https","title":"Uses HTTPS","description":"All sites should be protected with HTTPS, even ones that don't handle sensitive data. HTTPS prevents intruders from tampering with or passively listening in on the communications between your app and your users, and is a prerequisite for HTTP/2 and many new web platform APIs. [Learn more](https://web.dev/is-on-https).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[]}},"redirects-http":{"id":"redirects-http","title":"Redirects HTTP traffic to HTTPS","description":"If you've already set up HTTPS, make sure that you redirect all HTTP traffic to HTTPS in order to enable secure web features for all your users. [Learn more](https://web.dev/redirects-http).","score":1,"scoreDisplayMode":"binary"},"service-worker":{"id":"service-worker","title":"Does not register a service worker that controls page and `start_url`","description":"The service worker is the technology that enables your app to use many Progressive Web App features, such as offline, add to homescreen, and push notifications. [Learn more](https://web.dev/service-worker).","score":0,"scoreDisplayMode":"binary","explanation":"This page is controlled by a service worker, however no `start_url` was found because no manifest was fetched."},"works-offline":{"id":"works-offline","title":"Current page does not respond with a 200 when offline","description":"If you're building a Progressive Web App, consider using a service worker so that your app can work offline. [Learn more](https://web.dev/works-offline).","score":0,"scoreDisplayMode":"binary","warnings":[]},"viewport":{"id":"viewport","title":"Does not have a `\u003cmeta name=\"viewport\">` tag with `width` or `initial-scale`","description":"Add a `\u003cmeta name=\"viewport\">` tag to optimize your app for mobile screens. [Learn more](https://web.dev/viewport).","score":0,"scoreDisplayMode":"binary","explanation":"No `\u003cmeta name=\"viewport\">` tag found"},"without-javascript":{"id":"without-javascript","title":"Contains some content when JavaScript is not available","description":"Your app should display some content when JavaScript is disabled, even if it's just a warning to the user that JavaScript is required to use the app. [Learn more](https://web.dev/without-javascript).","score":1,"scoreDisplayMode":"binary"},"first-contentful-paint":{"id":"first-contentful-paint","title":"First Contentful Paint","description":"First Contentful Paint marks the time at which the first text or image is painted. [Learn more](https://web.dev/first-contentful-paint).","score":0.02,"scoreDisplayMode":"numeric","numericValue":9626.805,"displayValue":"9.6 s"},"first-meaningful-paint":{"id":"first-meaningful-paint","title":"First Meaningful Paint","description":"First Meaningful Paint measures when the primary content of a page is visible. [Learn more](https://web.dev/first-meaningful-paint).","score":0.01,"scoreDisplayMode":"numeric","numericValue":10680.805,"displayValue":"10.7 s"},"load-fast-enough-for-pwa":{"id":"load-fast-enough-for-pwa","title":"Page load is not fast enough on mobile networks","description":"A fast page load over a cellular network ensures a good mobile user experience. [Learn more](https://web.dev/load-fast-enough-for-pwa).","score":0,"scoreDisplayMode":"binary","numericValue":20508.207500000004,"displayValue":"Interactive at 20.5 s","explanation":"Your page loads too slowly and is not interactive within 10 seconds. Look at the opportunities and diagnostics in the \"Performance\" section to learn how to improve."},"speed-index":{"id":"speed-index","title":"Speed Index","description":"Speed Index shows how quickly the contents of a page are visibly populated. [Learn more](https://web.dev/speed-index).","score":0,"scoreDisplayMode":"numeric","numericValue":17725.168572393733,"displayValue":"17.7 s"},"screenshot-thumbnails":{"id":"screenshot-thumbnails","title":"Screenshot Thumbnails","description":"This is what the load of your site looked like.","score":null,"scoreDisplayMode":"informative","details":{"type":"filmstrip","scale":7282,"items":[{"timing":728,"timestamp":2006972417058,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":1456,"timestamp":2006973145258.0002,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":2185,"timestamp":2006973873458,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":2913,"timestamp":2006974601658,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":3641,"timestamp":2006975329858,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/AP1ToAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgAoAKACgD//Z"},{"timing":4369,"timestamp":2006976058058,"data":"data:image/jpeg;base64,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"},{"timing":5097,"timestamp":2006976786258.0002,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APTbX9mPxXF4UvbGfwZBPrkpVYNVXXFVIFDhiTByGYruQncBjZgAqS32H9qUPa8/O+Xtyr873Pk/7Prez5eVX73f+Rgf8Ml/Ef8A6Bdr/wCBsX+NdH9sYTu/u/4Jh/ZmI8vv/wCAQXv7IXxOvLZobbTbdZWKkbL6NSQCCVyCSMgEZA4zntQ84wltG/u/4I/7MxHW33/8A5o/sK/HDZgQxbsAZOrfX/635Vn/AGthu7+7/gmn9m1+y+8Z/wAMJ/HP+5D/AODWq/tfDd393/BD+za/ZfeB/YS+ORH+rh/8GtH9rYbu/u/4If2bX7L7zrV/Y1+LAS0B06BmjwZm8+L998pH975eSG49MVX9sYXu/u/4JH9mYjsvv/4BHJ+xp8W3muyllAiOqiJPNiJiO0gnO75skg+2Md6X9r4Xu/u/4ILLK/Zff/wC6f2PfigT/wAgSD/wLj/xqv7Ywnn93/BF/ZmI8vv/AOAH/DHnxQ/6AsP/AIFx/wCNH9sYTz+7/gh/ZmI8vv8A+AH/AAx58UP+gLD/AOBcf+NH9sYTz+7/AIIf2ZiPL7/+AH/DHnxQ/wCgLD/4Fx/40f2xhPP7v+CH9mYjy+//AIAf8MefFD/oCw/+Bcf+NH9sYTz+7/gh/ZmI8vv/AOAH/DHnxQ/6AsP/AIFx/wCNH9sYTz+7/gh/ZmI8vv8A+AavhT9lj4k+GPFOjaxdaTHDa6few3c0qXUZKIjhmIAPUAGubEZrhqlGcI3u0+n/AATahl1enVjOVrJ9z7CsVX+3dUcNaFysKsIpC0wIDf6xTwo5+UDrye4x8nK/Kj6aNuZ/I1KzLMvxP4zsfh7odz4g1GK4ms7PZvjtVVpDvcIMBiB1Yd+ma6cPQliaqpRdm+5jWqqhTdSS0R5paftgeDLNLdVh8UyCGFIW82K2Yy7f4mJkzuPcjGa9r+wcV3j9/wDwDyv7Vp/yv8DRP7aPgwRhzo/iAIxKhjbw4JGMjPm9sj8xU/2DiduaP3/8AP7Vp/yv8Bv/AA2r4J/6BWv/APfiD/49R/YOK7x+/wD4Af2rS/lf4ES/tn+Clnkk/s7xCQ6quwwQbVxnkfvepz+gp/2Diu8fv/4Af2rT/lf4Hp3wn+JulfE3ww+paWl9FbWs/wBiZtSCLK7qiHd8rMDnePTnPFeTjMJPBzUKjV2r6HoYbExxMXKKtY7Ca1MvmYleMvgZGDjjsGyP0rgOshWwlE5kN/cMnH7ohNowQf7uecYPPQ0AXaACgAoAKAMXW7DydP1y58+d/PtGHku+Y02owyo7Z7+uKAMGK4829uU/eARhBhoyq5IJ+Un73BGccD65rToSt2WKRRzvxB8ESfEfwfqHh2K7WxkvPLxO6bwuyRZOmR12Y/GuzCYhYWsqsldK5zYmi69J007XPkz4VfC/wr8ZdWn0vw54+U6iloNShtNQ0ea0mubIv5Yuo45GDmIuCmWAYEDKgMhb6JZ9Sd/cemh5VTIcTSSlNpJ7Hp//AAw9qP8A0Nlr/wCATf8AxdP+3aX8j/Aw/smp/Mg/4Ye1H/obLX/wCb/4uj+3aX8j/AP7JqfzIP8Ahh7Uf+hstf8AwCb/AOLo/t2l/I/wD+yan8yPbfgn8I3+FPhO60W8vYdX86/N6JBDsCnbGF4JPIMeQfXHpXhZhjI4ypGcVayt+LPVwWGlhYyjJ3uzQ8DL8RrfU9cbxrc+GLjSkfGl/wBgW1ylxJGCctOJHYKxAX5E3ckjccZbyld6HobHQeGPEi+JtCi1MWlxYq7SL5NwnzfI7LuGCQVbbuVh95WUjrW9al7Gbg2nYyp1FUgp2epc0/UxqHm4guIPLfZ+/iKbvlVsjPb5sfUEdqzcbdUWpX6MtI5cZ+6MkfMMHrUtWKQgl+YqQQR0O04NFhXF8wc89OoxzTswuYms6mZ9F1NPslzGBBMpZ48DgSDPXodmfo6+vA1Z2BO6uYFrPBJqV+keTPGUEuZg55XI+Xcdg57gZOTz1rR3srkq3My7UFlrS/8Aj/i/H+RoA+W/2OtY+BeofGHxHbfD7/hJG8T2mirDanxAP3cWkJOq+TalefLWQQ5afMrZT5m2ttlT5k7dXc7MRiK1VKFX1PsqkcYUAFABQB4/8J/ij448ReKfG+meMvBN1oNnpV/FFpN9b20jRXtvLNJGh3EneybA0jKAqht33SrNKlzNqxvUpxgk1K9z0+DXre5SZ1hvVERUOJLKZDknA2grlvcrkDqeKoxHadqR1DbIsciQSxLLF5sEkTgHsyuoKnBHBweoxxTFcv0gCgAoAz/EP/IA1L/r2l/9ANAHLQWXkXt3cbLcCfZho4dsh2jHztn5vbgYrVu6sJKzLNSMtaX/AMf8X4/yNAHx9+wL8VPgp40+IvivTvh38PofCWtm2uLq2vv7WOpy3GmJPEnzmRi1qzO8Ra3Qsnyqd7bUNQo2Vy5yTlyp3+/9Uj7lw/8AeX/vn/69BAYf+8v/AHz/APXoAMP/AHl/75/+vQAoz3IJ9hTA8a+GOlfGvSPEvjK58aa3oHiLTpJYhollbRfYo0XcS7ZVZHQbWK4cyliicp8zPjHn1uaS5XZxR6Baah4weaEXOhaLFEQPNePWJXZT32r9lG4Y9SPTA61qZiaRe+Krm8P9paNYafEr4BttVa4VxtU5wbdCMEsMZH3T2IoAnXUPE3nyI+jaaqBZCki6k5UkAeWp/cZG453HGFGCN5OAAJFfeKvMhE2jaQsZciVo9VlYqnHKg2w3N1+XgcfeoA3bZpWt4jOixzlR5iI25Q2OQDgZGe+B9BQBT8Q/8gDUv+vaX/0A0AclbTvJqt9G0luyxrGFSOUmRcgn516L7EdfwFavZErdl2pKLWl/8f8AF+P8jQB8bfsB/Fr4PeJ/jF480D4dfCqDwFfXdo2sjUrO/a6hvYROiTKiOq/ZVEkkW2KJfLIU/d2Jlzjyuyd0VJJM+76zJCgAoASmB534K+HmteDfG3jDXrrxHc63p+reU9rpRiCmFkU7nZi2GdshRtEagKM5+XYPls3FG0pKUUra9zm/2bv2grz44+Htc1G/8OXGjrp+pSWUVxCjSQXIBY7VP3t8YAV8gDdjGCSi8WErzxEOacbFVqapysnc9cOowy7AVuRufYMQSDn344HPU8V2HOXaACgAoAz/ABD/AMgDUv8Ar2l/9ANAHNJNI9zNG0JjjTbskLA+ZkckAcgDpzjkHtybC76ktAFrS/8Aj/i+p/kaAPGv2YfG2g+Jdc1eXw/8NtM8HpqcH2281LSbGO3WeVJPlimZUVpXCz7wzAH94/yjqfFwOPli5zi1ov6sfT5tk8cspwk6qcn062tv6X0PouvXPmAoAKADvQB5b8Kf2nfhh8cfE/iLw94G8X2fiHVdAYC/ht0kUAb2TfE7qFnj3IR5kRdfmTn51ywO/PhjSfJuYhp1skdzJJLOscYUSyOpV3bHVmUkFjyaAKknhLw9NevI2jWv2pmVnnFrtdsbcAuByMIi4zjChenFIDbihSBNkahVyTgepOT+tAD6ACgDP8Q/8gDUv+vaX/0A0AcpbyI1/dxrayROuzdOyALLkdj3x0NavZCW7LdSMtaX/wAf8X1P8jQB5N+zV+0zpfxz1LVNMtfCF14c1exje51YKUmt4pTIERGlVVzI6jd8yg/u3HOwmuanrd2t/XodVePK7c1/8vvPfto9BWxyhtHoKADaPQUAHTpQB83fCS0+Dvh7x/8AF2z0rwlZeF57u7tr3xJeX0rGC8kkeTy/OWUlISXdyIuN28nGcgNqS3RrKDjFS6M9dgj+Heg+ILG1hXwzp2uLLJJaQoLeK5EkrbJDGBhtzsApx1Iwc9KRkdm7FVyFLn0GP60AOByBxj2oAKACgDP8Q/8AIA1L/r2l/wDQDQByk0V+Z8xXVsINwwj27FgOMjdvHJOecdO3GTYBDFfJKvmXMEseRkCAocYOed59u3Y+vABq6X/x/wAX1P8AI0AfMv7E3xy+Nfxc8d+P7T4m+G/7H0WwkKWgW3iUWM6uM2jOjks4RwSrrkBVJPzctqNtBK/U+v8AYPQVmMNg9BQAbV9KYEdvKtxCkqB1R1DASIUYA+qsAQfYjNFgPCfg38YPG/iDxJ8R08Y/Di98L2GkamkVjPb2Mpe/jLeUZVbJ+07Qoy8Y+6i4X5lFXKNlcL9D2eDxBaXFg94kd6IkiaYo9hOsu0KGOIygctgjCgZJyACQQI8xlV/FcLQWJW3v4J7tUcRy6dO/l7tvyyMilUYbucnjBzwDSEXl1qDz4oCl0ZZELhhZTbOOuW24U+xOaYF2CZbiCOVA4V1DAOhRgCM8qQCD7EZFIB9AGf4h/wCQBqX/AF7S/wDoBoA49tIX7ZPcpcSRSy7eUjiyoAAwDsyQcfxE+2KsBkfhvTYmYpZWyoxLGNbeMLk5z/D7/wCeaANvR40hu7eONQiKNqqowAAOABQB5T8D9f8Ai1c/FjxlonjPTr5/CFjE72OranbW8byzNdS+VGjQ7VkT7L5LEqhwxIYq4K1xUVUXNKozvxLo8sI0lrbV+fY9tt75Z7uSE2c0WxmXzJIwEbGOQQTwdwx9D6Gpp4h1KsqbhKNr6taO1tn5307/AHnLKKUVJSTv5oveWn91fyrsMg8tP7q/lQA5VC9AAPagDxH4QftSfDb9prxB4x8LeE9Tv57vw1cxrcyASWouEDgiaCRWDNHvUoc7SccqVYFgZ6kfCenvcySfadSMhCqy/wBq3O0YxjC+ZgdOcAZyc5yad7CJIfDtkkmohZ9RJvt3m7tQuDsyDnyyX/dffOPL244xjaMD1GMn8H2VxfxXjXOqLNG6uqx6pcpGSrbgGjWQIw7EMDkYByBQAXHhCzutQku5LrVAzoE8qPVLiOJcOz5CK4AJLYJ9AB04pA3c3AMCgRn+If8AkAal/wBe0v8A6AaAOfqwCgC1pf8Ax/xfU/yNAHiP7Lth8c7fxRr0/wAUk+x6KYGMcc95HOZrppBhogrv5caxocjKDdNgKduRzwjKGkpXvr/wPka1HGTXKraH0f5sH9+P8xWq02Iu+4edD/fj/MUEh50P9+P8xQA9WVhlSCPagDw34Kah4P8AFfib4kQWXw00rwrNNqONWultLZZNXkEkmHugigmTf5pw5c5djnJNc1CtKte8HH13/rsdFWkqaXvXO2vrb4ZvYCWeHwjJbBy6NOLbyvMVQmckYBAkVc9g4HcV2csuxzXXc63RrrTdTg+26dJZ3KOzZns3WRSTgn5l7n5SfwqWmtx3vsaNIAoAKAM/xD/yANS/69pf/QDQBz9WAUAWtL/4/wCL6n+RoA8S/Zg+F3xW8DeN/Ft/468Rale6PdPJDbaffX/29JGVozHdRyM5eIFfMXyyoOMZPyqBjDmStPXzKk03ofSdWSFABQAUAVb9JTauLaKKWfKkJJIY1PIzlgrdh6HOMUAc1pek6u0JtrmxWzhkUCWVNcuLiQbjlgpeL04yCCMnBHUmoHWQQrbxLGmdq8DcxY/meTTbuA+kAUAFAGf4h/5AGpf9e0v/AKAaAOfqwCgC1pf/AB/xfU/yNAHkv7O/wRufht418SatF4ri1awnjNlcWFrcF4/tYdWeWRAcJKB8pzliDzjndU60qyXO7tFSpwpv3FZPU+gKyJGJGEZ2BYlzuOWJHQDgHp06D3Pc0APoATvQB4t8FvgP4i+Eninx9qU/jg+IrXxDqsd/aw3mmossCHb5wleNl8x2GQrAKF5Yq2dottNbBqepw2muidjLqdg8JRQqJp7qwfYATuMxypbJxjIBAycZMAT2VrqKSI17e29wojAZYLZosycfMCZGwvDfKc9RzxyAX1UKMDpQAtABQBn+If8AkAal/wBe0v8A6AaAOfqwCgC1pf8Ax/xfj/I0AeRfs2/AJ/2frd4pfFU/iGA2zw7ItBltATuVg5+eTJwpHuWJHXFclKgqUnJPc6qtd1YqLWx7yuoxNcmDbOHADbjbuExx/Ft2556Zz19K6DlLVAEdxMLaCSVg7KiliI0LsQPRQCSfYcmgDOvNXK6dHdWtvJd+YBsjQqCcnrknGO+RnI6ZyM3y2dhXurl1RIwyHQD0KZ/rUsY7y5f+eif9+z/jSAPLl/56J/37P+NAB5cv/PRP+/Z/xoAPLl/56J/37P8AjQAeXL/z0T/v2f8AGgDG1ia8mtdTtFgyDbsI32EeYSuOD0A5HU54PGME1YDn7+V0u3CuyjjgH2FSBX+0S/8APR/++jQAfa54/mSaRWHQqxBoAj/ta+/5/bj/AL+t/jQAf2tff8/tx/39b/GgA/ta+/5/bj/v63+NAB/a19/z+3H/AH9b/GgBrapek5+2T5/66t/jQAn9qXv/AD9z/wDf1v8AGgA/tS9/5+5/+/rf40AH9qXv/P3P/wB/W/xoAP7Uvf8An7n/AO/rf40AH9qXv/P3P/39b/GgDY0+9uHtELXErHnkufU0AS3JN7bTW9wftFvKjJJFL8yupGCCDwQfSgD/AP/Z"},{"timing":5826,"timestamp":2006977514458,"data":"data:image/jpeg;base64,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"},{"timing":6554,"timestamp":2006978242658,"data":"data:image/jpeg;base64,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"},{"timing":7282,"timestamp":2006978970858,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRQBAwQEBQQFCQUFCRQNCw0UFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFP/AABEIAHIAeAMBEQACEQEDEQH/xAGiAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgsQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+gEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoLEQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APTbT9mLxZF4TvbGfwXBPrku0QaquuKqQKHDEmDkMxXchJYDGwgAqS32H9qUfa86m+XtZfne58n/AGfW9ny8qv3u/wDIwP8Ahkv4j/8AQLtf/A2L/Guj+2MJ3f3f8Ew/szEeX3/8Agvf2QvideWzQ22m26ysVI2X0akgEErkEkZAIyBxnPah5xhLaN/d/wAEf9mYjrb7/wDgHNH9hX44bMCGLdgDJ1b6/wD1vyrP+1sN3f3f8E0/s2v2X3jP+GE/jn/ch/8ABrVf2vhu7+7/AIIf2bX7L7wP7CXxyI/1cP8A4NaP7Ww3d/d/wQ/s2v2X3nWr+xr8WAloDp0DNHgzN58X775SP73y8kNx6Yqv7Ywvd/d/wSP7MxHZff8A8Ajk/Y0+LbzXZSygRHVREnmxExHaQTnd82SQfbGO9L+18L3f3f8ABBZZX7L7/wDgF0/se/FAn/kCQf8AgXH/AI1X9sYTz+7/AIIv7MxHl9//AAA/4Y8+KH/QFh/8C4/8aP7Ywnn93/BD+zMR5ff/AMAP+GPPih/0BYf/AALj/wAaP7Ywnn93/BD+zMR5ff8A8AP+GPPih/0BYf8AwLj/AMaP7Ywnn93/AAQ/szEeX3/8AP8Ahjz4of8AQFh/8C4/8aP7Ywnn93/BD+zMR5ff/wAAP+GPPih/0BYf/AuP/Gj+2MJ5/d/wQ/szEeX3/wDANzwP+zD8RfB/i/SdbvtBt3s7C5S4lLXa/u1VgfMG1gSy43Acgkcg9K5cVmmGq0Zwi3dp9P8AgnRh8vr06sZySsn3Pqy9ksILzWZ76TShBtgEguZc4IyVMob5UHQrx6nuMfLe9ZWufQvl1vboRaVbeGL7WLspBo7a753n3CQSJJMsmAQzdGDcZzgdc980PnSCPs5bWNTxP4zsfh7odz4g1GK4ms7PZvjtVVpDvcIMBiB1Yd+mavD0JYmqqUXZvuFaqqFN1JLRHl3h39srwTqUOnf2dB4tvQ8EccSvawFrkDBDkM+SzAg5GNwZWHBU1vhcJHGuSw9WMrb7+nVbeZWNWIy6MJ4qjKKlte3rbRuztujZk/bN8HRKrPoviJFboWtoQDwD/wA9fRlP4j1rvjkeIltKP3/8A8l5rSX2WR/8Nq+Cf+gVr/8A34g/+PVX9g4rvH7/APgC/tWl/K/wIl/bF8Gz3ZlTTfErFV3eUkEJXCqxY483pg5P+6D2olkeJitXH7/+AH9q039l/gem/Cv4laX8TvC8t/piX8EFrObBm1NUWVnVEOTtZgc7x6c54rycXhJ4SahNptq+h6GGxMcRFuKtYvaRdWGnaZ9kTUNVvCN7Nc3NtLLKfvuckx7fUAAdgoGSBXLySOnmRpW8yTSRzLqF68coXbCYMAc7s48vcMhSDk9D2JFS4tblXuaiXCSMAN2SM8qR/SpAkoAKACgDF1uw8nT9cufPnfz7Rh5LvmNNqMMqO2e/rigDl76We5F7Fbz3NtJF5X7yO33453NsDA7yRgHAOM8fNnGytoQ29bfkRaPrsVzFbQMdTaVlxuvbGSI5AJO5vLVAeD04PGOoymuv6hF97/cVPiD4Ik+I/g/UPDsV2tjJeeXid0LhdkiydMjrsx+NdWExCwtZVZK6VzHE0XXpOmna58ifCvwJ8L/EUUlj4Z8SaXpFnp1rJqw02+0q+tmvLOWTy/tcccs3meWZRtGAjbgmVw0ZbTLq2DwEpzpqTb01a02dvwR6+c180zLD0qGJ5Ywi7qy3dmrvrs3p3u7s9Sl/ZesvtXlr4j0S3cwv1srnYP3QJky02BtDbgc4znrtIHt/21T7S++J8d/ZdTuvxItA/ZVt/E7zzab4isLqKBsMW026jjJJZgAxkXdgEA7TxtXOCTkWdUu0vvQ/7Lqd19zNHUP2L7h4pG/t+wtRv37obSY7R/d+aVuOe/PHWqWd0l9mT9WhPKqj6r8T2T4IfCX/AIVZ4PudGub2HV1nvjfLIICgX5YwvBJ5BjyD649K8PMMZHGVIzirWVvxZ6eDw0sLCUZO92R+B/CvjiDWdcn8aXOgzWEZWPSZPD7X6XLQjqZRJMQhIVCUjyCerNty3nKUtjuaW7Ox8Ha5FrXhu2vYra8s4iZEEV6WeTCOy7txJLK23crZO5WUjrWlak6VRwbTsRSqKpBTSauaOn6mNQ83EFxB5b7P38RTd8qtkZ7fNj6gjtWbjbqi1K/Rk0N2sxcBZE2OY/njZckDORnqPfpU280O5J5g3Y5zjP3TRYLh5g556dRjmnZhcxNZ1Mz6LqafZLmMCCZSzx4HAkGevQ7M/R19eBqzsCd1c5ee7t1m1HbsMkLRCfzr3Yu0+uCSgAJIBA3HPrmtldWv+Rm7a/LqM0OxhI+1xuXj3HyXj1Ga5jddoXcQx2g5B4GcY68mpk3t+hUUlqdHpf8Ax/xfj/I1BZ8ofsnar8BdT+Knia28C/8ACWN4js9HjitW1bePK0lLlVEVoYvnMayCDJmzKwKgs4VwsqfMnbq7nZiMRWqpQqvzPq6DVNKuZI4Ei1wGNzIDJa3yAkSdCzKNw3N90nBXsVAwjjJdNew8QK0cR1iNbfax+0pdWh+ZeAGcKX468nBHODQBfTRrW0uGnWS8Z5GUlWu5pFyCAMKWIA6ZwAD3oA0lOQDz07jmgDxP4f8AxQ+JPiTWvHOma94MPh46VqVtHpF9JZzyWt9ay3LR43Bss6ohLuo2JvV8MmC6jLmlZrQ2qU1CKcZJtneDxP4huJGkt9JtBbQjbMk7XcbliRtKZtvmAwwOAeoOQBzp7q3MLSOi03UjqO2RY5EgliWWPzYJInAPZldQVOCODg9RjipGX6QBQAUAZ/iH/kAal/17S/8AoBoA5MafIlxdyxfY42uTGNxtdzOo4Ic7hv46DoPetlL+rkON/wDhi1DG8UESylTIFAYxptUnuQMnAz2yfqal66lIuaX/AMf8X4/yNIZ8YfsP/Fj4LeL/ABn4vsfhz8M30DXfs813az2et/brq60xLmJPmeaVTaMXkjdrdWKYRTufCZhRsrlzknLlTv8Af+qR9laTpy3kvkSafrWnRwRr5clzqDFXyuCoCXDHK5IJYAZ5BPBpkF4+DrL5yJr5C8nmsU1C5Us2AMkiT0UDHSkBYtNCh0yb7RFLeSOqFdst3NMuP913Iz74zQBpoSVy3Bx09KYHi3w70T43WGu+NZvGPiLRNYsJZYhodvYwrZLEu/c7A+XKyLtYriTzS2xcFPmZ8oc13zao0lytLl0OmtdK+IDXNp599CIVI+0EalEzMO4AGngfjlScY461vzLsY2bNvQrvxbNdFdV0qxtIo3Ch7fVDOJV2LliPsyEHJYY4+6exFS7FItLqHibz5EfRtNVAshSRdScqSAPLU/uMjcc7jjCjBG8nAQCRX3irzIRNo2kLGXIlaPVZWKpxyoNsNzdfl4HH3qAN22aVreIzosc5UeYiNuUNjkA4GRnvgfQUAU/EP/IA1L/r2l/9ANAHEXV0ftGopK2nSQIIU2TzkFSclRIDkLltpGPvfgK6I9NzOWt72Kmg+INLmu47K1vNIYyqzpFaaiJXI6rtTaMjG7vwFGMg/KpaoUN+h1ml/wDH/F+P8jWZqfE37EPxg+DHiD4nfEHQvAPwfg8I3d5bDV1urO/F1Dfx/aY45FRJti2oWWWHbFGNh2cAbEDOceV2TuipJJn2xb6iYIUu7LwxcvIDLAUt3tPMUKyr180DB29N2RsIIBwKixJq6Nqt1qaubnSL3SSqqwF40Lbs5yB5Uj8jHOcdRjPOEBfkZkXKqXOQMDHr15oAImZ41ZkMbEAlTjI9uKYHmOg/CbU9I8TeNNR1LxNqWr6TrRge30y1le0lgeIZL+ckinexAX5DGu0YbcCAjbSV4o1lJSio217nEfs+/G3WPjB4P1W7tvDNxYJp2qzWPn3V9dSRXMZDnEcu2STzIysavkbQScEE7F5cHiZ14c9RW+QV6UaUrRd/vPZtG0rT9DlnMEusStdSBWF5dXdyqkZxt8xmEY+bqu0HAznHHU23uYpJHRVIwoAKAM/xD/yANS/69pf/AEA0AcndX81v9oItCwjMaxkyovm7jgkZPAHTnkkHA6Z1ikS2xdLvpNQtg8scUU4/1sEMwm8o91YjoRz+VK1thqVzW0vi/i+p/kaQzwv9nz4iaDqc+v3/AIe+G2ieD0vrX7dd6laWyWME8qSfLDcSrFudws+8OyA/vHG0dT4uBx8sXOSa0X9WPp82yeOWU4N1U5Pp1tbf0urH0Ck9/cTjFlYukZRhIl4WZc7d2B5fXBfHIz8vTcdvsXPmLI1xnAz1pAJIXC/Iqs3oxwP5GgBVzjkYOOQDQB5L8O/2rPhZ8Xda8TaR4M8WQ+JNR8OEDULfTrWeR8GRo90OI/8ASE3LgyQ71AZTnDKS0rvQHodSdR8L+RqEQ0a9jieWSS5VNCukE0kgKO/EQ8xmGQWGSQevStOST/4dE86L1v4c8N6q0d6miwLNcKk3nSWLQysMIVDllDDhEUq3ZQpGBis32ZR0MUKQJsjUKuScD1Jyf1pAPoAKAM/xD/yANS/69pf/AEA0AcdJJH9ovcaXNO8BikJVEzO2QV2bmAYqQOpGOK3W25DSvaxRtNI0y/aBJPDMdqkUXlxmeCAiNQAuwBGbAx07YH0ym2tbkpJ9DqdKAW+hAAAGcAfQ1G5qeN/s/wD7UFl8an1rT9L8GTaDr9hE9zqUbSq9ok5kCIjzpHnzHUZyUyPLcfNsJrmp63dkv69Dprx5X8V/69T2K98Q6kNKkubOytGuI4XLx3Ms0SCVSoIVvIJdSS2GC5OFwDuO3Y5ja0ye6uokkube3hR4kYeTK0mWIyw5RflHY9SOoXpQBam3qmYo0dvRm2j88GgByZ2jIAbHIByM0AfMPw+k+E/gzxd8YI/D3gCDTb64vbO88Rma5VUv2lmZVMv2hxFAQ0kjiEsu7LYGciq5ZL4jWcHGKmup6nBqfgvQdesIINA0Ow1fzJJLOGOawiu1lkbZKVXeCN5wuVJLEEMBgZpRW1zC77Hc6TrF3qJuvtGh3+l+S21Ptb27eeOfmTy5XwOP4tp5HHWlJJbO40290agOQOMe1QMKACgDP8Q/8gDUv+vaX/0A0AcpLFf+fmK6tlg3DCPbsWA4yN28ck55x07cZNgLCl8ki+ZcwSx5GQLcocYOed59u3Y+vAM1NL/4/wCL6n+RoEfLP7Hfx4+OXxW8XfEK3+ImgJoWl6fKFsybBJVsZllXfZt5Ugd5PLY8MNy7VY5zgjS6CV+p9Owaxqn21LaW8R3BKsR4fu0RjuwPnLlQOnOccZ6dJGbFrqohTy7vzZpxIw3QWEypg5ZR0bkLgE5xuz0JwEAo1mG8lW3thcxTMgkV57CYJggEAsVAzyPlzkc8DBwwNC0kE1tFIN2HUN88bRnn1VuV+h5osB4F8Kfi58QPEut/EmLxL8Pp/B8Ok6pHFp92NLmm+3RFxG0ow4+1YVeZIyMKqkKcqtaOKSuwu9j1z+2r26sPtlvcFIY4JZXSbRroSthAy4jJD5GR8u0sxBUAEHEqwveYWviiYW9h9pS4W4uoonEa6TcYjZtuVkK7whG4ZBb5cHOQDiXYNeprrrUHnxQFLoyyIXDCym2cdcttwp9ic0DLsEy3EEcqBwrqGAdCjAEZ5UgEH2IyKQD6AM/xD/yANS/69pf/AEA0Ace2kL9snuUuJIpZdvKRxZUAAYB2ZIOP4ifbFWAyPw3psTMUsrZUYljGtvGFyc5/h9/880AbejxpDd28cahEUbVVRgAAcACgDyL4OeIfi/P8UfGeieLdO1F/Cdihex1bUbS2WSSZryTy0QxFUlj+y+SxKqSDuUlZAVrhoqprKbO/EujywjSWttX5nqlpH4ikvtTQahAoedjbG60kmOJAQNoKzAsCCuCSDu8w9MKhDEOdWVNwkrX1a0drbet9O/3nJKKjFS5k7+aOk021uIbVVvpbe5uP4pIITEh9MKWYj866zMmnhZoyITFG/ZnTcB+GR/OgCSFCkYDFS2OSi4BP0yaAPC/hh+1l8M/2idW8Z+HfC+oard3Hhm6hjujbwTQtcL5ihZoGjO9ot42t904ByNjAlrUL21O/D6FNNJP/AMVMHO1WU/2kB8pUAiPoM8Z4GRknIJNXytdV96J5vI27HRLCeO8lil1QDUlLuJr26VkDA/cDtmH75wE24OMAFRiHuVcWfwfZXF/FeNc6os0bq6rHqlykZKtuAaNZAjDsQwORgHIFAwuPCFndahJdyXWqBnQJ5UeqXEcS4dnyEVwASWwT6ADpxSBu5uAYFAjP8Q/8gDUv+vaX/wBANAHP1YBQBa0v/j/i+p/kaAPAv2d9I+PTav4jf4ky3OlaU0G6Lyry3nlluWlUgwhmlWONYkOQdikzYC/LleeEZRupO9/Lv0Nakoya5VbQ95to77UsRveappe0BzPIbIljuPyYVXHTg8DgDBzk1qtNiLvudHE8UcSK0yysoALsVyx9TjAz9BQSNnMcsZVLgQt2dCpI/MEUATRkFBh9+Bjdxz+VAHgHww1jw94gv/il/wAI98JtF0fVWvs6gJI7a2bXJRJJ812yRk+bu81gJN/zM2WBLGufD1pV73g4+u/9djorU1SS96/9dzrj/wAIdPEj6lpHgJNNEjMs5vYZF3qirkBoQMgyBCc8Bl/vba7XBra9zkU0eh6NdabqcH23TpLO5R2bM9m6yKScE/Mvc/KT+FZtNbl3uaNIAoAKAM/xD/yANS/69pf/AEA0Ac/VgFAFrS/+P+L6n+RoA8I/Zz+FPxa8G+LvFl7411/U9Q0m5mMVtpt7qrXSSlJYmjuo595kiBTzF8kr8wADnGAMoc6Vp6+ZUmm9D3J4vEUeoow0+G6VpnPnvrEkYSP95sBjWEKeHxjB6KWZioNWSadxea5HKxj02xkhUj/l9kDlc84Hk4zjtnk8ZHWkBPp1zqc8rLe2Vtax7Th4LppTnPAw0a9s8/zoA0aAKt+kptXFtFFLPuUhJJDGp+YZywVuw9DnGKAOa0vSdXaI29zYrZxSKBLKmuXFxINxywUvF6cZBBGTgjqXdgdZBCtvEsaZ2rwNzFj+Z5NDdwH0gCgAoAz/ABD/AMgDUv8Ar2l/9ANAHP1YBQBa0v8A4/4vqf5GgDxr4GfAa68C+JfFd9F4sXVrC6i+w3FhY38iKbtXVnlfy2HlSgDYTy2DzjndU60qyXO7tFShCm/3asmexah4bu77TFsSknlK6OGXWruOXK7Qp81cP0HK5wxyTySaz0JuzT0ZNShyt9bW0e4bmkgupJMvgDhWX5QcE4DHB9SSabsLXqaNxbrcx7HLhc5zHIyH81INSMeqhVCjOAAOTk/nQB4V8L/2btX8B6z8QZdU8ayeJdN8SavBqVrDcWQgntwro7mSWF0LyZX5GXYFPzFW3bBbl2Qb6M9Am+HdxfER3uqme1UrIkayXqssow24t9qOQJMsBjKjaAflBo5mTyo3dE0O70x4vPvxdItukTKBNyy4wwLyv/tZzknIyxxynJvcaSWxsqoUYHSpGLQAUAZ/iH/kAal/17S/+gGgDn6sAoAtaX/x/wAX4/yNAHjX7Pf7O5+Blg9rceKZfEVuYTHsTQZ7QErIjhziR8sAhA9WYkelcdKgqUnJPc6qtd1YqLWx69a+G9LmtrjSr+yt5Y5IvLItdOltojDnIQtkg4LE4yMZJxwTXScp1MMCW8YSNQijsPpj+lMBt4Y0tpXlV3jRSxVFLMQBzgDkn2HNIDPutWMemxXNpbPdBwoSJNozk4zknGO+RnI6ZyM3y2dhXurjry8vLdh5FlJeIR1h8sEHPQ7nX61LGRQ6jqEkJdtKuYmAH7t/J3HP0lI478/TNIC1ZTXV1GXkga0OeEmRSSPX5XIoAs+XL/z0T/v2f8aADy5f+eif9+z/AI0ARztJbwyStIm1FLHEfYfjTSuByb+MYvEK6nptltllFq3Axncd6YPOAAVIznqGGBjnSVNxV2ZxmpOxWv5XS7cK7KOOAfYVkaFf7RL/AM9H/wC+jQAfa54/mSaRWHQqxBoAj/ta+/5/bj/v63+NAB/a19/z+3H/AH9b/GgA/ta+/wCf24/7+t/jQAf2tff8/tx/39b/ABoAa2qXpOftk+f+urf40AJ/al7/AM/c/wD39b/GgA/tS9/5+5/+/rf40AH9qXv/AD9z/wDf1v8AGgA/tS9/5+5/+/rf40AH9qXv/P3P/wB/W/xoA04by4k0tt88jZRwdzk561SAYLWG4SWGWGOWKSNkeN1BV1IwQR3BHaqbbREdz//Z"}]}},"final-screenshot":{"id":"final-screenshot","title":"Final Screenshot","description":"The last screenshot captured of the pageload.","score":null,"scoreDisplayMode":"informative","details":{"type":"screenshot","timing":7282,"timestamp":2006978971198,"data":"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAHeAfQDASIAAhEBAxEB/8QAHQABAAIDAQEBAQAAAAAAAAAAAAUGAgMEBwgBCf/EAEsQAAEDAgMEBgQMAwgBBAMBAQEAAgMEEQUSIQYTMVEUIkFhcZEHM1OBFRcyUlVicpKhosHRIzRCCBZUk7HS4fCCJDVz8UNEsmMl/8QAGgEBAQEBAQEBAAAAAAAAAAAAAAECAwQFBv/EACwRAQEAAgEDBAEEAgMAAwAAAAABAhEDEhRRBCExQWEFE1KxIjIzcYHR8PH/2gAMAwEAAhEDEQA/AIiJhkkawEAuIFybBWd+wuMs2hjwV7adtZLEZo7ydR7RyNuOhVWXsuwe2eDV0WG/3imbT4rhrXRw1Mhs2Rhbl1PO3Pldfc5888JvGbfG4ccMrrKvN4NlcSmosVq8sTKfDXmOd732BcDYhvM/uFBL1raXGcD2i2UxGhw+riwyalqZJxC54y1epNwe2/Hxt3LyVa4c8s5eqaTlxxx10iIi6uQiIgIiICjazEzHUbimiM0o4gKSVdMnQ6ysjn3rGzCwkj+UBe+nMKZXSybbBjM7nhgp2l5Nsove/Ky/ZcYqYnZZaYMdxs4EFaKisiGKwVkRdI0ZCWu0ddoANzzNr371spMUpooYWT0Yl3YAJNusM1+0af8AKzutah8OS+xZ5lPhyX2LPMrIYrS5gegsAAtkDW2vYC+ouoc8SktNRLfDkvsWeZT4cl9izzKiEV2aiX+HJfYs8ynw5L7FnmVEImzUS/w5L7FnmU+HJfYs8yohE2aiX+HJfYs8ynw5L7FnmVEImzUTUWOOzjewjL2lp1U3G9sjGvYbtcLgqlAXNhxVtw2J0NDCyT5QGo5KypY6lokq6eOobA+VjZXcGk6reqxiGFVk+KunaGAOdmb1joBzNtEytnwYyX5WdF+C9hcWPajjZpNibDgO1VlzyVtMydsLpmb1xyhoNzdbpZGxRukebNaLlRENNJI6KYUjGPkn3kjn/LaAbhd+KROloZWsLg617N7e5SW1qyRo+GaX/wD0+6u+GRs0TZGG7XC4UTJX5tl4cK+DM07ZnS9Jcw5mg20b5a3UhhrXMoYWuBDg3UFMbaWSOlERVkREQEREBERAREQEREBERAREQEREBERAREQEREBERAXpPoZZLBiuIZhunPpgWGQWB6w1715zBIYZ45Q1rixwdZwuDY8CvWtmNqRj1S+FtK6HdR53OfJnNyeA0Fh/wvN6u39uyT2ej00nXLavs8liwSzRueG2LgbX1KKt1frB4IviPrKf8U+J/SFF+b9k+KfE/pCi/N+y9kX4HtLywOBeNSL6hevvOXy83a8fh458U+J/SFF+b9k+KfE/pCi/N+y9jc5rS0OcAXGwueJRj2vaHMcHNPAg3Cd5y+TtePw8c+KfE/pCi/N+yfFPif0hRfm/ZeyIne8vk7Xj8PG/inxP6QovzfsnxT4n9IUX5v2XsiJ3vL5O14/Dxv4p8T+kKL837J8U+J/SFF+b9l7Iid7y+TtePw8b+KfE/pCi/N+ywl9EVfKLS1lA8fWDj+i9nXS2kLmh2cC4vwTveXydrx+HhXxM1X+Iw77rv2T4mar/ABGHfdd+y936G72g+6nQ3e0H3U7zl8na8bwj4mar/EYd9137J8TNV/iMO+679l7v0N3tB91Ohu9oPup3nL5O143hHxM1X+Iw77rv2T4mar/EYd9137L3fobvaD7qdDd7QfdTvOXydrxvCPiZqv8AEYd9137J8TNV/iMO+679l7v0N3tB91Ohu9oPup3nL5O143hHxM1X+Iw77rv2T4mar/EYd9137L3fobvaD7qdDd7QfdTvOXydrxvCPiZqv8Rh33XfsnxM1X+Iw77rv2Xu/Q3e0H3U6G72g+6necvk7XjeFR+h2sjdmjqsPa7mGu/ZbvinxP6Qovzfsvb+hu9oPup0N3tB91O95fJ2vH4eIfFPif0hRfm/ZPinxP6Qovzfsvb+hu9oPup0N3tB91O95fJ2vH4eIfFPif0hRfm/ZPinxP6Qovzfsvb+hu9oPup0N3tB91O95fJ2vH4eIfFPif0hRfm/ZPinxP6QovzfsvbeiHMBnGoJ4LLobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+yfFPif0hRfm/Ze39Dd7QfdTobvaD7qd7y+TtePw8Q+KfE/pCi/N+ymdmdjKvZmpmnqqmCZsrMgEd7g3v2herdDd7QfdUTtDAYqeIlwN3W4dyzn6rkzxuNrWPp8ML1RVqv1g8ESr9YPBF5nddDqDrbvVaocJrYa+Cre+XevkdvyXNPV7PNWRzg1pc4gAC5J7FGsxdj5WtFPNu3S7kS9XKXXtzuumNs+GMpLrb9xzD5MQggEEwhmhl3rHkXs4NIH4lRMWzlZDD0eHEHxU4uG7t7mlouCABw0sdfrHkp+urqehEJqpGxtlfuw5xAANidSfArnhxvDpYY5BVxNDw0gOcARmFxf3KS5SexZjb7tFThdTO8B1U/LumMu2V7SHDibAgG/M6qNZguLvY0nEHw2lLi3evcbZrjW/aNLcOB5hTpxbDw3MayC2uucdnFbqaspqk2p545HZc1muubXtf8Fd2HTjUIMHxVk28GKvlDXte1jyW5rcQbdnDsW/BKHEoat9RX1Jc10eTdB5cARaztfAn3qbRTqq9MERFloUpF6pn2QotSkPqmfZCDhpcTE8sIMEjIZ77mUkWfYE8OIuASF2VE4gDLtc8vdka1trk2J7fArjbhMEdRFNC+aMxOLmtzksAPEBp0F13SRNkMZeNWOzN8bEfql19JNtEdfSvjDt9Gy7cxDnAEC19fctjaundJkbPGX3tlDhe65HYNRvsHMcQOAzG3C36DyW2PDoI5Y5G580ZcWdbRtzc28U9j3diIiiiIiAiIgIiICIiDklxGliqmU8kzBI6+hcNO4rc6djaiOA5t49pcNNLDv8AetE2HwzVrKp+bfMtlN9Bb/7XS6JrpWSEdZgIHv4/6K3X0nuzJtxWqnnZOwuZewc5uvcSP0WUsbJoyyVjXsPFrhcFc9DQQUYduo4w8ucczWAGxcTbwHD3J7aHSfWt8D+iPcGMc517NFzYXQ+tb4H9FkoqMw/GqOvmp46ffZp4TUMzxOaMoIBuSONyNOPNaZ9o6GGbdO32YVPRTeMt69mnttcdYcL37LrpZg1CGwtdA2RkUbomsk6wyuc1xuDx1aFqq8Boqqd8sjZA97878r7ZgQ0Fp7iGN8kK7K2rZSNY6Rrixzg0uFtCTbmsIMRgkp2zPLogTls/je1+zuW6op4qgNEzS4NN7ZiAe3UdvDtWk4dT7mGJjS2OOQSgXJJI7yg/XYjSNALp2hp7dbcAePZoQnwjS5i0yFpAv1mOGmvMdx8itcmD0Ej8zqZl7k2BIGoAOg04ALZJh1LI20sW8Frddxdz5n6x80H58J0WYt6Qy44jksoa+mmlEcUoLyL2sRz/AB0Oi1DCKEEkU7bm99T2kk9veVnBhtJBOJooiJQCMxe4nW/G514lBnPXU8FRHBK/LLIQGC3yiV0rgq8LgqKptRd7Jha7mniBw0/Vd6AiIgIiICIiAiIgIiICIiAiIgIiIC4p65zJZWw08kzYfWOaQLaXsAeJsQV2rhqKAyPldFUywCb1jWW10tcXGhskHZE9ssbJGG7HAOB5gqF2qI6NAL65zp7lL0kboaaOJ5a4saG3aLCw4aKJ2qA6NAba5z/ogp9X6weCJV+sHgiC4zM3sMkZNs7S2/ioamwEwzxSOq3OEcm8y7sC5vfmpuR2RjnWJsCbDiVAYbtGKud0clOYxcAEG/Ega+a6Y9WrpjLp3NpyaCOZ8LpBd0Ts7NeBsR/oSol2zOGObG0xPyx2yDOTlsCNPMrsxarfSxw5HxR7yTIZZRdjBYm51HK3EcVFv2nhizNfCXuba5Y4WOhJ46i+U5QeNwpJl9GVx+3fDgdHATuhK3M0sdaQ9ZtgAD3AAWW+jw2mo55JoGFsknyiXE3UJTbUsY0ivEbHkZgGkANBt1SSflC+vBZs2upXCUinnIZfg0ngQNdNPHhw1V6ckmWCyIoOg2iira2GCKnlDZTYPd4Eg6cw3tt/racWbLPluWX4ERFFFSan0pR0tRLTnCnO3TjHm39r2Nr/ACVdl89Yx/7tW/8Azv8A/wCivZ6Phw5beuPL6nky45Ol6X8bUf0Q/wDzx/tT42o/oh/+eP8AavAdq6nFnYth2HYNMyN8zS+Qht3NANgpWsoYaGCoY2qkr8eZle/LLu2xg/Otp28Fx5fUelwz6cMer/17vT/p3quXj/cyy6fHs9p+NqP6If8A54/2p8bUf0Q//PH+1eUbqSCClNRJE58zC4ZDcG1r+PFdmGUsdXJMySUx5InyNs29y0Xt3cF7uHi9NzYfuYz2/wDXzvU9z6bk/a5Pl6X8bUf0Q/8Azx/tT42o/oh/+eP9qoIweL4UNN0g7kszMflGZx3ea2W+nitWN4Y3DpYGMkdJvG6ki1nAkELpPTcFutf24fv8vzv+nofxtR/RD/8APH+1Pjaj+iH/AOeP9q86xfCnYa2IvkzOeXAttYstbj5qNWp6Tgs3J/aX1HLPa16v8bUf0Q//ADx/tT42o/oh/wDnj/avKEV7Lh8f2dzy+Xq/xtR/RD/88f7U+NqP6If/AJ4/2ryhE7Lh8f2dzy+Xq/xtR/RD/wDPH+1Pjaj+iH/54/2ryhE7Lh8f2dzy+Xq/xtR/RD/88f7U+NqP6If/AJ4/2ryhb6GFtRWQQveWNkeGlwF7XUvo+GfX9nc8vl6h8bUf0Q//ADx/tT42o/oh/wDnj/avParDI6eGnkdK85zZwDeGgIt7j/3gsMRw9lLFI5j3uLJd2czbXFiQfwWZ6Xgv1/a9xy+Xs+xm2I2oq6iNlGaYwMDrmTNe58ByVt631V5J6Ef/AHLE/wD4mf6leur5vqcMePkuOPw93Bnc8JcmPW+qnW+qsGVEMk8kLJGOljsXNB1F1Vscix5mMVFRhjZpGNymJm86h/huBuC+3yi3+n3hcZNutuls631U631VUKit2pp5y3oe9hu6MSMawkkvIa619NMpPZr2LKqG0FbQ08sG8hm6PKyVpGUl4kaG2GYWOUO11FvFa6PynV+Ft631U631VUn1e1fQ7iij6Vd/VbkLfkaal3z9Bpw43WMVZtcZ2g0EWS4BzuYARvW63BuOoXdnZw7E6PydS39b6qdb6qqLqra3osZ6HFvi1u8ALLNNm3ym5v8A1XvyFlYWdKkjojM18cpYDKWuFmutqLXtx8VLjpdu3rfVTrfVXDJ05lJAIRmlDevmI1On/K/Yn1xqrSxNbFY6gg8/+FlXb1vqp1vqrg/9XJRNErHtnLrXY4DKLcdDr4L8bHU9Cla/fb0/Js7W9hre/C99EEh1vqp1vqrmw9tQ3edJBuTcHNftPf4cl1oMet9VOt9VZIgx631U631VkiDHrfVTrfVWSIMet9VOt9VZIgx631U631VkiDHrfVTrfVWSIMet9VOt9VZIgx631VC7UX6NDe3y+zwU4oTan+Vh+3+iCn1frB4IlX6weCILotQpoA5rhEwFpzAhtrHmtqhKKsc/HZwTV7p4ysa+MhgI7b+5aktZtk+U2QCLEXC/Mo5BRmPieSCGKnhqJS55zbl4YQA08SSO23aofDqzHHtgzxyBkkhjyysaHNALrnjfg0DXtcrMdzZctXS1OjY4EOa0jvC/IomRRtZG0NY0BoA7AFXmy7ROifF0cNcdWTOfGCBfgQLi9u2ysFPvOjxb+29yjPbnbVSzRLtssOQREUaEREBfPOMf+7Vv/wA7/wD+ivoZfPWMf+7Vv/zv/wD6K+j+n/OTxet+I832wxKaCsbX0Lmtq43mAg8ADwd7tdFJ7OTHCoGTTxPq6CucBVbwBz3O+cT+it9JhuztdHNBj1Ax7ZCCJmN6zTfU3Gt7XXI/ZrZ7D6V1PFVYtUwvnsRGW2EZ8bG4vx7u9fG5vRcnDlcJj7P1vov1P02eM5Mr/wCePLoxpsOJSU0mHuLBQOaC4/JLXWuwd9lspoKiYvNNHI/KOtkBNgdNVyQwtpjLDA9xpGvduWniGX0vzNuKk8Nr20cVTG+IyNmDRoQLWN+1pC+5+n+nz4OK9U97dvzv6363i9Z6mZcX+smtuPePD82d2caXvrySSWSUgyPc8gZRmN7DkrDFtLHHFuzh7HgWDC54JaMmWw6vifetke1EDA62G3c43LjPr8gtv8njre69nVl/F8fWPlXH1Er4WxPkcY28Gk8F+QQy1EgjgjfI8gnK0XNgLlWCfadsjhkoWxR3GZjJLAjM02Fhpo0j/wAiuV+NsOLmtbSlrTE6LdbwHizJe5bx7dQUmWX8SyeUc2hq3vlY2mmc6I2eAw3ae/ktM8MkEpjmjdHIOLXCxCn6HaY0lbUVLaUOdLI2QAyaaNI101430t5aLCixmjiqqiaSjeN61seWMtADcpDidNSTY2sE6s/BrHyg4opJn5ImOe6xNmi5sNSsp6eanyb+KSPO3M3O0jMOYUpNjmfFG1kVPugI3xlgf8oOzcTbgMwAFuDQtku0BfURTNpsro492P4neDppoNLc9dSVd5b+DWPlBIrbPtNRvna00JMBa0PIcA4dQNc0C3ybgm3adbhYO2opxKx7KBzw4HesfILHXQCzeAH/AHRTrz/ivTj5VVfoJaQWkgjUEKy/3oZe5w2EtLACzN1c1iM1rd407uKr9ZN0irnnDAwSPc/KP6bm9lrG5X5mmbJPisRPMMtpZBl4dY6L8fLI8APe9wBuATfVYItaZel+hH/3LE//AImf6letyAuY5osCQRqLjyXkXoTdlxHE9Cf4TOHiV63vPqP/AAXxPW/81fV9L/xxw4Pg9Phe+MN3OlN3OIF+HDwvqhq5Phl8DJM8bIi58eUA30tl7T237OC7t59R/wCCquM+kTZzBcVnw3EquSGshDS9m4ebAgEagWOhXl35d3b/AHgmsy1DmzR5zkeTbRx+b2ZQDyJHFaY8eqmzulnpy2DQBgdoB1euTlvYkmxv2cFXGem7YWR+VmJ1Dj3Ucv8AtVq2W2uwjamCebBJpaiOBwa9xicyxIvbrAXWuqeE1fLW3aZ8kwbBQPlZbVzJBx10t7h5hHbRVRMjY8KmLmkiznWuRl04cnHyU+1zWlxbEQXG7iANTwufJfu8+o/8E3PBq+SCQywRyFuUuaHFp7L9i2LXvPqP/BN59R/4LLTYi17z6j/wTefUf+CDYi17z6j/AME3n1H/AIINiLXvPqP/AATefUf+CDYi17z6j/wTefUf+CDYi17z6j/wTefUf+CDYi17z6j/AME3n1H/AIINiLXvPqP/AATefUf+CDYi17z6j/wTefUf+CDYi17z6j/wTefUf+CDYi17z6j/AME3n1H/AIINihNqf5WH7f6KX3n1H/gobad+amh6rh1+3wQVGr9YPBEq/WDwRBdFgJYy7KHsLrkWB104rJ+bK7JbNbS/C6haTDa2GZsr5aYvEhfcMto75XnotSSs22JapqIqaPeTyNYy9rntPJbGPbIxr2ODmOFwQbghc9dTOqBC6OQRywv3jHFuYXsQbi4voT2qHn2a30kj31ji55BJMYudCLmx4i/VP9NhxSSFt+onIKiKoDjC8PDTYkcFtVb/ALtSRNtSVjIgG5cphJBAtYmzh1tNT2r9odmdyWvnnZK4uzPY9mdpPbxPHWwPLSyup5TeXhY0VVm2Pjc17IqoRMfG2MgQjsDRz+rfxKtEbckbW3vYAX5qWT6qy37jJERRoVUm9GGG1U0lQ+urA6VxkIGWwJ15K1qUh9Uz7IW8OXPj/wBbpjPjxz/2jz0+irCwCTX1gA7Tl/ZRsOw2yk1YaSHaRslWOMLKiIvH/iNV5R6VfSHi22e2GI4FgleyhwDDy+IvLrCqlZfNcjUjMMob26FReH4LUO2DqsRqsAjZiFKC2K0GSV1gP4nM8T5K8nreXjura9PF+m8fJjL9/f8A937vffipwv8Ax9b+X9k+KnC/8fW/l/ZeZ/2dfSnX120R2Rx+d1Sx8IkoamQ3cCGglhJ4gi5B7u9e+45icmHCARQNlfMS0F7yxtwNALA3cewdtjqt31PNPnJ5+T0fHhl06U74qcL/AMfW/l/ZPipwv/H1v5f2UhSbWVrRTwyUbKuWawZM1+7DyZMvyQCQB2u4aW4ldLNpK98MVW6gbFCGPL4cxc4ndte05rCw61joeB5au65f5Ofb8fhDfFThf+Prfy/snxU4X/j638v7KwU+0ctVHXtbTxRvphGWvZLvWvDjx4Cw5X48bLprKqtiqcWdDK0xQU/8FkjQAZi0utfkAB5nkndc38jt+Pwq3xU4X/j638v7J8VOF/4+t/L+y66jabExTh1NTyyxCMxGcMa689yRY3ALS0CxtY5gtU+0mNxCeJsJMgBbHvIbuY5sjiQ/KctzG02sbcOad1y711Hb8fhp+KnC/wDH1v5f2T4qcL/x9b+X9lccCqK2oZUGvEbTFIYW5ARny6F/dm5dluJUondcv8jt+Pw86+KnC/8AH1v5f2T4qcL/AMfW/l/Zeiondcv8jt+Pw86+KnC/8fW/l/ZPipwv/H1v5f2Xoq01j5I6SZ8Nt41hLbi4uAndcv8AI7fj8KB8VOF/4+t/L+yfFThf+Prfy/srnFWzZqgPZcs+S0DxA4a9/gvzC6yepltMABuw62Uixs39z5dydzzfyO34/CK2S2QpNmaqeSlqJ5jOwNIktpY9lh3q0LE+tb4H9FkuOedzvVl8umOMxmoLyv0t+jQ7TYjTY3hbWmviAjqIS7J0iMHsPY4a8f0XqiLLT5cb6IcQmqgKLDKuCR7GktmDRGx1yHXffXQA6A6le/8Ao/2Wg2R2ejw+FwkmJ3k0gFs7zy7hYBWRFNJoJsLngvLMZ9LsFLXSx4bhklZSQvyPqDJkBPdoeRtfivT6mIT08sRJAe0tuOy4Xz1BFjuxrMZwc4Oap9cWMbK6EyMLW5tWi1iTm93Jev03Hhnvq964c+eWOtez3LZbH6TaTCI6+hLgwktex3ymOHEFS6onol2dq8F2WmjxJr4Z6yQyGO9nRtsAPA9vcrV8ExXv0is4k/zD+33rjyY4zOzG+zphcrjLZ7pFa554qeIyTyMjjGpc82AXEMIh/wARW9n/AOw/s96icW2SjrKMxRVlQ19pLGV5e3rm507isyY2+9atv1Fh6VB0hsG9ZvnNzBl9SNeHkfJblUWbGsbiEMoq5dywh516xcARYchqPxU1JgsL48nSa4C1ripffj4q2Yz4qS5fcSiKO+CYr36RWcSf5h/K3NBhEIAHSK3gB/MP7Pes+zW6kC5ovdwFuZX6q5iGykFZvr1dU3e34vLrXFu3j3cuCkW4PCBbpFbxB/mHdnvVsx8pLfCSRREOAwROeRVVxztym9Q7mTx963/BUWa+/rOOb+YfytzU1PJupBFGOweEtA6RW6Zf/wBl/Yb81z/3cp+kvm6XXZnZtN+e23bx7FdTybvhNgg3seCKHp8BhhlmeKmsO8eH2EzhawA568Fu+CIbW6RW8CP5l/afFTU8m74SSKNOEQl7XdIrLh2a3SHcrc+Cx+BYc1+k13yQ3+Zd2G/Pimou6lEUd8ExXvv6ziT/ADD+33rF+DQubl6RWj5OvSH9nvTUN1niGKwUNdR0srXmSqJykWsLEA3+8F2yyMhjMkrg1g4kqobSbOyVVdh8UBqX07myxyyukLzHmLddff5K11kHSIDGHZTma4G17EEEae5aykkmkxttu2TqmFoYXSsGdpc3rfKAFyR7lDbSSMload8bg5hebEeCkWUAYymDHgOgaWtdl49XLqorHKfouG08WbNaRxvaw1udBy1WGlWq/WDwRKv1g8EQXOR4jjc92jWgk+CiIcfgkmY0xSNje4Na+4PHhccRdS0rBJG9jvkuBabd6iY8ApmGL+LORG4OAJbrbhc2uVvHp+2cur6deLYg3DqdsjonyuccrWMsCdL9pA4BczNoMPc1pzy3NhbdONibC1wLaEgHldSFXSwVkJhqoY5ojqWvbcLU3DaNsjntp4w45eA00taw7OA8gk1r3Lvfs5P7w4d2SSnhoIHki9yOztAv4LGXaPDmZhFI+aRr2tLI43OOrgL6Dhqt0mCUD42xiDIwODiGkjNa9gTxtqVjNgGGyNIFOIyXh94yWm4dmt4X7E/xT/J+DaHCyL9KFrZvkO5kcuOh0Uqo9uC4a0ANo4Ra5Fm8wQfwJUgpdfTU39iIiiilIvUs+yP9FFqUh9Uz7IQfz/xVj8M2wrqE1HRaijxBwnMkYeXOz2NgR3Xv3r1/HH4rBhNZXVGPUwpDGX3NDCDzAeCBcn/legemL0J0e2mKMx7B5Y6LHW5c+cfwqjLwLrah2lr8lVduPR9tztVh1Lg1PhdNh9MT/wCpqZKqNzcunVblJda9+wKZ4zKzV/7fTvPhy39zKSW+Pb/8eVehOOrxf00YIKZ7ZDA4SSvjja0NjY0k/JAGvD3r7Zr6+noQ01LnNDg4jKxztALk6DgAvP8A0N+ifDPRxRzSRydLxaqaGzVJFg1o/oYOwX15n8Ff6zD6etlhfVRtlEWbK1wBabi2oK3nZb7PHz8kzusZ7T/5YvxSiZOyHpDDI+9g3W1uNyOHvW1ldSPDiyqgdlbmNpAbDme5Q42UoQyVolqMsmjrlp0HAXI4D/7upGiwqnoxIITIQ9pYc7sxtmc7jx4vP4LDg2vrKJ0d31NMWG3GRtteCzNXTB1jUQg3LbZxxHEe5RI2ZohI5+8qOswssXCwuzIbacvxXO/ZKldNpUT7hzXhzSQTq5pABtwGXxQTlXXU1I6JtRIGulNmCxN/+3Ww1MAkEZmi3h/pzi/G3DxUbJgUElJFBLNPLuw5uaRwcXNcQS0kjhoOFjoo7+6zxTBvT5DIG5b5RZunygbXuHEu/BBYW1lK5j3tqYSyP5bhILN8T2L9bVU7i4NniJbxAeNFxVOERyU74IZnwRvlbI/IGk9VoAAuLAdVp7eCi6XZRkbYhNUulc2TM5wAbdt3GwAHaSCbk8EFgFZTGPOKiEs+dnFuzt9481nJPFECZJY2AcS5wFlC1Gy1DO9z3SVLXkABzXgWGVrbcOTfxPdbdXbP0tW/O6apif1dY5LWsLcOHYgkel02cM6RDnJsG5xcm11kypge0OZNE5pNgQ8EEqD/ALqUmeN3SasGNjWNs5o0FrcG8wCkeydC2MNM9Y45w8uMupNyeXee9BORVEMry2KaN7gASGuBIB4LaorDcEpsOLjSvma4sEdyQbAWtYWsOHJSUTHMBDpHyXPFwGnkAg/T61vgf0WSxPrW+B/RZICIsJpY4YnSTPbHG0Xc5xsAO8oM0UPRbT4JXVQpqTFaOWc/JY2Qdbw5+5TCAi/C5oNi4X8V+oCIvxzmttmcBfhcoP1ERAREQEREBERAREQEREBERAREQEREBERAUJtT/Kw/b/RTahNqf5WH7f6IKfV+sHgiVfrB4IguiiOlVLq+K88TYXTOjbE1vWcADck/spdaoKaGBjWQxta1t7acL8VqWRmy1w49VVVHDTzUkbpQJf4rGszFzMriQO/QKMo8axCOldHVUu8qorF5sW5wXECwA+q7yHNWZfjWNa5zmtaHO+UQNT4qyzXwWXe5Vfh2hnmMeTDahrSwF5cD1T2jQG/7nWyk8ErZcQw9lRPA6neXOGR3cbA+9dyKWz6hJfIiIo0IiIClIfVM+yFFqUh9Uz7IQY1VTBSQOmqpo4YW/KfI4NaPeVXD6QNkxOyJ2PUDXPNml0lmk/aOn4r5x9Mm3U+1WO1dHRyv6JRyOjhhvYHK6xfbtJ7+AXnGJR1MNEJZyHBw/iBpuP8A771jqm2um6ffccjJY2yRPa9jhdrmm4I5gr9Iv2kL5X/s1be1dDtJDsvW1Dp8Mrg40uY33MgBdYcgQCLc7L6Q2mlxNkEDcHiL5Q4yv1ABa3XJe3FxIHhdasYl2mMv1imX6xVPfjW0bDCG4Wx+9eD6h4DWEgWPWNnC978NOHPTDjm0ueIvw4v3skYLeiva1rcxDje9xp1hcaAajUIq7ZfrFMv1iqbS41tC6opN7hjssr42SncPDGtzkOIubt0N7u5dlwtNRX7RUddXSUsE1U3eSAMlhfkjbn6hFh1rt+bw4lBeMv1imX6xVOixbaKKvlkqcPJpXZAGxxOdk/iuadAbk5LOv4aDtxocY2mDGmpw4Pf1pHM3Dm9XrOyg3tcAMaL8S/6pQXPL9Ypl+sVB4LiGK1OK1NPiFEIaeONhZII3NBeQMwuSQ4a9nJTqD8y/WKZfrFfqIPzL9Ypl+sV+rTWbzok24JbLkOUgXN7INuX6xTL9YqMD6z/1AcJBqLEC+l+zTjbVZ4a6rMzhVB9sosToBoPx4/8AbJod1rSt1J0P6LNYn1rfA/oskBfNf9prFsaxDarCtmcJrRTUphfPM0uyhxABu62p0OgX0ovG/TDsDNie1lFtRBDLVU9PRyU9RTQj+Ibg2cOYsSD4BS2z4bwkuWq+b8PwnFMJroGwYzd997IWOJ3AbqXcf+my+v8A0RbRP2k2OpamdxfOxoa9x/q5H8CvnjarAqefC30WyVDUOxKZjBPFYvkc2ws0WHG51C+gvQzsvWbJ7C0VDiuUYg675WtNwy50bfuHG3bdYxtt93Xmxxxns27R7JVuJ486vpqqGKNxhc5j79Yxm7b25EuPvCypsD2lYWb7FmvYLXZvn69a5Ga19Rdvde/YF04thuJTbZUtbTibojI4W3EjRGLOk3lxmzXLXNtYEEgX4LVW0mNwsxB+HQSnEHvdkqjUNLXMdIC0NY64u1lxqBa2l7rt13WnluE2xnwTaV1RNLBjDI2XBiic5zmttlNnG13XIcD3HxWdZs1iFZSYcyorY5J6eEsklf1jK7O1w4jTRvEa9nBcjhtwaZ9zCJd0+27MV85kZlOot1WB/jfmAtUcm2s0b3RkMc2fK4SRxcAXDqDS7Pk3JNz/AEq9V3ouE+W6TAtq3wlgxqOJ1rZxI5xPUDSbFo1uCfep7AaHE6SoqXYlXCpjeP4bQT1Ou89v1XMH/io3aL+8MNY6TDpqh1NJK2NsULIiWttH1hmbob7z5RtwXBU1G2FOHCSGaZ/y81K2EtGXNdoza5TePj1rh9tLKTO5TRZJdrgKeTehznuIa5zh1zc34D/X8Fphp6ls4L3Etzl1w8/6d6gMm1jJYnMkD4nuEkgk3WZgzsJjbYAfJzi5J8eC24bFtTHW0zaydklKCx0r37vOep1mgNAFsxOvHQcbrK7WtERFEREBERAREQEREBERAREQEREBQm1P8rD9v9FNqE2p/lYft/ogp9X6weCJV+sHgiC5u+SfBUzDKStZikbpIKgMG6uSDawy9/7+A7LotDKumfII2TxOeSRlDwTcLpjlZtjLGXW0ftJh0uJU0EcQY7JLncHkC4yOb2tcOLh2KNfR7QRMDGzMmAFxklyZcpdYai5uC3jp1bd5sdVVQ0rWuqHhjSSATw0BcfwBWmnxShqGRuiq4TnaHAF4DrWvwOo0UluvguMt+UXQUWNxzwuq6yJ7GvJflceFhfS2t9dL6dnJWBfgcCSAQSNDY8F+qW7ak0IiKKIiIClIvUs+yFFqUh9Uz7IQfDm1lLLs3tLitPXxOAE745D2gg6O8CLHwKh+liupNxHJHMx2hbH/AEt5L699Kvovw3b6iJMzqDEw3KyqjbmuOT26XHvuvGsA/s3bRYbipc/HMKFGSA5zWSOeR9mwAPvXPp+a6Tk9tKN6DsBnrfTDgkVEJBBRu6ZPrfdtYDx5XOUe9fbFVWQUpjFRIGGQ5W6E3Pu8R5qtbAbCYRsTSztwyN0lXUkOqKqT5chHAdzR2AKx1lDTVpi6VEJN27MwEmwPPx04rU+HOsZMSpIpjFJMGvDmsIseJ4fjpfmsJcWoInuZJVRh4JaW8TcWuLf+TfNa6nBKCpqhUzwufMHteHGR2hBuNL/gsanAMMqZpJZ6YOkk1cc7uN7346aqjY/GsPYLmqZa9rgEjxvyvpfmtsuJUkTA98wDS7LcAnW1+zuXM/AcNewMfTl0Y1ax0ji1pve4F7A37R3rKHBqSNkkZD5I3OLgHvcct2hpF737EA45hoverj0BJ48Brf8A0tzuLLZ8K0XRnztna5jXZD2HNa+XXgfFcP8AdfDM7gIXCFzCwxB7g037eP8A9LL+7GEWd/6U9YEH+I/t96Dp+GaEQQyyTtjbK0ubmN9AbHUXHHTxWyPFaKRkj2ztyxsdI64Is0cezs5LnqMBoah8YkY7csY9giDiGnM4ON7HmFlFgeHxRSRMhdu5I3QuaZHEZXcQLnS/cg3DFKIwOm6QwRtOVxOlja9j3rW7GsPaHl1QAGC7rtcLcL9nZcX5dq0N2awlriRS6kEayO7fes6rAMNqo8lRA6QXJJdK8kkgA3N78AEG44vQgkGoaLPyEkEAG9uNuF9L8FspcQpqqXdwSFz8uf5DhpzuQuWbZ/DJjGZabOYzdt3u5311115rspaKGlN4Q++UMu57nGwJIGpPMoOlERBifWt8D+iyWJ9a3wP6LJARF536VPSI3ZOMUWHCCbF5GbzLKerEzmQNSTY2Hcs5ZTGbq443K6j0MNaCSGgE8TZfq+TZfS/6Q6LpuNxz0ldhsErc1G6nblbGdCS5tnDW3aV9EejPbag2+2Tp8aw5pizExzwON3QyDi0nt4gg9oITHKZTcMsbjdVakVXxzah2F41FRdGa9jrXu+z3XtqxttbX/ArVHtxRdGbNLS1TWkZjZou0WuDYkE3seHJdOjKsdUW1FAUu1FLUYkyiEE7JXODCTlIa459NDr6s6i44LkO1sdHR0s+IsLjVB7mMgZ8gNNtbu1vpqnRV6otSKqO25w5kgjdBVZragNa6x1NtDroDwWMe3eGPqBC2CtzdW/8AC4ZnMaO2/F4046Huu6MvCdU8rai46XEGVWFU1fEx+6njZI1psCA4A6+azNS5sUz3RXEZI6rr387f9Czpp0otUMpkdIC22R1rg3BW1AREQEREBERAREQEREBERAREQFCbU/ysP2/0U2oTan+Vh+3+iCn1frB4IlX6weCILlK0vje1rspIIB5KEi2djiNNIydwqInNLn20cB2W7FOotTKz4ZuMvy5a+hhrtwJ8xbDKJQ0GwJAIseY1UTLsvTSNjh30wp2xOjLQRmN3A3vbst2KwFNeSS2Fxl+XHhlAzD4nsjlmlL3ZnOldmcTYD9F2JryTXknysmhE15JryUURNeSa8kBSkPqmfZCi1KRepZ9kIIranabBtlMMdiG0OI09BSg2D5XauPJo4uPcAvM6b+0f6O5q7o5r62JhNhPJSPEZ8ruHvC+d/SztdQ7e7aVFXiFcwUVO58FNC5zv4bWuIFgCBdwAcT3qBh2VwqowyStpXxyBurW3d1hfU/K4aFY6vvTrePGa3nJv8vv7B8UocZw6GvwmrgrKKYZo5oXhzXDxC6yAeK+RP7PO0c2ym3OHYIZYm4ZjRdE6nZIS1soBLJGg3IJsWnxHJfTe1lHX1TqJ2HsfJui8uaHADMW9XMC4XF+Wq6ZY9NcZd7T+Qd/mmQd/mqkDtYXVRcMoL5NwGmI24ZMxP9HyvrajvWTYNqZaqVr6owwgsyuY2I3HVDuIJ+eeHzbdqyq15B3+aZB3+apNNSbUUdM2KmLrG/We6IuzFoDnOJ+tq23Z8rVW7DG1LKNja2QyThzgXm13DMcpNgBe1uARHRkHf5pkHf5rJEVjkHf5pkHf5rJEGOQd/mmQd/mskQY5B3+aZB3+ayWEzS+J7QSCQQCDYoP3IO/zTIO/zXBSQ1bZzv3HdmJrBlfexAN9Off4LZh8E0LgZnPcNyxpzOv1he/6IOqwErbcj+izWJ9a3wP6LJAXyV6bsGxOT034l/Bnliq6GKppyzhkjaGuA/8AIHz719argxbCKPFGNFXEDIwEMkGjmX42PfYadyl+Fl1Xx/gNFU5q1tTSTVDjAQ6nyktLR1uHC+g716h/Y9wmuoNkscqaqKWClqqxpp45B81nWcPMD/xXpeH+j6gpK185qZntdxYGhpPcT/8ASt1HSwUVLHTUkTIYIxlYxgsAFzwxst21ldobFdoYMOxdtNPATGyMPdNZxILg4hrQGkEnIeJHvXLBi2zdVWSt3UTJ4oOlyGSDKWMYQc2o7Cf9e9TlZhVDWzsmq6WKWVlsrni5Fjcfr5nmsosNoonPMdLC0vDg6zB1g4AEHxDR5Lr7sIKhx3AJSa+hY+Rwha0vigccrc7mtboLAl2e3PyXTDi2CYsHUwyvIgdI5joi0sZZubs0PWHf5LtbgWFtMRFFDeK2Q24WdmHjrc+8r9dgmGmGojbRxRidjmSGMZS4EAEXGvBrR7gm6iPw3F8FqZ6WlpossjgWRtfTluW2fqkkaE7t5t22K1DHIfhKKldhohDql8DpZAbNLcmU3a1wBcXtsHEcON9FJ0GA4ZQTtmpaSNkrSS15uS2972J8T948yt8mGUUlQyd9NE6Vj94HFuubTXx0HkFdmkVNtVhFPO6kk37TG7JYU7i2wLwSLC2Ubt+vd4LJm0+ESNZldIWSEgHcOtazXZjpwIe0g9t11Vuz+GVlVTzz0sbnwvLwLCzic3yuer3HxJXPPslgk0pkfQsDjY9VxaNDfgD26A8wAOAUquUbYYJDkDd9G+Vr5AwU7g45QS7S2ps0n/7C7sR2koMOip31e/Zv4zJG3cuJcA0uItzABNu5dfwRh93HocF3CzuoNRYj/Rzh7ys6jDaOpkY+emikcxhY0uF7NIII8iR7zzQv4R0m0tH0WtlgbNJJStBMZjc0uJJbYaa2cCDa9iFqi2soOhOmqC9s0dxLFEx7ywi1xq0HS/IcDyUqMLoQ6qcKWK9ULTHL6wa8fM+ajZ9ksGqJHumpQ4Oa1mUHKAAHgDS1/WPOt9XFQftLtXhVXWilpZZJpd+ac7uMkNeA46nsHUfr9UrF21uFMrHUr31DZWuc03gfaweWF17fJDmkX7lI0mE0NIQaemja4Oz5rXOaxF787Od5nmtFRs9hlRXQVctJGZYc2XQWJLs1zz61z4krXsOeLarDZmuMBqZcrS9wZTvJa0NDg46cCCCOd1tpdpMOqRUFkkrdxEZn7yJzeqACbXGtri/K63RYHhcTmujoYGlpcQQ3mLH8AB7gs/gjD71J6HBeoZu5er8ttrWPdZQR0O1+DTMa9lQ/K6Pe33TrBly0Em1tXAgcyCsW7aYCamSA4hGyWOQxEPBF3B2Ww5m+luOhXVNs1hMkO6FFDG0lpcWNF3AODspNuBLQSupuEYe2aSUUcG8kJL3ZdSSbn8RfxQn5fuE4nTYrTGejc90YOU5mFp1AcNDzDgfArtXPQ0VNQQmKigjhjJzFrBYX/wC28l0ICIiAiIgKE2p/lYft/optQm1P8rD9v9EFPq/WDwRKv1g8EQXRckWJUktU6njnjMjQODhre+g58F1rgp8KggxB9Ywu3ryc1+Gq1NfaXf03YjWNoaV9RIx742auylosOepC1Oxaha57XVDQ5t7gg301K6Kumjq4TFNnyHiGPLb92h4KOZs5hbDIWUxaZM2YiRwPW4210urNfaXq+nT8L0Ngd/xaXAFrr6Gx0txv2cUbi9A5zQ2qju7LbXjcgD8SPNc1Rs9h89SKgxyMmBuXMlc0nrZrceZuv2m2fw6AwubC5z4gMrnPJNxbU68eqNe5P8U/ySyIiy2IiIClItYWD6oUWpSH1TPshB/Nj0mbM1WyG3OL4PVxuZuZ3GEkaPiJuxw7iLKOwTGKyjnp4W1Moo94C+HMcp110X9BPSZ6MtnPSJRRx47TvZVQgiGsgIbLGOV7EEdxBC8cpv7JuGNrs9RtTWSUd/VspWtfb7RcR+VJdJZMpqqT6B9jZsW9ImAzscJIMGnkqpXD+mPUxg95f2ePJfYldVuppIGMi3jpSRxOlh3AqJ2G2NwTYjBm4Zs9SCCG+aR7jmkld857uJP4DsU7NBDNl30bH5dRmF7Ke30SOF2M0zSAWy3JDW9XiSbABMSxiGiwxtZlzteRkaXBpdfU8e4E+5dE+H0k7QJII9Laho4A3t4XC3NhhaGZY2AM+TZo6ultPciot+0mHMkeze3LXtZdtiDmvYjXuPeplcIwnDW2tQ0osQdIm8Rw7O8ruugIl0ugIl0ugIl0ugIl0ugIl0ugxPrW+B/RZLE+tb4H9FkgLXUTxU8ZknkbGwdrjZbF516Qpm1eIdEZUyRzxtAayxyi4vm07dfwTVvws1b7rMNrsE6WaZ9a2OS9rvaWjzIU80hzQ5pBBFwR2r5r2rrY8NrBFVyuJew5MjbuJtxtr22Xp/oQx12L7OTwPlMwpJA1rjxDTfq+4gqTf3GrhZNr++rp2TCJ88TZS4NDC8BxJBIFuZAJ9xW9VXHtkBi2KzV3TnwyOjDI2hlxGcj2l3EXPWHhbvWvEdl6p8g6JWARulu5haQAwg8bO62XgBpYLesfLlu+Fqnmjp4XSzyMjiYLue82AHeV+U1RDVRbymmjmjuRmY4OFxxFwoGm2eq2YbWUNRir6iGa+TPEMzCXlxJN7niB7lxT7K1cuKVcjK90MEhMjXNab5nOkJba/wAnrtvzt2JrHybvhcEVUk2VqHQzM+EtZHteHOiJyAODsjRmtk0tY348Vwy7G17JI3sxeSe5axzJAcjWhoBNs2puL8e3uVmOPk3fC8oqXVbF1c8TmDH6xtyTmy6//k0vf/8A0F/s9nZO4FhEuGS1T5a2SqExuA8WydZ7rDX6wHu8pZNe1Jb4S6LkjowyRr7NOUvI56m/Hwv5r9jo2tmY85Tlc5w01ue/zWWnUiIgIiICIiAiIgIiICIiAiIgKE2p/lYft/optQm1P8rD9v8ARBT6v1g8ESr9YPBEF0VewjHn1Nd0aoEYLnua3KCDpw/VWFcMOE0MNQJ4qdrZQbh1zx81vGzV2zlLuaa8erzQU0bmzwwvkflDpeGjSeY5KOptpTM5kbKUyPcB1mv6tzfjppe1xxuCOasRa0uDiASOBtwX4GNbGGNaGsAsGjQAJLNfBZd/Ktv2sjDczKOZ7SC5hB+U0NJzcO5v3luh2jdUMG4onF1+L3kMOrBo4NN/l+QU9GxsUbWRtDWNFmgcAFkm54TWXlF4PjMOKOLYWuBa0F9/6TfgpREUv4am/sREUUUpD6pn2QotSkWkLPshBD7U7T4XsxRioxWfJm+REwZnv8B+vBeXVf8AaK2ZpK9sE1DXuiJsXxhpc3xaSP8AVeI7d7bu2kxTE66adz39LIijubNiBs1o9w/ErzrGGied1XADupHEWPG630zpl+27JI/oNsptNhO1eEsxLAayOqpXaEt0cw/Nc06g9xUu7L/Vb3r4q/s0bTz4H6R6Oh3juh4oejSx36pdY5HW5g6e8r662mwafFnUjoJ2xbjO4scLtlvazHafJNtbdi5sJsBh4BpQNYRoGlUut2ZxmeORseIhpmjcyW88gFyCOwXNr2GoA42X7/dzHo6apbT4m1j5Xvyt38gaxpcwi1uBFpNe3NqguTjE0gOLATwBtqv3Kwm1m3VbxTAqusZIHdEmlmpGQOlmvmicA67mWHbm7rW7eCj6vZjGHieOHErRSNkj608l8jg4C9hdxANhc6cdUF0LWAEkNAHcmVvzR5Kk4hgO0GIUMlOyuELC+WO0kr7mM2DRpo7TPx11B4rsbgmPNcbYtZzW2a/ePIcbt4stYaBxuO11uDQgteRvzR5Jkb80eSh8AocQo6mvdX1QnileDA3eOfkaCeObgbZdBpcFTKD8yN+aPJMjfmjyX6iD8yN+aPJfmVvzR5LJaayHpFLNDp12luqDYGsPANQBh4BpXBHQytdUEPa3eCwcL34k6jTnZfmF0ElI8GRzDZgbdt9dAPwt+KDvsBK2wA0P6LNYn1rfA/oskBUzb3B6qXLiGHUrqmVoyyxxm0hA4FoOh8PJXNFZde4+UNodltpNpq41lHhmJMrszWRwyROYWC51c42DdAO1e9+ibY3+5OyrKGeRs1fM8z1UjeGcgCw7gBbzV0ROq2adc+W5SY6YFxErW9hBP+n7rzf0hekwbPyS02FwRT1EZs58p6t+QA4+a9CrN5lduLb3dPyX+dpZfI+1Va+alYZcrZgGCZrnG4dwOi8PrObLj6ccfteHCZbtev7I+mSKsqIafH4oITIQ0zQXAjP1gb6d916RtRjLsGoqaeGHpDpphC1g4uJa4tA8SAL96+LHztp3SPdIBfq5b8V9nbGmSPY3AfhEHpHRIbhzSSHZB2c7Lp6bkuW5l7pzYTH4cFDttTPhpTV000b5WszOYA5ocRGTaxvYbwdnYVK4FtDSY1VVUNGyW0AB3jhZrwS4At+6fNdPSMOdHa0bo+W7uP8ATuutraqkizZXMZYlps23A+Gup/Feu3Hw4SXy60WgVcJ3Vn+sJDdDrY2WLq2JswiIfmz5OHh+4WWnSi5H4hCybdnNcODb20ubfuutAREQEREBERAREQEREBERAREQFCbU/wArD9v9FNqE2p/lYft/ogp9X6weCJV+sHgiC5SuLY3ua0ucASAO1V2nfjbJaaeUOdA94Do7DM0HjcW0CsiLcy19M3Hf248UinlhYKRxbNnADr6NB0JPPS/vsoORmPwVMMMEj5IyxzhcMyizm2Bda9st+ZurQTbilxzCTLRcdqtTs2mMkYnlIYbBxAi6oznXxy20tZbGR7TBzgZoT1dMzG2vkPLtzcdLe5WW45hLjmE6vwnR+Vepm7Q9KpjUSRCHMN41rWnSw4nQ/O4dp5KwpccwlxzClu2pNCJccwlxzCiilIvUs+yFFqUh9Uz7IQfBPpd2Wq9jducQo5YnMpnyunpJLWbJETcW8OB7wq8N27AjOKqMVBmyugN8xba+YaW/Fff212yeCbXYb0HaCgiq4QbsLrh8Z5tcNQfBeaU39nHYiGt3z3YrNFe+4fUjJ5hod+KsyWV4v/Zl2Rqsb9IVNixid8G4TeaSUjqmSxDGjvub+5fXmN18tCyMwiMlweTn7hfmP18FngWDYdgOGRYfg9HDR0cQ6sUTbDxPM951Xe7Lpmt71Ld1HBQ4rBWytjhvmsS4HS1uzvXEzGZQwyOEEt35TCwlr4usR1uN+Hd2qaDmDgWpmZrq3VEV9u1dO5kjhTzBrWtcC7gQ42HC/j4artwTG4sWdIIonMyC+rgTxI1A4cFJ5mc2rGFkMIcIg1oc4uNu0k3JV3PCaraixzt+cEzt+cFlpkixzt+cEzt+cEGSLHO35wTO35wQZIsc7fnBM7fnBBkixzt+cEzt+cEA+tb4H9FksMwMrbEHQ/os0BERAREQa3fzEf2XfovHvSl6EaHanEJsWwrEjhNZJ152ubmheeObiC08z+C9hd/MR/Zd+irdJstNHS41TzYnI5mITOkBZG0GNpe52WxuHaHKSRqB4WznjMp7rjbPh5X6PP7P1FhuIwYrtDi7cXa0iWKnhZaFx4gucTdw7baDxXvMkTJGgPFwDcWNrKrV+yUtVh9FTNxExyUlGKaOYRdYOsAX6OHEAaDv1XLX7KYo+MQU2Mu3UkpfK58ZLxfeE8XWIu8AttwHYrMZj7YmV371buhU+7LN2Mp7Ln/vasWUFO0EZS64A6zif+9irmH7M4jhzqyaLFzUTS0Yp4xNGQ1rw1oDiQbkAtJA7Mx11KywTZmsoa2lmnroiync/LHFG5oLSXmwu42HXFxrfI3gqymoqnC52xvhqaWRrJd00slBG8OuXQ8e2y7H08T35nMBdfNe/bp+w8lWf7q1E09PUVmJ5qiOtFW8xQBrJLZQAQSbWa3KCCNCeJJK5cQ2QqZcVinpq0MZJK+SYlpuCXSOaRZwu4B7QCeGQG3YKq3dEgz5xE0OJDiRpcjtPNb1R3bJ4rHPG6DEqZ7I5BI0yxPzZiWBx0fxIZcntLnaBbf7mTMu2nxV8UGTK2ERnLcsewuNna/Lv48+zKVc0VdwjZx+HYn0ltdI6naX7umDS1jA7s42NtLaaW71YlVEREBERAREQEREBERAREQFCbU/ysP2/wBFNqE2p/lYft/ogp9X6weCJV+sHgiC6Ivx5IY4tF3AaDmoKjgxBlQyWWmAIlLrb64s7j5WC1Jtm3SeJAGpA8V+Zhci4uFGbRYY7FaJsDXMAzOLs17EFjm9n2lzUWByQ1rJp5WyhsjnHU3eAAI83MixPibq6mvktu/hOOe1ou5wA5kr9BDgCCCD2hQdZg8lZSujfuxeOpZZ+ovI67T+Cmo2NjjaxjQ1rRYACwClkWWskRFFEREBSkPqmfZCi1KRaQs+yEEfiuN0OGu3c9RCKgtzNidIGuIUDNtfUU7nPmw8GAC+Zj76eK+f6XFm7UY1imK1rnSOkqHFrSSLNv1W+AFgpvFMSqIcJcKGpkpgW5XxNeS1w8F8vn9TlM+mXWn3PT/pdy45nZvb6C2fx2ix2k39C+5bo+N3ymHvUi6WNsrI3PaJH3ytJ1dbjZfO/osxyaj2toI2kmKpduJG+PD8bL3vEaGaoq6Oop52RPgzAh8ZeHBwAPBwsdOOvgvX6flvLhu/Lw+v9JPS8vTL7WbSC0y1VPFIWSzRseA05XOAOpsPM6Krs2NtTOi+EZQXNLTkZZpOUNaSLn65Pzi8nRds+zMc+HUNNJUO3lLG+MTNbYnMwt010AJBAueAXoeFYVhNNHBGZJntjYCBmcbC5Nh+JCqsex7g9gkxDNTtk3phEJDb5gco62jLAAN7B2lc42GJMAlxIujiAG7ENm2Dy6w63A31ve9gexBcoJY54WSwvbJFI0Oa9puHA8CCs1y4VRtw/DKSiYczKeFkQNrXDQBe3ZwXUgIiICIiAiLkxGj6ayNu8yZXX4Xvog60UPUYQ9xzR1LnG40kHZfut2edguqioHU1Q6QzF4LA3Lltbh+34oOw+tb4H9FksT61vgf0WSAiKI2o2kwjZXCZMS2gr4aGjYbZ5D8o8mgak9wQS6LyDCv7RPo9xHExR/CFVS5nZWz1NM5kTvfqQO8gL1yCWOeFk0EjJIpGhzHsN2uB4EHtCDItBcHW1Gi/VyvxCkZWClfURioNrRk66gkedj5LqQEXPUVlNTvyTzxxutms420uBfzIHvXQgIiICISANTZfgc1wu0gjmCg/UX4CCLggjuX6gIiICIiAiIgIiICIiAiIgIiIChNqf5WH7f6KbUJtT/Kw/b/RBT6v1g8ESr9YPBEF0XPHW08kwiZKDIXOaBY8W8Qt7wS0gHKSLA8lF0+EywvDjXzvIeH9YD3j3rUk+2bb9O2srIaQwCdxbvpBEw20zEEi/LgtEGL0c+HOrYpc0LWOkIt1rN49Xjy8wtmJ4fBiUAhqQ4sBzDK6xBsRx965abBKaB1YG33VRHuywdg1v7zfyAVmtF6tsHbRUAnfE0yvLGCV5azRrCAc1/8AyHBdtPiEE98ucES7khzbEOtf/RclLs9h1NVNqGQ55Gghu86wbd2a4v2js7l0xYdHG7MJJHPMwmc5xBJIblA8kvSk6vtpjx3D3yNaZwzMHm7xlDcjg03J4anTmuttdSO3mWqgO7sH2kHVubC/K6jzs5Q710rd6yUm4eH6g3BuL6diziwChigmhYx4ZKGtf1tSGuJH+qf4k6khFUwTOLYZ4pHAlpDXgkEcR7ltUVh+CQ0FS6Wne9o3e7aOJ1cXEkniSSPJSql19NTf2KUi9Uz7IUWpSH1TPshRXzRtR6O5tmtqq51O+X4NrJHSw3F2am+XTtHDwWGJ0haxrIaQBoaLknivpeqpoKuEw1UTJYjxa9twoluymCNlz9AYTyc5xb5E2Xzef0WXJn1TJ9v0v6v+zxzC4/CtbL7HYbTYtR1wL3VEQLx/EBuQMurcotxv7lbsYdV54W0kksYLZHOdGwO1DeqNQe1dkNJTwyvlhgiZI/RzmtAJ8VuJtz8l7ePjmE1HyOTm5Oa9XJdqxSbQV8rW/wD/AD3PAfkLmtdqQ8tLeHHS9+A4Le7GMREUUjaDeB7RdjWPBa4kCxJHZfU9xU83K0Wa2wvewav3MO/yK6ObClkdLTRSSMLHvYHOaf6SRwW1Y5h3+RTMO/yKDJFjmHf5FMw7/IoMkWOYd/kUzDv8igyRY5h3+RTMO/yKDJFjmHf5FMw7/IoMkWOYd/kUzDv8igH1rfA/oslhe8rePA8R4LNAXxD/AGu9oKzEfSjJhMr3ihwyCNsUf9Jc9oe59uZzAX+qvt5fPn9pb0NV22lRDtFsu1kmLQxCGopXODd+wfJLSdMwuRY8RblqHxkB5r7Q/sb7Q1uK7CYlhlbI+WPDKlrYHu1sx7b5Ae4gn/yXzbhXof2+xHEhRRbL4jC/NldJURGKNvfndYW8Lr7W9C/o/h9HOxkWFb1s9dM81FXM0aPkIAsO4AADz7UE1jOzDcTrpqg1Tod61ouxnXbla5ujr8DmN9Fwz7FCWfetxAsJaW5Ww9UXLyQ0X0b/ABLW7hqt+0OHY3XYs11BKKelazdh4q3sOrH3JYBY6lmt7jLcJW4JjE1HhMUGKOifTSF87hK+7xmBDb8XgNu3ranQ8wddeUjNxjY/ZOGSlo4Zal7nU0DYWvy66Pa+/H6tlppdjYoGPY6qMzXscw72PNa4tmbc6O5nt7lw0WzmO0eHtbJilTPWF0UYd0qR4ZGXESuNyATlcSDa4IbyuuybZ7FJI5HNxKVtQDNkd0ufK/MOqS29m25AEDiE675JjGqr2MvIDTVIyuezM2Rps1oZl4XsdbEDS1zqsqnYls0Ij+EJdHE5nszF2j9XG4u7+JofqjRWLAqWoosIpKatqDU1MUYa+YkkvPMk6ldyv7mXk6I1TQiXd3tdjswuFp6GNzGy4uwh2a3E63P4rrRYac9DTmlpxGXB1iTcCy6ERAREQEREBERAREQEREBERAREQFCbU/ysP2/0U2oTan+Vh+3+iCn1frB4IlX6weCILoiHQKIpsbjnxB1MG6cG2PWJ0uCOy2vktSW/CWyfKXPcmvIea4cWxFmHRwvewv3sm7FiBY5Sbn7pX5HjFC+fctnvKLXAa4gDne1raceCapuO/XkPNNeQ81Gux3DmSPZJOWFl8xfE9oFu8iyxOP4YI8/S25Roeq7Tx004HyPIp01OqeUpryHmmvIea5qKupq4PNLJnDDY6Ef68Rode5dKimvIeaa8giIopSH1TPshRalIvUs+yEEBthtngeyEdI7HqwU/Sn7uIBhcSe02HYLjVTkEgniZNDK18UjQ5pAuCDqCF8k+lvamp2nxShZVUwDqV0oaDxsSP2Vw2H9LFZQ7PUWHVNO4yUjBCXCMONhoNLjssuH7t+47/s/4zLb6MC5K7EKWhLelSiPM17xcHUNFz+C8o2a9J8+KbUYdQ7smOolER6oB17rnxXqWLYRSYrkFbHvAxr2gEAjrCxOo48lvG5We805WSX5ZjFcPMec1tMG3DTmlAsSL2Nzoba2X4zF8OlY90NdTTZIzKRFIHnIOLrDWyjKLZSko641cNVWmYni97XDLmJyat4XPjpoQt1Ns1Q08hex05cac0ur9Mha1vC1r2YNePusBu/hmOuPGKF0RfJUMgs3OW1B3Tg29g4h1iBfS62MxOgkLxHXUriwBzsszTlB4E66KPqNmqWfFY699RV52BgEYeMnVc1w0I7Sxt9Vyw7IUdNNRvp5Zv4MjHuzvvmDM2VtrWGrgTztz1QTUGKYfUOa2CupZXObmaGTNdcXtcWPC+nis+n0YYx/SqfI8gNdvBZxJsANddQVAS7IQy1DXSV9UYGloENmAZBlOW9r/ACm3vftI71+xbE4XFCyKJ9UxrRl9YDdpzXFiLAEPI0t56oJ2HEaKdzGw1lNI6QlrAyVpLiOIGutl1KtYdsfRUFVSzx1Vc807s7WSSNLScoaLgNHACysqAiIgLCSRkYBke1gJsMxtcrNc1bRx1jWNlLwGm/VPHuKDa6eFvypYx26uC/WSxvdZj2uNr2Bvoo6bBoHnNG+Rjrg6uzDQ9/vXRSUEdNMZGPkcS3LZxuBw/ZB1H1rfA/oslifWt8D+iyQERVTbbaCqwiMNo4HEZcz5SNByA71Ksm7qLWi8NrNq8Ypq90lPXVIeAXmJ+o4XtlK9R2G2jZtLgbavKI52O3czB2O5juI1UmWy42TawoqdtDjWN0ONyR0NE+ehha2Vx3Z6/wDDkORpAOpc0XPZpzW2u2nraOQskw0Zt5u75nWB7P6db8Ra+nFdOi1jqi2Iqw3HqutwiudDQ1VJXQg5Wujzf1lotzNhexHb2hcY2kxGkq6mjfRS1j4nus6xa4szSBriA21gGDXtvoE6KdUXNFVJNpq5sMzxhTszHtY1pLryAuA3g6tstiTqQdFxu2yr2yNbJgkkTHBoEkhcGlxaHZQMtzxtw7O4qzDKnVF3RUuq2uxOGJzmbO1b3XIDbnX1mvD/APzH3tL6XncDxSoxGWqZUUMlKITZrnn1nWeLj3NB9/nLhZN0mUvsl0XJHPM6VoIjAu/MNeANhr5dnNYCsk6VHE5jAHOc02v2XtZZadyIiAiIgIiICIiAiIgIiICIiAoTan+Vh+3+im1CbU/ysP2/0QU+r9YPBEq/WDwRBdDwUVTYJBT1xq2SS702Op7e3z/VSqLUtnwlkvy0VlJDVtY2cOOR2Zpa9zCDYjiCDwJXPS4PQUsz5YKZjHuFjqSLa6WOnaV3om6aiNnwWiqKozTRZ7tLSwk5TftI7UOBYaY8hptL3vnde/je/wD9nmpJE3TpjjwzDoMOicyAOJcbuc5xJOpPuGp0C7ERS3ZJoRERRSkPqmfZCi1KQ+qZ9kIPm/0sbIybN41VYluHPwiokMzJmtLhE5x1Y7lqdOz3rympxSRmIvmp3MDC0AAtt7/FfdD2tewte0OaRYgi4KiItl8Aiq+lRYJhrKn2raVgd52XPp99uv7ntp4x6ANi6qXEBtLi9E6mjjuaUSCxkcRYvDTwFibc7r2vHI6uRkXQzICA++Q21tp2jt8R3KUX4TbsJ8FuOVu0fQT10krW1dPumAG7gQcx7PBQ8DMdJjppRKIxUZ3zZhcszsNr5r8M+g7AFZ8x+afwTMfmn8EEJNNjXSH7qEZGuJDcrbOGdoABzX+Rc8Bquanq9oXRgy0bWyEgBvVIsX2JccwtZtjoFZMx+afwTMfmn8EFWp3bQxNMjoTJPJq8E9Vp1yhozWt8kE8R3q1rHMfmn8EzH5p/BBkixzH5p/BMx+afwQZIscx+afwTMfmn8EGSLHMfmn8EzH5p/BBkixzH5p/BMx+afwQD61vgf0WSwveVuhGh4+5ZoC8626hlp8dZO6V25maCxl+JA1t36Ar0VcWL4XRYvROpcSp2VEDtcruIPMHiD3hXG6ux8qekjGpji5NOyQUcIyyujda5OlifNewf2c6SvbsfUYhiDXsZWzXp2v4mNo0d7yT5KwUvot2Wga2N9FLUU7XBzYJ5nPjBBJ1H9XH+q6u0cbIo2xxNaxjQGta0WAA7AFblua07Z543GY4qzjG0U2H7SSUZEXQ4aNtU/qtMj7mW4F5Gn/8AGLWa7U62XNiW2MFJT9Iq6ASQsDHtkilbMMzi8aFoNvkO18Bpc2t7o2OcHOY0uHAkahN2zLlyNy8raLLiqtTtkyKCSdlEZII3TNcRM3M3dtcTdupBOR2h7vdzUm3mGzVbQKKpEr2NzOZC55IzBthYXcAXePHQK55Ga9VuvHTijY2NtlY0WFhYdiCnu2/oRCyQUlXqA4525Bazjo46ONmGwF9SArg9jJMpexrspzNzC9jz8ULGEC7W6dyyVBERQEREBERAREQEREBERAREQEREBERAUJtT/Kw/b/RTahNqf5WH7f6IKfV+sHgiVfrB4IgubjlaSewXXBFi1M+Nr354w4XF230sDxFx2qQIBBB4LQ+mgeGB8TSGDK27eA5KjR8LUWYN313HgA06/gv1mKUsj2tieZC5+TqtOnDj3ahbRSUwIIhaLcLN77oKWnDmuEQBacwNjof+gIMIMQp5pBGHOEhJAa5pBNjZam4tC5xa1kheCRl0HC/M8hddDKWnZKJGR5XAkiw7TxKOpaYm5hbfhcCx7e33nzQc7cWgdIGNbIXG2XhZ1zbQ3XVR1LKuASxhwYSQL9tlgaOlLbbhltD8nlw/1K3RsZGCI25QTewCDNF+XHf5Jcd/kg/VKQ+qZ9kKLUpF6ln2Qg809JXpMh2eMlJhksBqo5N1NNIC5sTrXy2HbYjuC8zd6bK+CpyybRYaT2/wrgd2gXkPpA24GIYnVRuhjdKJn79s4c4Z73Jy5rcbjh2Kox4vTmpY3o2GuZcE3pGgd+pK17Rn3fdnow9IFJtlSPYJITWwgF5hJyPHMX/EKx7QY7T4I2F1RHJJvc1shaLZRc8SLnuC+U/QXj2Gv25wSHC6V0M+/MV2HqODgc12g2+SDz+SvrbE8LpMTDBWMe8MDgMsrmaOFiDlIuCOw6LOU18LL5c52gwzeiNtTnefmRudbq5tSBYaAnVfjNosKeQBVgAjNmcxzWjW1iSLA37OIQbO4UKZ9OKRoieHBzQ9wvmDge3k93msItmMIigELKP+EHiQNdI93WBB7Twu0acPMqKRbR0EzZ3QvL44mxvzNIs5r3ZQ4a3AuDxtwWuj2qwuqa8iSWMtzHK6J13AOIuLA3va4HG3YtzNnMJZSzUzaNogmGWRuZxzC97HVa6vZXBauoknqKLNI/5RErwD1s3AG3FEbv7w4VuWSitiMb/kltzprroOGhN+wAldWHYjS4lC6Wil3rGuyk5SNbA9o5EG/eo9myuCsibHHQMY1otdr3AkaixN7kWcRY9hsu3CcKosIgfDh8O6je7OW53O1sB2k8giu5ERAREQFqqKiKnaHTPygmwNltWmppoakME7MwabjUjX3INb6+lYbOmaD4H3LZDUwzPyxvDnWzWseC55cKpJNWxCN1wbsJb237Fup6Knp5XSQx5XuFicxNxp+yDcfWt8D+iyWJ9a3wP6LJAUXtBjtBgNGKjEZcjXHKxjRdzzyAUovmj+0JtHV0+P4xTSRFsNLTMbA8kf1NBJHvcfJWI9LwT0xYHiuJPpW0tZCxpIEzg0tIBtfQ3svRqSphrKaOopZWSwSNzMew3DgvhH0T7VOpamogqIo5iyElgeMvCzQCbjnf3L6j9AWLT4hgOI08kTmU9JUBkTiSbktu4C/YD296vTdb0t19PRH4nSsrZaV0hEsTQ+QlpDWAgkEu4DgVmMQoizOKunLLXzbxtrefcVE4nhmG1WKzxT1jo6qthEbohku5gDhpdpI0zcD2dy1DY3DhXmtZLVMqCXEODmnLmc4mwLbf1nyHJNYs+6bfiNEy+erp22IBvI0WJFwOPaEdiNE1+R1ZTh1yLGVt7jj29irv8AcTDbWFTW8AL523sGvbb5PCz3fguqHZGghp3RRy1TWkPAcHjM0OaG2Bt2AaXTWPk3UnV4tRUscb5Jg5j2OkBjaX9Rtru0voLjXvW1mIUTyQyrp3EODCBIPlHgPHQ6KNbs1SMoYaWOWoY2OOSHM0tBeyQ3c06WtfkAR2KOrtmcEojBPWVUsADgxrnyNAcS577HS2pefIcE1if5LL06ksD0qCxtrvB3fuPMLJtXTvkbGyeJ0jr5Wh4JNuNgqydgsILYAX1ZENiy8gNiBGL8OUTfM91uug2SoKGup6qCWqLoCXMa94c25Dhyvwce3lyTWPk3U7JPFFfeSMbYXNzwCOniaSHSMBAzG54DmsZadsj3OJIzAA27QDdYS0u9dIXuu1zCwDL8m/JZadKIiAiIgIiICIiAiIgIiICIiAoTan+Vh+3+im1CbU/ysP2/0QU+r9YPBEq/WDwRBdEX48EscBxIUVHSVzIQxsrGFrdCHcTYanTxVEsi5aCKeNrzUyZ3E9UZr2HL/laqykmlqXzRS5SIwIxe3W63Hu1CDvRQ/R8UDoxvm9lyH6DQ68PDRfjaPESc8kzN6AQ0hxs3Q93ae3ssgmUUYKWvEbi2pG8JGhJItcfitbqbFN24dIjLy3TUgA38EEui4aGKtZO91VM18diGgeN+XuXcgKUh9Uz7IUWpSH1TPshB81+mH0I0pxvENoMNpquogrXmWeGCxMLzq4htr2J17bLx2DY3B5KjosTK2ScnKGMLS8+4C6++ViI2B5cGNDj221TaPEPQP6I4dlqr4eroqiKqLSIKeZwJZcWLyBwNiQB3leu45Qy1rIhDl6ofxIGpFgeB/DXkpRfhv2AHxKm1R9AzEBK3pjozG0EdQ6nkSodw2gfITHmLWuc1hc4NDhq1pItfsa4/aKs93ch5pd3IeaCuRUe0AjYXVcYlDgCC67S3Ne9rcbafqsJKLaIUzd3WRmcizi52gs3iOr2nX3qzXdyHml3ch5oIeiixmKtjM8kUlObiTM65vzbYC3gbrdiNPiUoh6LVMje0EuIGVpOdtrjXTLm7e1SV3ch5pd3IeaCvdBxvcZumHeWIybwc+eXjbtt3d61mn2ijkYZKtj2l+SzBxDnfKPV0ytJI+yOast3ch5pd3IeaCLraTEpasmGryU5cHAN6rhqy44aiwf5rQKTGHYcY31YbU5yQ8O7N3Ya24Z9bclN3dyHml3ch5oKqyn2llp43MqGRkkkiV3WHDk3ha+mv7frIdpAQxzgSOpn3gykanNa1+0N48R71abu5DzS7uQ80GnD2zsoKdtY4PqWxtErm8C62p81x4SzE21dWcRkY6Au/ghttB/23FSV3ch5pd3Ieau00H1rfA/oslhrvW3AGh7fBZqKLzP0yejg7aYe+fDXxRYmITCRJo2VutgT2EX0K9MRWXQ+L9jvQJtl8IZMTw4UjtWGd80ZjYNCHAtcXE8exfVvo/wBloNjtmKXCYJnVD4xmlncLGR54m3YOwDkFY0VuVvsmkHtHgk2MGMNrW07I2vy2hzuDnMc29ybWs7gQeHEKBw/0ew08shqqxlVE+PJkfTDTrNcOLiLDLYC2l+KtlZitHR1LIKiUtkfl4Mc4NzHK0uIFmgnQXtcrfFWU0rS6Kphe0HKS14IB5LKqZR7DztfBLNXsiMdZ0oxRQ3BtKXt1vfNY5S7lpbS67sW2MirqmoqI6rcyzvLnkRA5rggE6i5bmu09hAPZZWKPEKWWeOGKZr3SM3jC0Etc3ucNPddbDV04c1pqIQ51y0F4ubC5t7iD4K/Aq0mxbJrCWsAyOc6OSOHLKHOkY4vL7m77R5cwA4nwXTT7MPg2YGDtrW5S8l8m5PySb2aM3VPAg3Iv2dinBiNCYxIKymyFhkDt622UGxde/C+l1sjqqeRgfHPE9pbnBa8EFumvhqPNQtV7aPZQ4w6oMeIzQNnblfG6NsjL3ZcgaEG0Y7eOvO+h2xxc5pNeLiffZ9x/Ed1s1y7Nq4fJa62jdLHirS6pgabOniBvl1eOPJanYhRN+VWU46wbrK3iRcDjxtqnwaV3Ddj+hYFFh3TI5d3UCe76f+G7qZbFmbX517/KsVpqthoZKqOSlqxSRN33Uhga03kz3IcCLWDx9xqtcNZSzua2Gphkc9m8aGPBJbe2Yd3ev0VMBkZGJ4t4++VucXdYA6Dt0IPvT72mtqmzYWA1s01VWPq45AepUR5yDvA/iTa2nC3Ek9tl141sr8JVVVP00sEzMjYnxZ2RghgJAuLnqAg9h/GZoMVo6987aWbOYHmN5LS0XHGxI18QtgxCiLntFXTlzHBjgJW6OPAHXieSLVRi2CLKkTfCsgtVGosyLLe7r8c3y9LZuVxbVdkexkAip7zRxVELWsE9NAInkCRr+NybnLqb65ie5WKTEKKKZ0UtZTMlZbMx0rQ4X4XF+2629IhsTvo7A2JzDQ2v/pqk9k0htm9nvgSad/S3VG8Yxl3Ms45b6uNzmOthwsABrxU8uaDEKOoeGQVdPK8kgNZI1xJHEaHsuF+MxCifJu2VlM6TPu8olaTm+ba/HuRXUi5hiFGS0Crp+sHFv8Ruob8q2vZ28lqdi+GtYHOxCjDS3OCZ22Lb2vx4X0ug7kX4xzXtDmEOa4XBBuCF+oCIiAiIgKE2p/lYft/optQm1P8AKw/b/RBT6v1g8ESr9YPBEFzffK7LxtoohkmKxNjBYyUuZmObiDbhcADj/qphFRFPqcQGUtga4Fw/oIsLm/avyGrxJ0sYkpWtaXNDjY8O08dO0qWRBzYgZm0pNPfeZm8Bc2uL9h7LrimrK1gLI4HONrNcWHU25+PcpZEHPA+fosTpIw6UjrAG3v1XQiICIiApSH1TPshRalIfVM+yEFF9Le1mI7JbN1OJUNPEYIW2dLI693O0aA0d9rk8+1eIUW1u0tThlHi2J7T1IY+oa4wU/UERdwaSNXC3EahWz04Ys6o9ENdBK3PJFWsZNrbK0Pv/AK2CqO0GPUB9GBxBghax1Nu2N3eYueeqDpwsea8GeVy1X0fTYYzfV9Pb/RftjNj8MtJiBz1MJsyewG9HIgf1DtVp2ixqHBKeGWYBwkkDSC8Ns3i53fYDh2mw7V8sf2X5Z8Rx6nL6iRzqOWzGlxsGka6eF19cTRwvIMzI3HKWAuAOhtceBsNO5evCWTVePmuOWW8ZqIQbX4OZRH0oZjYDxzBtvG7gtNTtU11DSVOGUr6rfvkYGHNe7AdBka697ceHepwYdRBoaKOnDQ0MA3bbBoIIHDhcDyXNG7CsPDY4mU1OyEm2SMNbGTx1AsCVblMf9q5SW/Dhj2tw55dpMGslML32Ba0gZtSDwtc+43ssRtjhjntjjFS+V9w2MR6mxaO06Xzi1+R5LfWYfgTWzRS0tJE57XB72QtBaHiziXAaXHau0YXhc8WboNHJHI0C5ia4ObxHZqO1JlMtyX4Wyz5RVNtjhlU54pxUSZAXnK0HqC938eAtwOuo0SfbHDISQd847rfC2XVpc1o4u0+U0620PuUqcGwslxOHURLnZydw3V2uvDjqfNZDCsOE+/FBSCb2m5bm43425rSOilnZU00M8V93KwPbfjYi4W1YsY2NjWMaGsaLBoFgByCyQEREBc9bVx0bWulzWcbCwXQsJYo5bb2Nj7G4zC9ig4TjFKHANc55Nvki/Hgt9NXQ1MpjjJzBuY3/AO96zno6ecHewscSb3yi6zjghidmjijY4i12tANkGR9a3wP6LJYn1rfA/oskBEQkAXOgQEXDS4vhtXVPpqXEKOeoZ8qKOdrnt8QDcLuQRGMYI3EJZJWVM1PJJG2N4aGlrwxxczMCL2BceBF72KhYdg6QwzR1ldW1AfYAhwjsAxrbENAa75N9R2+9XFEPrSvYbsnRUGIR1rZ6mWdhcQXuba7i8uNgBa5eeHIKNm9H9DlaaOur4JWtyh5l3g+Q1nBwPY247ATy0VzRNinwbC0raqOonr6yWRkhksMjWu/iukF25bf1EXFtF2Uex+H0gqcktS41FO6lcXPHVY5rG2Fhp8gHxJ7rWRFd0VGXYHCZZM0kta4bwSgOmzWOdziLkX1Ltbm9gFum2Op3dJdFW1LJpgW5yGHIHF2awy8TvH8b2uLaCytCKX3Nq1hOycVBiTa6Svq6iZrJI2tcWtYA9xcTlA462uOXBYYfsTh1BiNLWU9RXZ4CCGvnL2uswMF78gPx5WCtCIKtLsZSPqRNHXV8DmuNhC9rBkuTkNm6i5PG570/uVQbkR9Iqr6guuy7gXSEg9W3/wCVwvx0FtdVaUSewr2ObLU+NMkFVVVUb5WMZI6BwZmDRIAOB0/iG/gFsdsvQPwt9A91QYjI6VrhIWva5zS02It2E6G41tw0U6iG0HHs1RxYlDWskmD45Hyll25XOc57tdLixkdwIvpe9lH1OxVJNisFS2ombE1j2yM6t3kyNkGttNQdRY8NVbERd1TBsM1spMeK1TYT1d3u4vk7t0Z1y8crh5C4OqkH7H4c+aolc+ozTtkYQHgNAfcmwta/WNibngOCsaIgNBoiIgIiICIiAoTan+Vh+3+im1CbU/ysP2/0QU+r9YPBEq/WDwRBdERFQREQEREBERAREQFKQ+qZ9kKLUpD6pn2Qg899Ifo2i2sgqqUVbqWirHNkqWxtBeXNNwW3017V8+Y5sPtlQ1cuzUGF1eK4OyTdNdFTFpcw2OYOsALXB1PEFfZC1tnhdKY2yxmQcWhwv5Ll+1jt1x5spPZ41/Z+9EM3o/dW4ljFS2XEan+HFCw3bDHfiT2vPbbQcNV6tjdBJXsjEZZ1Q8HMbcRa/AqTX4b9hA8Qukcr7o+gp66OVpq5mSMaCAGuNzyJ5qjYnsztBUY26JhjdhkkgeZOkPaQBfTINL6ntHgbBekWdzb5f8pZ3Nvl/wAry+p9Jh6npuVss8ezrx8t45ZqWXy882k2cx+XFcuGmOShlAa4unfGWi9z1Rx5dmmnBXvC6XoWHU1Ne+6YGX48F0Wdzb5f8pZ3Nvl/ynp/R4enyyywt9/z7HJy3kk3J7MkWNnc2+X/AClnc2+X/K9TkyRY2dzb5f8AKWdzb5f8oMkWNnc2+X/KWdzb5f8AKDJFjZ3Nvl/ylnc2+X/KDJFjZ3Nvl/ylnc2+X/KAfWt8D+iyWGu9bcg6HgPBZoC+Sv7XHpHxJmPjY7CaqSlooYmyVpidldM94uGEj+kNINu0nXgvrVfH/wDa+2AxGDaf++FDTvnw2riZHVPY2+5kYMoLuTS0N15jwQfOlHUz0VTHU0k0kFRE7MySNxa5p5gjgvu/+zT6QKvbvYaQ4u/eYrhsop5pe2VpF2PPeRcHwuvg2Jj5ZWMjY58jjla1ouXHlZfdX9l7YSt2L2EmmxiF0GJYpMKh8LhZ0UYFmNdyPE27L2QXjHKDGn41LU4YX2AYYs0gEejXhwIvfiW9ljYXWuoO1onvA0OhymwcYg7i+xd9a274acVu2kx/EKLE+i4XS9IcI9Q6mlcC8se5o3g6otlbpxObsUXT7S7TTCtZHhkElRTs0ibBIAX5GOF3Ei18x6trjv7dzL8M3H3SNVRbQVVPRvdKY6gU7WzBrw0OkErCeBsOqDw8FlSt2ocx4q3hrix2QxCLR9v6r36t+Ftea2UeK49LUVLJ8MbHHFDK5r8p68gawtaNdRcvF+2wtbVY02KY9LgtFNJRQsq5JHNnLontbG0Xs7ITm5ce8qXP60dLmq5NqaeQNDjIx72MYY2Rk/IuTfgOsDe4twssqj+9+5G73W9zHNk3duD7Zb/0+rvfXiuSm2ox2skBpsPj3bomSlu4e4xseXHMSHWcQA3qDU30OimMHxLGamoxFtfRshhiYDA8RvY52h1Oa4N9DYHTgdVev8Q6fynZxIRHuyR1uta2oXORUNigF5S8m7iLGw42PPktDa2qNyyJrow8tzZTwBI9+gGvDVboaqWSG7mlsgkaAMhbcG1+PifJYadFHvDADLmzEnR3EDkt6IgIiICIiAiIgIiICIiAiIgIiIChNqf5WH7f6KbUJtT/ACsP2/0QU+r9YPBEq/WDwRBdERFQREQEREBERAREQFKQ+qZ9kKLUpF6ln2Qg8Y9Ie2tZXY3NhWFT7uhh6jzG6zpX3sbkdgsdFSYHto8doquSdu5D8xLflDvvfwVO2ljfgWMVRdI81LJZWODr6O1BPHvUXh1TAzZ6R/8AEdWNqGuZmkNiCCTcDw/FeXLDPPKZ432j0YXCY3HKe76X9H3pLoMaxsYC507qghxhlkt18uttDfhc68lddpcXkwqCB0ELppHOLntaxzyIm6vNm+4Dsu4LwT0Ww4TX7UbOz0tPkxE2ncWucbANJdxPDs96+jamqgpsu/kDS75IsSTqBYeYXolv286sSbbQRylppHva65ifHICHs3mTMSbADQnja1tdVnUbTznBoa2mpWsldMY3QSBxOUDV/AGzRZx01AIGpCtAcw2s5uvDVC9lrlzbc7qirR7aUrqmohDGlsDyx0xkytcBcG1xq64Nmi9x2rXS7c01RTNlZSSgufkDiSIxqRcvIsBpc31A1srTLUQQkCR7Wk8PMD9Qt1ha1hZBST6QqQNc51K9tnMAaXdY5ml3K17DTWx5hXdflhyC/UBERAREQFyYjWiiZG4sL87soANuxdaIImXGo435TC8HQdbq/wCq6KLEWVdQ6JrSCGZjr4fuux7GyNyvAI42KyQYn1rfA/oslifWt8D+iyQFjIxsjHMka17HCxa4XBCyVf2v2mptnaQPkDXzv+QxzsreQuezXzUtmM3STbbh+yWzuHVxrcPwHCqWsJuZ4aSNj7+IF1Nrxqf0m7SUG0UtDU4VhldFlZIzos5aWtI6wcSSLg3/AAXrOEYhDimHQVlMTu5Wh1jxaeR7ws48mOVsn03lx5YyW/FdiKExPaOlw7Feh1LXNYIHTPmGoZYOcG24klrHnTl3rGXavCYc+9nkZk+VmheLHMW24cbg+S6dNc9xOooSLajC6h88dJUb6eKOSQxhpGjLZtSO8eK5Ytr6GMvZiX/pZAA4BuaQEbsSXuG8ir03wnVFlAA4BFzQ1sE1A2sic59O5udrg06jnZOmxfxLB5LHBpFuJJsPxWWnSi0U1XHUlwizdUA3I5regIiICIiAiIgIiICIiAiIgIiICIiAoTan+Vh+3+im1CbU/wArD9v9EFPq/WDwRKv1g8EQXRERUEREBERAREQEREBSkPqmfZCi1KQ+qZ9kIPLPSp6Ko9p6l+K4OYosUdbeMkJDJLdotwd/qvH6X0P7ZGq3HwS2Nt9ZHTsyDvuDf8F9ZzSxwROlmkZHG0Xc95sAO8lQUO2ezM1V0aLHsMdNewaKhup7jexUk18Luq/6KvR3FsXSb6rnbVYrJG2N0jR1ImgDqsvzIuT26K5Ynhsde6B73uZJAS6NzeLXaa/h+JXaCCAQbg8CEIvwJHgppFWp9j4hS07J6qTPGyzhEA1t8gYSNOQ7VtqNkaaoc98k8mdxJs1oa0XDbgAWt8n91Y8p+e78Eyn57vwVFfOzbWNcyGclry4uLhY6gjsGps52vcFYljlPz3fgmU/Pd+CDJFjlPz3fgmU/Pd+CDJFjlPz3fgmU/Pd+CDJFjlPz3fgmU/Pd+CDJFjlPz3fgmU/Pd+CDJFjlPz3fgmU/Pd+CAfWt8D+iyWFiJW3JOh4+5ZoC+efTLLX1fpEOGySiKmEcc1Pfg7Tj5gr6GVW232Jwza5lM+uDo6umJMM7OIB4tI7QvP6nivNh0y6deHOYZbrwyXDGz4u2UVORz4jv2x6AjTgvZPRPn+BqpuUthZNlZfuGv4WUHh3orkpqwu6eyGEuBLoc2d3droL9vFemYfRw0FHHTUzSI4xYXNye8nmtcfHcdbOTOX4cuJYJh+IxVLKmmjL52lrpQ0Zx1S24PYbErL4Gw7dbvokWW1uGvEu4+JJ96626yy+A/VUzCdn8dw6KNtPUwxfwY2PAeNZGgjPowXHcdT2ngvTP+3C/9LTFhGHRTSzRUUDJZWlj3NYAXAm5BWE2BYXNJnloYHPIyklvEWy28hZQNHh+1TKqmNRXQOhbMHS2fqW3bcWy8s3bxI4LGowHHI5jNQVzGPJn0cdGh82cAdXlxvfkmvf5Tf4WyKmhhpujxRtZDYjI3QAHj/qvzokPX6hGc3NnHnf/AFN1Xzh2PuhH/rw2oDpCX5+o67X5Orl0s7JcXPA+/jZR7UOqTH0xoDGtJeT1XAmS7W9XjbJ1uy3anT+V3+FugpooCTEzLcW0K2quYRR49FiwkxCrjlospGQO1GmnZqRz0vx7lY1mzSy7ERFFEREBERAREQEREBERAREQEREBQm1P8rD9v9FNqE2p/lYft/ogp9X6weCJV+sHgiC6IiKgiIgIiICIiAiIgKUh9Uz7IUWpSL1LPshB8z+mzaSu2mqaqko6kw4fST5IowdJXAOBJHbc8F5Th15Hlsxu4A3YW5XDhb/VWbbmCXBZ66KrLmupq1rH87Xdr71Cvx0tfK6GMB9wYxK0XObm0+d1xz5MsM9SezeElxev+gDbycYrHs3XyTSU04PRjI7NungXyg8iAdOa9p2nq8TpJKN+GRSTMu/exsjzZrgNbr2Wc4HwaV88+jHYPaiPbrB8RrqGKlpWVAqJd3NGSxuUkAsa67b6Dh2r6YxCvhoQwz5rPva1uwXPE/hxXa2X4YlU+nx/aHoopXYdUvnZTtz1L6ctLniIucQAMpJcABoACeB4KTpdoa+evo4Rhsm5kmkhllaxxa3J1Sc3Z1gbaajkrI2aJ5aGyNJcLtseIXPTV1A97YKaopy4khrGOHEXvYef4qIrNPjGOwvmNXSPIa6VzQ6M5DCwvIcXACzzlAAOliDrcpBtBjRnkPwZJJC8iSIGNw6hhD7AgWuCCNeJdYcFYKrGMLYxrZ6qncyV27sXAjhrfuX6zGsNdJNGKyAGGwdd4t2fuEi1xYPi9fWYxLS1WHywQthEgldG4NzENOW50PyjysWn3Ty5GYjRPmbEyqhdK4kBrXgkkcVi3FcPcQBW09ySB/EHEcf9Cg7UXBLi9Az/APZiebgENeDa/AnXgtkuJUUUkkctXAx8YJe1zwC2wub+7VB1ouM4nQggGsp7kuA/iDiBc+QT4UoLX6ZT2y5/WDhe1/PRB2LkxGomp2RmnhMpc6xABNtO5IsSopt5uqqB+7Bc+zwcoHafMLOjrIawSGBwcGOynUHsBHDmCCg4J8Sqondajc0aAkgka+H/AHVdNDVzT1DmS0742hl8xaQCdOfiu0gEWIuF+oMT61vgf0WSxPrW+B/RZICIiAiIg0Pk3RqJC1zgxodlaLk2B0A7SqHUYxtgyjmniw+RrYWSPfv2RhwO6a4CzT1gHFwFje41VxrsXgoq+KmlilOcAulGXJGCSBmJIOtjwB71+R4/hEj2MZidG5725mtEzbkXIvx5gj3Hkn5FeNTteGZo6Vr49zKevu2yF4cN2LB2XUcdefcuuon2nDMMLKaN0jqqQVQY5gDYt51ePHqcrG/Lgp+mxGiqnBtNVwSuPAMeCtDccwpzMzcRpC3mJWpsQmLV+PUtY8RxRmGSUshs0OswNLy863/pLbfWb3rjp6za6Sg3gpS6R0QdECImlxPys/WOUj+mwI+d3WpuL4a5wa2vpSS7IAJW6uzBtuPG5A8Su5J7Dkwl1U/DKV2IsEdYY2mVoto62vDRdaIgIiICIiAiIgIiICIiAiIgIiICIiAoTan+Vh+3+im1CbU/ysP2/wBEFPq/WDwRKv1g8EQXRERUEREBERAREQEREBSkPqmfZCi1KQ+qZ9kIKD6TPRlQbaZalsz6PEWjLvWE5ZB2B4H+v+q8rh9AmPiqLPhKiihvcvLi+/uLLn3r6PqqmCkhMtTKyKMcXPNgtFFitBXAGkq4Zbi4DXC6e41YZRVNK9omnjkijYWsDWZTqQTc37l01lHFVholLhYEdU2uCLELp4r8Ivxv7isyaSTTjo8Mp6OQvgDgTccdLFYtwqlbVsqGtcJGuL/lGxJLjcjuzu8125Bzd94pkHN33iqqGqNm6SWUyMfNHI+TPK4O1k0tY+7tWA2XoLyNfvHxEgxxudcRWAGl/DtU5kHN33imQc3feKDiosJpKJzTTRlga5zgMxsC7iVz1Wz2H1U7ZZ43PLS4gFxtqXE//wBH/oClcg5u+8UyDm77xQRL9nMPklEkjJHuHDNIdL3v+JJ8VtrcDoa2TPURuccznfLIFyLFSOQc3feKZBzd94oIWfZummmkeZ6kCQglofpwIPZfUae5fn91sMsRkk1aW/L7C4OI8LgacFN5Bzd94pkHN33igiZtncPlyZmP6rcos7sytbx48GhdmG4dTYbE6OkYWtcQTdxNza3b4LqyDm77xTIObvvFBkixyDm77xTIObvvFAPrW+B/RZLCwErbX4HifBZoCIsZHsjY58jmsY0XLnGwCDJFFUe0WDVtU6mpMUopqhpsY2TNLr+F1KpoQeK7OQ4nWST1NVU5HiNroWloYWtJOUi19czr69vcFx0exOGUtS57DL0cxtYIAcrbgyXcbWvcSOFrcD5WhEEJhezdFhtaJqUFsLKUUkcOtmMzEnt8OzT/AE56TYzBqQRdHgdG6FxdE9jspjJFrttwNgBfiQBe6saIK/T7IYNTywvhpnM3Mjpo2B5yteZGvLrcL3aPdfmVYERAREQEREBERAREQEREBERAREQEREBERAUJtT/Kw/b/AEU2oTan+Vh+3+iCn1frB4IlX6weCILoiIqCIiAiIgIiICIiApSL1TPshRalIvUs+yEHzF6Xtr34htBWUVY6qFM0hsAjYQxrQeN9bk9unaqPQV1LQYxT1FJW1UpYHOa3K4a2NtezVetY9h0lFi1ZSvhuY5LXLL3aXaW07QuOaCK0kBhbHoWuGWxXXj58sMeifCZ8Mus3d6EPSNXYpjowWtD3QZBZzzfK43IseRtw716xtnTYpUR03wSagFokzbmQsNy3q367e3ncDkV5N6LMCa3aynbSQsbDA1skr2tseoLC57bmy9yxKvioI43zcHvDeIFu0n3ALlld32X4+VaqKjayOSPo9K2VskocQ90YEbN44Fp7T1Mp538ludPtHDFFUR08lU7K3PTSbqMk3N+sCbdllNOxihAuJswBscrSbdmthosHY5Qjqib+IRcMc0tPde40upo20vq8SdiVfBBFGWRUwkizcDI4dVhPcWknucFDV1TtW1v/AKKlc8ZRrIImu4jXiRm46Wta3AqxzYkxmFGuZG+RgaHZW6G3vtwWVTidLTSPZK5+Zls2WNztTwGg49tk1TavQTbVyCaSeBsTo3uLI2GMiQZXkC54aiMf+R15TOGPxOTAmurogzETmuzMPnHLqNL5bft2LVLtHR75kdO4ykgvc7K4NawGxdfKdL6ctDqFtn2gwyBjHy1Ia13Alp16ody5EFa6b4TcdOFundA4VWbeBx1cLaXXYok7RYUBfpjLaagE2vbu713UFZBX0zZ6V+eJxIBtbUGxUsvybjoREUUXJiLqprI+hNDnF3WvbQW711ogh6ifFIzfdMyXAJbZ3bZdVE+tdUOFVGGxZBY3Gp05e9dyIMT61vgf0WSxPrW+B/RZIC8G9O+2raesrcKjnyigiEr4wR13luYXHcC23iV7yvA/7Rmw1ZXRVeNYbBLOyanyVDYhdzHNHVfYakWAB5WVxR496K8foqqonlr3yRTRxlz3gB1z2u48S4jzX1D6H9pDj2z8sE05nqaF7Y3vN7lpF23v22XxHsBh+Iz4kHYaxzp5WmNkTLF8jgQS0N1Pvsvtr0L7L1ezOyLRisTYcUrX9IqWNN8ptYAnhew1tzWrjJFuXVUziWEV8mLV9ZROhbJNA2OGQuAMbg1wv8gntHAhczcL2mZWE/CUb6MZwIjIQ5wJflu7KToCz8de1bMWo8Xk2ypaml6R0BscIOWXLHcOk3lxnH9JZ/Q69gLi1xGT4ftL8Lzyxid1MarO1jqk5XDM/LwkBDcpbf3dR1rmTKs3H3b3YVtc5pviVOHHLwkPYx4J+TzLDy0OnYeqPC9o9050uIxunG8y2e4NJLQGm1udzZYYpXbQuxaqjw+kqxSgFsb8kVjYx3c0uN7m8nyrA2Fl047SYzUU1NJTPlFR0SRk0UMoY3eEN1GouflWN/eL3Trth0+7XU4LidVh1KyrkgqKlkE0LjI82a5xGSQHLq5oFuAOvFahhW0zZmObikZYXBz2ucSflvOmnzSwW7bFY1g2iotn6R9I6Tf01O50rZCyRzyHNsHE3JOTOdDxFrnt5unbWxwxyOpJ5GPYGgMZDnBcXDM4ZrAglhH9OXNfVXqp0txwra4tgHwvTgtsZCL9bSIW4aatlN+8cL6duHUG0cWJUkldXwS0rC7ehhIzAg6Wtzy9vYVyU9RtVLBFPHBI1/VidDUtibqC0OkNjf5/A6gaDUE63P2zDGOjZG6SRpa5rxFljIjNnCxubv1tc9nDVSZ2+2l6For4ah5eYHvF2gAB1rHX/j/uiVEc7nuLN5YsI0fbrXFiNR38l2tvlGbjbVfqyrFlwxub5VtfFZIiAiIgIiICIiAiIgIiICIiAoTan+Vh+3+im1CbU/ysP2/0QU+r9YPBEq/WDwRBdERFQREQEREBERAREQFKQ+qZ9kKLUpD6pn2QgjNoMCpsagYyZz4nse17ZIzY9U3APMKqs9Hbixsc2J5xmLnybrrPJPjorZjuPYdgUAlxKpbFmBLGcXvtxsOJVXo/Sfg1VPkFPWsYeD3Mb/oCudyxxvvXXHruOp8LTgOCUWB0hgoY7ZtXvdq557ypCSKOQ3kY13VLdR2HiPwWqhrKevpmz0krZYncHN/7ot5APEA+K3vblfZwT4PRTNs6It6mQZHEWF7rNmF0TY2s3DHNAt1tb+PNdeRvzW+SZG/Nb5JsYGnhMDoTG0xO4tPBaqjD6Woe580LXucACfDh7+9dGRvzW+SZG/Nb5JscfwTQZiRSxAk30Fvd4a3twWluBYe2ZsjYCMrS3LmNtbd/IW8LhSWRvzW+SZG/Nb5K7qajkdhdC5wc6khJDcoJb2aafgPJdNPDHTxCOFuVg7L3WWRvzW+SZG/Nb5KbppkixyN+a3yTI35rfJFZIscjfmt8kyN+a3yQZIscjfmt8kyN+a3yQD61vgf0WSwygStsANDw9yzQEREGiKkpoZnyw08Mcr/lPawAu8T2reiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIChNqf5WH7f6KbUJtT/Kw/b/RBT6v1g8ESr9YPBEF0REVBERAREQEREBERAUpF6ln2QotSUT27pgLh8kIPkLGNsJtovSHiuIVEhdDlkjp2X0ZE09UD3C57yVIbFjIyRrqh05Ly+7r6X7NVDY5sLtFs9t3iLKXBcSq6FkshhnpqZ8jHxuuW2LQRexAI5qW2Xw7aZ8znVGzmLUzQG2z0sgvca8W9i8nLhbdvVx5yY6ev+j/ABN9JjMVPm/g1PUc3sv2H/vNXLbPBanGY6YUu6JjEgO8cBYubYHVruB5WPIhUT0f4PiD9oKeauo6imgp7yF00ZYCewC/bf8A0XqVdUTNfFHSNjc9+Yl775WgDttzNh5+C68Msx93LmsuW4rzsO2oBa7p8DiODA8tAsR9U3u0HQ9rr9gWL8H2j32RuKDou6IB3jhIH2NjmtwzZfcDzsZ6qxQ00jmGjqZQ1oJfE0OaTyGtz5LS3HMzQ74OrwCL6xi9tb6X7uHHkurjpxPwzGocSp3UtaHUYqDJKJpnOdu+rZo0t8/j3e7RUYNisbag4eKaGpfJI41QlIfMHFxaHdXTKS3no2wsCp3C651XHI6WF8Ja6wD2ltwQD2+Nj3grtzt+cPNFUqHC9pm4jVPjq2MLnMzSvlLmvbfUtZl0Nr6X7u262uw3a4U8LPhKke8FmZ3WaQAXk6gda92dgGnDncM7fnDzTO35w80nsMkWOdvzh5pnb84eaDJFjnb84eaZ2/OHmgyXJiMVTKyMUkgjId1iTbSy6c7fnDzTO35w80ETUQYo03ZO17bgWboSL6rqoYq1lQ41MjHRZLAAkm+n/K7M7fnDzTO35w80H48hsjb8j+i/d43mfIrB7gXtsQdD+iIM943mfIpvG8z5FYIqM943mfIpvG8z5FagXEXawkdhuF+9f2Z8woNm8bzPkU3jeZ8itfX9mfMJ1/ZnzCDZvG8z5FN43mfIrX1/ZnzCdf2Z8wg2bxvM+RTeN5nyK19f2Z8wnX9mfMINm8bzPkU3jeZ8itfX9mfMJ1/ZnzCDZvG8z5FN43mfIrX1/ZnzCdf2Z8wg2bxvM+RTeN5nyK19f2Z8wnX9mfMINm8bzPkU3jeZ8itfX9mfMJ1/ZnzCDZvG8z5FN43mfIrX1/ZnzCdf2Z8wg2bxvM+RTeN5nyK19f2Z8wnX9mfMINm8bzPkU3jeZ8itfX9mfMJ1/ZnzCDZvG8z5FN43mfIrX1/ZnzCdf2Z8wg2bxvM+RTeN5nyK19f2Z8wnX9mfMINm8bzPkVC7UODqaG3z+Xcpbr+zPmFDbS5ujQ5mkdfmOSCp1frB4IlX6weCILoiIqCIiAiIgIiICIiApSH1TPshRalIfVM+yEGTXNcSGuBI42K/VCOwqpjjj6LMyJ4ZlcWktuetrcDsJB77WWXQcSDov/VNcGlxdd7gXXGg5f8AbqCZRQjKDFBJc1rWty20c53Z3+/VbqelxFoe2apY5uR7WEE3zE6E6diCVX4XAEAkAngFCtoMSERaaoF1hY712nWJI4a3Gl+IWdThtXI6OSOoDZxCI94SdCAbm1tb3GvZZBMIoU0GI7ktFX1zax3rtBf5PD83HsWMVNi4nD96xo7c0pcD8ocLaaEcOSCcRa6dr2U8TJXZpGtAc7mbalbEBERAREQEREGL3tYLvcGi9rk2WulqoKqMPp5WSNOt2nvt+hUZtXRT12F7qmaZHbxpMWgDxcaEnh7lw7M0krcTqaxlEcPpZY2hsNm9Yi4JPaFqYzp2zv30scny2+B/Ra5pWQxPkkNmNFyVsk+W3wP6LTUwtqIHxOJAcLXHEd6jSHkq5JzIQ+Vk98sMbDoHd/O3b2DhxU4oulwkMmzzva9oNw1oIB1vrcnS+thopVWoxDiyizt4tjuPJQZ2hkgDOlU1i8RZWg2JzDU9vPhop2KRjYmNc9oIABBNlnvovaM+8FlUE7aMR6SUjw4AOOV1wBYm97Du81k3aOKSdkUEBlc52UOa8Fo6wbqeziCpvfRe0Z94JvovaM+8EEXRYyaiqZA+mLHui3ujr6ceQv8AutJ2haGsPR82ZmezJAbaE8uy2vK44qa30XtGfeCb6L2jPvBBX49onCZ75omMgvlaA7X+nrE/NJJse2yybtPC6RrY4HPBA1a4Hy58PxCnt9F7Rn3gsGPgYXFrowXnM6xGptb9AghX7SsbntSS9U2JcbAat46afK/BTFPVwztjyvaHvAOQuFxpw/A+S276L2jPvBfm+i9oz7wQbEWG+i9oz7wTfRe0Z94IM0WG+i9oz7wTfRe0Z94IM0WG+i9oz7wTfRe0Z94IM0WG+i9oz7wTfRe0Z94IM0WG+i9oz7wTfRe0Z94IM0WG+i9oz7wTfRe0Z94IM1qqZdxA6S18vYst9F7Rn3guXEpGOopA17SdNAe9WRHP8LH2P5v+FoqMSmlyiP8AhM/qy6uPgToPIqIr55II4zE3O5zw22Unj4cPFcOI188GDumJZBUl5Y0FpcNHHuvwC6TDbnctLNS4hNHLle4yxnhmtmHvFh+C07VTWNPBbjd9/wAP1XLSStlZDI03a4BwNrKfqzFIGkFj3DwNljKabxu1Aq/WDwRWmtY3ejqj5PJFlp1nQEnQBaOl0/tmea0yytD55czyHR5Q0jh4aqu9JZycgtHS6f2zPNOl0/tmeaq/SWcnJ0lnJyC0dLp/bM806XT+2Z5qr9JZycnSWcnILR0un9szzTpdP7Znmqv0lnJydJZycgtHS6f2zPNOl0/tmeaq/SWcnJ0lnJyC0dLp/bM812sxWjaxrTKLgWVK6Szk5Oks5OQXf4Xo/ap8L0ftVSOks5OTpLOTkF3+F6P2qfC9H7VUjpLOTk6Szk5Bd/hej9qnwvR+1VI6Szk5Oks5OQXf4Xo/ap8L0ftVSOks5OTpLOTkF3+F6P2qfC9H7VUjpLOTk6Szk5Bd/hej9qnwvR+1VI6Szk5Oks5OQXf4Xo/ap8L0ftVSOks5OTpLOTkF3+F6P2qfC9H7VUjpLOTk6Szk5Bd/hej9qnwvR+1VI6Szk5Oks5OQXN+K0hc0iUaAp8K0ntFTOks5OTpLOTkFz+FaT2ifCtJ7RUzpLOTk6Szk5Bc/hWk9onwrSe0VM6Szk5Oks5OQXP4VpPaJ8K0ntFTOks5OTpLOTkFz+FaT2ifCtJ7RUzpLOTk6Szk5Bc/hWk9onwrSe0VM6Szk5Oks5OQXP4VpPaJ8K0ntFTOks5OTpLOTkFz+FaT2ifCtJ7RUzpLOTk6Szk5Bc/hWk9onwrSe0VM6Szk5Oks5OQXP4VpPaJ8K0ntFTOks5OTpLOTkFz+FaT2ifCtJ7RUzpLOTk6Szk5Bc/hWk9onwrSe0VM6Szk5Oks5OQXMYpSkgCS5K6OkN+a7yVHgqWb6PR3yh/qrR0tnJ3kgkOkN+a7yWislElM9jWuubdneubpbOTvJOls5O8ldjl3MnzCm5k+YV1dLZyd5J0tnJ3kr1VnpczYpA4HIeK78S3lTSSR00roJiOpJlBynsNu1aHVTHNIs7UW1C4sFZ8HYdHTSzy1DmknO4cLm9hck2HAXJ8VLdrJojiqIYImVs4nqLEvka3KCSSbAdgHAeCLKtqmGUaO+Siiv/2Q=="}},"estimated-input-latency":{"id":"estimated-input-latency","title":"Estimated Input Latency","description":"Estimated Input Latency is an estimate of how long your app takes to respond to user input, in milliseconds, during the busiest 5s window of page load. If your latency is higher than 50 ms, users may perceive your app as laggy. [Learn more](https://web.dev/estimated-input-latency).","score":0,"scoreDisplayMode":"numeric","numericValue":387.20000000000005,"displayValue":"390 ms"},"total-blocking-time":{"id":"total-blocking-time","title":"Total Blocking Time","description":"Sum of all time periods between FCP and Time to Interactive, when task length exceeded 50ms, expressed in milliseconds.","score":0.02,"scoreDisplayMode":"numeric","numericValue":2011.5,"displayValue":"2,010 ms"},"max-potential-fid":{"id":"max-potential-fid","title":"Max Potential First Input Delay","description":"The maximum potential First Input Delay that your users could experience is the duration, in milliseconds, of the longest task. [Learn more](https://developers.google.com/web/updates/2018/05/first-input-delay).","score":0,"scoreDisplayMode":"numeric","numericValue":968,"displayValue":"970 ms"},"errors-in-console":{"id":"errors-in-console","title":"Browser errors were logged to the console","description":"Errors logged to the console indicate unresolved problems. They can come from network request failures and other browser concerns. [Learn more](https://web.dev/errors-in-console)","score":0,"scoreDisplayMode":"binary","numericValue":8,"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"description","itemType":"code","text":"Description"}],"items":[{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://vk.com/im?sel=c190"},{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://vk.com/im?sel=c190"},{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://r3.mail.ru/k?sign=ef3eeae7cbf00876fc68460cc8bd0301e4bba9b2&vk_id=237381815&src=desktop"},{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://r3.mail.ru/k?sign=ef3eeae7cbf00876fc68460cc8bd0301e4bba9b2&vk_id=237381815&src=desktop"},{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://www.tns-counter.ru/V13a**clid:11**vk_com/ru/UTF-8/tmsec=vksite_total/193657229"},{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://www.tns-counter.ru/V13a**clid:11**vk_com/ru/UTF-8/tmsec=vksite_total/193657229"},{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://vk.com/js/cmodules/web/ads_light.3db037bff657a6ba09d9.js?0ec0e6eca5e172fbcc0138cbccd59eb0"},{"source":"network","description":"Failed to load resource: net::ERR_BLOCKED_BY_ADBLOCKER","url":"https://vk.com/js/cmodules/web/ads_light.3db037bff657a6ba09d9.js?0ec0e6eca5e172fbcc0138cbccd59eb0"}]}},"time-to-first-byte":{"id":"time-to-first-byte","title":"Server response times are low (TTFB)","description":"Time To First Byte identifies the time at which your server sends a response. [Learn more](https://web.dev/time-to-first-byte).","score":1,"scoreDisplayMode":"binary","numericValue":351.509,"displayValue":"Root document took 350 ms","details":{"type":"opportunity","overallSavingsMs":-248.49099999999999,"headings":[],"items":[]}},"first-cpu-idle":{"id":"first-cpu-idle","title":"First CPU Idle","description":"First CPU Idle marks the first time at which the page's main thread is quiet enough to handle input.  [Learn more](https://web.dev/first-cpu-idle).","score":0.06,"scoreDisplayMode":"numeric","numericValue":13669.61,"displayValue":"13.7 s"},"interactive":{"id":"interactive","title":"Time to Interactive","description":"Time to interactive is the amount of time it takes for the page to become fully interactive. [Learn more](https://web.dev/interactive).","score":0.02,"scoreDisplayMode":"numeric","numericValue":20508.207500000004,"displayValue":"20.5 s"},"user-timings":{"id":"user-timings","title":"User Timing marks and measures","description":"Consider instrumenting your app with the User Timing API to measure your app's real-world performance during key user experiences. [Learn more](https://web.dev/user-timings).","score":null,"scoreDisplayMode":"notApplicable","details":{"type":"table","headings":[],"items":[]}},"critical-request-chains":{"id":"critical-request-chains","title":"Avoid chaining critical requests","description":"The Critical Request Chains below show you what resources are loaded with a high priority. Consider reducing the length of chains, reducing the download size of resources, or deferring the download of unnecessary resources to improve page load. [Learn more](https://web.dev/critical-request-chains).","score":null,"scoreDisplayMode":"informative","displayValue":"45 chains found","details":{"type":"criticalrequestchain","chains":{"8CA07FFF5256C0714133B890C7368955":{"request":{"url":"https://vk.com/im?sel=c190","startTime":2006971.691144,"endTime":2006972.189302,"responseReceivedTime":2006972.045062,"transferSize":58881},"children":{"12012.11114":{"request":{"url":"https://vk.com/css/al/common.css?79933029488","startTime":2006972.079003,"endTime":2006972.377251,"responseReceivedTime":2006972.251739,"transferSize":63610}},"12012.11115":{"request":{"url":"https://vk.com/css/al/base.css?1","startTime":2006972.079643,"endTime":2006972.473657,"responseReceivedTime":2006972.464405,"transferSize":11194}},"12012.11116":{"request":{"url":"https://vk.com/css/al/fonts_utf.css?1","startTime":2006972.080245,"endTime":2006972.473914,"responseReceivedTime":2006972.4651030002,"transferSize":1481}},"12012.11117":{"request":{"url":"https://vk.com/css/al/fonts_cnt_mac.css?1","startTime":2006972.080676,"endTime":2006972.512041,"responseReceivedTime":2006972.466088,"transferSize":122849}},"12012.11118":{"request":{"url":"https://vk.com/css/al/ui_common.css?24332766487","startTime":2006972.081086,"endTime":2006972.522805,"responseReceivedTime":2006972.4876889999,"transferSize":22906}},"12012.11119":{"request":{"url":"https://vk.com/css/al/notifier.css?44783172318","startTime":2006972.081613,"endTime":2006972.603975,"responseReceivedTime":2006972.488422,"transferSize":56753}},"12012.11120":{"request":{"url":"https://vk.com/css/al/im.css?175119436649","startTime":2006972.081947,"endTime":2006972.677072,"responseReceivedTime":2006972.494305,"transferSize":45369}},"12012.11121":{"request":{"url":"https://vk.com/css/al/page.css?106479185658","startTime":2006972.082271,"endTime":2006972.919082,"responseReceivedTime":2006972.495071,"transferSize":128064}},"12012.11122":{"request":{"url":"https://vk.com/css/al/privacy.css?22235048718","startTime":2006972.082625,"endTime":2006972.832934,"responseReceivedTime":2006972.495407,"transferSize":3365}},"12012.11123":{"request":{"url":"https://vk.com/css/al/ui_media_selector.css?43131705432","startTime":2006972.083151,"endTime":2006972.976313,"responseReceivedTime":2006972.4958940002,"transferSize":6408}},"12012.11124":{"request":{"url":"https://vk.com/css/al/post.css?38525983065","startTime":2006972.083421,"endTime":2006972.976591,"responseReceivedTime":2006972.496142,"transferSize":13123}},"12012.11125":{"request":{"url":"https://vk.com/css/al/mrtarg.css?3142794554","startTime":2006972.083805,"endTime":2006972.976764,"responseReceivedTime":2006972.496411,"transferSize":378}},"12012.11126":{"request":{"url":"https://vk.com/js/loader_nav9418706_0.js","startTime":2006972.08401,"endTime":2006973.072237,"responseReceivedTime":2006972.4966850001,"transferSize":31605}},"12012.11127":{"request":{"url":"https://vk.com/js/cmodules/bundles/audioplayer.a2bcf5cd167220bca5c1.js?806c0812db4504deb56e","startTime":2006972.084613,"endTime":2006973.186359,"responseReceivedTime":2006972.497149,"transferSize":47734}},"12012.11128":{"request":{"url":"https://vk.com/js/cmodules/bundles/common.f9aa137d1936b427a71f.js?1af4e6467e56265f698e","startTime":2006972.085178,"endTime":2006973.819071,"responseReceivedTime":2006972.497419,"transferSize":182137}},"12012.11129":{"request":{"url":"https://vk.com/js/cmodules/web/common_web.42248fd47410eec0b0d7.js?ed0c06315473bf39f8b1a7b416c8bce6","startTime":2006972.085865,"endTime":2006973.589486,"responseReceivedTime":2006972.497647,"transferSize":25344},"children":{"12012.11416":{"request":{"url":"https://vk.com/css/al/datepicker.css?26232710886","startTime":2006975.674568,"endTime":2006976.974737,"responseReceivedTime":2006976.97291,"transferSize":1590}},"12012.11450":{"request":{"url":"https://vk.com/css/al/wide_dd.css?21191712835","startTime":2006975.709768,"endTime":2006976.974935,"responseReceivedTime":2006976.9734190002,"transferSize":1890}},"12012.11611":{"request":{"url":"https://vk.com/css/al/aes_light.css?35634885009","startTime":2006981.682913,"endTime":2006981.723524,"responseReceivedTime":2006981.720276,"transferSize":7101}}}},"12012.11130":{"request":{"url":"https://vk.com/js/lang0_0.js?26354315","startTime":2006972.086517,"endTime":2006973.819333,"responseReceivedTime":2006972.4979130002,"transferSize":14041}},"12012.11131":{"request":{"url":"https://vk.com/js/lib/px.js?ch=1","startTime":2006972.086852,"endTime":2006973.81951,"responseReceivedTime":2006972.498195,"transferSize":724}},"12012.11132":{"request":{"url":"https://vk.com/js/lib/px.js?ch=2","startTime":2006972.087591,"endTime":2006973.819707,"responseReceivedTime":2006972.498624,"transferSize":724}},"12012.11133":{"request":{"url":"https://vk.com/js/cmodules/bundles/6f8e323c10c73c1d3201e061de48a706.3a587b6a7b84fae81003.js?99c22e8228dd19ecbae7","startTime":2006972.090261,"endTime":2006973.886019,"responseReceivedTime":2006972.498933,"transferSize":9584}},"12012.11134":{"request":{"url":"https://vk.com/js/cmodules/web/ui_common.9ff7746100a47e4220e6.js?319637faff2531939acf3ff781f88833","startTime":2006972.092343,"endTime":2006973.923616,"responseReceivedTime":2006972.499336,"transferSize":17629}},"12012.11135":{"request":{"url":"https://vk.com/js/al/docs.js?2807273049","startTime":2006972.092996,"endTime":2006973.924175,"responseReceivedTime":2006972.499577,"transferSize":16596}},"12012.11136":{"request":{"url":"https://vk.com/js/cmodules/web/emoji.de9c835a122e47f22ac6.js?732305db39831fad7ece024d876b556f","startTime":2006972.093588,"endTime":2006973.964253,"responseReceivedTime":2006972.500053,"transferSize":38668}},"12012.11137":{"request":{"url":"https://vk.com/js/cmodules/bundles/vendors.70cc452207d7ab2329a5.js?1d1c845c51f848b67a36","startTime":2006972.094089,"endTime":2006974.076264,"responseReceivedTime":2006972.500359,"transferSize":45822}},"12012.11138":{"request":{"url":"https://vk.com/js/cmodules/bundles/2a07abfbd40f8c4643e6e2ece64890b7.3b736c8d8102825e57dc.js?361c7d30d2ff0ac91182","startTime":2006972.095068,"endTime":2006974.07651,"responseReceivedTime":2006972.500634,"transferSize":4103}},"12012.11139":{"request":{"url":"https://vk.com/js/cmodules/web/imn.34cb1f710da61297904a.js?9173e06c57a4d42ff968efc42971a581","startTime":2006972.095801,"endTime":2006974.481889,"responseReceivedTime":2006972.501113,"transferSize":156464}},"12012.11140":{"request":{"url":"https://vk.com/js/al/upload.js?3579182903","startTime":2006972.096366,"endTime":2006974.193093,"responseReceivedTime":2006972.5014459998,"transferSize":15386}},"12012.11141":{"request":{"url":"https://vk.com/js/cmodules/bundles/37d6fe1fee6fb6accf5867cbca2cda9c.4e530afdef35f11d2df5.js?7d2f356e98d88e1ce67d","startTime":2006972.097196,"endTime":2006974.594379,"responseReceivedTime":2006972.501734,"transferSize":56134}},"12012.11142":{"request":{"url":"https://vk.com/js/cmodules/web/notifier.8b87be24e14f75030112.js?e74bb06de95c167ee254ad0f4ef0f8e0","startTime":2006972.097897,"endTime":2006974.653687,"responseReceivedTime":2006972.502101,"transferSize":57581}},"12012.11143":{"request":{"url":"https://vk.com/js/cmodules/bundles/d12423227016dc98c5accc7443eabdcc.bbc554f7742b2e21b2d9.js?0bea1f720a477a03680d","startTime":2006972.098567,"endTime":2006974.653964,"responseReceivedTime":2006972.5023379999,"transferSize":5433}},"12012.11144":{"request":{"url":"https://vk.com/js/cmodules/bundles/7ff0c31fd89ceca852f0cf5e2f61c8c8.8aeb6622f5c9b59771b2.js?c09f30a027d701dc8587","startTime":2006972.09898,"endTime":2006974.73944,"responseReceivedTime":2006972.502812,"transferSize":38913}},"12012.11145":{"request":{"url":"https://vk.com/js/cmodules/web/page.98ca34cb8d19ee85c5ff.js?dc387d23a548915172ee5781fbb3742b","startTime":2006972.099689,"endTime":2006975.035603,"responseReceivedTime":2006972.503094,"transferSize":75413}},"12012.11146":{"request":{"url":"https://vk.com/js/cmodules/web/privacy.5d775791326f431ee43f.js?47e1914c882f00c3fd721d45ef8566d5","startTime":2006972.100236,"endTime":2006975.003586,"responseReceivedTime":2006972.503337,"transferSize":7828}},"12012.11147":{"request":{"url":"https://vk.com/js/cmodules/web/ui_media_selector.293b2b7cae39ed4bcee7.js?c490a4fc2c76babd1b97697a7d0730f3","startTime":2006972.100914,"endTime":2006975.003966,"responseReceivedTime":2006972.503639,"transferSize":1906}},"12012.11148":{"request":{"url":"https://vk.com/js/cmodules/web/indexer.e94224835d680526eb5f.js?38c2fdf1a6af34ad7b72ff0b47302112","startTime":2006972.101594,"endTime":2006975.004209,"responseReceivedTime":2006972.5040429998,"transferSize":5109}},"12012.11149":{"request":{"url":"https://vk.com/js/cmodules/web/stickers.5f918cd6033976c9de76.js?2249ce571119f6bd08729d6d185b321a","startTime":2006972.102179,"endTime":2006975.005128,"responseReceivedTime":2006972.504927,"transferSize":5233}},"12012.11150":{"request":{"url":"https://vk.com/js/cmodules/web/time_spent.4987e900aea02b1e427c.js?a864013130678faf429c","startTime":2006972.103072,"endTime":2006975.005656,"responseReceivedTime":2006972.505434,"transferSize":2335}},"12012.11151":{"request":{"url":"https://vk.com/js/al/mrtarg.js?1146267795","startTime":2006972.103659,"endTime":2006975.006016,"responseReceivedTime":2006972.50573,"transferSize":4677}},"12012.11152":{"request":{"url":"https://vk.com/js/cmodules/bundles/eacb1b9f9931571fe94e0a9cbbe77241.8acd3943b71563a1ebec.js?b824d1d73bcd0a8b740c","startTime":2006972.105927,"endTime":2006975.006243,"responseReceivedTime":2006972.5060120001,"transferSize":3941}},"12012.11153":{"request":{"url":"https://vk.com/js/cmodules/web/app_use_time.fd676af40680d53b3dbf.js?3bf6bfe5387fb19cbd3f68e81f6aa510","startTime":2006972.106754,"endTime":2006975.006433,"responseReceivedTime":2006972.506392,"transferSize":2835}},"12012.11154":{"request":{"url":"https://vk.com/js/cmodules/web/page_layout.e079bad139c8a3e4b497.js?317c95c50b7f8c8515b2","startTime":2006972.107822,"endTime":2006975.006586,"responseReceivedTime":2006972.506661,"transferSize":2461}},"12012.11155":{"request":{"url":"https://vk.com/js/cmodules/web/likes.691d77af4cde27d80cb8.js?285ec59b20333a4d20142e4885efe16c","startTime":2006972.108963,"endTime":2006975.035331,"responseReceivedTime":2006972.5069199998,"transferSize":5957}},"12012.11360":{"request":{"url":"https://vk.com/fonts/NotoSansBengali-Regular.woff","startTime":2006975.957728,"endTime":2006977.078752,"responseReceivedTime":2006976.973789,"transferSize":55058}}}},"12012.11331":{"request":{"url":"https://vk.com/js/cmodules/sw/sw.js","startTime":2006975.17602,"endTime":2006975.258881,"responseReceivedTime":2006975.2555759999,"transferSize":0}}},"longestChain":{"duration":10032.379999989644,"length":3,"transferSize":7101}}},"redirects":{"id":"redirects","title":"Avoid multiple page redirects","description":"Redirects introduce additional delays before the page can be loaded. [Learn more](https://web.dev/redirects).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"installable-manifest":{"id":"installable-manifest","title":"Web app manifest does not meet the installability requirements","description":"Browsers can proactively prompt users to add your app to their homescreen, which can lead to higher engagement. [Learn more](https://web.dev/installable-manifest).","score":0,"scoreDisplayMode":"binary","explanation":"Failures: No manifest was fetched.","details":{"type":"debugdata","items":[{"failures":["No manifest was fetched"],"isParseFailure":true,"parseFailureReason":"No manifest was fetched"}]}},"apple-touch-icon":{"id":"apple-touch-icon","title":"Provides a valid `apple-touch-icon`","description":"For ideal appearance on iOS when users add a progressive web app to the home screen, define an `apple-touch-icon`. It must point to a non-transparent 192px (or 180px) square PNG. [Learn More](https://web.dev/apple-touch-icon/).","score":1,"scoreDisplayMode":"binary","warnings":[]},"splash-screen":{"id":"splash-screen","title":"Is not configured for a custom splash screen","description":"A themed splash screen ensures a high-quality experience when users launch your app from their homescreens. [Learn more](https://web.dev/splash-screen).","score":0,"scoreDisplayMode":"binary","explanation":"Failures: No manifest was fetched.","details":{"type":"debugdata","items":[{"failures":["No manifest was fetched"],"isParseFailure":true,"parseFailureReason":"No manifest was fetched"}]}},"themed-omnibox":{"id":"themed-omnibox","title":"Does not set a theme color for the address bar.","description":"The browser address bar can be themed to match your site. [Learn more](https://web.dev/themed-omnibox).","score":0,"scoreDisplayMode":"binary","explanation":"Failures: No manifest was fetched,\nNo `\u003cmeta name=\"theme-color\">` tag found.","details":{"type":"debugdata","items":[{"failures":["No manifest was fetched","No `\u003cmeta name=\"theme-color\">` tag found"],"themeColor":null,"isParseFailure":true,"parseFailureReason":"No manifest was fetched"}]}},"content-width":{"id":"content-width","title":"Content is sized correctly for the viewport","description":"If the width of your app's content doesn't match the width of the viewport, your app might not be optimized for mobile screens. [Learn more](https://web.dev/content-width).","score":null,"scoreDisplayMode":"notApplicable"},"image-aspect-ratio":{"id":"image-aspect-ratio","title":"Displays images with correct aspect ratio","description":"Image display dimensions should match natural aspect ratio. [Learn more](https://web.dev/image-aspect-ratio).","score":1,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[],"items":[]}},"deprecations":{"id":"deprecations","title":"Avoids deprecated APIs","description":"Deprecated APIs will eventually be removed from the browser. [Learn more](https://web.dev/deprecations).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[]}},"mainthread-work-breakdown":{"id":"mainthread-work-breakdown","title":"Minimize main-thread work","description":"Consider reducing the time spent parsing, compiling and executing JS. You may find delivering smaller JS payloads helps with this. [Learn more](https://web.dev/mainthread-work-breakdown)","score":0.01,"scoreDisplayMode":"numeric","numericValue":13629.219999999907,"displayValue":"13.6 s","details":{"type":"table","headings":[{"key":"groupLabel","itemType":"text","text":"Category"},{"key":"duration","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"group":"styleLayout","groupLabel":"Style & Layout","duration":4624.335999999996},{"group":"other","groupLabel":"Other","duration":3146.3999999999237},{"group":"scriptEvaluation","groupLabel":"Script Evaluation","duration":3133.25199999999},{"group":"paintCompositeRender","groupLabel":"Rendering","duration":905.352000000007},{"group":"parseHTML","groupLabel":"Parse HTML & CSS","duration":825.2799999999904},{"group":"garbageCollection","groupLabel":"Garbage Collection","duration":602.236},{"group":"scriptParseCompile","groupLabel":"Script Parsing & Compilation","duration":392.3639999999998}]}},"bootup-time":{"id":"bootup-time","title":"Reduce JavaScript execution time","description":"Consider reducing the time spent parsing, compiling, and executing JS. You may find delivering smaller JS payloads helps with this. [Learn more](https://web.dev/bootup-time).","score":0.59,"scoreDisplayMode":"numeric","numericValue":2943.8799999999997,"displayValue":"2.9 s","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"total","granularity":1,"itemType":"ms","text":"Total CPU Time"},{"key":"scripting","granularity":1,"itemType":"ms","text":"Script Evaluation"},{"key":"scriptParseCompile","granularity":1,"itemType":"ms","text":"Script Parse"}],"items":[{"url":"Other","total":9401.943999999927,"scripting":639.3879999999995,"scriptParseCompile":8.788},{"url":"https://vk.com/im?sel=c190","total":1312.9279999999992,"scripting":935.4319999999992,"scriptParseCompile":32.268},{"url":"https://vk.com/js/cmodules/web/imn.34cb1f710da61297904a.js?9173e06c57a4d42ff968efc42971a581","total":893.4080000000004,"scripting":271.44800000000026,"scriptParseCompile":28.419999999999998},{"url":"https://vk.com/js/cmodules/bundles/common.f9aa137d1936b427a71f.js?1af4e6467e56265f698e","total":547.0640000000005,"scripting":176.24000000000046,"scriptParseCompile":22.832},{"url":"https://vk.com/js/cmodules/web/common_web.42248fd47410eec0b0d7.js?ed0c06315473bf39f8b1a7b416c8bce6","total":209.36400000000037,"scripting":206.82000000000036,"scriptParseCompile":2.544},{"url":"chrome-extension://bgpmiljelfnilfcfmoppijdkmccbccel/filter_content.js","total":187.33600000000013,"scripting":181.16000000000014,"scriptParseCompile":6.176},{"url":"https://vk.com/js/cmodules/web/indexer.e94224835d680526eb5f.js?38c2fdf1a6af34ad7b72ff0b47302112","total":143.04400000000004,"scripting":141.14000000000004,"scriptParseCompile":1.9040000000000001},{"url":"https://vk.com/js/cmodules/web/emoji.de9c835a122e47f22ac6.js?732305db39831fad7ece024d876b556f","total":80.58399999999999,"scripting":74.99199999999999,"scriptParseCompile":5.592},{"url":"https://vk.com/js/al/datepicker.js?3747769347","total":73.30799999999999,"scripting":54.072,"scriptParseCompile":13.447999999999995},{"url":"https://vk.com/js/al/wide_dd.js?3516210135","total":59.272,"scripting":25.90800000000001,"scriptParseCompile":4.9959999999999996},{"url":"https://vk.com/js/cmodules/web/notifier.8b87be24e14f75030112.js?e74bb06de95c167ee254ad0f4ef0f8e0","total":58.8,"scripting":48.332,"scriptParseCompile":9.503999999999998},{"url":"file://localhost/browser.js","total":52.476,"scripting":21.595999999999997,"scriptParseCompile":30.88}],"summary":{"wastedMs":2943.8799999999997}}},"uses-rel-preload":{"id":"uses-rel-preload","title":"Preload key requests","description":"Consider using `\u003clink rel=preload>` to prioritize fetching resources that are currently requested later in page load. [Learn more](https://web.dev/uses-rel-preload).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0}},"uses-rel-preconnect":{"id":"uses-rel-preconnect","title":"Preconnect to required origins","description":"Consider adding `preconnect` or `dns-prefetch` resource hints to establish early connections to important third-party origins. [Learn more](https://web.dev/uses-rel-preconnect).","score":0.71,"scoreDisplayMode":"numeric","numericValue":370.31399999999996,"displayValue":"Potential savings of 370 ms","warnings":[],"details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"wastedMs","valueType":"timespanMs","label":"Potential Savings"}],"items":[{"url":"https://sun9-60.userapi.com","wastedMs":370.31399999999996},{"url":"https://sun9-20.userapi.com","wastedMs":362.78400000000005},{"url":"https://sun9-62.userapi.com","wastedMs":358.784},{"url":"https://sun9-27.userapi.com","wastedMs":355.73600000000005},{"url":"https://sun9-11.userapi.com","wastedMs":353.492},{"url":"https://sun9-6.userapi.com","wastedMs":352.92199999999997},{"url":"https://sun9-42.userapi.com","wastedMs":352.216},{"url":"https://sun9-69.userapi.com","wastedMs":351.648},{"url":"https://sun9-18.userapi.com","wastedMs":349.05199999999996},{"url":"https://sun9-58.userapi.com","wastedMs":348.74399999999997},{"url":"https://sun9-61.userapi.com","wastedMs":348.52399999999994},{"url":"https://sun9-56.userapi.com","wastedMs":348.204},{"url":"https://sun9-41.userapi.com","wastedMs":346.37},{"url":"https://sun9-46.userapi.com","wastedMs":342.512},{"url":"https://sun9-13.userapi.com","wastedMs":341.274},{"url":"https://sun9-57.userapi.com","wastedMs":338.442},{"url":"https://sun9-17.userapi.com","wastedMs":338.15000000000003},{"url":"https://sun9-38.userapi.com","wastedMs":336.79799999999994},{"url":"https://sun9-2.userapi.com","wastedMs":336.096},{"url":"https://pu7-6.vk-cdn.net","wastedMs":310.354},{"url":"https://ps.vk.com","wastedMs":310.354}],"overallSavingsMs":370.31399999999996}},"font-display":{"id":"font-display","title":"Ensure text remains visible during webfont load","description":"Leverage the font-display CSS feature to ensure text is user-visible while webfonts are loading. [Learn more](https://web.dev/font-display).","score":0,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"wastedMs","itemType":"ms","text":"Potential Savings"}],"items":[{"url":"https://vk.com/fonts/NotoSansBengali-Regular.woff","wastedMs":1121.023999992758}]}},"diagnostics":{"id":"diagnostics","title":"Diagnostics","description":"Collection of useful page vitals.","score":null,"scoreDisplayMode":"informative","details":{"type":"debugdata","items":[{"numRequests":239,"numScripts":37,"numStylesheets":15,"numFonts":1,"numTasks":3199,"numTasksOver10ms":33,"numTasksOver25ms":13,"numTasksOver50ms":10,"numTasksOver100ms":8,"numTasksOver500ms":0,"rtt":6.861999999999998,"throughput":5555657.3964414485,"maxRtt":42.01899999999999,"maxServerLatency":4073.526,"totalByteWeight":3730263,"totalTaskTime":3407.305000000013,"mainDocumentTransferSize":58881}]}},"network-requests":{"id":"network-requests","title":"Network Requests","description":"Lists the network requests that were made during page load.","score":null,"scoreDisplayMode":"informative","numericValue":239,"details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"startTime","itemType":"ms","granularity":1,"text":"Start Time"},{"key":"endTime","itemType":"ms","granularity":1,"text":"End Time"},{"key":"transferSize","itemType":"bytes","displayUnit":"kb","granularity":1,"text":"Transfer Size"},{"key":"resourceSize","itemType":"bytes","displayUnit":"kb","granularity":1,"text":"Resource Size"},{"key":"statusCode","itemType":"text","text":"Status Code"},{"key":"mimeType","itemType":"text","text":"MIME Type"},{"key":"resourceType","itemType":"text","text":"Resource Type"}],"items":[{"url":"https://vk.com/im?sel=c190","startTime":0,"endTime":498.15799994394183,"transferSize":58881,"resourceSize":632762,"statusCode":200,"mimeType":"text/html","resourceType":"Document"},{"url":"https://vk.com/css/al/common.css?79933029488","startTime":387.85899989306927,"endTime":686.1069998703897,"transferSize":63610,"resourceSize":675494,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/base.css?1","startTime":388.4989998769015,"endTime":782.5130000710487,"transferSize":11194,"resourceSize":114778,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/fonts_utf.css?1","startTime":389.1010000370443,"endTime":782.7699999324977,"transferSize":1481,"resourceSize":9142,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/fonts_cnt_mac.css?1","startTime":389.5320000592619,"endTime":820.8969999104738,"transferSize":122849,"resourceSize":285790,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/ui_common.css?24332766487","startTime":389.9419999215752,"endTime":831.6609999164939,"transferSize":22906,"resourceSize":138114,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/notifier.css?44783172318","startTime":390.46899997629225,"endTime":912.8310000523925,"transferSize":56753,"resourceSize":855196,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/im.css?175119436649","startTime":390.80299995839596,"endTime":985.9279999509454,"transferSize":45369,"resourceSize":537478,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/page.css?106479185658","startTime":391.12699986435473,"endTime":1227.9379998799413,"transferSize":128064,"resourceSize":1110104,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/privacy.css?22235048718","startTime":391.4809999987483,"endTime":1141.7900000233203,"transferSize":3365,"resourceSize":21626,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/ui_media_selector.css?43131705432","startTime":392.0070000458509,"endTime":1285.1690000388771,"transferSize":6408,"resourceSize":33756,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/post.css?38525983065","startTime":392.2770000062883,"endTime":1285.4470000602305,"transferSize":13123,"resourceSize":71272,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/css/al/mrtarg.css?3142794554","startTime":392.6609999034554,"endTime":1285.619999980554,"transferSize":378,"resourceSize":56,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/js/loader_nav9418706_0.js","startTime":392.86600006744266,"endTime":1381.09300006181,"transferSize":31605,"resourceSize":159486,"statusCode":200,"mimeType":"text/javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/bundles/audioplayer.a2bcf5cd167220bca5c1.js?806c0812db4504deb56e","startTime":393.4690000023693,"endTime":1495.2149998862296,"transferSize":47734,"resourceSize":248300,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/bundles/common.f9aa137d1936b427a71f.js?1af4e6467e56265f698e","startTime":394.0339998807758,"endTime":2127.9269999358803,"transferSize":182137,"resourceSize":1133982,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/common_web.42248fd47410eec0b0d7.js?ed0c06315473bf39f8b1a7b416c8bce6","startTime":394.7209999896586,"endTime":1898.3419998548925,"transferSize":25344,"resourceSize":98862,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/lang0_0.js?26354315","startTime":395.37300006486475,"endTime":2128.1890000682324,"transferSize":14041,"resourceSize":68320,"statusCode":200,"mimeType":"text/javascript","resourceType":"Script"},{"url":"https://vk.com/js/lib/px.js?ch=1","startTime":395.70800005458295,"endTime":2128.366000019014,"transferSize":724,"resourceSize":694,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/lib/px.js?ch=2","startTime":396.44699986092746,"endTime":2128.5629998892546,"transferSize":724,"resourceSize":694,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/bundles/6f8e323c10c73c1d3201e061de48a706.3a587b6a7b84fae81003.js?99c22e8228dd19ecbae7","startTime":399.11699993535876,"endTime":2194.8750000447035,"transferSize":9584,"resourceSize":37322,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/ui_common.9ff7746100a47e4220e6.js?319637faff2531939acf3ff781f88833","startTime":401.1989999562502,"endTime":2232.471999945119,"transferSize":17629,"resourceSize":125446,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/al/docs.js?2807273049","startTime":401.85200003907084,"endTime":2233.0310000106692,"transferSize":16596,"resourceSize":57198,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/emoji.de9c835a122e47f22ac6.js?732305db39831fad7ece024d876b556f","startTime":402.44399989023805,"endTime":2273.1089999433607,"transferSize":38668,"resourceSize":198178,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/bundles/vendors.70cc452207d7ab2329a5.js?1d1c845c51f848b67a36","startTime":402.9449999798089,"endTime":2385.11999999173,"transferSize":45822,"resourceSize":275606,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/bundles/2a07abfbd40f8c4643e6e2ece64890b7.3b736c8d8102825e57dc.js?361c7d30d2ff0ac91182","startTime":403.92399998381734,"endTime":2385.36600000225,"transferSize":4103,"resourceSize":10538,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/imn.34cb1f710da61297904a.js?9173e06c57a4d42ff968efc42971a581","startTime":404.65699997730553,"endTime":2790.7449998892844,"transferSize":156464,"resourceSize":1049548,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/al/upload.js?3579182903","startTime":405.22199985571206,"endTime":2501.9489999394864,"transferSize":15386,"resourceSize":123940,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/bundles/37d6fe1fee6fb6accf5867cbca2cda9c.4e530afdef35f11d2df5.js?7d2f356e98d88e1ce67d","startTime":406.0519998893142,"endTime":2903.2349998597056,"transferSize":56134,"resourceSize":352684,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/notifier.8b87be24e14f75030112.js?e74bb06de95c167ee254ad0f4ef0f8e0","startTime":406.7529998719692,"endTime":2962.5430000014603,"transferSize":57581,"resourceSize":308440,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/bundles/d12423227016dc98c5accc7443eabdcc.bbc554f7742b2e21b2d9.js?0bea1f720a477a03680d","startTime":407.4229998514056,"endTime":2962.820000015199,"transferSize":5433,"resourceSize":16086,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/bundles/7ff0c31fd89ceca852f0cf5e2f61c8c8.8aeb6622f5c9b59771b2.js?c09f30a027d701dc8587","startTime":407.835999969393,"endTime":3048.295999877155,"transferSize":38913,"resourceSize":191898,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/page.98ca34cb8d19ee85c5ff.js?dc387d23a548915172ee5781fbb3742b","startTime":408.545000012964,"endTime":3344.459000043571,"transferSize":75413,"resourceSize":646364,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/privacy.5d775791326f431ee43f.js?47e1914c882f00c3fd721d45ef8566d5","startTime":409.0919999871403,"endTime":3312.4420000240207,"transferSize":7828,"resourceSize":43298,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/ui_media_selector.293b2b7cae39ed4bcee7.js?c490a4fc2c76babd1b97697a7d0730f3","startTime":409.77000002749264,"endTime":3312.82199989073,"transferSize":1906,"resourceSize":3202,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/indexer.e94224835d680526eb5f.js?38c2fdf1a6af34ad7b72ff0b47302112","startTime":410.44999985024333,"endTime":3313.0649998784065,"transferSize":5109,"resourceSize":11708,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/stickers.5f918cd6033976c9de76.js?2249ce571119f6bd08729d6d185b321a","startTime":411.0349998809397,"endTime":3313.9839998912066,"transferSize":5233,"resourceSize":12074,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/time_spent.4987e900aea02b1e427c.js?a864013130678faf429c","startTime":411.92799992859364,"endTime":3314.511999953538,"transferSize":2335,"resourceSize":5908,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/al/mrtarg.js?1146267795","startTime":412.514999974519,"endTime":3314.871999900788,"transferSize":4677,"resourceSize":15256,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/bundles/eacb1b9f9931571fe94e0a9cbbe77241.8acd3943b71563a1ebec.js?b824d1d73bcd0a8b740c","startTime":414.78300001472235,"endTime":3315.0989999994636,"transferSize":3941,"resourceSize":13126,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/app_use_time.fd676af40680d53b3dbf.js?3bf6bfe5387fb19cbd3f68e81f6aa510","startTime":415.610000025481,"endTime":3315.2890000492334,"transferSize":2835,"resourceSize":5224,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/page_layout.e079bad139c8a3e4b497.js?317c95c50b7f8c8515b2","startTime":416.6780000086874,"endTime":3315.4420000500977,"transferSize":2461,"resourceSize":5406,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/cmodules/web/likes.691d77af4cde27d80cb8.js?285ec59b20333a4d20142e4885efe16c","startTime":417.81899984925985,"endTime":3344.1870000679046,"transferSize":5957,"resourceSize":18254,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://sun7-9.userapi.com/c857520/v857520696/7cc73/SoEiSJvPda8.jpg?ava=1","startTime":418.39300002902746,"endTime":511.8919999804348,"transferSize":471,"resourceSize":3342,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-67.userapi.com/c854524/v854524029/19ae0f/L6ylOWFCFf4.jpg?ava=1","startTime":418.9349999651313,"endTime":513.1190000101924,"transferSize":496,"resourceSize":4100,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-9.userapi.com/c858028/v858028915/b0d05/K_dApSQWFLY.jpg?ava=1","startTime":524.8229999560863,"endTime":569.4379999767989,"transferSize":471,"resourceSize":4280,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-6.userapi.com/c204724/v204724086/25674/YaFexqMvHug.jpg?ava=1","startTime":534.421999938786,"endTime":569.0140000078827,"transferSize":471,"resourceSize":2798,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-67.userapi.com/c204624/v204624981/c811/mAItpnOwPWY.jpg?ava=1","startTime":571.2899998761714,"endTime":601.8560000229627,"transferSize":474,"resourceSize":2858,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-8.userapi.com/c855628/v855628669/1c5a88/CIHnjSh5-W4.jpg?ava=1","startTime":572.5889999885112,"endTime":775.5640000104904,"transferSize":471,"resourceSize":2606,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-7.userapi.com/c853520/v853520693/1db838/mbSQ0yNkVV0.jpg?ava=1","startTime":603.5199998877943,"endTime":816.5969999972731,"transferSize":471,"resourceSize":2970,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-7.userapi.com/c850120/v850120318/1d6b4a/hYjL_nqcLPo.jpg?ava=1","startTime":784.9019998684525,"endTime":885.4709998704493,"transferSize":2169,"resourceSize":3396,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-49.userapi.com/c853420/v853420087/bce89/L2DzIzrLDfs.jpg?ava=1","startTime":834.4560000114143,"endTime":983.3199998829514,"transferSize":496,"resourceSize":3594,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-7.userapi.com/c858028/v858028442/1785ae/MoBogR13-m8.jpg?ava=1","startTime":887.7550000324845,"endTime":941.2909999955446,"transferSize":471,"resourceSize":4164,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09f9885.png","startTime":3315.93000004068,"endTime":3356.053999857977,"transferSize":878,"resourceSize":1252,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun9-52.userapi.com/c856036/v856036592/136943/X64gVHguhfU.jpg?ava=1","startTime":984.8489998839796,"endTime":1079.2119998950511,"transferSize":496,"resourceSize":3756,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-24.userapi.com/c855032/v855032300/19df59/CXHrirphawQ.jpg?ava=1","startTime":1081.5769999753684,"endTime":1172.2420000005513,"transferSize":496,"resourceSize":3346,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-9.userapi.com/c858136/v858136420/a64a3/0QQ_iT2en24.jpg?ava=1","startTime":1173.6379999201745,"endTime":1327.3869999684393,"transferSize":474,"resourceSize":3784,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-35.userapi.com/c854120/v854120178/15d339/tgUCwCGzxqk.jpg?ava=1","startTime":1328.8350000511855,"endTime":1442.0709998812526,"transferSize":496,"resourceSize":2292,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-59.userapi.com/c858236/v858236881/16cb00/mD0xGlYFVVA.jpg?ava=1","startTime":1443.4309999924153,"endTime":1530.9210000559688,"transferSize":474,"resourceSize":4134,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-7.userapi.com/oCKp0G0lzp7OBk-crMZVK6IAohihwd0CmZlxNg/nxqYBlj27Dw.jpg?ava=1","startTime":1532.7540000434965,"endTime":1542.0869998633862,"transferSize":354,"resourceSize":3718,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-47.userapi.com/c855120/v855120885/1f42be/hk8HK6FNmXM.jpg?ava=1","startTime":1543.468999909237,"endTime":1631.749999942258,"transferSize":496,"resourceSize":3766,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-66.userapi.com/c857232/v857232030/263c7/j-SvMu89V5M.jpg?ava=1","startTime":1633.0379999708384,"endTime":1769.3389998748899,"transferSize":474,"resourceSize":4224,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-66.userapi.com/c624624/v624624883/16f20/vfX1bBMxu64.jpg?ava=1","startTime":1770.5899998545647,"endTime":1809.4989999663085,"transferSize":496,"resourceSize":2532,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-44.userapi.com/c853420/v853420279/18d0cb/mQNO2wfT12E.jpg?ava=1","startTime":1810.9599999152124,"endTime":1924.4279998820275,"transferSize":495,"resourceSize":1298,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-66.userapi.com/c834204/v834204749/1442de/RRVMMZ0Dcq0.jpg?ava=1","startTime":1925.8230000268668,"endTime":1965.8919998910278,"transferSize":500,"resourceSize":3330,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-9.userapi.com/c844521/v844521737/1e282f/IcccFwzSTAU.jpg?ava=1","startTime":1967.325999867171,"endTime":1999.0159999579191,"transferSize":471,"resourceSize":3518,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-8.userapi.com/c837624/v837624306/48ae0/3jDNrPo-558.jpg?ava=1","startTime":2000.749999890104,"endTime":2010.1530000101775,"transferSize":471,"resourceSize":4392,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-71.userapi.com/c200624/v200624590/40a20/sB_gmTqJ8EE.jpg?ava=1","startTime":2011.602999875322,"endTime":2087.541999993846,"transferSize":496,"resourceSize":3068,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-39.userapi.com/c841335/v841335361/577bb/nnF8XRJg9k0.jpg?ava=1","startTime":2088.9709999319166,"endTime":2194.184999912977,"transferSize":496,"resourceSize":4652,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-9.userapi.com/c854120/v854120569/18fdb8/DM8hpiEBPi8.jpg?ava=1","startTime":2200.797999976203,"endTime":2210.6759999878705,"transferSize":471,"resourceSize":3490,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-44.userapi.com/c625127/v625127835/56028/gnijwdSeFqY.jpg?ava=1","startTime":2211.9970000348985,"endTime":2263.6929999571294,"transferSize":496,"resourceSize":3906,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-31.userapi.com/c858324/v858324846/f27ab/zpp6Z031k5c.jpg?ava=1","startTime":2265.5939999967813,"endTime":2354.2279999237508,"transferSize":496,"resourceSize":3616,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-15.userapi.com/c854528/v854528428/1f0044/z3GtWAg6Ah8.jpg?ava=1","startTime":2355.659999884665,"endTime":2448.2759998645633,"transferSize":496,"resourceSize":3944,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-7.userapi.com/c855416/v855416314/1d67c0/JdH7BFmkR2U.jpg?ava=1","startTime":2450.080999871716,"endTime":2552.2300000302494,"transferSize":496,"resourceSize":2964,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/emoji/e/e29da4.png","startTime":3316.1519998684525,"endTime":3372.122999979183,"transferSize":822,"resourceSize":1140,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun7-6.userapi.com/c855420/v855420738/14d608/kGwlZ4eV4rA.jpg?ava=1","startTime":3390.6260000076145,"endTime":3421.669000061229,"transferSize":471,"resourceSize":2272,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-51.userapi.com/c853628/v853628099/1c83df/dqv0XuMPChU.jpg?ava=1","startTime":3391.641000052914,"endTime":3527.3499998729676,"transferSize":496,"resourceSize":2950,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-6.userapi.com/c854124/v854124084/bbe33/wYhL9iqTAFY.jpg?ava=1","startTime":3392.257999861613,"endTime":3434.948999900371,"transferSize":471,"resourceSize":4068,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-16.userapi.com/c849024/v849024053/67755/HtxJS3azsOY.jpg?ava=1","startTime":3392.8689998574555,"endTime":3511.8259999435395,"transferSize":474,"resourceSize":4210,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-9.userapi.com/c206820/v206820105/1ed2d/fixZFPKUOdE.jpg?ava=1","startTime":3393.479999853298,"endTime":3432.158000068739,"transferSize":471,"resourceSize":3058,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-36.userapi.com/c857420/v857420223/b22d3/P9v6lcoy09Q.jpg?ava=1","startTime":3393.6830000020564,"endTime":3529.147000052035,"transferSize":474,"resourceSize":3046,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-70.userapi.com/c857520/v857520754/178715/TswiTBPEPhg.jpg?ava=1","startTime":3393.845999846235,"endTime":3524.771000025794,"transferSize":496,"resourceSize":3190,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-7.userapi.com/c851124/v851124435/6130b/atw5GNJO-lQ.jpg?ava=1","startTime":3394.0540000330657,"endTime":3431.2619999982417,"transferSize":471,"resourceSize":3314,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-26.userapi.com/c857436/v857436512/131825/r1xOdyA9JiM.jpg?ava=1","startTime":3394.3099998869,"endTime":3495.3519999980927,"transferSize":496,"resourceSize":3596,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-5.userapi.com/c845324/v845324675/ef3e5/kg458vI5WpI.jpg?ava=1","startTime":3394.6380000561476,"endTime":3514.8340000305325,"transferSize":496,"resourceSize":4402,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-33.userapi.com/c853528/v853528919/1d99ce/1jjGDu6O9E4.jpg?ava=1","startTime":3421.9430000521243,"endTime":3541.0519998986274,"transferSize":496,"resourceSize":2996,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-7.userapi.com/c856032/v856032498/1d1aa7/fz-Gf-AjRyQ.jpg?ava=1","startTime":3431.8180000409484,"endTime":3441.7359998915344,"transferSize":471,"resourceSize":3156,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-29.userapi.com/c836427/v836427943/2ea31/1Ea0KbS2gI8.jpg?ava=1","startTime":3432.5769999995828,"endTime":3522.6869999896735,"transferSize":496,"resourceSize":3288,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09f98ad.png","startTime":3435.207000002265,"endTime":3465.572000015527,"transferSize":909,"resourceSize":1314,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun9-49.userapi.com/c847017/v847017333/2117f1/AZfOmNH2GIg.jpg?ava=1","startTime":3442.031000042334,"endTime":5211.540000047535,"transferSize":474,"resourceSize":4750,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-6.userapi.com/c854320/v854320474/1e8676/4CkqqrRs34E.jpg?ava=1","startTime":3465.7729999162257,"endTime":3475.05999985151,"transferSize":471,"resourceSize":4188,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/sticker/1-6129-128","startTime":3475.4810000304133,"endTime":3506.8520000204444,"transferSize":5456,"resourceSize":10230,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun9-50.userapi.com/c854228/v854228269/e7c58/OizHMqBo_rA.jpg?ava=1","startTime":3495.638999855146,"endTime":3590.834999922663,"transferSize":496,"resourceSize":3530,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09f988e.png","startTime":3507.056999951601,"endTime":3577.1769999992102,"transferSize":814,"resourceSize":1124,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun9-36.userapi.com/c840327/v840327627/35ebf/i8Ai-ONyPKk.jpg?ava=1","startTime":3512.123999884352,"endTime":3560.4139999486506,"transferSize":496,"resourceSize":3194,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-64.userapi.com/c851416/v851416039/1b254b/TEOUR63c304.jpg?ava=1","startTime":3515.20699984394,"endTime":3728.9149998687208,"transferSize":496,"resourceSize":4042,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-72.userapi.com/c851416/v851416569/1ae33b/Qp-ZijCE8G0.jpg?ava=1","startTime":3523.0069998651743,"endTime":3730.7819998823106,"transferSize":496,"resourceSize":2978,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-7.userapi.com/c855032/v855032745/ca9fe/PeaJGda-aGw.jpg?ava=1","startTime":3525.0709999818355,"endTime":3534.5729999244213,"transferSize":471,"resourceSize":4020,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/js/cmodules/sw/sw.js","startTime":3484.8759998567402,"endTime":3567.7370000630617,"transferSize":0,"resourceSize":57317,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Other"},{"url":"https://vk.com/images/backlink.gif?4","startTime":3527.7199998963624,"endTime":3577.462999848649,"transferSize":412,"resourceSize":322,"statusCode":200,"mimeType":"image/gif","resourceType":"Image"},{"url":"https://vk.com/images/svg_icons/ic_head_logo.svg","startTime":3529.4119999744,"endTime":3578.429999994114,"transferSize":1015,"resourceSize":2772,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/images/svg_icons/ic_head_loupe.svg","startTime":3534.9399999249727,"endTime":3578.6069999448955,"transferSize":597,"resourceSize":1232,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/images/svg_icons/ic_head_notify.svg","startTime":3541.3589999079704,"endTime":3578.749999869615,"transferSize":580,"resourceSize":938,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width","startTime":3487.186999991536,"endTime":3487.2369999065995,"transferSize":0,"resourceSize":412,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20width%3D%2218%22%20height%3D%221071%22%20xmlns%3D%22http%3","startTime":3490.1709998957813,"endTime":3490.6450000125915,"transferSize":0,"resourceSize":40134,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/images/icons/common.png?6","startTime":3560.6990000233054,"endTime":3592.5950000528246,"transferSize":2143,"resourceSize":3780,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/images/icons/menu_arrow.png","startTime":3577.979000052437,"endTime":3609.2890000436455,"transferSize":386,"resourceSize":268,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2214%22%20viewBox%3D%220%200%2014%2014%22%20widt","startTime":3501.6939998604357,"endTime":3501.7419999931008,"transferSize":0,"resourceSize":296,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/images/icons/camera.png","startTime":3578.1890000216663,"endTime":3661.2859999295324,"transferSize":752,"resourceSize":1000,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/images/cross.png","startTime":3578.8999998476356,"endTime":3729.361000005156,"transferSize":410,"resourceSize":316,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/images/search_icon.png","startTime":3579.070999985561,"endTime":3731.249999953434,"transferSize":517,"resourceSize":530,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2215%22%20viewBox%3D%220%200%2014%2015%22%20widt","startTime":3505.8130000252277,"endTime":3505.8839998673648,"transferSize":0,"resourceSize":668,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2212%22%20viewBox%3D%220%200%2012%2012%22%20widt","startTime":3510.020999936387,"endTime":3510.0819999352098,"transferSize":0,"resourceSize":632,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/images/icons/im_actions.png?7","startTime":3579.2030000593513,"endTime":3731.692000059411,"transferSize":4069,"resourceSize":7632,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/images/icons/mute_icons.png","startTime":3592.7839998621494,"endTime":3732.3519999627024,"transferSize":567,"resourceSize":630,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2212%22%20viewBox%3D%220%200%2012%2012%22%20widt","startTime":3517.1940000727773,"endTime":3517.308000009507,"transferSize":0,"resourceSize":638,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width","startTime":3519.4949998985976,"endTime":3519.544000038877,"transferSize":0,"resourceSize":430,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D%220%200%2012%2012%22%20xmlns%3D%22http%3A%2F%2F","startTime":3523.4890000429004,"endTime":3523.545000003651,"transferSize":0,"resourceSize":402,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/images/icons/msg_cog.png","startTime":3609.5099998638034,"endTime":3900.4490000661463,"transferSize":596,"resourceSize":688,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/images/icons/empty_icon.png","startTime":3661.6759998723865,"endTime":3902.034000027925,"transferSize":686,"resourceSize":868,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20widt","startTime":3540.0960000697523,"endTime":3540.1520000305027,"transferSize":0,"resourceSize":638,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width","startTime":3542.4369999673218,"endTime":3542.714999988675,"transferSize":0,"resourceSize":522,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2213%22%20viewBox%3D%220%200%2011%2013%22%20widt","startTime":3544.939999934286,"endTime":3544.9909998569638,"transferSize":0,"resourceSize":638,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20version%3D%221.0%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2","startTime":3548.473000060767,"endTime":3548.525999998674,"transferSize":0,"resourceSize":514,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%227%22%20viewBox%3D%220%200%2014%207%22%20width%","startTime":3553.8759999908507,"endTime":3553.940000012517,"transferSize":0,"resourceSize":544,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20widt","startTime":3555.180999916047,"endTime":3555.231000063941,"transferSize":0,"resourceSize":634,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20widt","startTime":3556.4719999674708,"endTime":3556.5269999206066,"transferSize":0,"resourceSize":1000,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width","startTime":3557.628999929875,"endTime":3557.683999883011,"transferSize":0,"resourceSize":1176,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20widt","startTime":3558.820999925956,"endTime":3558.8809999171644,"transferSize":0,"resourceSize":1006,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20widt","startTime":3560.886000050232,"endTime":3561.0789998900145,"transferSize":0,"resourceSize":702,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/images/upload.gif","startTime":3732.564999954775,"endTime":3902.180999983102,"transferSize":482,"resourceSize":460,"statusCode":200,"mimeType":"image/gif","resourceType":"Image"},{"url":"https://vk.com/fonts/NotoSansBengali-Regular.woff","startTime":4266.5839998517185,"endTime":5387.607999844477,"transferSize":55058,"resourceSize":109480,"statusCode":200,"mimeType":"application/octet-stream","resourceType":"Font"},{"url":"https://vk.com/js/cmodules/web/ads_light.3db037bff657a6ba09d9.js?0ec0e6eca5e172fbcc0138cbccd59eb0","startTime":3752.6559999678284,"endTime":3933.364999946207,"transferSize":11782,"resourceSize":83670,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/images/svg_icons/ic_head_audio.svg","startTime":3760.7289999723434,"endTime":3934.3779999762774,"transferSize":770,"resourceSize":1782,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2210%22%20viewBox%3D%220%200%207%2010%22%20width","startTime":3762.5469998456538,"endTime":3762.640999862924,"transferSize":0,"resourceSize":472,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://im.vk.com/nim237381815?act=a_check&key=fb3d54fed218f3baf5e55e99972f5886e114b689&mode=202&ts=1686492671&version=9&wait=25","startTime":3785.029999911785,"endTime":7981.69400007464,"transferSize":240,"resourceSize":142,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://pu7-6.vk-cdn.net/c856416/upload.php","startTime":3943.849999923259,"endTime":5436.139999888837,"transferSize":632,"resourceSize":0,"statusCode":302,"mimeType":"text/html"},{"url":"https://pu7-6.vk-cdn.net/c206516/upload.php","startTime":3965.758000034839,"endTime":5437.305999919772,"transferSize":632,"resourceSize":0,"statusCode":302,"mimeType":"text/html"},{"url":"https://vk.com/js/lib/ui_controls.js?606078431","startTime":3978.7299998570234,"endTime":5603.952999925241,"transferSize":46084,"resourceSize":282714,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/js/al/datepicker.js?3747769347","startTime":3979.78900000453,"endTime":5616.623000008985,"transferSize":6968,"resourceSize":56262,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://vk.com/css/al/datepicker.css?26232710886","startTime":3983.4239999763668,"endTime":5283.592999912798,"transferSize":1590,"resourceSize":8708,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/js/cmodules/web/voice_message_player.a1676acc90ba0bbe67a9.js?f11007871be076612f480a0d599d6fff","startTime":3991.728999884799,"endTime":5617.016999982297,"transferSize":7805,"resourceSize":49926,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20widt","startTime":4002.347999950871,"endTime":4002.436999930069,"transferSize":0,"resourceSize":1782,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/images/post_icon.png?10","startTime":4003.2619999255985,"endTime":5429.79700001888,"transferSize":2711,"resourceSize":4914,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://top-fwz1.mail.ru/js/code.js","startTime":4008.4480000659823,"endTime":4008.733999915421,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"Script"},{"url":"https://vk.com/al_im.php","startTime":4016.9430000241846,"endTime":4483.983000041917,"transferSize":53114,"resourceSize":294730,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://vk.com/css/al/wide_dd.css?21191712835","startTime":4018.6240000184625,"endTime":5283.791000023484,"transferSize":1890,"resourceSize":9452,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://vk.com/js/al/wide_dd.js?3516210135","startTime":5432.695999974385,"endTime":5637.558999937028,"transferSize":6013,"resourceSize":45030,"statusCode":200,"mimeType":"application/x-javascript","resourceType":"Script"},{"url":"https://r3.mail.ru/k?sign=ef3eeae7cbf00876fc68460cc8bd0301e4bba9b2&vk_id=237381815&src=desktop","startTime":4020.4159999266267,"endTime":4020.790999988094,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"Image"},{"url":"https://vk.com/notifier.php?act=storage_frame&from=vk.com&4","startTime":4153.9519999641925,"endTime":5617.204000009224,"transferSize":1194,"resourceSize":4030,"statusCode":200,"mimeType":"text/html","resourceType":"Document"},{"url":"https://vk.com/al_im.php","startTime":4156.336999963969,"endTime":4210.000999970362,"transferSize":473,"resourceSize":360,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://vk.com/images/blank.mp4","startTime":5434.605000074953,"endTime":5637.916999869049,"transferSize":1768,"resourceSize":3014,"statusCode":206,"mimeType":"video/mp4","resourceType":"Media"},{"url":"https://vk.com/mp3/bb1.mp3?1","startTime":5434.797999914736,"endTime":6354.035999858752,"transferSize":125605,"resourceSize":207104,"statusCode":206,"mimeType":"audio/mpeg","resourceType":"Media"},{"url":"https://vk.com/mp3/bb2.mp3?1","startTime":5605.720999883488,"endTime":6984.1559999622405,"transferSize":106445,"resourceSize":186206,"statusCode":206,"mimeType":"audio/mpeg","resourceType":"Media"},{"url":"https://vk.com/mp3/bb3.mp3?1","startTime":5617.349999956787,"endTime":6992.147000040859,"transferSize":73235,"resourceSize":122042,"statusCode":206,"mimeType":"audio/mpeg","resourceType":"Media"},{"url":"https://www.tns-counter.ru/V13a**clid:11**vk_com/ru/UTF-8/tmsec=vksite_total/193657229","startTime":4342.390999896452,"endTime":4343.19099993445,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"Image"},{"url":"https://vk.com/images/icons/im_actions.png?7","startTime":4470.137999858707,"endTime":5212.3389998450875,"transferSize":0,"resourceSize":7632,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2212%22%20viewBox%3D%220%200%2012%2012%22%20widt","startTime":4465.338999871165,"endTime":4465.409999946132,"transferSize":0,"resourceSize":710,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2210%22%20viewBox%3D%220%200%2010%2010%22%20widt","startTime":4467.445999849588,"endTime":4467.60299988091,"transferSize":0,"resourceSize":636,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/al_im.php","startTime":4474.628000054508,"endTime":4827.844999963418,"transferSize":39334,"resourceSize":420702,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://sun9-67.userapi.com/c854524/v854524029/19ae0f/L6ylOWFCFf4.jpg?ava=1","startTime":4486.084999982268,"endTime":5212.775999912992,"transferSize":0,"resourceSize":4100,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width","startTime":4494.792999932542,"endTime":4494.868000037968,"transferSize":0,"resourceSize":442,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20widt","startTime":4500.503999879584,"endTime":4500.593999866396,"transferSize":0,"resourceSize":1072,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width","startTime":4502.129999920726,"endTime":4502.203000010923,"transferSize":0,"resourceSize":550,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://vk.com/images/icons/msg_check.png","startTime":5617.663000011817,"endTime":6992.337999865413,"transferSize":1017,"resourceSize":756,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/al_im.php","startTime":4516.548000043258,"endTime":4698.629999998957,"transferSize":48068,"resourceSize":610136,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://vk.com/al_im.php","startTime":4518.114999867976,"endTime":4827.638000017032,"transferSize":57357,"resourceSize":523268,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://ad.mail.ru/adq/?callback=__rb1581258964219&q%5B%5D=45891%3Fn%3Dads_left&test_id=0&cpm_floor=94&vk_id=237381815&count=1&sign=ef3eeae7cbf00876fc68460cc8bd0301e4bba9b2","startTime":4601.658999919891,"endTime":4602.582999970764,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"Script"},{"url":"https://sun9-18.userapi.com/c204620/v204620611/511bc/m8LcZ6vb8fc.jpg","startTime":4863.6049998458475,"endTime":5435.0320000667125,"transferSize":237664,"resourceSize":237188,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-27.userapi.com/c855336/v855336529/1e3227/7Yb-CnVEP0Q.jpg","startTime":4865.86600006558,"endTime":5603.778999997303,"transferSize":191901,"resourceSize":191426,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-38.userapi.com/c855636/v855636344/1eaaab/EF4Q_bMuIUE.jpg","startTime":4867.728000041097,"endTime":5979.118000017479,"transferSize":47814,"resourceSize":63248,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-61.userapi.com/c205824/v205824344/538d4/yDSsCJ39NDs.jpg","startTime":4868.17799997516,"endTime":5432.219000067562,"transferSize":30987,"resourceSize":61024,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/images/svg_icons/votings/voting.svg","startTime":5638.121000025421,"endTime":6992.593999952078,"transferSize":1510,"resourceSize":3474,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://sun9-20.userapi.com/c844321/v844321049/f639f/_jNkBXi09dg.jpg","startTime":4873.851999873295,"endTime":5430.819999892265,"transferSize":6811,"resourceSize":12622,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width","startTime":4875.249000033364,"endTime":4875.316999852657,"transferSize":0,"resourceSize":626,"statusCode":200,"mimeType":"image/svg+xml","resourceType":"Image"},{"url":"https://sun9-17.userapi.com/c855736/v855736348/1eeb2b/l-afB72kyTk.jpg","startTime":4878.769000060856,"endTime":5432.891000062227,"transferSize":63914,"resourceSize":126878,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-58.userapi.com/c855124/v855124915/1e7f04/-xx0L71GN4Q.jpg","startTime":5212.602999992669,"endTime":5624.813999980688,"transferSize":40000,"resourceSize":79050,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-24.userapi.com/c857324/v857324915/c9d7b/NSavgUxjRnU.jpg","startTime":5213.837999850512,"endTime":5431.964999996126,"transferSize":6657,"resourceSize":12366,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-42.userapi.com/c856032/v856032915/1e32aa/1ftU6bnAtjg.jpg","startTime":5214.320000028238,"endTime":5625.301999971271,"transferSize":6699,"resourceSize":12450,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-2.userapi.com/c858436/v858436915/15c726/1J6EJVRMu9Y.jpg","startTime":5435.289999935776,"endTime":5702.719999942929,"transferSize":6062,"resourceSize":11176,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-41.userapi.com/c855124/v855124915/1e7efd/9fdl3a_Z6LY.jpg","startTime":5626.665999880061,"endTime":5753.343999851495,"transferSize":6635,"resourceSize":12322,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-57.userapi.com/c856036/v856036116/1e9e4e/1PzSMW0jITg.jpg","startTime":5626.992000034079,"endTime":5991.722000064328,"transferSize":19683,"resourceSize":38416,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-46.userapi.com/c854328/v854328116/1ddf1f/qyufo5cGav4.jpg","startTime":5638.318999903277,"endTime":5991.396999917924,"transferSize":37739,"resourceSize":37264,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-6.userapi.com/c204824/v204824271/53f80/zTmKpgzR8x0.jpg","startTime":5702.858000062406,"endTime":5991.905000060797,"transferSize":22102,"resourceSize":43254,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-67.userapi.com/c856132/v856132733/1e0f9b/wKaSosV-zco.jpg","startTime":5753.613000037149,"endTime":6146.631999872625,"transferSize":127722,"resourceSize":241458,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-69.userapi.com/c200616/v200616399/5535e/U-kHbLyQf5M.jpg","startTime":5979.509999975562,"endTime":6166.9729999266565,"transferSize":23610,"resourceSize":39044,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-64.userapi.com/c854520/v854520064/1eea2a/DHa38s_SaTU.jpg","startTime":5992.024000035599,"endTime":6066.725000040606,"transferSize":45305,"resourceSize":44808,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-41.userapi.com/c204524/v204524565/56f79/Dmb2f516y34.jpg","startTime":5992.177000036463,"endTime":6158.203999977559,"transferSize":90448,"resourceSize":154990,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-11.userapi.com/c850416/v850416038/1b7e79/_vH4VlVwdcM.jpg","startTime":5992.3179999459535,"endTime":6215.301000047475,"transferSize":111152,"resourceSize":192122,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-15.userapi.com/c857128/v857128038/ce973/_2e-SQRf2k4.jpg","startTime":6067.066000076011,"endTime":6292.228000005707,"transferSize":106886,"resourceSize":187856,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-60.userapi.com/c858232/v858232408/171797/P8mZ7gdGEys.jpg","startTime":6147.1539998892695,"endTime":6420.943999895826,"transferSize":104702,"resourceSize":136520,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-44.userapi.com/c857128/v857128967/d3e2d/Ho6_aKfuWJQ.jpg","startTime":6158.38099992834,"endTime":6269.827999873087,"transferSize":73622,"resourceSize":138208,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-56.userapi.com/c857128/v857128967/d3e2c/n9ILxKoPjLY.jpg","startTime":6167.141000041738,"endTime":6286.760000046343,"transferSize":6733,"resourceSize":12518,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-13.userapi.com/c856020/v856020934/1f4114/pqyNcAskIvQ.jpg","startTime":6215.518000070006,"endTime":6353.396999882534,"transferSize":25383,"resourceSize":24908,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/images/icons/bookmarks_outline_24.png","startTime":6715.113000012934,"endTime":7008.715000003576,"transferSize":994,"resourceSize":1484,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun9-44.userapi.com/c853420/v853420279/18d0cb/mQNO2wfT12E.jpg?ava=1","startTime":5136.509999865666,"endTime":5212.925999891013,"transferSize":0,"resourceSize":1298,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-50.userapi.com/c854228/v854228269/e7c58/OizHMqBo_rA.jpg?ava=1","startTime":5136.820999905467,"endTime":5213.182999985293,"transferSize":0,"resourceSize":3530,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-9.userapi.com/c857520/v857520696/7cc73/SoEiSJvPda8.jpg?ava=1","startTime":6269.9919999577105,"endTime":6276.679999893531,"transferSize":0,"resourceSize":3342,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-42.userapi.com/c853620/v853620484/1a69d9/f5fOW5aBmeY.jpg?ava=1","startTime":6276.922999881208,"endTime":6318.267999915406,"transferSize":496,"resourceSize":3410,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-9.userapi.com/c844521/v844521737/1e282f/IcccFwzSTAU.jpg?ava=1","startTime":6286.928999936208,"endTime":6288.028999930248,"transferSize":0,"resourceSize":3518,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-64.userapi.com/c851416/v851416039/1b254b/TEOUR63c304.jpg?ava=1","startTime":6288.242999929935,"endTime":6289.140000008047,"transferSize":0,"resourceSize":4042,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09fa4a0.png","startTime":6984.33699994348,"endTime":7057.621999876574,"transferSize":981,"resourceSize":1456,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun9-39.userapi.com/c841335/v841335361/577bb/nnF8XRJg9k0.jpg?ava=1","startTime":6289.356000022963,"endTime":6290.813999949023,"transferSize":0,"resourceSize":4652,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-47.userapi.com/c855120/v855120885/1f42be/hk8HK6FNmXM.jpg?ava=1","startTime":6291.046999860555,"endTime":6291.901999851689,"transferSize":0,"resourceSize":3766,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-59.userapi.com/c858320/v858320211/15058f/9tAcqn6gkaw.jpg?ava=1","startTime":6292.35600004904,"endTime":6376.9890000112355,"transferSize":496,"resourceSize":3616,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-5.userapi.com/c845324/v845324675/ef3e5/kg458vI5WpI.jpg?ava=1","startTime":6292.558999964967,"endTime":6317.441999912262,"transferSize":0,"resourceSize":4402,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-9.userapi.com/c858128/v858128490/4bbd6/6jI7sgfv17A.jpg?ava=1","startTime":6317.683999892324,"endTime":6377.16899998486,"transferSize":471,"resourceSize":4084,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09f989c.png","startTime":6992.863999912515,"endTime":7058.199999853969,"transferSize":847,"resourceSize":1190,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/sticker/1-16371-128","startTime":6993.039999855682,"endTime":7059.246999910101,"transferSize":6349,"resourceSize":12016,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun7-6.userapi.com/c854320/v854320474/1e8676/4CkqqrRs34E.jpg?ava=1","startTime":6318.68699984625,"endTime":6376.727999886498,"transferSize":0,"resourceSize":4188,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/sticker/1-12832-128","startTime":6993.291999911889,"endTime":7156.25900006853,"transferSize":11447,"resourceSize":22192,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun9-29.userapi.com/c836427/v836427943/2ea31/1Ea0KbS2gI8.jpg?ava=1","startTime":6353.62399998121,"endTime":6419.873999897391,"transferSize":0,"resourceSize":3288,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-6.userapi.com/c854124/v854124084/bbe33/wYhL9iqTAFY.jpg?ava=1","startTime":6354.480999987572,"endTime":6420.116999885067,"transferSize":0,"resourceSize":4068,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun9-27.userapi.com/c857632/v857632618/16ca40/W4Vj4HeCDJU.jpg?ava=1","startTime":6377.45500006713,"endTime":6455.532999942079,"transferSize":496,"resourceSize":4510,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://sun7-9.userapi.com/c854420/v854420418/1c2a8a/YeTePnhBnIg.jpg?ava=1","startTime":6377.654999960214,"endTime":6435.168999945745,"transferSize":471,"resourceSize":3204,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09f9884.png","startTime":7009.018999990076,"endTime":7157.1690000128,"transferSize":836,"resourceSize":1168,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun9-36.userapi.com/c840327/v840327627/35ebf/i8Ai-ONyPKk.jpg?ava=1","startTime":6377.814000006765,"endTime":6422.381999902427,"transferSize":0,"resourceSize":3194,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09f918d.png","startTime":7055.178999900818,"endTime":7157.322000013664,"transferSize":814,"resourceSize":1124,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09f98a1.png","startTime":7057.810999918729,"endTime":7157.4349999427795,"transferSize":887,"resourceSize":1270,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09fa496.png","startTime":7058.3879998885095,"endTime":7169.7529999073595,"transferSize":781,"resourceSize":1058,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun9-62.userapi.com/c622019/v622019972/44fec/hXTJu_BK1A8.jpg?ava=1","startTime":6420.536000048742,"endTime":6529.132999945432,"transferSize":496,"resourceSize":3936,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09f988e.png","startTime":7059.465999947861,"endTime":7064.784999936819,"transferSize":0,"resourceSize":1124,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://vk.com/emoji/e/f09f9186f09f8fbb.png","startTime":7065.117999911308,"endTime":7170.200000051409,"transferSize":613,"resourceSize":722,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://sun7-7.userapi.com/c855032/v855032745/ca9fe/PeaJGda-aGw.jpg?ava=1","startTime":6420.755999861285,"endTime":6431.995999999344,"transferSize":0,"resourceSize":4020,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"},{"url":"https://pu7-6.vk-cdn.net/c856416/upload.php","startTime":3943.849999923259,"endTime":5436.139999888837,"transferSize":632,"resourceSize":0,"statusCode":302,"mimeType":"text/html"},{"url":"https://ps.vk.com/c856416/upload.php?act=wrap_response&resp_key=xvx4f7jzxn67nfuqvoh3pokd&ondone=Upload.callbacks.oncheck0","startTime":5436.8809999432415,"endTime":5712.187999859452,"transferSize":414,"resourceSize":456,"statusCode":200,"mimeType":"text/html","resourceType":"Document"},{"url":"https://pu7-6.vk-cdn.net/c206516/upload.php","startTime":3965.758000034839,"endTime":5437.305999919772,"transferSize":632,"resourceSize":0,"statusCode":302,"mimeType":"text/html"},{"url":"https://ps.vk.com/c206516/upload.php?act=wrap_response&resp_key=2e2l6bpuxre3li3ytsgoayvi&ondone=Upload.callbacks.oncheck2","startTime":5438.1599999032915,"endTime":5718.696000054479,"transferSize":413,"resourceSize":456,"statusCode":200,"mimeType":"text/html","resourceType":"Document"},{"url":"https://vk.com/upload_fails.php","startTime":5848.598999902606,"endTime":6714.278999948874,"transferSize":295,"resourceSize":138,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://vk.com/upload_fails.php","startTime":5867.8009998984635,"endTime":6714.49499996379,"transferSize":295,"resourceSize":138,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://queuev4.vk.com/q_frame.php?7","startTime":6326.757000060752,"endTime":6433.241999940947,"transferSize":1945,"resourceSize":8468,"statusCode":200,"mimeType":"text/html","resourceType":"Document"},{"url":"https://vk.com/al_im.php","startTime":6631.517000030726,"endTime":7054.65399986133,"transferSize":12918,"resourceSize":80408,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://vk.com/al_im.php","startTime":7066.119999857619,"endTime":7924.041999969631,"transferSize":82396,"resourceSize":658708,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://vk.com/images/icons/chats.png?14","startTime":7116.93700007163,"endTime":7260.7259999495,"transferSize":1773,"resourceSize":3040,"statusCode":200,"mimeType":"image/png","resourceType":"Image"},{"url":"https://queuev4.vk.com/im815","startTime":7332.017000066116,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"XHR"},{"url":"https://im.vk.com/nim237381815?act=a_check&key=fb3d54fed218f3baf5e55e99972f5886e114b689&mode=202&ts=1686492672&version=9&wait=25","startTime":7987.598999869078,"transferSize":0,"resourceSize":0,"statusCode":-1,"mimeType":"","resourceType":"XHR"},{"url":"https://vk.com/ads_rotate.php?act=al_update_ad","startTime":9905.343999853358,"endTime":9987.14999994263,"transferSize":2842,"resourceSize":16978,"statusCode":200,"mimeType":"application/json","resourceType":"XHR"},{"url":"https://vk.com/css/al/aes_light.css?35634885009","startTime":9991.768999956548,"endTime":10032.379999989644,"transferSize":7101,"resourceSize":77434,"statusCode":200,"mimeType":"text/css","resourceType":"Stylesheet"},{"url":"https://sun9-67.userapi.com/c200824/v200824846/6000c/wt6521_aqmM.jpg","startTime":10050.054999999702,"endTime":10135.29899995774,"transferSize":35037,"resourceSize":34540,"statusCode":200,"mimeType":"image/jpeg","resourceType":"Image"}]}},"network-rtt":{"id":"network-rtt","title":"Network Round Trip Times","description":"Network round trip times (RTT) have a large impact on performance. If the RTT to an origin is high, it's an indication that servers closer to the user could improve performance. [Learn more](https://hpbn.co/primer-on-latency-and-bandwidth/).","score":null,"scoreDisplayMode":"informative","numericValue":42.01899999999999,"displayValue":"40 ms","details":{"type":"table","headings":[{"key":"origin","itemType":"text","text":"URL"},{"key":"rtt","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"origin":"https://sun9-60.userapi.com","rtt":42.01899999999999},{"origin":"https://sun9-33.userapi.com","rtt":38.355999999999995},{"origin":"https://sun9-20.userapi.com","rtt":38.25400000000002},{"origin":"https://sun9-66.userapi.com","rtt":37.818999999999996},{"origin":"https://sun9-62.userapi.com","rtt":36.254000000000005},{"origin":"https://sun9-27.userapi.com","rtt":34.73000000000002},{"origin":"https://sun9-11.userapi.com","rtt":33.608000000000004},{"origin":"https://sun9-6.userapi.com","rtt":33.32299999999999},{"origin":"https://sun9-51.userapi.com","rtt":33.21600000000001},{"origin":"https://sun9-42.userapi.com","rtt":32.97},{"origin":"https://sun9-7.userapi.com","rtt":32.831},{"origin":"https://sun9-69.userapi.com","rtt":32.68600000000001},{"origin":"https://sun9-18.userapi.com","rtt":31.387999999999977},{"origin":"https://sun9-58.userapi.com","rtt":31.233999999999995},{"origin":"https://sun9-61.userapi.com","rtt":31.123999999999967},{"origin":"https://sun9-56.userapi.com","rtt":30.964000000000006},{"origin":"https://sun9-39.userapi.com","rtt":30.612000000000002},{"origin":"https://sun9-41.userapi.com","rtt":30.046999999999997},{"origin":"https://sun9-15.userapi.com","rtt":29.561},{"origin":"https://sun9-35.userapi.com","rtt":29.39},{"origin":"https://sun9-29.userapi.com","rtt":29.179000000000002},{"origin":"https://sun9-16.userapi.com","rtt":29.142},{"origin":"https://sun9-24.userapi.com","rtt":28.993},{"origin":"https://sun9-5.userapi.com","rtt":28.703},{"origin":"https://sun9-47.userapi.com","rtt":28.625},{"origin":"https://sun9-31.userapi.com","rtt":28.608999999999998},{"origin":"https://sun9-44.userapi.com","rtt":28.505000000000003},{"origin":"https://sun9-72.userapi.com","rtt":28.354},{"origin":"https://sun9-36.userapi.com","rtt":28.310999999999996},{"origin":"https://sun9-46.userapi.com","rtt":28.118},{"origin":"https://sun9-13.userapi.com","rtt":27.499000000000002},{"origin":"https://sun9-57.userapi.com","rtt":26.083},{"origin":"https://sun9-17.userapi.com","rtt":25.937000000000012},{"origin":"https://sun9-38.userapi.com","rtt":25.260999999999967},{"origin":"https://sun9-2.userapi.com","rtt":24.909999999999997},{"origin":"https://sun9-64.userapi.com","rtt":24.895},{"origin":"https://sun9-71.userapi.com","rtt":24.381999999999998},{"origin":"https://sun9-59.userapi.com","rtt":24.154999999999998},{"origin":"https://sun9-9.userapi.com","rtt":24.131999999999998},{"origin":"https://sun9-26.userapi.com","rtt":24.035999999999998},{"origin":"https://sun9-70.userapi.com","rtt":23.969},{"origin":"https://sun9-52.userapi.com","rtt":23.95},{"origin":"https://sun9-49.userapi.com","rtt":23.852999999999994},{"origin":"https://sun9-50.userapi.com","rtt":23.502},{"origin":"https://pu7-6.vk-cdn.net","rtt":12.038999999999987},{"origin":"https://ps.vk.com","rtt":12.038999999999987},{"origin":"https://sun7-8.userapi.com","rtt":7.198999999999998},{"origin":"https://vk.com","rtt":6.861999999999998},{"origin":"https://sun7-9.userapi.com","rtt":6.861999999999998},{"origin":"https://sun9-67.userapi.com","rtt":6.861999999999998},{"origin":"https://sun7-6.userapi.com","rtt":6.861999999999998},{"origin":"https://sun7-7.userapi.com","rtt":6.861999999999998},{"origin":"https://im.vk.com","rtt":6.861999999999998},{"origin":"https://queuev4.vk.com","rtt":6.861999999999998}]}},"network-server-latency":{"id":"network-server-latency","title":"Server Backend Latencies","description":"Server latencies can impact web performance. If the server latency of an origin is high, it's an indication the server is overloaded or has poor backend performance. [Learn more](https://hpbn.co/primer-on-web-performance/#analyzing-the-resource-waterfall).","score":null,"scoreDisplayMode":"informative","numericValue":4073.526,"displayValue":"4,070 ms","details":{"type":"table","headings":[{"key":"origin","itemType":"text","text":"URL"},{"key":"serverResponseTime","itemType":"ms","granularity":1,"text":"Time Spent"}],"items":[{"origin":"https://im.vk.com","serverResponseTime":4073.526},{"origin":"https://vk.com","serverResponseTime":364.805},{"origin":"https://sun9-57.userapi.com","serverResponseTime":274.216},{"origin":"https://sun9-46.userapi.com","serverResponseTime":264.206},{"origin":"https://sun9-58.userapi.com","serverResponseTime":228.71400000000006},{"origin":"https://pu7-6.vk-cdn.net","serverResponseTime":189.74700000000007},{"origin":"https://sun9-6.userapi.com","serverResponseTime":164.37800000000004},{"origin":"https://sun9-38.userapi.com","serverResponseTime":141.69100000000003},{"origin":"https://sun9-17.userapi.com","serverResponseTime":138.78499999999997},{"origin":"https://sun9-18.userapi.com","serverResponseTime":126.11700000000002},{"origin":"https://sun9-72.userapi.com","serverResponseTime":116.46400000000001},{"origin":"https://sun9-61.userapi.com","serverResponseTime":91.25900000000007},{"origin":"https://sun9-9.userapi.com","serverResponseTime":77.46900000000002},{"origin":"https://sun9-67.userapi.com","serverResponseTime":71.748},{"origin":"https://queuev4.vk.com","serverResponseTime":69.98400000000001},{"origin":"https://sun9-20.userapi.com","serverResponseTime":64.51199999999994},{"origin":"https://sun9-11.userapi.com","serverResponseTime":60.50699999999998},{"origin":"https://ps.vk.com","serverResponseTime":50.92300000000003},{"origin":"https://sun9-64.userapi.com","serverResponseTime":39.19500000000001},{"origin":"https://sun9-60.userapi.com","serverResponseTime":33.058},{"origin":"https://sun9-2.userapi.com","serverResponseTime":28.458},{"origin":"https://sun9-41.userapi.com","serverResponseTime":22.923000000000002},{"origin":"https://sun9-56.userapi.com","serverResponseTime":16.167999999999985},{"origin":"https://sun9-36.userapi.com","serverResponseTime":15.014000000000006},{"origin":"https://sun9-59.userapi.com","serverResponseTime":12.930000000000003},{"origin":"https://sun9-13.userapi.com","serverResponseTime":12.335999999999999},{"origin":"https://sun9-69.userapi.com","serverResponseTime":6.853999999999999},{"origin":"https://sun9-42.userapi.com","serverResponseTime":5.767000000000003},{"origin":"https://sun7-6.userapi.com","serverResponseTime":5.226000000000003},{"origin":"https://sun9-70.userapi.com","serverResponseTime":2.800999999999995},{"origin":"https://sun9-16.userapi.com","serverResponseTime":2.7869999999999884},{"origin":"https://sun9-49.userapi.com","serverResponseTime":2.5259999999999962},{"origin":"https://sun7-9.userapi.com","serverResponseTime":1.7240000000000038},{"origin":"https://sun9-44.userapi.com","serverResponseTime":1.4860000000000007},{"origin":"https://sun9-15.userapi.com","serverResponseTime":1.4280000000000044},{"origin":"https://sun9-71.userapi.com","serverResponseTime":1.3780000000000001},{"origin":"https://sun7-7.userapi.com","serverResponseTime":1.3249999999999993},{"origin":"https://sun9-31.userapi.com","serverResponseTime":1.2639999999999993},{"origin":"https://sun9-27.userapi.com","serverResponseTime":1.258999999999979},{"origin":"https://sun7-8.userapi.com","serverResponseTime":1.216000000000001},{"origin":"https://sun9-52.userapi.com","serverResponseTime":1.1479999999999997},{"origin":"https://sun9-51.userapi.com","serverResponseTime":0.9099999999999824},{"origin":"https://sun9-26.userapi.com","serverResponseTime":0.8979999999999997},{"origin":"https://sun9-50.userapi.com","serverResponseTime":0.7119999999999997},{"origin":"https://sun9-7.userapi.com","serverResponseTime":0.6479999999999961},{"origin":"https://sun9-35.userapi.com","serverResponseTime":0.5019999999999953},{"origin":"https://sun9-66.userapi.com","serverResponseTime":0.490000000000002},{"origin":"https://sun9-24.userapi.com","serverResponseTime":0.31899999999999906},{"origin":"https://sun9-47.userapi.com","serverResponseTime":0},{"origin":"https://sun9-39.userapi.com","serverResponseTime":0},{"origin":"https://sun9-5.userapi.com","serverResponseTime":0},{"origin":"https://sun9-33.userapi.com","serverResponseTime":0},{"origin":"https://sun9-29.userapi.com","serverResponseTime":0},{"origin":"https://sun9-62.userapi.com","serverResponseTime":0}]}},"main-thread-tasks":{"id":"main-thread-tasks","title":"Tasks","description":"Lists the toplevel main thread tasks that executed during page load.","score":null,"scoreDisplayMode":"informative","numericValue":69,"details":{"type":"table","headings":[{"key":"startTime","itemType":"ms","granularity":1,"text":"Start Time"},{"key":"duration","itemType":"ms","granularity":1,"text":"End Time"}],"items":[{"duration":5.775,"startTime":380.204},{"duration":103.214,"startTime":394.688},{"duration":11.777,"startTime":497.983},{"duration":8.752,"startTime":520.777},{"duration":5.208,"startTime":537.582},{"duration":6.57,"startTime":547.344},{"duration":5.179,"startTime":694.515},{"duration":9.405,"startTime":922.243},{"duration":5.568,"startTime":994.194},{"duration":8.231,"startTime":1236.209},{"duration":66.113,"startTime":2140.378},{"duration":6.611,"startTime":2245.838},{"duration":21.418,"startTime":2282.347},{"duration":35.498,"startTime":2800.393},{"duration":13.013,"startTime":2973.882},{"duration":102.932,"startTime":3356.996},{"duration":243.669,"startTime":3464.714},{"duration":483.755,"startTime":3719.08},{"duration":15.602,"startTime":4235.656},{"duration":22.409,"startTime":4276.075},{"duration":5.001,"startTime":4352.136},{"duration":138.87,"startTime":4357.148},{"duration":37.603,"startTime":4496.054},{"duration":12.285,"startTime":4546.037},{"duration":5.611,"startTime":4570.805},{"duration":18.458,"startTime":4578.027},{"duration":9.274,"startTime":4601.708},{"duration":9.176,"startTime":4611.881},{"duration":7.16,"startTime":4621.077},{"duration":7.275,"startTime":4644.808},{"duration":5.712,"startTime":4662.767},{"duration":5.786,"startTime":4679.773},{"duration":5.861,"startTime":4695.772},{"duration":6.625,"startTime":4707.504},{"duration":6.506,"startTime":4716.676},{"duration":7.411,"startTime":4723.559},{"duration":5.351,"startTime":4836.353},{"duration":327.909,"startTime":4846.746},{"duration":5.481,"startTime":5174.839},{"duration":121.383,"startTime":5180.331},{"duration":24.884,"startTime":5317.237},{"duration":18.07,"startTime":5357.65},{"duration":260.468,"startTime":5404.948},{"duration":5.246,"startTime":5679.115},{"duration":11.461,"startTime":5690.195},{"duration":8.797,"startTime":5707.426},{"duration":20.01,"startTime":5720.533},{"duration":5.602,"startTime":5740.628},{"duration":14.829,"startTime":5747.686},{"duration":13.586,"startTime":5767.694},{"duration":5.073,"startTime":5781.469},{"duration":6.483,"startTime":5786.981},{"duration":13.929,"startTime":5794.273},{"duration":9.523,"startTime":5818.894},{"duration":17.519,"startTime":5840.677},{"duration":17.869,"startTime":5859.255},{"duration":6.462,"startTime":6319.919},{"duration":7.207,"startTime":6328.235},{"duration":6.332,"startTime":6345.494},{"duration":41.778,"startTime":6370.571},{"duration":8.06,"startTime":6443.68},{"duration":12.023,"startTime":6460.302},{"duration":18.583,"startTime":6488.093},{"duration":61.315,"startTime":7069.515},{"duration":12.639,"startTime":7131.117},{"duration":5.668,"startTime":7268.508},{"duration":9.943,"startTime":7932.434},{"duration":19.343,"startTime":7942.475},{"duration":6.445,"startTime":7990.108}]}},"metrics":{"id":"metrics","title":"Metrics","description":"Collects all available metrics.","score":null,"scoreDisplayMode":"informative","numericValue":20508.207500000004,"details":{"type":"debugdata","items":[{"firstContentfulPaint":9627,"firstMeaningfulPaint":10681,"firstCPUIdle":13670,"interactive":20508,"speedIndex":17725,"estimatedInputLatency":387,"totalBlockingTime":2012,"observedNavigationStart":0,"observedNavigationStartTs":2006971688858,"observedFirstPaint":3749,"observedFirstPaintTs":2006975437758,"observedFirstContentfulPaint":3749,"observedFirstContentfulPaintTs":2006975437758,"observedFirstMeaningfulPaint":5316,"observedFirstMeaningfulPaintTs":2006977004441,"observedLargestContentfulPaint":4332,"observedLargestContentfulPaintTs":2006976021101,"observedTraceEnd":9054,"observedTraceEndTs":2006980743070,"observedLoad":7265,"observedLoadTs":2006978953482,"observedDomContentLoaded":4159,"observedDomContentLoadedTs":2006975848120,"observedFirstVisualChange":3698,"observedFirstVisualChangeTs":2006975386858,"observedLastVisualChange":7282,"observedLastVisualChangeTs":2006978970858,"observedSpeedIndex":4295,"observedSpeedIndexTs":2006975983974},{"lcpInvalidated":false}]}},"offline-start-url":{"id":"offline-start-url","title":"`start_url` does not respond with a 200 when offline","description":"A service worker enables your web app to be reliable in unpredictable network conditions. [Learn more](https://web.dev/offline-start-url).","score":0,"scoreDisplayMode":"binary","explanation":"No usable web app manifest found on page.","warnings":[]},"performance-budget":{"id":"performance-budget","title":"Performance budget","description":"Keep the quantity and size of network requests under the targets set by the provided performance budget. [Learn more](https://developers.google.com/web/tools/lighthouse/audits/budgets).","score":null,"scoreDisplayMode":"notApplicable"},"resource-summary":{"id":"resource-summary","title":"Keep request counts low and transfer sizes small","description":"To set budgets for the quantity and size of page resources, add a budget.json file. [Learn more](https://developers.google.com/web/tools/lighthouse/audits/budgets).","score":null,"scoreDisplayMode":"informative","displayValue":"239 requests • 3,643 KB","details":{"type":"table","headings":[{"key":"label","itemType":"text","text":"Resource Type"},{"key":"requestCount","itemType":"numeric","text":"Requests"},{"key":"size","itemType":"bytes","text":"Transfer Size"}],"items":[{"resourceType":"total","label":"Total","requestCount":239,"size":3730263},{"resourceType":"image","label":"Image","requestCount":159,"size":1558395},{"resourceType":"script","label":"Script","requestCount":37,"size":960969},{"resourceType":"stylesheet","label":"Stylesheet","requestCount":15,"size":486081},{"resourceType":"media","label":"Media","requestCount":4,"size":307053},{"resourceType":"other","label":"Other","requestCount":18,"size":299860},{"resourceType":"document","label":"Document","requestCount":5,"size":62847},{"resourceType":"font","label":"Font","requestCount":1,"size":55058},{"resourceType":"third-party","label":"Third-party","requestCount":129,"size":1506502}]}},"third-party-summary":{"id":"third-party-summary","title":"Reduce the impact of third-party code","description":"Third-party code can significantly impact load performance. Limit the number of redundant third-party providers and try to load third-party code after your page has primarily finished loading. [Learn more](https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/loading-third-party-javascript/).","score":0,"scoreDisplayMode":"binary","displayValue":"Third-party code blocked the main thread for 1,520 ms","details":{"type":"table","headings":[{"key":"entity","itemType":"link","text":"Third-Party"},{"key":"transferSize","granularity":1,"itemType":"bytes","text":"Size"},{"key":"blockingTime","granularity":1,"itemType":"ms","text":"Main-Thread Blocking Time"}],"items":[{"entity":{"type":"link","text":"VK","url":"https://vk.com/"},"transferSize":2223761,"mainThreadTime":3876.0719999999756,"blockingTime":1520.6359999999997}],"summary":{"wastedBytes":2223761,"wastedMs":1520.6359999999997}}},"pwa-cross-browser":{"id":"pwa-cross-browser","title":"Site works cross-browser","description":"To reach the most number of users, sites should work across every major browser. [Learn more](https://web.dev/pwa-cross-browser).","score":null,"scoreDisplayMode":"manual"},"pwa-page-transitions":{"id":"pwa-page-transitions","title":"Page transitions don't feel like they block on the network","description":"Transitions should feel snappy as you tap around, even on a slow network. This experience is key to a user's perception of performance. [Learn more](https://web.dev/pwa-page-transitions).","score":null,"scoreDisplayMode":"manual"},"pwa-each-page-has-url":{"id":"pwa-each-page-has-url","title":"Each page has a URL","description":"Ensure individual pages are deep linkable via URL and that URLs are unique for the purpose of shareability on social media. [Learn more](https://web.dev/pwa-each-page-has-url).","score":null,"scoreDisplayMode":"manual"},"accesskeys":{"id":"accesskeys","title":"`[accesskey]` values are unique","description":"Access keys let users quickly focus a part of the page. For proper navigation, each access key must be unique. [Learn more](https://web.dev/accesskeys/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-allowed-attr":{"id":"aria-allowed-attr","title":"`[aria-*]` attributes match their roles","description":"Each ARIA `role` supports a specific subset of `aria-*` attributes. Mismatching these invalidates the `aria-*` attributes. [Learn more](https://web.dev/aria-allowed-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-attr":{"id":"aria-required-attr","title":"`[role]`s have all required `[aria-*]` attributes","description":"Some ARIA roles have required attributes that describe the state of the element to screen readers. [Learn more](https://web.dev/aria-required-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-children":{"id":"aria-required-children","title":"Elements with an ARIA `[role]` that require children to contain a specific `[role]` have all required children.","description":"Some ARIA parent roles must contain specific child roles to perform their intended accessibility functions. [Learn more](https://web.dev/aria-required-children/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-required-parent":{"id":"aria-required-parent","title":"`[role]`s are contained by their required parent element","description":"Some ARIA child roles must be contained by specific parent roles to properly perform their intended accessibility functions. [Learn more](https://web.dev/aria-required-parent/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-roles":{"id":"aria-roles","title":"`[role]` values are valid","description":"ARIA roles must have valid values in order to perform their intended accessibility functions. [Learn more](https://web.dev/aria-roles/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-valid-attr-value":{"id":"aria-valid-attr-value","title":"`[aria-*]` attributes have valid values","description":"Assistive technologies, like screen readers, can't interpret ARIA attributes with invalid values. [Learn more](https://web.dev/aria-valid-attr-value/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"aria-valid-attr":{"id":"aria-valid-attr","title":"`[aria-*]` attributes are valid and not misspelled","description":"Assistive technologies, like screen readers, can't interpret ARIA attributes with invalid names. [Learn more](https://web.dev/aria-valid-attr/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"audio-caption":{"id":"audio-caption","title":"`\u003caudio>` elements contain a `\u003ctrack>` element with `[kind=\"captions\"]`","description":"Captions make audio elements usable for deaf or hearing-impaired users, providing critical information such as who is talking, what they're saying, and other non-speech information. [Learn more](https://web.dev/audio-caption/).","score":null,"scoreDisplayMode":"notApplicable"},"button-name":{"id":"button-name","title":"Buttons do not have an accessible name","description":"When a button doesn't have an accessible name, screen readers announce it as \"button\", making it unusable for users who rely on screen readers. [Learn more](https://web.dev/button-name/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":".im-page-pinned--hide","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,0,DIV,0,DIV,2,DIV,0,DIV,0,BUTTON","snippet":"\u003cbutton class=\"im-page-pinned--hide _im_pin_hide\">\u003c/button>","explanation":"Fix any of the following:\n  Element does not have inner text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"\n  Element has no title attribute or the title attribute is empty","nodeLabel":"button"}},{"node":{"type":"node","selector":".page_media_link__bookmark_button","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,71,DIV,1,DIV,1,UL,0,LI,2,DIV,1,DIV,0,DIV,0,DIV,0,A,0,BUTTON","snippet":"\u003cbutton class=\"page_media_link__bookmark_button\" data-state=\"\" data-add=\"Сохранить в закладках\" data-remove=\"Удалить из закладок\" data-link-url=\"http://pogugli.com/?350527\" data-link-img=\"2000050955_457287729\" data-link-title=\"Что такое когда весенние каникулы? - Погугли! для тех, кому проще спросить, чем погуглить.\" onmouseover=\"bookmarkTooltip(this)\" onclick=\"bookmarkLink(event, this, 'bb5608f66590591bc8');\">","explanation":"Fix any of the following:\n  Element does not have inner text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"\n  Element has no title attribute or the title attribute is empty","nodeLabel":"button"}},{"node":{"type":"node","selector":".im-to-end","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,3,DIV,0,BUTTON","snippet":"\u003cbutton class=\"im-to-end _im_to_end\"> \u003cspan class=\"im-to-end__button\">\u003c/span> \u003cspan class=\"im-to-end--label\"> \u003cspan class=\"im-to-end--label-in _im_to_end_label\">\u003c/span> \u003c/span> \u003c/button>","explanation":"Fix any of the following:\n  Element does not have inner text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"\n  Element has no title attribute or the title attribute is empty","nodeLabel":"button"}}],"debugData":{"type":"debugdata","impact":"critical","tags":["cat.name-role-value","wcag2a","wcag412","section508","section508.22.a"]}}},"bypass":{"id":"bypass","title":"The page contains a heading, skip link, or landmark region","description":"Adding ways to bypass repetitive content lets keyboard users navigate the page more efficiently. [Learn more](https://web.dev/bypass/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"color-contrast":{"id":"color-contrast","title":"Background and foreground colors do not have a sufficient contrast ratio.","description":"Low-contrast text is difficult or impossible for many users to read. [Learn more](https://web.dev/color-contrast/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"#chat_onl","path":"1,HTML,1,BODY,1,DIV,0,DIV,1,DIV,3,A,0,DIV,0,DIV","snippet":"\u003cdiv class=\"chat_onl\" id=\"chat_onl\">21\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.41 (foreground color: #7993ad, background color: #dae1e8, font size: 8.3pt, font weight: bold). Expected contrast ratio of 4.5:1","nodeLabel":"21"}},{"node":{"type":"node","selector":".left_menu_nav_wrap:nth-child(3) > .left_menu_nav","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,2,DIV,0,SPAN","snippet":"\u003cspan class=\"left_menu_nav\" onmouseover=\"showTooltip(this, { text: 'ВКонтакте — один из миллионов сервисов, которые используют \u003cb>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.56 (foreground color: #939699, background color: #edeef0, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Powered by NGINX"}},{"node":{"type":"node","selector":"a[href$=\"blog\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,4,DIV,0,A","snippet":"\u003ca class=\"left_menu_nav\" href=\"/blog\" data-stats-key=\"blog\">Блог\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.56 (foreground color: #939699, background color: #edeef0, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Блог"}},{"node":{"type":"node","selector":"a[href$=\"dev\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,4,DIV,1,A","snippet":"\u003ca class=\"left_menu_nav\" href=\"/dev\" data-stats-key=\"dev\">Разработчикам\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.56 (foreground color: #939699, background color: #edeef0, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Разработчикам"}},{"node":{"type":"node","selector":"a[href$=\"biz\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,4,DIV,2,A","snippet":"\u003ca class=\"left_menu_nav\" href=\"/biz\" data-stats-key=\"biz\">Реклама\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.56 (foreground color: #939699, background color: #edeef0, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Реклама"}},{"node":{"type":"node","selector":"#left_menu_more","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,4,DIV,3,DIV,0,DIV,1,A","snippet":"\u003ca class=\"left_menu_nav left_menu_more\" id=\"left_menu_more\">Ещё\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.56 (foreground color: #939699, background color: #edeef0, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Ещё"}},{"node":{"type":"node","selector":"._im_dialog_2000000190 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,0,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">18:33 \u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.62 (foreground color: #cedbeb, background color: #5b88bd, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:33"}},{"node":{"type":"node","selector":"._im_dialog_2000000190 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--name > .nim-dialog--name-w[aria-hidden=\"true\"] > ._im_dialog_link","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,0,LI,1,DIV,0,DIV,4,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"_im_dialog_link\">11-18\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.68 (foreground color: #ffffff, background color: #5b88bd, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"11-18"}},{"node":{"type":"node","selector":"._im_dialog_2000000190 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,0,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Елизавета:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.68 (foreground color: #ffffff, background color: #5b88bd, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Елизавета:"}},{"node":{"type":"node","selector":"._im_dialog_2000000190 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--inner-text","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,0,LI,1,DIV,0,DIV,5,DIV,0,SPAN,1,SPAN","snippet":"\u003cspan class=\"nim-dialog--inner-text\">В 86 до 18 продлили\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.68 (foreground color: #ffffff, background color: #5b88bd, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"В 86 до 18 продлили"}},{"node":{"type":"node","selector":"._im_dialog_-160397619 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,1,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">16:48 \u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:48"}},{"node":{"type":"node","selector":"._im_dialog_376630846 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,2,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">16:06 \u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:06"}},{"node":{"type":"node","selector":"._im_dialog_2000000221 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,3,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">14:11 \u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:11"}},{"node":{"type":"node","selector":"._im_dialog_2000000221 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,3,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Егор:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Егор:"}},{"node":{"type":"node","selector":"._im_dialog_359715014 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,4,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">10:40 \u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"10:40"}},{"node":{"type":"node","selector":"._im_dialog_359715014 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,4,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_405510044 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,5,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">вчера\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"вчера"}},{"node":{"type":"node","selector":"._im_dialog_164698601 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,6,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">вчера\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"вчера"}},{"node":{"type":"node","selector":"._im_dialog_164698601 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,6,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_380355345 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,7,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">вчера\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"вчера"}},{"node":{"type":"node","selector":"._im_dialog_380355345 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,7,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_308603484 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,8,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">вчера\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"вчера"}},{"node":{"type":"node","selector":"._im_dialog_308603484 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,8,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_222208856 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,9,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">вчера\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"вчера"}},{"node":{"type":"node","selector":"._im_dialog_291890695 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,10,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">вчера\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"вчера"}},{"node":{"type":"node","selector":"._im_dialog_291890695 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,10,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_2000000217 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,11,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">вчера\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"вчера"}},{"node":{"type":"node","selector":"._im_dialog_2000000217 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,11,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Андрей:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Андрей:"}},{"node":{"type":"node","selector":"._im_dialog_343279634 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,12,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">вчера\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"вчера"}},{"node":{"type":"node","selector":"._im_dialog_2000000230 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,13,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">7 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"7 фев"}},{"node":{"type":"node","selector":"._im_dialog_2000000230 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,13,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Акакий:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Акакий:"}},{"node":{"type":"node","selector":"._im_dialog_-157369801 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,14,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">7 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"7 фев"}},{"node":{"type":"node","selector":"._im_dialog_283378977 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,15,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">7 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"7 фев"}},{"node":{"type":"node","selector":"._im_dialog_2000000091 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,16,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">7 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"7 фев"}},{"node":{"type":"node","selector":"._im_dialog_2000000091 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,16,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вадим:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вадим:"}},{"node":{"type":"node","selector":"._im_dialog_-2158488 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,17,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">6 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"6 фев"}},{"node":{"type":"node","selector":"._im_dialog_269581812 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,18,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">6 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"6 фев"}},{"node":{"type":"node","selector":"._im_dialog_242086098 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,19,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">6 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"6 фев"}},{"node":{"type":"node","selector":"._im_dialog_242086098 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,19,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_137018577 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,20,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">6 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"6 фев"}},{"node":{"type":"node","selector":"._im_dialog_137018577 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,20,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_242935087 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,21,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">6 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"6 фев"}},{"node":{"type":"node","selector":"._im_dialog_242935087 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,21,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_211759637 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,22,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">6 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"6 фев"}},{"node":{"type":"node","selector":"._im_dialog_282133438 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,23,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">5 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"5 фев"}},{"node":{"type":"node","selector":"._im_dialog_282133438 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,23,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_202718851 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,24,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">5 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"5 фев"}},{"node":{"type":"node","selector":"._im_dialog_202718851 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,24,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_-91050183 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,25,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">5 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"5 фев"}},{"node":{"type":"node","selector":"._im_dialog_260154902 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,26,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">5 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"5 фев"}},{"node":{"type":"node","selector":"._im_dialog_140818864 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,27,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">5 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"5 фев"}},{"node":{"type":"node","selector":"._im_dialog_229959355 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,28,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">5 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"5 фев"}},{"node":{"type":"node","selector":"._im_dialog_229959355 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,28,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_443643293 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,29,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">4 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"4 фев"}},{"node":{"type":"node","selector":"._im_dialog_443643293 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,29,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_343120441 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,30,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">4 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"4 фев"}},{"node":{"type":"node","selector":"._im_dialog_343120441 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,30,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_2000000227 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,31,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">3 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"3 фев"}},{"node":{"type":"node","selector":"._im_dialog_219665498 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,32,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">3 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"3 фев"}},{"node":{"type":"node","selector":"._im_dialog_219665498 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,32,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_217381259 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,33,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">3 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"3 фев"}},{"node":{"type":"node","selector":"._im_dialog_-175216562 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,34,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">3 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"3 фев"}},{"node":{"type":"node","selector":"._im_dialog_189301979 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,35,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">2 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"2 фев"}},{"node":{"type":"node","selector":"._im_dialog_178509617 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,36,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">1 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"1 фев"}},{"node":{"type":"node","selector":"._im_dialog_178509617 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,36,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_375035460 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,37,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">1 фев\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"1 фев"}},{"node":{"type":"node","selector":"._im_dialog_425005169 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,38,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">31 янв\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"31 янв"}},{"node":{"type":"node","selector":"._im_dialog_22583943 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,39,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">31 янв\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"31 янв"}},{"node":{"type":"node","selector":"._im_dialog_22583943 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--text-preview > ._dialog_body.nim-dialog--preview > .nim-dialog--who","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,39,LI,1,DIV,0,DIV,5,DIV,0,SPAN,0,SPAN","snippet":"\u003cspan class=\"nim-dialog--who\">Вы:\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.11 (foreground color: #8b939b, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Вы:"}},{"node":{"type":"node","selector":"._im_dialog_2000000206 > .nim-dialog--content > .nim-dialog--cw > .nim-dialog--date._im_dialog_date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,40,LI,1,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"nim-dialog--date _im_dialog_date\">31 янв\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.48 (foreground color: #a0a5af, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"31 янв"}},{"node":{"type":"node","selector":".im-page--dialogs-filter","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,2,DIV,1,DIV,0,A","snippet":"\u003ca class=\"im-page--dialogs-filter im-page--dialogs-filter_disabled\">Показаны все беседы\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"Показаны все беседы"}},{"node":{"type":"node","selector":"._im_chat_members","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,0,DIV,0,DIV,1,DIV,2,DIV,0,DIV,1,SPAN,0,BUTTON","snippet":"\u003cbutton type=\"button\" class=\"_im_chat_members im-page--members\">30 участников\u003c/button>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"30 участников"}},{"node":{"type":"node","selector":".im-page-pinned--date","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,0,DIV,0,DIV,2,DIV,0,DIV,1,DIV,1,SPAN","snippet":"\u003cspan class=\"im-page-pinned--date\">21 янв в 20:36\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"21 янв в 20:36"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399891\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399891\" class=\"_im_mess_link\">21:58 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"21:58"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399893\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,1,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399893\" class=\"_im_mess_link\">21:58 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"21:58"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399894\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,2,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399894\" class=\"_im_mess_link\">21:58 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"21:58"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399895\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,3,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399895\" class=\"_im_mess_link\">21:58 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"21:58"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399896\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,4,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399896\" class=\"_im_mess_link\">21:58 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"21:58"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399898\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,5,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399898\" class=\"_im_mess_link\">21:59 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"21:59"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399907\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,6,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399907\" class=\"_im_mess_link\">22:00 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"22:00"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399908\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,7,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399908\" class=\"_im_mess_link\">22:00 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"22:00"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399909\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,8,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399909\" class=\"_im_mess_link\">22:00 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"22:00"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399912\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,9,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399912\" class=\"_im_mess_link\">22:01 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"22:01"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399913\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,10,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399913\" class=\"_im_mess_link\">22:01 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"22:01"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399921\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,11,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399921\" class=\"_im_mess_link\">22:02 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"22:02"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4399923\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,12,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4399923\" class=\"_im_mess_link\">22:03 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"22:03"}},{"node":{"type":"node","selector":"._im_bar_3112020 > span","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,13,H5,0,SPAN","snippet":"\u003cspan>31 января\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.84 (foreground color: #828282, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"31 января"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4400665\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,14,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4400665\" class=\"_im_mess_link\">8:41 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"8:41"}},{"node":{"type":"node","selector":"._im_bar_122020 > span","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,15,H5,0,SPAN","snippet":"\u003cspan>1 февраля\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.84 (foreground color: #828282, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"1 февраля"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4401954\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,16,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4401954\" class=\"_im_mess_link\">9:50 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"9:50"}},{"node":{"type":"node","selector":"span[data-time=\"\\31 580536419\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,16,DIV,1,DIV,1,UL,0,LI,2,DIV,2,SPAN","snippet":"\u003cspan class=\"im-mess--lbl-was-edited _im_edit_time\" data-time=\"1580536419\">(ред.)\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"(ред.)"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4401956\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,17,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4401956\" class=\"_im_mess_link\">9:51 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"9:51"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4401992\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,18,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4401992\" class=\"_im_mess_link\">10:43 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"10:43"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402018\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,19,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402018\" class=\"_im_mess_link\">11:07 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"11:07"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402080\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,20,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402080\" class=\"_im_mess_link\">12:06 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"12:06"}},{"node":{"type":"node","selector":"span[data-time=\"\\31 580544495\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,20,DIV,1,DIV,1,UL,0,LI,2,DIV,1,SPAN","snippet":"\u003cspan class=\"im-mess--lbl-was-edited _im_edit_time\" data-time=\"1580544495\">(ред.)\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"(ред.)"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402081\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,21,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402081\" class=\"_im_mess_link\">12:09 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"12:09"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402116\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,22,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402116\" class=\"_im_mess_link\">12:22 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"12:22"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402125\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,23,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402125\" class=\"_im_mess_link\">12:29 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"12:29"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402129\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,24,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402129\" class=\"_im_mess_link\">12:32 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"12:32"}},{"node":{"type":"node","selector":".audio_row__duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,24,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,6,DIV,1,DIV,0,DIV","snippet":"\u003cdiv class=\"audio_row__duration audio_row__duration-s _audio_row__duration\">3:50\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"3:50"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402138\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,25,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402138\" class=\"_im_mess_link\">12:49 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"12:49"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402142\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,26,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402142\" class=\"_im_mess_link\">12:50 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"12:50"}},{"node":{"type":"node","selector":"#audiomsgpl_301766321_535867285 > .audio-msg-track--duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,26,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"audio-msg-track--duration\">0:02\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"0:02"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402143\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,27,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402143\" class=\"_im_mess_link\">12:51 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"12:51"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402314\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,28,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402314\" class=\"_im_mess_link\">15:11 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"15:11"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402325\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,29,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402325\" class=\"_im_mess_link\">15:15 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"15:15"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402326\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,30,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402326\" class=\"_im_mess_link\">15:17 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"15:17"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402327\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,31,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402327\" class=\"_im_mess_link\">15:18 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"15:18"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4402336\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,32,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4402336\" class=\"_im_mess_link\">15:27 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"15:27"}},{"node":{"type":"node","selector":"._im_bar_322020 > span","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,33,H5,0,SPAN","snippet":"\u003cspan>3 февраля\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.84 (foreground color: #828282, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"3 февраля"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405340\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,34,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405340\" class=\"_im_mess_link\">10:31 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"10:31"}},{"node":{"type":"node","selector":"span[data-time=\"\\31 580711532\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,34,DIV,1,DIV,1,UL,0,LI,2,DIV,2,SPAN","snippet":"\u003cspan class=\"im-mess--lbl-was-edited _im_edit_time\" data-time=\"1580711532\">(ред.)\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"(ред.)"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405663\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,35,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405663\" class=\"_im_mess_link\">16:41 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:41"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405664\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,36,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405664\" class=\"_im_mess_link\">16:43 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:43"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405665\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,37,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405665\" class=\"_im_mess_link\">16:44 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:44"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405674\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,38,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405674\" class=\"_im_mess_link\">16:45 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:45"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405675\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,39,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405675\" class=\"_im_mess_link\">16:45 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:45"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405676\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,40,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405676\" class=\"_im_mess_link\">16:45 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:45"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405679\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,41,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405679\" class=\"_im_mess_link\">16:45 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:45"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405684\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,42,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405684\" class=\"_im_mess_link\">16:46 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:46"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405691\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,43,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405691\" class=\"_im_mess_link\">16:47 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:47"}},{"node":{"type":"node","selector":"#audiomsgpl_137018577_533096024 > .audio-msg-track--duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,43,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"audio-msg-track--duration\">0:01\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"0:01"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405692\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,44,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405692\" class=\"_im_mess_link\">16:47 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:47"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405693\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,45,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405693\" class=\"_im_mess_link\">16:47 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:47"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405785\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,46,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405785\" class=\"_im_mess_link\">17:16 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:16"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405786\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,47,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405786\" class=\"_im_mess_link\">17:18 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:18"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405788\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,48,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405788\" class=\"_im_mess_link\">17:18 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:18"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405790\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,49,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405790\" class=\"_im_mess_link\">17:19 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:19"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405795\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,50,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405795\" class=\"_im_mess_link\">17:22 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:22"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4405797\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,51,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4405797\" class=\"_im_mess_link\">17:31 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:31"}},{"node":{"type":"node","selector":"#audiomsgpl_237381815_536740969 > .audio-msg-track--duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,51,DIV,1,DIV,1,UL,0,LI,2,DIV,1,DIV,0,DIV,1,DIV,0,DIV,1,DIV,1,UL,0,LI,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"audio-msg-track--duration\">0:16\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"0:16"}},{"node":{"type":"node","selector":"._im_bar_422020 > span","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,52,H5,0,SPAN","snippet":"\u003cspan>4 февраля\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.84 (foreground color: #828282, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"4 февраля"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4407988\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,53,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4407988\" class=\"_im_mess_link\">17:32 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:32"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4407990\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,54,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4407990\" class=\"_im_mess_link\">18:01 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:01"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4407992\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,55,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4407992\" class=\"_im_mess_link\">18:02 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:02"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4407993\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,56,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4407993\" class=\"_im_mess_link\">18:02 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:02"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4407995\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,57,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4407995\" class=\"_im_mess_link\">18:04 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:04"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4407998\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,58,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4407998\" class=\"_im_mess_link\">18:04 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:04"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4407999\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,59,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4407999\" class=\"_im_mess_link\">18:05 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:05"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408000\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,60,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408000\" class=\"_im_mess_link\">18:05 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:05"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408001\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,61,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408001\" class=\"_im_mess_link\">18:06 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:06"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408004\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,62,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408004\" class=\"_im_mess_link\">18:07 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:07"}},{"node":{"type":"node","selector":"._im_bar_522020 > span","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,63,H5,0,SPAN","snippet":"\u003cspan>5 февраля\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.84 (foreground color: #828282, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"5 февраля"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408778\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,64,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408778\" class=\"_im_mess_link\">14:18 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:18"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408779\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,65,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408779\" class=\"_im_mess_link\">14:29 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:29"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408780\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,66,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408780\" class=\"_im_mess_link\">14:30 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:30"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408781\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,67,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408781\" class=\"_im_mess_link\">14:32 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:32"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408783\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,68,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408783\" class=\"_im_mess_link\">14:41 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:41"}},{"node":{"type":"node","selector":"#audiomsgpl_301766321_536410280 > .audio-msg-track--duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,68,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"audio-msg-track--duration\">0:06\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"0:06"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408784\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,69,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408784\" class=\"_im_mess_link\">14:42 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:42"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408785\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,70,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408785\" class=\"_im_mess_link\">15:15 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"15:15"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408786\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,71,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408786\" class=\"_im_mess_link\">15:21 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"15:21"}},{"node":{"type":"node","selector":".thumbed_link__subtitle","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,71,DIV,1,DIV,1,UL,0,LI,2,DIV,1,DIV,0,DIV,0,DIV,1,DIV,1,A","snippet":"\u003ca class=\"thumbed_link__subtitle\" href=\"/away.php?to=http%3A%2F%2Fpogugli.com%2F%3F350527&amp;el=snippet\" target=\"_blank\" rel=\"nofollow noopener\">pogugli.com\u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"pogugli.com"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408809\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,72,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408809\" class=\"_im_mess_link\">16:38 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:38"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408811\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,73,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408811\" class=\"_im_mess_link\">16:38 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:38"}},{"node":{"type":"node","selector":"#audiomsgpl_301766321_536426334 > .audio-msg-track--duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,73,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"audio-msg-track--duration\">0:16\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"0:16"}},{"node":{"type":"node","selector":"#audiomsgpl_301766321_536426582 > .audio-msg-track--duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,73,DIV,1,DIV,1,UL,1,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"audio-msg-track--duration\">0:06\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"0:06"}},{"node":{"type":"node","selector":"#audiomsgpl_301766321_536426627 > .audio-msg-track--duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,73,DIV,1,DIV,1,UL,2,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"audio-msg-track--duration\">0:10\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"0:10"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408885\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,74,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408885\" class=\"_im_mess_link\">17:21 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:21"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4408890\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,75,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4408890\" class=\"_im_mess_link\">17:24 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:24"}},{"node":{"type":"node","selector":"._im_bar_622020 > span","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,76,H5,0,SPAN","snippet":"\u003cspan>6 февраля\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.84 (foreground color: #828282, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"6 февраля"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409576\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,77,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409576\" class=\"_im_mess_link\">13:56 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"13:56"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409577\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,78,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409577\" class=\"_im_mess_link\">14:00 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:00"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409578\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,79,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409578\" class=\"_im_mess_link\">14:00 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:00"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409579\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,80,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409579\" class=\"_im_mess_link\">14:00 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:00"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409580\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,81,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409580\" class=\"_im_mess_link\">14:00 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:00"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409581\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,82,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409581\" class=\"_im_mess_link\">14:12 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:12"}},{"node":{"type":"node","selector":"#audiomsgpl_301766321_536539267 > .audio-msg-track--duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,82,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"audio-msg-track--duration\">0:09\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"0:09"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409582\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,83,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409582\" class=\"_im_mess_link\">14:15 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"14:15"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409656\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,84,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409656\" class=\"_im_mess_link\">17:02 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:02"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409657\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,85,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409657\" class=\"_im_mess_link\">17:03 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:03"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4409658\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,86,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4409658\" class=\"_im_mess_link\">17:03 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:03"}},{"node":{"type":"node","selector":"._im_bar_922020 > span","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,87,H5,0,SPAN","snippet":"\u003cspan>сегодня\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.84 (foreground color: #828282, background color: #ffffff, font size: 9.4pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"сегодня"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412243\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,88,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412243\" class=\"_im_mess_link\">16:56 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:56"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412244\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,89,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412244\" class=\"_im_mess_link\">16:57 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:57"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412245\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,90,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412245\" class=\"_im_mess_link\">16:58 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:58"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412248\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,91,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412248\" class=\"_im_mess_link\">16:58 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:58"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412249\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,92,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412249\" class=\"_im_mess_link\">16:58 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:58"}},{"node":{"type":"node","selector":"span[data-time=\"\\31 581253221\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,92,DIV,1,DIV,1,UL,0,LI,2,DIV,1,SPAN","snippet":"\u003cspan class=\"im-mess--lbl-was-edited _im_edit_time\" data-time=\"1581253221\">(ред.)\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"(ред.)"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412250\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,93,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412250\" class=\"_im_mess_link\">16:59 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"16:59"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412252\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,94,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412252\" class=\"_im_mess_link\">17:01 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:01"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412253\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,95,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412253\" class=\"_im_mess_link\">17:02 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:02"}},{"node":{"type":"node","selector":"#audiomsgpl_301766321_536956937 > .audio-msg-track--duration","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,95,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV","snippet":"\u003cdiv class=\"audio-msg-track--duration\">0:13\u003c/div>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 3.07 (foreground color: #939393, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"0:13"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412254\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,96,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412254\" class=\"_im_mess_link\">17:02 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:02"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412255\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,97,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412255\" class=\"_im_mess_link\">17:12 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:12"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412256\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,98,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412256\" class=\"_im_mess_link\">17:17 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:17"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412257\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,99,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412257\" class=\"_im_mess_link\">17:18 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:18"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412258\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,100,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412258\" class=\"_im_mess_link\">17:18 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:18"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412259\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,101,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412259\" class=\"_im_mess_link\">17:21 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:21"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412261\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,102,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412261\" class=\"_im_mess_link\">17:22 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"17:22"}},{"node":{"type":"node","selector":"span[data-time=\"\\31 581254531\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,102,DIV,1,DIV,1,UL,0,LI,2,DIV,1,SPAN","snippet":"\u003cspan class=\"im-mess--lbl-was-edited _im_edit_time\" data-time=\"1581254531\">(ред.)\u003c/span>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.8pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"(ред.)"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412262\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,103,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412262\" class=\"_im_mess_link\">18:08 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:08"}},{"node":{"type":"node","selector":"a[href=\"\\/im\\?sel\\=c190\\&msgid\\=4412263\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,104,DIV,1,DIV,0,DIV,0,DIV,1,SPAN,0,A","snippet":"\u003ca href=\"/im?sel=c190&amp;msgid=4412263\" class=\"_im_mess_link\">18:33 \u003c/a>","explanation":"Fix any of the following:\n  Element has insufficient color contrast of 2.12 (foreground color: #aeb2ba, background color: #ffffff, font size: 9.0pt, font weight: normal). Expected contrast ratio of 4.5:1","nodeLabel":"18:33"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.color","wcag2aa","wcag143"]}}},"definition-list":{"id":"definition-list","title":"`\u003cdl>`'s contain only properly-ordered `\u003cdt>` and `\u003cdd>` groups, `\u003cscript>` or `\u003ctemplate>` elements.","description":"When definition lists are not properly marked up, screen readers may produce confusing or inaccurate output. [Learn more](https://web.dev/definition-list/).","score":null,"scoreDisplayMode":"notApplicable"},"dlitem":{"id":"dlitem","title":"Definition list items are wrapped in `\u003cdl>` elements","description":"Definition list items (`\u003cdt>` and `\u003cdd>`) must be wrapped in a parent `\u003cdl>` element to ensure that screen readers can properly announce them. [Learn more](https://web.dev/dlitem/).","score":null,"scoreDisplayMode":"notApplicable"},"document-title":{"id":"document-title","title":"Document has a `\u003ctitle>` element","description":"The title gives screen reader users an overview of the page, and search engine users rely on it heavily to determine if a page is relevant to their search. [Learn more](https://web.dev/document-title/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"duplicate-id":{"id":"duplicate-id","title":"`[id]` attributes on the page are unique","description":"The value of an id attribute must be unique to prevent other instances from being overlooked by assistive technologies. [Learn more](https://web.dev/duplicate-id/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"frame-title":{"id":"frame-title","title":"`\u003cframe>` or `\u003ciframe>` elements do not have a title","description":"Screen reader users rely on frame titles to describe the contents of frames. [Learn more](https://web.dev/frame-title/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"#queue_storage_frame","path":"1,HTML,1,BODY,1,DIV,1,DIV,0,IFRAME","snippet":"\u003ciframe id=\"queue_storage_frame\" name=\"queue_storage_frame\" src=\"/notifier.php?act=storage_frame&amp;from=vk.com&amp;4#queue_connection_events_queue237381815\">\u003c/iframe>","explanation":"Fix any of the following:\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"iframe"}},{"node":{"type":"node","selector":"#queue_transport_frame","path":"1,HTML,1,BODY,1,DIV,1,DIV,1,IFRAME","snippet":"\u003ciframe id=\"queue_transport_frame\" name=\"queue_transport_frame\" src=\"https://queuev4.vk.com/q_frame.php?7\">\u003c/iframe>","explanation":"Fix any of the following:\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"iframe"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.text-alternatives","wcag2a","wcag241","wcag412","section508","section508.22.i"]}}},"html-has-lang":{"id":"html-has-lang","title":"`\u003chtml>` element has a `[lang]` attribute","description":"If a page doesn't specify a lang attribute, a screen reader assumes that the page is in the default language that the user chose when setting up the screen reader. If the page isn't actually in the default language, then the screen reader might not announce the page's text correctly. [Learn more](https://web.dev/html-has-lang/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"html-lang-valid":{"id":"html-lang-valid","title":"`\u003chtml>` element has a valid value for its `[lang]` attribute","description":"Specifying a valid [BCP 47 language](https://www.w3.org/International/questions/qa-choosing-language-tags#question) helps screen readers announce text properly. [Learn more](https://web.dev/html-lang-valid/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"image-alt":{"id":"image-alt","title":"Image elements do not have `[alt]` attributes","description":"Informative elements should aim for short, descriptive alternate text. Decorative elements can be ignored with an empty alt attribute. [Learn more](https://web.dev/image-alt/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"img[data-alt=\"Love\\ Yourself\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,5,LI,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,IMG","snippet":"\u003cimg src=\"https://sun7-7.userapi.com/c853520/v853520693/1db838/mbSQ0yNkVV0.jpg?ava=1\" width=\"50\" height=\"50\" data-alt=\"Love Yourself\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"img[data-alt=\"Mariya\\ Krylova\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,10,LI,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,IMG","snippet":"\u003cimg src=\"https://sun9-24.userapi.com/c855032/v855032300/19df59/CXHrirphawQ.jpg?ava=1\" width=\"50\" height=\"50\" data-alt=\"Mariya Krylova\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"img[data-alt=\"Ростислав\\ Яксдэм\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,20,LI,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,IMG","snippet":"\u003cimg src=\"https://sun7-9.userapi.com/c844521/v844521737/1e282f/IcccFwzSTAU.jpg?ava=1\" width=\"50\" height=\"50\" data-alt=\"Ростислав Яксдэм\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"img[data-alt=\"Анастасия\\ Григорьева\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,24,LI,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,IMG","snippet":"\u003cimg src=\"https://sun7-9.userapi.com/c854120/v854120569/18fdb8/DM8hpiEBPi8.jpg?ava=1\" width=\"50\" height=\"50\" data-alt=\"Анастасия Григорьева\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"img[data-alt=\"Кристина\\ Комарова\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,30,LI,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,IMG","snippet":"\u003cimg src=\"https://sun9-51.userapi.com/c853628/v853628099/1c83df/dqv0XuMPChU.jpg?ava=1\" width=\"50\" height=\"50\" data-alt=\"Кристина Комарова\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"img[data-alt=\"Аня\\ Мурзаева\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,35,LI,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,IMG","snippet":"\u003cimg src=\"https://sun9-26.userapi.com/c857436/v857436512/131825/r1xOdyA9JiM.jpg?ava=1\" width=\"50\" height=\"50\" data-alt=\"Аня Мурзаева\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"img[data-alt=\"Mihail\\ Blomfried\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,38,LI,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,IMG","snippet":"\u003cimg src=\"https://sun7-7.userapi.com/c856032/v856032498/1d1aa7/fz-Gf-AjRyQ.jpg?ava=1\" width=\"50\" height=\"50\" data-alt=\"Mihail Blomfried\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"a[data-title=\"Фёдор\\ Гаранин\"] > img","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,23,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,3,DIV,1,DIV,1,A,0,IMG","snippet":"\u003cimg src=\"https://sun7-9.userapi.com/c857520/v857520696/7cc73/SoEiSJvPda8.jpg?ava=1\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"a[data-title=\"Алия\\ Зиннюрова\"] > img","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,23,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,3,DIV,1,DIV,2,A,0,IMG","snippet":"\u003cimg src=\"https://sun9-39.userapi.com/c841335/v841335361/577bb/nnF8XRJg9k0.jpg?ava=1\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"a[data-title=\"Ростислав\\ Яксдэм\"] > img","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,23,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,3,DIV,1,DIV,3,A,0,IMG","snippet":"\u003cimg src=\"https://sun7-9.userapi.com/c844521/v844521737/1e282f/IcccFwzSTAU.jpg?ava=1\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"._im_msg_media4402145 > .im_msg_media_sticker.im_msg_media > .im_sticker_row > a > .sticker_img[width=\"\\31 28\"][height=\"\\31 28\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,27,DIV,1,DIV,1,UL,2,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,A,0,IMG","snippet":"\u003cimg class=\"sticker_img im_gift\" src=\"https://vk.com/sticker/1-16371-128\" width=\"128\" height=\"128\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":".sticker_animation > .sticker_img[width=\"\\31 28\"][height=\"\\31 28\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,40,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,A,0,DIV,0,IMG","snippet":"\u003cimg class=\"sticker_img im_gift\" src=\"https://vk.com/sticker/1-12832-128\" width=\"128\" height=\"128\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"._im_msg_media4409580 > .im_msg_media_sticker.im_msg_media > .im_sticker_row > a > .sticker_img[width=\"\\31 28\"][height=\"\\31 28\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,81,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,0,A,0,IMG","snippet":"\u003cimg class=\"sticker_img im_gift\" src=\"https://vk.com/sticker/1-6129-128\" width=\"128\" height=\"128\">","explanation":"Fix any of the following:\n  Element does not have an alt attribute\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}}],"debugData":{"type":"debugdata","impact":"critical","tags":["cat.text-alternatives","wcag2a","wcag111","section508","section508.22.a"]}}},"input-image-alt":{"id":"input-image-alt","title":"`\u003cinput type=\"image\">` elements have `[alt]` text","description":"When an image is being used as an `\u003cinput>` button, providing alternative text can help screen reader users understand the purpose of the button. [Learn more](https://web.dev/input-image-alt/).","score":null,"scoreDisplayMode":"notApplicable"},"label":{"id":"label","title":"Form elements do not have associated labels","description":"Labels ensure that form controls are announced properly by assistive technologies, like screen readers. [Learn more](https://web.dev/label/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"#im_dialogs_search","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,0,DIV,1,INPUT","snippet":"\u003cinput type=\"text\" class=\"ui_search_field _field\" id=\"im_dialogs_search\" autocomplete=\"off\" autocorrect=\"off\" autocapitalize=\"off\" spellcheck=\"false\" placeholder=\"Поиск\">","explanation":"Fix any of the following:\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Form element does not have an implicit (wrapped) \u003clabel>\n  Form element does not have an explicit \u003clabel>\n  Element has no title attribute or the title attribute is empty","nodeLabel":"input"}}],"debugData":{"type":"debugdata","impact":"critical","tags":["cat.forms","wcag2a","wcag332","wcag131","section508","section508.22.n"]}}},"layout-table":{"id":"layout-table","title":"Presentational `\u003ctable>` elements avoid using `\u003cth>`, `\u003ccaption>` or the `[summary]` attribute.","description":"A table being used for layout purposes should not include data elements, such as the th or caption elements or the summary attribute, because this can create a confusing experience for screen reader users. [Learn more](https://web.dev/layout-table/).","score":null,"scoreDisplayMode":"notApplicable"},"link-name":{"id":"link-name","title":"Links do not have a discernible name","description":"Link text (and alternate text for images, when used as links) that is discernible, unique, and focusable improves the navigation experience for screen reader users. [Learn more](https://web.dev/link-name/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"._im_header_link","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,0,DIV,0,DIV,1,DIV,1,DIV,4,DIV,0,A","snippet":"\u003ca href=\"im?sel=c190\" class=\"_im_header_link\" target=\"_blank\">","explanation":"Fix all of the following:\n  Element is in tab order and does not have accessible text\n\nFix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"img"}},{"node":{"type":"node","selector":"a[data-title=\"Фёдор\\ Гаранин\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,23,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,3,DIV,1,DIV,1,A","snippet":"\u003ca class=\"media_voting_footer_voted_friend\" onclick=\"stopEvent(event)\" href=\"/icosy\" data-title=\"Фёдор Гаранин\" onmouseover=\"showTitle(this);\">\u003cimg src=\"https://sun7-9.userapi.com/c857520/v857520696/7cc73/SoEiSJvPda8.jpg?ava=1\">\u003c/a>","explanation":"Fix all of the following:\n  Element is in tab order and does not have accessible text\n\nFix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"a"}},{"node":{"type":"node","selector":"a[data-title=\"Алия\\ Зиннюрова\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,23,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,3,DIV,1,DIV,2,A","snippet":"\u003ca class=\"media_voting_footer_voted_friend\" onclick=\"stopEvent(event)\" href=\"/queenofthepandas\" data-title=\"Алия Зиннюрова\" onmouseover=\"showTitle(this);\">\u003cimg src=\"https://sun9-39.userapi.com/c841335/v841335361/577bb/nnF8XRJg9k0.jpg?ava=1\">\u003c/a>","explanation":"Fix all of the following:\n  Element is in tab order and does not have accessible text\n\nFix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"a"}},{"node":{"type":"node","selector":"a[data-title=\"Ростислав\\ Яксдэм\"]","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,23,DIV,1,DIV,1,UL,0,LI,2,DIV,0,DIV,0,DIV,0,DIV,3,DIV,1,DIV,3,A","snippet":"\u003ca class=\"media_voting_footer_voted_friend\" onclick=\"stopEvent(event)\" href=\"/yxdem\" data-title=\"Ростислав Яксдэм\" onmouseover=\"showTitle(this);\">\u003cimg src=\"https://sun7-9.userapi.com/c844521/v844521737/1e282f/IcccFwzSTAU.jpg?ava=1\">\u003c/a>","explanation":"Fix all of the following:\n  Element is in tab order and does not have accessible text\n\nFix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"a"}},{"node":{"type":"node","selector":".thumbed_link__thumb","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,2,DIV,1,DIV,2,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,71,DIV,1,DIV,1,UL,0,LI,2,DIV,1,DIV,0,DIV,0,DIV,0,A","snippet":"\u003ca class=\"thumbed_link__thumb\" href=\"/away.php?to=http%3A%2F%2Fpogugli.com%2F%3F350527&amp;el=snippet\" target=\"_blank\" rel=\"nofollow noopener\" style=\"background-image: url(https://sun9-13.userapi.com/c856020/v856020934/1f4114/pqyNcAskIvQ.jpg);\">","explanation":"Fix all of the following:\n  Element is in tab order and does not have accessible text\n\nFix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"a"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.name-role-value","wcag2a","wcag412","wcag244","section508","section508.22.a"]}}},"list":{"id":"list","title":"Lists do not contain only `\u003cli>` elements and script supporting elements (`\u003cscript>` and `\u003ctemplate>`).","description":"Screen readers have a specific way of announcing lists. Ensuring proper list structure aids screen reader output. [Learn more](https://web.dev/list/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"ol","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,0,NAV,0,OL","snippet":"\u003col>","explanation":"Fix all of the following:\n  List element has direct children that are not allowed inside \u003cli> elements","nodeLabel":"Моя страница\nНовости\nСообщения\nДрузья\nСообщества\nФотографии\nМузыка\nВидео\nИгры\nЗ…"}},{"node":{"type":"node","selector":"#im_dialogs","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL","snippet":"\u003cul id=\"im_dialogs\" class=\"im-page--dcontent ui_clean_list _im_page_dcontent ui_scroll_container ui_scroll_default_theme ui_scroll_hidden\" style=\"width: 316px;\">","explanation":"Fix all of the following:\n  List element has direct children that are not allowed inside \u003cli> elements","nodeLabel":"18:33\n11-18\nЕлизавета: В 86 до 18 продлили\n16:48\nc0sm1cs | 7.5ARMY\nРебят теперь…"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.structure","wcag2a","wcag131"]}}},"listitem":{"id":"listitem","title":"List items (`\u003cli>`) are not contained within `\u003cul>` or `\u003col>` parent elements.","description":"Screen readers require list items (`\u003cli>`) to be contained within a parent `\u003cul>` or `\u003col>` to be announced properly. [Learn more](https://web.dev/listitem/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"._im_dialog_2000000190","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,0,LI","snippet":"\u003cli data-list-id=\"2000000190\" class=\"nim-dialog _im_dialog _im_dialog_2000000190 nim-dialog_selected _im_dialog_selected nim-dialog_muted nim-dialog_recent\" data-peer=\"2000000190\" data-msgid=\"4412263\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"18:33\n11-18\nЕлизавета: В 86 до 18 продлили"}},{"node":{"type":"node","selector":"._im_dialog_-160397619","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,1,LI","snippet":"\u003cli data-list-id=\"-160397619\" class=\"nim-dialog _im_dialog _im_dialog_-160397619 \" data-peer=\"-160397619\" data-msgid=\"4412242\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"16:48\nc0sm1cs | 7.5ARMY\nРебят теперь будут другие названия у роликов, попрошу в…"}},{"node":{"type":"node","selector":"._im_dialog_376630846","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,2,LI","snippet":"\u003cli data-list-id=\"376630846\" class=\"nim-dialog _im_dialog _im_dialog_376630846 \" data-peer=\"376630846\" data-msgid=\"4412241\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"16:06\nAnastasia Berkutova\nя за месяц первый рвз выспаласт"}},{"node":{"type":"node","selector":"._im_dialog_2000000221","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,3,LI","snippet":"\u003cli data-list-id=\"2000000221\" class=\"nim-dialog _im_dialog _im_dialog_2000000221 \" data-peer=\"2000000221\" data-msgid=\"4412234\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"14:11\nБаскетбол\nЕгор: Ааа"}},{"node":{"type":"node","selector":"._im_dialog_359715014","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,4,LI","snippet":"\u003cli data-list-id=\"359715014\" class=\"nim-dialog _im_dialog _im_dialog_359715014 \" data-peer=\"359715014\" data-msgid=\"4412221\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"10:40\nKristina Chistyakova\nВы: Стикер"}},{"node":{"type":"node","selector":"._im_dialog_405510044","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,5,LI","snippet":"\u003cli data-list-id=\"405510044\" class=\"nim-dialog _im_dialog _im_dialog_405510044 \" data-peer=\"405510044\" data-msgid=\"4412016\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"вчера\nLove Yourself\nПрости"}},{"node":{"type":"node","selector":"._im_dialog_164698601","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,6,LI","snippet":"\u003cli data-list-id=\"164698601\" class=\"nim-dialog _im_dialog _im_dialog_164698601 \" data-peer=\"164698601\" data-msgid=\"4411989\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"вчера\nНастя Галяутдинова\nВы: fuf спасибо"}},{"node":{"type":"node","selector":"._im_dialog_380355345","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,7,LI","snippet":"\u003cli data-list-id=\"380355345\" class=\"nim-dialog _im_dialog _im_dialog_380355345 nim-dialog_unread-out \" data-peer=\"380355345\" data-msgid=\"4411873\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"вчера\nВиталий Иванов\nВы: удалилась - потому что правда"}},{"node":{"type":"node","selector":"._im_dialog_308603484","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,8,LI","snippet":"\u003cli data-list-id=\"308603484\" class=\"nim-dialog _im_dialog _im_dialog_308603484 \" data-peer=\"308603484\" data-msgid=\"4411862\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"вчера\nАнна Разумовская\nВы: "}},{"node":{"type":"node","selector":"._im_dialog_222208856","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,9,LI","snippet":"\u003cli data-list-id=\"222208856\" class=\"nim-dialog _im_dialog _im_dialog_222208856 \" data-peer=\"222208856\" data-msgid=\"4411669\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"вчера\nАлия Хасанова\nКрасиво))"}},{"node":{"type":"node","selector":"._im_dialog_291890695","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,10,LI","snippet":"\u003cli data-list-id=\"291890695\" class=\"nim-dialog _im_dialog _im_dialog_291890695 \" data-peer=\"291890695\" data-msgid=\"4411421\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"вчера\nMariya Krylova\nВы: то эффект такой пиздааатый"}},{"node":{"type":"node","selector":"._im_dialog_2000000217","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,11,LI","snippet":"\u003cli data-list-id=\"2000000217\" class=\"nim-dialog _im_dialog _im_dialog_2000000217 nim-dialog_muted\" data-peer=\"2000000217\" data-msgid=\"4411403\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"вчера\nВласть у совета\nАндрей: 1 сообщение"}},{"node":{"type":"node","selector":"._im_dialog_343279634","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,12,LI","snippet":"\u003cli data-list-id=\"343279634\" class=\"nim-dialog _im_dialog _im_dialog_343279634 \" data-peer=\"343279634\" data-msgid=\"4411383\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"вчера\nВиолетта Софина\nС папой"}},{"node":{"type":"node","selector":"._im_dialog_2000000230","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,13,LI","snippet":"\u003cli data-list-id=\"2000000230\" class=\"nim-dialog _im_dialog _im_dialog_2000000230 \" data-peer=\"2000000230\" data-msgid=\"4410642\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"7 фев\nна подарок 8 марта по 33р\nАкакий: кто он..."}},{"node":{"type":"node","selector":"._im_dialog_-157369801","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,14,LI","snippet":"\u003cli data-list-id=\"-157369801\" class=\"nim-dialog _im_dialog _im_dialog_-157369801 nim-dialog_verified\" data-peer=\"-157369801\" data-msgid=\"4410394\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"7 фев\nСберКот\nВ твоей коллекции новый стикер! Обнови страницу и проверь!"}},{"node":{"type":"node","selector":"._im_dialog_283378977","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,15,LI","snippet":"\u003cli data-list-id=\"283378977\" class=\"nim-dialog _im_dialog _im_dialog_283378977 \" data-peer=\"283378977\" data-msgid=\"4410390\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"7 фев\nАнастасия Митрофанова\nСпасибо"}},{"node":{"type":"node","selector":"._im_dialog_2000000091","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,16,LI","snippet":"\u003cli data-list-id=\"2000000091\" class=\"nim-dialog _im_dialog _im_dialog_2000000091 \" data-peer=\"2000000091\" data-msgid=\"4410182\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"7 фев\n6.0 olds only\nВадим: Фотография"}},{"node":{"type":"node","selector":"._im_dialog_-2158488","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,17,LI","snippet":"\u003cli data-list-id=\"-2158488\" class=\"nim-dialog _im_dialog _im_dialog_-2158488 \" data-peer=\"-2158488\" data-msgid=\"4409896\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"6 фев\nLIVE\nУ вас есть знакомые, которые жали руку, ну, скажем, Егору Криду? Мож…"}},{"node":{"type":"node","selector":"._im_dialog_269581812","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,18,LI","snippet":"\u003cli data-list-id=\"269581812\" class=\"nim-dialog _im_dialog _im_dialog_269581812 \" data-peer=\"269581812\" data-msgid=\"4409893\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"6 фев\nВова Нестеров\nда это я"}},{"node":{"type":"node","selector":"._im_dialog_242086098","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,19,LI","snippet":"\u003cli data-list-id=\"242086098\" class=\"nim-dialog _im_dialog _im_dialog_242086098 \" data-peer=\"242086098\" data-msgid=\"4409890\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"6 фев\nМарсель Сагиров\nВы: кс??"}},{"node":{"type":"node","selector":"._im_dialog_137018577","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,20,LI","snippet":"\u003cli data-list-id=\"137018577\" class=\"nim-dialog _im_dialog _im_dialog_137018577 \" data-peer=\"137018577\" data-msgid=\"4409654\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"6 фев\nРостислав Яксдэм\nВы: Да"}},{"node":{"type":"node","selector":"._im_dialog_242935087","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,21,LI","snippet":"\u003cli data-list-id=\"242935087\" class=\"nim-dialog _im_dialog _im_dialog_242935087 \" data-peer=\"242935087\" data-msgid=\"4409640\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"6 фев\nИгорь Бикулев\nВы: Звонок"}},{"node":{"type":"node","selector":"._im_dialog_211759637","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,22,LI","snippet":"\u003cli data-list-id=\"211759637\" class=\"nim-dialog _im_dialog _im_dialog_211759637 \" data-peer=\"211759637\" data-msgid=\"4409450\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"6 фев\nУльяна Осипова\nСпокойной"}},{"node":{"type":"node","selector":"._im_dialog_282133438","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,23,LI","snippet":"\u003cli data-list-id=\"282133438\" class=\"nim-dialog _im_dialog _im_dialog_282133438 \" data-peer=\"282133438\" data-msgid=\"4409223\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"5 фев\nАлия Зиннюрова\nВы: рисунок не так страшно выглядит"}},{"node":{"type":"node","selector":"._im_dialog_202718851","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,24,LI","snippet":"\u003cli data-list-id=\"202718851\" class=\"nim-dialog _im_dialog _im_dialog_202718851 \" data-peer=\"202718851\" data-msgid=\"4409022\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"5 фев\nАнастасия Григорьева\nВы: я уже посмотрел"}},{"node":{"type":"node","selector":"._im_dialog_-91050183","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,25,LI","snippet":"\u003cli data-list-id=\"-91050183\" class=\"nim-dialog _im_dialog _im_dialog_-91050183 \" data-peer=\"-91050183\" data-msgid=\"4408907\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"5 фев\nЛеонардо Дай Винчик\nПривет! От тебя давно не было активности, поэтому тво…"}},{"node":{"type":"node","selector":"._im_dialog_260154902","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,26,LI","snippet":"\u003cli data-list-id=\"260154902\" class=\"nim-dialog _im_dialog _im_dialog_260154902 \" data-peer=\"260154902\" data-msgid=\"4408777\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"5 фев\nАнна Чиркова\nИли да Я не помню уже) 0)0)"}},{"node":{"type":"node","selector":"._im_dialog_140818864","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,27,LI","snippet":"\u003cli data-list-id=\"140818864\" class=\"nim-dialog _im_dialog _im_dialog_140818864 \" data-peer=\"140818864\" data-msgid=\"4408555\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"5 фев\nЕкатерина Ласкина\nой спасибо"}},{"node":{"type":"node","selector":"._im_dialog_229959355","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,28,LI","snippet":"\u003cli data-list-id=\"229959355\" class=\"nim-dialog _im_dialog _im_dialog_229959355 \" data-peer=\"229959355\" data-msgid=\"4408519\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"5 фев\nАрина Мельникова\nВы: снов"}},{"node":{"type":"node","selector":"._im_dialog_443643293","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,29,LI","snippet":"\u003cli data-list-id=\"443643293\" class=\"nim-dialog _im_dialog _im_dialog_443643293 \" data-peer=\"443643293\" data-msgid=\"4407989\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"4 фев\nФёдор Гаранин\nВы: -нахуя детей рожать, если денег нет? -у мамы спроси"}},{"node":{"type":"node","selector":"._im_dialog_343120441","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,30,LI","snippet":"\u003cli data-list-id=\"343120441\" class=\"nim-dialog _im_dialog _im_dialog_343120441 \" data-peer=\"343120441\" data-msgid=\"4407215\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"4 фев\nКристина Комарова\nВы: Стикер"}},{"node":{"type":"node","selector":"._im_dialog_2000000227","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,31,LI","snippet":"\u003cli data-list-id=\"2000000227\" class=\"nim-dialog _im_dialog _im_dialog_2000000227 \" data-peer=\"2000000227\" data-msgid=\"4406512\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"3 фев\nЗапаска\nМатвей Мыльников вернулся в беседу"}},{"node":{"type":"node","selector":"._im_dialog_219665498","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,32,LI","snippet":"\u003cli data-list-id=\"219665498\" class=\"nim-dialog _im_dialog _im_dialog_219665498 \" data-peer=\"219665498\" data-msgid=\"4406510\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"3 фев\nЕгор Рассказов\nВы: крут_о"}},{"node":{"type":"node","selector":"._im_dialog_217381259","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,33,LI","snippet":"\u003cli data-list-id=\"217381259\" class=\"nim-dialog _im_dialog _im_dialog_217381259 \" data-peer=\"217381259\" data-msgid=\"4405695\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"3 фев\nДемид Зинчевский\nСук Нахуй пиздишь всё время"}},{"node":{"type":"node","selector":"._im_dialog_-175216562","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,34,LI","snippet":"\u003cli data-list-id=\"-175216562\" class=\"nim-dialog _im_dialog _im_dialog_-175216562 \" data-peer=\"-175216562\" data-msgid=\"4405326\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"3 фев\nAudio BOT\nВсего 925 аудиозаписей. Это самая первая страница аудиозаписей,…"}},{"node":{"type":"node","selector":"._im_dialog_189301979","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,35,LI","snippet":"\u003cli data-list-id=\"189301979\" class=\"nim-dialog _im_dialog _im_dialog_189301979 \" data-peer=\"189301979\" data-msgid=\"4403844\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"2 фев\nАня Мурзаева\nНе знаю, у меня с этим проблем нет"}},{"node":{"type":"node","selector":"._im_dialog_178509617","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,36,LI","snippet":"\u003cli data-list-id=\"178509617\" class=\"nim-dialog _im_dialog _im_dialog_178509617 \" data-peer=\"178509617\" data-msgid=\"4402369\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"1 фев\nНастя Аверьянова\nВы: Афера столетия"}},{"node":{"type":"node","selector":"._im_dialog_375035460","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,37,LI","snippet":"\u003cli data-list-id=\"375035460\" class=\"nim-dialog _im_dialog _im_dialog_375035460 \" data-peer=\"375035460\" data-msgid=\"4401839\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"1 фев\nАнастасия Ширяева\nХуцню кинул какую-то"}},{"node":{"type":"node","selector":"._im_dialog_425005169","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,38,LI","snippet":"\u003cli data-list-id=\"425005169\" class=\"nim-dialog _im_dialog _im_dialog_425005169 \" data-peer=\"425005169\" data-msgid=\"4401550\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"31 янв\nMihail Blomfried\nне за что"}},{"node":{"type":"node","selector":"._im_dialog_22583943","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,39,LI","snippet":"\u003cli data-list-id=\"22583943\" class=\"nim-dialog _im_dialog _im_dialog_22583943 \" data-peer=\"22583943\" data-msgid=\"4401167\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"31 янв\nАлла Гущина\nВы: "}},{"node":{"type":"node","selector":"._im_dialog_2000000206","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,1,DIV,1,DIV,0,DIV,0,DIV,0,DIV,0,DIV,0,DIV,1,DIV,1,UL,0,DIV,0,DIV,0,DIV,0,DIV,40,LI","snippet":"\u003cli data-list-id=\"2000000206\" class=\"nim-dialog _im_dialog _im_dialog_2000000206 \" data-peer=\"2000000206\" data-msgid=\"4400853\">","explanation":"Fix any of the following:\n  List item does not have a \u003cul>, \u003col> or role=\"list\" parent element","nodeLabel":"31 янв\nПарк прибрежный\nСвета Ермолаева вышла из беседы"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.structure","wcag2a","wcag131"]}}},"meta-refresh":{"id":"meta-refresh","title":"The document does not use `\u003cmeta http-equiv=\"refresh\">`","description":"Users do not expect a page to refresh automatically, and doing so will move focus back to the top of the page. This may create a frustrating or confusing experience. [Learn more](https://web.dev/meta-refresh/).","score":null,"scoreDisplayMode":"notApplicable"},"meta-viewport":{"id":"meta-viewport","title":"`[user-scalable=\"no\"]` is not used in the `\u003cmeta name=\"viewport\">` element and the `[maximum-scale]` attribute is not less than 5.","description":"Disabling zooming is problematic for users with low vision who rely on screen magnification to properly see the contents of a web page. [Learn more](https://web.dev/meta-viewport/).","score":null,"scoreDisplayMode":"notApplicable"},"object-alt":{"id":"object-alt","title":"`\u003cobject>` elements do not have `[alt]` text","description":"Screen readers cannot translate non-text content. Adding alt text to `\u003cobject>` elements helps screen readers convey meaning to users. [Learn more](https://web.dev/object-alt/).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"node","itemType":"node","text":"Failing Elements"}],"items":[{"node":{"type":"node","selector":"a[href$=\"friends\"] > .left_fixer > object","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,0,NAV,0,OL,3,LI,0,A,0,SPAN,0,OBJECT","snippet":"\u003cobject type=\"internal/link\">\u003ca href=\"/friends?section=requests\" onclick=\"nav.link &amp;&amp; nav.link('/friends?section=requests', event); cancelEvent(event);\" class=\"left_count_wrap fl_r left_void left_count_wrap_hovered\">\u003cspan class=\"inl_bl left_count_sign\">0\u003c/span>\u003c/a>\u003c/object>","explanation":"Fix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"object"}},{"node":{"type":"node","selector":"a[href$=\"apps\"] > .left_fixer > object","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,0,NAV,0,OL,8,LI,0,A,0,SPAN,0,OBJECT","snippet":"\u003cobject type=\"internal/link\">","explanation":"Fix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"object"}},{"node":{"type":"node","selector":"a[href$=\"inysu\"] > .left_fixer > object","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,0,NAV,0,OL,14,LI,0,A,0,SPAN,0,OBJECT","snippet":"\u003cobject type=\"internal/link\">\u003ca href=\"gim156668955\" onclick=\"nav.link &amp;&amp; nav.link('gim156668955', event); cancelEvent(event);\" class=\"left_count_wrap fl_r left_void left_count_wrap_hovered\">\u003cspan class=\"inl_bl left_count_sign\">0\u003c/span>\u003c/a>\u003c/object>","explanation":"Fix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"object"}},{"node":{"type":"node","selector":"a[href$=\"mymp3\"] > .left_fixer > object","path":"1,HTML,1,BODY,11,DIV,0,DIV,0,DIV,1,DIV,0,DIV,0,DIV,0,NAV,0,OL,15,LI,0,A,0,SPAN,0,OBJECT","snippet":"\u003cobject type=\"internal/link\">\u003ca href=\"gim169575510\" onclick=\"nav.link &amp;&amp; nav.link('gim169575510', event); cancelEvent(event);\" class=\"left_count_wrap fl_r left_void left_count_wrap_hovered\">\u003cspan class=\"inl_bl left_count_sign\">0\u003c/span>\u003c/a>\u003c/object>","explanation":"Fix any of the following:\n  Element does not have text that is visible to screen readers\n  aria-label attribute does not exist or is empty\n  aria-labelledby attribute does not exist, references elements that do not exist or references elements that are empty\n  Element has no title attribute or the title attribute is empty\n  Element's default semantics were not overridden with role=\"presentation\"\n  Element's default semantics were not overridden with role=\"none\"","nodeLabel":"object"}}],"debugData":{"type":"debugdata","impact":"serious","tags":["cat.text-alternatives","wcag2a","wcag111","section508","section508.22.a"]}}},"tabindex":{"id":"tabindex","title":"No element has a `[tabindex]` value greater than 0","description":"A value greater than 0 implies an explicit navigation ordering. Although technically valid, this often creates frustrating experiences for users who rely on assistive technologies. [Learn more](https://web.dev/tabindex/).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"td-headers-attr":{"id":"td-headers-attr","title":"Cells in a `\u003ctable>` element that use the `[headers]` attribute refer to table cells within the same table.","description":"Screen readers have features to make navigating tables easier. Ensuring `\u003ctd>` cells using the `[headers]` attribute only refer to other cells in the same table may improve the experience for screen reader users. [Learn more](https://web.dev/td-headers-attr/).","score":null,"scoreDisplayMode":"notApplicable"},"th-has-data-cells":{"id":"th-has-data-cells","title":"`\u003cth>` elements and elements with `[role=\"columnheader\"/\"rowheader\"]` have data cells they describe.","description":"Screen readers have features to make navigating tables easier. Ensuring table headers always refer to some set of cells may improve the experience for screen reader users. [Learn more](https://web.dev/th-has-data-cells/).","score":null,"scoreDisplayMode":"notApplicable"},"valid-lang":{"id":"valid-lang","title":"`[lang]` attributes have a valid value","description":"Specifying a valid [BCP 47 language](https://www.w3.org/International/questions/qa-choosing-language-tags#question) on elements helps ensure that text is pronounced correctly by a screen reader. [Learn more](https://web.dev/valid-lang/).","score":null,"scoreDisplayMode":"notApplicable"},"video-caption":{"id":"video-caption","title":"`\u003cvideo>` elements contain a `\u003ctrack>` element with `[kind=\"captions\"]`","description":"When a video provides a caption it is easier for deaf and hearing impaired users to access its information. [Learn more](https://web.dev/video-caption/).","score":null,"scoreDisplayMode":"notApplicable"},"video-description":{"id":"video-description","title":"`\u003cvideo>` elements contain a `\u003ctrack>` element with `[kind=\"description\"]`","description":"Audio descriptions provide relevant information for videos that dialogue cannot, such as facial expressions and scenes. [Learn more](https://web.dev/video-description/).","score":null,"scoreDisplayMode":"notApplicable"},"custom-controls-labels":{"id":"custom-controls-labels","title":"Custom controls have associated labels","description":"Custom interactive controls have associated labels, provided by aria-label or aria-labelledby. [Learn more](https://web.dev/custom-controls-labels/).","score":null,"scoreDisplayMode":"manual"},"custom-controls-roles":{"id":"custom-controls-roles","title":"Custom controls have ARIA roles","description":"Custom interactive controls have appropriate ARIA roles. [Learn more](https://web.dev/custom-control-roles/).","score":null,"scoreDisplayMode":"manual"},"focus-traps":{"id":"focus-traps","title":"User focus is not accidentally trapped in a region","description":"A user can tab into and out of any control or region without accidentally trapping their focus. [Learn more](https://web.dev/focus-traps/).","score":null,"scoreDisplayMode":"manual"},"focusable-controls":{"id":"focusable-controls","title":"Interactive controls are keyboard focusable","description":"Custom interactive controls are keyboard focusable and display a focus indicator. [Learn more](https://web.dev/focusable-controls/).","score":null,"scoreDisplayMode":"manual"},"heading-levels":{"id":"heading-levels","title":"Headings don't skip levels","description":"Headings are used to create an outline for the page and heading levels are not skipped. [Learn more](https://web.dev/heading-levels/).","score":null,"scoreDisplayMode":"manual"},"interactive-element-affordance":{"id":"interactive-element-affordance","title":"Interactive elements indicate their purpose and state","description":"Interactive elements, such as links and buttons, should indicate their state and be distinguishable from non-interactive elements. [Learn more](https://web.dev/interactive-element-affordance/).","score":null,"scoreDisplayMode":"manual"},"logical-tab-order":{"id":"logical-tab-order","title":"The page has a logical tab order","description":"Tabbing through the page follows the visual layout. Users cannot focus elements that are offscreen. [Learn more](https://web.dev/logical-tab-order/).","score":null,"scoreDisplayMode":"manual"},"managed-focus":{"id":"managed-focus","title":"The user's focus is directed to new content added to the page","description":"If new content, such as a dialog, is added to the page, the user's focus is directed to it. [Learn more](https://web.dev/managed-focus/).","score":null,"scoreDisplayMode":"manual"},"offscreen-content-hidden":{"id":"offscreen-content-hidden","title":"Offscreen content is hidden from assistive technology","description":"Offscreen content is hidden with display: none or aria-hidden=true. [Learn more](https://web.dev/offscreen-content-hidden/).","score":null,"scoreDisplayMode":"manual"},"use-landmarks":{"id":"use-landmarks","title":"HTML5 landmark elements are used to improve navigation","description":"Landmark elements (\u003cmain>, \u003cnav>, etc.) are used to improve the keyboard navigation of the page for assistive technology. [Learn more](https://web.dev/use-landmarks/).","score":null,"scoreDisplayMode":"manual"},"visual-order-follows-dom":{"id":"visual-order-follows-dom","title":"Visual order on the page follows DOM order","description":"DOM order matches the visual order, improving navigation for assistive technology. [Learn more](https://web.dev/visual-order-follows-dom/).","score":null,"scoreDisplayMode":"manual"},"uses-long-cache-ttl":{"id":"uses-long-cache-ttl","title":"Serve static assets with an efficient cache policy","description":"A long cache lifetime can speed up repeat visits to your page. [Learn more](https://web.dev/uses-long-cache-ttl).","score":0.03,"scoreDisplayMode":"numeric","numericValue":1143324.5156424574,"displayValue":"186 resources found","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"cacheLifetimeMs","itemType":"ms","text":"Cache TTL","displayUnit":"duration"},{"key":"totalBytes","itemType":"bytes","text":"Size","displayUnit":"kb","granularity":1}],"items":[{"url":"https://vk.com/js/cmodules/bundles/common.f9aa137d1936b427a71f.js?1af4e6467e56265f698e","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":182137,"wastedBytes":182137},{"url":"https://vk.com/js/cmodules/web/imn.34cb1f710da61297904a.js?9173e06c57a4d42ff968efc42971a581","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":156464,"wastedBytes":156464},{"url":"https://vk.com/js/cmodules/web/page.98ca34cb8d19ee85c5ff.js?dc387d23a548915172ee5781fbb3742b","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":75413,"wastedBytes":75413},{"url":"https://vk.com/js/cmodules/web/notifier.8b87be24e14f75030112.js?e74bb06de95c167ee254ad0f4ef0f8e0","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":57581,"wastedBytes":57581},{"url":"https://vk.com/js/cmodules/bundles/37d6fe1fee6fb6accf5867cbca2cda9c.4e530afdef35f11d2df5.js?7d2f356e98d88e1ce67d","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":56134,"wastedBytes":56134},{"url":"https://vk.com/js/cmodules/bundles/audioplayer.a2bcf5cd167220bca5c1.js?806c0812db4504deb56e","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":47734,"wastedBytes":47734},{"url":"https://vk.com/js/cmodules/bundles/vendors.70cc452207d7ab2329a5.js?1d1c845c51f848b67a36","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":45822,"wastedBytes":45822},{"url":"https://vk.com/js/cmodules/bundles/7ff0c31fd89ceca852f0cf5e2f61c8c8.8aeb6622f5c9b59771b2.js?c09f30a027d701dc8587","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":38913,"wastedBytes":38913},{"url":"https://vk.com/js/cmodules/web/emoji.de9c835a122e47f22ac6.js?732305db39831fad7ece024d876b556f","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":38668,"wastedBytes":38668},{"url":"https://vk.com/js/cmodules/web/common_web.42248fd47410eec0b0d7.js?ed0c06315473bf39f8b1a7b416c8bce6","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":25344,"wastedBytes":25344},{"url":"https://vk.com/js/cmodules/web/ui_common.9ff7746100a47e4220e6.js?319637faff2531939acf3ff781f88833","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":17629,"wastedBytes":17629},{"url":"https://vk.com/js/cmodules/web/ads_light.3db037bff657a6ba09d9.js?0ec0e6eca5e172fbcc0138cbccd59eb0","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":11782,"wastedBytes":11782},{"url":"https://vk.com/js/cmodules/bundles/6f8e323c10c73c1d3201e061de48a706.3a587b6a7b84fae81003.js?99c22e8228dd19ecbae7","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":9584,"wastedBytes":9584},{"url":"https://vk.com/js/cmodules/web/privacy.5d775791326f431ee43f.js?47e1914c882f00c3fd721d45ef8566d5","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":7828,"wastedBytes":7828},{"url":"https://vk.com/js/cmodules/web/voice_message_player.a1676acc90ba0bbe67a9.js?f11007871be076612f480a0d599d6fff","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":7805,"wastedBytes":7805},{"url":"https://vk.com/js/cmodules/web/likes.691d77af4cde27d80cb8.js?285ec59b20333a4d20142e4885efe16c","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":5957,"wastedBytes":5957},{"url":"https://vk.com/js/cmodules/bundles/d12423227016dc98c5accc7443eabdcc.bbc554f7742b2e21b2d9.js?0bea1f720a477a03680d","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":5433,"wastedBytes":5433},{"url":"https://vk.com/js/cmodules/web/stickers.5f918cd6033976c9de76.js?2249ce571119f6bd08729d6d185b321a","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":5233,"wastedBytes":5233},{"url":"https://vk.com/js/cmodules/web/indexer.e94224835d680526eb5f.js?38c2fdf1a6af34ad7b72ff0b47302112","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":5109,"wastedBytes":5109},{"url":"https://vk.com/js/cmodules/bundles/2a07abfbd40f8c4643e6e2ece64890b7.3b736c8d8102825e57dc.js?361c7d30d2ff0ac91182","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":4103,"wastedBytes":4103},{"url":"https://vk.com/js/cmodules/bundles/eacb1b9f9931571fe94e0a9cbbe77241.8acd3943b71563a1ebec.js?b824d1d73bcd0a8b740c","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":3941,"wastedBytes":3941},{"url":"https://vk.com/js/cmodules/web/app_use_time.fd676af40680d53b3dbf.js?3bf6bfe5387fb19cbd3f68e81f6aa510","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":2835,"wastedBytes":2835},{"url":"https://vk.com/js/cmodules/web/page_layout.e079bad139c8a3e4b497.js?317c95c50b7f8c8515b2","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":2461,"wastedBytes":2461},{"url":"https://vk.com/js/cmodules/web/time_spent.4987e900aea02b1e427c.js?a864013130678faf429c","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":2335,"wastedBytes":2335},{"url":"https://vk.com/js/cmodules/web/ui_media_selector.293b2b7cae39ed4bcee7.js?c490a4fc2c76babd1b97697a7d0730f3","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":1906,"wastedBytes":1906},{"url":"https://sun7-7.userapi.com/oCKp0G0lzp7OBk-crMZVK6IAohihwd0CmZlxNg/nxqYBlj27Dw.jpg?ava=1","cacheLifetimeMs":0,"cacheHitProbability":0,"totalBytes":354,"wastedBytes":354},{"url":"https://vk.com/css/al/page.css?106479185658","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":128064,"wastedBytes":22411.19999999999},{"url":"https://vk.com/mp3/bb1.mp3?1","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":125605,"wastedBytes":21980.874999999993},{"url":"https://vk.com/css/al/fonts_cnt_mac.css?1","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":122849,"wastedBytes":21498.574999999993},{"url":"https://vk.com/mp3/bb2.mp3?1","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":106445,"wastedBytes":18627.874999999993},{"url":"https://vk.com/mp3/bb3.mp3?1","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":73235,"wastedBytes":12816.124999999995},{"url":"https://vk.com/css/al/common.css?79933029488","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":63610,"wastedBytes":11131.749999999996},{"url":"https://vk.com/css/al/notifier.css?44783172318","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":56753,"wastedBytes":9931.774999999996},{"url":"https://vk.com/js/lib/ui_controls.js?606078431","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":46084,"wastedBytes":8064.699999999997},{"url":"https://vk.com/css/al/im.css?175119436649","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":45369,"wastedBytes":7939.574999999997},{"url":"https://vk.com/js/loader_nav9418706_0.js","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":31605,"wastedBytes":5530.874999999998},{"url":"https://vk.com/css/al/ui_common.css?24332766487","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":22906,"wastedBytes":4008.5499999999984},{"url":"https://vk.com/js/al/docs.js?2807273049","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":16596,"wastedBytes":2904.299999999999},{"url":"https://vk.com/js/al/upload.js?3579182903","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":15386,"wastedBytes":2692.549999999999},{"url":"https://vk.com/js/lang0_0.js?26354315","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":14041,"wastedBytes":2457.1749999999993},{"url":"https://vk.com/css/al/post.css?38525983065","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":13123,"wastedBytes":2296.524999999999},{"url":"https://vk.com/css/al/base.css?1","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":11194,"wastedBytes":1958.9499999999994},{"url":"https://vk.com/css/al/aes_light.css?35634885009","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":7101,"wastedBytes":1242.6749999999995},{"url":"https://vk.com/js/al/datepicker.js?3747769347","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":6968,"wastedBytes":1219.3999999999996},{"url":"https://vk.com/css/al/ui_media_selector.css?43131705432","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":6408,"wastedBytes":1121.3999999999996},{"url":"https://vk.com/js/al/wide_dd.js?3516210135","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":6013,"wastedBytes":1052.2749999999996},{"url":"https://vk.com/js/al/mrtarg.js?1146267795","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":4677,"wastedBytes":818.4749999999997},{"url":"https://vk.com/css/al/privacy.css?22235048718","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":3365,"wastedBytes":588.8749999999998},{"url":"https://vk.com/css/al/wide_dd.css?21191712835","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":1890,"wastedBytes":330.7499999999999},{"url":"https://vk.com/css/al/datepicker.css?26232710886","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":1590,"wastedBytes":278.2499999999999},{"url":"https://vk.com/css/al/fonts_utf.css?1","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":1481,"wastedBytes":259.1749999999999},{"url":"https://vk.com/js/lib/px.js?ch=1","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":724,"wastedBytes":126.69999999999995},{"url":"https://vk.com/js/lib/px.js?ch=2","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":724,"wastedBytes":126.69999999999995},{"url":"https://vk.com/css/al/mrtarg.css?3142794554","debugData":{"type":"debugdata","max-age":345600},"cacheLifetimeMs":345600000,"cacheHitProbability":0.8250000000000001,"totalBytes":378,"wastedBytes":66.14999999999998},{"url":"https://sun9-18.userapi.com/c204620/v204620611/511bc/m8LcZ6vb8fc.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":237664,"wastedBytes":23766.399999999994},{"url":"https://sun9-27.userapi.com/c855336/v855336529/1e3227/7Yb-CnVEP0Q.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":191901,"wastedBytes":19190.099999999995},{"url":"https://sun9-67.userapi.com/c856132/v856132733/1e0f9b/wKaSosV-zco.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":127722,"wastedBytes":12772.199999999997},{"url":"https://sun9-11.userapi.com/c850416/v850416038/1b7e79/_vH4VlVwdcM.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":111152,"wastedBytes":11115.199999999997},{"url":"https://sun9-15.userapi.com/c857128/v857128038/ce973/_2e-SQRf2k4.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":106886,"wastedBytes":10688.599999999997},{"url":"https://sun9-60.userapi.com/c858232/v858232408/171797/P8mZ7gdGEys.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":104702,"wastedBytes":10470.199999999997},{"url":"https://sun9-41.userapi.com/c204524/v204524565/56f79/Dmb2f516y34.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":90448,"wastedBytes":9044.799999999997},{"url":"https://sun9-44.userapi.com/c857128/v857128967/d3e2d/Ho6_aKfuWJQ.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":73622,"wastedBytes":7362.199999999998},{"url":"https://sun9-17.userapi.com/c855736/v855736348/1eeb2b/l-afB72kyTk.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":63914,"wastedBytes":6391.399999999999},{"url":"https://vk.com/fonts/NotoSansBengali-Regular.woff","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":55058,"wastedBytes":5505.799999999998},{"url":"https://sun9-38.userapi.com/c855636/v855636344/1eaaab/EF4Q_bMuIUE.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":47814,"wastedBytes":4781.399999999999},{"url":"https://sun9-64.userapi.com/c854520/v854520064/1eea2a/DHa38s_SaTU.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":45305,"wastedBytes":4530.499999999999},{"url":"https://sun9-58.userapi.com/c855124/v855124915/1e7f04/-xx0L71GN4Q.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":40000,"wastedBytes":3999.999999999999},{"url":"https://sun9-46.userapi.com/c854328/v854328116/1ddf1f/qyufo5cGav4.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":37739,"wastedBytes":3773.899999999999},{"url":"https://sun9-67.userapi.com/c200824/v200824846/6000c/wt6521_aqmM.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":35037,"wastedBytes":3503.6999999999994},{"url":"https://sun9-61.userapi.com/c205824/v205824344/538d4/yDSsCJ39NDs.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":30987,"wastedBytes":3098.6999999999994},{"url":"https://sun9-13.userapi.com/c856020/v856020934/1f4114/pqyNcAskIvQ.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":25383,"wastedBytes":2538.2999999999993},{"url":"https://sun9-69.userapi.com/c200616/v200616399/5535e/U-kHbLyQf5M.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":23610,"wastedBytes":2360.9999999999995},{"url":"https://sun9-6.userapi.com/c204824/v204824271/53f80/zTmKpgzR8x0.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":22102,"wastedBytes":2210.1999999999994},{"url":"https://sun9-57.userapi.com/c856036/v856036116/1e9e4e/1PzSMW0jITg.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":19683,"wastedBytes":1968.2999999999995},{"url":"https://sun9-20.userapi.com/c844321/v844321049/f639f/_jNkBXi09dg.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":6811,"wastedBytes":681.0999999999998},{"url":"https://sun9-56.userapi.com/c857128/v857128967/d3e2c/n9ILxKoPjLY.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":6733,"wastedBytes":673.2999999999998},{"url":"https://sun9-42.userapi.com/c856032/v856032915/1e32aa/1ftU6bnAtjg.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":6699,"wastedBytes":669.8999999999999},{"url":"https://sun9-24.userapi.com/c857324/v857324915/c9d7b/NSavgUxjRnU.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":6657,"wastedBytes":665.6999999999998},{"url":"https://sun9-41.userapi.com/c855124/v855124915/1e7efd/9fdl3a_Z6LY.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":6635,"wastedBytes":663.4999999999999},{"url":"https://sun9-2.userapi.com/c858436/v858436915/15c726/1J6EJVRMu9Y.jpg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":6062,"wastedBytes":606.1999999999998},{"url":"https://vk.com/images/icons/im_actions.png?7","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":4069,"wastedBytes":406.8999999999999},{"url":"https://vk.com/images/post_icon.png?10","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":2711,"wastedBytes":271.09999999999997},{"url":"https://sun7-7.userapi.com/c850120/v850120318/1d6b4a/hYjL_nqcLPo.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":2169,"wastedBytes":216.89999999999995},{"url":"https://vk.com/images/icons/common.png?6","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":2143,"wastedBytes":214.29999999999995},{"url":"https://vk.com/images/icons/chats.png?14","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":1773,"wastedBytes":177.29999999999995},{"url":"https://vk.com/images/blank.mp4","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":1768,"wastedBytes":176.79999999999995},{"url":"https://vk.com/images/svg_icons/votings/voting.svg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":1510,"wastedBytes":150.99999999999997},{"url":"https://vk.com/images/icons/msg_check.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":1017,"wastedBytes":101.69999999999997},{"url":"https://vk.com/images/svg_icons/ic_head_logo.svg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":1015,"wastedBytes":101.49999999999997},{"url":"https://vk.com/images/icons/bookmarks_outline_24.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":994,"wastedBytes":99.39999999999998},{"url":"https://vk.com/emoji/e/f09fa4a0.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":981,"wastedBytes":98.09999999999998},{"url":"https://vk.com/emoji/e/f09f98ad.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":909,"wastedBytes":90.89999999999998},{"url":"https://vk.com/emoji/e/f09f98a1.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":887,"wastedBytes":88.69999999999997},{"url":"https://vk.com/emoji/e/f09f9885.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":878,"wastedBytes":87.79999999999998},{"url":"https://vk.com/emoji/e/f09f989c.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":847,"wastedBytes":84.69999999999997},{"url":"https://vk.com/emoji/e/f09f9884.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":836,"wastedBytes":83.59999999999998},{"url":"https://vk.com/emoji/e/e29da4.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":822,"wastedBytes":82.19999999999999},{"url":"https://vk.com/emoji/e/f09f918d.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":814,"wastedBytes":81.39999999999998},{"url":"https://vk.com/emoji/e/f09f988e.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":814,"wastedBytes":81.39999999999998},{"url":"https://vk.com/emoji/e/f09fa496.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":781,"wastedBytes":78.09999999999998},{"url":"https://vk.com/images/svg_icons/ic_head_audio.svg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":770,"wastedBytes":76.99999999999999},{"url":"https://vk.com/images/icons/camera.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":752,"wastedBytes":75.19999999999999},{"url":"https://vk.com/images/icons/empty_icon.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":686,"wastedBytes":68.59999999999998},{"url":"https://vk.com/emoji/e/f09f9186f09f8fbb.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":613,"wastedBytes":61.29999999999998},{"url":"https://vk.com/images/svg_icons/ic_head_loupe.svg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":597,"wastedBytes":59.69999999999999},{"url":"https://vk.com/images/icons/msg_cog.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":596,"wastedBytes":59.59999999999999},{"url":"https://vk.com/images/svg_icons/ic_head_notify.svg","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":580,"wastedBytes":57.999999999999986},{"url":"https://vk.com/images/icons/mute_icons.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":567,"wastedBytes":56.69999999999999},{"url":"https://vk.com/images/search_icon.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":517,"wastedBytes":51.69999999999999},{"url":"https://sun9-66.userapi.com/c834204/v834204749/1442de/RRVMMZ0Dcq0.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":500,"wastedBytes":49.999999999999986},{"url":"https://sun9-15.userapi.com/c854528/v854528428/1f0044/z3GtWAg6Ah8.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-24.userapi.com/c855032/v855032300/19df59/CXHrirphawQ.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-26.userapi.com/c857436/v857436512/131825/r1xOdyA9JiM.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-27.userapi.com/c857632/v857632618/16ca40/W4Vj4HeCDJU.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-29.userapi.com/c836427/v836427943/2ea31/1Ea0KbS2gI8.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-31.userapi.com/c858324/v858324846/f27ab/zpp6Z031k5c.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-33.userapi.com/c853528/v853528919/1d99ce/1jjGDu6O9E4.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-35.userapi.com/c854120/v854120178/15d339/tgUCwCGzxqk.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-36.userapi.com/c840327/v840327627/35ebf/i8Ai-ONyPKk.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-39.userapi.com/c841335/v841335361/577bb/nnF8XRJg9k0.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-42.userapi.com/c853620/v853620484/1a69d9/f5fOW5aBmeY.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-44.userapi.com/c625127/v625127835/56028/gnijwdSeFqY.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-47.userapi.com/c855120/v855120885/1f42be/hk8HK6FNmXM.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-49.userapi.com/c853420/v853420087/bce89/L2DzIzrLDfs.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-5.userapi.com/c845324/v845324675/ef3e5/kg458vI5WpI.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-50.userapi.com/c854228/v854228269/e7c58/OizHMqBo_rA.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-51.userapi.com/c853628/v853628099/1c83df/dqv0XuMPChU.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-52.userapi.com/c856036/v856036592/136943/X64gVHguhfU.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-59.userapi.com/c858320/v858320211/15058f/9tAcqn6gkaw.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-62.userapi.com/c622019/v622019972/44fec/hXTJu_BK1A8.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-64.userapi.com/c851416/v851416039/1b254b/TEOUR63c304.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-66.userapi.com/c624624/v624624883/16f20/vfX1bBMxu64.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-67.userapi.com/c854524/v854524029/19ae0f/L6ylOWFCFf4.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-7.userapi.com/c855416/v855416314/1d67c0/JdH7BFmkR2U.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-70.userapi.com/c857520/v857520754/178715/TswiTBPEPhg.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-71.userapi.com/c200624/v200624590/40a20/sB_gmTqJ8EE.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-72.userapi.com/c851416/v851416569/1ae33b/Qp-ZijCE8G0.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":496,"wastedBytes":49.59999999999999},{"url":"https://sun9-44.userapi.com/c853420/v853420279/18d0cb/mQNO2wfT12E.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":495,"wastedBytes":49.499999999999986},{"url":"https://vk.com/images/upload.gif","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":482,"wastedBytes":48.19999999999999},{"url":"https://sun9-16.userapi.com/c849024/v849024053/67755/HtxJS3azsOY.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":474,"wastedBytes":47.39999999999999},{"url":"https://sun9-36.userapi.com/c857420/v857420223/b22d3/P9v6lcoy09Q.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":474,"wastedBytes":47.39999999999999},{"url":"https://sun9-49.userapi.com/c847017/v847017333/2117f1/AZfOmNH2GIg.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":474,"wastedBytes":47.39999999999999},{"url":"https://sun9-59.userapi.com/c858236/v858236881/16cb00/mD0xGlYFVVA.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":474,"wastedBytes":47.39999999999999},{"url":"https://sun9-66.userapi.com/c857232/v857232030/263c7/j-SvMu89V5M.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":474,"wastedBytes":47.39999999999999},{"url":"https://sun9-67.userapi.com/c204624/v204624981/c811/mAItpnOwPWY.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":474,"wastedBytes":47.39999999999999},{"url":"https://sun9-9.userapi.com/c858136/v858136420/a64a3/0QQ_iT2en24.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":474,"wastedBytes":47.39999999999999},{"url":"https://sun7-6.userapi.com/c204724/v204724086/25674/YaFexqMvHug.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-6.userapi.com/c854124/v854124084/bbe33/wYhL9iqTAFY.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-6.userapi.com/c854320/v854320474/1e8676/4CkqqrRs34E.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-6.userapi.com/c855420/v855420738/14d608/kGwlZ4eV4rA.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-7.userapi.com/c851124/v851124435/6130b/atw5GNJO-lQ.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-7.userapi.com/c853520/v853520693/1db838/mbSQ0yNkVV0.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-7.userapi.com/c855032/v855032745/ca9fe/PeaJGda-aGw.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-7.userapi.com/c856032/v856032498/1d1aa7/fz-Gf-AjRyQ.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-7.userapi.com/c858028/v858028442/1785ae/MoBogR13-m8.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-8.userapi.com/c837624/v837624306/48ae0/3jDNrPo-558.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-8.userapi.com/c855628/v855628669/1c5a88/CIHnjSh5-W4.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-9.userapi.com/c206820/v206820105/1ed2d/fixZFPKUOdE.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-9.userapi.com/c844521/v844521737/1e282f/IcccFwzSTAU.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-9.userapi.com/c854120/v854120569/18fdb8/DM8hpiEBPi8.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-9.userapi.com/c854420/v854420418/1c2a8a/YeTePnhBnIg.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-9.userapi.com/c857520/v857520696/7cc73/SoEiSJvPda8.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-9.userapi.com/c858028/v858028915/b0d05/K_dApSQWFLY.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://sun7-9.userapi.com/c858128/v858128490/4bbd6/6jI7sgfv17A.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":471,"wastedBytes":47.09999999999999},{"url":"https://vk.com/images/backlink.gif?4","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":412,"wastedBytes":41.19999999999999},{"url":"https://vk.com/images/cross.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":410,"wastedBytes":40.99999999999999},{"url":"https://vk.com/images/icons/menu_arrow.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":386,"wastedBytes":38.599999999999994},{"url":"https://sun7-6.userapi.com/c854124/v854124084/bbe33/wYhL9iqTAFY.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun7-6.userapi.com/c854320/v854320474/1e8676/4CkqqrRs34E.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun7-7.userapi.com/c855032/v855032745/ca9fe/PeaJGda-aGw.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun7-9.userapi.com/c844521/v844521737/1e282f/IcccFwzSTAU.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun7-9.userapi.com/c857520/v857520696/7cc73/SoEiSJvPda8.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun9-29.userapi.com/c836427/v836427943/2ea31/1Ea0KbS2gI8.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun9-36.userapi.com/c840327/v840327627/35ebf/i8Ai-ONyPKk.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun9-39.userapi.com/c841335/v841335361/577bb/nnF8XRJg9k0.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun9-44.userapi.com/c853420/v853420279/18d0cb/mQNO2wfT12E.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun9-47.userapi.com/c855120/v855120885/1f42be/hk8HK6FNmXM.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun9-5.userapi.com/c845324/v845324675/ef3e5/kg458vI5WpI.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun9-50.userapi.com/c854228/v854228269/e7c58/OizHMqBo_rA.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun9-64.userapi.com/c851416/v851416039/1b254b/TEOUR63c304.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://sun9-67.userapi.com/c854524/v854524029/19ae0f/L6ylOWFCFf4.jpg?ava=1","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://vk.com/emoji/e/f09f988e.png","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://vk.com/images/icons/im_actions.png?7","debugData":{"type":"debugdata","max-age":604800},"cacheLifetimeMs":604800000,"cacheHitProbability":0.9,"totalBytes":0,"wastedBytes":0},{"url":"https://vk.com/sticker/1-12832-128","debugData":{"type":"debugdata","max-age":2592000},"cacheLifetimeMs":2592000000,"cacheHitProbability":0.9064245810055866,"totalBytes":11447,"wastedBytes":1071.1578212290497},{"url":"https://vk.com/sticker/1-16371-128","debugData":{"type":"debugdata","max-age":2592000},"cacheLifetimeMs":2592000000,"cacheHitProbability":0.9064245810055866,"totalBytes":6349,"wastedBytes":594.1103351955304},{"url":"https://vk.com/sticker/1-6129-128","debugData":{"type":"debugdata","max-age":2592000},"cacheLifetimeMs":2592000000,"cacheHitProbability":0.9064245810055866,"totalBytes":5456,"wastedBytes":510.54748603351925}],"summary":{"wastedBytes":1143324.5156424574}}},"total-byte-weight":{"id":"total-byte-weight","title":"Avoid enormous network payloads","description":"Large network payloads cost users real money and are highly correlated with long load times. [Learn more](https://web.dev/total-byte-weight).","score":0.62,"scoreDisplayMode":"numeric","numericValue":3730263,"displayValue":"Total size was 3,643 KB","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"totalBytes","itemType":"bytes","text":"Size"}],"items":[{"url":"https://sun9-18.userapi.com/c204620/v204620611/511bc/m8LcZ6vb8fc.jpg","totalBytes":237664},{"url":"https://sun9-27.userapi.com/c855336/v855336529/1e3227/7Yb-CnVEP0Q.jpg","totalBytes":191901},{"url":"https://vk.com/js/cmodules/bundles/common.f9aa137d1936b427a71f.js?1af4e6467e56265f698e","totalBytes":182137},{"url":"https://vk.com/js/cmodules/web/imn.34cb1f710da61297904a.js?9173e06c57a4d42ff968efc42971a581","totalBytes":156464},{"url":"https://vk.com/css/al/page.css?106479185658","totalBytes":128064},{"url":"https://sun9-67.userapi.com/c856132/v856132733/1e0f9b/wKaSosV-zco.jpg","totalBytes":127722},{"url":"https://vk.com/mp3/bb1.mp3?1","totalBytes":125605},{"url":"https://vk.com/css/al/fonts_cnt_mac.css?1","totalBytes":122849},{"url":"https://sun9-11.userapi.com/c850416/v850416038/1b7e79/_vH4VlVwdcM.jpg","totalBytes":111152},{"url":"https://sun9-15.userapi.com/c857128/v857128038/ce973/_2e-SQRf2k4.jpg","totalBytes":106886}]}},"offscreen-images":{"id":"offscreen-images","title":"Defer offscreen images","description":"Consider lazy-loading offscreen and hidden images after all critical resources have finished loading to lower time to interactive. [Learn more](https://web.dev/offscreen-images).","score":0,"scoreDisplayMode":"numeric","numericValue":7650,"displayValue":"Potential savings of 1,445 KB","warnings":[],"details":{"type":"opportunity","headings":[{"key":"url","valueType":"thumbnail","label":""},{"key":"url","valueType":"url","label":"URL"},{"key":"totalBytes","valueType":"bytes","label":"Size"},{"key":"wastedBytes","valueType":"bytes","label":"Potential Savings"}],"items":[{"url":"https://sun9-18.userapi.com/c204620/v204620611/511bc/m8LcZ6vb8fc.jpg","requestStartTime":2006976.554749,"totalBytes":237188,"wastedBytes":237188,"wastedPercent":100},{"url":"https://sun9-27.userapi.com/c855336/v855336529/1e3227/7Yb-CnVEP0Q.jpg","requestStartTime":2006976.55701,"totalBytes":191426,"wastedBytes":191426,"wastedPercent":100},{"url":"https://sun9-67.userapi.com/c856132/v856132733/1e0f9b/wKaSosV-zco.jpg","requestStartTime":2006977.444757,"totalBytes":127722,"wastedBytes":127722,"wastedPercent":100},{"url":"https://sun9-11.userapi.com/c850416/v850416038/1b7e79/_vH4VlVwdcM.jpg","requestStartTime":2006977.683462,"totalBytes":111152,"wastedBytes":111152,"wastedPercent":100},{"url":"https://sun9-15.userapi.com/c857128/v857128038/ce973/_2e-SQRf2k4.jpg","requestStartTime":2006977.75821,"totalBytes":106886,"wastedBytes":106886,"wastedPercent":100},{"url":"https://sun9-60.userapi.com/c858232/v858232408/171797/P8mZ7gdGEys.jpg","requestStartTime":2006977.838298,"totalBytes":104702,"wastedBytes":104702,"wastedPercent":100},{"url":"https://sun9-41.userapi.com/c204524/v204524565/56f79/Dmb2f516y34.jpg","requestStartTime":2006977.683321,"totalBytes":90448,"wastedBytes":90448,"wastedPercent":100},{"url":"https://sun9-44.userapi.com/c857128/v857128967/d3e2d/Ho6_aKfuWJQ.jpg","requestStartTime":2006977.849525,"totalBytes":73622,"wastedBytes":73622,"wastedPercent":100},{"url":"https://sun9-17.userapi.com/c855736/v855736348/1eeb2b/l-afB72kyTk.jpg","requestStartTime":2006976.569913,"totalBytes":63914,"wastedBytes":63914,"wastedPercent":100},{"url":"https://sun9-38.userapi.com/c855636/v855636344/1eaaab/EF4Q_bMuIUE.jpg","requestStartTime":2006976.558872,"totalBytes":47814,"wastedBytes":47814,"wastedPercent":100},{"url":"https://sun9-64.userapi.com/c854520/v854520064/1eea2a/DHa38s_SaTU.jpg","requestStartTime":2006977.683168,"totalBytes":44808,"wastedBytes":44808,"wastedPercent":100},{"url":"https://sun9-58.userapi.com/c855124/v855124915/1e7f04/-xx0L71GN4Q.jpg","requestStartTime":2006976.903747,"totalBytes":40000,"wastedBytes":40000,"wastedPercent":100},{"url":"https://sun9-46.userapi.com/c854328/v854328116/1ddf1f/qyufo5cGav4.jpg","requestStartTime":2006977.329463,"totalBytes":37264,"wastedBytes":37264,"wastedPercent":100},{"url":"https://sun9-67.userapi.com/c200824/v200824846/6000c/wt6521_aqmM.jpg","requestStartTime":2006981.741199,"totalBytes":34540,"wastedBytes":34540,"wastedPercent":100},{"url":"https://sun9-61.userapi.com/c205824/v205824344/538d4/yDSsCJ39NDs.jpg","requestStartTime":2006976.559322,"totalBytes":30987,"wastedBytes":30987,"wastedPercent":100},{"url":"https://sun9-13.userapi.com/c856020/v856020934/1f4114/pqyNcAskIvQ.jpg","requestStartTime":2006977.906662,"totalBytes":24908,"wastedBytes":24908,"wastedPercent":100},{"url":"https://sun9-69.userapi.com/c200616/v200616399/5535e/U-kHbLyQf5M.jpg","requestStartTime":2006977.670654,"totalBytes":23610,"wastedBytes":23610,"wastedPercent":100},{"url":"https://sun9-6.userapi.com/c204824/v204824271/53f80/zTmKpgzR8x0.jpg","requestStartTime":2006977.394002,"totalBytes":22102,"wastedBytes":22102,"wastedPercent":100},{"url":"https://sun9-57.userapi.com/c856036/v856036116/1e9e4e/1PzSMW0jITg.jpg","requestStartTime":2006977.318136,"totalBytes":19683,"wastedBytes":19683,"wastedPercent":100},{"url":"https://sun9-20.userapi.com/c844321/v844321049/f639f/_jNkBXi09dg.jpg","requestStartTime":2006976.564996,"totalBytes":6811,"wastedBytes":6811,"wastedPercent":100},{"url":"https://sun9-56.userapi.com/c857128/v857128967/d3e2c/n9ILxKoPjLY.jpg","requestStartTime":2006977.858285,"totalBytes":6733,"wastedBytes":6733,"wastedPercent":100},{"url":"https://sun9-42.userapi.com/c856032/v856032915/1e32aa/1ftU6bnAtjg.jpg","requestStartTime":2006976.905464,"totalBytes":6699,"wastedBytes":6699,"wastedPercent":100},{"url":"https://sun9-24.userapi.com/c857324/v857324915/c9d7b/NSavgUxjRnU.jpg","requestStartTime":2006976.904982,"totalBytes":6657,"wastedBytes":6657,"wastedPercent":100},{"url":"https://sun9-41.userapi.com/c855124/v855124915/1e7efd/9fdl3a_Z6LY.jpg","requestStartTime":2006977.31781,"totalBytes":6635,"wastedBytes":6635,"wastedPercent":100},{"url":"https://sun9-2.userapi.com/c858436/v858436915/15c726/1J6EJVRMu9Y.jpg","requestStartTime":2006977.126434,"totalBytes":6062,"wastedBytes":6062,"wastedPercent":100},{"url":"https://vk.com/sticker/1-6129-128","requestStartTime":2006975.166625,"totalBytes":5456,"wastedBytes":5456,"wastedPercent":100},{"url":"https://vk.com/images/icons/common.png?6","requestStartTime":2006975.251843,"totalBytes":2143,"wastedBytes":2143,"wastedPercent":100}],"overallSavingsMs":7650,"overallSavingsBytes":1479972}},"render-blocking-resources":{"id":"render-blocking-resources","title":"Eliminate render-blocking resources","description":"Resources are blocking the first paint of your page. Consider delivering critical JS/CSS inline and deferring all non-critical JS/styles. [Learn more](https://web.dev/render-blocking-resources).","score":0,"scoreDisplayMode":"numeric","numericValue":7162,"displayValue":"Potential savings of 7,160 ms","details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"totalBytes","valueType":"bytes","label":"Size"},{"key":"wastedMs","valueType":"timespanMs","label":"Potential Savings"}],"items":[{"url":"https://vk.com/css/al/common.css?79933029488","totalBytes":63610,"wastedMs":750},{"url":"https://vk.com/css/al/base.css?1","totalBytes":11194,"wastedMs":150},{"url":"https://vk.com/css/al/fonts_cnt_mac.css?1","totalBytes":122849,"wastedMs":600},{"url":"https://vk.com/css/al/ui_common.css?24332766487","totalBytes":22906,"wastedMs":150},{"url":"https://vk.com/css/al/notifier.css?44783172318","totalBytes":56753,"wastedMs":300},{"url":"https://vk.com/css/al/im.css?175119436649","totalBytes":45369,"wastedMs":150},{"url":"https://vk.com/css/al/page.css?106479185658","totalBytes":128064,"wastedMs":600},{"url":"https://vk.com/css/al/privacy.css?22235048718","totalBytes":3365,"wastedMs":150},{"url":"https://vk.com/js/loader_nav9418706_0.js","totalBytes":31605,"wastedMs":150},{"url":"https://vk.com/js/cmodules/bundles/audioplayer.a2bcf5cd167220bca5c1.js?806c0812db4504deb56e","totalBytes":47734,"wastedMs":300},{"url":"https://vk.com/js/cmodules/bundles/common.f9aa137d1936b427a71f.js?1af4e6467e56265f698e","totalBytes":182137,"wastedMs":900},{"url":"https://vk.com/js/cmodules/web/common_web.42248fd47410eec0b0d7.js?ed0c06315473bf39f8b1a7b416c8bce6","totalBytes":25344,"wastedMs":150},{"url":"https://vk.com/js/cmodules/web/ui_common.9ff7746100a47e4220e6.js?319637faff2531939acf3ff781f88833","totalBytes":17629,"wastedMs":150},{"url":"https://vk.com/js/al/docs.js?2807273049","totalBytes":16596,"wastedMs":300},{"url":"https://vk.com/js/cmodules/web/emoji.de9c835a122e47f22ac6.js?732305db39831fad7ece024d876b556f","totalBytes":38668,"wastedMs":150},{"url":"https://vk.com/js/cmodules/bundles/vendors.70cc452207d7ab2329a5.js?1d1c845c51f848b67a36","totalBytes":45822,"wastedMs":450},{"url":"https://vk.com/js/cmodules/web/imn.34cb1f710da61297904a.js?9173e06c57a4d42ff968efc42971a581","totalBytes":156464,"wastedMs":750},{"url":"https://vk.com/js/cmodules/bundles/37d6fe1fee6fb6accf5867cbca2cda9c.4e530afdef35f11d2df5.js?7d2f356e98d88e1ce67d","totalBytes":56134,"wastedMs":450},{"url":"https://vk.com/js/cmodules/web/notifier.8b87be24e14f75030112.js?e74bb06de95c167ee254ad0f4ef0f8e0","totalBytes":57581,"wastedMs":300},{"url":"https://vk.com/js/cmodules/bundles/7ff0c31fd89ceca852f0cf5e2f61c8c8.8aeb6622f5c9b59771b2.js?c09f30a027d701dc8587","totalBytes":38913,"wastedMs":300},{"url":"https://vk.com/js/cmodules/web/page.98ca34cb8d19ee85c5ff.js?dc387d23a548915172ee5781fbb3742b","totalBytes":75413,"wastedMs":450},{"url":"https://vk.com/js/cmodules/web/time_spent.4987e900aea02b1e427c.js?a864013130678faf429c","totalBytes":2335,"wastedMs":150}],"overallSavingsMs":7162}},"unminified-css":{"id":"unminified-css","title":"Minify CSS","description":"Minifying CSS files can reduce network payload sizes. [Learn more](https://web.dev/unminified-css).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"unminified-javascript":{"id":"unminified-javascript","title":"Minify JavaScript","description":"Minifying JavaScript files can reduce payload sizes and script parse time. [Learn more](https://web.dev/unminified-javascript).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"unused-css-rules":{"id":"unused-css-rules","title":"Remove unused CSS","description":"Remove dead rules from stylesheets and defer the loading of CSS not used for above-the-fold content to reduce unnecessary bytes consumed by network activity. [Learn more](https://web.dev/unused-css-rules).","score":0.31,"scoreDisplayMode":"numeric","numericValue":2400,"displayValue":"Potential savings of 430 KB","details":{"type":"opportunity","headings":[{"key":"url","valueType":"url","label":"URL"},{"key":"totalBytes","valueType":"bytes","label":"Size"},{"key":"wastedBytes","valueType":"bytes","label":"Potential Savings"}],"items":[{"url":"https://vk.com/css/al/page.css?106479185658","wastedBytes":127414,"wastedPercent":99.49247724074812,"totalBytes":128064},{"url":"https://vk.com/css/al/fonts_cnt_mac.css?1","wastedBytes":122849,"wastedPercent":100,"totalBytes":122849},{"url":"https://vk.com/css/al/notifier.css?44783172318","wastedBytes":56191,"wastedPercent":99.00981068534477,"totalBytes":56753},{"url":"https://vk.com/css/al/common.css?79933029488","wastedBytes":55477,"wastedPercent":87.21457672082997,"totalBytes":63610},{"url":"https://vk.com/css/al/im.css?175119436649","wastedBytes":36156,"wastedPercent":79.69419233359754,"totalBytes":45369},{"url":"https://vk.com/css/al/ui_common.css?24332766487","wastedBytes":21106,"wastedPercent":92.1438294667941,"totalBytes":22906},{"url":"https://vk.com/css/al/base.css?1","wastedBytes":11120,"wastedPercent":99.34130275676995,"totalBytes":11194},{"url":"https://vk.com/css/al/post.css?38525983065","wastedBytes":10259,"wastedPercent":78.17753206297533,"totalBytes":13123}],"overallSavingsMs":2400,"overallSavingsBytes":440572}},"uses-webp-images":{"id":"uses-webp-images","title":"Serve images in next-gen formats","description":"Image formats like JPEG 2000, JPEG XR, and WebP often provide better compression than PNG or JPEG, which means faster downloads and less data consumption. [Learn more](https://web.dev/uses-webp-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-optimized-images":{"id":"uses-optimized-images","title":"Efficiently encode images","description":"Optimized images load faster and consume less cellular data. [Learn more](https://web.dev/uses-optimized-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-text-compression":{"id":"uses-text-compression","title":"Enable text compression","description":"Text-based resources should be served with compression (gzip, deflate or brotli) to minimize total network bytes. [Learn more](https://web.dev/uses-text-compression).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"uses-responsive-images":{"id":"uses-responsive-images","title":"Properly size images","description":"Serve images that are appropriately-sized to save cellular data and improve load time. [Learn more](https://web.dev/uses-responsive-images).","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","warnings":[],"details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"efficient-animated-content":{"id":"efficient-animated-content","title":"Use video formats for animated content","description":"Large GIFs are inefficient for delivering animated content. Consider using MPEG4/WebM videos for animations and PNG/WebP for static images instead of GIF to save network bytes. [Learn more](https://web.dev/efficient-animated-content)","score":1,"scoreDisplayMode":"numeric","numericValue":0,"displayValue":"","details":{"type":"opportunity","headings":[],"items":[],"overallSavingsMs":0,"overallSavingsBytes":0}},"appcache-manifest":{"id":"appcache-manifest","title":"Avoids Application Cache","description":"Application Cache is deprecated. [Learn more](https://web.dev/appcache-manifest).","score":1,"scoreDisplayMode":"binary"},"doctype":{"id":"doctype","title":"Page has the HTML doctype","description":"Specifying a doctype prevents the browser from switching to quirks-mode. [Learn more](https://web.dev/doctype).","score":1,"scoreDisplayMode":"binary"},"dom-size":{"id":"dom-size","title":"Avoid an excessive DOM size","description":"A large DOM will increase memory usage, cause longer [style calculations](https://developers.google.com/web/fundamentals/performance/rendering/reduce-the-scope-and-complexity-of-style-calculations), and produce costly [layout reflows](https://developers.google.com/speed/articles/reflow). [Learn more](https://web.dev/dom-size).","score":0,"scoreDisplayMode":"numeric","numericValue":5021,"displayValue":"5,021 elements","details":{"type":"table","headings":[{"key":"statistic","itemType":"text","text":"Statistic"},{"key":"element","itemType":"code","text":"Element"},{"key":"value","itemType":"numeric","text":"Value"}],"items":[{"statistic":"Total DOM Elements","element":"","value":"5,021"},{"statistic":"Maximum DOM Depth","element":{"type":"code","value":"\u003cpath d=\"M1,9.5v1ZM4,9.5v1ZM7,9.5v1ZM10,9.5v1ZM13,9.5v1ZM16,9.5v1ZM19,9.5v1ZM22,9.5v1ZM25,9.5v1ZM28,9.5v1ZM31,9.5v1ZM34,9.5v1ZM37,9.5v1ZM40,9.5v1ZM43,9.5v1ZM46,9.5v1ZM49,9.5v1ZM52,9.5v1ZM55,9.5v1ZM58,9.5v1ZM61,9.5v1ZM64,9.5v1ZM67,9.5v1ZM70,9.5v1ZM73,9.5v1ZM76,9.5v1ZM79,9.5v1ZM82,9.5v1ZM85,9.5v1ZM88,9.5v1ZM91,9.05v1.9ZM94,9.05v1.9ZM97,9.05v1.9ZM100,9.5v1ZM103,8.1v3.8ZM106,9.05v1.9ZM109,9.5v1ZM112,9.5v1ZM115,9.5v1ZM118,9.5v1ZM121,8.1v3.8ZM124,9.5v1ZM127,9.05v1.9ZM130,9.05v1.9ZM133,8.1v3.8ZM136,7.15v5.7ZM139,9.05v1.9ZM142,8.1v3.8ZM145,8.1v3.8ZM148,6.2v7.6ZM151,6.2v7.6ZM154,9.05v1.9ZM157,9.5v1ZM160,9.5v1ZM163,9.5v1ZM166,9.5v1ZM169,9.5v1ZM172,9.5v1ZM175,9.5v1ZM178,9.5v1ZM181,9.5v1ZM184,9.5v1ZM187,9.5v1ZM190,9.5v1ZM193,9.5v1ZM196,9.5v1ZM199,9.5v1ZM202,9.5v1ZM205,9.5v1ZM208,5.25v9.5ZM211,5.25v9.5ZM214,0.5v19ZM217,8.1v3.8ZM220,6.2v7.6ZM223,6.2v7.6ZM226,9.5v1ZM229,9.5v1ZM232,9.5v1ZM235,9.5v1ZM238,9.5v1ZM241,9.5v1ZM244,9.5v1ZM247,9.5v1ZM250,9.05v1.9ZM253,9.05v1.9ZM256,9.05v1.9ZM259,9.5v1ZM262,9.5v1ZM265,8.1v3.8ZM268,8.1v3.8ZM271,9.5v1ZM274,7.15v5.7ZM277,9.5v1ZM280,9.5v1ZM283,9.5v1ZM286,9.5v1ZM289,9.5v1ZM292,9.5v1ZM295,9.5v1ZM298,9.5v1ZM301,9.5v1ZM304,9.5v1ZM307,9.5v1ZM310,9.5v1ZM313,9.5v1ZM316,9.5v1Z\">"},"value":"44"},{"statistic":"Maximum Child Elements","element":{"type":"code","value":"\u003cdiv class=\"_im_peer_history im-page-chat-contain\" aria-live=\"polite\" aria-relevant=\"additions\">"},"value":"105"}]}},"external-anchors-use-rel-noopener":{"id":"external-anchors-use-rel-noopener","title":"Links to cross-origin destinations are safe","description":"Add `rel=\"noopener\"` or `rel=\"noreferrer\"` to any external links to improve performance and prevent security vulnerabilities. [Learn more](https://web.dev/external-anchors-use-rel-noopener).","score":1,"scoreDisplayMode":"binary","warnings":[],"details":{"type":"table","headings":[],"items":[]}},"geolocation-on-start":{"id":"geolocation-on-start","title":"Avoids requesting the geolocation permission on page load","description":"Users are mistrustful of or confused by sites that request their location without context. Consider tying the request to a user action instead. [Learn more](https://web.dev/geolocation-on-start).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"no-document-write":{"id":"no-document-write","title":"Avoids `document.write()`","description":"For users on slow connections, external scripts dynamically injected via `document.write()` can delay page load by tens of seconds. [Learn more](https://web.dev/no-document-write).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"no-vulnerable-libraries":{"id":"no-vulnerable-libraries","title":"Avoids front-end JavaScript libraries with known security vulnerabilities","description":"Some third-party scripts may contain known security vulnerabilities that are easily identified and exploited by attackers. [Learn more](https://web.dev/no-vulnerable-libraries).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[],"summary":{}}},"js-libraries":{"id":"js-libraries","title":"Detected JavaScript libraries","description":"All front-end JavaScript libraries detected on the page. [Learn more](https://web.dev/js-libraries).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"name","itemType":"text","text":"Name"},{"key":"version","itemType":"text","text":"Version"}],"items":[{"name":"React","npm":"react"}],"summary":{}}},"notification-on-start":{"id":"notification-on-start","title":"Avoids requesting the notification permission on page load","description":"Users are mistrustful of or confused by sites that request to send notifications without context. Consider tying the request to user gestures instead. [Learn more](https://web.dev/notification-on-start).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"password-inputs-can-be-pasted-into":{"id":"password-inputs-can-be-pasted-into","title":"Allows users to paste into password fields","description":"Preventing password pasting undermines good security policy. [Learn more](https://web.dev/password-inputs-can-be-pasted-into).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"uses-http2":{"id":"uses-http2","title":"Uses HTTP/2 for its own resources","description":"HTTP/2 offers many benefits over HTTP/1.1, including binary headers, multiplexing, and server push. [Learn more](https://web.dev/uses-http2).","score":1,"scoreDisplayMode":"binary","displayValue":"","details":{"type":"table","headings":[],"items":[]}},"uses-passive-event-listeners":{"id":"uses-passive-event-listeners","title":"Does not use passive listeners to improve scrolling performance","description":"Consider marking your touch and wheel event listeners as `passive` to improve your page's scroll performance. [Learn more](https://web.dev/uses-passive-event-listeners).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"url","itemType":"url","text":"URL"},{"key":"label","itemType":"text","text":"Location"}],"items":[{"label":"line: 168","url":"https://vk.com/im?sel=c190"},{"label":"line: 185","url":"https://vk.com/im?sel=c190"},{"label":"line: 202","url":"https://vk.com/im?sel=c190"},{"label":"line: 0","url":"https://vk.com/js/cmodules/bundles/common.f9aa137d1936b427a71f.js?1af4e6467e56265f698e"}]}},"meta-description":{"id":"meta-description","title":"Document has a meta description","description":"Meta descriptions may be included in search results to concisely summarize page content. [Learn more](https://web.dev/meta-description).","score":1,"scoreDisplayMode":"binary"},"http-status-code":{"id":"http-status-code","title":"Page has successful HTTP status code","description":"Pages with unsuccessful HTTP status codes may not be indexed properly. [Learn more](https://web.dev/http-status-code).","score":1,"scoreDisplayMode":"binary"},"font-size":{"id":"font-size","title":"Document uses legible font sizes","description":"Font sizes less than 12px are too small to be legible and require mobile visitors to “pinch to zoom” in order to read. Strive to have >60% of page text ≥12px. [Learn more](https://web.dev/font-size).","score":null,"scoreDisplayMode":"notApplicable"},"link-text":{"id":"link-text","title":"Links have descriptive text","description":"Descriptive link text helps search engines understand your content. [Learn more](https://web.dev/link-text).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[],"summary":{}}},"is-crawlable":{"id":"is-crawlable","title":"Page is blocked from indexing","description":"Search engines are unable to include your pages in search results if they don't have permission to crawl them. [Learn more](https://web.dev/is-crawable).","score":0,"scoreDisplayMode":"binary","details":{"type":"table","headings":[{"key":"source","itemType":"code","text":"Blocking Directive Source"}],"items":[{"source":{"type":"url","value":"https://vk.com/robots.txt"}}]}},"robots-txt":{"id":"robots-txt","title":"robots.txt is valid","description":"If your robots.txt file is malformed, crawlers may not be able to understand how you want your website to be crawled or indexed. [Learn more](https://web.dev/robots-txt).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[],"summary":{}}},"tap-targets":{"id":"tap-targets","title":"Tap targets are sized appropriately","description":"Interactive elements like buttons and links should be large enough (48x48px), and have enough space around them, to be easy enough to tap without overlapping onto other elements. [Learn more](https://web.dev/tap-targets).","score":null,"scoreDisplayMode":"notApplicable"},"hreflang":{"id":"hreflang","title":"Document has a valid `hreflang`","description":"hreflang links tell search engines what version of a page they should list in search results for a given language or region. [Learn more](https://web.dev/hreflang).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"plugins":{"id":"plugins","title":"Document avoids plugins","description":"Search engines can't index plugin content, and many devices restrict plugins or don't support them. [Learn more](https://web.dev/plugins).","score":1,"scoreDisplayMode":"binary","details":{"type":"table","headings":[],"items":[]}},"canonical":{"id":"canonical","title":"Document has a valid `rel=canonical`","description":"Canonical links suggest which URL to show in search results. [Learn more](https://web.dev/canonical).","score":null,"scoreDisplayMode":"notApplicable"},"structured-data":{"id":"structured-data","title":"Structured data is valid","description":"Run the [Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool/) and the [Structured Data Linter](http://linter.structured-data.org/) to validate structured data. [Learn more](https://web.dev/structured-data).","score":null,"scoreDisplayMode":"manual"}},"configSettings":{"output":"json","maxWaitForFcp":30000,"maxWaitForLoad":45000,"throttlingMethod":"simulate","throttling":{"rttMs":150,"throughputKbps":1638.4,"requestLatencyMs":562.5,"downloadThroughputKbps":1474.5600000000002,"uploadThroughputKbps":675,"cpuSlowdownMultiplier":4},"auditMode":false,"gatherMode":false,"disableStorageReset":false,"emulatedFormFactor":"desktop","internalDisableDeviceScreenEmulation":true,"channel":"devtools","budgets":null,"locale":"en-US","blockedUrlPatterns":null,"additionalTraceCategories":null,"extraHeaders":null,"precomputedLanternData":null,"onlyAudits":null,"onlyCategories":["performance","pwa","best-practices","accessibility","seo"],"skipAudits":null},"categories":{"performance":{"title":"Performance","auditRefs":[{"id":"first-contentful-paint","weight":3,"group":"metrics"},{"id":"first-meaningful-paint","weight":1,"group":"metrics"},{"id":"speed-index","weight":4,"group":"metrics"},{"id":"interactive","weight":5,"group":"metrics"},{"id":"first-cpu-idle","weight":2,"group":"metrics"},{"id":"max-potential-fid","weight":0,"group":"metrics"},{"id":"estimated-input-latency","weight":0},{"id":"total-blocking-time","weight":0},{"id":"render-blocking-resources","weight":0,"group":"load-opportunities"},{"id":"uses-responsive-images","weight":0,"group":"load-opportunities"},{"id":"offscreen-images","weight":0,"group":"load-opportunities"},{"id":"unminified-css","weight":0,"group":"load-opportunities"},{"id":"unminified-javascript","weight":0,"group":"load-opportunities"},{"id":"unused-css-rules","weight":0,"group":"load-opportunities"},{"id":"uses-optimized-images","weight":0,"group":"load-opportunities"},{"id":"uses-webp-images","weight":0,"group":"load-opportunities"},{"id":"uses-text-compression","weight":0,"group":"load-opportunities"},{"id":"uses-rel-preconnect","weight":0,"group":"load-opportunities"},{"id":"time-to-first-byte","weight":0,"group":"load-opportunities"},{"id":"redirects","weight":0,"group":"load-opportunities"},{"id":"uses-rel-preload","weight":0,"group":"load-opportunities"},{"id":"efficient-animated-content","weight":0,"group":"load-opportunities"},{"id":"total-byte-weight","weight":0,"group":"diagnostics"},{"id":"uses-long-cache-ttl","weight":0,"group":"diagnostics"},{"id":"dom-size","weight":0,"group":"diagnostics"},{"id":"critical-request-chains","weight":0,"group":"diagnostics"},{"id":"user-timings","weight":0,"group":"diagnostics"},{"id":"bootup-time","weight":0,"group":"diagnostics"},{"id":"mainthread-work-breakdown","weight":0,"group":"diagnostics"},{"id":"font-display","weight":0,"group":"diagnostics"},{"id":"performance-budget","weight":0,"group":"budgets"},{"id":"resource-summary","weight":0,"group":"diagnostics"},{"id":"third-party-summary","weight":0,"group":"diagnostics"},{"id":"network-requests","weight":0},{"id":"network-rtt","weight":0},{"id":"network-server-latency","weight":0},{"id":"main-thread-tasks","weight":0},{"id":"diagnostics","weight":0},{"id":"metrics","weight":0},{"id":"screenshot-thumbnails","weight":0},{"id":"final-screenshot","weight":0}],"id":"performance","score":0.02},"accessibility":{"title":"Accessibility","description":"These checks highlight opportunities to [improve the accessibility of your web app](https://developers.google.com/web/fundamentals/accessibility). Only a subset of accessibility issues can be automatically detected so manual testing is also encouraged.","manualDescription":"These items address areas which an automated testing tool cannot cover. Learn more in our guide on [conducting an accessibility review](https://developers.google.com/web/fundamentals/accessibility/how-to-review).","auditRefs":[{"id":"accesskeys","weight":3,"group":"a11y-navigation"},{"id":"aria-allowed-attr","weight":10,"group":"a11y-aria"},{"id":"aria-required-attr","weight":10,"group":"a11y-aria"},{"id":"aria-required-children","weight":10,"group":"a11y-aria"},{"id":"aria-required-parent","weight":10,"group":"a11y-aria"},{"id":"aria-roles","weight":10,"group":"a11y-aria"},{"id":"aria-valid-attr-value","weight":10,"group":"a11y-aria"},{"id":"aria-valid-attr","weight":10,"group":"a11y-aria"},{"id":"audio-caption","weight":0,"group":"a11y-audio-video"},{"id":"button-name","weight":10,"group":"a11y-names-labels"},{"id":"bypass","weight":3,"group":"a11y-navigation"},{"id":"color-contrast","weight":3,"group":"a11y-color-contrast"},{"id":"definition-list","weight":0,"group":"a11y-tables-lists"},{"id":"dlitem","weight":0,"group":"a11y-tables-lists"},{"id":"document-title","weight":3,"group":"a11y-names-labels"},{"id":"duplicate-id","weight":1,"group":"a11y-best-practices"},{"id":"frame-title","weight":3,"group":"a11y-names-labels"},{"id":"html-has-lang","weight":3,"group":"a11y-language"},{"id":"html-lang-valid","weight":3,"group":"a11y-language"},{"id":"image-alt","weight":10,"group":"a11y-names-labels"},{"id":"input-image-alt","weight":0,"group":"a11y-names-labels"},{"id":"label","weight":10,"group":"a11y-names-labels"},{"id":"layout-table","weight":0,"group":"a11y-tables-lists"},{"id":"link-name","weight":3,"group":"a11y-names-labels"},{"id":"list","weight":3,"group":"a11y-tables-lists"},{"id":"listitem","weight":3,"group":"a11y-tables-lists"},{"id":"meta-refresh","weight":0,"group":"a11y-best-practices"},{"id":"meta-viewport","weight":0,"group":"a11y-best-practices"},{"id":"object-alt","weight":3,"group":"a11y-names-labels"},{"id":"tabindex","weight":3,"group":"a11y-navigation"},{"id":"td-headers-attr","weight":0,"group":"a11y-tables-lists"},{"id":"th-has-data-cells","weight":0,"group":"a11y-tables-lists"},{"id":"valid-lang","weight":0,"group":"a11y-language"},{"id":"video-caption","weight":0,"group":"a11y-audio-video"},{"id":"video-description","weight":0,"group":"a11y-audio-video"},{"id":"logical-tab-order","weight":0},{"id":"focusable-controls","weight":0},{"id":"interactive-element-affordance","weight":0},{"id":"managed-focus","weight":0},{"id":"focus-traps","weight":0},{"id":"custom-controls-labels","weight":0},{"id":"custom-controls-roles","weight":0},{"id":"visual-order-follows-dom","weight":0},{"id":"offscreen-content-hidden","weight":0},{"id":"heading-levels","weight":0},{"id":"use-landmarks","weight":0}],"id":"accessibility","score":0.65},"best-practices":{"title":"Best Practices","auditRefs":[{"id":"appcache-manifest","weight":1},{"id":"is-on-https","weight":1},{"id":"uses-http2","weight":1},{"id":"uses-passive-event-listeners","weight":1},{"id":"no-document-write","weight":1},{"id":"external-anchors-use-rel-noopener","weight":1},{"id":"geolocation-on-start","weight":1},{"id":"doctype","weight":1},{"id":"no-vulnerable-libraries","weight":1},{"id":"js-libraries","weight":0},{"id":"notification-on-start","weight":1},{"id":"deprecations","weight":1},{"id":"password-inputs-can-be-pasted-into","weight":1},{"id":"errors-in-console","weight":1},{"id":"image-aspect-ratio","weight":1}],"id":"best-practices","score":0.86},"seo":{"title":"SEO","description":"These checks ensure that your page is optimized for search engine results ranking. There are additional factors Lighthouse does not check that may affect your search ranking. [Learn more](https://support.google.com/webmasters/answer/35769).","manualDescription":"Run these additional validators on your site to check additional SEO best practices.","auditRefs":[{"id":"viewport","weight":1,"group":"seo-mobile"},{"id":"document-title","weight":1,"group":"seo-content"},{"id":"meta-description","weight":1,"group":"seo-content"},{"id":"http-status-code","weight":1,"group":"seo-crawl"},{"id":"link-text","weight":1,"group":"seo-content"},{"id":"is-crawlable","weight":1,"group":"seo-crawl"},{"id":"robots-txt","weight":1,"group":"seo-crawl"},{"id":"image-alt","weight":1,"group":"seo-content"},{"id":"hreflang","weight":1,"group":"seo-content"},{"id":"canonical","weight":0,"group":"seo-content"},{"id":"font-size","weight":0,"group":"seo-mobile"},{"id":"plugins","weight":1,"group":"seo-content"},{"id":"tap-targets","weight":0,"group":"seo-mobile"},{"id":"structured-data","weight":0}],"id":"seo","score":0.7},"pwa":{"title":"Progressive Web App","description":"These checks validate the aspects of a Progressive Web App. [Learn more](https://developers.google.com/web/progressive-web-apps/checklist).","manualDescription":"These checks are required by the baseline [PWA Checklist](https://developers.google.com/web/progressive-web-apps/checklist) but are not automatically checked by Lighthouse. They do not affect your score but it's important that you verify them manually.","auditRefs":[{"id":"load-fast-enough-for-pwa","weight":7,"group":"pwa-fast-reliable"},{"id":"works-offline","weight":5,"group":"pwa-fast-reliable"},{"id":"offline-start-url","weight":1,"group":"pwa-fast-reliable"},{"id":"is-on-https","weight":2,"group":"pwa-installable"},{"id":"service-worker","weight":1,"group":"pwa-installable"},{"id":"installable-manifest","weight":2,"group":"pwa-installable"},{"id":"redirects-http","weight":2,"group":"pwa-optimized"},{"id":"splash-screen","weight":1,"group":"pwa-optimized"},{"id":"themed-omnibox","weight":1,"group":"pwa-optimized"},{"id":"content-width","weight":0,"group":"pwa-optimized"},{"id":"viewport","weight":2,"group":"pwa-optimized"},{"id":"without-javascript","weight":1,"group":"pwa-optimized"},{"id":"apple-touch-icon","weight":1,"group":"pwa-optimized"},{"id":"pwa-cross-browser","weight":0},{"id":"pwa-page-transitions","weight":0},{"id":"pwa-each-page-has-url","weight":0}],"id":"pwa","score":0.23}},"categoryGroups":{"metrics":{"title":"Metrics"},"load-opportunities":{"title":"Opportunities","description":"These suggestions can help your page load faster. They don't [directly affect](https://github.com/GoogleChrome/lighthouse/blob/d2ec9ffbb21de9ad1a0f86ed24575eda32c796f0/docs/scoring.md#how-are-the-scores-weighted) the Performance score."},"budgets":{"title":"Budgets","description":"Performance budgets set standards for the performance of your site."},"diagnostics":{"title":"Diagnostics","description":"More information about the performance of your application. These numbers don't [directly affect](https://github.com/GoogleChrome/lighthouse/blob/d2ec9ffbb21de9ad1a0f86ed24575eda32c796f0/docs/scoring.md#how-are-the-scores-weighted) the Performance score."},"pwa-fast-reliable":{"title":"Fast and reliable"},"pwa-installable":{"title":"Installable"},"pwa-optimized":{"title":"PWA Optimized"},"a11y-best-practices":{"title":"Best practices","description":"These items highlight common accessibility best practices."},"a11y-color-contrast":{"title":"Contrast","description":"These are opportunities to improve the legibility of your content."},"a11y-names-labels":{"title":"Names and labels","description":"These are opportunities to improve the semantics of the controls in your application. This may enhance the experience for users of assistive technology, like a screen reader."},"a11y-navigation":{"title":"Navigation","description":"These are opportunities to improve keyboard navigation in your application."},"a11y-aria":{"title":"ARIA","description":"These are opportunities to improve the usage of ARIA in your application which may enhance the experience for users of assistive technology, like a screen reader."},"a11y-language":{"title":"Internationalization and localization","description":"These are opportunities to improve the interpretation of your content by users in different locales."},"a11y-audio-video":{"title":"Audio and video","description":"These are opportunities to provide alternative content for audio and video. This may improve the experience for users with hearing or vision impairments."},"a11y-tables-lists":{"title":"Tables and lists","description":"These are opportunities to to improve the experience of reading tabular or list data using assistive technology, like a screen reader."},"seo-mobile":{"title":"Mobile Friendly","description":"Make sure your pages are mobile friendly so users don’t have to pinch or zoom in order to read the content pages. [Learn more](https://developers.google.com/search/mobile-sites/)."},"seo-content":{"title":"Content Best Practices","description":"Format your HTML in a way that enables crawlers to better understand your app’s content."},"seo-crawl":{"title":"Crawling and Indexing","description":"To appear in search results, crawlers need access to your app."},"lighthouse-plugin-publisher-ads-metrics":{"title":"Metrics"},"lighthouse-plugin-publisher-ads-ads-performance":{"title":"Ad Speed"},"lighthouse-plugin-publisher-ads-ads-best-practices":{"title":"Tag Best Practices"}},"timing":{"entries":[{"startTime":1396.33,"name":"lh:init:config","duration":87.27,"entryType":"measure"},{"startTime":1403.32,"name":"lh:config:requireGatherers","duration":7.97,"entryType":"measure"},{"startTime":1411.41,"name":"lh:config:requireAudits","duration":55.52,"entryType":"measure"},{"startTime":1484.45,"name":"lh:init:connect","duration":2.1,"entryType":"measure"},{"startTime":1486.63,"name":"lh:gather:loadBlank","duration":100.29,"entryType":"measure"},{"startTime":1587.06,"name":"lh:gather:getVersion","duration":6.3,"entryType":"measure"},{"startTime":1593.49,"name":"lh:gather:getBenchmarkIndex","duration":503.78,"entryType":"measure"},{"startTime":2097.43,"name":"lh:gather:setupDriver","duration":68.36,"entryType":"measure"},{"startTime":2166.02,"name":"lh:gather:loadBlank","duration":33.93,"entryType":"measure"},{"startTime":2200.06,"name":"lh:gather:setupPassNetwork","duration":5.59,"entryType":"measure"},{"startTime":2205.76,"name":"lh:driver:cleanBrowserCaches","duration":242.53,"entryType":"measure"},{"startTime":2448.43,"name":"lh:gather:beforePass","duration":5.44,"entryType":"measure"},{"startTime":2448.47,"name":"lh:gather:beforePass:CSSUsage","duration":0.07,"entryType":"measure"},{"startTime":2448.56,"name":"lh:gather:beforePass:ViewportDimensions","duration":0.03,"entryType":"measure"},{"startTime":2448.61,"name":"lh:gather:beforePass:RuntimeExceptions","duration":0.06,"entryType":"measure"},{"startTime":2448.68,"name":"lh:gather:beforePass:ConsoleMessages","duration":2.77,"entryType":"measure"},{"startTime":2451.52,"name":"lh:gather:beforePass:AnchorElements","duration":0.06,"entryType":"measure"},{"startTime":2451.61,"name":"lh:gather:beforePass:ImageElements","duration":0.04,"entryType":"measure"},{"startTime":2451.74,"name":"lh:gather:beforePass:LinkElements","duration":0.18,"entryType":"measure"},{"startTime":2452.06,"name":"lh:gather:beforePass:MetaElements","duration":0.05,"entryType":"measure"},{"startTime":2452.15,"name":"lh:gather:beforePass:ScriptElements","duration":0.02,"entryType":"measure"},{"startTime":2452.21,"name":"lh:gather:beforePass:AppCacheManifest","duration":0.03,"entryType":"measure"},{"startTime":2452.26,"name":"lh:gather:beforePass:Doctype","duration":0.03,"entryType":"measure"},{"startTime":2452.3,"name":"lh:gather:beforePass:DOMStats","duration":0.02,"entryType":"measure"},{"startTime":2452.34,"name":"lh:gather:beforePass:OptimizedImages","duration":0.02,"entryType":"measure"},{"startTime":2452.37,"name":"lh:gather:beforePass:PasswordInputsWithPreventedPaste","duration":0.03,"entryType":"measure"},{"startTime":2452.41,"name":"lh:gather:beforePass:ResponseCompression","duration":0.05,"entryType":"measure"},{"startTime":2452.49,"name":"lh:gather:beforePass:TagsBlockingFirstPaint","duration":1.15,"entryType":"measure"},{"startTime":2453.67,"name":"lh:gather:beforePass:FontSize","duration":0.04,"entryType":"measure"},{"startTime":2453.72,"name":"lh:gather:beforePass:EmbeddedContent","duration":0.02,"entryType":"measure"},{"startTime":2453.76,"name":"lh:gather:beforePass:RobotsTxt","duration":0.02,"entryType":"measure"},{"startTime":2453.79,"name":"lh:gather:beforePass:TapTargets","duration":0.02,"entryType":"measure"},{"startTime":2453.82,"name":"lh:gather:beforePass:Accessibility","duration":0.03,"entryType":"measure"},{"startTime":2453.95,"name":"lh:gather:beginRecording","duration":65.88,"entryType":"measure"},{"startTime":2454.27,"name":"lh:gather:getVersion","duration":0.87,"entryType":"measure"},{"startTime":2520.08,"name":"lh:gather:loadPage-defaultPass","duration":9052.68,"entryType":"measure"},{"startTime":11572.91,"name":"lh:gather:pass","duration":2.88,"entryType":"measure"},{"startTime":11576.16,"name":"lh:gather:getTrace","duration":3030.8,"entryType":"measure"},{"startTime":14607.03,"name":"lh:gather:getDevtoolsLog","duration":14.48,"entryType":"measure"},{"startTime":14623.28,"name":"lh:gather:afterPass","duration":7993.68,"entryType":"measure"},{"startTime":14634.16,"name":"lh:gather:afterPass:CSSUsage","duration":528.28,"entryType":"measure"},{"startTime":15162.48,"name":"lh:gather:afterPass:ViewportDimensions","duration":5.27,"entryType":"measure"},{"startTime":15167.78,"name":"lh:gather:afterPass:RuntimeExceptions","duration":5.07,"entryType":"measure"},{"startTime":15172.9,"name":"lh:gather:afterPass:ConsoleMessages","duration":7.04,"entryType":"measure"},{"startTime":15179.97,"name":"lh:gather:afterPass:AnchorElements","duration":46.13,"entryType":"measure"},{"startTime":15226.16,"name":"lh:gather:afterPass:ImageElements","duration":360.85,"entryType":"measure"},{"startTime":15587.04,"name":"lh:gather:afterPass:LinkElements","duration":7.29,"entryType":"measure"},{"startTime":15594.35,"name":"lh:gather:afterPass:MetaElements","duration":5.54,"entryType":"measure"},{"startTime":15599.92,"name":"lh:gather:afterPass:ScriptElements","duration":26.94,"entryType":"measure"},{"startTime":15626.89,"name":"lh:gather:afterPass:AppCacheManifest","duration":3.45,"entryType":"measure"},{"startTime":15630.37,"name":"lh:gather:afterPass:Doctype","duration":2.45,"entryType":"measure"},{"startTime":15632.85,"name":"lh:gather:afterPass:DOMStats","duration":13.56,"entryType":"measure"},{"startTime":15646.44,"name":"lh:gather:afterPass:OptimizedImages","duration":1.61,"entryType":"measure"},{"startTime":15648.07,"name":"lh:gather:afterPass:PasswordInputsWithPreventedPaste","duration":2.72,"entryType":"measure"},{"startTime":15650.82,"name":"lh:gather:afterPass:ResponseCompression","duration":1.42,"entryType":"measure"},{"startTime":15652.27,"name":"lh:gather:afterPass:TagsBlockingFirstPaint","duration":6.47,"entryType":"measure"},{"startTime":15658.78,"name":"lh:gather:afterPass:FontSize","duration":843.06,"entryType":"measure"},{"startTime":16501.88,"name":"lh:gather:afterPass:EmbeddedContent","duration":10.04,"entryType":"measure"},{"startTime":16511.95,"name":"lh:gather:afterPass:RobotsTxt","duration":59.7,"entryType":"measure"},{"startTime":16571.69,"name":"lh:gather:afterPass:TapTargets","duration":303.67,"entryType":"measure"},{"startTime":16875.39,"name":"lh:gather:afterPass:Accessibility","duration":5741.54,"entryType":"measure"},{"startTime":23060.09,"name":"lh:gather:loadBlank","duration":93.86,"entryType":"measure"},{"startTime":23153.98,"name":"lh:gather:setupPassNetwork","duration":13.54,"entryType":"measure"},{"startTime":23167.58,"name":"lh:gather:beforePass","duration":5.84,"entryType":"measure"},{"startTime":23167.64,"name":"lh:gather:beforePass:ServiceWorker","duration":4.83,"entryType":"measure"},{"startTime":23172.51,"name":"lh:gather:beforePass:Offline","duration":0.82,"entryType":"measure"},{"startTime":23173.36,"name":"lh:gather:beforePass:StartUrl","duration":0.05,"entryType":"measure"},{"startTime":23173.44,"name":"lh:gather:beginRecording","duration":0.12,"entryType":"measure"},{"startTime":23173.62,"name":"lh:gather:loadPage-offlinePass","duration":360.28,"entryType":"measure"},{"startTime":23533.96,"name":"lh:gather:pass","duration":0.47,"entryType":"measure"},{"startTime":23534.51,"name":"lh:gather:getDevtoolsLog","duration":0.87,"entryType":"measure"},{"startTime":23641.81,"name":"lh:gather:afterPass","duration":1834.68,"entryType":"measure"},{"startTime":24562.35,"name":"lh:gather:afterPass:ServiceWorker","duration":111.35,"entryType":"measure"},{"startTime":24673.75,"name":"lh:gather:afterPass:Offline","duration":376.13,"entryType":"measure"},{"startTime":25049.92,"name":"lh:gather:afterPass:StartUrl","duration":426.55,"entryType":"measure"},{"startTime":25476.57,"name":"lh:gather:loadBlank","duration":78.82,"entryType":"measure"},{"startTime":25555.44,"name":"lh:gather:setupPassNetwork","duration":13.72,"entryType":"measure"},{"startTime":25569.19,"name":"lh:gather:beforePass","duration":0.25,"entryType":"measure"},{"startTime":25569.24,"name":"lh:gather:beforePass:HTTPRedirect","duration":0.11,"entryType":"measure"},{"startTime":25569.37,"name":"lh:gather:beforePass:HTMLWithoutJavaScript","duration":0.05,"entryType":"measure"},{"startTime":25569.46,"name":"lh:gather:beginRecording","duration":0.1,"entryType":"measure"},{"startTime":25569.61,"name":"lh:gather:loadPage-redirectPass","duration":644.1,"entryType":"measure"},{"startTime":26213.79,"name":"lh:gather:pass","duration":0.23,"entryType":"measure"},{"startTime":26214.05,"name":"lh:gather:getDevtoolsLog","duration":4.52,"entryType":"measure"},{"startTime":26300.62,"name":"lh:gather:afterPass","duration":24.38,"entryType":"measure"},{"startTime":26317.25,"name":"lh:gather:afterPass:HTTPRedirect","duration":3.41,"entryType":"measure"},{"startTime":26320.69,"name":"lh:gather:afterPass:HTMLWithoutJavaScript","duration":3.2,"entryType":"measure"},{"startTime":26325.17,"name":"lh:gather:disconnect","duration":29.65,"entryType":"measure"},{"startTime":1483.85,"name":"lh:runner:run","duration":26780.01,"entryType":"measure"},{"startTime":26355.17,"name":"lh:runner:auditing","duration":1907.67,"entryType":"measure"},{"startTime":26359.06,"name":"lh:audit:is-on-https","duration":10.16,"entryType":"measure"},{"startTime":26359.51,"name":"lh:computed:NetworkRecords","duration":9.12,"entryType":"measure"},{"startTime":26369.64,"name":"lh:audit:redirects-http","duration":0.37,"entryType":"measure"},{"startTime":26370.36,"name":"lh:audit:service-worker","duration":1.21,"entryType":"measure"},{"startTime":26371.87,"name":"lh:audit:works-offline","duration":0.42,"entryType":"measure"},{"startTime":26372.58,"name":"lh:audit:viewport","duration":0.62,"entryType":"measure"},{"startTime":26372.88,"name":"lh:computed:ViewportMeta","duration":0.13,"entryType":"measure"},{"startTime":26373.47,"name":"lh:audit:without-javascript","duration":0.69,"entryType":"measure"},{"startTime":26374.67,"name":"lh:audit:first-contentful-paint","duration":154.24,"entryType":"measure"},{"startTime":26375.25,"name":"lh:computed:FirstContentfulPaint","duration":153.27,"entryType":"measure"},{"startTime":26375.45,"name":"lh:computed:TraceOfTab","duration":111.85,"entryType":"measure"},{"startTime":26488.15,"name":"lh:computed:LanternFirstContentfulPaint","duration":40.32,"entryType":"measure"},{"startTime":26488.37,"name":"lh:computed:PageDependencyGraph","duration":14.12,"entryType":"measure"},{"startTime":26502.55,"name":"lh:computed:LoadSimulator","duration":2.83,"entryType":"measure"},{"startTime":26502.69,"name":"lh:computed:NetworkAnalysis","duration":2.47,"entryType":"measure"},{"startTime":26529.19,"name":"lh:audit:first-meaningful-paint","duration":13.23,"entryType":"measure"},{"startTime":26529.47,"name":"lh:computed:FirstMeaningfulPaint","duration":12.71,"entryType":"measure"},{"startTime":26529.55,"name":"lh:computed:LanternFirstMeaningfulPaint","duration":12.59,"entryType":"measure"},{"startTime":26542.91,"name":"lh:audit:load-fast-enough-for-pwa","duration":50.02,"entryType":"measure"},{"startTime":26544.01,"name":"lh:computed:Interactive","duration":48.2,"entryType":"measure"},{"startTime":26544.16,"name":"lh:computed:LanternInteractive","duration":48.02,"entryType":"measure"},{"startTime":26593.24,"name":"lh:audit:speed-index","duration":803.6,"entryType":"measure"},{"startTime":26593.76,"name":"lh:computed:SpeedIndex","duration":802.79,"entryType":"measure"},{"startTime":26593.85,"name":"lh:computed:LanternSpeedIndex","duration":802.67,"entryType":"measure"},{"startTime":26593.93,"name":"lh:computed:Speedline","duration":750.87,"entryType":"measure"},{"startTime":27396.9,"name":"lh:audit:screenshot-thumbnails","duration":279.53,"entryType":"measure"},{"startTime":27676.68,"name":"lh:audit:final-screenshot","duration":8.31,"entryType":"measure"},{"startTime":27676.98,"name":"lh:computed:Screenshots","duration":7.93,"entryType":"measure"},{"startTime":27687.49,"name":"lh:audit:estimated-input-latency","duration":24.12,"entryType":"measure"},{"startTime":27687.78,"name":"lh:computed:EstimatedInputLatency","duration":23.6,"entryType":"measure"},{"startTime":27687.88,"name":"lh:computed:LanternEstimatedInputLatency","duration":23.47,"entryType":"measure"},{"startTime":27711.92,"name":"lh:audit:total-blocking-time","duration":19.63,"entryType":"measure"},{"startTime":27712.2,"name":"lh:computed:TotalBlockingTime","duration":19.1,"entryType":"measure"},{"startTime":27712.29,"name":"lh:computed:LanternTotalBlockingTime","duration":18.98,"entryType":"measure"},{"startTime":27731.87,"name":"lh:audit:max-potential-fid","duration":16.16,"entryType":"measure"},{"startTime":27732.15,"name":"lh:computed:MaxPotentialFID","duration":15.65,"entryType":"measure"},{"startTime":27732.26,"name":"lh:computed:LanternMaxPotentialFID","duration":15.51,"entryType":"measure"},{"startTime":27748.33,"name":"lh:audit:errors-in-console","duration":0.78,"entryType":"measure"},{"startTime":27749.38,"name":"lh:audit:time-to-first-byte","duration":0.77,"entryType":"measure"},{"startTime":27749.66,"name":"lh:computed:MainResource","duration":0.25,"entryType":"measure"},{"startTime":27750.39,"name":"lh:audit:first-cpu-idle","duration":11.66,"entryType":"measure"},{"startTime":27750.72,"name":"lh:computed:FirstCPUIdle","duration":11.11,"entryType":"measure"},{"startTime":27750.8,"name":"lh:computed:LanternFirstCPUIdle","duration":10.96,"entryType":"measure"},{"startTime":27762.3,"name":"lh:audit:interactive","duration":0.63,"entryType":"measure"},{"startTime":27763.16,"name":"lh:audit:user-timings","duration":5.33,"entryType":"measure"},{"startTime":27763.37,"name":"lh:computed:UserTimings","duration":4.72,"entryType":"measure"},{"startTime":27768.75,"name":"lh:audit:critical-request-chains","duration":1.7,"entryType":"measure"},{"startTime":27768.98,"name":"lh:computed:CriticalRequestChains","duration":0.69,"entryType":"measure"},{"startTime":27770.66,"name":"lh:audit:redirects","duration":0.76,"entryType":"measure"},{"startTime":27771.67,"name":"lh:audit:installable-manifest","duration":0.59,"entryType":"measure"},{"startTime":27771.88,"name":"lh:computed:ManifestValues","duration":0.1,"entryType":"measure"},{"startTime":27772.48,"name":"lh:audit:apple-touch-icon","duration":0.47,"entryType":"measure"},{"startTime":27773.19,"name":"lh:audit:splash-screen","duration":0.39,"entryType":"measure"},{"startTime":27773.81,"name":"lh:audit:themed-omnibox","duration":1.04,"entryType":"measure"},{"startTime":27775.19,"name":"lh:audit:content-width","duration":0.74,"entryType":"measure"},{"startTime":27776.26,"name":"lh:audit:image-aspect-ratio","duration":1.64,"entryType":"measure"},{"startTime":27778.17,"name":"lh:audit:deprecations","duration":0.44,"entryType":"measure"},{"startTime":27778.85,"name":"lh:audit:mainthread-work-breakdown","duration":75.39,"entryType":"measure"},{"startTime":27779.12,"name":"lh:computed:MainThreadTasks","duration":68.81,"entryType":"measure"},{"startTime":27854.5,"name":"lh:audit:bootup-time","duration":8.78,"entryType":"measure"},{"startTime":27863.53,"name":"lh:audit:uses-rel-preload","duration":1.64,"entryType":"measure"},{"startTime":27863.89,"name":"lh:computed:LoadSimulator","duration":0.25,"entryType":"measure"},{"startTime":27865.37,"name":"lh:audit:uses-rel-preconnect","duration":0.87,"entryType":"measure"},{"startTime":27866.47,"name":"lh:audit:font-display","duration":5.39,"entryType":"measure"},{"startTime":27871.92,"name":"lh:audit:diagnostics","duration":1.82,"entryType":"measure"},{"startTime":27873.79,"name":"lh:audit:network-requests","duration":2.52,"entryType":"measure"},{"startTime":27876.69,"name":"lh:audit:network-rtt","duration":0.69,"entryType":"measure"},{"startTime":27877.58,"name":"lh:audit:network-server-latency","duration":0.5,"entryType":"measure"},{"startTime":27878.13,"name":"lh:audit:main-thread-tasks","duration":0.85,"entryType":"measure"},{"startTime":27879.04,"name":"lh:audit:metrics","duration":1.09,"entryType":"measure"},{"startTime":27879.38,"name":"lh:computed:LargestContentfulPaint","duration":0.11,"entryType":"measure"},{"startTime":27880.37,"name":"lh:audit:offline-start-url","duration":0.37,"entryType":"measure"},{"startTime":27880.92,"name":"lh:audit:performance-budget","duration":3.2,"entryType":"measure"},{"startTime":27881.15,"name":"lh:computed:ResourceSummary","duration":2.82,"entryType":"measure"},{"startTime":27884.33,"name":"lh:audit:resource-summary","duration":0.57,"entryType":"measure"},{"startTime":27885.11,"name":"lh:audit:third-party-summary","duration":67.68,"entryType":"measure"},{"startTime":27953.07,"name":"lh:audit:pwa-cross-browser","duration":0.28,"entryType":"measure"},{"startTime":27953.64,"name":"lh:audit:pwa-page-transitions","duration":0.21,"entryType":"measure"},{"startTime":27954.04,"name":"lh:audit:pwa-each-page-has-url","duration":0.21,"entryType":"measure"},{"startTime":27954.45,"name":"lh:audit:accesskeys","duration":0.81,"entryType":"measure"},{"startTime":27955.47,"name":"lh:audit:aria-allowed-attr","duration":0.65,"entryType":"measure"},{"startTime":27956.33,"name":"lh:audit:aria-required-attr","duration":0.66,"entryType":"measure"},{"startTime":27957.28,"name":"lh:audit:aria-required-children","duration":1.27,"entryType":"measure"},{"startTime":27959.08,"name":"lh:audit:aria-required-parent","duration":0.97,"entryType":"measure"},{"startTime":27960.39,"name":"lh:audit:aria-roles","duration":0.81,"entryType":"measure"},{"startTime":27961.48,"name":"lh:audit:aria-valid-attr-value","duration":0.68,"entryType":"measure"},{"startTime":27962.38,"name":"lh:audit:aria-valid-attr","duration":1.81,"entryType":"measure"},{"startTime":27964.44,"name":"lh:audit:audio-caption","duration":0.45,"entryType":"measure"},{"startTime":27965.13,"name":"lh:audit:button-name","duration":0.65,"entryType":"measure"},{"startTime":27966.01,"name":"lh:audit:bypass","duration":0.65,"entryType":"measure"},{"startTime":27966.89,"name":"lh:audit:color-contrast","duration":0.66,"entryType":"measure"},{"startTime":27967.81,"name":"lh:audit:definition-list","duration":0.28,"entryType":"measure"},{"startTime":27968.3,"name":"lh:audit:dlitem","duration":0.3,"entryType":"measure"},{"startTime":27968.79,"name":"lh:audit:document-title","duration":0.63,"entryType":"measure"},{"startTime":27969.67,"name":"lh:audit:duplicate-id","duration":0.77,"entryType":"measure"},{"startTime":27970.67,"name":"lh:audit:frame-title","duration":0.59,"entryType":"measure"},{"startTime":27971.46,"name":"lh:audit:html-has-lang","duration":0.64,"entryType":"measure"},{"startTime":27972.32,"name":"lh:audit:html-lang-valid","duration":0.65,"entryType":"measure"},{"startTime":27973.18,"name":"lh:audit:image-alt","duration":1.37,"entryType":"measure"},{"startTime":27975.19,"name":"lh:audit:input-image-alt","duration":0.38,"entryType":"measure"},{"startTime":27976.02,"name":"lh:audit:label","duration":0.84,"entryType":"measure"},{"startTime":27977.23,"name":"lh:audit:layout-table","duration":0.35,"entryType":"measure"},{"startTime":27977.79,"name":"lh:audit:link-name","duration":0.65,"entryType":"measure"},{"startTime":27978.69,"name":"lh:audit:list","duration":0.54,"entryType":"measure"},{"startTime":27979.46,"name":"lh:audit:listitem","duration":0.63,"entryType":"measure"},{"startTime":27980.3,"name":"lh:audit:meta-refresh","duration":0.77,"entryType":"measure"},{"startTime":27981.39,"name":"lh:audit:meta-viewport","duration":0.37,"entryType":"measure"},{"startTime":27982.04,"name":"lh:audit:object-alt","duration":0.58,"entryType":"measure"},{"startTime":27982.83,"name":"lh:audit:tabindex","duration":0.57,"entryType":"measure"},{"startTime":27983.66,"name":"lh:audit:td-headers-attr","duration":0.35,"entryType":"measure"},{"startTime":27984.24,"name":"lh:audit:th-has-data-cells","duration":0.37,"entryType":"measure"},{"startTime":27984.8,"name":"lh:audit:valid-lang","duration":0.38,"entryType":"measure"},{"startTime":27985.38,"name":"lh:audit:video-caption","duration":0.39,"entryType":"measure"},{"startTime":27985.98,"name":"lh:audit:video-description","duration":0.41,"entryType":"measure"},{"startTime":27986.46,"name":"lh:audit:custom-controls-labels","duration":0.1,"entryType":"measure"},{"startTime":27986.6,"name":"lh:audit:custom-controls-roles","duration":0.09,"entryType":"measure"},{"startTime":27986.73,"name":"lh:audit:focus-traps","duration":0.13,"entryType":"measure"},{"startTime":27986.93,"name":"lh:audit:focusable-controls","duration":0.09,"entryType":"measure"},{"startTime":27987.07,"name":"lh:audit:heading-levels","duration":0.08,"entryType":"measure"},{"startTime":27987.2,"name":"lh:audit:interactive-element-affordance","duration":0.08,"entryType":"measure"},{"startTime":27987.32,"name":"lh:audit:logical-tab-order","duration":0.08,"entryType":"measure"},{"startTime":27987.44,"name":"lh:audit:managed-focus","duration":0.08,"entryType":"measure"},{"startTime":27987.55,"name":"lh:audit:offscreen-content-hidden","duration":0.13,"entryType":"measure"},{"startTime":27987.73,"name":"lh:audit:use-landmarks","duration":0.07,"entryType":"measure"},{"startTime":27987.85,"name":"lh:audit:visual-order-follows-dom","duration":0.06,"entryType":"measure"},{"startTime":27988.82,"name":"lh:audit:uses-long-cache-ttl","duration":6.62,"entryType":"measure"},{"startTime":27995.76,"name":"lh:audit:total-byte-weight","duration":0.77,"entryType":"measure"},{"startTime":27996.72,"name":"lh:audit:offscreen-images","duration":17.83,"entryType":"measure"},{"startTime":28014.79,"name":"lh:audit:render-blocking-resources","duration":17.13,"entryType":"measure"},{"startTime":28025.54,"name":"lh:computed:FirstContentfulPaint","duration":4.68,"entryType":"measure"},{"startTime":28025.89,"name":"lh:computed:LanternFirstContentfulPaint","duration":4.29,"entryType":"measure"},{"startTime":28032.12,"name":"lh:audit:unminified-css","duration":95.19,"entryType":"measure"},{"startTime":28127.7,"name":"lh:audit:unminified-javascript","duration":35.34,"entryType":"measure"},{"startTime":28163.22,"name":"lh:audit:unused-css-rules","duration":14.79,"entryType":"measure"},{"startTime":28178.27,"name":"lh:audit:uses-webp-images","duration":10.08,"entryType":"measure"},{"startTime":28188.62,"name":"lh:audit:uses-optimized-images","duration":13.82,"entryType":"measure"},{"startTime":28202.72,"name":"lh:audit:uses-text-compression","duration":11.51,"entryType":"measure"},{"startTime":28214.49,"name":"lh:audit:uses-responsive-images","duration":9.07,"entryType":"measure"},{"startTime":28223.84,"name":"lh:audit:efficient-animated-content","duration":9.49,"entryType":"measure"},{"startTime":28233.59,"name":"lh:audit:appcache-manifest","duration":0.32,"entryType":"measure"},{"startTime":28234.09,"name":"lh:audit:doctype","duration":0.28,"entryType":"measure"},{"startTime":28234.58,"name":"lh:audit:dom-size","duration":0.65,"entryType":"measure"},{"startTime":28235.43,"name":"lh:audit:external-anchors-use-rel-noopener","duration":1,"entryType":"measure"},{"startTime":28236.66,"name":"lh:audit:geolocation-on-start","duration":0.39,"entryType":"measure"},{"startTime":28237.23,"name":"lh:audit:no-document-write","duration":0.32,"entryType":"measure"},{"startTime":28237.78,"name":"lh:audit:no-vulnerable-libraries","duration":4.66,"entryType":"measure"},{"startTime":28242.7,"name":"lh:audit:js-libraries","duration":0.69,"entryType":"measure"},{"startTime":28243.7,"name":"lh:audit:notification-on-start","duration":0.51,"entryType":"measure"},{"startTime":28244.45,"name":"lh:audit:password-inputs-can-be-pasted-into","duration":0.37,"entryType":"measure"},{"startTime":28245.03,"name":"lh:audit:uses-http2","duration":0.89,"entryType":"measure"},{"startTime":28246.14,"name":"lh:audit:uses-passive-event-listeners","duration":0.39,"entryType":"measure"},{"startTime":28246.73,"name":"lh:audit:meta-description","duration":0.28,"entryType":"measure"},{"startTime":28247.21,"name":"lh:audit:http-status-code","duration":0.31,"entryType":"measure"},{"startTime":28247.7,"name":"lh:audit:font-size","duration":0.39,"entryType":"measure"},{"startTime":28248.28,"name":"lh:audit:link-text","duration":2.92,"entryType":"measure"},{"startTime":28251.61,"name":"lh:audit:is-crawlable","duration":2.53,"entryType":"measure"},{"startTime":28254.43,"name":"lh:audit:robots-txt","duration":0.72,"entryType":"measure"},{"startTime":28255.54,"name":"lh:audit:tap-targets","duration":0.48,"entryType":"measure"},{"startTime":28256.26,"name":"lh:audit:hreflang","duration":0.71,"entryType":"measure"},{"startTime":28258.22,"name":"lh:audit:plugins","duration":2.12,"entryType":"measure"},{"startTime":28260.97,"name":"lh:audit:canonical","duration":1.12,"entryType":"measure"},{"startTime":28262.32,"name":"lh:audit:structured-data","duration":0.5,"entryType":"measure"},{"startTime":28262.87,"name":"lh:runner:generate","duration":0.97,"entryType":"measure"}],"total":26780.01},"i18n":{"rendererFormattedStrings":{},"icuMessagePaths":{"lighthouse-core/audits/bootup-time.js | chromeExtensionsWarning":["runWarnings[0]"],"lighthouse-core/audits/is-on-https.js | title":["audits[is-on-https].title"],"lighthouse-core/audits/is-on-https.js | description":["audits[is-on-https].description"],"lighthouse-core/audits/redirects-http.js | title":["audits[redirects-http].title"],"lighthouse-core/audits/redirects-http.js | description":["audits[redirects-http].description"],"lighthouse-core/audits/service-worker.js | failureTitle":["audits[service-worker].title"],"lighthouse-core/audits/service-worker.js | description":["audits[service-worker].description"],"lighthouse-core/audits/service-worker.js | explanationNoManifest":["audits[service-worker].explanation"],"lighthouse-core/audits/works-offline.js | failureTitle":["audits[works-offline].title"],"lighthouse-core/audits/works-offline.js | description":["audits[works-offline].description"],"lighthouse-core/audits/viewport.js | failureTitle":["audits.viewport.title"],"lighthouse-core/audits/viewport.js | description":["audits.viewport.description"],"lighthouse-core/audits/viewport.js | explanationNoTag":["audits.viewport.explanation"],"lighthouse-core/audits/without-javascript.js | title":["audits[without-javascript].title"],"lighthouse-core/audits/without-javascript.js | description":["audits[without-javascript].description"],"lighthouse-core/audits/metrics/first-contentful-paint.js | title":["audits[first-contentful-paint].title"],"lighthouse-core/audits/metrics/first-contentful-paint.js | description":["audits[first-contentful-paint].description"],"lighthouse-core/lib/i18n/i18n.js | seconds":[{"values":{"timeInMs":9626.805},"path":"audits[first-contentful-paint].displayValue"},{"values":{"timeInMs":10680.805},"path":"audits[first-meaningful-paint].displayValue"},{"values":{"timeInMs":17725.168572393733},"path":"audits[speed-index].displayValue"},{"values":{"timeInMs":13669.61},"path":"audits[first-cpu-idle].displayValue"},{"values":{"timeInMs":20508.207500000004},"path":"audits.interactive.displayValue"},{"values":{"timeInMs":13629.219999999907},"path":"audits[mainthread-work-breakdown].displayValue"},{"values":{"timeInMs":2943.8799999999997},"path":"audits[bootup-time].displayValue"}],"lighthouse-core/audits/metrics/first-meaningful-paint.js | title":["audits[first-meaningful-paint].title"],"lighthouse-core/audits/metrics/first-meaningful-paint.js | description":["audits[first-meaningful-paint].description"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | failureTitle":["audits[load-fast-enough-for-pwa].title"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | description":["audits[load-fast-enough-for-pwa].description"],"lighthouse-core/audits/load-fast-enough-for-pwa.js | displayValueText":[{"values":{"timeInMs":20508.207500000004},"path":"audits[load-fast-enough-for-pwa].displayValue"}],"lighthouse-core/audits/load-fast-enough-for-pwa.js | explanationLoadSlow":["audits[load-fast-enough-for-pwa].explanation"],"lighthouse-core/audits/metrics/speed-index.js | title":["audits[speed-index].title"],"lighthouse-core/audits/metrics/speed-index.js | description":["audits[speed-index].description"],"lighthouse-core/audits/metrics/estimated-input-latency.js | title":["audits[estimated-input-latency].title"],"lighthouse-core/audits/metrics/estimated-input-latency.js | description":["audits[estimated-input-latency].description"],"lighthouse-core/lib/i18n/i18n.js | ms":[{"values":{"timeInMs":387.20000000000005},"path":"audits[estimated-input-latency].displayValue"},{"values":{"timeInMs":2011.5},"path":"audits[total-blocking-time].displayValue"},{"values":{"timeInMs":968},"path":"audits[max-potential-fid].displayValue"},{"values":{"timeInMs":42.01899999999999},"path":"audits[network-rtt].displayValue"},{"values":{"timeInMs":4073.526},"path":"audits[network-server-latency].displayValue"}],"lighthouse-core/audits/metrics/total-blocking-time.js | title":["audits[total-blocking-time].title"],"lighthouse-core/audits/metrics/total-blocking-time.js | description":["audits[total-blocking-time].description"],"lighthouse-core/audits/metrics/max-potential-fid.js | title":["audits[max-potential-fid].title"],"lighthouse-core/audits/metrics/max-potential-fid.js | description":["audits[max-potential-fid].description"],"lighthouse-core/audits/errors-in-console.js | failureTitle":["audits[errors-in-console].title"],"lighthouse-core/audits/errors-in-console.js | description":["audits[errors-in-console].description"],"lighthouse-core/lib/i18n/i18n.js | columnURL":["audits[errors-in-console].details.headings[0].text","audits[bootup-time].details.headings[0].text","audits[uses-rel-preconnect].details.headings[0].label","audits[font-display].details.headings[0].text","audits[network-rtt].details.headings[0].text","audits[network-server-latency].details.headings[0].text","audits[uses-long-cache-ttl].details.headings[0].text","audits[total-byte-weight].details.headings[0].text","audits[offscreen-images].details.headings[1].label","audits[render-blocking-resources].details.headings[0].label","audits[unused-css-rules].details.headings[0].label","audits[uses-passive-event-listeners].details.headings[0].text"],"lighthouse-core/audits/errors-in-console.js | columnDesc":["audits[errors-in-console].details.headings[1].text"],"lighthouse-core/audits/time-to-first-byte.js | title":["audits[time-to-first-byte].title"],"lighthouse-core/audits/time-to-first-byte.js | description":["audits[time-to-first-byte].description"],"lighthouse-core/audits/time-to-first-byte.js | displayValue":[{"values":{"timeInMs":351.509},"path":"audits[time-to-first-byte].displayValue"}],"lighthouse-core/audits/metrics/first-cpu-idle.js | title":["audits[first-cpu-idle].title"],"lighthouse-core/audits/metrics/first-cpu-idle.js | description":["audits[first-cpu-idle].description"],"lighthouse-core/audits/metrics/interactive.js | title":["audits.interactive.title"],"lighthouse-core/audits/metrics/interactive.js | description":["audits.interactive.description"],"lighthouse-core/audits/user-timings.js | title":["audits[user-timings].title"],"lighthouse-core/audits/user-timings.js | description":["audits[user-timings].description"],"lighthouse-core/audits/critical-request-chains.js | title":["audits[critical-request-chains].title"],"lighthouse-core/audits/critical-request-chains.js | description":["audits[critical-request-chains].description"],"lighthouse-core/audits/critical-request-chains.js | displayValue":[{"values":{"itemCount":45},"path":"audits[critical-request-chains].displayValue"}],"lighthouse-core/audits/redirects.js | title":["audits.redirects.title"],"lighthouse-core/audits/redirects.js | description":["audits.redirects.description"],"lighthouse-core/audits/installable-manifest.js | failureTitle":["audits[installable-manifest].title"],"lighthouse-core/audits/installable-manifest.js | description":["audits[installable-manifest].description"],"lighthouse-core/audits/apple-touch-icon.js | title":["audits[apple-touch-icon].title"],"lighthouse-core/audits/apple-touch-icon.js | description":["audits[apple-touch-icon].description"],"lighthouse-core/audits/splash-screen.js | failureTitle":["audits[splash-screen].title"],"lighthouse-core/audits/splash-screen.js | description":["audits[splash-screen].description"],"lighthouse-core/audits/themed-omnibox.js | failureTitle":["audits[themed-omnibox].title"],"lighthouse-core/audits/themed-omnibox.js | description":["audits[themed-omnibox].description"],"lighthouse-core/audits/content-width.js | title":["audits[content-width].title"],"lighthouse-core/audits/content-width.js | description":["audits[content-width].description"],"lighthouse-core/audits/image-aspect-ratio.js | title":["audits[image-aspect-ratio].title"],"lighthouse-core/audits/image-aspect-ratio.js | description":["audits[image-aspect-ratio].description"],"lighthouse-core/audits/deprecations.js | title":["audits.deprecations.title"],"lighthouse-core/audits/deprecations.js | description":["audits.deprecations.description"],"lighthouse-core/audits/mainthread-work-breakdown.js | failureTitle":["audits[mainthread-work-breakdown].title"],"lighthouse-core/audits/mainthread-work-breakdown.js | description":["audits[mainthread-work-breakdown].description"],"lighthouse-core/audits/mainthread-work-breakdown.js | columnCategory":["audits[mainthread-work-breakdown].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnTimeSpent":["audits[mainthread-work-breakdown].details.headings[1].text","audits[network-rtt].details.headings[1].text","audits[network-server-latency].details.headings[1].text"],"lighthouse-core/audits/bootup-time.js | failureTitle":["audits[bootup-time].title"],"lighthouse-core/audits/bootup-time.js | description":["audits[bootup-time].description"],"lighthouse-core/audits/bootup-time.js | columnTotal":["audits[bootup-time].details.headings[1].text"],"lighthouse-core/audits/bootup-time.js | columnScriptEval":["audits[bootup-time].details.headings[2].text"],"lighthouse-core/audits/bootup-time.js | columnScriptParse":["audits[bootup-time].details.headings[3].text"],"lighthouse-core/audits/uses-rel-preload.js | title":["audits[uses-rel-preload].title"],"lighthouse-core/audits/uses-rel-preload.js | description":["audits[uses-rel-preload].description"],"lighthouse-core/audits/uses-rel-preconnect.js | title":["audits[uses-rel-preconnect].title"],"lighthouse-core/audits/uses-rel-preconnect.js | description":["audits[uses-rel-preconnect].description"],"lighthouse-core/lib/i18n/i18n.js | displayValueMsSavings":[{"values":{"wastedMs":370.31399999999996},"path":"audits[uses-rel-preconnect].displayValue"},{"values":{"wastedMs":7162},"path":"audits[render-blocking-resources].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnWastedBytes":["audits[uses-rel-preconnect].details.headings[1].label","audits[font-display].details.headings[1].text","audits[offscreen-images].details.headings[3].label","audits[render-blocking-resources].details.headings[2].label","audits[unused-css-rules].details.headings[2].label"],"lighthouse-core/audits/font-display.js | failureTitle":["audits[font-display].title"],"lighthouse-core/audits/font-display.js | description":["audits[font-display].description"],"lighthouse-core/audits/network-rtt.js | title":["audits[network-rtt].title"],"lighthouse-core/audits/network-rtt.js | description":["audits[network-rtt].description"],"lighthouse-core/audits/network-server-latency.js | title":["audits[network-server-latency].title"],"lighthouse-core/audits/network-server-latency.js | description":["audits[network-server-latency].description"],"lighthouse-core/audits/offline-start-url.js | failureTitle":["audits[offline-start-url].title"],"lighthouse-core/audits/offline-start-url.js | description":["audits[offline-start-url].description"],"lighthouse-core/audits/performance-budget.js | title":["audits[performance-budget].title"],"lighthouse-core/audits/performance-budget.js | description":["audits[performance-budget].description"],"lighthouse-core/audits/resource-summary.js | title":["audits[resource-summary].title"],"lighthouse-core/audits/resource-summary.js | description":["audits[resource-summary].description"],"lighthouse-core/audits/resource-summary.js | displayValue":[{"values":{"requestCount":239,"byteCount":3730263},"path":"audits[resource-summary].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnResourceType":["audits[resource-summary].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnRequests":["audits[resource-summary].details.headings[1].text"],"lighthouse-core/lib/i18n/i18n.js | columnTransferSize":["audits[resource-summary].details.headings[2].text"],"lighthouse-core/lib/i18n/i18n.js | totalResourceType":["audits[resource-summary].details.items[0].label"],"lighthouse-core/lib/i18n/i18n.js | imageResourceType":["audits[resource-summary].details.items[1].label"],"lighthouse-core/lib/i18n/i18n.js | scriptResourceType":["audits[resource-summary].details.items[2].label"],"lighthouse-core/lib/i18n/i18n.js | stylesheetResourceType":["audits[resource-summary].details.items[3].label"],"lighthouse-core/lib/i18n/i18n.js | mediaResourceType":["audits[resource-summary].details.items[4].label"],"lighthouse-core/lib/i18n/i18n.js | otherResourceType":["audits[resource-summary].details.items[5].label"],"lighthouse-core/lib/i18n/i18n.js | documentResourceType":["audits[resource-summary].details.items[6].label"],"lighthouse-core/lib/i18n/i18n.js | fontResourceType":["audits[resource-summary].details.items[7].label"],"lighthouse-core/lib/i18n/i18n.js | thirdPartyResourceType":["audits[resource-summary].details.items[8].label"],"lighthouse-core/audits/third-party-summary.js | failureTitle":["audits[third-party-summary].title"],"lighthouse-core/audits/third-party-summary.js | description":["audits[third-party-summary].description"],"lighthouse-core/audits/third-party-summary.js | displayValue":[{"values":{"timeInMs":1520.6359999999997},"path":"audits[third-party-summary].displayValue"}],"lighthouse-core/audits/third-party-summary.js | columnThirdParty":["audits[third-party-summary].details.headings[0].text"],"lighthouse-core/lib/i18n/i18n.js | columnSize":["audits[third-party-summary].details.headings[1].text","audits[uses-long-cache-ttl].details.headings[2].text","audits[total-byte-weight].details.headings[1].text","audits[offscreen-images].details.headings[2].label","audits[render-blocking-resources].details.headings[1].label","audits[unused-css-rules].details.headings[1].label"],"lighthouse-core/audits/third-party-summary.js | columnBlockingTime":["audits[third-party-summary].details.headings[2].text"],"lighthouse-core/audits/manual/pwa-cross-browser.js | title":["audits[pwa-cross-browser].title"],"lighthouse-core/audits/manual/pwa-cross-browser.js | description":["audits[pwa-cross-browser].description"],"lighthouse-core/audits/manual/pwa-page-transitions.js | title":["audits[pwa-page-transitions].title"],"lighthouse-core/audits/manual/pwa-page-transitions.js | description":["audits[pwa-page-transitions].description"],"lighthouse-core/audits/manual/pwa-each-page-has-url.js | title":["audits[pwa-each-page-has-url].title"],"lighthouse-core/audits/manual/pwa-each-page-has-url.js | description":["audits[pwa-each-page-has-url].description"],"lighthouse-core/audits/accessibility/accesskeys.js | title":["audits.accesskeys.title"],"lighthouse-core/audits/accessibility/accesskeys.js | description":["audits.accesskeys.description"],"lighthouse-core/audits/accessibility/aria-allowed-attr.js | title":["audits[aria-allowed-attr].title"],"lighthouse-core/audits/accessibility/aria-allowed-attr.js | description":["audits[aria-allowed-attr].description"],"lighthouse-core/audits/accessibility/aria-required-attr.js | title":["audits[aria-required-attr].title"],"lighthouse-core/audits/accessibility/aria-required-attr.js | description":["audits[aria-required-attr].description"],"lighthouse-core/audits/accessibility/aria-required-children.js | title":["audits[aria-required-children].title"],"lighthouse-core/audits/accessibility/aria-required-children.js | description":["audits[aria-required-children].description"],"lighthouse-core/audits/accessibility/aria-required-parent.js | title":["audits[aria-required-parent].title"],"lighthouse-core/audits/accessibility/aria-required-parent.js | description":["audits[aria-required-parent].description"],"lighthouse-core/audits/accessibility/aria-roles.js | title":["audits[aria-roles].title"],"lighthouse-core/audits/accessibility/aria-roles.js | description":["audits[aria-roles].description"],"lighthouse-core/audits/accessibility/aria-valid-attr-value.js | title":["audits[aria-valid-attr-value].title"],"lighthouse-core/audits/accessibility/aria-valid-attr-value.js | description":["audits[aria-valid-attr-value].description"],"lighthouse-core/audits/accessibility/aria-valid-attr.js | title":["audits[aria-valid-attr].title"],"lighthouse-core/audits/accessibility/aria-valid-attr.js | description":["audits[aria-valid-attr].description"],"lighthouse-core/audits/accessibility/audio-caption.js | title":["audits[audio-caption].title"],"lighthouse-core/audits/accessibility/audio-caption.js | description":["audits[audio-caption].description"],"lighthouse-core/audits/accessibility/button-name.js | failureTitle":["audits[button-name].title"],"lighthouse-core/audits/accessibility/button-name.js | description":["audits[button-name].description"],"lighthouse-core/audits/accessibility/axe-audit.js | failingElementsHeader":["audits[button-name].details.headings[0].text","audits[color-contrast].details.headings[0].text","audits[frame-title].details.headings[0].text","audits[image-alt].details.headings[0].text","audits.label.details.headings[0].text","audits[link-name].details.headings[0].text","audits.list.details.headings[0].text","audits.listitem.details.headings[0].text","audits[object-alt].details.headings[0].text"],"lighthouse-core/audits/accessibility/bypass.js | title":["audits.bypass.title"],"lighthouse-core/audits/accessibility/bypass.js | description":["audits.bypass.description"],"lighthouse-core/audits/accessibility/color-contrast.js | failureTitle":["audits[color-contrast].title"],"lighthouse-core/audits/accessibility/color-contrast.js | description":["audits[color-contrast].description"],"lighthouse-core/audits/accessibility/definition-list.js | title":["audits[definition-list].title"],"lighthouse-core/audits/accessibility/definition-list.js | description":["audits[definition-list].description"],"lighthouse-core/audits/accessibility/dlitem.js | title":["audits.dlitem.title"],"lighthouse-core/audits/accessibility/dlitem.js | description":["audits.dlitem.description"],"lighthouse-core/audits/accessibility/document-title.js | title":["audits[document-title].title"],"lighthouse-core/audits/accessibility/document-title.js | description":["audits[document-title].description"],"lighthouse-core/audits/accessibility/duplicate-id.js | title":["audits[duplicate-id].title"],"lighthouse-core/audits/accessibility/duplicate-id.js | description":["audits[duplicate-id].description"],"lighthouse-core/audits/accessibility/frame-title.js | failureTitle":["audits[frame-title].title"],"lighthouse-core/audits/accessibility/frame-title.js | description":["audits[frame-title].description"],"lighthouse-core/audits/accessibility/html-has-lang.js | title":["audits[html-has-lang].title"],"lighthouse-core/audits/accessibility/html-has-lang.js | description":["audits[html-has-lang].description"],"lighthouse-core/audits/accessibility/html-lang-valid.js | title":["audits[html-lang-valid].title"],"lighthouse-core/audits/accessibility/html-lang-valid.js | description":["audits[html-lang-valid].description"],"lighthouse-core/audits/accessibility/image-alt.js | failureTitle":["audits[image-alt].title"],"lighthouse-core/audits/accessibility/image-alt.js | description":["audits[image-alt].description"],"lighthouse-core/audits/accessibility/input-image-alt.js | title":["audits[input-image-alt].title"],"lighthouse-core/audits/accessibility/input-image-alt.js | description":["audits[input-image-alt].description"],"lighthouse-core/audits/accessibility/label.js | failureTitle":["audits.label.title"],"lighthouse-core/audits/accessibility/label.js | description":["audits.label.description"],"lighthouse-core/audits/accessibility/layout-table.js | title":["audits[layout-table].title"],"lighthouse-core/audits/accessibility/layout-table.js | description":["audits[layout-table].description"],"lighthouse-core/audits/accessibility/link-name.js | failureTitle":["audits[link-name].title"],"lighthouse-core/audits/accessibility/link-name.js | description":["audits[link-name].description"],"lighthouse-core/audits/accessibility/list.js | failureTitle":["audits.list.title"],"lighthouse-core/audits/accessibility/list.js | description":["audits.list.description"],"lighthouse-core/audits/accessibility/listitem.js | failureTitle":["audits.listitem.title"],"lighthouse-core/audits/accessibility/listitem.js | description":["audits.listitem.description"],"lighthouse-core/audits/accessibility/meta-refresh.js | title":["audits[meta-refresh].title"],"lighthouse-core/audits/accessibility/meta-refresh.js | description":["audits[meta-refresh].description"],"lighthouse-core/audits/accessibility/meta-viewport.js | title":["audits[meta-viewport].title"],"lighthouse-core/audits/accessibility/meta-viewport.js | description":["audits[meta-viewport].description"],"lighthouse-core/audits/accessibility/object-alt.js | failureTitle":["audits[object-alt].title"],"lighthouse-core/audits/accessibility/object-alt.js | description":["audits[object-alt].description"],"lighthouse-core/audits/accessibility/tabindex.js | title":["audits.tabindex.title"],"lighthouse-core/audits/accessibility/tabindex.js | description":["audits.tabindex.description"],"lighthouse-core/audits/accessibility/td-headers-attr.js | title":["audits[td-headers-attr].title"],"lighthouse-core/audits/accessibility/td-headers-attr.js | description":["audits[td-headers-attr].description"],"lighthouse-core/audits/accessibility/th-has-data-cells.js | title":["audits[th-has-data-cells].title"],"lighthouse-core/audits/accessibility/th-has-data-cells.js | description":["audits[th-has-data-cells].description"],"lighthouse-core/audits/accessibility/valid-lang.js | title":["audits[valid-lang].title"],"lighthouse-core/audits/accessibility/valid-lang.js | description":["audits[valid-lang].description"],"lighthouse-core/audits/accessibility/video-caption.js | title":["audits[video-caption].title"],"lighthouse-core/audits/accessibility/video-caption.js | description":["audits[video-caption].description"],"lighthouse-core/audits/accessibility/video-description.js | title":["audits[video-description].title"],"lighthouse-core/audits/accessibility/video-description.js | description":["audits[video-description].description"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | failureTitle":["audits[uses-long-cache-ttl].title"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | description":["audits[uses-long-cache-ttl].description"],"lighthouse-core/audits/byte-efficiency/uses-long-cache-ttl.js | displayValue":[{"values":{"itemCount":186},"path":"audits[uses-long-cache-ttl].displayValue"}],"lighthouse-core/lib/i18n/i18n.js | columnCacheTTL":["audits[uses-long-cache-ttl].details.headings[1].text"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | failureTitle":["audits[total-byte-weight].title"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | description":["audits[total-byte-weight].description"],"lighthouse-core/audits/byte-efficiency/total-byte-weight.js | displayValue":[{"values":{"totalBytes":3730263},"path":"audits[total-byte-weight].displayValue"}],"lighthouse-core/audits/byte-efficiency/offscreen-images.js | title":["audits[offscreen-images].title"],"lighthouse-core/audits/byte-efficiency/offscreen-images.js | description":["audits[offscreen-images].description"],"lighthouse-core/lib/i18n/i18n.js | displayValueByteSavings":[{"values":{"wastedBytes":1479972},"path":"audits[offscreen-images].displayValue"},{"values":{"wastedBytes":440572},"path":"audits[unused-css-rules].displayValue"}],"lighthouse-core/audits/byte-efficiency/render-blocking-resources.js | title":["audits[render-blocking-resources].title"],"lighthouse-core/audits/byte-efficiency/render-blocking-resources.js | description":["audits[render-blocking-resources].description"],"lighthouse-core/audits/byte-efficiency/unminified-css.js | title":["audits[unminified-css].title"],"lighthouse-core/audits/byte-efficiency/unminified-css.js | description":["audits[unminified-css].description"],"lighthouse-core/audits/byte-efficiency/unminified-javascript.js | title":["audits[unminified-javascript].title"],"lighthouse-core/audits/byte-efficiency/unminified-javascript.js | description":["audits[unminified-javascript].description"],"lighthouse-core/audits/byte-efficiency/unused-css-rules.js | title":["audits[unused-css-rules].title"],"lighthouse-core/audits/byte-efficiency/unused-css-rules.js | description":["audits[unused-css-rules].description"],"lighthouse-core/audits/byte-efficiency/uses-webp-images.js | title":["audits[uses-webp-images].title"],"lighthouse-core/audits/byte-efficiency/uses-webp-images.js | description":["audits[uses-webp-images].description"],"lighthouse-core/audits/byte-efficiency/uses-optimized-images.js | title":["audits[uses-optimized-images].title"],"lighthouse-core/audits/byte-efficiency/uses-optimized-images.js | description":["audits[uses-optimized-images].description"],"lighthouse-core/audits/byte-efficiency/uses-text-compression.js | title":["audits[uses-text-compression].title"],"lighthouse-core/audits/byte-efficiency/uses-text-compression.js | description":["audits[uses-text-compression].description"],"lighthouse-core/audits/byte-efficiency/uses-responsive-images.js | title":["audits[uses-responsive-images].title"],"lighthouse-core/audits/byte-efficiency/uses-responsive-images.js | description":["audits[uses-responsive-images].description"],"lighthouse-core/audits/byte-efficiency/efficient-animated-content.js | title":["audits[efficient-animated-content].title"],"lighthouse-core/audits/byte-efficiency/efficient-animated-content.js | description":["audits[efficient-animated-content].description"],"lighthouse-core/audits/dobetterweb/appcache-manifest.js | title":["audits[appcache-manifest].title"],"lighthouse-core/audits/dobetterweb/appcache-manifest.js | description":["audits[appcache-manifest].description"],"lighthouse-core/audits/dobetterweb/doctype.js | title":["audits.doctype.title"],"lighthouse-core/audits/dobetterweb/doctype.js | description":["audits.doctype.description"],"lighthouse-core/audits/dobetterweb/dom-size.js | failureTitle":["audits[dom-size].title"],"lighthouse-core/audits/dobetterweb/dom-size.js | description":["audits[dom-size].description"],"lighthouse-core/audits/dobetterweb/dom-size.js | displayValue":[{"values":{"itemCount":5021},"path":"audits[dom-size].displayValue"}],"lighthouse-core/audits/dobetterweb/dom-size.js | columnStatistic":["audits[dom-size].details.headings[0].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | columnElement":["audits[dom-size].details.headings[1].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | columnValue":["audits[dom-size].details.headings[2].text"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMElements":["audits[dom-size].details.items[0].statistic"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMDepth":["audits[dom-size].details.items[1].statistic"],"lighthouse-core/audits/dobetterweb/dom-size.js | statisticDOMWidth":["audits[dom-size].details.items[2].statistic"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | title":["audits[external-anchors-use-rel-noopener].title"],"lighthouse-core/audits/dobetterweb/external-anchors-use-rel-noopener.js | description":["audits[external-anchors-use-rel-noopener].description"],"lighthouse-core/audits/dobetterweb/geolocation-on-start.js | title":["audits[geolocation-on-start].title"],"lighthouse-core/audits/dobetterweb/geolocation-on-start.js | description":["audits[geolocation-on-start].description"],"lighthouse-core/audits/dobetterweb/no-document-write.js | title":["audits[no-document-write].title"],"lighthouse-core/audits/dobetterweb/no-document-write.js | description":["audits[no-document-write].description"],"lighthouse-core/audits/dobetterweb/no-vulnerable-libraries.js | title":["audits[no-vulnerable-libraries].title"],"lighthouse-core/audits/dobetterweb/no-vulnerable-libraries.js | description":["audits[no-vulnerable-libraries].description"],"lighthouse-core/audits/dobetterweb/js-libraries.js | title":["audits[js-libraries].title"],"lighthouse-core/audits/dobetterweb/js-libraries.js | description":["audits[js-libraries].description"],"lighthouse-core/lib/i18n/i18n.js | columnName":["audits[js-libraries].details.headings[0].text"],"lighthouse-core/audits/dobetterweb/js-libraries.js | columnVersion":["audits[js-libraries].details.headings[1].text"],"lighthouse-core/audits/dobetterweb/notification-on-start.js | title":["audits[notification-on-start].title"],"lighthouse-core/audits/dobetterweb/notification-on-start.js | description":["audits[notification-on-start].description"],"lighthouse-core/audits/dobetterweb/password-inputs-can-be-pasted-into.js | title":["audits[password-inputs-can-be-pasted-into].title"],"lighthouse-core/audits/dobetterweb/password-inputs-can-be-pasted-into.js | description":["audits[password-inputs-can-be-pasted-into].description"],"lighthouse-core/audits/dobetterweb/uses-http2.js | title":["audits[uses-http2].title"],"lighthouse-core/audits/dobetterweb/uses-http2.js | description":["audits[uses-http2].description"],"lighthouse-core/audits/dobetterweb/uses-passive-event-listeners.js | failureTitle":["audits[uses-passive-event-listeners].title"],"lighthouse-core/audits/dobetterweb/uses-passive-event-listeners.js | description":["audits[uses-passive-event-listeners].description"],"lighthouse-core/lib/i18n/i18n.js | columnLocation":["audits[uses-passive-event-listeners].details.headings[1].text"],"lighthouse-core/audits/seo/meta-description.js | title":["audits[meta-description].title"],"lighthouse-core/audits/seo/meta-description.js | description":["audits[meta-description].description"],"lighthouse-core/audits/seo/http-status-code.js | title":["audits[http-status-code].title"],"lighthouse-core/audits/seo/http-status-code.js | description":["audits[http-status-code].description"],"lighthouse-core/audits/seo/font-size.js | title":["audits[font-size].title"],"lighthouse-core/audits/seo/font-size.js | description":["audits[font-size].description"],"lighthouse-core/audits/seo/link-text.js | title":["audits[link-text].title"],"lighthouse-core/audits/seo/link-text.js | description":["audits[link-text].description"],"lighthouse-core/audits/seo/is-crawlable.js | failureTitle":["audits[is-crawlable].title"],"lighthouse-core/audits/seo/is-crawlable.js | description":["audits[is-crawlable].description"],"lighthouse-core/audits/seo/robots-txt.js | title":["audits[robots-txt].title"],"lighthouse-core/audits/seo/robots-txt.js | description":["audits[robots-txt].description"],"lighthouse-core/audits/seo/tap-targets.js | title":["audits[tap-targets].title"],"lighthouse-core/audits/seo/tap-targets.js | description":["audits[tap-targets].description"],"lighthouse-core/audits/seo/hreflang.js | title":["audits.hreflang.title"],"lighthouse-core/audits/seo/hreflang.js | description":["audits.hreflang.description"],"lighthouse-core/audits/seo/plugins.js | title":["audits.plugins.title"],"lighthouse-core/audits/seo/plugins.js | description":["audits.plugins.description"],"lighthouse-core/audits/seo/canonical.js | title":["audits.canonical.title"],"lighthouse-core/audits/seo/canonical.js | description":["audits.canonical.description"],"lighthouse-core/audits/seo/manual/structured-data.js | title":["audits[structured-data].title"],"lighthouse-core/audits/seo/manual/structured-data.js | description":["audits[structured-data].description"],"lighthouse-core/config/default-config.js | performanceCategoryTitle":["categories.performance.title"],"lighthouse-core/config/default-config.js | a11yCategoryTitle":["categories.accessibility.title"],"lighthouse-core/config/default-config.js | a11yCategoryDescription":["categories.accessibility.description"],"lighthouse-core/config/default-config.js | a11yCategoryManualDescription":["categories.accessibility.manualDescription"],"lighthouse-core/config/default-config.js | bestPracticesCategoryTitle":["categories[best-practices].title"],"lighthouse-core/config/default-config.js | seoCategoryTitle":["categories.seo.title"],"lighthouse-core/config/default-config.js | seoCategoryDescription":["categories.seo.description"],"lighthouse-core/config/default-config.js | seoCategoryManualDescription":["categories.seo.manualDescription"],"lighthouse-core/config/default-config.js | pwaCategoryTitle":["categories.pwa.title"],"lighthouse-core/config/default-config.js | pwaCategoryDescription":["categories.pwa.description"],"lighthouse-core/config/default-config.js | pwaCategoryManualDescription":["categories.pwa.manualDescription"],"lighthouse-core/config/default-config.js | metricGroupTitle":["categoryGroups.metrics.title"],"lighthouse-core/config/default-config.js | loadOpportunitiesGroupTitle":["categoryGroups[load-opportunities].title"],"lighthouse-core/config/default-config.js | loadOpportunitiesGroupDescription":["categoryGroups[load-opportunities].description"],"lighthouse-core/config/default-config.js | budgetsGroupTitle":["categoryGroups.budgets.title"],"lighthouse-core/config/default-config.js | budgetsGroupDescription":["categoryGroups.budgets.description"],"lighthouse-core/config/default-config.js | diagnosticsGroupTitle":["categoryGroups.diagnostics.title"],"lighthouse-core/config/default-config.js | diagnosticsGroupDescription":["categoryGroups.diagnostics.description"],"lighthouse-core/config/default-config.js | pwaFastReliableGroupTitle":["categoryGroups[pwa-fast-reliable].title"],"lighthouse-core/config/default-config.js | pwaInstallableGroupTitle":["categoryGroups[pwa-installable].title"],"lighthouse-core/config/default-config.js | pwaOptimizedGroupTitle":["categoryGroups[pwa-optimized].title"],"lighthouse-core/config/default-config.js | a11yBestPracticesGroupTitle":["categoryGroups[a11y-best-practices].title"],"lighthouse-core/config/default-config.js | a11yBestPracticesGroupDescription":["categoryGroups[a11y-best-practices].description"],"lighthouse-core/config/default-config.js | a11yColorContrastGroupTitle":["categoryGroups[a11y-color-contrast].title"],"lighthouse-core/config/default-config.js | a11yColorContrastGroupDescription":["categoryGroups[a11y-color-contrast].description"],"lighthouse-core/config/default-config.js | a11yNamesLabelsGroupTitle":["categoryGroups[a11y-names-labels].title"],"lighthouse-core/config/default-config.js | a11yNamesLabelsGroupDescription":["categoryGroups[a11y-names-labels].description"],"lighthouse-core/config/default-config.js | a11yNavigationGroupTitle":["categoryGroups[a11y-navigation].title"],"lighthouse-core/config/default-config.js | a11yNavigationGroupDescription":["categoryGroups[a11y-navigation].description"],"lighthouse-core/config/default-config.js | a11yAriaGroupTitle":["categoryGroups[a11y-aria].title"],"lighthouse-core/config/default-config.js | a11yAriaGroupDescription":["categoryGroups[a11y-aria].description"],"lighthouse-core/config/default-config.js | a11yLanguageGroupTitle":["categoryGroups[a11y-language].title"],"lighthouse-core/config/default-config.js | a11yLanguageGroupDescription":["categoryGroups[a11y-language].description"],"lighthouse-core/config/default-config.js | a11yAudioVideoGroupTitle":["categoryGroups[a11y-audio-video].title"],"lighthouse-core/config/default-config.js | a11yAudioVideoGroupDescription":["categoryGroups[a11y-audio-video].description"],"lighthouse-core/config/default-config.js | a11yTablesListsVideoGroupTitle":["categoryGroups[a11y-tables-lists].title"],"lighthouse-core/config/default-config.js | a11yTablesListsVideoGroupDescription":["categoryGroups[a11y-tables-lists].description"],"lighthouse-core/config/default-config.js | seoMobileGroupTitle":["categoryGroups[seo-mobile].title"],"lighthouse-core/config/default-config.js | seoMobileGroupDescription":["categoryGroups[seo-mobile].description"],"lighthouse-core/config/default-config.js | seoContentGroupTitle":["categoryGroups[seo-content].title"],"lighthouse-core/config/default-config.js | seoContentGroupDescription":["categoryGroups[seo-content].description"],"lighthouse-core/config/default-config.js | seoCrawlingGroupTitle":["categoryGroups[seo-crawl].title"],"lighthouse-core/config/default-config.js | seoCrawlingGroupDescription":["categoryGroups[seo-crawl].description"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__METRICS":["categoryGroups[lighthouse-plugin-publisher-ads-metrics].title"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__ADS_PERFORMANCE":["categoryGroups[lighthouse-plugin-publisher-ads-ads-performance].title"],"node_modules/lighthouse-plugin-publisher-ads/messages/common-strings.js | GROUPS__ADS_BEST_PRACTICES":["categoryGroups[lighthouse-plugin-publisher-ads-ads-best-practices].title"],"stack-packs/packs/react.js | unminified_css":["stackPacks[0].descriptions[unminified-css]"],"stack-packs/packs/react.js | unminified_javascript":["stackPacks[0].descriptions[unminified-javascript]"],"stack-packs/packs/react.js | unused_javascript":["stackPacks[0].descriptions[unused-javascript]"],"stack-packs/packs/react.js | time_to_first_byte":["stackPacks[0].descriptions[time-to-first-byte]"],"stack-packs/packs/react.js | redirects":["stackPacks[0].descriptions.redirects"],"stack-packs/packs/react.js | user_timings":["stackPacks[0].descriptions[user-timings]"],"stack-packs/packs/react.js | dom_size":["stackPacks[0].descriptions[dom-size]"]}},"stackPacks":[{"id":"react","title":"React","iconDataURL":"data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 841.9 595.3\"%3E %3Cg fill=\"%2361DAFB\"%3E%3Cpath d=\"M666.3 296.5c0-32.5-40.7-63.3-103.1-82.4 14.4-63.6 8-114.2-20.2-130.4-6.5-3.8-14.1-5.6-22.4-5.6v22.3c4.6 0 8.3.9 11.4 2.6 13.6 7.8 19.5 37.5 14.9 75.7-1.1 9.4-2.9 19.3-5.1 29.4-19.6-4.8-41-8.5-63.5-10.9-13.5-18.5-27.5-35.3-41.6-50 32.6-30.3 63.2-46.9 84-46.9V78c-27.5 0-63.5 19.6-99.9 53.6-36.4-33.8-72.4-53.2-99.9-53.2v22.3c20.7 0 51.4 16.5 84 46.6-14 14.7-28 31.4-41.3 49.9-22.6 2.4-44 6.1-63.6 11-2.3-10-4-19.7-5.2-29-4.7-38.2 1.1-67.9 14.6-75.8 3-1.8 6.9-2.6 11.5-2.6V78.5c-8.4 0-16 1.8-22.6 5.6-28.1 16.2-34.4 66.7-19.9 130.1-62.2 19.2-102.7 49.9-102.7 82.3 0 32.5 40.7 63.3 103.1 82.4-14.4 63.6-8 114.2 20.2 130.4 6.5 3.8 14.1 5.6 22.5 5.6 27.5 0 63.5-19.6 99.9-53.6 36.4 33.8 72.4 53.2 99.9 53.2 8.4 0 16-1.8 22.6-5.6 28.1-16.2 34.4-66.7 19.9-130.1 62-19.1 102.5-49.9 102.5-82.3zm-130.2-66.7c-3.7 12.9-8.3 26.2-13.5 39.5-4.1-8-8.4-16-13.1-24-4.6-8-9.5-15.8-14.4-23.4 14.2 2.1 27.9 4.7 41 7.9zm-45.8 106.5c-7.8 13.5-15.8 26.3-24.1 38.2-14.9 1.3-30 2-45.2 2-15.1 0-30.2-.7-45-1.9-8.3-11.9-16.4-24.6-24.2-38-7.6-13.1-14.5-26.4-20.8-39.8 6.2-13.4 13.2-26.8 20.7-39.9 7.8-13.5 15.8-26.3 24.1-38.2 14.9-1.3 30-2 45.2-2 15.1 0 30.2.7 45 1.9 8.3 11.9 16.4 24.6 24.2 38 7.6 13.1 14.5 26.4 20.8 39.8-6.3 13.4-13.2 26.8-20.7 39.9zm32.3-13c5.4 13.4 10 26.8 13.8 39.8-13.1 3.2-26.9 5.9-41.2 8 4.9-7.7 9.8-15.6 14.4-23.7 4.6-8 8.9-16.1 13-24.1zM421.2 430c-9.3-9.6-18.6-20.3-27.8-32 9 .4 18.2.7 27.5.7 9.4 0 18.7-.2 27.8-.7-9 11.7-18.3 22.4-27.5 32zm-74.4-58.9c-14.2-2.1-27.9-4.7-41-7.9 3.7-12.9 8.3-26.2 13.5-39.5 4.1 8 8.4 16 13.1 24 4.7 8 9.5 15.8 14.4 23.4zM420.7 163c9.3 9.6 18.6 20.3 27.8 32-9-.4-18.2-.7-27.5-.7-9.4 0-18.7.2-27.8.7 9-11.7 18.3-22.4 27.5-32zm-74 58.9c-4.9 7.7-9.8 15.6-14.4 23.7-4.6 8-8.9 16-13 24-5.4-13.4-10-26.8-13.8-39.8 13.1-3.1 26.9-5.8 41.2-7.9zm-90.5 125.2c-35.4-15.1-58.3-34.9-58.3-50.6 0-15.7 22.9-35.6 58.3-50.6 8.6-3.7 18-7 27.7-10.1 5.7 19.6 13.2 40 22.5 60.9-9.2 20.8-16.6 41.1-22.2 60.6-9.9-3.1-19.3-6.5-28-10.2zM310 490c-13.6-7.8-19.5-37.5-14.9-75.7 1.1-9.4 2.9-19.3 5.1-29.4 19.6 4.8 41 8.5 63.5 10.9 13.5 18.5 27.5 35.3 41.6 50-32.6 30.3-63.2 46.9-84 46.9-4.5-.1-8.3-1-11.3-2.7zm237.2-76.2c4.7 38.2-1.1 67.9-14.6 75.8-3 1.8-6.9 2.6-11.5 2.6-20.7 0-51.4-16.5-84-46.6 14-14.7 28-31.4 41.3-49.9 22.6-2.4 44-6.1 63.6-11 2.3 10.1 4.1 19.8 5.2 29.1zm38.5-66.7c-8.6 3.7-18 7-27.7 10.1-5.7-19.6-13.2-40-22.5-60.9 9.2-20.8 16.6-41.1 22.2-60.6 9.9 3.1 19.3 6.5 28.1 10.2 35.4 15.1 58.3 34.9 58.3 50.6-.1 15.7-23 35.6-58.4 50.6zM320.8 78.4z\"/%3E %3Ccircle cx=\"420.9\" cy=\"296.5\" r=\"45.7\"/%3E %3Cpath d=\"M520.5 78.1z\"/%3E%3C/g%3E%3C/svg%3E","descriptions":{"unminified-css":"If your build system minifies your CSS files automatically, ensure that you are deploying the production build of your application. You can check this with the React Developer Tools extension. [Learn more](https://reactjs.org/docs/optimizing-performance.html#use-the-production-build).","unminified-javascript":"If your build system minifies your JS files automatically, ensure that you are deploying the production build of your application. You can check this with the React Developer Tools extension. [Learn more](https://reactjs.org/docs/optimizing-performance.html#use-the-production-build).","unused-javascript":"If you are not server-side rendering, [split your JavaScript bundles](https://web.dev/code-splitting-suspense/) with `React.lazy()`. Otherwise, code-split using a third-party library such as [loadable-components](https://www.smooth-code.com/open-source/loadable-components/docs/getting-started/).","time-to-first-byte":"If you are server-side rendering any React components, consider using `renderToNodeStream()` or `renderToStaticNodeStream()` to allow the client to receive and hydrate different parts of the markup instead of all at once. [Learn more](https://reactjs.org/docs/react-dom-server.html#rendertonodestream).","redirects":"If you are using React Router, minimize usage of the `\u003cRedirect>` component for [route navigations](https://reacttraining.com/react-router/web/api/Redirect).","user-timings":"Use the React DevTools Profiler, which makes use of the Profiler API, to measure the rendering performance of your components. [Learn more.](https://reactjs.org/blog/2018/09/10/introducing-the-react-profiler.html)","dom-size":"Consider using a “windowing” library like `react-window` to minimize the number of DOM nodes created if you are rendering many repeated elements on the page. [Learn more](https://web.dev/virtualize-long-lists-react-window/). Also, minimize unecessary re-renders using [shouldComponentUpdate](https://reactjs.org/docs/optimizing-performance.html#shouldcomponentupdate-in-action), [PureComponent](https://reactjs.org/docs/react-api.html#reactpurecomponent), or [React.memo](https://reactjs.org/docs/react-api.html#reactmemo) and [skip effects](https://reactjs.org/docs/hooks-effect.html#tip-optimizing-performance-by-skipping-effects) only until certain dependencies have changed if you are using the Effect hook to improve runtime performance."}}]};</script>
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