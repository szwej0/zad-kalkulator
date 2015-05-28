Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by kkleban"
    And I fill in "a" with "6"
    And I fill in "b" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 11"
