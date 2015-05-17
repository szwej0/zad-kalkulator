Feature: Obliczenia

  Scenario: Kalkulator x + y + z
    Given I am on homepage
    When I follow "Kalkulator by kamilstrzelecki"
    And I fill in "x" with "2"
    And I fill in "y" with "3"
    And I fill in "z" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 7"