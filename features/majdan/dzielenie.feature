Feature: Obliczenia

  Scenario: Kalkulator t/x/y/z
    Given I am on homepage
    When I follow "Kalkulator by majdan"
    And I fill in "t" with "100"
    And I fill in "x" with "2"
    And I fill in "y" with "2"
    And I fill in "z" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 5"
