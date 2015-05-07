Feature: Obliczenia

  Scenario: Pole kwadratu
    Given I am on homepage
    When I follow "Pole kwadratu by gajdaw"
    And I fill in "A" with "3"
    And I press "Oblicz"
    Then I should see "Pole kwadratu wynosi: 9"
