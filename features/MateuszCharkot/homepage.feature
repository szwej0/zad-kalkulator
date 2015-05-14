Feature: Obliczenia

  Scenario: Pole Kwadratu a * a
    Given I am on homepage
    When I follow "PoleKwadratu by MateuszCharkot"
    And I fill in "a" with "2"
    And I fill in "b" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 4"