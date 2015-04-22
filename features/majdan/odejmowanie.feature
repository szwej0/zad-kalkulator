Feature: Obliczenia

  Scenario: Kalkulator x-y-z
    Given I am on homepage
    When I follow "Kalkulator by majdan"
    And I fill in "x" with "60"
    And I fill in "y" with "30"
    And I fill in "y" with "10"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 20"
