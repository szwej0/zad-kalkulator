Feature: Obliczenia

  Scenario: Kalkulator x + y
    Given I am on homepage
    When I follow "Kalkulator by kamilstrzelecki"
    And I fill in "x" with "15"
    And I fill in "y" with "10"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 25"