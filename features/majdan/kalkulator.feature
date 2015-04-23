Feature: Obliczenia

  Scenario: Kalkulator x + y
    Given I am on homepage
    When I follow "Kalkulator by majdan"
    And I fill in "x" with "1"
    And I fill in "y" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 3"
