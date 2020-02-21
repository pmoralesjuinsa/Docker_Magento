Feature: Practice Behat & Mink

#  @javascript
  Scenario: Go to Index of Pahero
    Given I am on "http://localhost/pahero/index/index"
    Then I should see "HOLA BLOQUE BLOCOSO!"