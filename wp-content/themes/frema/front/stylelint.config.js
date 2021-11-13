module.exports = {
    processors: [],
    plugins: ['stylelint-scss'],
    extends: [
      "stylelint-config-recess-order"
    ],
    rules: {
      'no-empty-source': null,
      'at-rule-no-unknown': null,
      'scss/at-rule-no-unknown': true,
      "max-empty-lines": 1,
      "block-opening-brace-space-before": "always",
      "rule-empty-line-before": "always",
      "selector-attribute-quotes": "always",
      "declaration-colon-space-after": "always"
    },
    ignoreFiles: ['**/*.js', '**/_reset*', '**/_icons*', '**/vendor/*']
  };