Feature: Obliczenia

  Scenario: Pole prostokąta a*b
    Given I am on homepage
    When I follow "Pole by gosialeszczuk"
    And I fill in "a" with "3"
    And I fill in "b" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 12"